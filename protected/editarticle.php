<!DOCTYPE html>
<?php
require("../database/dbconnection.php");
session_start();	

if(!isset($_POST['submitoutter']) && !isset($_POST['submit']))
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
	<input type="submit" name="submitoutter">
  
</form>
</body>
</html>
<?php
}
else
{

if(isset($_POST['submit']))
{
	$type = $_POST['type'];
	$noo = $_POST['no'];
	$heading = $_POST['heading'];
	$author = $_POST['author'];
	$text = $_POST['text'];
	$authorfblink = $_POST['authorfblink'];
	
	$text= str_replace ('“', '"', $text);
	$text= str_replace ('”', '"', $text);
	$text= str_replace ('‘', '\'', $text);
	$text= str_replace ('’', '\'', $text);
	
$heading= str_replace ('“', '"', $heading);
$heading= str_replace ('”', '"', $heading);
$heading= str_replace ('‘', '\'', $heading);
$heading= str_replace ('’', '\'', $heading);
	
$type = trim($type);
$heading = trim($heading);
$author = trim($author);
$text = mysqli_real_escape_string($connection,$text);
$heading = mysqli_real_escape_string($connection,$heading);
$authorfblink = mysqli_real_escape_string($connection,$authorfblink);
	
$qr="Update writeup set `type`='$type' , `heading`='$heading' , `author`='$author' , `text`='$text' , `authorfblink`='$authorfblink' where id=".$noo;
if($connection->query($qr) === TRUE) 
{		
	echo 'successfully updated/edited ';
}
else
{
	echo $qr.'<br>';
	echo mysqli_error();
}			
}
else{
	
	$notaken=$_POST['no'];
	$statement="select * from writeup where id = ".$notaken;
	$result = mysqli_query($connection,$statement );
	$row = mysqli_fetch_assoc($result);
	
$htmlstr=$row['type'];
?>

<html>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" id="editart">
	<input hidden type="hidden" name="no" value="<?php echo $notaken;?>" ><br>
	<label>Type like Article Story Line - See categories in main site [Remember to keep 1st letter capital] &nbsp </label><br>
	

		<div id="id01"></div>
	<br><br>
	<label>Any Heading &nbsp </label><br>
	<input  type="text" name="heading" value="<?php echo $row['heading']?>" required><br><br>
	<br>
	<label>Posted by -  Name [Remember to keep 1st letter capital eg Ganesh Sawhney and not gaNesH sAwhney] &nbsp </label><br>
	<input  type="text" name="author" value="<?php echo $row['author']?>" required><br><br>
	<br>
	<textarea  rows="25" cols="200" name="text"><?php echo $row['text']?></textarea>
	<br><br>
	<label>Auther Facebook Link [Remember - FULL with HTTPS//www.face....] &nbsp </label><br>
	<input  type="text" name="authorfblink" value="<?php echo $row['authorfblink']?>" required><br><br><br>
	<input type="submit" name="submit">
  
</form>
</body>


<script src="../categories.txt"></script>

<script>
var gg="<?php echo $htmlstr; ?>";
myFunction(myArray);



function myFunction(arr) {
    var out = '<select name="type" form="editart"><option value="';

		out+=gg;
		out+='">';

		out+=gg;
		out+='</option>';
    var i;
    for(i = 0; i < arr.length; i++) {
        out += '<option value="' + arr[i].display + '">' + 
        arr[i].display + '</option> ';
    }

    out+='</select>';

    var idwe=document.getElementById("id01");
    idwe.innerHTML = out;
}
</script>

	<script src="../googletrack/analyticstracking.js"></script>
</html>

<?php
}
}