@extends('layout.main')

@section('content')
    <link rel="stylesheet" href="./assets/css/ballot.css">
    <!-- **Home Content** -->
    <article id="home" class="content"><br>
    {{-- @if ($voter != 'default') --}}
    <form>
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
            <td><img border="2" id="FPImage1" alt="Fingerpint Image" height=400 width=300 src="./assets/images/print.gif"></td>
            </tr>
        </tbody>
    </table>
    <!--table end-->
     <div >
     	
     		<div class="flex-center">
     			<div class="app-body">
			        {{-- <div class="form-group">
			            <label for="exampleInputEmail1" style="color: black;">PERSON NAME:</label>
			            <input type="text" class="form-control" id="txtname" aria-describedby="basic-addon1" placeholder="PERSON NAME" required>
			    
                    </div> --}}
                    {{--Template coming from the data base--}}
                    <textarea name="f_template" id="f_template" cols="35" rows="11" ></textarea>
                    {{--Template coming from the user hand--}}
                    <textarea name="f_template2" id="f_template2" cols="35" rows="11" >{{ $voter['fingerPrint'] }}</textarea>
                    <button type="button" class="btn btn-warning" onclick="CallSGIFPGetData(SuccessFunc1, ErrorFunc)">Scan Finger Print</button>
                    <button type="button" id="btnSuccess" class="btn btn-primary" onclick="matchScore(succMatch, failureFunc)">FINGER MATCHE</button>
                    <button type="button" id="btnSuccess" class="btn btn-primary" onclick="redirect()">NEXT</button>
			    </div>
		    </div>
        </form>
        {{-- @endif  	  --}}
     </div>                                                   
  </article><!-- **Home Content - End** -->
  <script type="text/javascript">
    function ErrorCodeToString(ErrorCode) {
            var Description;
            switch (ErrorCode) {
                // 0 - 999 - Comes from SgFplib.h
                // 1,000 - 9,999 - SGIBioSrv errors 
                // 10,000 - 99,999 license errors
                case 51:
                    Description = "System file load failure";
                    break;
                case 52:
                    Description = "Sensor chip initialization failed";
                    break;
                case 53:
                    Description = "Device not found";
                    break;
                case 54:
                    Description = "Fingerprint image capture timeout";
                    break;
                case 55:
                    Description = "No device available";
                    break;
                case 56:
                    Description = "Driver load failed";
                    break;
                case 57:
                    Description = "Wrong Image";
                    break;
                case 58:
                    Description = "Lack of bandwidth";
                    break;
                case 59:
                    Description = "Device Busy";
                    break;
                case 60:
                    Description = "Cannot get serial number of the device";
                    break;
                case 61:
                    Description = "Unsupported device";
                    break;
                case 63:
                    Description = "SgiBioSrv didn't start; Try image capture again";
                    break;
                default:
                    Description = "Unknown error code or Update code to reflect latest result";
                    break;
            }
            return Description;
        }
    
    
    
    // var secugen_lic = "3tGZLzR+hRMuZByK9ZIcifPQtFysYqHoWHBa6EFhh4c=";
    var secugen_lic = "";
        function captureFP() {
        CallSGIFPGetData(SuccessFunc, ErrorFunc);
    }
    
    
    
        var template_1 = "";
        var template_2 = document.getElementById('f_template2').value;
    
        function SuccessFunc1(result) {
            if (result.ErrorCode == 0) {
                /* 	Display BMP data in image tag
                    BMP data is in base 64 format 
                */
                if (result != null && result.BMPBase64.length > 0) {
                    document.getElementById('FPImage1').src = "data:image/bmp;base64," + result.BMPBase64;
                }
                template_1 = result.TemplateBase64;
            }
            else {
                alert("Fingerprint Capture Error Code:  " + result.ErrorCode + ".\nDescription:  " + ErrorCodeToString(result.ErrorCode) + ".");
            }
        }
    
        function SuccessFunc2(result) {
            if (result.ErrorCode == 0) {
                /* 	Display BMP data in image tag
                    BMP data is in base 64 format 
                */
                if (result != null && result.BMPBase64.length > 0) {
                    document.getElementById('FPImage2').src = "data:image/bmp;base64," + result.BMPBase64;
                }
                template_2 = result.TemplateBase64;
            }
            else {
                alert("Fingerprint Capture Error Code:  " + result.ErrorCode + ".\nDescription:  " + ErrorCodeToString(result.ErrorCode) + ".");
            }
        }
    
        function ErrorFunc(status) {
            /* 	
                If you reach here, user is probabaly not running the 
                service. Redirect the user to a page where he can download the
                executable and install it. 
            */
            alert("Check if SGIBIOSRV is running; status = " + status + ":");
        }
    
        function CallSGIFPGetData(successCall, failCall) {
            var uri = "https://localhost:8443/SGIFPCapture";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    fpobject = JSON.parse(xmlhttp.responseText);
                    successCall(fpobject);
                }
                else if (xmlhttp.status == 404) {
                    failCall(xmlhttp.status)
                }
            }
            xmlhttp.onerror = function () {
                failCall(xmlhttp.status);
            }
            var params = "Timeout=" + "10000";
            params += "&Quality=" + "50";
            params += "&licstr=" + encodeURIComponent(secugen_lic);
            params += "&templateFormat=" + "ISO";
            xmlhttp.open("POST", uri, true);
            xmlhttp.send(params);
        }
    
        function matchScore(succFunction, failFunction) {
            if (template_1 == "" || template_2 == "") {
                alert("Please scan two fingers to verify!!");
                return;
            }
            var uri = "https://localhost:8443/SGIMatchScore";
    
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    fpobject = JSON.parse(xmlhttp.responseText);
                    succFunction(fpobject);
                }
                else if (xmlhttp.status == 404) {
                    failFunction(xmlhttp.status)
                }
            }
    
            xmlhttp.onerror = function () {
                failFunction(xmlhttp.status);
            }
            var params = "template1=" + encodeURIComponent(template_1);
            params += "&template2=" + encodeURIComponent(template_2);
            params += "&licstr=" + encodeURIComponent(secugen_lic);
            params += "&templateFormat=" + "ISO";
            xmlhttp.open("POST", uri, false);
            xmlhttp.send(params);
        }
    
        function succMatch(result) {
            //var idQuality = document.getElementById("quality").value;
            var idQuality = 100;
            if (result.ErrorCode == 0) {
                if (result.MatchingScore >= idQuality)
                    alert("MATCHED ! (" + result.MatchingScore + ")");
                else
                    alert("NOT MATCHED ! (" + result.MatchingScore + ")");
            }
            else {
                alert("Error Scanning Fingerprint ErrorCode = " + result.ErrorCode);
            }
        }
    
        function failureFunc(error) {
            alert ("On Match Process, failure has been called");
        }
    
    </script>
  
@endsection