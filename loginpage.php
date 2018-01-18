<?php
session_start();
include_once 'dbconnect.php';
if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}

if(isset($_POST['btn-signup']))
{
 $uname = mysql_real_escape_string($_POST['uname']);
 $email = mysql_real_escape_string($_POST['email']);
 $upass = md5(mysql_real_escape_string($_POST['pass']));
 
 if(mysql_query("INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')"))
 {
  ?>
        <script>alert('successfully registered ');
		window.location.href = 'loginpage.php';
		</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}

include_once 'dbconnect.php';
if(isset($_POST['btn-login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $upass = mysql_real_escape_string($_POST['pass']);
 $res=mysql_query("SELECT * FROM users WHERE email='$email'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($upass))
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: home.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<style>
* {
		margin: 0;
		padding: 0;
		outline: none;
		
		-webkit-box-sizing: border-box;
  		-moz-box-sizing: border-box;
  		box-sizing: border-box;
	}
	
	body {
		color: black;
		-webkit-font-smoothing: antialiased;
		font-family: "Open Sans", Arial, Helvetica, Geneva, sans-serif;
		font-size: 16px;
		font-weight: 400;
		height: auto !important;
		height: 100%;
		line-height: 1.6em;
		min-height: 100%;
		background-image: url("http://www.blastr.com/sites/blastr/files/Star-Wars_0.jpg");
		background-size: cover;
	}
	
	h2 {
		color: #FFFF66;
		font-size: 2.2em;	
		font-weight: 200;
		margin: 0 0 24px 0;
	}
	
	/*BUTTON DESIGN*/
	[class*='btn-'] {
		border: none;
		border-bottom: 2px solid rgba(0,0,0,.15);
		border-top: 1px solid rgba(255,255,255,.15);
		border-radius: 3px;
		color: #000000;
		display: inline-block;
		font: -webkit-small-control;
		font-size: .7em;
		letter-spacing: 1px;
		line-height: 140%;
		padding: 10px 20px;
		text-decoration: none;
		
		text-transform: uppercase;
		
		-webkit-transition: all 0.1s linear;
     	-moz-transition: all 0.1s linear;
       	-o-transition: all 0.1s linear;
          transition: all 0.1s linear;
	}
	
		.btn-minimal {
		background-color: rgb(255,255,255);
		border-radius: 0;
		border: 1px solid rgb( 186, 186, 186 );
		color: rgb( 186, 186, 186 );
		
	}
	
		.btn-minimal:hover {
			background-color: #4195fc;
			border: 1px solid rgba(0,0,0,.1);
			color: rgb(255,255,255);
			cursor: pointer;
			text-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
		}
		
		.btn-minimal:active {
			box-shadow: 0 1px 1px rgba(0,0,0,0.15) inset;
			text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.25);
		}
	
	/*SECTION CONTAINER*/
	section#loginBox {
		background-color: transparent;
   border: 1px solid rgba(0,0,0,.15);
		border-radius: 0;
		box-shadow: 0 ;
		margin:  left;
		margin-top: 5px;
		margin-left: 25px;
		padding: 10px;
		width: 800px;
		height: 200px;
	}
	
	/*FORM*/
	form.minimal label {
		display: block;
		margin: 6px 0;	
	}
	
		form.minimal input[type="text"],
		form.minimal input[type="email"],
		form.minimal input[type="number"],
		form.minimal input[type="search"],
		form.minimal input[type="password"],
		form.minimal textarea {
			background-color: rgb(255,255,255);
			border: 1px solid rgb( 186, 186, 186 );
			border-radius: 2px;
			-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.08);
			-moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.08);
			  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.08);
			display: block;
			font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, 'lucida grande', tahoma, verdana, arial, sans-serif;
			font-size: 14px;
			margin: 6px 0 12px 0;
			padding: 8px;	
			text-shadow: 0 1px 1px rgba(255, 255, 255, 1);
			width: 50%;
			
			-webkit-transition: all 0.1s linear;
			-moz-transition: all 0.1s linear;
			-o-transition: all 0.1s linear;
			  transition: all 0.1s linear;
		}
		
		form.minimal input[type="text"]:focus,
		form.minimal input[type="email"]:focus,
		form.minimal input[type="number"]:focus,
		form.minimal input[type="search"]:focus,
		form.minimal input[type="password"]:focus,
		form.minimal textarea:focus,
		form.minimal select:focus { 
   		 	border-color: #4195fc;
    		-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 8px #4195fc;
			-moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 8px #4195fc;
			box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 8px #4195fc;
			color: rgb(0,0,0);
		}
		
			form.minimal input[type="text"]:invalid:focus,
			form.minimal input[type="email"]:invalid:focus,
			form.minimal input[type="number"]:invalid:focus,
			form.minimal input[type="search"]:invalid:focus,
			form.minimal input[type="password"]:invalid:focus,
			form.minimal textarea:invalid:focus,
			form.minimal select:invalid:focus { 
				border-color: rgb(248,66,66);
				-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 8px rgb(248,66,66);
				-moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 8px rgb(248,66,66);
				  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 8px rgb(248,66,66);
			}

p {
  color: rgba(0,0,0,.8)
  font-size: .8em;
  margin: 0 0 24px 0;
}


/*
	body {
		background-image: url("http://www.blastr.com/sites/blastr/files/Star-Wars_0.jpg");
		background-size: cover;
	}
	
	#login{
	color:white;
	}
	
	.button{
		position; absolute;
		top: 50%;
		left:50%;
	}
	

<script>
var frmvalidator  = new Validator("register");
frmvalidator.EnableOnPageErrorDisplay();
frmvalidator.EnableMsgsTogether();
 
frmvalidator.addValidation("email","req","Please provide your email address");
 
frmvalidator.addValidation("email","email","Please provide a valid email address");
 
frmvalidator.addValidation("newusername","req","Please provide a username");
 
frmvalidator.addValidation("newpassword","req","Please provide a password");


</script>

</style>



</head>

<body>






			<section id="loginBox">
				<h2>Login</h2>
				<form method="post" class="minimal">
					<label for="username">
						Email:
						<input type="text" name="email"  placeholder=" Your Email"/> <!-- pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" /> -->
					</label>
					<label for="password">
						Password:
						<input type="password" name="pass"  placeholder="Password"/> <!-- pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />-->
					</label>
					<button type="submit" class="btn-minimal" name="btn-login">Sign in</button></a>
					<a href="password.html"><button type="button" class="btn-minimal">Forgot Password?</button></a>
					<br><h1>OR</h1>
				</form>
				
			
				<form method="post" class="minimal" id="register">
				<h2>Sign Up</h2>
				
				
				
				
					<label for="newusername">
						Sign Up:
						<input type="text" name="uname" placeholder="Enter Username" required/> <!-- pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" /> -->
					</label>
					<label for="newpassword">
						Password:
						<input type="password" name="pass" maxlength="20" placeholder="Enter Password" required /> <!-- pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />-->
					</label>
					<label for="email">
						<h7>Email:</h7>
						<input type="email" name="email" placeholder="Enter Email"/> <!-- pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />-->
					</label>
					<button type="submit" class="btn-minimal" name="btn-signup">Sign Up</button></a>
				
				
				
				
				</form>
			</section>
			
				
	
		

</body>
</html>


















