<!DOCTYPE html>
<?php
require("../database/dbconnection.php");
session_start();	

if(isset($_POST['submit']))
{
	$no = $_POST['no'];
	
$qr="Delete from writeup where id=".$no;
if($connection->query($qr) === TRUE) 
{		
	echo 'successfully deleted ';
}
else
{
	echo mysqli_error();
}


$file = "../uploads/".$no.".png";
if (!unlink($file))
  {
  echo ("Error deleting $file");
  }
else
  {
  echo ("Deleted $file");
  }



}
else
{

?>
<html>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
	<b>Instructions: </b>
	Click on your article(read article) and there you will find a Perma-Link like:<br>
	http://www.theuntamedpen.com/url.php?orderby=no&no=34<br>
	Now you can see that <b>no=34</b> means your no is 34
	<br><br>
	
	
	
	<label>Article no &nbsp </label><input  type="text" name="no" placeholder="Like: 34" required><br><br>
	<input type="submit" name="submit">
  
</form>
</body>

	<script src="../googletrack/analyticstracking.js"></script>
</html>
<?php
}
?>