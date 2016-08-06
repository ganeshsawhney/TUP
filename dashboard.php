<!DOCTYPE html>
<noscript><meta http-equiv="refresh" content="0; url=index.php?tag=login" /></noscript>
<?php	
 require("database/dbconnection.php");
	
	session_start();		
	/*	if(!isset($_SESSION["logincheck"]))
		{
			/*?> 
				<script>
					//alert("You are not logged in\nRedirecting to login Page\n");
					window.location.href= "index.php?tag=login"; 
				</script>
			<?php
			header('Location: index.php?tag=login');
		}*/
$tag="dashboard";
if (isset($_GET['tag']))
	$tag=$_GET['tag'];
	
if(isset($_POST['submitinfo']))
{
	unset($_POST['submitinfo']);
	$sql_ins=mysql_query("update users set `about_me`='".trim($_POST['aboutme'])."'where `id`=".$_SESSION["id"]);
	if($sql_ins==true)
	{
		$_SESSION["aboutme"]=trim($_POST['aboutme']);
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
	}
}


if(isset($_POST['submitname']))
{
	unset($_POST['submitname']);
	$_SESSION["fname"]=$_POST["fname"];
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
	}
}


if(isset($_POST['submitfb']))
{
	$r=$_POST["fblink"];
	$sql_ins=mysql_query("update users set `fb_link`='".$r."'	where `id`=".$_SESSION["id"]);
	unset($_POST['submitfb']);
	if($sql_ins==true)
	{
	
	$_SESSION["fb_link"]=$r;
		?> 
		<script>
			alert("Changes saved successfully");
			header("Refresh:0");
		</script>
		<?php
	}
	else
	{
		$msg="Update Error:".mysql_error();
		?> 
		<script>
			alert("<?php echo $msg;?> \n Redirecting you back\n");
			header("Refresh:0");
		</script>
		<?php
	}
}

if(isset($_POST['submitgplus']))
{
	$r=$_POST["gpluslink"];
	$sql_ins=mysql_query("update users set `googleplus_link`='".$r."'	where `id`=".$_SESSION["id"]);
	unset($_POST['submitgplus']);
	if($sql_ins==true)
	{
	
	$_SESSION["googleplus_link"]=$r;
		?> 
		<script>
			alert("Changes saved successfully");
			header("Refresh:0");
		</script>
		<?php
	}
	else
	{
		$msg="Update Error:".mysql_error();
		?> 
		<script>
			alert("<?php echo $msg;?> \n Redirecting you back\n");
			header("Refresh:0");
		</script>
		<?php
	}
}

if(isset($_POST['submittwitter']))
{
	$r=$_POST["twitterlink"];
	$sql_ins=mysql_query("update users set `twitter_link`='".$r."'	where `id`=".$_SESSION["id"]);
	unset($_POST['submittwitter']);
	if($sql_ins==true)
	{
	
	$_SESSION["twitter_link"]=$r;
		?> 
		<script>
			alert("Changes saved successfully");
			header("Refresh:0");
		</script>
		<?php
	}
	else
	{
		$msg="Update Error:".mysql_error();
		?> 
		<script>
			alert("<?php echo $msg;?> \n Redirecting you back\n");
			header("Refresh:0");
		</script>
		<?php
	}
}

if(isset($_POST['submitlinkedin']))
{
	$r=$_POST["linkedinlink"];
	$sql_ins=mysql_query("update users set `linkedin_link`='".$r."'	where `id`=".$_SESSION["id"]);
	unset($_POST['submitlinkedin']);
	if($sql_ins==true)
	{
	
	$_SESSION["linkedin_link"]=$r;
		?> 
		<script>
			alert("Changes saved successfully");
			header("Refresh:0");
		</script>
		<?php
	}
	else
	{
		$msg="Update Error:".mysql_error();
		?> 
		<script>
			alert("<?php echo $msg;?> \n Redirecting you back\n");
			header("Refresh:0");
		</script>
		<?php
	}
}




if(isset($_POST["submitpic"])) 
{
		?> 
		<script>
			alert("Uploading ....................\nKindly wait for few seconds - Donot reload unless next message appears\n");
		</script>
		
		<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$target_file = $target_dir . $_SESSION["id"].".jpg" ;
// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
		$warn.="Error: File is not an image. ||||| ";
        $uploadOk = 0;
    }

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    $warn.="Sorry, your file is too large. ||||| ";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $warn.= "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ||||| ";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $warn.= "Sorry, your file was not uploaded. ||||| ";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $warn.= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        $warn.= "Sorry, there was an error uploading your file. ";
    }
}

?> 
		<script>
			alert("<?php echo $warn;?> \n Redirecting you back\n");
		</script>
		<?php

	header("Refresh:0");

}
?>


