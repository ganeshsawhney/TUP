<!DOCTYPE html>
<html lang="en" class="csstransforms csstransforms3d csstransitions" hola_ext_inject="disabled"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="The Untamed Pen: by ganesh sawhney: read,write,share">
    <meta name="keywords" content="blog, personal blog, tup, writeup">
    <meta name="author" content="GaneshSawhney">
    <link rel="shortcut icon" href="favicon.png">
	<link rel="icon" href="assets/img/symbol/favicon.ico" type="image/x-icon">
    <title>The Untamed Pen</title>
    <script type="text/javascript">
            function loadDoc(str) {


            $("#ajaxload").animate({
                    marginLeft: '400px',
                    width: '400px',
                    height: '100px'
                });
      $("#loadd").show();
        //  $("#ajaxload").slideUp("slow");
            $("#ajaxload").html("<div id=\"loadd\" class=\"container\"> <div class=\"row\" > <br><br><br><br><br><br><br> <div class=\"cs-loader\"> <div class=\"cs-loader-inner\"> <label> ●</label> <label> ●</label> <label> ●</label> <label> ●</label> <label> ●</label> <label> ●</label> </div> </div> </div> </div>").load(str, function() {
            //$(this).slideDown("slow");
                });

            $("#ajaxload").animate({
                    marginLeft: '0px',
                    opacity: '1',
                    height: '100%',
                    width: '100%'
                });
            }
    </script>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/css" rel="stylesheet" type="text/css">
    <link href="assets/css/css(1)" rel="stylesheet" type="text/css">
    <link href="assets/css/font-awesome-animation.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <link href="assets/css/responsive.min.css" rel="stylesheet">
    <link href="assets/css/blue.min.css" rel="stylesheet" id="color-style">

    <!-- begin:demo-css -->
    <link rel="stylesheet" href="assets/css/demo.css">
	<link rel="stylesheet" href="assets/css/contact-buttons.css">
		
    <!-- end:demo-css -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  <script type="text/javascript" charset="UTF-8" src="assets/js/common.js"></script>
  <script type="text/javascript" charset="UTF-8" src="assets/js/util.js"></script>
  <script type="text/javascript" charset="UTF-8" src="assets/js/stats.js"></script>
  <style>
  .getbig {
    position: relative;
    transition: 5s ease;
    cursor:pointer;
}

.getbig:hover {
    transform: scale(1.8, 1.8);
}
@media screen and (min-width: 0px) and (max-width: 720px) {
  .mobile-hide{ display: none; }
  .mobile-change{ padding-top: 22%; height: 5%; }
}
  </style>
  </head>

  <body>
  <style>
  a{
    cursor: pointer! important;
}</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="assets/js/jquery.contact-buttons.js"></script>
	<script src="assets/js/demo.js"></script>
    <!-- begin:navbar -->
    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" style="background-color: black;" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="mobile-hide navbar-brand" href="index.html"><font style='font-family: Georgia, serif;letter-spacing: 0px;'> <span>T</span>he <span>U</span>ntamed <span>P</span>en</font></a>
        </div>

               <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-top">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a onclick="loadDoc('allarticles.php');">Home</a></li>
            <!--li><a onclick="loadDoc('pages/about.php');">About</a></li>
            <li><a onclick="loadDoc('pages/contact.php');">Contact</a></li-->
            <li class="active dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
              <ul class="dropdown-menu" id="id011">
              </ul>
            </li>
            <li class="active"><a onclick="loadDoc('team.php');">Our Team</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- end:navbar -->
    
    <script src="categories.txt"></script>

<script>myFunction(myArray);

