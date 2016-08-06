<!DOCTYPE html>
<?php
require("database/dbconnection.php");
session_start();	

if(isset($_POST['submit']))
{
	$type = $_POST['type'];
	$heading = $_POST['heading'];
	$author = $_POST['author'];
	$text = $_POST['text'];
	$authorfblink = $_POST['authorfblink'];
	
$type = trim($type);
$heading = trim($heading);
$author = trim($author);
$text = trim($text);
$authorfblink = trim($authorfblink);
	
$qr="INSERT INTO writeup (`type`,`heading`,`author`,`text`,`authorfblink`) VALUES('$type' , '$heading' , '$author' , '$text' , '$authorfblink')";
if($connection->query($qr) === TRUE) 
{		
	echo 'successfully registered ';
}
else
{
	echo mysqli_error();
	echo "INSERT INTO writeup (type,heading,author,text,authorfblink) VALUES('$type' , '$heading' , '$author' , '$text' , '$authorfblink')";
}			
}

?>

<html>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
	
	<input  type="text" name="type" placeholder="Type like Article story Liner">
	<input  type="text" name="heading" placeholder="Heading">
	<input  type="text" name="author" placeholder="Author Name">
	<input  type="text" name="text" placeholder="Content">
	<input  type="text" name="authorfblink" placeholder="Auther Fb Link">
	<input type="submit" name="submit">
  
</form>
</body>
</html>