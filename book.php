<?php
session_start();
include_once 'dbconnect.php';


$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Books/ Novels</title>
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

h2 {
    cursor: pointer;
    color: #696;
    font-weight:bold;
    background-image:url('http://idratherbewriting.com/wp-content/uploads/2013/03/plus3.jpg');
    background-repeat:no-repeat;
    text-indent:23px;
    background-position:4px 8px;
}
.open {
    background-image:url('http://idratherbewriting.com/wp-content/uploads/2013/03/minusb.jpg');
}

.section{
	color: red;
	margin-left: 75px;
	margin-bottom: 20px;
	margin-right: 75px;
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
	
	//JS for expand


$(document).ready(function () {
    $('.section').hide();
    $('h2').click(function () {
        $(this).toggleClass("open");
        $(this).next().toggle();
    }); //end toggle

    $('#expandall').click(function () {
        $('.section').show();
        $('h2').addClass("open");
    });

    $('#collapseall').click(function () {
        $('.section').hide();
        $('h2').removeClass("open");
    });

});
	
	//JS for the countdown<!--
// Author: Patrick Fairfield
// Fairfield Consulting
// change your event date event here.



var eventdate = new Date("September 4, 2015 0:0:00");
function toSt(n) {
s=""
if(n<10) s+="0"
return s+n.toString();
}

function countdown() {
cl=document.clock;
d=new Date();
count=Math.floor((eventdate.getTime()-d.getTime())/1000);
if(count<=0)
{cl.days.value ="----";
cl.hours.value="--";
cl.mins.value="--";
cl.secs.value="--";
return;
}
cl.secs.value=toSt(count%60);
count=Math.floor(count/60);
cl.mins.value=toSt(count%60);
count=Math.floor(count/60);
cl.hours.value=toSt(count%24);
count=Math.floor(count/24);
cl.days.value=count; 

setTimeout("countdown()",500);
}
// end hiding script-->
</script>

</head>

<body onLoad="countdown()">
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
				<li class="active"><a href="book.php"><b>Books/Novels</b></a></li>
				<li><a href="expanded.php"><b>Expanded</b></a></li>
				<li><a href="logout.php?logout"><b>Logout</b></a></li>
			  </ul>
			</div>
		  </div>
		</nav>
			<div class="Title">Star Wars Books/ Novels!</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					 <div class="span12" style="border: 2px solid white">
								
								<img src="http://i.ytimg.com/vi/Fz4IkLkVRlA/maxresdefault.jpg" height="400" width="320">
								
								<br><br><br><h1>Dark Disciple</h1>
						      <h2>Description</h2>

									<div class="section">For years, the galaxy-wide conflict known as the Clone Wars has raged. The struggle between the rightful government of the Galactic Republic and the 
									Confederacy of Independent Systems has claimed the lives of untold billions. The Force-wielding Jedi, for millennia the guardians of peace in the galaxy, have been thwarted at 
									nearly every turn by the Separatists and their leader, the Sith Lord Count Dooku. With the war showing no signs of ending, and the casualties mounting each day, the Jedi must 
									consider every possible means of defeating their cunning foe. Whether some means are too unthinkable and some allies too untrustworthy has yet to be revealed. </div>
					
					</div>
				</div>
				<div class="col-md-6">
					<div class="span12" style="border: 2px solid white">
						<img src="http://img3.wikia.nocookie.net/__cb20140425191637/starwars/images/d/df/TarkinCover.jpg" height="440" width="340">
								
								<h1>Tarkin</h1>
						      <h2>Description</h2>

									<div class="section">Five standard years have passed since Darth Sidious proclaimed himself galactic Emperor. The brutal Clone Wars are a memory, and the Emperor's apprentice, 
									Darth Vader, has succeeded in hunting down most of the Jedi who survived dreaded Order 66. On Coruscant a servile Senate applauds the Emperor's every decree, and the populations 
									of the Core Worlds bask in a sense of renewed prosperity. In the Outer Rim, meanwhile, the myriad species of former Separatist worlds find themselves no better off than they 
									were before the civil war. Stripped of weaponry and resources, they have been left to fend for themselves in an Empire that has largely turned its back on them. Where resentment 
									has boiled over into acts of sedition, the Empire has been quick to mete out punishment. But as confident as he is in his own and Vader's dark side powers, the Emperor understands 
									that only a supreme military, overseen by a commander with the will to be as merciless as he is, can secure an Empire that will endure for a thousand generations. </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="span12" style="border: 2px solid white">
						<img src="http://img2.wikia.nocookie.net/__cb20140425200446/starwars/images/6/6b/Lords_of_the_Sith.jpg" height="440" width="340">
								
								<h1>Lords of the Sith</h1>
						      <h2>Description</h2>

									<div class="section">When the Emperor and his notorious apprentice, Darth Vader, find themselves stranded in the middle of insurgent action on an inhospitable planet, 
									they must rely on each other, the Force, and their own ruthlessness to prevail. Anakin Skywalker, Jedi Knight, is just a memory. Darth Vader, newly anointed Sith Lord, is 
									ascendant. The Emperor's chosen apprentice has swiftly proven his loyalty to the dark side. Still, the history of the Sith Order is one of duplicity, betrayal, and acolytes 
									violently usurping their Masters—and the truest measure of Vader's allegiance has yet to be taken. Until now. </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="span12" style="border: 2px solid white">
						<img src="http://img1.wikia.nocookie.net/__cb20141001002939/starwars/images/6/62/ANewDawn.png" height="440" width="340">
								
								<h1>A New Dawn</h1>
						      <h2>Description</h2>

									<div class="section">For a thousand generations, the Jedi Knights brought peace and order to the Galactic Republic, aided by their connection to the mystical energy field known as 
									the Force. But they were betrayed—and the entire galaxy has paid the price. It is the Age of the Empire. Now Emperor Palpatine, once Chancellor of the Republic and secretly a 
									Sith follower of the dark side of the Force, has brought his own peace and order to the galaxy. Peace through brutal repression, and order through increasing control of his 
									subjects’ lives. But even as the Emperor tightens his iron grip, others have begun to question his means and motives. And still others, whose lives were destroyed by Palpatine’s 
									machinations, lay scattered about the galaxy like unexploded bombs, waiting to go off.
									The first Star Wars novel created in collaboration with the Lucasfilm Story Group, Star Wars: A New Dawn is set during the legendary “Dark Times” between Episodes III and IV and 
									tells the story of how two of the lead characters from the animated series Star Wars Rebels first came to cross paths. Featuring a foreword by Dave Filoni. </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="span12" style="border: 2px solid white">
						<img src="http://img3.wikia.nocookie.net/__cb20140425200555/starwars/images/c/c2/Heir_to_the_Jedi.jpg" height="440" width="340">
								
								<h1>Heir to the Jedi</h1>
						      <h2>Description</h2>

									<div class="section">The destruction of the Death Star brought new hope to the beleaguered Rebel Alliance. But the relentless pursuit by Darth Vader and the Imperial fleet is 
									taking its toll on Alliance resources. Now the rebels hide in an Outer Rim orbit from which they can search for a more permanent base and for new allies to supply much-needed 
									weapons and materiel. 
									Luke Skywalker, hero of the Battle of Yavin, has cast his lot with the rebels, lending his formidable piloting skills to whatever missions his leaders assign him. But he is 
									haunted by his all-too-brief lessons with Obi-Wan Kenobi and the growing certainty that mastery of the Force will be his path to victory over the Empire. Adrift without Old Ben's 
									mentorship, determined to serve the Rebellion any way he can, Luke searches for ways to improve his skills in the Force. </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="span12" style="border: 2px solid white">
						<img src="http://ecx.images-amazon.com/images/I/91Urf18PmFL.jpg" height="440" width="340">
								
								<h1>Aftermath</h1>
						      <h2>Description</h2>
							  <div class="section">
											
										<FORM name="clock">
										<TABLE BORDER=5 CELLSPACING=5 CELLPADDING=0 BGCOLOR="#000000">
										<TR>
										<TD ALIGN=CENTER WIDTH="31%" BGCOLOR="#003300"><FONT COLOR="#FFFFFF"><B>Days:</B></FONT></TD>
										<TD ALIGN=CENTER WIDTH="23%" BGCOLOR="#003300"><FONT COLOR="#FFFFFF"><B>Hours:</B></FONT></TD>
										<TD ALIGN=CENTER WIDTH="23%" BGCOLOR="#003300"><FONT COLOR="#FFFFFF"><B>Mins:</B></FONT></TD>
										<TD ALIGN=CENTER WIDTH="23%" BGCOLOR="#003300"><FONT COLOR="#FFFFFF"><B>Secs:</B></FONT></TD>
										</TR>
										<TR>
										<TD ALIGN=CENTER><INPUT name="days" size=4></TD>
										<TD ALIGN=CENTER><INPUT name="hours" size=2></TD>
										<TD ALIGN=CENTER><INPUT name="mins" size=2></TD>
										<TD ALIGN=CENTER><INPUT name="secs" size=2></TD>
										</TR>
										<TR>
										<TD COLSPAN="4" BGCOLOR="#003300">
										<CENTER><P><FONT FACE="arial,helvetica" SIZE="+2" COLOR="#FFFF00">Until Aftermath</FONT></CENTER>
										</TD>
										</TR>
										
										</FONT>
										</CENTER>
										</TD>
										</TR>
										</TABLE>
										</FORM> </br>

									<p> The second Death Star has been destroyed, the Emperor killed, and Darth Vader struck down. Devastating blows against the Empire, and major victories for 
									the Rebel Alliance. But the battle for freedom is far from over. The novel is the first in a trilogy, and is part of the Journey to Star Wars: The Force Awakens publishing project. 
									The title will see the beginnings of a new government in the wake of the Empire's losses during the Battle of Endor, and it will feature at least one fan favorite character from the 
									Star Wars films. </p>
					</div>
				</div>
			</div>
			
		</div>
	</div>	
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