@extends('layout.main')

@section('content')
<article id="home"><br>     
    <div class="app-container app-login">
         <div class="flex-center">
                  
            <div class="app-body">
                
                <div class="app-block">
                    <div class="app-form">
                      <div class="form-header">
                        <div class="app-brand">THANK YOU FOR VOTING</div><br>
                      </div>
                      <div style="text-align: center;"><img src="./assets/images/vote.jpg"></div>
                      <p style="text-align: center; color: grey; font-size: 30px">Smart Ballot System</p>
                      <div class="text-center">
                            <a onclick="goToHome()"><input type="submit" name="login" class="btn btn-success btn-submit" value="LOGOUT"></a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </article>

    <script>
      function goToHome(){
        location.href = root;
      }
    </script>
@endsection