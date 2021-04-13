<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/contact-form-attachment.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('diseno15@mesquitamaquiladora.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');

$formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);

if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>



<!-- <script src="js/jquery-3.2.1.min.js"></script> -->
<script src="js/vendor/jquery-2.2.4.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139383456-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-139383456-1');
  </script>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

  <title>SCORE Custom Ball 3</title>

	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/favicon.png">
	<link rel="apple-touch-icon" href="assets/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/apple-touch-icon-114x114.png">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">


	<!--
   ██████ ███████ ███████
  ██      ██      ██
  ██      ███████ ███████
  ██           ██      ██
   ██████ ███████ ███████
css
-->

<link rel="stylesheet" href="css/linearicons.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/nice-select.css">
<link rel="stylesheet" href="css/hexagons.min.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="flipster.min.css">
  <link rel="stylesheet" href="css/custom2.css">
<script src="https://kit.fontawesome.com/a6517f657d.js" crossorigin="anonymous"></script>

    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
    <script type="text/javascript">
var iWebkit;if(!iWebkit){iWebkit=window.onload=function(){function fullscreen(){var a=document.getElementsByTagName("a");for(var i=0;i<a.length;i++){if(a[i].className.match("noeffect")){}else{a[i].onclick=function(){window.location=this.getAttribute("href");return false}}}}function hideURLbar(){window.scrollTo(0,0.9)}iWebkit.init=function(){fullscreen();hideURLbar()};iWebkit.init()}}
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3)
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
</script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68804515-1', 'auto');
  ga('send', 'pageview');

</script>

<meta name="apple-mobile-web-app-capable" content="yes" />
<style type="text/css">

.uniformpagenav{
  display:block;
  height: 70px;
}

.site-logo img{
  width:auto;
  height:50px;
  margin:20px;
}

.title{
  color:#fff;
  text-align: center;
  padding: 20px 60px 20px 60px;
}

.title h2{
  color:#fff;
  margin-top: 2rem;
  margin-bottom:2rem;
}

.title p{
  padding:0 50px;
  color:#eaeaea;
}

.inactiveLink {
   pointer-events: none;
   cursor: default;
}
#base{
	visibility: hidden;
}
#apDiv1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	left: 518px;
	top: 50px;
}

[id^="d1-"], [id^="d2-"], [id^="d3-"] {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}

#d1-red2, #d1-blk1, #d1-ball {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: visible;
}


.navbar-custom + .module {
    padding: 0px 0;
}

.module, .module-small {
    padding: 0px 0;
}

@media only screen and (max-width: 767px) {
  .ball {
    margin-top:20px;
  }
}

.circle{
  width:40px;
  height:40px;
  border-radius: 50%;
  display: inline-block;
}

.circle:hover{
  border-radius: 30%;
}

.swatches td{
  padding:0;
  border:none;
}

input, textarea{
  width:100%;
}

input[type="submit"]{
  width:50%;
}



.swatch{
  background-color: #fff;
  padding-bottom:50px;
}

.swatch h3{
  margin:10px 0px 30px 0px;
}

.swatch h4{
  margin:10px 0px 10px 0px;
}

.colors{
  padding:50px;
}

.form h2{
  color:#fff;
  margin-top: 0;
}

#contactus input[type="email"], input[type="number"], input[type="search"], input[type="text"], input[type="tel"], input[type="url"], input[type="password"], textarea, select{
  background-color:#eaeaea;
  height: 40px;

}

.side-form{
  text-align: center;
  padding:30px;
}

.side-form h4, h2{
  color:white;
}

.side-form span{
  font-weight: bold;
  color:#ba2c0f;
  background: #eaeaea;
  padding:10px 30px;
  line-height: 7rem;
}

#footer-custom{
  padding:50px 0;
}

#footer-custom h4{
  margin: 10px 0;
}

.copyright{
  color:#000;
}


</style>
</head>
<body>
  <!-- start header Area -->
	<header id="header">
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.html"><img src="img/logo-ss.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
          <ul class="nav-menu">
						<li><a href="index.html">HOME</a></li>
						<li><a href="ball1.php">DESIGN 1</a></li>
						<li><a href="ball2.php">DESIGN 2</a></li>
						<li class="menu-active"><a href="ball3.php">DESIGN 3</a></li>
						<li><a href="#contact">CONTACT US</a></li>
					</ul>
				</nav>
			</div>
		</div>
 </header>
	<!-- end header Area -->


  <!-- PARALLAX TOP BANNER -->
<div style="height:115px;background-color:var(--gray-light-color)"></div>
  <div class="row d-flex justify-content-between" style="background-image: url(img/BALL-BANNER3.jpg);width:100%;height:auto;background-size: 100% 100%;margin-right: 0px;margin-left: 0px;">
    <div class="col-lg-6 col-md-6 col-6 single-footer-widget float-right vertical-align" style="margin-left:30%;margin-right:auto;align-self: right">
      <div width="100%" height="auto" style="margin-top:50%;margin-bottom: 40%;opacity:0">
        &nbsp
      </div>
    </div>
  </div>
  <!-- END TOP BANNER -->
