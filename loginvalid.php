<?php
 require("database/dbconnection.php");
 session_start();
 $email=$_POST["email"];
 $pass=$_POST["password"];
$sql='select * from users where email="'.mysql_real_escape_string($email).'" and password="'.mysql_real_escape_string($pass).'"';
$res= mysql_query($sql);
if($res==true)
{
	if($row=mysql_fetch_assoc($res))
	{ 		
		$_SESSION["logincheck"]="valid";
		
		$_SESSION["fname"]=$row["f_name"];
		$_SESSION["lname"]=$row["l_name"];
		$_SESSION["email"]=$row["email"];
		$_SESSION["myself"]=$row["f_name"]." ".$row["l_name"]; 
		$_SESSION["id"]=$row["id"];
		$_SESSION["phone"]=$row["phone"];
		$_SESSION["dob"]=$row["dob"];
		$_SESSION["username"]=$row["username"];
		
		$_SESSION["aboutme"]=$row["about_me"];		
		
		if($row["fb_link"]!=NULL)
		$_SESSION["fb_link"]=$row["fb_link"];	
		else
		$_SESSION["fb_link"]=0;	
		
		if($row["googleplus_link"]!=NULL)
		$_SESSION["googleplus_link"]=$row["googleplus_link"];	
		else
		$_SESSION["googleplus_link"]=0;	
		
		if($row["twitter_link"]!=NULL)
		$_SESSION["twitter_link"]=$row["twitter_link"];	
		else
		$_SESSION["twitter_link"]=0;	
		
		if($row["linkedin_link"]!=NULL)
		$_SESSION["linkedin_link"]=$row["linkedin_link"];	
		else
		$_SESSION["linkedin_link"]=0;			
		
		header("Location: home.php");   	
	}


	else
	{
		unset($_SESSION["logincheck"]);
		?> 
		<script>
				alert("Wrong Email Password Combination \n Redirecting you back\n");
				 window.history.back();
		</script>
		<?php
	}
}
else
{
unset($_SESSION["logincheck"]);
$msg="Update Error: ".mysql_error();
?> 
<script>
		alert("<?php echo $msg;?> \n Redirecting you back\n");
		 window.history.back();
</script>
<?php
}

?>

