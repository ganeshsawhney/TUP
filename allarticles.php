<!DOCTYPE html>

		<!-- begin:content -->
    <section id="content">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title">
                    <h2>Latest Article</h2>
                </div>
            </div>
        </div>
 <div class="row container-post" style="position: relative; height: 1026px;">
            <!-- begin:article -->      

<?php
 require("database/dbconnection.php");
		session_start();	
$result = mysqli_query($connection, "select * from writeup ORDER BY dateofcreation DESC");
if (mysqli_num_rows($result) > 0) 
{		
while($row = mysqli_fetch_assoc($result)) 
{
$art=substr($row['text'], 0, 100);

?>

            
			
			<div class="col-md-4 col-sm-6">
                <div class="post-container">
                    
                    <div class="post-content">
					<div class="heading-title heading-small">
                          <h2><a href=""><?php echo $row['heading'];?></a></h2>
                        </div>
                        <div class="post-meta">
                          <span>By <a href="" title="Post by" rel="author"><?php echo $row['author'];?></a></span>
                          <span><?php echo $row['dateofcreation'];?></span>
                          <span>In <a href="">Story</a></span>
                        </div>
                        <p><?php echo $art;?>.....</p>
						<div class="post-link">
                            <a href=""><span>Read more</span></a>
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
?>


        </div> 
        <!-- end:article -->

      </div>
    </section>
    <!-- end:content -->