<div class="row swatch">
  <div class="col-sm-6">
    <div class="ballImageSection" align="center" style="margin:auto; height:350px; width:290px">
      <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
      <script>
        $( document ).ready(function() {
          var colors = ['blk', 'chr', 'col', 'gld', 'hun', 'kel', 'lem', 'lim', 'nav', 'org', 'pur', 'red', 'roy', 'sil', 'tur', 'wht'];
          colors.forEach(myFunction);
          function myFunction(item) {
            document.getElementById(item+"ballimg1").src="assets/Balls/DESIGN3/design3-"+item+"1.png";
            document.getElementById(item+"ballimg2").src="assets/Balls/DESIGN3/design3-"+item+"2.png";
          }
        });
      </script>
      <div id="d1-ball"><img src="assets/Balls/DESIGN3/ball-color.png"/></div>
      <?php  
        $colors = array('blk', 'chr', 'col', 'gld', 'hun', 'kel', 'lem', 'lim', 'nav', 'org', 'pur', 'red', 'roy', 'sil', 'tur', 'wht');
        foreach($colors as $color){
          echo "<div id='d1-".$color."1'><img id='".$color."ballimg1'/></div>";
          echo "<div id='d1-".$color."2'><img id='".$color."ballimg2'/></div>";
        }
      ?>
    </div>
	</div>
  <div class="col-sm-6 colors">
    <h3><b>Design your ball:</b></h3>
    <?php  
      $colors = array('blk', 'col', 'gld', 'hun', 'kel', 'lem', 'lim', 'nav', 'org', 'pur', 'red', 'roy', 'chr', 'tur', 'wht');
      $codigos = array('000000', '92C1E9', 'FFB81C', '00594F', '009639', 'e5ff36', '79C000', '00205B', 'FF6900', '592C82', 'BA0C2F', '001489', 'A7A8AA', '00B5E2', 'fff');
      $designCant= array('1', '2');
      $designLabel= array('Primary Color', 'Secondary Color');
      $contd=0;
      foreach($designCant as $d){
        echo "<h6>".$designLabel[$contd]."</h6>";
        $contd+=1;
        $contf=0;
        foreach($colors as $color2){
          $contf+=1;
          $cadena="MM_showHideLayers(";
          $cont=0;
          foreach($colors as $color){
            $cont+=1;
            $cadena.="'d1-".$color."".$d."','',";
            if($cont==$contf){
              $cadena.="'show'";
            }else{
              $cadena.="'hide'";
            }
            if($cont<sizeof($colors)){
              $cadena.=",";
            }
          }
          $cadena.=");document.getElementById('ballcolor".$d."').value = '".strtoupper($color2)."'";
          $style="margin:1.84px;margin-top:3px;margin-bottom:3px;background-color: #".$codigos[$contf-1].";";
          if($color2=="wht"){
            $style.='border: 1px solid #eaeaea';
          }
          echo "<div class='circle' style='{$style}' onClick=\"{$cadena}\"></div>";
        }
      }
    ?>
  </div>
</div>

