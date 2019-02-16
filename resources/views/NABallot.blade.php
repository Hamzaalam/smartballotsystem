@extends('layout.main')

@section('content')
<link rel="stylesheet" href="./assets/css/ballot.css">

    <!-- **Home Content** -->
  <article id="home" class="content"><br>

    <div class="row d-flex justify-content-center">
      <div class="col-lg-8">
        <h2 class="sub-header " style="color: black; text-align: center;">NATIONAL ASSEMBLY</h2>
      </div>
      <div class="col-lg-2">
        <button type="button" id="btnSuccess" class="btn btn-success"  onclick="goToPS()">Proceed Goto PS</button>
        <script>
            document.querySelector('#btnSuccess').disabled = true;
          </script>
      </div>
    </div>

    

    <table class="table text-center">
        <tbody>
            <form name="myForm">
            <?php foreach($rows as $row): ?>
              <tr>
                  <td class="col-sm-2"><img src="./assets/images/flag/{{ $row['flag'] }}"></td>
                  <td class="col-sm-2"><img src="./assets/images/sign/{{ $row['sign'] }}"></td>
                  <td class="col-sm-3" style="font-size: 20px; font-weight: bold; ">{{ $row['title'] }}‬‎</td>
                  <td class="col-sm-2">
                    
                      <label>
                      <input type="checkbox"  id="{{ $row['name'] }}" name="{{ $row['name'] }}" value="{{ $row['value'] }}" onclick="return myfun(this)"> <span class="label-text"></span>
                      </label>
                    
                  </td>
              </tr>
            <?php endforeach ?>
          </form>
            
          </tr>
        </tbody>
    </table>
      <!--table End-->
  </article><!-- **Home Content - End** -->

  <script type="text/javascript">
    function myfun(stayChecked) {
      // document.getElementById('btnSuccess').disabled = false;
      with (document.myForm) {

        for (i = 0; i < elements.length; i++) {
          if (elements[i].checked == true && elements[i].name != stayChecked.name) {
            elements[i].checked = false;
          }
        }
      }
      checkCondition(stayChecked);
    }

    function checkCondition(stayChecked) {
      with (document.myForm) {
        for (i = 0; i < elements.length; i++) {
          if (elements[i].checked == true) {
            document.getElementById('btnSuccess').disabled = false;
            alertName(stayChecked.name);

            break;
          }
          else {
            document.getElementById('btnSuccess').disabled = true;
          }
        }
      }
    }

    function alertName(name) {
      switch (name) {
        case 'cb1':
          $.alert("You Have Selected 'پاکستان تحريک انصاف' For National Assembly");
          break;

        case 'cb2':
          $.alert("You Have Selected 'پاکِستان پیپلز پارٹی‬‎' For National Assembly");
          break;

         case 'cb3':
          $.alert("You Have Selected 'پاکستان مسلم لیگ ن' For National Assembly");
          break;

         case 'cb4':
          $.alert("You Have Selected 'جميعت علماء پاکستان' For National Assembly");
          break;

         case 'cb5':
          $.alert("You Have Selected 'پاکستان مسلم لیگ ق' For National Assembly");
          break;

         case 'cb6':
          $.alert("You Have Selected 'جمیعت علمائے اسلام ف' For National Assembly");
          break;

         case 'cb7':
          $.alert("You Have Selected 'متحدہ قومی موومنٹ‬ پاکِستان' For National Assembly");
          break;

         case 'cb8':
          $.alert("You Have Selected 'عوامی نيشنل پارٹی' For National Assembly");
          break;

         case 'cb9':
          $.alert("You Have Selected 'پاکستان مسلم لیگ ف' For National Assembly");
          break;

          case 'cb10':
          $.alert("You Have Selected 'پاک سر زمین پارٹی‬‎' For National Assembly");
          break;

          case 'cb11':
          $.alert("You Have Selected 'پاکستان عوامی تحريک' For National Assembly");
          break;

          case 'cb12':
          $.alert("You Have Selected 'عوامی ورکرز پارٹی' For National Assembly");
          break;

          case 'cb13':
          $.alert("You Have Selected 'تحریک لبیک پاکستان' For National Assembly");
          break;

          case 'cb14':
          $.alert("You Have Selected 'بلوچستان نيشنل پارٹی' For National Assembly");
          break;

          case 'cb15':
          $.alert("You Have Selected 'پشتونخوا ملی عوامی پارٹی‬' For National Assembly");
          break;

          case 'cb16':
          $.alert("You Have Selected 'پاکستان گرین پارٹی‎' For National Assembly");
          break;


      }

    }

    function goToPS(e) {
      location.href = root + 'PSBallot';
    }

  </script>
@endsection