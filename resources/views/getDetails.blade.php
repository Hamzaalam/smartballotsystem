@extends('layout.main')

@section('content')

      
<article id="home"><br>   
    <div style="margin-top: 30px"></div>     
        <div class="app-container app-login">
            <div class="flex-center">
                        
                <div class="app-body">
                    
                    <div class="app-block">
                        <div class="app-form">
                            <div class="form-header">
                                <div class="app-brand">VOTER DETAILS</div>
                            </div>
                            @if ($voter == 'default')
                                <h1 class="text-danger">Please Enter CNIC to view this page</h1>
                            @endif
                            @if ($voter != 'default')
                                
                            <table border="15" cellpadding="16" cellspacing="16">     
                                            
                                <tr>
                                <td>FIRST NAME</td>
                                <td>{{ $voter['firstName'] }}</td>
                                </tr>
    
                                <tr>
                                    <td>LAST NAME</td>
                                    <td>{{ $voter['lastName'] }}</td>     
                                </tr>
    
                                <tr>
                                    <td>FATHER NAME</td>
                                    <td>{{ $voter['fatherName'] }}</td>     
                                </tr>
    
                                <tr>
                                    <td>ADDRESS</td>
                                    <td>{{ $voter['address'] }}</td>    
                                </tr>
    
                                <tr>
                                    <td>CITY</td>
                                    <td>{{ $voter['city'] }}</td>      
                                </tr>
    
                                <tr>
                                    <td>AGE</td>
                                    <td>{{ $voter['age'] }}</td>      
                                </tr>
    
                                <tr>
                                    <td>DATE OF BIRTH</td>
                                    <td>{{ $voter['birthdate'] }}</td>      
                                </tr>
    
                                <tr>
                                    <td>GENDER</td>
                                    <td>{{ $voter['gender'] }}</td>
                                </tr>
    
                                <tr>
                                    <td>PROVINCE</td>
                                    <td>{{ $voter['province'] }}</td>      
                                </tr>
    
    
                                <tr>
                                    <td>COUNTRY OF STAY</td>
                                    <td>{{ $voter['country'] }}</td>      
                                </tr>
        
                                <tr>
                                    <td>IDENTITY NUMBER</td>
                                    <td>{{ $voter['cnic'] }}</td>
                                </tr>
    
                                <tr>
                                    <td>CONSTITUENT</td>
                                    <td>{{ $voter['naConst'] }}</td>
                                </tr>
        
                            </table>
        
                            <a href="{{url('/NABallot')}}" style="float: right; margin-top: 10px;"><input type="submit" name="next" class="btn btn-success btn-submit" value="Next"></a>
                            @endif
                        
                        </div>
        
                    </div>
                </div>
            </div>
                {{-- <div style="margin-bottom: 10px"></div>  --}}
        </div>
      
    </div>

    <footer id="footer">
            <div class="container">
                <p class="copyright"> Copyright &copy; Smart Ballot System</p>    
            </div>
        </footer><!-- **Footer - End** -->
      
</article>
