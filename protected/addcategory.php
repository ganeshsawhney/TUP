<html>
<body>
<?php 
if($_POST['submit'])
{

$fn = "../categories.txt"; 
$file = fopen($fn, "r+"); 
$towr=',
{
	"display": "'.$_POST['addition'].'",
}
]';
fseek($file,-2,SEEK_END);
fwrite($file, $towr);  
fclose($file); 
echo "<h1> Now you have to add a post on the same category..... Otherwise clicking on the category in the main site will hang it.......So add post now <a href='addarticle.php'>Click Here</a></h1>";
}
else
{
?> 
<form action="<?=$PHP_SELF?>" method="post"> 
<label>Enter New Category (properly like <b>New Category and not nEw caTegRy</b>) </label><br>
<input type="text" name="addition"/> <br><br>
<input type="submit" name="submit"/> 
</form>

</body>
</html>
<?php
}
?>

