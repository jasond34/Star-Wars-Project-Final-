<?php
session_start();
include_once 'dbconnect.php';


$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Movies</title>
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


#forceawakens{
color: red;

}

#counter{
padding-left: 35px;
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



var eventdate = new Date("December 18, 2015 3:0:00");
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
				<li class="active"><a href="movies.php"><b>Movies</b></a></li>
				<li><a href="games.php"><b>Games</b></a></li>
				<li><a href="tv.php"><b>TV Shows</b></a></li>
				<li><a href="book.php"><b>Books/Novels</b></a></li>
				<li><a href="expanded.php"><b>Expanded</b></a></li>
				<li><a href="logout.php?logout"><b>Logout</b></a></li>
			  </ul>
			</div>
		  </div>
		</nav>
			<div class="Title">Star Wars Movies!</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					 <div class="span12" style="border: 2px solid white">
								
								<img src="http://spinoff.comicbookresources.com/wp-content/uploads/2014/06/anewhopeposter.jpg" height="350" width="340">
								
								<br><br><br><h1>EPISODE IV: A NEW HOPE</h1>
						      <h2>Description</h2>

									<div class="section">The Imperial Forces -- under orders from cruel Darth Vader (David Prowse) -- hold Princess Leia (Carrie Fisher) hostage, in their efforts to quell the rebellion against the Galactic Empire. Luke Skywalker (Mark Hamill) and Han Solo (Harrison Ford), captain of the Millennium Falcon, work together with the companionable droid duo R2-D2 (Kenny Baker) and C-3PO (Anthony Daniels) to rescue the beautiful princess, help the Rebel Alliance, and restore freedom and justice to the Galaxy. </div>
					
					</div>
				</div>
				<div class="col-md-6">
					<div class="span12" style="border: 2px solid white">
						<img src="https://upload.wikimedia.org/wikipedia/en/f/fb/The_Empire_Strikes_Back_(1997_re-release_poster).jpg" height="350" width="340">
								
								<h1>EPISDOE V: THE EMPIRE STRIKES BACK</h1>
						      <h2>Description</h2>

									<div class="section">The adventure continues in this "Star Wars" sequel. Luke Skywalker (Mark Hamill), Han Solo (Harrison Ford), Princess Leia (Carrie Fisher) and Chewbacca (Peter Mayhew) face attack by the Imperial forces and its AT-AT walkers on the ice planet Hoth. While Han and Leia escape in the Millennium Falcon, Luke travels to Dagobah in search of Yoda. Only with the Jedi master's help will Luke survive when the dark side of the Force beckons him into the ultimate duel with Darth Vader (David Prowse). </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					 <div class="span12" style="border: 2px solid white">
								
								<img src="http://img1.wikia.nocookie.net/__cb20050925102019/starwars/images/4/44/Return_of_the_jedi_old.jpg" height="350" width="340">
								<br>
								<br>
								<h1>EPISDOE VI: RETURN OF THE JEDI</h1>
						      <h2>Description</h2>

									<div class="section">Luke Skywalker (Mark Hamill) battles horrible Jabba the Hutt and cruel Darth Vader to save his comrades in the Rebel Alliance and triumph over the Galactic Empire. Han Solo (Harrison Ford) and Princess Leia (Carrie Fisher) reaffirm their love and team with Chewbacca, Lando Calrissian (Billy Dee Williams), the Ewoks and the androids C-3PO and R2-D2 to aid in the disruption of the Dark Side and the defeat of the evil emperor. </div>
					
					</div>
				</div>
				<div class="col-md-6">
					<div class="span12" style="border: 2px solid white">
						<img src="http://3.bp.blogspot.com/-RG937YJUwbA/VUfPa5EUFVI/AAAAAAABBnA/BeL6G0SHdUk/s1600/Star%2BWars%2BThe%2BForce%2BAwakens_2%2Bby%2BPaul%2BShipper.jpg" height="350" width="340">
								<br>
								<br>
								<h1>EPISODE VII: THE FORCE AWAKENS</h1>
						      <h2>Description</h2>
								
									<div class="section">
										<div class="container" id="counter">
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
										<CENTER><P><FONT FACE="arial,helvetica" SIZE="+2" COLOR="#FFFF00">Until The Force Awakens</FONT></CENTER>
										</TD>
										</TR>
										
										</FONT>
										</CENTER>
										</TD>
										</TR>
										</TABLE>
										</FORM>
										</div>
												<p id="forceawakens">Little is known of the story Episode VII, but it will 
											feature the forces of the First Order, an offshoot of the 
											Galactic Empire, aligned against the Resistance, sprung 
											from the Rebel Alliance. The film stars Mark Hamill 
											(Luke Skywalker), Harrison Ford (Han Solo), Carrie Fisher 
											(Princess Leia), Peter Mayhew (Chewbacca), Anthony Daniels
											(C-3PO), and Kenny Baker (R2-D2) reprising their original roles. 
											The original actors are joined by a host of new actors including 
											John Boyega (Finn), Daisy Ridley (Rey), Oscar Isaac (Poe Dameron), 
											Adam Driver (Kylo Ren), Andy Serkis (Snoke), Gwendoline Christie (
											Captain Phasma), Domhnall Gleeson (General Hux) and Lupita Nyong'o 
											(Maz Kanata) amongst many others.  </p>
										
									</div>
									
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					 <div class="span12" style="border: 2px solid white">
								
								<img src="http://img2.wikia.nocookie.net/__cb20130822171446/starwars/images/7/75/EPI_TPM_poster.png" height="350" width="340">
								<br>
								<br>
								<h1>EPISODE I: THE PHANTOM MENACE</h1>
						      <h2>Description</h2>

									<div class="section">Obi-Wan Kenobi (Ewan McGregor) is a young apprentice Jedi knight under the tutelage of Qui-Gon Jinn (Liam Neeson) ; Anakin Skywalker (Jake Lloyd), who will later father Luke Skywalker and become known as Darth Vader, is just a 9-year-old boy. When the Trade Federation cuts off all routes to the planet Naboo, Qui-Gon and Obi-Wan are assigned to settle the matter. </div>
					
					</div>
				</div>
				<div class="col-md-6">
					<div class="span12" style="border: 2px solid white">
						<img src="http://img1.wikia.nocookie.net/__cb20130822173923/starwars/images/2/24/EPII_AotC_poster.png" height="350" width="340">
								<br>
								<br>
								<h1>EPISODE II: ATTACK OF THE CLONES</h1>
						      <h2>Description</h2>

									<div class="section">Set ten years after the events of "The Phantom Menace," the Republic continues to be mired in strife and chaos. A separatist movement encompassing hundreds of planets and powerful corporate alliances poses new threats to the galaxy that even the Jedi cannot stem. These moves, long planned by an as yet unrevealed and powerful force, lead to the beginning of the Clone Wars -- and the beginning of the end of the Republic. </div>
					</div>
				</div>
			</div>
						<div class="row">
				<div class="col-md-6">
					  <div class="span12" style="border: 2px solid white">
									
									<img src="http://ia.media-imdb.com/images/M/MV5BNTc4MTc3NTQ5OF5BMl5BanBnXkFtZTcwOTg0NjI4NA@@._V1_SX640_SY720_.jpg" height="350" width="340">
									<br>
									<br>
									<h1>EPISODE III: REVENGE OF THE SITH</h1>
								  <h2>Description</h2>

										<div class="section">It has been three years since the Clone Wars began. Jedi Master Obi-Wan Kenobi (Ewan McGregor) and Jedi Knight Anakin Skywalker (Hayden Christensen) rescue Chancellor Palpatine (Ian McDiarmid) from General Grievous, the commander of the droid armies, but Grievous escapes. Suspicions are raised within the Jedi Council concerning Chancellor Palpatine, with whom Anakin has formed a bond. Asked to spy on the chancellor, and full of bitterness toward the Jedi Council, Anakin embraces the Dark Side. </div>
						
						</div>
				</div>
				<div class="col-md-6">
					<div class="span12" style="border: 2px solid white">
						<img src="http://img1.wikia.nocookie.net/__cb20090916003358/starwars/images/f/ff/The_Clone_Wars_film_poster.jpg" height="350" width="340">
								<br>
								<br>
								<br><br><h1>THE CLONE WARS</h1>
						      <h2>Description</h2>

									<div class="section">As more star systems get swept into the Clone Wars, the valiant Jedi knights struggle to maintain order. Anakin Skywalker and his Padawan learner Ahsoka Tano embark on a mission that brings them face-to-face with Jabba the Hutt. Plotting against them is evil Count Dooku and his agent, Asajj Ventress, who would ensure that the Jedis fail. Meanwhile, Yoda and Obi-Wan Kenobi lead the clone army against the forces of the Dark Side. </div>
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