function myFunction(arr) {
    var out = '';
    var i;
    for(i = 0; i < arr.length; i++) {
        out += '<li><a onclick="loadDoc(\'specific_article.php?orderby=type&typeid=' + encodeURI(arr[i].display) + '\')">' + 
        arr[i].display + '</a></li> ';
    }
    out+='<li><a onclick="loadDoc(\'allarticles.php\');">All</a></li>';
    var idwe=document.getElementById("id011");
    idwe.innerHTML = out;
}
</script>


	
	

    <!-- begin:header -->
	<div id='black' style="background-color:black; "> 
    <div class="mobile-hide" id="header" style="padding-top: 9%; height: 80%;" >
        <div class="container mobile-change"  >
            <div class="row mobile-change" >
                <div class="col-md-8 col-md-offset-2" >
                    <blockquote cite="http://example.com">
						<span>
						<img style="max-width:40%;max-height:40%;" class="getbig" src="assets/img/8.jpg">
						</span>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </div>
	</div>
    <!-- end:header -->

    <style>
body {
  margin: 0;
  padding: 0;
}

.cs-loader {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
}

.cs-loader-inner {
  transform: translateY(-50%);
  top: 50%;
  position: absolute;
  width: calc(100% - 200px);
  color: black;
  padding: 0 100px;
  text-align: center;
}

.cs-loader-inner label {
  font-size: 20px;
  opacity: 0;
  display:inline-block;
}

@keyframes lol {
  0% {
    opacity: 0;
    transform: translateX(-300px);
  }
  33% {
    opacity: 1;
    transform: translateX(0px);
  }
  66% {
    opacity: 1;
    transform: translateX(0px);
  }
  100% {
    opacity: 0;
    transform: translateX(300px);
  }
}

@-webkit-keyframes lol {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-300px);
  }
  33% {
    opacity: 1;
    -webkit-transform: translateX(0px);
  }
  66% {
    opacity: 1;
    -webkit-transform: translateX(0px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(300px);
  }
}

.cs-loader-inner label:nth-child(6) {
  -webkit-animation: lol 3s infinite ease-in-out;
  animation: lol 3s infinite ease-in-out;
}

.cs-loader-inner label:nth-child(5) {
  -webkit-animation: lol 3s 100ms infinite ease-in-out;
  animation: lol 3s 100ms infinite ease-in-out;
}

.cs-loader-inner label:nth-child(4) {
  -webkit-animation: lol 3s 200ms infinite ease-in-out;
  animation: lol 3s 200ms infinite ease-in-out;
}

.cs-loader-inner label:nth-child(3) {
  -webkit-animation: lol 3s 300ms infinite ease-in-out;
  animation: lol 3s 300ms infinite ease-in-out;
}

.cs-loader-inner label:nth-child(2) {
  -webkit-animation: lol 3s 400ms infinite ease-in-out;
  animation: lol 3s 400ms infinite ease-in-out;
}

.cs-loader-inner label:nth-child(1) {
  -webkit-animation: lol 3s 500ms infinite ease-in-out;
  animation: lol 3s 500ms infinite ease-in-out;
}

  </style>
    

    
 
    
    
    
      
	
	
	
	
	
	
	
<div id="ajaxload" style="overflow:scroll;">



		<!-- begin:content -->
    <section id="content">
      <div class="container">
        <div class="row">
            <div class="col-md-12" >
                <div class="page-title">
                    <h2>Latest Article</h2>
                </div>
            </div>
        </div>
 <div class="row container-post" style="position: relative; height: 1026px;">
            <!-- begin:article -->      

<?php
$chk=0;
 require("database/dbconnection.php");
		session_start();	
		if(isset($_GET['orderby']))
		{
		$orderby= $_GET['orderby'];
		}
		else
		{
		header('Location: '.'index.html');
		}
$statement="select * from writeup";
$result = mysqli_query($connection,$statement);

