@extends('layout.main')

@section('content')
    <link rel="stylesheet" href="./assets/css/ballot.css">
    <!-- **Home Content** -->
    <article id="home" class="content"><br>

    <!--table start-->
    <table class="table">
        <thead>
            <tr>
            <th scope="col" style="text-align: center; font-size: 20px">FINGERPRINT IDENTIFICATION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="font-weight: bold; font-size: 20px;">Scan Your Finger</td>
            </tr>

            <tr>
            <td><img src="./assets/images/print.gif"></td>
            </tr>
        </tbody>
    </table>
    <!--table end-->
     <div >
     	<form>
     		<div class="flex-center">
     			<div class="app-body">
			        <div class="form-group">
			            <label for="exampleInputEmail1" style="color: black;">PERSON NAME:</label>
			            <input type="text" class="form-control" id="txtname" aria-describedby="basic-addon1" placeholder="PERSON NAME" required>
			    
			        </div>
			 
			        <button type="button" id="btnSuccess" class="btn btn-primary" onclick="goToDetails()">FINGER MATCHED</button>
			    </div>
		    </div>
		</form>  	 
     </div>                                                   
  </article><!-- **Home Content - End** -->
@endsection