<style type="text/css">
.btn-social {
color: white;
opacity: 0.8;
}

.btn-social:hover {
color: white;
opacity: 1;
text-decoration: none;
}

.btn-facebook {
background-color: #3b5998;
}

.btn-twitter {
background-color: #00aced;
}

.btn-linkedin {
background-color: #0e76a8;
}

.btn-google {
background-color: #c32f10;
}
</style>

<div class="container">
        <section>
            <div class="row">
                <div class="col-md-4">
				<?php 
				$file = "uploads/";
				$file.=$_SESSION["id"];
				$file.=".jpg"; 
				
				if (file_exists($file)) 
				{
				?>
				<img class="img-responsive img-thumbnail" src="<?php echo $file;?>" alt="Profile Pic" style="max-width:304px;max-height:228px;">
				<?php
				}
				?>
                    <form method="post" enctype="multipart/form-data">
						<br>Select image to upload:
						<input type="file" name="fileToUpload" class="btn btn-primary" id="fileToUpload">
						<input type="submit" value="Upload Image" class="btn btn-primary" name="submitpic">
					</form>
                    <br />
                    <br />
					<form method="POST" class="login-form">
                    <label>Registered Username</label>
                    <input name="uname" type="text" class="form-control" value="<?php echo $_SESSION["username"];?>">
                    <label>Registered First Name</label>
                    <input name="fname" type="text" class="form-control" value="<?php echo $_SESSION["fname"];?>">
                    <label>Registered Last Name</label>
					<input name="lname" type="text" class="form-control" value="<?php echo $_SESSION["lname"];?>">
                    <label>Registered Email</label>
                    <input  name="email" type="text" class="form-control" value="<?php echo $_SESSION["email"];?>">
					<label>Registered Contact</label>
					<input name="phone" type="text" class="form-control" value="<?php echo $_SESSION["phone"];?>">
					<label>Date of Birth</label>
					<input name="dob" type="date" class="form-control" value="<?php echo $_SESSION["dob"];?>">
                    <br>
                    <input name="submitname" type="submit" class="btn btn-success" value="Update Details">
					</form>
                    <br /><br/>
                </div>
                <div class="col-md-8">
                    <div class="alert alert-info">
					<form method="POST" class="login-form" id="f1">
                        <h2>User Bio : </h2>
                        <h4>About ME</h4>
                        <p>
                             <textarea form="f1" name="aboutme" class="form-control"><?php echo $_SESSION["aboutme"];?>
							 </textarea>
                        </p>
						<input name="submitinfo" type="submit" class="btn btn-success" value="Update Info">
					</form>
                    </div>
						<br>
                    <div >
					<form method="POST" id="f2">
					<div class="row">
					<!-- $_SESSION["fb_link"] -->
					<input style="display: inline;width:200px" name="submitfb" type="submit" class="btn btn-success" value="Update Facebook Link:" >https://www.facebook.com/&nbsp <input style="display: inline;width:200px" name="fblink" type="text" class="form-control" value="<?php if($_SESSION["fb_link"]!='0')echo $_SESSION["fb_link"];?>">
					<br>
						
					<input style="display: inline;width:200px" name="submitgplus" type="submit" class="btn btn-success" value="Update Google+ Link:" > https://plus.google.com/&nbsp <input style="display: inline;width:200px" name="gpluslink" type="text" class="form-control" value="<?php if($_SESSION["googleplus_link"]!='0')echo $_SESSION["googleplus_link"];?>">
					<br>
					
					<input style="display: inline;width:200px" name="submittwitter" type="submit" class="btn btn-success" value="Update Twitter Link:" > https://twitter.com/&nbsp <input style="display: inline;width:200px" name="twitterlink" type="text" class="form-control" value="<?php if($_SESSION["twitter_link"]!='0')echo $_SESSION["twitter_link"];?>">
					<br>
					
					<input style="display: inline;width:200px" name="submitlinkedin" type="submit" class="btn btn-success" value="Update Linkedin Link:" > https://www.linkedin.com/in/&nbsp <input style="display: inline;width:200px" name="linkedinlink" type="text" class="form-control" value="<?php if($_SESSION["linkedin_link"]!='0')echo $_SESSION["linkedin_link"];?>">
					</div>
					
					
					
					
						
					</form>
                    </div>
                    <div class="form-group col-md-8">
                        <h3>Change Your Password</h3>
                        <br />
                        <label>Enter Old Password</label>
                        <input type="password" class="form-control">
                        <label>Enter New Password</label>
                        <input type="password" class="form-control">
                        <label>Confirm New Password</label>
                        <input type="password" class="form-control" />
                        <br>
                        <a href="#" class="btn btn-warning">Change Password</a>
                    </div>
                </div>
            </div>
            <!-- ROW END -->


        </section>
        <!-- SECTION END -->
    </div>