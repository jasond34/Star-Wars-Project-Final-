<?php
session_start();
include_once 'dbconnect.php';


$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Expanded Canon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
  .Title{
  font-size: 400%;
  font-family: sans-serif;
  }
 body,html{
		height: 100%;
	}

	/* remove outer padding */
	.main .row{
		padding: 0px;
		margin: 0px;
	}

	/*Remove rounded coners*/

	nav.sidebar.navbar {
		border-radius: 0px;
	}

	nav.sidebar, .main{
		-webkit-transition: margin 200ms ease-out;
	    -moz-transition: margin 200ms ease-out;
	    -o-transition: margin 200ms ease-out;
	    transition: margin 200ms ease-out;
	}

	/* Add gap to nav and right windows.*/
	.main{
		padding: 10px 10px 0 10px;
	}

	/* .....NavBar: Icon only with coloring/layout.....*/

	/*small/medium side display*/
	@media (min-width: 768px) {

		/*Allow main to be next to Nav*/
		.main{
			position: absolute;
			width: calc(100% - 40px); /*keeps 100% minus nav size*/
			margin-left: 40px;
			float: right;
		}

		/*lets nav bar to be showed on mouseover*/
		nav.sidebar:hover + .main{
			margin-left: 200px;
		}

		/*Center Brand*/
		nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
			margin-left: 0px;
		}
		/*Center Brand*/
		nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
			text-align: center;
			width: 100%;
			margin-left: 0px;
		}

		/*Center Icons*/
		nav.sidebar a{
			padding-right: 13px;
		}

		/*adds border top to first nav box */
		nav.sidebar .navbar-nav > li:first-child{
			border-top: 1px #e5e5e5 solid;
		}

		/*adds border to bottom nav boxes*/
		nav.sidebar .navbar-nav > li{
			border-bottom: 1px #e5e5e5 solid;
		}

		/* Colors/style dropdown box*/
		nav.sidebar .navbar-nav .open .dropdown-menu {
			position: static;
			float: none;
			width: auto;
			margin-top: 0;
			background-color: transparent;
			border: 0;
			-webkit-box-shadow: none;
			box-shadow: none;
		}

		/*allows nav box to use 100% width*/
		nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
			padding: 0 0px 0 0px;
		}

		/*colors dropdown box text */
		.navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
			color: #777;
		}

		/*gives sidebar width/height*/
		nav.sidebar{
			width: 200px;
			height: 100%;
			margin-left: -160px;
			float: left;
			z-index: 8000;
			margin-bottom: 0px;
		}

		/*give sidebar 100% width;*/
		nav.sidebar li {
			width: 100%;
		}

		/* Move nav to full on mouse over*/
		nav.sidebar:hover{
			margin-left: 0px;
		}
		/*for hiden things when navbar hidden*/
		.forAnimate{
			opacity: 0;
		}
	}

	/* .....NavBar: Fully showing nav bar..... */

	@media (min-width: 1330px) {

		/*Allow main to be next to Nav*/
		.main{
			width: calc(100% - 200px); /*keeps 100% minus nav size*/
			margin-left: 200px;
		}

		/*Show all nav*/
		nav.sidebar{
			margin-left: 0px;
			float: left;
		}
		/*Show hidden items on nav*/
		nav.sidebar .forAnimate{
			opacity: 1;
		}
	}

	nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
		color: #CCC;
		background-color: transparent;
	}

	nav:hover .forAnimate{
		opacity: 1;
	}
	section{
		padding-left: 15px;
	}

	body, html
{
	width: 100%;
	height: 100%;
	font-family: "Droid Sans", arial, verdana, sans-serif;
	font-weight: 700;
	color: #ff6;
	background-color: #000;

}

.footer{
   color: red;
}
</style>
<script type="text/javascript">
 function htmlbodyHeightUpdate(){
		var height3 = $( window ).height()
		var height1 = $('.nav').height()+50
		height2 = $('.main').height()
		if(height2 > height3){
			$('html').height(Math.max(height1,height3,height2)+10);
			$('body').height(Math.max(height1,height3,height2)+10);
		}
		else
		{
			$('html').height(Math.max(height1,height3,height2));
			$('body').height(Math.max(height1,height3,height2));
		}
		
	}
	$(document).ready(function () {
		htmlbodyHeightUpdate()
		$( window ).resize(function() {
			htmlbodyHeightUpdate()
		});
		$( window ).scroll(function() {
			height2 = $('.main').height()
  			htmlbodyHeightUpdate()
		});
	});
</script>

</head>

<body>
<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Reference/Info <br></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
			<li class="divider"></li>
				
				<li class="active"><a href="profile.php"><?php echo $userRow['username']; ?><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
				<li class="divider"></li>
				<li ><a href="aboutus.html">About Us<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
				<li class="divider"></li>
				<li class="dropdown">
					<li ><a href="#">Link/References<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-folder-open"></span></a>
						
						<li><a href="http://www.starwars.com/">Official Page</a></li>
						<li><a href="https://www.youtube.com/user/starwars"><img src="youtube.png" height="15" width="30"></a></li>
						<li><a href="http://starwars.wikia.com/wiki/Main_Page">Wookiepedia</a></li>
						<li><a href="http://www.501st.com/">Vader's Fist</a></li>
						<li><a href="http://www.ilm.com/">ILM</a></li>
						<li><a href="https://www.google.com/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=george+lucas">George Lucas</a></li>
						
						
						
						
						<li><a href="referencepage.txt">References</a></li>
				</li>
				<li class="divider"></li>
				<li class="dropdown">
					<a href="http://www.starwars.com/news/category/merchandise" class="dropdown-toggle" data-toggle="dropdown">Merchandise<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-shopping-cart"></span></a>
					
						<li><a href="http://disneytermsofuse.com/">Terms of Use</a></li>
						<li><a href="http://help.disney.com/articles/en_US/FAQ/Legal-Notices">Legal Notice</a></li>			
				</li>
			</ul>
		</div>
	</div>
</nav>



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
				<li class="active"><a href="expanded.php"><b>Expanded</b></a></li>
				<li><a href="logout.php?logout"><b>Logout</b></a></li>
			  </ul>
			</div>
		  </div>
		</nav>
							<div class="Title">
								Star Wars Expanded LOL JK
							</div>
		<h4>"Ay, moi moi. Mesa called Jar-Jar Binks. Mesa your humble servant."</h4>
		<img src="http://www.wallpaper4me.com/images/wallpapers/punchjarjar-701653.jpeg" height="750" width="1150"><br>
		<br><img src="http://static1.squarespace.com/static/53ed083be4b0cc5a9eceb84f/t/555b94dee4b01cd0e3bbf816/1432065248150/" height="750" width="1150"><br>
		<div class="row">	
					<div class="container">
						<div class="footer">
							<small>TM & © Lucasfilm Ltd. All Rights Reserved
						</div>
					</div>
			</div>

	</div>
</div>
</body>



</html>