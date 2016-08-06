﻿<!DOCTYPE html>
<?php

$view="";
	if (isset($_GET['view']))
	$view=$_GET['view'];

?>



<html lang="en" class="no-js" >
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<title>LIGHT WAVE</title>
<!-- BOOTSTRAP CORE CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<!-- ION ICONS STYLES -->
<link href="assets/css/ionicons.css" rel="stylesheet" />
<!-- FONT AWESOME ICONS STYLES -->
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<!-- FANCYBOX POPUP STYLES -->
<link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
<!-- STYLES FOR VIEWPORT ANIMATION -->
<link href="assets/css/animations.min.css" rel="stylesheet" />
<!-- CUSTOM CSS -->
<link href="assets/css/style-blue.css" rel="stylesheet" />
<!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body data-spy="scroll" data-target="#menu-section">
<!--MENU SECTION START-->
<div class="navbar navbar-inverse navbar-fixed-top scroll-me" id="menu-section" >
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">
<b>The Untamed Pen</b>
</a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li><a href="index.html">HOME</a></li>
<li><a href="#login">LOGIN</a></li>
<li><a href="view_articles.php">ARTICLES</a></li>
<li><a href="#team">OUR TEAM</a></li>
<li><a href="#contact">CONTACT US</a></li>
</ul>
</div>
</div>
</div>
<!--MENU SECTION END-->

<?php
if($view=="" || $view=="back")
{
?>

<!--WORK SECTION START-->
<section id="work" >
<div class="container">
<div class="row text-center header animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h3>Our Works</h3>
<hr />
</div>
</div>
<div class="row text-center animate-in" data-anim-type="fade-in-up" >
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pad-bottom">
<div class="caegories">
<a href="#" data-filter="*" class="active btn btn-custom btn-custom-two btn-sm">Overview</a>
<a href="#" data-filter=".article" class="btn btn-custom btn-custom-two btn-sm">Articles</a>
<a href="#" data-filter=".oneline" class="btn btn-custom btn-custom-two btn-sm">One Liners</a>
</div>
</div>
</div>
<div class="row text-center animate-in" data-anim-type="fade-in-up" id="work-div">


<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 article">
<div class="work-wrapper">
<a class="fancybox-media" title="Myowntitle" href="?view=art">
<img src="assets/img/portfolio/1.jpg" class="img-responsive img-rounded" alt="" />
<h4>All aricles one by one</h4>
</a>
</div>
</div>


<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 oneline">
<div class="work-wrapper">
<a class="fancybox-media" title="Image Title Goes Here" href="?view=art">
<img src="assets/img/portfolio/2.jpg" class="img-responsive img-rounded" alt="" />
</a>
<h4>All phrases one by one</h4>
</div>
</div>

<?php
}
else if($view=="art")
{
require("allarticles.php");}
?>
</div>
</div>

</section>
<!--WORK SECTION END-->



<!--CONTACT SECTION START-->
<section id="contact" >
<div class="container">
<div class="row text-center header animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<h3>Contact Details </h3>
<hr />

</div>
</div>

<div class="row animate-in" data-anim-type="fade-in-up">

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="contact-wrapper">
<h3>We Are Social</h3>
<p>
Talk to us .... We are always there for creative people.
</p>
<div class="social-below">
<a href="https://www.facebook.com/theuntamedpen" class="btn button-custom btn-custom-two" > Facebook</a>
<!--a href="https://www.facebook.com/theuntamedpen" class="btn button-custom btn-custom-two" > Twitter</a>
<a href="https://www.facebook.com/theuntamedpen" class="btn button-custom btn-custom-two" > Google +</a-->
</div>
</div>

</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="contact-wrapper">
<h3>Quick Contact</h3>
<h4><strong>Email : </strong> info@theuntamedpen.com </h4>
<h4><strong>Call : </strong> +91 9717694417 </h4>
<h4><strong>Skype : </strong> ganeshsawhney@yahoo.com </h4>
</div>

</div>

</div>


</div>
</section>
<!--CONTACT SECTION END-->

<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME -->
<!-- CORE JQUERY -->
<script src="assets/js/jquery-1.11.1.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.js"></script>
<!-- EASING SCROLL SCRIPTS PLUGIN -->
<script src="assets/js/vegas/jquery.vegas.min.js"></script>
<!-- VEGAS SLIDESHOW SCRIPTS -->
<script src="assets/js/jquery.easing.min.js"></script>
<!-- FANCYBOX PLUGIN -->
<script src="assets/js/source/jquery.fancybox.js"></script>
<!-- ISOTOPE SCRIPTS -->
<script src="assets/js/jquery.isotope.js"></script>
<!-- VIEWPORT ANIMATION SCRIPTS   -->
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/animations.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
</body>

</html>
