<?php include 'uniform-formproc.php'; ?> <!--  block Contact Form from HTML Form Guide -->
<!--
 ██████ ███████ ███████
██      ██      ██
██      ███████ ███████
██           ██      ██
 ██████ ███████ ███████
CSS FILES-->
<link rel="stylesheet" href="css/linearicons.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/nice-select.css">
<link rel="stylesheet" href="css/hexagons.min.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/main.css">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/color-swatches.css">
<link rel="stylesheet" href="css/custom2.css">
<link rel="stylesheet" href="flipster.min.css">
<link rel="shortcut icon" href="assets/logoW.ico">
<link rel="icon" href="assets/logoW.ico">
<?php include 'uniform-js.php'; ?> <!--  block javascript -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SCORE Custom Uniform 4</title>
  <meta name="apple-mobile-web-app-capable" content="yes" />
</head>
<body>

  <style> 
    #uniform4-ref{ 
      color: rgba(115,220,255, .7); 
    } 
  </style> <!-- menu active -->

  <?php include 'uniform-header.php'; ?> <!--  block uniform header -->

  <div style="height:115px;background-color:var(--gray-light-color)"></div>
  <div class="row d-flex justify-content-between" style="background-image: url(img/UNIFORM-BANNER4.jpg);width:100%;height:auto;background-size: 100% 100%;margin-right: 0px;margin-left: 0px;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-6 single-footer-widget float-right vertical-align" style="margin-left:30%;margin-right:auto;align-self: right">
      <div width="100%" height="auto" style="margin-top:50%;margin-bottom: 40%;opacity:0">
        &nbsp
      </div>
    </div>
  </div>

