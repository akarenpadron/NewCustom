<?PHP
  //Contact Form from HTML Form Guide
  //This program is free software published under the terms of the GNU Lesser General Public License.
  //See this page for more info: http://www.html-form-guide.com/contact-form/contact-form-attachment.html
  require_once("./include/fgcontactform.php");
  $formproc = new FGContactForm();
  //$formproc->AddRecipient('sales@scoresports.com, REBEKA@scoresports.com, CKIESEWETTER@scoresports.com');
  $formproc->AddRecipient('diseno15@mesquitamaquiladora.com'); //<<---Put your email address here
  $formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');
  $formproc->SetFormType('Uniform');
  $formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);
  if(isset($_POST['submitted'])){
     if($formproc->ProcessForm()){
          $formproc->RedirectToURL("thank-you.php");
     }
  }
?>
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
<!--
██████ ███████
    ██ ██ 
    ██ ███████
██  ██      ██
██████ ███████
JAVASCRIPT FILES-->
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139383456-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-139383456-1');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
 crossorigin="anonymous"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/easing.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/owl-carousel-thumb.min.js"></script>
<script src="js/hexagons.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/main.js"></script>
<script src="js/jqBootstrapValidation.js"></script>
<script src="https://kit.fontawesome.com/a6517f657d.js" crossorigin="anonymous"></script>
<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
<script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
<script type="text/javascript">
  var iWebkit;if(!iWebkit){iWebkit=window.onload=function(){function fullscreen(){var a=document.getElementsByTagName("a");for(var i=0;i<a.length;i++){if(a[i].className.match("noeffect")){}else{a[i].onclick=function(){window.location=this.getAttribute("href");return false}}}}function hideURLbar(){window.scrollTo(0,0.9)}iWebkit.init=function(){fullscreen();hideURLbar()};iWebkit.init()}}
  function MM_showHideLayers() { //v9.0
    var i,p,v,obj,args=MM_showHideLayers.arguments;
    for (i=0; i<(args.length-2); i+=3) with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { 
      v=args[i+2];
      if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
      obj.visibility=v; 
    }
  }
</script>
<script src="js/contact.js"></script>
<!--
██    ██ ██████████ ██      ██ ██
██    ██     ██     ████  ████ ██
████████     ██     ██  ██  ██ ██
██    ██     ██     ██      ██ ██
██    ██     ██     ██      ██ ███████
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SCORE Custom Uniform 1</title>
  <meta name="apple-mobile-web-app-capable" content="yes" />
