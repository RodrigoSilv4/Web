<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php  
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:404.html');
	}

$logado = $_SESSION['login'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>By RodrigoSilva</title>
<link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="#" type="img/x-icon">

<meta itemprop="name" content="<?= $pg_title; ?>"/>
<meta itemprop="description" content="#"/>
<meta property="og:description" content="#">
<meta itemprop="image" content="img/logo-branca.png"/>


<!-- GOOGLE -->
<meta name="google-site-verification" content="GOo0-in0bq4CHUR8m_eFhpSDpZWJXPR2Tm6TA64nsn8" />

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href=css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/remodal.css" rel="stylesheet" type="text/css">
<link href="css/remodal-default-theme.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/geral.js"></script>
<script type="text/javascript" src="js/remodal.min.js"></script>


<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->


</head>
<body>
<div class="floating-alert-messages"></div>
<div style="overflow:hidden;">
<header class="header" id="header"><!--header-start-->
  <div class="container">
    	<figure class="logo animated fadeInDown delay-07s">
        	<a href="#"><img src="img/logo.png" alt="" width="126" height="101"></a>
        </figure>
<!--
        <h1 class="animated fadeInDown delay-07s">SITES QUE SE ADAPTAM A TODOS OS APARELHOS</h1>
        <ul class="we-create animated fadeInUp delay-1s">
        	<li>ALCAN�E CLIENTES EM TODAS AS PLATAFORMAS, COMO SMARTPHONE, TABLET, NOTEBOOK E DESKTOP.</li>
        </ul>

				<h1 class="animated fadeInDown delay-07s">O SEU SITE FEITO A M�O</h1>
        <ul class="we-create animated fadeInUp delay-1s">
        	<li>UM SITE BEM FEITO � COMO UMA OBRA DE ARTE �NICA E EXCLUSIVA.</li>
        </ul>

				<h1 class="animated fadeInDown delay-07s">MARKETING DIGITAL</h1>
        <ul class="we-create animated fadeInUp delay-1s">
        	<li>DIVULGUE SUA MARCA NA INTERNET E TENHA RESULTADOS EXPRESSIVOS EM SEU NEG�CIO.</li>
        </ul>
-->
				<section class="slide">
						<article class="slide_item first">
							<h1 class="animated fadeInDown delay-07s">By RodrigoSilva</h1>
							<ul class="we-create animated fadeInUp delay-1s">
								<li>ProjectSuicida</li>
							</ul>
						</article>
						<article class="slide_item">
							<h1 class="animated fadeInDown delay-07s">O seu site feito a m�o</h1>
							<ul class="we-create animated fadeInUp delay-1s">
								<li>UM SITE BEM FEITO � COMO UMA OBRA DE ARTE �NICA E EXCLUSIVA.</li>
							</ul>
						</article>
						<article class="slide_item">
							<h1 class="animated fadeInDown delay-07s">Marketing Digital</h1>
        			        <ul class="we-create animated fadeInUp delay-1s">
        			        	<li>DIVULGUE SUA MARCA NA INTERNET E TENHA RESULTADOS EXPRESSIVOS EM SEU NEG�CIO.</li>
        			        </ul>
						</article>
				</section>
            <a data-remodal-target="modal" class="link animated fadeInUp delay-1s" href="#">RC:12942495</a>
  </div><br>
</header><!--header-end-->


<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">
        		<li>
        		  </div>
</nav><!--main-nav-end--></li>
<section class="main-section container-service" id="service"><!--main-section-start-->
	<div class="container">
    	<h2><?php 
	echo" Bem vindo $logado";
	?>    	</h2>
    	<h6>
    	  <div class="col2">
        	<h4>Mudar Nick<br>
        	</h4>
        </div>

</h6>
      <div class="row">
        <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s"></div>
      </div>
  </div>
</section><!--main-section-end-->



<section class="main-section alabaster container-enterprise"><!--main-section alabaster-start-->
	<div class="container">
   	  <div class="row">
		<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
            	<img  src="img/logo.png" alt="" width="85" height="70">
          </figure>
    	</div>
	</div>
</section><!--main-section alabaster-end-->



<Script Language='Javascript'>
<!--
document.write(unescape('%3C%73%65%63%74%69%6F%6E%20%63%6C%61%73%73%3D%22%6D%61%69%6E%2D%73%65%63%74%69%6F%6E%20%70%61%64%64%69%6E%64%22%20%69%64%3D%22%50%6F%72%74%66%6F%6C%69%6F%22%3E%3C%21%2D%2D%6D%61%69%6E%2D%73%65%63%74%69%6F%6E%2D%73%74%61%72%74%2D%2D%3E%0A%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6E%74%61%69%6E%65%72%22%3E%0A%20%20%20%20%09%3C%68%32%3E%4E%6F%73%73%6F%73%20%50%61%72%63%65%69%72%6F%73%0A%3C%21%2D%2D%0A%09%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%70%6F%72%74%66%6F%6C%69%6F%46%69%6C%74%65%72%22%3E%0A%20%20%20%20%20%20%20%20%3C%75%6C%20%63%6C%61%73%73%3D%22%50%6F%72%74%66%6F%6C%69%6F%2D%6E%61%76%20%77%6F%77%20%66%61%64%65%49%6E%20%64%65%6C%61%79%2D%30%32%73%22%3E%0A%20%20%20%20%20%20%20%20%09%3C%6C%69%3E%3C%61%20%68%72%65%66%3D%22%23%22%20%64%61%74%61%2D%66%69%6C%74%65%72%3D%22%2A%22%20%63%6C%61%73%73%3D%22%63%75%72%72%65%6E%74%22%20%3E%41%6C%6C%3C%2F%61%3E%3C%2F%6C%69%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%6C%69%3E%3C%61%20%68%72%65%66%3D%22%23%22%20%64%61%74%61%2D%66%69%6C%74%65%72%3D%22%2E%62%72%61%6E%64%69%6E%67%22%20%3E%42%72%61%6E%64%69%6E%67%3C%2F%61%3E%3C%2F%6C%69%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%6C%69%3E%3C%61%20%68%72%65%66%3D%22%23%22%20%64%61%74%61%2D%66%69%6C%74%65%72%3D%22%2E%77%65%62%64%65%73%69%67%6E%22%20%3E%57%65%62%20%64%65%73%69%67%6E%3C%2F%61%3E%3C%2F%6C%69%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%6C%69%3E%3C%61%20%68%72%65%66%3D%22%23%22%20%64%61%74%61%2D%66%69%6C%74%65%72%3D%22%2E%70%72%69%6E%74%64%65%73%69%67%6E%22%20%3E%50%72%69%6E%74%20%64%65%73%69%67%6E%3C%2F%61%3E%3C%2F%6C%69%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%6C%69%3E%3C%61%20%68%72%65%66%3D%22%23%22%20%64%61%74%61%2D%66%69%6C%74%65%72%3D%22%2E%70%68%6F%74%6F%67%72%61%70%68%79%22%20%3E%50%68%6F%74%6F%67%72%61%70%68%79%3C%2F%61%3E%3C%2F%6C%69%3E%0A%20%20%20%20%20%20%20%20%3C%2F%75%6C%3E%0A%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%2D%2D%3E%09%3C%2F%68%32%3E%0A%09%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%70%6F%72%74%66%6F%6C%69%6F%43%6F%6E%74%61%69%6E%65%72%20%77%6F%77%20%66%61%64%65%49%6E%55%70%20%64%65%6C%61%79%2D%30%34%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%20%50%6F%72%74%66%6F%6C%69%6F%2D%62%6F%78%20%70%72%69%6E%74%64%65%73%69%67%6E%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%09%3C%61%20%68%72%65%66%3D%22%23%22%20%74%61%72%67%65%74%3D%22%5F%62%6C%61%6E%6B%22%3E%3C%69%6D%67%20%73%72%63%3D%22%68%74%74%70%3A%2F%2F%69%2E%69%6D%67%75%72%2E%63%6F%6D%2F%57%4B%70%6E%78%44%53%2E%70%6E%67%22%20%61%6C%74%3D%22%22%20%77%69%64%74%68%3D%22%32%37%30%22%20%68%65%69%67%68%74%3D%22%31%35%33%22%3E%3C%2F%61%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%09%20%20%3C%68%33%3E%52%6F%64%72%69%67%6F%53%69%6C%76%61%3C%2F%68%33%3E%0A%09%09%09%09%09%09%09%09%09%3C%70%3E%52%6F%64%72%69%67%6F%53%69%6C%76%61%3C%2F%70%3E%0A%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%3C%2F%64%69%76%3E%0A%3C%2F%73%65%63%74%69%6F%6E%3E%3C%21%2D%2D%6D%61%69%6E%2D%73%65%63%74%69%6F%6E%2D%65%6E%64%2D%2D%3E%0A%3C%73%65%63%74%69%6F%6E%20%63%6C%61%73%73%3D%22%6D%61%69%6E%2D%73%65%63%74%69%6F%6E%20%63%6C%69%65%6E%74%2D%70%61%72%74%22%20%69%64%3D%22%63%6C%69%65%6E%74%22%3E%3C%21%2D%2D%6D%61%69%6E%2D%73%65%63%74%69%6F%6E%20%63%6C%69%65%6E%74%2D%70%61%72%74%2D%73%74%61%72%74%2D%2D%3E%0A%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6E%74%61%69%6E%65%72%22%3E%0A%09%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%74%65%78%74%2D%61%62%6F%75%74%2D%75%73%22%3E%51%75%65%6D%20%53%6F%6D%6F%73%3C%2F%68%32%3E%0A%0A%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%72%6F%77%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%3C%2F%73%65%63%74%69%6F%6E%3E%0A%3C%21%2D%2D%62%75%73%69%6E%65%73%73%2D%74%61%6C%6B%69%6E%67%2D%65%6E%64%2D%2D%3E%0A%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6E%74%61%69%6E%65%72%22%3E%0A%3C%73%65%63%74%69%6F%6E%20%63%6C%61%73%73%3D%22%6D%61%69%6E%2D%73%65%63%74%69%6F%6E%20%63%6F%6E%74%61%63%74%22%20%69%64%3D%22%63%6F%6E%74%61%63%74%22%3E'));
</Script>

    <div class="row"></div>
</section>
</div>
<Script Language='Javascript'>

document.write(unescape('%3C%66%6F%6F%74%65%72%20%63%6C%61%73%73%3D%22%66%6F%6F%74%65%72%22%3E%0A%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6E%74%61%69%6E%65%72%22%3E%0A%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%66%6F%6F%74%65%72%2D%6C%6F%67%6F%22%3E%3C%61%20%68%72%65%66%3D%22%23%22%3E%3C%69%6D%67%20%73%72%63%3D%22%69%6D%67%2F%6C%6F%67%6F%2E%70%6E%67%22%20%61%6C%74%3D%22%22%3E%3C%2F%61%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%70%3E%42%79%20%52%6F%64%72%69%67%6F%53%69%6C%76%61%40%30%36%2F%31%30%2F%32%30%31%36%3C%2F%70%3E%0A%20%20%20%20%3C%2F%64%69%76%3E'));
//-->
</Script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-84861322-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>
