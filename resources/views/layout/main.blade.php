<!DOCTYPE html>
<html>
    <head>
        <title>Smart Ballot System</title>

        <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="./assets/css/styles.css">

        <link rel="stylesheet" href="./assets/css/blue.css">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/anamoly/responsive.css">
        <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="./assets/css/vendor.css">
        <link rel="stylesheet" href="./assets/css/flat-admin.css">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
        
        <script type="text/javascript">
            function isNumberKey(evt)
               {
                   var charCode = (evt.which) ? evt.which : evt.keyCode;
                   if (charCode != 46 && charCode > 31 
                   && (charCode < 48 || charCode > 57))
                   return false;
                   return true;
               } 
   
        </script>

        <script>
            const root = 'http://localhost/Smart_Ballot_System/public/';
        </script>
    </head>
    <body>
    
      @yield('content');
 
      @if ($showHeader)
        <div id="header1">
            <div class="container">
                <div id="logo" style="float:right; ">
                <a href="{{url('/')}}"> <img src="./assets/images/logo.png"/></a>
                </div>
            </div>
        </div>
      @endif
      
          
      <div id="header1">
          <div style="text-align: center; color: white; font-size: 30px; font-family: bold"></a>{{ $header }}</div>
      </div>  
  

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
      {{-- <script src="{{ url('/assets/vendor/js/fingerprint-script.js')}}"></script> --}}
      
    </body>
</html>