if($orderby=="no")
{
	$chk=1;
	if(isset($_GET['no']))
	{
		$ty = $_GET['no'];
	}
	else
	{
		header('Location: '.'index.html');
	}
	$result = mysqli_query($connection, "select * from writeup where id = ".$ty);
}
else if($orderby=="type")
{
	if(isset($_GET['typeid']))
	{
		$ty = $_GET['typeid'];
	}
	else
	{
		header('Location: '.'index.html');
	}
	$ty="'" . $ty . "'";
	$statement="select * from writeup where type = ".$ty;
	$result = mysqli_query($connection,$statement );

}
else if($orderby=="author")
{

	if(isset($_GET['author']))
	{
		$ty = $_GET['author'];
	}
	else
	{
		header('Location: '.'index.html');
	}
	$ty="'" . $ty . "'";
	$statement="select * from writeup where author = ".$ty;
	$result = mysqli_query($connection,$statement );

}
else
{
header('Location: '.'index.html');
}
if (mysqli_num_rows($result) > 0) 
{		
while($row = mysqli_fetch_assoc($result)) 
{
if($chk==1){
$datevar = date_create($row['dateofcreation']);
$fdate= date_format($datevar, 'g:ia \o\n l jS F Y');
?>

             <script type="text/javascript">window.top.document.title = "TUP | <?php echo $row['heading'];?>";</script>
            
			
                <div class="post-container">
                    
                    <div class="post-content" style="outline: 8px solid grey;">
					<div class="heading-title heading-small">
                          <h2><a href=""><?php echo $row['heading'];?></a></h2>
                        </div>
                        <div class="post-meta">
												<span>Perma-Link: <a href="http://www.theuntamedpen.com/url.php?orderby=no&no=<?php echo urlencode($row['id']);?>">http://www.theuntamedpen.com/url.php?orderby=no&no=<?php echo urlencode($row['id']);?></a></span><br>
                         <span>In: <b><a onclick="loadDoc('specific_article.php?orderby=type&typeid=<?php echo urlencode($row['type']);?>')"><?php echo $row['type'];?></a></b></span>
						  <br>
                          <span>Date Added: <b><?php echo $fdate;?></b></span>
						  <br>

                          <span>By: <a href="<?php echo $row['authorfblink'];?>" title="Post by" rel="author" target="_Black"><b><?php echo $row['author'];?></b></a>
						  <br><a onclick="loadDoc('specific_article.php?orderby=author&author=<?php echo urlencode($row['author']);?>')" title="Post by" rel="author"><b>View Posts by <?php echo $row['author'];?> </b></a>
						  </span>
                        </div>

                        <?php
                        if($row['fileupload']=='yes')
                            {
                            ?>
                        <div class="post-content no-padding">
                        <img src="./uploads/<?php echo $row['id'];?>.png" alt="Image">
                    </div><br><br>
                    <?php
                }
                ?>

                        <button onclick="responsiveVoice.speak('<?php echo str_replace(array("\r","\n"),"",htmlspecialchars(addslashes($row['text']), ENT_QUOTES, 'UTF-8'));?>');" class="btn btn-info"><i class="fa faa-vertical animated fa-play"></i>&nbsp Listen to it </button><br><br>
                        <textarea style="width: 100%;     -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
	display:inline-block; border: solid 1px #000; min-height:500px;" disabled><?php echo $row['text'];?></textarea>


                        <br><br><br>

                        <button onclick="loadDoc('allarticles.php');" type="button" class="btn btn-info"><i class="fa faa-vertical animated fa-backward"></i>&nbsp Back to All Articles</i></button>
                    </div>
                    <!--div class="post-atribut">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href=""><span><i class="fa fa-heart"></i> 2000</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href=""><span><i class="fa fa-comments"></i> 400</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href=""><span><i class="fa fa-eye"></i> 2500</span></a>
                            </div>
                        </div>
                    </div-->
            </div>
			
			
			
<?php
}
else
{
$datevar = date_create($row['dateofcreation']);
$fdate= date_format($datevar, 'g:ia \o\n l jS F Y');
?>
			
			<div class="col-md-4 col-sm-6 col-lg-3">
                <div class="post-container" style="outline: 4px solid grey;">
                    
                    <div class="post-content">
					<div class="heading-title heading-small" >
                          <h2><a onclick="loadDoc('specific_article.php?orderby=no&no=<?php echo $row['id'];?>');"><?php echo $row['heading'];?></a></h2>
                        </div>
                        <div class="post-meta">
						<span>In: <b><a onclick="loadDoc('specific_article.php?orderby=type&typeid=<?php echo urlencode($row['type']);?>')"><?php echo $row['type'];?></a></b></span>
						  <br>
                          <span>Date Added: <b><?php echo $fdate;?></b></span>
						  <br>

                          <span>By: <a href="<?php echo $row['authorfblink'];?>" title="Post by" rel="author" target="_Black"><b><?php echo $row['author'];?></b></a>
						  <br><a onclick="loadDoc('specific_article.php?orderby=author&author=<?php echo urlencode($row['author']);?>')" title="Post by" rel="author"><b>View Posts by <?php echo $row['author'];?> </b></a>
						  </span><br>
                          
						  
                        </div>
                        <p><?php echo $art;?>.....</p>
						<div class="post-link">
						
                            <button onclick="loadDoc('specific_article.php?orderby=no&no=<?php echo $row['id'];?>');" type="button" class="btn btn-info"><i class="fa faa-vertical animated fa-expand"></i>&nbsp Read more</i></button>
                        </div>
                    </div>
                    <!--div class="post-atribut">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href=""><span><i class="fa fa-heart"></i> 2000</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href=""><span><i class="fa fa-comments"></i> 400</span></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a href=""><span><i class="fa fa-eye"></i> 2500</span></a>
                            </div>
                        </div>
                    </div-->
                </div>
            </div>
<?php
}
}
}
else
{
header('Location: '.'index.html');
}
?>


        </div> 
        <!-- end:article -->

      </div>
    </section>
    <!-- end:content -->


