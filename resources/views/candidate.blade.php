@extends('layout.admin')

@section('content')
    
    <!-- DataTables Example -->
    <div class="card mb-3">
            <div class="card-header">
            <i class="fas fa-table"></i>
            Candidate Data Table</div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>CANDIDATE_FIRST_NAME</th>
                        <th>CANDIDATE_LAST_NAME</th>
                        <th>CANDIDATE_PARTY</th>
                        <th>CANDIDATE_ELECTORAL_SIGN</th>
                        <th>NA_CONSTITUENCY</th>
                        <th>CANDIDATE_CNIC</th>
                        <th>CANDIDATE_GENDER</th>
                        <th>CANDIDATE_VOTES</th>
                        <th>PROVINCE</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Party</th>
                        <th>Electoral Sign</th>
                        <th>NA Constituency</th>
                        <th>CNIC</th>
                        <th>Gender</th>
                        <th>Candidate Votes</th>
                        <th>Province</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach($candidates as $candidate): ?>
                        <tr>
                            <td>{{ $candidate['CANDIDATE_FIRST_NAME'] }}</td>
                            <td>{{ $candidate['CANDIDATE_LAST_NAME'] }}</td>
                            <td>{{ $candidate['CANDIDATE_PARTY'] }}</td>
                            <td>{{ $candidate['CANDIDATE_ELECTORAL_SIGN'] }}</td>
                            <td>{{ $candidate['NA_CONSTITUENCY'] }}</td>
                            <td>{{ $candidate['CANDIDATE_CNIC'] }}</td>
                            <td>{{ $candidate['CANDIDATE_GENDER'] }}</td>
                            <td>{{ $candidate['CANDIDATE_VOTES'] }}</td>
                            <td>{{ $candidate['PROVINCE'] }}</td>
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