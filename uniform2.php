<?PHP
  //Contact Form from HTML Form Guide
  //This program is free software published under the terms of the GNU Lesser General Public License.
  //See this page for more info: http://www.html-form-guide.com/contact-form/contact-form-attachment.html
  require_once("./include/fgcontactform.php");
  $formproc = new FGContactForm();
  $formproc->AddRecipient('diseno15@mesquitamaquiladora.com');
  //2. For better security. Get a random tring from this link: http://tinyurl.com/randstr and put it here
  $formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');
  $formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);
  if(isset($_POST['submitted'])){
    if($formproc->ProcessForm()){
      $formproc->RedirectToURL("thank-you.php");
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <script src="js/vendor/jquery-2.2.4.min.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139383456-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-139383456-1');
  </script>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SCORE Custom Uniform 2</title>


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
<link rel="stylesheet" href="css/custom2.css">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="flipster.min.css">
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

<meta name="apple-mobile-web-app-capable" content="yes" />


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
						<li><a href="uniform1.php">DESIGN 1</a></li>
						<li class="menu-active"><a href="uniform2.php">DESIGN 2</a></li>
            <li><a href="uniform3.php">DESIGN 3</a></li>
            <li><a href="uniform4.php">DESIGN 4</a></li>
            <li><a href="uniform5.php">DESIGN 5</a></li>
            <li><a href="uniform6.php">DESIGN 6</a></li>
            <li><a href="uniform7.php">DESIGN 7</a></li>
            <li><a href="uniform8.php">DESIGN 8</a></li>
						<li><a href="#contact">CONTACT US</a></li>
					</ul>
				</nav>
			</div>
		</div>
 </header>
	<!-- end header Area -->
  <div style="height:115px;background-color:var(--gray-light-color)"></div>
  <div class="row d-flex justify-content-between" style="background-image: url(img/UNIFORM-BANNER2.jpg);width:100%;height:auto;background-size: 100% 100%;margin-right: 0px;margin-left: 0px;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-6 single-footer-widget float-right vertical-align" style="margin-left:30%;margin-right:auto;align-self: right">
      <div width="100%" height="auto" style="margin-top:50%;margin-bottom: 40%;opacity:0">
        &nbsp
      </div>
    </div>
  </div>
  <!-- END TOP BANNER -->
<div class="container">
  <div class="row swatch">

    <div class="col-lg-6">
      <div align="center" style="margin:auto; height:850px; width:290px">


                              <div id="blksho1"><img src="assets/Uniforms/P1D2/SHORT/design2-blk1.png" width="400" height="680" /></div>
                              <div id="bursho1"><img src="assets/Uniforms/P1D2/SHORT/design2-bur1.png" width="400" height="680" /></div>
                              <div id="chrsho1"><img src="assets/Uniforms/P1D2/SHORT/design2-chr1.png" width="400" height="680" /></div>
                              <div id="colsho1"><img src="assets/Uniforms/P1D2/SHORT/design2-col1.png" width="400" height="680" /></div>
                              <div id="gldsho1"><img src="assets/Uniforms/P1D2/SHORT/design2-gld1.png" width="400" height="680" /></div>
                              <div id="hunsho1"><img src="assets/Uniforms/P1D2/SHORT/design2-hun1.png" width="400" height="680" /></div>
                              <div id="kelsho1"><img src="assets/Uniforms/P1D2/SHORT/design2-kel1.png" width="400" height="680" /></div>
                              <div id="lemsho1"><img src="assets/Uniforms/P1D2/SHORT/design2-lem1.png" width="400" height="680" /></div>
                              <div id="limsho1"><img src="assets/Uniforms/P1D2/SHORT/design2-lim1.png" width="400" height="680" /></div>
                              <div id="navsho1"><img src="assets/Uniforms/P1D2/SHORT/design2-nav1.png" width="400" height="680" /></div>
                              <div id="orgsho1"><img src="assets/Uniforms/P1D2/SHORT/design2-org1.png" width="400" height="680" /></div>
                              <div id="redsho1"><img src="assets/Uniforms/P1D2/SHORT/design2-red1.png" width="400" height="680" /></div>
                              <div id="roysho1"><img src="assets/Uniforms/P1D2/SHORT/design2-roy1.png" width="400" height="680" /></div>
                              <div id="silsho1"><img src="assets/Uniforms/P1D2/SHORT/design2-sil1.png" width="400" height="680" /></div>
                              <div id="tursho1"><img src="assets/Uniforms/P1D2/SHORT/design2-tur1.png" width="400" height="680" /></div>
                              <div id="whtsho1"><img src="assets/Uniforms/P1D2/SHORT/design2-wht1.png" width="400" height="680" /></div>

                              <div id="blksho2"><img src="assets/Uniforms/P1D2/SHORT/design2-blk2.png" width="400" height="680" /></div>
                              <div id="bursho2"><img src="assets/Uniforms/P1D2/SHORT/design2-bur2.png" width="400" height="680" /></div>
                              <div id="chrsho2"><img src="assets/Uniforms/P1D2/SHORT/design2-chr2.png" width="400" height="680" /></div>
                              <div id="colsho2"><img src="assets/Uniforms/P1D2/SHORT/design2-col2.png" width="400" height="680" /></div>
                              <div id="gldsho2"><img src="assets/Uniforms/P1D2/SHORT/design2-gld2.png" width="400" height="680" /></div>
                              <div id="hunsho2"><img src="assets/Uniforms/P1D2/SHORT/design2-hun2.png" width="400" height="680" /></div>
                              <div id="kelsho2"><img src="assets/Uniforms/P1D2/SHORT/design2-kel2.png" width="400" height="680" /></div>
                              <div id="lemsho2"><img src="assets/Uniforms/P1D2/SHORT/design2-lem2.png" width="400" height="680" /></div>
                              <div id="limsho2"><img src="assets/Uniforms/P1D2/SHORT/design2-lim2.png" width="400" height="680" /></div>
                              <div id="navsho2"><img src="assets/Uniforms/P1D2/SHORT/design2-nav2.png" width="400" height="680" /></div>
                              <div id="orgsho2"><img src="assets/Uniforms/P1D2/SHORT/design2-org2.png" width="400" height="680" /></div>
                              <div id="redsho2"><img src="assets/Uniforms/P1D2/SHORT/design2-red2.png" width="400" height="680" /></div>
                              <div id="roysho2"><img src="assets/Uniforms/P1D2/SHORT/design2-roy2.png" width="400" height="680" /></div>
                              <div id="silsho2"><img src="assets/Uniforms/P1D2/SHORT/design2-sil2.png" width="400" height="680" /></div>
                              <div id="tursho2"><img src="assets/Uniforms/P1D2/SHORT/design2-tur2.png" width="400" height="680" /></div>
                              <div id="whtsho2"><img src="assets/Uniforms/P1D2/SHORT/design2-wht2.png" width="400" height="680" /></div>




                              <div id="blkbase1"><img src="assets/Uniforms/P1D2/JERSEY/design2-blk1.png" width="400" height="680" /></div>
                              <div id="burbase1"><img src="assets/Uniforms/P1D2/JERSEY/design2-bur1.png" width="400" height="680" /></div>
                              <div id="chrbase1"><img src="assets/Uniforms/P1D2/JERSEY/design2-chr1.png" width="400" height="680" /></div>
                              <div id="colbase1"><img src="assets/Uniforms/P1D2/JERSEY/design2-col1.png" width="400" height="680" /></div>
                              <div id="gldbase1"><img src="assets/Uniforms/P1D2/JERSEY/design2-gld1.png" width="400" height="680" /></div>
                              <div id="hunbase1"><img src="assets/Uniforms/P1D2/JERSEY/design2-hun1.png" width="400" height="680" /></div>
                              <div id="kelbase1"><img src="assets/Uniforms/P1D2/JERSEY/design2-kel1.png" width="400" height="680" /></div>
                              <div id="lembase1"><img src="assets/Uniforms/P1D2/JERSEY/design2-lem1.png" width="400" height="680" /></div>
                              <div id="limbase1"><img src="assets/Uniforms/P1D2/JERSEY/design2-lim1.png" width="400" height="680" /></div>
                              <div id="navbase1"><img src="assets/Uniforms/P1D2/JERSEY/design2-nav1.png" width="400" height="680" /></div>
                              <div id="orgbase1"><img src="assets/Uniforms/P1D2/JERSEY/design2-org1.png" width="400" height="680" /></div>
                              <div id="redbase1"><img src="assets/Uniforms/P1D2/JERSEY/design2-red1.png" width="400" height="680" /></div>
                              <div id="roybase1"><img src="assets/Uniforms/P1D2/JERSEY/design2-roy1.png" width="400" height="680" /></div>
                              <div id="silbase1"><img src="assets/Uniforms/P1D2/JERSEY/design2-sil1.png" width="400" height="680" /></div>
                              <div id="turbase1"><img src="assets/Uniforms/P1D2/JERSEY/design2-tur1.png" width="400" height="680" /></div>
                              <div id="whtbase1"><img src="assets/Uniforms/P1D2/JERSEY/design2-wht1.png" width="400" height="680" /></div>

                              <div id="blkbase2"><img src="assets/Uniforms/P1D2/JERSEY/design2-blk2.png" width="400" height="680" /></div>
                              <div id="burbase2"><img src="assets/Uniforms/P1D2/JERSEY/design2-bur2.png" width="400" height="680" /></div>
                              <div id="chrbase2"><img src="assets/Uniforms/P1D2/JERSEY/design2-chr2.png" width="400" height="680" /></div>
                              <div id="colbase2"><img src="assets/Uniforms/P1D2/JERSEY/design2-col2.png" width="400" height="680" /></div>
                              <div id="gldbase2"><img src="assets/Uniforms/P1D2/JERSEY/design2-gld2.png" width="400" height="680" /></div>
                              <div id="hunbase2"><img src="assets/Uniforms/P1D2/JERSEY/design2-hun2.png" width="400" height="680" /></div>
                              <div id="kelbase2"><img src="assets/Uniforms/P1D2/JERSEY/design2-kel2.png" width="400" height="680" /></div>
                              <div id="lembase2"><img src="assets/Uniforms/P1D2/JERSEY/design2-lem2.png" width="400" height="680" /></div>
                              <div id="limbase2"><img src="assets/Uniforms/P1D2/JERSEY/design2-lim2.png" width="400" height="680" /></div>
                              <div id="navbase2"><img src="assets/Uniforms/P1D2/JERSEY/design2-nav2.png" width="400" height="680" /></div>
                              <div id="orgbase2"><img src="assets/Uniforms/P1D2/JERSEY/design2-org2.png" width="400" height="680" /></div>
                              <div id="redbase2"><img src="assets/Uniforms/P1D2/JERSEY/design2-red2.png" width="400" height="680" /></div>
                              <div id="roybase2"><img src="assets/Uniforms/P1D2/JERSEY/design2-roy2.png" width="400" height="680" /></div>
                              <div id="silbase2"><img src="assets/Uniforms/P1D2/JERSEY/design2-sil2.png" width="400" height="680" /></div>
                              <div id="turbase2"><img src="assets/Uniforms/P1D2/JERSEY/design2-tur2.png" width="400" height="680" /></div>
                              <div id="whtbase2"><img src="assets/Uniforms/P1D2/JERSEY/design2-wht2.png" width="400" height="680" /></div>


                              <div id="blksock1"><img src="assets/Uniforms/P1D2/SOCKS/design2-blk1.png" width="400" height="680" /></div>
                              <div id="bursock1"><img src="assets/Uniforms/P1D2/SOCKS/design2-bur1.png" width="400" height="680" /></div>
                              <div id="chrsock1"><img src="assets/Uniforms/P1D2/SOCKS/design2-chr1.png" width="400" height="680" /></div>
                              <div id="colsock1"><img src="assets/Uniforms/P1D2/SOCKS/design2-col1.png" width="400" height="680" /></div>
                              <div id="gldsock1"><img src="assets/Uniforms/P1D2/SOCKS/design2-gld1.png" width="400" height="680" /></div>
                              <div id="hunsock1"><img src="assets/Uniforms/P1D2/SOCKS/design2-hun1.png" width="400" height="680" /></div>
                              <div id="navsock1"><img src="assets/Uniforms/P1D2/SOCKS/design2-nav1.png" width="400" height="680" /></div>
                              <div id="orgsock1"><img src="assets/Uniforms/P1D2/SOCKS/design2-org1.png" width="400" height="680" /></div>
                              <div id="redsock1"><img src="assets/Uniforms/P1D2/SOCKS/design2-red1.png" width="400" height="680" /></div>
                              <div id="roysock1"><img src="assets/Uniforms/P1D2/SOCKS/design2-roy1.png" width="400" height="680" /></div>
                              <div id="whtsock1"><img src="assets/Uniforms/P1D2/SOCKS/design2-wht1.png" width="400" height="680" /></div>
          </div>



                          <div class="col-lg-6 colors">
                            <h3><b>Pick your jersey colors:</b></h3>
                            <h5>Primary Color</h5>

                              <div class="circle" style="background-color:#000000" onclick="MM_showHideLayers('blkbase1','','show','burbase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'BLK'"></div>

                              <div class="circle" style="background-color:#6F263D" onclick="MM_showHideLayers('blkbase1','','hide','burbase1','','show','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'BUR'"></div>

                              <div class="circle" style="background-color:#3F4444" onclick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chrbase1','','show','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'CHR'"></div>

                              <div class="circle" style="background-color:#92C1E9" onclick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chrbase1','','hide','colbase1','','show','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'COL'"></div>

                              <div class="circle" style="background-color:#FFB81C" onclick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','show','hunbase1','','hide','kelbase1','','hide','lembase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'GLD'"></div>

                              <div class="circle" style="background-color:#00594F" onclick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','show','kelbase1','','hide','lembase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'HUN'"></div>

                              <div class="circle" style="background-color:#009639" onclick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','show','lembase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'KEL'"></div>

                              <div class="circle" style="background-color:#C0DF16" onclick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','show','limbase1','','hide','navbase1','','hide','orgbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'LEM'"></div>

                              <div class="circle" style="background-color:#79C000" onclick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','hide','limbase1','','show','navbase1','','hide','orgbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'LIM'"></div>

                              <div class="circle" style="background-color:#00205B" onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','hide','limbase1','','hide','navbase1','','show','orgbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'NAV'"></div>

                              <div class="circle" style="background-color:#FF6900" onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','show','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'ORG'"></div>

                              <div class="circle" style="background-color:#BA0C2F" onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','redbase1','','show','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'RED'"></div>

                              <div class="circle" style="background-color:#001489" onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','redbase1','','hide','roybase1','','show','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'ROY'"></div>

                              <div class="circle" style="background-color:#A7A8AA" onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','show','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'SIL'"></div>

                              <div class="circle" style="background-color:#00B5E2" onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','show','whtbase1','','hide');document.getElementById('ballcolor1').value = 'TUR'"></div>

                              <div class="circle" style="background-color:#fff;border: 1px solid #eaeaea" onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','show');document.getElementById('ballcolor1').value = 'WHT'"></div>


                            <h5>Secondary color</h5>

                              <div class="circle" style="background-color:#000000" onClick="MM_showHideLayers('blkbase2','','show','burbase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'BLK'"></div>

                              <div class="circle" style="background-color:#6F263D" onclick="MM_showHideLayers('blkbase2','','hide','burbase2','','show','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'BUR'"></div>

                              <div class="circle" style="background-color:#3F4444" onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chrbase2','','show','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'CHR'"></div>

                              <div class="circle" style="background-color:#92C1E9" onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chrbase2','','hide','colbase2','','show','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'COL'"></div>

                              <div class="circle" style="background-color:#FFB81C" onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','show','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'GLD'"></div>

                              <div class="circle" style="background-color:#00594F" onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','show','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'HUN'"></div>

                              <div class="circle" style="background-color:#009639" onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','show','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'KEL'"></div>

                              <div class="circle" style="background-color:#C0DF16" onclick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','show','limbase2','','hide','navbase2','','hide','orgbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'LEM'"></div>

                              <div class="circle" style="background-color:#79C000" onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','show','navbase2','','hide','orgbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'LIM'"></div>

                              <div class="circle" style="background-color:#00205B" onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','show','orgbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'NAV'"></div>

                              <div class="circle" style="background-color:#FF6900" onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','show','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'ORG'"></div>

                              <div class="circle" style="background-color:#BA0C2F" onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','redbase2','','show','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'RED'"></div>

                              <div class="circle" style="background-color:#001489" onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','redbase2','','hide','roybase2','','show','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'ROY'"></div>

                              <div class="circle" style="background-color:#A7A8AA" onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','show','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'SIL'"></div>

                              <div class="circle" style="background-color:#00B5E2" onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','show','whtbase2','','hide');document.getElementById('ballcolor2').value = 'TUR'"></div>

                              <div class="circle" style="background-color:#fff;border: 1px solid #eaeaea" onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','show');document.getElementById('ballcolor2').value = 'WHT'"></div>


                              <h3><br>Now it's time to design your shorts:</h3>
                              <h5>Main color</h5>

                              <div class="circle" style="background-color:#000000" onclick="MM_showHideLayers('blksho1','','show','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','lemsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'BLK'"></div>
                              <div class="circle" style="background-color:#6F263D" onclick="MM_showHideLayers('blksho1','','hide','bursho1','','show','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','lemsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'BUR'"></div>
                              <div class="circle" style="background-color:#3F4444" onclick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','show','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','lemsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'CHR'"></div>
                              <div class="circle" style="background-color:#92C1E9" onclick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','show','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','lemsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'COL'"></div>
                              <div class="circle" style="background-color:#FFB81C" onclick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','show','hunsho1','','hide','kelsho1','','hide','lemsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'GLD'"></div>
                              <div class="circle" style="background-color:#00594F" onclick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','show','kelsho1','','hide','lemsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'HUN'"></div>
                              <div class="circle" style="background-color:#009639" onclick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','show','lemsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'KEL'"></div>
                              <div class="circle" style="background-color:#C0DF16" onclick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','lemsho1','','show','limsho1','','hide','navsho1','','hide','orgsho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'LEM'"></div>
                              <div class="circle" style="background-color:#79C000" onclick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','lemsho1','','hide','limsho1','','show','navsho1','','hide','orgsho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'LIM'"></div>
                              <div class="circle" style="background-color:#00205B" onClick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','lemsho1','','hide','limsho1','','hide','navsho1','','show','orgsho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'NAV'"></div>
                              <div class="circle" style="background-color:#FF6900" onClick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','lemsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','show','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'ORG'"></div>
                              <div class="circle" style="background-color:#BA0C2F" onClick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','lemsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','redsho1','','show','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'RED'"></div>
                              <div class="circle" style="background-color:#001489" onClick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','lemsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','redsho1','','hide','roysho1','','show','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'ROY'"></div>
                              <div class="circle" style="background-color:#A7A8AA" onClick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','lemsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','show','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'SIL'"></div>
                              <div class="circle" style="background-color:#00B5E2" onClick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','lemsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','show','whtsho1','','hide');document.getElementById('shocolor1').value = 'TUR'"></div>
                              <div class="circle" style="background-color:#fff;border: 1px solid #eaeaea" onClick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','lemsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','show');document.getElementById('shocolor1').value = 'WHT'"></div>

                              <h5>Accent Color</h5>

                              <div class="circle" style="background-color:#000" onclick="MM_showHideLayers('blksho2','','show','bursho2','','hide','chasho2','','hide','chrsho2','','hide','colsho2','','hide','gldsho2','','hide','hunsho2','','hide','kelsho2','','hide','lemsho2','','hide','limsho2','','hide','navsho2','','hide','orgsho2','','hide','redsho2','','hide','roysho2','','hide','silsho2','','hide','tngsho2','','hide','tursho2','','hide','whtsho2','','hide');document.getElementById('shocolor2').value = 'BLK'"></div>
                              <div class="circle" style="background-color:#6F263D" onclick="MM_showHideLayers('blksho2','','hide','bursho2','','show','chasho2','','hide','chrsho2','','hide','colsho2','','hide','gldsho2','','hide','hunsho2','','hide','kelsho2','','hide','lemsho2','','hide','limsho2','','hide','navsho2','','hide','orgsho2','','hide','redsho2','','hide','roysho2','','hide','silsho2','','hide','tngsho2','','hide','tursho2','','hide','whtbase2','','hide');document.getElementById('shocolor2').value = 'BUR'"></div>
                              <div class="circle" style="background-color:#3F4444" onclick="MM_showHideLayers('blksho2','','hide','bursho2','','hide','chasho2','','hide','chrsho2','','show','colsho2','','hide','gldsho2','','hide','hunsho2','','hide','kelsho2','','hide','lemsho2','','hide','limsho2','','hide','navsho2','','hide','orgsho2','','hide','redsho2','','hide','roysho2','','hide','silsho2','','hide','tngsho2','','hide','tursho2','','hide','whtsho2','','hide');document.getElementById('shocolor2').value = 'CHR'"></div>
                              <div class="circle" style="background-color:#92C1E9" onclick="MM_showHideLayers('blksho2','','hide','bursho2','','hide','chasho2','','hide','chrsho2','','hide','colsho2','','show','gldsho2','','hide','hunsho2','','hide','kelsho2','','hide','lemsho2','','hide','limsho2','','hide','navsho2','','hide','orgsho2','','hide','redsho2','','hide','roysho2','','hide','silsho2','','hide','tngsho2','','hide','tursho2','','hide','whtsho2','','hide');document.getElementById('shocolor2').value = 'COL'"></div>
                              <div class="circle" style="background-color:#FFB81C" onClick="MM_showHideLayers('blksho2','','hide','bursho2','','hide','chasho2','','hide','chrsho2','','hide','colsho2','','hide','gldsho2','','show','hunsho2','','hide','kelsho2','','hide','lemsho2','','hide','limsho2','','hide','navsho2','','hide','orgsho2','','hide','redsho2','','hide','roysho2','','hide','silsho2','','hide','tngsho2','','hide','tursho2','','hide','whtsho2','','hide');document.getElementById('shocolor2').value = 'GLD'"></div>
                              <div class="circle" style="background-color:#00594F" onClick="MM_showHideLayers('blksho2','','hide','bursho2','','hide','chasho2','','hide','chrsho2','','hide','colsho2','','hide','gldsho2','','hide','hunsho2','','show','kelsho2','','hide','lemsho2','','hide','limsho2','','hide','navsho2','','hide','orgsho2','','hide','redsho2','','hide','roysho2','','hide','silsho2','','hide','tngsho2','','hide','tursho2','','hide','whtsho2','','hide');document.getElementById('shocolor2').value = 'HUN'"></div>
                              <div class="circle" style="background-color:#009639" onClick="MM_showHideLayers('blksho2','','hide','bursho2','','hide','chasho2','','hide','chrsho2','','hide','colsho2','','hide','gldsho2','','hide','hunsho2','','hide','kelsho2','','show','lemsho2','','hide','limsho2','','hide','navsho2','','hide','orgsho2','','hide','redsho2','','hide','roysho2','','hide','silsho2','','hide','tngsho2','','hide','tursho2','','hide','whtsho2','','hide');document.getElementById('shocolor2').value = 'KEL'"></div>
                              <div class="circle" style="background-color:#C0DF16" onclick="MM_showHideLayers('blksho2','','hide','bursho2','','hide','chasho2','','hide','chrsho2','','hide','colsho2','','hide','gldsho2','','hide','hunsho2','','hide','kelsho2','','hide','lemsho2','','show','limsho2','','hide','navsho2','','hide','orgsho2','','hide','redsho2','','hide','roysho2','','hide','silsho2','','hide','tngsho2','','hide','tursho2','','hide','whtsho2','','hide');document.getElementById('shocolor2').value = 'LEM'"></div>
                              <div class="circle" style="background-color:#79C000" onClick="MM_showHideLayers('blksho2','','hide','bursho2','','hide','chasho2','','hide','chrsho2','','hide','colsho2','','hide','gldsho2','','hide','hunsho2','','hide','kelsho2','','hide','lemsho2','','hide','limsho2','','show','navsho2','','hide','orgsho2','','hide','redsho2','','hide','roysho2','','hide','silsho2','','hide','tngsho2','','hide','tursho2','','hide','whtsho2','','hide');document.getElementById('shocolor2').value = 'LIM'"></div>
                              <div class="circle" style="background-color:#00205B" onClick="MM_showHideLayers('blksho2','','hide','bursho2','','hide','chasho2','','hide','chrsho2','','hide','colsho2','','hide','gldsho2','','hide','hunsho2','','hide','kelsho2','','hide','lemsho2','','hide','limsho2','','hide','navsho2','','show','orgsho2','','hide','redsho2','','hide','roysho2','','hide','silsho2','','hide','tngsho2','','hide','tursho2','','hide','whtsho2','','hide');document.getElementById('shocolor2').value = 'NAV'"></div>
                              <div class="circle" style="background-color:#FF6900" onClick="MM_showHideLayers('blksho2','','hide','bursho2','','hide','chasho2','','hide','chrsho2','','hide','colsho2','','hide','gldsho2','','hide','hunsho2','','hide','kelsho2','','hide','lemsho2','','hide','limsho2','','hide','navsho2','','hide','orgsho2','','show','redsho2','','hide','roysho2','','hide','silsho2','','hide','tngsho2','','hide','tursho2','','hide','whtsho2','','hide');document.getElementById('shocolor2').value = 'ORG'"></div>
                              <div class="circle" style="background-color:#BA0C2F" onClick="MM_showHideLayers('blksho2','','hide','bursho2','','hide','chasho2','','hide','chrsho2','','hide','colsho2','','hide','gldsho2','','hide','hunsho2','','hide','kelsho2','','hide','lemsho2','','hide','limsho2','','hide','navsho2','','hide','orgsho2','','hide','redsho2','','show','roysho2','','hide','silsho2','','hide','tngsho2','','hide','tursho2','','hide','whtsho2','','hide');document.getElementById('shocolor2').value = 'RED'"></div>
                              <div class="circle" style="background-color:#001489" onClick="MM_showHideLayers('blksho2','','hide','bursho2','','hide','chasho2','','hide','chrsho2','','hide','colsho2','','hide','gldsho2','','hide','hunsho2','','hide','kelsho2','','hide','lemsho2','','hide','limsho2','','hide','navsho2','','hide','orgsho2','','hide','redsho2','','hide','roysho2','','show','silsho2','','hide','tngsho2','','hide','tursho2','','hide','whtsho2','','hide');document.getElementById('shocolor2').value = 'ROY'"></div>
                              <div class="circle" style="background-color:#A7A8AA" onClick="MM_showHideLayers('blksho2','','hide','bursho2','','hide','chasho2','','hide','chrsho2','','hide','colsho2','','hide','gldsho2','','hide','hunsho2','','hide','kelsho2','','hide','lemsho2','','hide','limsho2','','hide','navsho2','','hide','orgsho2','','hide','redsho2','','hide','roysho2','','hide','silsho2','','show','tngsho2','','hide','tursho2','','hide','whtsho2','','hide');document.getElementById('shocolor2').value = 'SIL'"></div>
                              <div class="circle" style="background-color:#00B5E2" onClick="MM_showHideLayers('blksho2','','hide','bursho2','','hide','chasho2','','hide','chrsho2','','hide','colsho2','','hide','gldsho2','','hide','hunsho2','','hide','kelsho2','','hide','lemsho2','','hide','limsho2','','hide','navsho2','','hide','orgsho2','','hide','redsho2','','hide','roysho2','','hide','silsho2','','hide','tngsho2','','hide','tursho2','','show','whtsho2','','hide');document.getElementById('shocolor2').value = 'TUR'"></div>
                              <div class="circle" style="background-color:#fff;border: 1px solid #eaeaea" onClick="MM_showHideLayers('blksho2','','hide','bursho2','','hide','chasho2','','hide','chrsho2','','hide','colsho2','','hide','gldsho2','','hide','hunsho2','','hide','kelsho2','','hide','lemsho2','','hide','limsho2','','hide','navsho2','','hide','orgsho2','','hide','redsho2','','hide','roysho2','','hide','silsho2','','hide','tngsho2','','hide','tursho2','','hide','whtsho2','','show');document.getElementById('shocolor2').value = 'WHT'"></div>

                              <h3><br>And design your socks:</h3>
                              <h5>Main color</h5>

                              <div class="circle" style="background-color:#000" onclick="MM_showHideLayers('blksock1','','show','bursock1','','hide','tgoldsock1','','hide','chrsock1','','hide','colsock1','','hide','gldsock1','','hide','hunsock1','','hide','kelsock1','','hide','tnavsock1','','hide','thunsock1','','hide','navsock1','','hide','orgsock1','','hide','redsock1','','hide','roysock1','','hide','silsock1','','hide','tredsock1','','hide','troysock1','','hide','whtsock1','','hide','tbursock1','','hide','tblacksock1','','hide');document.getElementById('sockcolor1').value = 'BLK'"></div>
                              <div class="circle" style="background-color:#6F263D" onclick="MM_showHideLayers('blksock1','','hide','bursock1','','show','tgoldsock1','','hide','chrsock1','','hide','colsock1','','hide','gldsock1','','hide','hunsock1','','hide','kelsock1','','hide','tnavsock1','','hide','thunsock1','','hide','navsock1','','hide','orgsock1','','hide','redsock1','','hide','roysock1','','hide','silsock1','','hide','tredsock1','','hide','troysock1','','hide','whtsock1','','hide','tbursock1','','hide','tblacksock1','','hide');document.getElementById('sockcolor1').value = 'BUR'"></div>
                              <div class="circle" style="background-color:#3F4444" onclick="MM_showHideLayers('blksock1','','hide','bursock1','','hide','tgoldsock1','','hide','chrsock1','','show','colsock1','','hide','gldsock1','','hide','hunsock1','','hide','kelsock1','','hide','tnavsock1','','hide','thunsock1','','hide','navsock1','','hide','orgsock1','','hide','redsock1','','hide','roysock1','','hide','silsock1','','hide','tredsock1','','hide','troysock1','','hide','whtsock1','','hide','tbursock1','','hide','tblacksock1','','hide');document.getElementById('sockcolor1').value = 'CHR'"></div>
                              <div class="circle" style="background-color:#92C1E9" onclick="MM_showHideLayers('blksock1','','hide','bursock1','','hide','tgoldsock1','','hide','chrsock1','','hide','colsock1','','show','gldsock1','','hide','hunsock1','','hide','kelsock1','','hide','tnavsock1','','hide','thunsock1','','hide','navsock1','','hide','orgsock1','','hide','redsock1','','hide','roysock1','','hide','silsock1','','hide','tredsock1','','hide','troysock1','','hide','whtsock1','','hide','tbursock1','','hide','tblacksock1','','hide');document.getElementById('sockcolor1').value = 'COL'"></div>
                              <div class="circle" style="background-color:#FFB81C" onClick="MM_showHideLayers('blksock1','','hide','bursock1','','hide','tgoldsock1','','hide','chrsock1','','hide','colsock1','','hide','gldsock1','','show','hunsock1','','hide','kelsock1','','hide','tnavsock1','','hide','thunsock1','','hide','navsock1','','hide','orgsock1','','hide','redsock1','','hide','roysock1','','hide','silsock1','','hide','tredsock1','','hide','troysock1','','hide','whtsock1','','hide','tbursock1','','hide','tblacksock1','','hide');document.getElementById('sockcolor1').value = 'GLD'"></div>
                              <div class="circle" style="background-color:#00594F" onClick="MM_showHideLayers('blksock1','','hide','bursock1','','hide','tgoldsock1','','hide','chrsock1','','hide','colsock1','','hide','gldsock1','','hide','hunsock1','','show','kelsock1','','hide','tnavsock1','','hide','thunsock1','','hide','navsock1','','hide','orgsock1','','hide','redsock1','','hide','roysock1','','hide','silsock1','','hide','tredsock1','','hide','troysock1','','hide','whtsock1','','hide','tbursock1','','hide','tblacksock1','','hide');document.getElementById('sockcolor1').value = 'HUN'"></div>
                              <div class="circle" style="background-color:#00205B" onClick="MM_showHideLayers('blksock1','','hide','bursock1','','hide','tgoldsock1','','hide','chrsock1','','hide','colsock1','','hide','gldsock1','','hide','hunsock1','','hide','kelsock1','','hide','tnavsock1','','hide','thunsock1','','hide','navsock1','','show','orgsock1','','hide','redsock1','','hide','roysock1','','hide','silsock1','','hide','tredsock1','','hide','troysock1','','hide','whtsock1','','hide','tbursock1','','hide','tblacksock1','','hide');document.getElementById('sockcolor1').value = 'NAV'"></div>
                              <div class="circle" style="background-color:#FF6900" onClick="MM_showHideLayers('blksock1','','hide','bursock1','','hide','tgoldsock1','','hide','chrsock1','','hide','colsock1','','hide','gldsock1','','hide','hunsock1','','hide','kelsock1','','hide','tnavsock1','','hide','thunsock1','','hide','navsock1','','hide','orgsock1','','show','redsock1','','hide','roysock1','','hide','silsock1','','hide','tredsock1','','hide','troysock1','','hide','whtsock1','','hide','tbursock1','','hide','tblacksock1','','hide');document.getElementById('sockcolor1').value = 'ORG'"></div>
                              <div class="circle" style="background-color:#BA0C2F" onClick="MM_showHideLayers('blksock1','','hide','bursock1','','hide','tgoldsock1','','hide','chrsock1','','hide','colsock1','','hide','gldsock1','','hide','hunsock1','','hide','kelsock1','','hide','tnavsock1','','hide','thunsock1','','hide','navsock1','','hide','orgsock1','','hide','redsock1','','show','roysock1','','hide','silsock1','','hide','tredsock1','','hide','troysock1','','hide','whtsock1','','hide','tbursock1','','hide','tblacksock1','','hide');document.getElementById('sockcolor1').value = 'RED'"></div>
                              <div class="circle" style="background-color:#001489" onClick="MM_showHideLayers('blksock1','','hide','bursock1','','hide','tgoldsock1','','hide','chrsock1','','hide','colsock1','','hide','gldsock1','','hide','hunsock1','','hide','kelsock1','','hide','tnavsock1','','hide','thunsock1','','hide','navsock1','','hide','orgsock1','','hide','redsock1','','hide','roysock1','','show','silsock1','','hide','tredsock1','','hide','troysock1','','hide','whtsock1','','hide','tbursock1','','hide','tblacksock1','','hide');document.getElementById('sockcolor1').value = 'ROY'"></div>
                              <div class="circle" style="background-color:#fff;border: 1px solid #eaeaea" onClick="MM_showHideLayers('blksock1','','hide','bursock1','','hide','tgoldsock1','','hide','chrsock1','','hide','colsock1','','hide','gldsock1','','hide','hunsock1','','hide','kelsock1','','hide','tnavsock1','','hide','thunsock1','','hide','navsock1','','hide','orgsock1','','hide','redsock1','','hide','roysock1','','hide','silsock1','','hide','tredsock1','','hide','troysock1','','hide','whtsock1','','show','tbursock1','','hide','tblacksock1','','hide');document.getElementById('sockcolor1').value = 'WHT'"></div>

                          </div>
                        </div>
                      </div>

<section class="prefooter section-gap align-items-center">
    <div class="container">
              <div class="row">
                    <div class="col-lg-6 col-md-6 single-footer-widget text-center">
                    <h2>Price starting at</h2>
                    <h1>$60.00</h1>
                      <p><a href="#con3" data-toggle="modal" class="genric-btn primary radius"  role="button">Kit Packages</a></p>
                    </div>

                  <div class="col-lg-6 col-md-6 single-footer-widget">
                    <h2 >SCORE FABRICS</h2>
                      <ul class="text-white mt-10">
                        <li>Moisture wicking fabric technology.</li>
                        <li>Breathable fabric to accommodate all climates.</li>
                        <li> State-of-the-art sublimation capabilities.</li>
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
      <li>Premier Kit includes</li>
      <ul>
        <br>
        <li>2 Jerseys</li>
        <li>2 Pairs of Shorts</li>
        <li>2 Pairs of Socks</li>
        <br>
      </ul>
      <li>Elite Kit</li>
      <ul>
        <br>
        <li>2 Jerseys</li>
        <li>1 Pair of Shorts</li>
        <li>2 Pairs of Socks</li>
        <br>
      </ul>
      <li>Travel Kit</li>
      <ul>
        <br>
        <li>2 Jerseys</li>
        <li>1 Pairs of Shorts</li>
        <li>1 Pairs of Socks</li>
        <br>
      </ul>
      <li>SCORE Kit</li>
      <ul>
        <br>
        <li>1 Jersey</li>
        <li>1 Pair of Shorts</li>
        <li>1 Pairs of Socks</li>
        <br>
      </ul>

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
          <br>
          <li>&#x25B8; 100 Player minimum order. Minimum orders must be at least <span style="padding-left:15px;">100 per item & color.</li>
          <li>&#x25B8; 3-year minimum contract is required.</li>
          <li>&#x25B8; Production time 4-5 weeks from the day the art and sample <span style="padding-left:15px;">uniform are approved and order is processed.</li>
          <li>&#x25B8; Sales representative will review the custom uniform timeline.</li>
          <li>&#x25B8; Preliminary/Booking order is highly recommended.</li>
          <li>&#x25B8; Time frames may change depending on the time of the year the <span style="padding-left:15px;">order is placed.</li>

          <li>&#x25B8; All remaining customized products must be purchased at the<span style="padding-left:15px;"> end of the agreement.</li>
          <br>
        </ul>
        <h5>Custom Uniform Order Tips</h5>
        <ul>
          <br>
          <li>&#x25B8; Select your color combinations ahead of time.</li>
          <li>&#x25B8; Provide a JPG format of your logo.</li>
          <li>&#x25B8; Allow enough time for art comps, approval & production time.</li>
          <br>
        </ul>
        <h5>Sizing Information</h5>
        <ul>
          <br>
          <li>Numerical Sizing Comparison</li>
          <br>
          <ul>
            <li>SCORE YXXS Similar to a 3-4</li>
            <li>SCORE YXS Similar to a 4-5</li>
            <li>SCORE YS Similar to a 5-6</li>
            <li>SCORE YM Similar to a 7-8</li>
            <li>SCORE YL Similar to a 10-12</li>
            <li>SCORE AS Similar to a 14-16</li>
            <br>
          </ul>
          <br>
          <li>This comparison gives an indication of sizes only and are by no means exact as they vary from manufacturer to manufacturer - sometimes by a full inch up and down.</li>
          <li>No custom uniforms will be manufactured between July 1, 2020 – September 30, 2020</li>
        </ul>
    </div>
    <div class="modal-footer">
      <button class="genric-btn primary radius" data-dismiss="modal">Close</button>
    </div>
  </div>
  </div>

	<!-- /WRAPPER -->

  <!--
  ███████  ██████   ██████  ████████ ███████ ██████
  ██      ██    ██ ██    ██    ██    ██      ██   ██
  █████   ██    ██ ██    ██    ██    █████   ██████
  ██      ██    ██ ██    ██    ██    ██      ██   ██
  ██       ██████   ██████     ██    ███████ ██   ██
  FOOTER
  -->
  <footer class="footer-area section-gap" id="contact">
    <div class="container">

      <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

        <fieldset >


          <input type='hidden' name='submitted' id='submitted' value='1'/>
          <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
          <input type='hidden'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

          <div><h2 align="center" style="margin-top:-10px"><input name="Design" id="design2" value="Pattern 1 - Design 1" type="hidden" /></h2>
          </div>
          <div id="order" class='short_explanation'>
          <h2>Order your customized uniform here:</h2>
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
  <label for='email' ><font color="#6D6E71">Primary Jersey Color*:</font></label>
  <input type='text' name='Priamary Color' id='ballcolor1' value='<?php echo $formproc->SafeDisplay('ballcolor1') ?>' maxlength="50" />
  <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class="col-sm-6">
  <label for='email' ><font color="#6D6E71">Secondary Jersey Color*:</font></label>
  <input type='text' name='Secondary Color' id='ballcolor2' value='<?php echo $formproc->SafeDisplay('ballcolor2') ?>' maxlength="50" />
  <span id='contactus_email_errorloc' class='error'></span>
</div>
<!-- <div class="col-sm-4">
  <label for='email' ><font color="#6D6E71">Neck Jersey Color*:</font></label>
  <input type='text' name='Accent Short Color' id='neckcolor3' value='<?php echo $formproc->SafeDisplay('neckcolor3') ?>' maxlength="50" />
  <span id='contactus_email_errorloc' class='error'></span>
</div> -->

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



  <!-- Start Footer Area -->
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
	<!-- <script src="assets/js/jquery.superslides.min.js"></script>
	<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.simple-text-rotator.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/packery-mode.pkgd.min.js"></script>
	<script src="assets/js/appear.js"></script>
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/jquery.fitvids.js"></script>
	<script src="assets/js/jquery.parallax-1.1.3.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="assets/js/gmaps.js"></script>-->

</body>
<script src="js/contact.js"></script>
<!-- <script src="js/custom.js"></script> -->
</html>
