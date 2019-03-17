<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="./assets/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">

      @if ($error != '')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
           {{$error}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif

      <div class="card-header">Login</div>
      <div class="card-body">
        
        <form method='POST' action="admin/signup">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" value="" name="username" id="username" class="form-control" placeholder="User Name" required>
              <label for="username">User Name</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" value="" name="password" id="password" class="form-control" placeholder="Password" required> 
              <label for="password">Password</label> 
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" value="Login">
          
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="./assets/vendor/jquery/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="./assets/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