</div>
	
	
	
	
	
	
	
	
	
	
	
	
	

  
    <!-- begin:footer -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <!--div class="col-md-3 col-sm-3">
                    <div class="widget">
                        <h3>Recent Post</h3>
                        <ul class="list-unstyled">
                            <li><a href="pages/#">Post</a></li>
                            <li><a href="pages/#">Post</a></li>
                            <li><a href="pages/#">Post</a></li>
                            <li><a href="pages/#">Post</a></li>
                            <li><a href="pages/#">Post</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="widget">
                        <h3>Useful Links</h3>
                        <ul class="list-unstyled">
                            <li><a href="pages/#">Link</a></li>
                            <li><a href="pages/#">Link</a></li>
                            <li><a href="pages/#">Home</a></li>
                            <li><a href="pages/#">About</a></li>
                            <li><a href="pages/#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-5">
                    <div class="footer-logo">
                        <h2><i class="fa fa-pencil"></i> Ganesh Sawhney</h2>
                        <p>1239, Arun Vihar<br>+91 9717694417</p>
                        <br>
                        <p class="muted">© 2016 TUP</p>
                        <a href="pages/#">Terms of Service</a> <span>/</span> 
                        <a href="pages/#">Privacy</a>
                    </div>
                </div-->
            </div>
        </div>
    </section>
    <!-- end:footer -->

    <!-- begin:copyright -->
    <section id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 copy-left">
            <p>Copyright © 2016 <strong>TUP</strong>. All Right Reserved.</p>
          </div>

          <div class="col-md-6 col-sm-6 copy-right">
            <ul class="list-inline social-icon">
              <!--li><a href="pages/#" class="icon-twitter" rel="tooltip" title="" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li-->
              <li><a href="https://www.facebook.com/theuntamedpen/" target="_Blank" class="icon-facebook" rel="tooltip" title="" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook-square"></i></a></li>
              <!--li><a href="pages/#" class="icon-youtube" rel="tooltip" title="" data-placement="top" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></li>
              <li><a href="pages/#" class="icon-instagram" rel="tooltip" title="" data-placement="top" data-original-title="Instagram"><i class="fa fa-instagram"></i></a></li-->
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- end:copyright -->
    


   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/js/js"></script>
    <script src="assets/js/gmap3.min.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/jquery.parallax.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script src="assets/js/demo.js"></script>
	
	<script src="googletrack/analyticstracking.js"></script>
    <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
  
</body></html>