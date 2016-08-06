<?php
					if($_SESSION["fb_link"]!='0')
					{
                        ?>
						<a target="_Blank" href="https://www.facebook.com/'.$_SESSION["fb_link"].'" class="btn btn-social btn-facebook"><i class="fa fa-facebook"></i>&nbsp; Facebook</a>
						<?php
						
					}
					?>
						<input style="width:300px" name="fblink" type="text" class="form-control" placeholder="Update Facebook Link"><input name="submitfb" type="submit" class="btn btn-success" value="a" ></div>
						<?php
					if($_SESSION["googleplus_link"]!=0)
					{
                        echo '<a target="_Blank" href="https://plus.google.com/'.$_SESSION["googleplus_link"].'" class="btn btn-social btn-google">
                            <i class="fa fa-google-plus"></i>&nbsp; Google+</a>';
						
					}
					else
					{
						?>
						<input name="submitgplus" type="submit" class="btn btn-success" value="Update Google+ Link">
						<?php
					}
					
					if($_SESSION["twitter_link"]!=0)
					{
                        echo '<a target="_Blank" href="https://twitter.com/'.$_SESSION["twitter_link"].'" class="btn btn-social btn-twitter">
                            <i class="fa fa-twitter"></i>&nbsp; Twitter</a>';
						
					}
					else
					{
						?>
						<input name="submittwitter" type="submit" class="btn btn-success" value="Update Twitter Link">
						<?php
					}
					
					if($_SESSION["linkedin_link"]!=0)
					{
                        echo '<a target="_Blank" href="https://www.linkedin.com/in/'.$_SESSION["linkedin_link"].'" class="btn btn-social btn-linkedin">
                            <i class="fa fa-linkedin"></i>&nbsp; Linkedin</a>';
						
					}
					else
					{
						?>
						<input name="submitlinkedin" type="submit" class="btn btn-success" value="Update Linkedin Link">
						<?php
					}
					?>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					










<!-- Carousel
================================================== -->
<div class="overlay"><h1>Overlay Text</h1></div>
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
	<h3>
	Creativity Indeed !<br>
	</h3>
	<p>Read some mind refreshing articles.</p>
      <!--div class="container">
        <div class="carousel-caption">
		Read some mind refreshing articles.
          </div>
      </div-->
    </div>
    <div class="item">
	<h3>
	Originality<br>
	</h3>
	<p>
	All the stuff here is original and authentic.
	</p>
      <!--div class="container">
        <div class="carousel-caption">
	All the stuff here is original and authentic.
          
        </div-->
      </div>
	  
    </div>
	

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <i class="glyphicon glyphicon-chevron-left"></i>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <i class="glyphicon glyphicon-chevron-right"></i>
  </a>  
</div>
<!-- /.carousel -->

