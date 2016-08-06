<!DOCTYPE html>
<?php
 require("database/dbconnection.php");
		session_start();		
		if(isset($_SESSION["logincheck"]))
		{
			if($_SESSION["logincheck"]=="valid")
			{ 
				/*?> 
				<script>
					//alert("Redirecting to Home Page\n");
					window.location.href= "home.php"; 
				</script>
				<?php*/	
			header('Location: home.php');
			}
		}
		
if(isset($_POST['submit']))
{
	$f_name=$_POST['fname'];
	$l_name=$_POST['lname'];
	$uname=$_POST['uname'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	
	$password=$_POST['password'];

	$sql_ins=mysql_query("insert into users(`f_name`,`l_name`,`username`,`email`,`phone`,`dob`,	`password`) values ('$f_name','$l_name','$uname','$email',$contact,'$dob','$password')");

	if($sql_ins==true)
	{
		?> 
		<script>
			alert("YUP you are signed in !!! \nRedirecting to Login Page\n");
			window.location.href= "index.php?tag=login"; 
		</script>
		<?php
	}
	else
	{
		$msg="Update Error:".mysql_error();
		?> 
		<script>
			alert("<?php echo $msg;?> \n Redirecting you back\n");
			 window.history.back();
		</script>
		<?php
	}
}
else
{

?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

<style type="text/css">

html {
    display: table;
    margin: auto;
	align-self: center;
}
.margin {
  margin: 0 !important;
}
</style>

      <form method="POST" class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
		  	<div class="light-pricing">    <!--div class="light-pricing popular"   For Light and Big Menu-->
				<div class="price">
				<font color=##1E90FF>&nbsp &nbsp &nbsp &nbsp Sign-up &nbsp &nbsp &nbsp &nbsp </font><br><br>
				</div>
			</div>
          </div>
        </div>
		
        <!--div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" class="validate">
            <label for="username" class="center-align">Username</label>
          </div>
        </div-->
		<div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="name" type="text" name="fname" class="validate" placeholder="First Name">
          </div>
        </div>
		<div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="name" type="text" name="lname" class="validate" placeholder="Last Name">
          </div>
        </div>
		<div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-account-box prefix"></i>
            <input id="name" type="text" name="uname" class="validate" placeholder="User Name">
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="email" type="email" name="email" class="validate" placeholder="Email">
          </div>
        </div>
		<div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-phone prefix"></i>
            <input id="contact" type="text" name="contact" class="validate"  placeholder="Contact No.">
          </div>
        </div>
		<div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-editor-insert-invitation prefix"></i>
            <input id="date" type="date" name="dob" class="validate" placeholder="Date Of Birth">
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="password" class="validate"   placeholder="Password">
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password-again" type="password"   placeholder="Re-type password">
          </div>
        </div>
        
		<div class="row" align=center>
          <div class="input-field col s12">
            <div class="pricing-footer">
			<input name="submit" type="submit" class="btn button-submit btn-custom-one" value="Sign-up">
			</div>
          </div>
          
		 <div class="input-field col s12">
            <a href="?tag=login" class="btn button-custom btn-custom-one">Already have an account - Login</a>
          </div>
        </div>
      </form>
<?php
}?>