@extends('layout.admin')

@section('content')
    <!-- Page Content -->
      <!--Bar chart Horizontal-->
      <div class="row">
            <div class="col-lg-12">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Bar Chart Horizontal Example</div>
                <div class="card-body">
  
              <div class="col-md-2"> PTI </div>
                <div class="col-md-12">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" 
                        aria-valuemax="100" style="width:70%"> 70% </div>
                    </div>
              </div>
              
              <br>
              <div class="col-md-2"> PPPP </div>
                <div class="col-md-12">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" 
                        aria-valuemax="100" style="width:40%"> 40% </div>
                    </div>
              </div>
  
              <br>
              <div class="col-md-2"> PMLN </div>
                <div class="col-md-12">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" 
                        aria-valuemax="100" style="width:60%"> 60% </div>
                    </div>
              </div>
  
              <br>
              <div class="col-md-2"> MQM </div>
                <div class="col-md-12">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" 
                        aria-valuemax="100" style="width:50%"> 50% </div>
                    </div>
              </div>
  
  
              <br>
              <div class="col-md-2"> PSP </div>
                <div class="col-md-12">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" 
                        aria-valuemax="100" style="width:10%"> 10% </div>
                    </div>
              </div>
  
              <br>
              <div class="col-md-2"> TLP </div>
                <div class="col-md-12">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" 
                        aria-valuemax="100" style="width:20%"> 20% </div>
                    </div>
              </div>
  
  
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
            </div>
          
          </div>
  
  
  
       <!--Bar chart and pie chart-->
          <div class="row">
            <div class="col-lg-8">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Bar Chart Example</div>
                <div class="card-body">
                  <canvas id="myBarChart" width="100%" height="50"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Pie Chart Example</div>
                <div class="card-body">
                  <canvas id="myPieChart" width="100%" height="100"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
            </div>
          </div>
  
  <!--END Bar chart and pie chart-->		 
       
  </div>
  <!-- /.container-fluid -->

  {{-- <script src="{{ url('./assets/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{ url('./assets/js/demo/chart-bar-demo.js')}}"></script>
  <script src="{{ url('./assets/js/demo/chart-pie-demo.js')}}"></script> --}}
  
    
@endsection