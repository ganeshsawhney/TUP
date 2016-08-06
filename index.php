<!DOCTYPE html>
<?php
		session_start();		
		if(isset($_SESSION["logincheck"]))
		{
			if($_SESSION["logincheck"]=="valid")
			{ 
				/*?> 
				<script>
					//alert("Redirecting to Home Page\n");
					window.location.href= "home.php"; 
				</script>
				<?php*/	
			header('Location: home.php');
			}
		}
		

$tag="login";
if (isset($_GET['tag']))
	$tag=$_GET['tag'];
?>
<html lang="en" class="no-js" >
<style>

#div1 .tup {
font-size: 0%;
}
#div1 .tup1 {
font-size: 250%;
}
#div1:hover .tup {
font-size: 250%;
-webkit-transition: color 3s, font-size 3s;
   -moz-transition: color 3s, font-size 3s;
     -o-transition: color 3s, font-size 3s;
        transition: color 3s, font-size 3s;
		
		  color:#fff;
  text-transform:uppercase;
  animation:blur .75s ease-out infinite;
  text-shadow:0px 0px 5px #fff,
      0px 0px 7px #fff;
}


#div1:hover .tup1 {
font-size: 0%;
-webkit-transition: color 3s, font-size 3s;
   -moz-transition: color 3s, font-size 3s;
     -o-transition: color 3s, font-size 3s;
        transition: color 3s, font-size 3s;
}


@import url(http://fonts.googleapis.com/css?family=Open+Sans);

body{
 background:url('http://subtlepatterns.subtlepatterns.netdna-cdn.com/patterns/noisy_net.png') repeat;
}
#div1 .tup1{
  color:#fff;
  text-transform:uppercase;
  animation:blur .75s ease-out infinite;
  text-shadow:0px 0px 5px #fff,
      0px 0px 7px #fff;
}

@keyframes blur{
  from{
      text-shadow:0px 0px 10px #fff,
      0px 0px 10px #fff, 
      0px 0px 25px #fff,
      0px 0px 25px #fff,
      0px 0px 25px #fff,
      0px -10px 100px #7B96B8,
      0px -10px 100px #7B96B8;}
}




</style>
<link rel="icon" href="assets/img/symbol/favicon.ico" type="image/x-icon">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
				
<title>The Untamed Pen</title>
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
<div class="navbar-header ">
<div id="div1"><div class="tup1" style="Display:inline-block;">TUP &nbsp</div>
<a href="http://www.theuntamedpen.com"><img src="assets/img/symbol/logo.png" class="pppc" alt="TUP" style="background: white;box-shadow: 0px 0px 5px #fff;max-width:68px;max-height:51px;"></a>
<a href="http://www.theuntamedpen.com"><img src="assets/img/symbol/logo1.jpg" class="pppc" alt="TUP" style="background: white;box-shadow: 0px 0px 5px #fff;max-width:180px;max-height:80px;"></a>
&nbsp <a class="navbar-brand tup" href="http://www.theuntamedpen.com">The Untamed Pen</a>
</div>
</div>


<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li><a href="?tag=basic">HOME</a></li>
<li><a href="?tag=login">LOGIN</a></li>
<li><a href="?tag=team">OUR TEAM</a></li>
<li><a href="?tag=contactus">CONTACT US</a></li>
</ul>
</div>
</div>
</div>
<!--MENU SECTION END-->


<?php
if($tag=='login')
include "login.php";
else if($tag=='basic')
include "basic.php";
else if($tag=='signup')
include "signup.php";
else if($tag=='contactus')
include "contactus.php";
else if($tag=='team')
include "team.php";
else if($tag=='articles')
include "view_articles.php";
?>







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
