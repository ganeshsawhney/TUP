<!DOCTYPE html>
<?php
		session_start();		
		if(isset($_SESSION["logincheck"]))
		{
			if($_SESSION["logincheck"]=="valid")
			{ 
				?> 
				<script>
					alert("Redirecting to Home Page\n");
					window.location.href= "home.php"; 
				</script>
				<?php
			}
		}
		
?>
 <body> 
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

      <form action="loginvalid.php" method="POST" class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
		  	<div class="light-pricing">    <!--div class="light-pricing popular"   For Light and Big Menu-->
				<div class="price">
				<font color=##1E90FF>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Login &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </font><br><br>
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
            <input id="email" type="email" name="email"class="validate" placeholder="Email">
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="password" class="validate"   placeholder="Password">
          </div>
        </div>
        
		<div class="row" align=center>
          <div class="input-field col s12">
            <div class="pricing-footer">
			<input type="submit" class="btn button-submit btn-custom-one" value="Login">
			</div>
          </div>
          
		 <div class="input-field col s12">
            <a href="?tag=signup" class="btn button-custom btn-custom-one">New user - Sign-up</a>
          </div>
        </div>
      </form>
</body>