</head>
<body>
  <header id="header">
    <div class="container main-menu">
      <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
          <a href="index.html"><img src="img/logo-ss.png" alt="" title="" /></a>
        </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li><a href="index.html">HOME</a></li>
            <li><a href="uniform1.php">DESIGN 1</a></li>
            <li><a href="uniform2.php">DESIGN 2</a></li>
            <li><a href="uniform3.php">DESIGN 3</a></li>
            <li><a href="uniform4.php">DESIGN 4</a></li>
            <li><a href="uniform5.php">DESIGN 5</a></li>
            <li><a href="uniform6.php">DESIGN 6</a></li>
            <li class="menu-active" style="background-color: rgba(255,255,255,0.05)"><a href="uniform7.php">DESIGN 7</a></li>
            <li><a href="uniform8.php">DESIGN 8</a></li>
            <li><a href="#contact">CONTACT US</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <div style="height:115px;background-color:var(--gray-light-color)"></div>
  <div class="row d-flex justify-content-between" style="background-image: url(img/UNIFORM-BANNER7.jpg);width:100%;height:auto;background-size: 100% 100%;margin-right: 0px;margin-left: 0px;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-6 single-footer-widget float-right vertical-align" style="margin-left:30%;margin-right:auto;align-self: right">
      <div width="100%" height="auto" style="margin-top:50%;margin-bottom: 40%;opacity:0">
        &nbsp
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row swatch" style="padding-top: 10%;">
      <div class="col-lg-6">
        <div align="center" style="margin:auto; height:850px; width:290px"><!--200-->
          <style>
            .circle{
              margin:1.84px;margin-top:3px;margin-bottom:3px;
            }
          </style>
          <?php  
            $design_number='1'; // Design 1 of the P4D1 folder
            $colors = array('blk', 'bur', 'chr', 'col', 'gld', 'hun', 'kel', 'lem', 'lim', 'nav', 'org', 'red', 'roy', 'sil', 'tur', 'wht');
            $codes = array('000000','6F263D','3F4444','92C1E9','FFB81C','00594F','009639','C0DF16','79C000','00205B','FF6900','BA0C2F','001489','A7A8AA','00B5E2','fff');
            $s_colors = array('blk', 'bur', 'chr', 'col', 'gld', 'hun','nav', 'org', 'red', 'roy', 'wht');
            $s_codes = array('000000','6F263D','3F4444','92C1E9','FFB81C', '00594F', '00205B', 'FF6900', 'BA0C2F', '001489', 'fff');
            $colors_per_item= array('1', '2');
            $item_titles= array("Pick your jersey colors:", "<br>Now it's time to design your shorts:");
            $item_types=array('base','sho');
            $design_labels= array('Primary Color', '<br>Secondary Color', 'Main Color', '<br>Accent Color');
            foreach($colors as $color) echo "<div id='".$color."sho1'><img id='".$color."imgsho1' src='assets/Uniforms/P4D1/SHORT/design".$design_number."-".$color."1.png'/></div> <div id='".$color."base1'><img id='".$color."imgbase1' src='assets/Uniforms/P4D1/JERSEY/design".$design_number."-".$color."1.png'/></div>";
            foreach($colors as $color) echo "<div id='".$color."sho2'><img id='".$color."imgsho2' src='assets/Uniforms/P4D1/SHORT/design".$design_number."-".$color."2.png'/></div> <div id='".$color."base2'><img id='".$color."imgbase2' src='assets/Uniforms/P4D1/JERSEY/design".$design_number."-".$color."2.png'/></div>";
            foreach($s_colors as $color) echo "<div id='".$color."sock1'><img id='".$color."imgsock1' src='assets/Uniforms/P4D1/SOCKS/design".$design_number."-".$color."1.png'/></div>";
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
      <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>
        <fieldset>
          <input type='hidden' name='submitted' id='submitted' value='1'/>
          <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
          <input type='hidden'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
          <div><h2 align="center" style="margin-top:-10px"><input name="Design" id="design7" value="Design 7" type="hidden" /></h2>
          </div>
          <div id="order" class='short_explanation'>
            <h2>Complete the form below to start your custom uniform order:</h2>
            <ul>
              Add all the fields<br>
              Add the “Submit” button
            </ul>
            <br><p>*Required fields</p>
          </div>
          <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <label for='name' ><font color="#6D6E71">Contact Name*: </font></label>
              <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" />
              <span id='contactus_name_errorloc' class='error'></span>
            </div>
            <div class="col-lg-6 col-sm-12">
              <label for='email' ><font color="#6D6E71">Organization*:</font></label>
              <input type='text' name='Organization' id='org' value='<?php echo $formproc->SafeDisplay('org') ?>' maxlength="50" />
              <span id='contactus_email_errorloc' class='error'></span>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <label for='email' ><font color="#6D6E71">Email Address*:</font></label>
              <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" />
              <span id='contactus_email_errorloc' class='error'></span>
            </div>
            <div class="col-lg-6 col-sm-12">
              <label for='email' ><font color="#6D6E71">Phone*:</font></label>
              <input type='text' name='phone' id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="50" />
              <span id='contactus_email_errorloc' class='error'></span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label for='email' ><font color="#6D6E71">Primary Jersey Color*:</font></label>
              <input type='text' name='Priamary Color' id='basecolor1' value='<?php echo $formproc->SafeDisplay('ballcolor1') ?>' maxlength="50" />
              <span id='contactus_email_errorloc' class='error'></span>
            </div>
            <div class="col-sm-6">
              <label for='email' ><font color="#6D6E71">Secondary Jersey Color*:</font></label>
              <input type='text' name='Secondary Color' id='basecolor2' value='<?php echo $formproc->SafeDisplay('ballcolor2') ?>' maxlength="50" />
              <span id='contactus_email_errorloc' class='error'></span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <label for='email' ><font color="#6D6E71">Main Short Color*:</font></label>
              <input type='text' name='Main Short Color' id='shocolor1' value='<?php echo $formproc->SafeDisplay('shocolor1') ?>' maxlength="50" />
              <span id='contactus_email_errorloc' class='error'></span>
            </div>
            <div class="col-sm-4">
              <label for='email' ><font color="#6D6E71">Accent Short Color*:</font></label>
              <input type='text' name='Accent Short Color' id='shocolor2' value='<?php echo $formproc->SafeDisplay('shocolor2') ?>' maxlength="50" />
              <span id='contactus_email_errorloc' class='error'></span>
            </div>
            <div class="col-sm-4">
              <label for='email' ><font color="#6D6E71">Socks Color*:</font></label>
              <input type='text' name='Accent Short Color' id='sockcolor1' value='<?php echo $formproc->SafeDisplay('shocolor2') ?>' maxlength="50" />
              <span id='contactus_email_errorloc' class='error'></span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <label for='email' ><font color="#6D6E71">Quantity*:</font></label>
              <input type='text' name='Quantity' id='qnt' value='<?php echo $formproc->SafeDisplay('qnt') ?>' maxlength="50" />
              <span id='contactus_email_errorloc' class='error'></span>
            </div>
            <div class="col-sm-4">
              <label for='email' ><font color="#6D6E71">In-Hand Date*:</font></label>
              <input type='text' name='In-Hand Date' id='ndate' value='<?php echo $formproc->SafeDisplay('ndate') ?>' maxlength="50" />
              <span id='contactus_email_errorloc' class='error'></span>
            </div>
            <div class="col-sm-4">
              <label for='photo' ><font color="#6D6E71">Logo Upload*:</font></label>
                <input class="genric-btn primary radius" type='file' name='photo' id='photo' multiple accept value='<?php echo $formproc->SafeDisplay('photo') ?>' maxlength="50" /><br/>
                <span id='contactus_newupload_errorloc' class='error'></span>
            </div>
          </div>
          <div>
            <label for='message' ><font color="#6D6E71">Comment Box:</font></label>
            <span id='contactus_message_errorloc' class='error'></span>
            <textarea name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
            <label for='message' ><font color="#6D6E71">*Please have decoration information ready to provide to your sales representative. </font></label>
          </div>
          <div style="align:center;width:auto; margin-top:40px;">
            <center><input class="genric-btn primary radius" type='submit' name='Submit' value='Submit' /></center>
          </div>
        </fieldset>
      </form>
      <div class="container">
        <div class="row">
          <center><a href="#con1" data-toggle="modal" class="genric-btn primary radius" role="button" style="margin-top:20px">Terms and Conditions</a><br></p>
          <p><center style="padding:20px;font-size:10px;">All images and artwork are the exclusive property of SCORE, American Soccer Company, Inc. (except for customer trademarks) and are protected under U.S. And international copyright treaties. Artwork and image may not be copied, reproduced, redistributed, manipulated, projected, used or altered in any way without the prior express, written permission of SCORE, American Soccer Company, Inc.</center></p>
          <p><center style="padding:20px;font-size:10px;">*Terms and conditions do apply for the SCORE Pro Custom uniform & ball program.</center></p>
        </div>
      </div>
    </div>
  </footer>
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