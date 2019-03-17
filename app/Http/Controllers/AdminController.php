<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;


// Models
use App\Voter;
use App\Na_candidate;
use App\User;

class AdminController extends Controller
{
    public function login(Request $request){

        $error = '';
        if($request->session()->get($error)){
            $error = $request->session()->get($error);
        }

        return view('login')->with('error', $error);
    }
    public function signup(Request $request){

        $username = $request->input('username');
        $password = md5($request->input('password'));

        $user = User::where('USER_NAME',$username)->first();
        
        if($user){
            $userArr = array(
                'username' => $user['USER_NAME'],
                'password' => $user['USER_PASSWORD']
            );
            
            // Creating Session
            $request->session()->put('admin', $userArr);
            
            if($userArr['username'] == $username && $userArr['password'] == $password){

                // redirection
                return redirect()->action('AdminController@blank');
            }
        }
        else{
            $error = 'Invalid Admin Credentials';
            $request->session()->put('error', $error);
            return redirect()->action('AdminController@login');
        }
        
    }

    public function blank(Request $request){

        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');
        
        return view('blank');
    }

    public function profile(Request $request){
        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');

        return view('profile');
    }

    public function addCandidateForm(Request $request){
        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');

        return view('addCandidate');
    }

    public function addCandidate(Request $request){
        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');

        $candidate = new Na_candidate;

        $candidate->CANDIDATE_FIRST_NAME = $request->input('first_name');
        $candidate->CANDIDATE_LAST_NAME = $request->input('last_name');
        //$candidate->CANDIDATE_PARTY = $request->input('party');
        $candidate->NA_CONSTITUENCY = $request->input('na');
        $candidate->CANDIDATE_CNIC = $request->input('cnic');
        $candidate->CANDIDATE_GENDER = $request->input('gender');
        $candidate->PROVINCE = $request->input('state');

        if($candidate->save()){
            return redirect()->action('AdminController@candidate'); 
        }
    }

    public function candidate(Request $request){
        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');

        $candidates = Na_candidate::all();

        return view('candidate')->with('candidates', $candidates);
    }

    public function voter(Request $request){

        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');

        $voters = Voter::all();

        return view('voter')->with('voters', $voters);
    }

    public function addVoterForm(Request $request){

        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');

        return view('addVoter');
    }

    public function addVoter(Request $request){

        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');

        $voter = new Voter;

        $voter->FIRST_NAME = $request->input('first_name');
        $voter->LAST_NAME = $request->input('last_name');
        $voter->FATHER_NAME = $request->input('father_name');
        $voter->VOTER_CNIC = $request->input('cnic');
        $voter->ADDRESS = $request->input('address');
        $voter->BIRTH_DATE = $request->input('dob');
        $voter->AGE = $request->input('age');
        $voter->CITY = $request->input('city');
        $voter->PROVINCE = $request->input('state');
        $voter->NATIONALITY = $request->input('nationality');
        $voter->GENDER = $request->input('gender');
        $voter->NA_CONSTITUENCY = $request->input('na');
        $voter->PA_CONSTITUENCY = $request->input('ps');
        $voter->FINGERPRINT = $request->input('f_template');


        if($voter->save()){
            return redirect()->action('AdminController@voter'); 
        }
    }

    public function result(Request $request){

        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');

        return view('result');
    }

    public function logout(Request $request){
        
        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');
        
        // Destroying the session
        $request->session()->forget('admin');

        return redirect()->action('AdminController@login');
    }

    public function getBallotPaper(Request $request){
        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');

        return view('ballotPaper');
    }
    public function addBallotPaper(Request $request){
        if(!$request->session()->get('admin'))
            return redirect()->action('AdminController@login');

        if($request->hasFile('flag') && $request->hasFile('ElectFlag')){
            // Get filename with the extension
            $FlagNameWithExt = $request->file('flag')->getClientOriginalName();
            $ElectFlagNameWithExt = $request->file('ElectFlag')->getClientOriginalName();

            // Get just filename
            $FlagName = pathinfo($FlagNameWithExt, PATHINFO_FILENAME);
            $ElectFlagName = pathinfo($ElectFlagNameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $FlagExtension = $request->file('flag')->getClientOriginalExtension();
            $ElectFlagExtension = $request->file('ElectFlag')->getClientOriginalExtension();

            // Filename to store
            $flagNameToStore= $FlagName.'_'.time().'.'.$FlagExtension;
            $electFlagNameToStore= $ElectFlagName.'_'.time().'.'.$ElectFlagExtension;

            $request->file('flag');
            $request->file('ElectFlag');

            // Upload Image
            $FlagPath = $request->flag->store('public', $flagNameToStore);
            $ElectFlagPath = $request->ElectFlag->store('public', $electFlagNameToStore);
        }
        else{
            $flagNameToStore = 'noFile.jpg';
            $electFlagNameToStore = 'noFile.jpg';
        }

        // $candidate = new Na_candidate();

        // $candidate->

        // $candidate->save();

        $data = array(
            'flag' => $flagNameToStore,
            'electFlag' => $electFlagNameToStore,
            'partyName' => $request->input('partyName')
        );
        
        return $data;
    }


    // public function signUp(){
    //     $user = new User;
    //     $user->USER_ID = '1';
    //     $user->USER_NAME = 'admin';
    //     $user->USER_PASSWORD = mdf('admin');
    //     $user->USER_ROLE = 'admin';
    //     $user->save();

    //     return view('login')->with('success');
        
    // }
}
