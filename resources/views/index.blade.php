@extends('layout.main')

@section('content')
    <!-- **Main Section** -->
    <section id="main">
        
        <!-- **Home Content** -->
        <article id="home" class="content"><br>
    
            <div class="pattern">     
                <!-- **Container** -->   
                <div class="container">
                    <div style="margin-top: 50px"></div>
                    <hgroup class="main-title">
                        <h1> WELCOME TO SMART BALLOT</h1>
                        <h2> اسمارٹ بیلٹ سسٹم میں خوش آمدید  </h2>
                        <h1></h1>
                    </hgroup>
                        <div style="text-align: center;"><h3>انتخابی الیکشن کے لۓ نیچے ووٹ کے آئکن پر کلک کریں</h3></div>
                    <!-- **Work Flow Column** -->

                            <div class="rounded-icon">
                                <span><a href="{{url('cnic')}}"><img src="./assets/images/3.png" alt="" title="" /></a> </span>
                            </div>   
                            <h3 style="text-align: center;"> VOTE </h3>
                            <p style="text-align: center;"> Voters are required to provide their CNIC to start their Polling Process</p>
                    <!-- **Work Flow Column - End** -->
    
                
                </div> <!-- **Container - End** -->
                <div class="home-shadow"> </div>     
            </div>
        </article><!-- **Home Content - End** -->
        
        <!-- **Footer** -->
        <footer id="footer">
            <div class="container">
                <p class="copyright"> Copyright &copy; Smart Ballot System</p>
                <div class="social-share">
                    <a href="https://www.facebook.com/pages/Election-Commission-of-Pakistan/120114618034615" title="facebook" class="facebook"> </a> 
                    <a href="https://twitter.com/election_pak?lang=en" title="twitter" class="twitter"> </a>
                </div>      
            </div>
        </footer><!-- **Footer - End** -->


    </section><!-- **Main Section** -->     
@endsection