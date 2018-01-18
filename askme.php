
<!--?php
session_start();
include_once 'dbconnect.php';


$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

if(isset($_POST['btn-submit']))
{

 $question = mysql_real_escape_string($_POST['Question']);
 $res=mysql_query("SELECT * FROM users WHERE question='$question'");
 $row=mysql_fetch_array($res);
?-->
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  
<title>Ask Me</title>

<style>
 body, html
{
	font-family: 700 1em "News Cycle", sans-serif;
	letter-spacing:.15em;
	background-color: #000;
	margin: 0;
}
</style>





</head>

<body>
<div class="main">
	<div class="container text-center">
		<div class="form-group">
		 <input type="text" class="form-control" name="question" placeholder="What is thy question young padawan?">
					<button type="submit" class="btn btn-default" onClick="window.close()" name="btn-submit">Submit</button></a>
	</div>
</div>
</body>

</html>