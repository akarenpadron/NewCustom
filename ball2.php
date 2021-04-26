<!--  block Contact Form from HTML Form Guide -->
<?php include 'ball-formproc.php';?>
<!--  end block Contact Form from HTML Form Guide -->

<!--  block css -->
<?php include 'ball-css.php';?>
<!--  end block css -->

<!--  block javascript -->
<?php include 'ball-js.php';?>
<!--  end block javascript -->

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

  <!--  block ball header -->
  <?php include 'ball-header.php';?>
  <!--  end block ball header -->

  <style>
    /* menu active */
    #ball2-ref{ 
      background-color: rgba(255,255,255,0.05);
    }
  </style>

  <div style="height:115px;background-color:var(--gray-light-color)">
  </div>
  <div class="row d-flex justify-content-between" style="background-image: url(img/BALL-BANNER2.jpg);width:100%;height:auto;background-size: 100% 100%;margin-right: 0px;margin-left: 0px;">
    <div class="col-lg-6 col-md-6 col-6 single-footer-widget float-right vertical-align" style="margin-left:30%;margin-right:auto;align-self: right">
      <div width="100%" height="auto" style="margin-top:50%;margin-bottom: 40%;opacity:0">
        &nbsp
      </div>
    </div>
  </div>

  <script>
    /* design2 roy and gld default color */
    $( document ).ready(function() {
      MM_showHideLayers('d1-roy1','','show');
      document.getElementById('ballcolor1').value = 'ROY';

      MM_showHideLayers('d1-gld2','','show');
      document.getElementById('ballcolor2').value = 'GLD';
    });
  </script>

  <div class="row swatch" style="padding-top: 10%;">
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style='margin:auto' >
      <div class='col-sm-8 col-md-8 col-lg-6 col-xl-4' style='margin:auto' >
        <div class="ballImageSection" align="center" style="margin:auto; height:450px; width:377px">
          <div id="d1-ball"><img src="assets/Balls/DESIGN2/ball-texture.png"/></div>
          <?php
            $design_number=2;
            $colors = array('blk','col', 'gld', 'hun', 'kel', 'lem', 'lim', 'nav', 'org', 'pur', 'red', 'roy', 'sil', 'tur');
            $codes = array('000000', '92C1E9', 'FFB81C', '00594F', '009639', 'e5ff36', '79C000', '00205B', 'FF6900', '592C82', 'BA0C2F', '001489', 'A7A8AA', '00B5E2');
            foreach($colors as $color) echo "<div id='d1-".$color."1'><img id='".$color."ballimg1' src='assets/Balls/DESIGN".$design_number."/design".$design_number."-".$color."1.png'/></div>";
            foreach($colors as $color) echo "<div id='d1-".$color."2'><img id='".$color."ballimg2' src='assets/Balls/DESIGN".$design_number."/design".$design_number."-".$color."2.png'/></div>";
          ?>
        </div>
      </div>
    </div>

    <!--  block ball color swatches -->
    <?php include 'ball-color-swatches.php';?>
    <!--  end block ball color swatches -->

  </div>

  <!--  block pricing starting and 4 easy steps block-->
  <?php include 'ball-time-frames.php';?>
  <!--  end block pricing starting and 4 easy steps block-->

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

          <!--  block request fields -->
          <?php include 'ball-form.php';?>
          <!--  end block request fields -->

        </fieldset>
      </form>

      <!--  block terms and condiions, button and modal -->
      <?php include 'ball-terms-conditions.php';?>
      <!--  end block terms and condiions, button and modal -->

    </div>
  </footer>

  <!--  block footer contact info -->
  <?php include 'ball-footer.php';?>
  <!--  end block footer contact info -->

</body>
</html>