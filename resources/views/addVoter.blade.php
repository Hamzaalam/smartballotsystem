@extends('layout.admin')

@section('content')
    <div class="card mb-3">
      <div class="card-header"><i class="far fa-address-card"></i> Register a Voter</div>
        <div class="card-body">
          
          <form action="addVoter" method="POST" class="form-horizontal form-label-left">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputFirstName">First Name</label>
                <input type="name" name="first_name"class="form-control" id="inputname" placeholder="First Name">
              </div>
              <div class="form-group col-md-6">
                <label for="inputLastName">Last Name</label>
                <input type="name" name="last_name" class="form-control" id="inputname" placeholder="Last Name">
              </div>
              <div class="form-group col-md-6">
                <label for="inputFatherName">Father Name</label>
                <input type="name" name="father_name" class="form-control" id="inputname" placeholder="Father Name">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Address 2</label>
              <input type="text" name="second_address" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            
            <!--Date of birth + Age + Gender-->
            <div class="form-row">
              <div class="well"> 
                <div class="form-group">
                <label for="DOB">Date of Birth</label>
                <input type="date" name="dob" class="form-control" id="inputDOB" placeholder="Date of Birth">
              </div>
            </div>
            <div class="well"> 
            </div>
            <div class="well"> 
            
              <div class="form-group col-md-6">
                  <label for="inputAge">Age</label>
                  <input type="" name="age" class="form-control" id="inputAge" placeholder="18+" min="18" max="150">
              </div>
            </div>
          
            <div class="form-group col-md-2">
                <label for="inputGender">Gender</label>
                <select name="gender" id="inputGender" class="form-control">
                  <option ></option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
            
              </div>
          
            </div>
          <!--!!!!END Date of birth + Age + Gender!!!!!-->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputNationality">Nationality</label>
                    <input type="name" name="nationality" class="form-control" id="inputNationality" placeholder="Nationality">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCNIC">CNIC</label>
                    <input type="name" name="cnic" class="form-control" id="inputCNIC" placeholder="XXXXX-XXXXXXX-X">
                </div>
            </div>
        
          <!-- NA & PS CONSTITUENCY-->
          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputNA">NA-CONSTITUENCY</label>
                <input type="name" name="na" class="form-control" id="inputNA" placeholder="NA-XXX">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPS">PS-CONSTITUENCY</label>
                <input type="name" name="ps" class="form-control" id="inputPS" placeholder="PS-XXX">
            </div>
          </div>
          <!--!!!!!END NA & PS CONSTITUENCY!!!!!-->
          
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" name="city" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">State</label>
              <select id="inputState" name="state" class="form-control">
                <option selected>Province/State</option>
                <option value="Sindh">Sindh</option>
                <option value="Punjab">Punjab</option>
                <option value="NWFP">NWFP</option>
                <option value="Balochistan">Balochistan</option>
                <option value="Gilgit">Gilgit Baltistan</option>
              </select>
            </div>
        
           
            </div>

            
            <div>
            <textarea name="f_template" id="f_template" cols="35" rows="11" style="display:none;" ></textarea>
            <img border="2" id="FPImage1" alt="Fingerpint Image" height=300 width=210 src=".\Images\PlaceFinger.bmp" > <br>

            <button type="button" class="btn btn-warning" onclick="CallSGIFPGetData(SuccessFunc1, ErrorFunc)">Scan Finger Print</button>   
            <button type="submit"  class="btn btn-primary btn-lg">Register</button>
          </div>  
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        </form>

        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
      </div>
    </div>
    
  
  
  </div>
  <!-- /.container-fluid -->
@endsection