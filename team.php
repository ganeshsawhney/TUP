<!DOCTYPE html>
<section id="content">
<div class="container">
	<div class="row">
	    <div class="col-md-12" >
	        <div class="page-title">
	            <h2>Our Team</h2>
	        </div>
	    </div>
	</div>
	<div class="row container-post" >
	<a href="https://www.facebook.com/crucified.gaurav?fref=ts" target="_blank" >			
	<div class="col-md-4 col-sm-6">
	<div class="post-container" style="outline: 4px solid grey;">

	<div class="post-content">
	<div class="heading-title heading-small" >
	<h2>Gaurav Pandey</h2>
	</div>
	<div class="post-meta">
	<h5> <strong>Writer</strong></h5>
	<img class="img-rounded img-responsive" alt="TUP Team Member" width="400" height="526"  src="assets/img/team/Gaurav%20Pandey.jpg">
	</div>
	</div>
	</div>
	</div>
	</a>
				
	<a href="https://www.facebook.com/anshul.suri?fref=ts" target="_blank" >			
	<div class="col-md-4 col-sm-6">
	<div class="post-container" style="outline: 4px solid grey;">

	<div class="post-content">
	<div class="heading-title heading-small" >
	<h2>Anshul Suri</h2>
	</div>
	<div class="post-meta">

	<h5> <strong>Writer</strong></h5>
	<img class="img-rounded" alt="TUP Team Member" width="400" height="526" src="assets/img/team/Anshul%20Suri.jpg">
	</div>
	</div>
	</div>
	</div>
						
	</a>
	<a href="https://www.facebook.com/profile.php?id=100004766234588" target="_blank" >

	<div class="col-md-4 col-sm-6">
	<div class="post-container" style="outline: 4px solid grey;">

	<div class="post-content">
	<div class="heading-title heading-small" >
	<h2>Ganesh Sawhney</h2>
	</div>
	<div class="post-meta">
	<h5> <strong>Developer & Designer</strong></h5>
	<img class="img-rounded" alt="TUP Team Member" width="400" height="526"  src="assets/img/team/Ganesh%20Sawhney.jpg">
	</div>
	</div>
	</div>
	</div>
										
	</a>
	</div> 
	

        <div class="row">
            <div class="col-md-12" >
                <div class="page-title">
                    <h2>Our Writers</h2>
                </div>
            </div>
        </div>
<div class="row container-post" style="position: relative; height: 1026px;">

<?php 
require("database/dbconnection.php");

$result = mysqli_query($connection, "select author, COUNT(*) 'term_count' from writeup GROUP BY author ORDER BY term_count DESC, author");
if (mysqli_num_rows($result) > 0) 
{       
while($row = mysqli_fetch_assoc($result)) 
{
?>
			
<div class="col-md-4 col-sm-6">
<div class="post-container" style="outline: 4px solid grey;">

<div class="post-content">
<div class="heading-title heading-small" >
<a href="<?php echo $row['authorfblink'];?>" target="_blank" >	<h2><?php echo $row['author'];?></h2></a>
</div>
<div class="post-meta">
<h5> <strong>Total Posts: <?php echo $row['term_count'];?></strong></h5>
<a <?php echo 'onclick="loadDoc(\'specific_article.php?orderby=author&author='.urlencode($row['author']).'\')"';?>>
	<h5> <strong>View all Posts</strong></h5></a>
<img class="img-rounded img-responsive" alt="TUP Team Member" width="400" height="526"  src="assets/img/team/<?php echo str_ireplace(" ","%20",$row['author']);?>.jpg">
</div>
</div>
</div>
</div>
<?php
}
}

?>

			


        </div> 
        <!-- end:article -->

      </div>
    </section>