<form id='contactus' runat="server" action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8' style="margin-bottom:0px;">
<fieldset>
  <div class="container">
    <div class="row" style="padding-top: 10%;padding-bottom:2%">
      <div class="col-12">
        <div align="center"><!--200-->
          <h1 class="uniform-title"> HOME </h1>
        </div>
      </div>
    </div>
    <div class="row swatch">
      <div class="col-lg-6">
        <div align="center" style="margin:auto; height:850px; width:400px"><!--200-->
          <div style="position: relative; left: 0; top: 0;">
            <img id="logo-img1" src="img/YourLogo.png" class='logo-image'/>
          </div>
          <?php  
            $design_number='2'; // Design 2 of the P2D2 folder
            $colors = array('blk', 'bur', 'chr', 'col', 'gld', 'hun', 'kel', 'lem', 'lim', 'nav', 'org', 'red', 'roy', 'sil', 'tur', 'wht');
            $codes = array('000000','6F263D','3F4444','92C1E9','FFB81C','00594F','009639','C0DF16','79C000','00205B','FF6900','BA0C2F','001489','A7A8AA','00B5E2','fff');
            $s_colors = array('blk', 'bur', 'chr', 'col', 'gld', 'hun','nav', 'org', 'red', 'roy', 'wht');
            $s_codes = array('000000','6F263D','3F4444','92C1E9','FFB81C', '00594F', '00205B', 'FF6900', 'BA0C2F', '001489', 'fff');
            $colors_per_item= array('1', '2');
            $item_titles= array("Pick your jersey colors:", "<br>Now it's time to design your shorts:");
            $item_types=array('base','sho');
            $design_labels= array('Primary Color', '<br>Secondary Color', 'Main Color', '<br>Accent Color');
            foreach($colors as $color) echo "<div id='".$color."sho1'><img id='".$color."imgsho1' src='assets/Uniforms/P2D2/SHORT/design".$design_number."-".$color."1.png'/></div> <div id='".$color."base1'><img id='".$color."imgbase1' src='assets/Uniforms/P2D2/JERSEY/design".$design_number."-".$color."1.png'/></div>";
            foreach($colors as $color) echo "<div id='".$color."sho2'><img id='".$color."imgsho2' src='assets/Uniforms/P2D2/SHORT/design".$design_number."-".$color."2.png'/></div> <div id='".$color."base2'><img id='".$color."imgbase2' src='assets/Uniforms/P2D2/JERSEY/design".$design_number."-".$color."2.png'/></div>";
            foreach($s_colors as $color) echo "<div id='".$color."sock1'><img id='".$color."imgsock1' src='assets/Uniforms/P2D2/SOCKS/design".$design_number."-".$color."1.png'/></div>";

          echo "</div>";
        echo "</div>";
        echo "<div class='col-lg-6 colors'>";
          for ($h = 0; $h <sizeof($item_types); $h++) {
            echo "<h1>".$item_titles[$h]."</h1>";
            for ($i = 0; $i <sizeof($colors_per_item); $i++) {
              echo "<h5>".$design_labels[$i+($h*2)]."</h5>";
              for ($j = 0; $j <sizeof($colors); $j++) {
                $onEventActionString="MM_showHideLayers(";
                for ($k = 0; $k <sizeof($colors); $k++) {
                  if($k==$j) $onEventActionString.="'".$colors[$k].$item_types[$h].$colors_per_item[$i]."','','show'";
                  else $onEventActionString.="'".$colors[$k].$item_types[$h].$colors_per_item[$i]."','','hide'";
                  if($k+1<sizeof($colors)) $onEventActionString.=",";
                }
                $onEventActionString.=");document.getElementById('".$item_types[$h]."color".$colors_per_item[$i]."').value = '".strtoupper($colors[$j])."'";
                $style="background-color: #".$codes[$j].";";
                if($colors[$j]=="wht") $style.='border: 1px solid #eaeaea';
                echo "<div class='circle' style='{$style}' onClick=\"{$onEventActionString}\"></div>";
              }
            }
          }
          echo "<h1><br>Select color of socks:</h1>";
          for ($j = 0; $j <sizeof($s_colors); $j++) {
            $onEventActionString="MM_showHideLayers(";
            for ($k = 0; $k <sizeof($s_colors); $k++) {
              if($k==$j) $onEventActionString.="'".$s_colors[$k]."sock1','','show'";
              else $onEventActionString.="'".$s_colors[$k]."sock1','','hide'";
              if($k+1<sizeof($s_colors)) $onEventActionString.=","; 
            }
            $onEventActionString.=");document.getElementById('sockcolor1').value = '".strtoupper($s_colors[$j])."'";
            $style="background-color: #".$s_codes[$j].";";
            if($s_colors[$j]=="wht") $style.='border: 1px solid #eaeaea';
            echo "<div class='circle' style='{$style}' onClick=\"{$onEventActionString}\"></div>";
          }
        ?>
        <h1><br>UPLOAD YOUR LOGO:</h1>
        <input class='genric-btn primary radius' type='file' name='image' id='imgInp1' multiple accept value='<?php $formproc->SafeDisplay('image') ?>' maxlength='50' /><br/>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="row" style="padding-top: 10%;padding-bottom:2%">
      <div class="col-12">
        <div align="center"><!--200-->
          <h1 class="uniform-title"> AWAY </h1>
        </div>
      </div>
    </div>
    <div class="row swatch">
      <div class="col-lg-6">
        <div align="center" style="margin:auto; height:850px; width:400px"><!--200-->
          <div style="position: relative; left: 0; top: 0;">
            <img id="logo-img2" src="img/YourLogo.png" class='logo-image'/>
          </div>
          <?php  
            $design_number='2';
            $colors = array('blk', 'bur', 'chr', 'col', 'gld', 'hun', 'kel', 'lem', 'lim', 'nav', 'org', 'red', 'roy', 'sil', 'tur', 'wht');
            $codes = array('000000','6F263D','3F4444','92C1E9','FFB81C','00594F','009639','C0DF16','79C000','00205B','FF6900','BA0C2F','001489','A7A8AA','00B5E2','fff');
            $s_colors = array('blk', 'bur', 'chr', 'col', 'gld', 'hun','nav', 'org', 'red', 'roy', 'wht');
            $s_codes = array('000000','6F263D','3F4444','92C1E9','FFB81C', '00594F', '00205B', 'FF6900', 'BA0C2F', '001489', 'fff');
            $colors_per_item= array('1', '2');
            $item_titles= array("Pick your jersey colors:", "<br>Now it's time to design your shorts:");
            $item_types=array('base','sho');
            $design_labels= array('Primary Color', '<br>Secondary Color', 'Main Color', '<br>Accent Color');
            foreach($colors as $color) echo "<div id='".$color."sho1a'><img id='".$color."imgsho1' src='assets/Uniforms/P2D2/SHORT/design".$design_number."-".$color."1.png'/></div> <div id='".$color."base1a'><img id='".$color."imgbase1' src='assets/Uniforms/P2D2/JERSEY/design".$design_number."-".$color."1.png'/></div>";
            foreach($colors as $color) echo "<div id='".$color."sho2a'><img id='".$color."imgsho2' src='assets/Uniforms/P2D2/SHORT/design".$design_number."-".$color."2.png'/></div> <div id='".$color."base2a'><img id='".$color."imgbase2' src='assets/Uniforms/P2D2/JERSEY/design".$design_number."-".$color."2.png'/></div>";
            foreach($s_colors as $color) echo "<div id='".$color."sock1a'><img id='".$color."imgsock1' src='assets/Uniforms/P2D2/SOCKS/design".$design_number."-".$color."1.png'/></div>";
          echo "</div>";
        echo "</div>";
        echo "<div class='col-lg-6 colors'>";
          for ($h = 0; $h <sizeof($item_types); $h++) {
            echo "<h1>".$item_titles[$h]."</h1>";
            for ($i = 0; $i <sizeof($colors_per_item); $i++) {
              echo "<h5>".$design_labels[$i+($h*2)]."</h5>";
              for ($j = 0; $j <sizeof($colors); $j++) {
                $onEventActionString="MM_showHideLayers(";
                for ($k = 0; $k <sizeof($colors); $k++) {
                  if($k==$j) $onEventActionString.="'".$colors[$k].$item_types[$h].$colors_per_item[$i]."a','','show'";
                  else $onEventActionString.="'".$colors[$k].$item_types[$h].$colors_per_item[$i]."a','','hide'";
                  if($k+1<sizeof($colors)) $onEventActionString.=",";
                }
                $onEventActionString.=");document.getElementById('".$item_types[$h]."color".$colors_per_item[$i]."a').value = '".strtoupper($colors[$j])."'";
                $style="background-color: #".$codes[$j].";";
                if($colors[$j]=="wht") $style.='border: 1px solid #eaeaea';
                echo "<div class='circle' style='{$style}' onClick=\"{$onEventActionString}\"></div>";
              }
            }
          }
          echo "<h1><br>Select color of socks:</h1>";
          for ($j = 0; $j <sizeof($s_colors); $j++) {
            $onEventActionString="MM_showHideLayers(";
            for ($k = 0; $k <sizeof($s_colors); $k++) {
              if($k==$j) $onEventActionString.="'".$s_colors[$k]."sock1a','','show'";
              else $onEventActionString.="'".$s_colors[$k]."sock1a','','hide'";
              if($k+1<sizeof($s_colors)) $onEventActionString.=","; 
            }
            $onEventActionString.=");document.getElementById('sockcolor1a').value = '".strtoupper($s_colors[$j])."'";
            $style="background-color: #".$s_codes[$j].";";
            if($s_colors[$j]=="wht") $style.='border: 1px solid #eaeaea';
            echo "<div class='circle' style='{$style}' onClick=\"{$onEventActionString}\"></div>";
          }
        ?>
      </div>
    </div>
  </div>

  <section class="prefooter section-gap align-items-center">
    <div class="container">
      <div class="row">
          <div class="col-lg-6 col-md-6 single-footer-widget text-center">
            <h2><br>Pricing Starting At</h2>
            <h1>$60.00</h1>
              <p><a href="#con3" data-toggle="modal" class="genric-btn primary radius"  role="button">Kit Packages</a></p>
          </div>
          <div class="col-lg-6 col-md-6 single-footer-widget" style="text-align: center;">
            <img src="img/FABRICS-ICON.png">
            <h2>SCORE FABRICS</h2>
            <ul class="mt-10">
              <li>Moisture wicking fabric technology.</li>
              <li>Breathable fabric to accommodate all climates.</li>
              <li>State-of-the-art sublimation capabilities.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div id="con3" class="modal fade" tabindex="-1">
    <div class="modal-dialog" style="background-color:#FFF">
      <div class="modal-header">
        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
        <h3>Kit Packages</h3>
      </div>
      <div class="modal-body">
        <ul>
          <li style="color:black"><b style="color:black">Premier Kit Includes</b></li>
          <ul style="list-style: circle outside;">
            <li>2 Jerseys</li>
            <li>2 Pairs of Shorts</li>
            <li>2 Pairs of Socks</li><br>
          </ul>
          <li style="color:black"><b style="color:black">Elite Kit Includes</b></li>
          <ul style="list-style: circle outside;">
            <li>2 Jerseys</li>
            <li>1 Pair of Shorts</li>
            <li>2 Pairs of Socks</li><br>
          </ul>
          <li style="color:black"><b style="color:black">Travel Kit Includes</b></li>
          <ul style="list-style: circle outside;">
            <li>2 Jerseys</li>
            <li>1 Pairs of Shorts</li>
            <li>1 Pairs of Socks</li><br>
          </ul>
          <li style="color:black"><b style="color:black">SCORE Kit Includes</b></li>
          <ul style="list-style: circle outside;">
            <li>1 Jersey</li>
            <li>1 Pair of Shorts</li>
            <li>1 Pairs of Socks</li><br>
          </ul>
        </ul>
        <ul style="list-style: none;margin-left: 0px">
          <li>*See terms &amp; conditions for additional information and timeframes.</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button class="genric-btn primary radius" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>

  <div id="con1" class="modal fade" tabindex="-1">
    <div class="modal-dialog" style="background-color:#FFF">
      <div class="modal-header">
        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
        <h3>Terms & Conditions</h3>
      </div>
      <div class="modal-body">
        <h5>Terms</h5>
        <ul>
          <br><li>100 Player minimum order. Minimum orders must be at least 100 per item & per color.</li>
          <li>3-year minimum contract is required.</li>
          <li>Production time is 4-5 weeks from the day the order is processed, with the approval of both the artwork and sample uniform. </li>
          <li>Sales representative will review the custom uniform timeline.</li>
          <li>Preliminary/Booking order is highly recommended.</li>
          <li>Time frames may change depending on the time of the year the order is placed.</li>
          <li>All remaining customized products must be purchased at the end of the agreement.</li><br>
        </ul>
        <h5>Custom Uniform Order Tips</h5>
        <ul>
          <br>
          <li>Select your color combinations ahead of time.</li>
          <li>Provide a JPG format of your logo.</li>
          <li>Allow enough time for art comps, approval & production time.</li>
          <br>
        </ul>
        <h5>Sizing Information</h5>
        <ul><br>
        </ul>
        <ul>
          <li>Numerical Sizing Comparison<br>This comparison gives an indication of sizes only and are by no means exact as they vary from manufacturer to manufacturer - sometimes by a full inch up and down.</li><br>
          <ul>
            <li>SCORE YXXS Similar to a 3-4</li>
            <li>SCORE YXS Similar to a 4-5</li>
            <li>SCORE YS Similar to a 5-6</li>
            <li>SCORE YM Similar to a 7-8</li>
            <li>SCORE YL Similar to a 10-12</li>
            <li>SCORE AS Similar to a 14-16</li><br>
          </ul>
          <li>No custom uniforms will be manufactured between July 1, 2021 – September 30, 2021</li><br>
        </ul>
      </div>
      <div class="modal-footer">
        <button class="genric-btn primary radius" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  <footer class="footer-area section-gap" id="contact">
    <div class="container">

      <!-- form and fieldset start -->
      <input type='hidden' name='submitted' id='submitted' value='1'/>
      <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
      <input type='hidden'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
      <div>
        <h2 align="center" style="margin-top:-10px"><input name="Design" id="design4" value="Design 4" type="hidden" /></h2>
      </div>
      <?php include 'uniform-form.php'; ?> <!--  block request fields -->
      <!-- form and fieldset end -->

      <script>
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
      </script>

      <div class="container">
        <div class="row">
          <center><a href="#con1" data-toggle="modal" class="genric-btn primary radius" role="button" style="margin-top:20px">Terms and Conditions</a><br></p>
          <p><center style="padding:20px;font-size:10px;">All images and artwork are the exclusive property of SCORE, American Soccer Company, Inc. (except for customer trademarks) and are protected under U.S. And international copyright treaties. Artwork and image may not be copied, reproduced, redistributed, manipulated, projected, used or altered in any way without the prior express, written permission of SCORE, American Soccer Company, Inc.</center></p>
          <p><center style="padding:20px;font-size:10px;">*Terms and conditions do apply for the SCORE Pro Custom uniform & ball program.</center></p>
        </div>
      </div>
    </div>
  </footer>
