<?php
session_start();
include_once 'dbconnect.php';


$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

if(isset($_POST['btn-edit']))
{
 header("Location: editprofile.php");
}
?>






<html>
<head> 
<title>Profile</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
body, html
{
	width: 100%;
	height: 100%;
	font-family: 700 1em "News Cycle", sans-serif;
	letter-spacing:.15em;
	color: #ff6;
	background-color: #000;
	margin: 0;
}



</style>
</head>


<body>
<div class="main">
	<div class="container text-center">
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid text-center">
			<div class="navbar-header">
			  <a class="navbar-brand text-center" href="home.php">Rogue Troopers</a>
			</div>
			<div>
			  <ul class="nav navbar-nav">
				<li ><a href="home.php"><b>Home</b></a></li>
				<li ><a href="history.php"><b>History</b></a></li>
				<li><a href="movies.php"><b>Movies</b></a></li>
				<li><a href="games.php"><b>Games</b></a></li>
				<li><a href="tv.php"><b>TV Shows</b></a></li>
				<li><a href="book.php"><b>Books/Novels</b></a></li>
				<li><a href="expanded.php"><b>Expanded</b></a></li>
				<li><a href="logout.php?logout"><b>Logout</b></a></li>
			  </ul>
			</div>
		  </div>
		</nav>
		<div class="row">
		  <div class="col-md-3">
			<div class="text-center">
			  <img src="profile.jpg" height="250" width="250" alt="profile pic">
			  <h6>Upload a different photo...</h6>
			  
			  <input class="form-control" type="file">
			</div>
		  </div>
		<div class="col-md-9 personal-info">
       
        <h2>Personal info</h2>
        
        <form class="form-horizontal" role="form" method="post">
          <br><div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" value="First Name" type="text">
            </div>
          </div>
          <br><div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" value="Last name" type="text">
            </div>
          </div>
          <br><div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" value="<?php echo $userRow['email']; ?>" type="text">
            </div>
          </div>
          
          <br><div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" value="<?php echo $userRow['username']; ?>" type="text">
            </div>
          </div>
          <br><div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" value="<?php echo $userRow['password']; ?>" type="password">
            </div>
          </div>
          <br><div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" value="<?php echo $userRow['password']; ?>" type="password">
            </div>
          </div>
          <br><div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button type="submit" class="btn btn-primary" name="btn-edit">Save Changes</button>
              <span></span>
              <a href="home.html"><input class="btn btn-default" value="Cancel"></a>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
</div>







</body>
</html>
