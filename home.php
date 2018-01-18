<?php
session_start();
include_once 'dbconnect.php';


$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>

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

	
	
	
	
	
	
	
	
/* this is the css for the history text scroll  
reference site: http://blogs.sitepointstatic.com/examples/tech/css3-starwars/index.html */	

@import url(http://fonts.googleapis.com/css?family=Droid+Sans:400,700);

* { padding: 0; margin: 0; }

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

p#start
{
	position: relative;
	width: 17em;
	font-size: 200%;
	font-weight: 300;
	margin: 20% auto;
	color: #4ee;
	opacity: 0;
	z-index: 1;
	
	
	/* times to adjust the blue intro */
	-webkit-animation: intro 8s ease-out;
	-moz-animation: intro 8s ease-out;
	-ms-animation: intro 8s ease-out;
	-o-animation: intro 8s ease-out;
	animation: intro 8s ease-out;
}

@-webkit-keyframes intro {
	0% { opacity: 1; }
	90% { opacity: 1; }
	100% { opacity: 0; }
}

@-moz-keyframes intro {
	0% { opacity: 1; }
	90% { opacity: 1; }
	100% { opacity: 0; }
}

@-ms-keyframes intro {
	0% { opacity: 1; }
	90% { opacity: 1; }
	100% { opacity: 0; }
}

@-o-keyframes intro {
	0% { opacity: 1; }
	90% { opacity: 1; }
	100% { opacity: 0; }
}

@keyframes intro {
	0% { opacity: 1; }
	90% { opacity: 1; }
	100% { opacity: 0; }
}

h1
{
	position: absolute;
	width: 2.6em;
	left: 50%;
	top: 45%;
	font-size: 10em;
	text-align: center;
	margin-left: -1.3em;
	line-height: 0.8em;
	letter-spacing: -0.05em;
	color: #000;
	text-shadow: -2px -2px 0 #ff6, 2px -2px 0 #ff6, -2px 2px 0 #ff6, 2px 2px 0 #ff6;
	opacity: 0;
	z-index: 1;
	margin-top: -10%;
	
	
	/* time to adjust the scrolling title  , the second time is the time to wait 
	to come in*/
	-webkit-animation: logo 8s ease-out 9s;
	-moz-animation: logo 8s ease-out 9s;
	-ms-animation: logo 8s ease-out 9s;
	-o-animation: logo 8s ease-out 9s;
	animation: logo 8s ease-out 9s;
}

h1 sub
{
	display: block;
	font-size: 0.3em;
	letter-spacing: 0;
	line-height: 0.8em;
}

@-webkit-keyframes logo {
	0% { -webkit-transform: scale(1); opacity: 1; }
	50% { opacity: 1; }
	100% { -webkit-transform: scale(0.1); opacity: 0; }
}

@-moz-keyframes logo {
	0% { -moz-transform: scale(1); opacity: 1; }
	50% { opacity: 1; }
	100% { -moz-transform: scale(0.1); opacity: 0; }
}

@-ms-keyframes logo {
	0% { -ms-transform: scale(1); opacity: 1; }
	50% { opacity: 1; }
	100% { -ms-transform: scale(0.1); opacity: 0; }
}

@-o-keyframes logo {
	0% { -o-transform: scale(1); opacity: 1; }
	50% { opacity: 1; }
	100% { -o-transform: scale(0.1); opacity: 0; }
}

@keyframes logo {
	0% { transform: scale(1); opacity: 1; }
	50% { opacity: 1; }
	100% { transform: scale(0.1); opacity: 0; }
}

/* the interesting 3D scrolling stuff */
#titles
{
	position: absolute;
	width: 18em;
	height: 50em;
	bottom: 0;
	left: 50%;
	margin-left: -9em;
	font-size: 350%;
	text-align: justify;
	overflow: hidden;
	-webkit-transform-origin: 50% 100%;
	-moz-transform-origin: 50% 100%;
	-ms-transform-origin: 50% 100%;
	-o-transform-origin: 50% 100%;
	transform-origin: 50% 100%;
	-webkit-transform: perspective(300px) rotateX(25deg);
	-moz-transform: perspective(300px) rotateX(25deg);
	-ms-transform: perspective(300px) rotateX(25deg);
	-o-transform: perspective(300px) rotateX(25deg);
	transform: perspective(300px) rotateX(25deg);
}

#titles:after
{
	position: absolute;
	content: ' ';
	left: 0;
	right: 0;
	top: 0;
	bottom: 60%;
	background-image: -webkit-linear-gradient(top, rgba(0,0,0,1) 0%, transparent 100%);
	background-image: -moz-linear-gradient(top, rgba(0,0,0,1) 0%, transparent 100%);
	background-image: -ms-linear-gradient(top, rgba(0,0,0,1) 0%, transparent 100%);
	background-image: -o-linear-gradient(top, rgba(0,0,0,1) 0%, transparent 100%);
	background-image: linear-gradient(top, rgba(0,0,0,1) 0%, transparent 100%);
	pointer-events: none;
}

#titles p
{
	text-align: justify;
	margin: 0.8em 0;
}

#titles p.center
{
	text-align: center;
}

#titles a
{
	color: #ff6;
	text-decoration: underline;
}

#titlecontent
{

/* time for the text scroll to come in */
	position: absolute;
	top: 100%;
	-webkit-animation: scroll 100s linear 15s infinite;
	-moz-animation: scroll 100s linear 15s infinite;
	-ms-animation: scroll 100s linear 15s infinite;
	-o-animation: scroll 100s linear 15s infinite;
	animation: scroll 100s linear 15s infinite;
}

/* animation */
@-webkit-keyframes scroll {
	0% { top: 100%; }
	100% { top: -170%; }
}

@-moz-keyframes scroll {
	0% { top: 100%; }
	100% { top: -170%; }
}

@-ms-keyframes scroll {
	0% { top: 100%; }
	100% { top: -170%; }
}

@-o-keyframes scroll {
	0% { top: 100%; }
	100% { top: -170%; }
}

@keyframes scroll {
	0% { top: 100%; }
	100% { top: -170%; }
}

.footer{
	position:fixed;
   bottom:0;
   width:75%%;
   height:25px;
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

}
</script>

</head>

<body>

<audio autoplay>
  <source src="http://s.cdpn.io/1202/Star_Wars_original_opening_crawl_1977.ogg" type="audio/ogg" >
  <source src="http://s.cdpn.io/1202/Star_Wars_original_opening_crawl_1977.mp3" type="audio/mpeg" >

</audio>



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
						<li><a href="http://www.theforce.net/">Our Competition</a></li>
						
						
						
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

<!-- top nav bar -->


<div class="main">
	<div class="container text-center">
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid text-center">
			<div class="navbar-header">
			  <a class="navbar-brand text-center" href="home.php">Rogue Troopers</a>
			</div>
			<div>
			  <ul class="nav navbar-nav">
				<li class="active"><a href="home.php"><b>Home</b></a></li>
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


	<h2>Welcome, <?php echo $userRow['username']; ?></h2>						
	<div class="container-fluid text-center">
		
	<p id="start">A long time ago in a galaxy far, far away....</p>
	
      <h1><img src="http://img2.wikia.nocookie.net/__cb20120211213511/starwars/images/4/42/StarWarsOpeningLogo.svg" height="500" width="500"></h1>
	

	<div id="titles">
		<div id="titlecontent">
		
			<p>Star Wars is a science fiction franchise comprised of movies, books, comics, video games, toys, and animated shows. Star Wars story deals with themes common to science fiction, political climax and 
			classical mythology. As one of the foremost examples of the space opera sub-genre of science fiction, Star Wars has become part of mainstream popular culture, as well as being one of the highest-grossing 
			series of all time. 
			</p>
			<br>

			<p>In 1973, a young film maker named George Lucas scribbled some notes for a far-fetched space-fantasy epic. Some forty years and $37 billion later, Star Wars–related products outnumber human beings, 
			a growing stormtrooper army spans the globe, and “Jediism” has become a religion in its own right. Lucas’s creation has grown into far more than a cinematic classic; it is, quite simply, one of the most 
			lucrative, influential, and interactive franchises of all time. </p>
			<br>
			<p>Welcome to a Star Wars wiki page like non other before. Whether you are a die hard Star Wars fan, or a beginner, everyone can learn something from our website. Unlike other websites out there, 
			we tell you exactly what you need to be a proper Star Wars fan and what Star Wars is all about.</p>
			<br>
			<p>May the Force Be With You.</p>
			
		</div>
	</div>	
		
		
		


	</div>
	</div>




</body>

<footer>
	<div class="container">
	<div class="footer">
		<small>TM & © Lucasfilm Ltd. All Rights Reserved</small>
					
				   <small><span >&copy; 2015 Copyright Star Wars</span></small>
	</div>
	</div>

</footer>


</html>