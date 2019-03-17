<?php 
    $rootURL = 'http://localhost/Smart_Ballot_System/public/';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Blank Page</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- Custom fonts for this template-->
  <link href="{{ url($rootURL . 'assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <link href="{{ url($rootURL . 'assets/css/profile.css')}}" rel="stylesheet">
  <!-- Page level plugin CSS-->
  <link href="{{ url($rootURL .'assets/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ url($rootURL . 'assets/css/sb-admin.css')}}" rel="stylesheet">

  <link href="{{ url($rootURL . 'assets/css/sb-admin-ballot-paper.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Smart Ballot System Panel</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  {{-- Sidebar starts --}}
  <div id="wrapper">
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/blank')}}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/userProfile')}}">
            <i class="fas fa-user"></i>
            <span>Profile</span>
            </a>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-folder"></i>
              <span>Pages</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <h6 class="dropdown-header">Login Screens:</h6>
              <a class="dropdown-item" href="login.php">Login</a>
              <a class="dropdown-item" href="register-voter.php">Register Voter</a>
              <a class="dropdown-item" href="register-candidate.php">Register Candidate</a>
              <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
              <a class="dropdown-item" href="result.php">Result</a>
              <a class="dropdown-item" href="user.php">User</a>
              <a class="dropdown-item" href="ballot-paper.php">Ballot Paper</a>
              <a class="dropdown-item" href="registered-voter.php">Registered Voter</a>
              <a class="dropdown-item" href="registered-candidate.php">Registered Candidate</a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Other Pages:</h6>
              <a class="dropdown-item" href="404.html">404 Page</a>
              <a class="dropdown-item active" href="blank.html">Blank Page</a>
            </div>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ url ('admin/result')}}">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Results</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url ('/admin/candidate/add')}}">
            <i class="far fa-address-card"></i>
              <span>Candidate Register</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url ('admin/candidates')}}">
            <i class="fas fa-fw fa-table"></i>
              <span>Candidate List</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" {{ url ('admin/voter/add')}}">
            <i class="far fa-address-card"></i>
              <span>Voter Register</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url ('admin/voters')}}">
              <i class="fas fa-fw fa-table"></i>
              <span>Voter List</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url ('admin/user')}}">
            <i class="fas fa-user"></i>
              <span>User</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url ('admin/ballotPaper')}}">
            <i class="fas fa-vote-yea"></i>
              <span>Ballot Paper</span></a>
          </li>
        </ul>
        
        <div id="content-wrapper">
    
        <div class="container-fluid">
    
    
      {{-- sidebar ends --}}

    @yield('content')

     <!-- Sticky Footer -->
 <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Smart Ballot System 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a href="{{url('/admin/logout')}}"><input type="submit" class="btn btn-primary" value="Logout"> </a>
          {{-- <a class="btn btn-primary" href="{{url('/admin')}}">Logout</a> --}}
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ url($rootURL . 'assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ url($rootURL . 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ url($rootURL . 'assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

   <!-- Page level plugin JavaScript-->
   <script src="{{ url($rootURL . 'assets/vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{ url($rootURL . 'assets/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ url($rootURL . 'assets/vendor/js/sb-admin.min.js')}}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{ url($rootURL . 'assets/vendor/js/demo/datatables-demo.js')}}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{ url($rootURL . 'assets/vendor/chart.js/Chart.min.js')}}"></script>
          
  <script src="{{ url($rootURL . 'assets/vendor/js/demo/chart-bar-demo.js')}}"></script>
  
  <script src="{{ url($rootURL . 'assets/vendor/js/demo/chart-pie-demo.js')}}"></script>

  <script src="{{ url($rootURL . 'assets/vendor/js/sb-admin-ballot-paper.js')}}"></script>

  <script src="{{ url($rootURL . 'assets/vendor/js/fingerprint-script.js')}}"></script>


</body>

</html>
