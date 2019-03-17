
    document.getElementById("inputNA").disabled = true;
    document.getElementById('inputPS').disabled = true;

  function checkStatusChk(status){
    var checkBoxNA = document.getElementById('chkNA');
    var checkBoxPS = document.getElementById('chkPS');
    var checkBoxBoth = document.getElementById('chkBoth');
    var textBoxPS = document.getElementById('inputPS');
    var textBoxNA = document.getElementById('inputNA');

    textBoxNA.disabled = true;
    textBoxPS.disabled = true;

    if(status == checkBoxPS && checkBoxPS.checked){
      textBoxPS.disabled = false;
      checkBoxPS.checked = true;
      checkBoxNA.checked = false;
      checkBoxBoth.checked = false;
    }
    if(status == checkBoxNA && checkBoxNA.checked){
      textBoxNA.disabled = false;
      checkBoxPS.checked = false;
      checkBoxNA.checked = true;
      checkBoxBoth.checked = false;
    }
    if(status == checkBoxBoth && checkBoxBoth.checked){
      checkBoxPS.checked = false;
      checkBoxNA.checked = false;
      checkBoxBoth.checked = true;
      textBoxPS.disabled = false;
      textBoxNA.disabled = false;
    }
  }
  