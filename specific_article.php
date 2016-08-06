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
$orderby= $_GET['orderby'];
if($orderby=="no")
{
	$id = $_GET['no'];
	$result = mysqli_query($connection, "select * from writeup where id = ".$id);
}
else if($orderby=="type")
{

	$ty = $_GET['typeid'];
	$ty="'" . $ty . "'";
	$statement="select * from writeup where type = ".$ty;
	$result = mysqli_query($connection,$statement );

}
if (mysqli_num_rows($result) > 0) 
{		
while($row = mysqli_fetch_assoc($result)) 
{

?>

            
			
                <div class="post-container">
                    
                    <div class="post-content">
					<div class="heading-title heading-small">
                          <h2><a href=""><?php echo $row['heading'];?></a></h2>
                        </div>
                        <div class="post-meta">
                          <span>By <a href="" title="Post by" rel="author"><?php echo $row['author'];?></a></span>
                          <span><?php echo $row['dateofcreation'];?></span>
                          <span>In <a onclick="loadDoc('specific_article.php?orderby=type&typeid=<?php echo $row['type'];?>')"><?php echo $row['type'];?></a></span>
                        </div>
                        <p><?php echo $row['text'];?></p>
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
}
?>


        </div> 
        <!-- end:article -->

      </div>
    </section>
    <!-- end:content -->