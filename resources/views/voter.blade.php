@extends('layout.admin')

@section('content')

    <!-- DataTables Example -->
    <div class="card mb-3"> 
        <div class="card-header">
          <i class="fas fa-table"></i>
          Voter Data Table </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Father Name</th>
                  <th>Address</th>
                  <th>Birth Date</th>
                  <th>Age</th>
                  <th>City</th>
                  <th>Province</th>
                  <th>Nationality</th>
                  <th>Gender</th>
                  <th>CNIC</th>
                  <th>NA_CONSTITUENCY</th>
                  <th>PS_CONSTITUENCY</th>
                  <th>Voted Flag</th>
                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Father Name</th>
                  <th>Address</th>
                  <th>Birth Date</th>
                  <th>Age</th>
                  <th>City</th>
                  <th>Province</th>
                  <th>Nationality</th>
                  <th>Gender</th>
                  <th>CNIC</th>
                  <th>NA_CONSTITUENCY</th>
                  <th>PS_CONSTITUENCY</th>
                  <th>Voted Flag</th>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach($voters as $voter): ?>
                  <tr>
                    <td>{{ $voter['FIRST_NAME'] }}</td>
                    <td>{{ $voter['LAST_NAME'] }}</td>
                    <td>{{ $voter['FATHER_NAME'] }}</td>
                    <td>{{ $voter['ADDRESS'] }}</td>
                    <td>{{ $voter['BIRTH_DATE'] }}</td>
                    <td>{{ $voter['AGE'] }}</td>
                    <td>{{ $voter['CITY'] }}</td>
                    <td>{{ $voter['PROVINCE'] }}</td>
                    <td>{{ $voter['NATIONALITY'] }}</td>
                    <td>{{ $voter['GENDER'] }}</td>
                    <td>{{ $voter['VOTER_CNIC'] }}</td>                    
                    <td>{{ $voter['NA_CONSTITUENCY'] }}</td>
                    <td>{{ $voter['PA_CONSTITUENCY'] }}</td>
                    <td>{{ $voter['VOTED'] }}</td>
                  </tr>
                <?php endforeach ?>
             
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

    </div>
    <!-- /.container-fluid -->
   
@endsection