<?php include 'ball-formproc.php'; ?> <!--  block Contact Form from HTML Form Guide -->
<?php include 'ball-css.php'; ?> <!--  block css -->
<?php include 'ball-js.php'; ?> <!--  block javascript -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SCORE Custom Ball 2</title>
    <meta name="apple-mobile-web-app-capable" content="yes" />
  </head>
  <body>
    <?php include 'ball-header.php'; ?> <!--  block ball header -->
    <style>  #ball2-ref{ color: rgba(115,220,255, .7); } </style> <!-- menu active -->
    <script> /* design2 roy and gld default color */
      $( document ).ready(function() {
        MM_showHideLayers('royballimg1','','show','gldballimg2','','show');
        document.getElementById('ballcolor1').value = 'ROY'; document.getElementById('ballcolor2').value = 'GLD';
      });
    </script>
    <img src="img/BALL-BANNER2.jpg" width="100%" style="margin-top:115px"/>
    <section class='prefooter section-gap align-items-center'>
      <div class='container'> 
        <div class="row swatch" style="padding-top: 10%;">
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center" style='margin:auto' >
            <div class="ballImageSection" align="center" style="margin:auto; height:450px; width:377px">
              <div id="d1-ball"><img src="assets/Balls/DESIGN2/ball-texture.png"/></div>
              <!--<div style="position: relative; left: 0; top: 0;">
                <img style="height: auto; width: 26%; top: 55px; left: 59%; transform: rotate(35deg) rotateX(50deg)" id="logo-img2"  class='logo-image'/>
                <img style="height: auto; width: 28%; top: 140px; left: 14%; transform: rotate(-35deg) rotateX(15deg);" id="logo-img1"  class='logo-image'/>
              </div>-->
              <?php
                $design_number=2;
                $colors = array('blk','col', 'gld', 'hun', 'kel', 'lem', 'lim', 'nav', 'org', 'pur', 'red', 'roy', 'sil', 'tur');
                foreach($colors as $color) echo "<div id='d1-".$color."1'><img id='".$color."ballimg1' src='assets/Balls/DESIGN".$design_number."/design".$design_number."-".$color."1.png'/></div>";
                foreach($colors as $color) echo "<div id='d1-".$color."2'><img id='".$color."ballimg2' src='assets/Balls/DESIGN".$design_number."/design".$design_number."-".$color."2.png'/></div>";
              ?>
            </div>
          </div>
          <?php include 'ball-color-swatches.php'; ?> <!--  block ball color swatches -->
        </div>
      </div>
    </section>
    <?php include 'ball-time-frames.php'; ?> <!--  block pricing starting and 4 easy steps block-->
    <footer class="footer-area section-gap" id="contact">
      <div class="container">
        <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>
          <fieldset >
            <input type='hidden' name='submitted' id='submitted' value='1'/>
            <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
            <input type='hidden'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
            <div>
              <h2 align="center" style="margin-top:-10px"><input name="Design" id="design2" value="Design 2" type="hidden"/></h2>
            </div>
            <?php include 'ball-form.php'; ?> <!--  block request fields -->
            <!--<script>
              function readURL(input) {
                if (input.files && input.files[0]) {
                  var reader = new FileReader();
                  reader.onload = function (e) {
                    $('#logo-img1').attr('src', e.target.result);
                    $('#logo-img2').attr('src', e.target.result);
                    localStorage.setItem("srcLogo", e.target.result);
                    localStorage.setItem("statusLogo", "started");
                  }
                  reader.readAsDataURL(input.files[0]);
                }
              }
              $("#imgInp").change(function(){
                readURL(this);
              });
              $("#imgInp1").change(function(){
                readURL(this);
              });
            </script>-->
          </fieldset>
        </form>
        <?php include 'ball-terms-conditions.php'; ?> <!--  block terms and condiions, button and modal -->
      </div>
    </footer>
    <?php include 'ball-footer.php'; ?> <!--  block footer contact info -->
  </body>
</html>