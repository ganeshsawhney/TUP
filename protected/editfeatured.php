<!DOCTYPE html>
<?php
require("../database/dbconnection.php");
session_start();	

if(!isset($_POST['submitoutter']))
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
	
	
	
	<label>Article no &nbsp </label><input  type="text" name="no" placeholder="Ex: 34" required><br><br>

  
	<label>Featured or not?? &nbsp </label>
<select name="feature">
	<option value="1">Yes</option>
	<option value="0">No</option>
	</select>

	<br><br>
	<input type="submit" name="submitoutter">
  
</form>
</body>
</html>
<?php
}
else
{


	$noo = $_POST['no'];	
	$feature = $_POST['feature'];
	

	
$qr="Update writeup set `featured`=".$feature." where id=".$noo;
if($connection->query($qr) === TRUE) 
{		
	echo 'successfully updated/edited ';
}
else
{
	echo $qr.'<br>';
	echo mysqli_error($connection);
}			
}
?>