<section class="prefooter section-gap align-items-center">
  <div class="container">
              <div class="row">

                  <div class="col-lg-6 col-md-6 single-footer-widget text-center">
                    <h2>Price starting at</h2>
                    <h1>$10.95</h1>
                      <p><a href="#con3" data-toggle="modal" class="genric-btn primary radius"  role="button">Order Time Frames</a></p>
                  </div>

                  <div class="col-lg-6 col-md-6 single-footer-widget">
                    <h2>4 EASY STEPS</h2>
                      <ul class="text-white mt-10">
                        <li>1. Submit your design colors and information.</li>
                        <li>2. A SCORE<span style="font-size:10px;">®</span> Expert will contact you to provide exceptional service.</li>
                        <li>3. Please have club logo information ready to provide to your sales representative.</li>
                        <li>4. Place your order.</li>
                      </ul>
                  </div>
                </div>
              </div>
  </section>

  <div  id="con3" class="modal fade" tabindex="-1">
   	<div class="modal-dialog" style="background-color:#FFF">
   		<div class="modal-header">
   			<button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
          <h3>Order Time Frames</h3>
          </div>
          <div class="modal-body">
            <div><center><img src="img/chart2.png" alt=""></center></div>
            <br>
            <div><center><img src="img/chart1.png" alt=""></center></div>
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

          <h5> Terms</h5>
              	<ul>
                  <br>
                  	<li>&#x25B8; 200 Ball minimum required for custom orders.</li>
                  	<li>&#x25B8; Ball design available in maximum of 3 colors (1 ball base color <span style="padding-left:15px;">& 2 design colors).</li>
                      <li>&#x25B8; Delivery is approximately 120 days after order has been <span style="padding-left:15px;">finalized and sample artwork has been approved.</li>
                      <li>&#x25B8; Logo placement is available up to 6 locations.</li>
                      <li>&#x25B8; In our experience, most orders arrive on time.  However, delivery <span style="padding-left:15px;">dates may vary due to manufacturer performance or any other <span style="padding-left:15px;">delays caused by sea transportation (shipping), US custom or <span style="padding-left:15px;">any Act of God. </li>
                  	  <li>&#x25B8; Rush delivery (air freight) is available for an additional charge <span style="padding-left:15px;">per ball.</li>
                      <li>&#x25B8; All orders are final.  Once an order has been placed, it cannot be <span style="padding-left:15px;">changed or cancelled. </li>
                      <li>&#x25B8; A 50% deposit is required at time of order placement and <span style="padding-left:15px;">remaining balance will be due at time of shipment.</li>
       				        <li>&#x25B8; 1-year warranty on manufacturer defects.</li>
                      <br>
                  </ul>

          </div>
          <div class="modal-footer">
          	<button class="genric-btn primary radius" data-dismiss="modal">Close</button>
          </div>
      </div>
   </div>

	<!-- /WRAPPER -->

  
  <!--
  ███████  ██████   ██████   ██      ██
  ██      ██    ██  ██   ██  ████  ████
  █████   ██    ██  ██████   ██  ██  ██
  ██      ██    ██  ██   ██  ██      ██
  ██       ██████   ██   ██  ██      ██
  FORM
  -->
  <footer class="footer-area section-gap" id="contact">
    <div class="container">

        <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

          <fieldset >


            <input type='hidden' name='submitted' id='submitted' value='1'/>
            <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
            <input type='hidden'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

            <div><h2 align="center" style="margin-top:-10px"><input name="Design" id="design3" value="Design 3" type="hidden" /></h2>
            </div>
            <div class="col-lg12 single-footer-widget">
              <h2>Submit Your Custom Ball Request Here:</h2>
              <p>*Required fields</p>
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
      <label for='email' ><font color="#6D6E71">Primary Ball Color*:</font></label>
      <input type='text' name='Secondary Color' id='ballcolor1' value='<?php echo $formproc->SafeDisplay('ballcolor1') ?>' maxlength="50" /><br/>
      <span id='contactus_email_errorloc' class='error'></span>
      </div>
      <div class="col-sm-6">
      <label for='email' ><font color="#6D6E71">Secondary Ball Color*:</font></label>
      <input type='text' name='Secondary Ball Color' id='ballcolor2' value='<?php echo $formproc->SafeDisplay('ballcolor2') ?>' maxlength="50" /><br/>
      <span id='contactus_email_errorloc' class='error'></span>
      </div>
      </div>

      <div class="row">
      <div class="col-sm-6">

        <br>

      </div>
      <div class="col-sm-6">
        <label for='photo' ><font color="#6D6E71">Logo Upload*:</font></label>
        <input class="genric-btn primary radius" type='file' name='photo' id='photo' multiple accept value='<?php echo $formproc->SafeDisplay('photo') ?>' maxlength="50" /><br/>
        <span id='contactus_newupload_errorloc' class='error'></span>
      </div>
      </div>

      <div class="row">

      <div class="col-sm-6">
        <label for='email' ><font color="#6D6E71">Quantity*:</font></label>
        <input type='text' name='Quantity' id='qnt' value='<?php echo $formproc->SafeDisplay('qnt') ?>' maxlength="50" />
        <span id='contactus_email_errorloc' class='error'></span>
      </div>
      <div class="col-sm-6">
        <label for='email' ><font color="#6D6E71">In-Hand Date*:</font></label>
        <input type='text' name='In-Hand Date' id='ndate' value='<?php echo $formproc->SafeDisplay('ndate') ?>' maxlength="50" />
        <span id='contactus_email_errorloc' class='error'></span>
      </div>

      </div>

      <div>
      <label for='message' ><font color="#6D6E71">Comment Box:</font></label>
      <span id='contactus_message_errorloc' class='error'></span>
      <textarea name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
      <label for='message' ><font color="#6D6E71">*Please have decoration information ready to provide to your sales representative. </font></label>
      </div>



      <div style="align:center;width:auto; margin-top:40px;"><center>
      <input class="genric-btn primary radius" type='submit' name='Submit' value='Submit' /></center>
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


  <!--
  ███████  ██████   ██████  ████████ ███████ ██████
  ██      ██    ██ ██    ██    ██    ██      ██   ██
  █████   ██    ██ ██    ██    ██    █████   ██████
  ██      ██    ██ ██    ██    ██    ██      ██   ██
  ██       ██████   ██████     ██    ███████ ██   ██
  FOOTER
  -->
  <footer class="footer-area section-gap" id="contact">
    <div class="container fullwidth">
      <div class="col-lg12 single-footer-widget">
        <h3>SCORE<span style="font-size:10px;">®</span> Sports Contact</h3>
      </div>
      <br>
      <div class="col-lg12 single-footer-widget">
        <h3>E. <a href="mailto:sales@scoresports.com">Sales@ScoreSports.com</a> </h3>
        <h3>T. 800.626.7774</h3>
      </div>
      <br>
      <br>
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
  <!-- End Footer Area -->

    <!-- Javascript files -->
    <script src="js/vendor/bootstrap.min.js"></script>
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

    </body>
    <script src="js/contact.js"></script>
    </html>