</fieldset>
</form>
  <footer class="footer-area section-gap" id="contact">
    <div class="container fullwidth">
      <div class="col-lg12 single-footer-widget">
        <h3>SCORE<span style="font-size:10px;">®</span> Sports Contact</h3>
      </div><br>
      <div class="col-lg12 single-footer-widget">
        <h3>E. <a href="mailto:sales@scoresports.com">Sales@ScoreSports.com</a> </h3>
        <h3>T. 800.626.7774</h3>
      </div><br><br>
      <div class="row">
        <div class="col-lg-3 col-md-6 single-footer-widget">
          <h4>Where to find us</h4>
          <ul>
            <li>726 E Anaheim St</li>
            <li>Wilmington, CA</li>
            <li>90744 US</li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 single-footer-widget">
          <h4>Follow us</h4>
          <ul class="social-link">
            <li><a href="https://www.facebook.com/pg/Scoresports/"><i class="fab fa-facebook-square" style="font-size:24px;"></i></a></li>
            <li><a href="https://twitter.com/scoresports"><i class="fab fa-twitter-square" style="font-size:24px;"></i></a></li>
            <li><a href="https://www.instagram.com/scoresports/"><i class="fab fa-instagram" style="font-size:24px;"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-6 single-footer-widget">
          <h4>Stay In Touch!</h4>
          <p>Sign-up to receive SCORE promotion and announcement emails. <br>Receive 15% Off your next order on ScoreSports.com!</p>
          <a href="https://scoresports.com/emailsignup" class="genric-btn primary radius">Subscribe</a>
        </div>
      </div>
      <div class="footer-bottom row align-items-center">
        <p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      </div>
    </div>
  </footer>
</body>
</html>