<!DOCTYPE html>
<head>
<noscript><meta http-equiv="refresh" content="0; url=/index.php?tag=login" /></noscript>
<script>
// Put this script in header or above select element
function check(elem) {
// use one of possible conditions
// if (elem.value == 'Other')
if (elem.selectedIndex == 3) {
document.getElementById("other-div").style.display = 'block';
} else {
document.getElementById("other-div").style.display = 'none';
}
}
</script>
</head>
<?php	
require("/database/dbconnection.php");
session_start();		

if(isset($_POST['submit']))
{
/*	$_SESSION["fname"]=$_POST["fname"];
	$_SESSION["lname"]=$_POST["lname"];
	$_SESSION["email"]=$_POST["email"];
	$_SESSION["username"]=$_POST["uname"];
	$_SESSION["phone"]=$_POST["phone"];
	$_SESSION["dob"]=$_POST["dob"];

	$sql_ins=mysql_query("update users set `f_name`='".$_SESSION["fname"]."',
										   `l_name`='".$_SESSION["lname"]."',
										   `username`='".$_SESSION["username"]."',
										   `email`='".$_SESSION["email"]."' ,
										   `phone`='".$_SESSION["phone"]."',
										   `dob`='".$_SESSION["dob"]."' 	where `id`=".$_SESSION["id"]);

	if($sql_ins==true)
	{
		?> 
		<script>
			alert("Changes saved successfully");
			
		</script>
		<?php
	}
	else
	{
		$msg="Update Error:".mysql_error();
		?> 
		<script>
			alert("<?php echo $msg;?> \n Redirecting you back\n");
		</script>
		<?php
	}*/
}

?>
	
<section id="team" >
<div class="container">
		<div class="row text-center header animate-in" data-anim-type="fade-in-up">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h3>Express Yourself with UTP</h3>
		<hr />
		</div>
		</div>
		
		<div class="row animate-in" data-anim-type="fade-in-up">

			<form method="POST"  class="login-form" >
			<div class="form-group">
			
				<div class="col-md-8" >
					<h3>Type</h3>
					<select style="max-width:60%;" class="form-control" name="type">
						  <option value="Article" >Article</option>
						  <option value="One Liner" >One Liner</option>
						  <option value="Story" >Story</option>
					</select>
					
					<h3>About</h3>
					<select style="max-width:60%;" class="form-control" name="type" id="mySelect" onChange="check(this);">
						  <option value="Real Life Experience" >Real Life Experience</option>
						  <option value="Fantasy" >Fantasy</option>
						  <option value="Others">Others</option>
					</select>
					
					<div id="other-div" style="display:none;">
					<h3>Enter your Name
					<input id="other-input"></input>
					</h3>
					</div>
					
					<h3>Mood</h3>
					<select style="max-width:60%;" class="form-control" name="type" id="mySelect" onChange="check(this);">
							<?php 
							$sql_ins1=mysql_query("Select distinct mood from writeup");
							while($rowres=mysql_fetch_assoc(mysql_query($sql_ins1)))
							{
								echo '<option value="'.$row["mood"].'" >'.$row["mood"].'</option>';
							}
							?>
						  <option>Others</option>		
					</select>
					
					
					<h3>Express Yourself &nbsp </h3>					
					<textarea  rows="25" cols="200" name="writing" class="form-control" value=""></textarea>
					<br><br><br>
					
					<input name="submit" type="submit" class="btn btn-success" value="Add Write-up">
				</div>
			</div>	
			</form>
		</div>
	</div>
</section>