<?php
session_start();
include_once 'dbconnect.php';


$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>History</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  
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
	
	color: #ff6;
	background-color: #000;
	
}



.footer{
	position: absolute;
   bottom: 0;
   width: 75%;
   display: block;
   color: red;
   
}






/* css for the timeline */
div {
    box-sizing: border-box;
}
.timeline {
    width: 400px;
}
.timeline .timeline-item {
    width: 100%;
}
.timeline .timeline-item .info, .timeline .timeline-item .year {
    color: #eee;
    display: block;
    float:left;
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    transition: all 1s ease;
}
.timeline .timeline-item.close .info, .timeline .timeline-item.close .year {
    color: #ccc;
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    transition: all 1s ease;
}
.timeline .timeline-item .year {
    font-size: 24px;
    font-weight: bold;
    width: 22%;
}
.timeline .timeline-item .info {
    width: 100%;
    width: 78%;
    margin-left: -2px;
    padding: 0 0 40px 35px;
    border-left: 4px solid #aaa;
    font-size: 14px;
    line-height: 20px;
}
.timeline .timeline-item .marker {
    background-color: #fff;
    border: 4px solid #aaa;
    height: 20px;
    width: 20px;
    border-radius: 100px;
    display: block;
    float: right;
    margin-right: -14px;
    z-index: 2000;
    position: relative;
}
.timeline .timeline-item.active .info, .timeline .timeline-item:hover .info {
    color: #444;
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    transition: all 1s ease;
}
.timeline .timeline-item.active .year, .timeline .timeline-item:hover .year {
    color: #9DB668;
}
.timeline .timeline-item .marker .dot {
    background-color: white;
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    transition: all 1s ease;
    display: block;
    border: 4px solid white;
    height: 12px;
    width: 12px;
    border-radius: 100px;
    float: right;
    z-index: 2000;
    position: relative;
}
.timeline .timeline-item.active .marker .dot, .timeline .timeline-item:hover .marker .dot {
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    transition: all 1s ease;
    background-color: #9DB668;
    box-shadow: inset 1px 1px 2px rgba(0, 0, 0, 0.2);
}

/* css for trivia */

div.panel,div.flip
{
  margin:0px;
  padding:5px;
  text-align:center;
  background:#B20000;
  border:solid 1px #c3c3c3;
  width:155px;
}

div.panel
{
  display:none;
}
div.question
{
  float:right;
}
div.questions
{
  height: 100px;
}


</style>
<script type="text/javascript" >

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
	
	
//js for timeline
$(".timeline-item").hover(function () {
    $(".timeline-item").removeClass("active");
    $(this).toggleClass("active");
    $(this).prev(".timeline-item").toggleClass("close");
    $(this).next(".timeline-item").toggleClass("close");
});


// Js for the trivia
	
$(document).ready(function(){
  $("button").click(function(){
    $("p").hide();
  });
});

$(document).ready(function(){
  var a = $(".question");
  a.each(function(index) {
    var flip = $(this).find(".flip");
    var panel = $(this).find(".panel");
    flip.click(function(){
      panel.slideDown("slow");
    });
  });
});	


//Js for sound


//JS for ask me button
$(document).ready(function()
{
	$("#askme").click(function(){
		var myWindow = window.open("askme.html", "askme.html", "width=600,height=400");
		myWindow.focus();
	});
});
</script>

</head>

<body>
<audio autoplay>
  <source src="http://soundfxcenter.com/movies/star-wars/08eafc_Star_Wars_R2-D2_Beep_Sound_Effect.mp3" type="audio/mp3" >

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
				<li class="active"><a href="history.php"><b>History</b></a></li>
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
			<div class="Title">Star Wars History!</div>
			
			
<div class="container">
				<div class="row">
				
					<div class="col-md-5">
						<div class="timeline">
							<div class="timeline-item">
								<div class="year">May 14, 1944 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info"> <br> <br>George Lucas was born in Modesto, California to Dorothy Bomberger Lucas and George Walton Lucas, Sr.</div>
							</div>
							<div class="timeline-item">
								<div class="year">June 12, 1962 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">Lucas' dreams of being a race car driver ends when he smashes his Fiat Biancina into a walnut tree and almost dies. This is one of the key events that resulted in George Lucas pursuing film making. </div>
							</div>
							<div class="timeline-item">
								<div class="year">1969 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">Francis Ford Coppola and George Lucas create American Zoetrope, named after a collection of zoetropes filmmaker Mogens Skot-Hansen gave him.</div>
							</div>
							<div class="timeline-item">
								<div class="year">1971 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">Lucasfilm Ltd. is founded by Lucas.</div>
							</div>
							<div class="timeline-item">
								<div class="year">1975 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">Lucas conceives the basic story of Star Wars. Divides it into two trilogies. Chooses the second, the one that revolves around Luke Skywalker, because it is the most exciting of the two.</div>
							</div>
							<div class="timeline-item">
								<div class="year">1976 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">The book version of Star Wars is published and Lucas is credited as the author until it's later revealed ghostwriter Alan Dean Foster wrote it.</div>
							</div>
							<div class="timeline-item">
								<div class="year">May 25, 1977 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">Star Wars, or now known as Star Wars Episode IV: A New Hope, is released with a budget of $11,000,000. Lucas wrote and directed it with his wife Marcia editing it. On opening day it rakes in $254,309 from just thirty-two theaters and almost grosses three hundred million.</div>
							</div>
							<div class="timeline-item">
								<div class="year">May 21, 1980 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">Star Wars: The Empire Strikes Back, or now known as Star Wars Episode V: The Empire Strikes Back, is released with a budget of 18,000,000. Lucas is a co-writer and executive producer. It gorsses over $220 million.</div>
							</div>
							<div class="timeline-item">
								<div class="year">May 25, 1983 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">Star Wars: Return of the Jedi, now known as Star Wars Episode VI: Return of the Jedi, is released with a budget of thirty-two and half million. He co-writes and is executive producer. It grosses over $265 million. Lucas decides not to continue on with the prequel trilogy until special effects technology is better and cheaper.</div>
							</div>
							<div class="timeline-item">
								<div class="year">November 1, 1993 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">Decides to devote all his time to writing the Prequel Trilogy leaving day-to-day operations to his subordinates.</div>
							</div>
							<div class="timeline-item">
								<div class="year">May 1996 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">Lucasfilm signs a deal reportedly two billion with Pepsico (Pepsi, Pizza Hut, KFC, Taco Bell and Frito Lay) for first rights to any movie tie-ins to the Prequel Trilogy.</div>
							</div>
							<div class="timeline-item">
								<div class="year">1997 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">Special editions of the original trilogy is released, digitally remastered and key changes to soem of the dialogues and scenes.</div>
							</div>
							<div class="timeline-item">
								<div class="year">April 1998 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">20th Century Fox wins the rights to the Prequel Trilogy.</div>
							</div>
							<div class="timeline-item">
								<div class="year">May 1999. <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info"> Star Wars Episode I: The Phantom Menace is released with a budget of $115,000,000. Lucas is director, writer, and executive producer.</div>
							</div>
							<div class="timeline-item">
								<div class="year">May 16, 2002 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">Star Wars Episode II: Attack of the Clones is released with a budget of $120,000,000. Lucas is director, writer, and executive producer.</div>
							</div>
							<div class="timeline-item">
								<div class="year">2004<span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">First DVD release of the original trilogy, special editions replaces the original theatrical version which were called non-canoniacl by Lucas.</div>
							</div>
							<div class="timeline-item">
								<div class="year">May 19, 2005 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">Star Wars Episode III: Revenge of the Sith is released with a budget of $113,000,000. Lucas is director, writer, and executive producer.</div>
							</div>
							<div class="timeline-item">
								<div class="year">2008 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">An animated TV series 'The Clone Wars' debuts telling the story of the Clone Wars that took place between Ep II and Ep III. Lucas created it while Dave Filoni, a passionate Star Wars fan and an experienced animator developed it. It continued for 6 years till March 7, 2014.</div>
							</div>
							<div class="timeline-item">
								<div class="year">2011 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">Blu-Ray release of the original and prequel trilogies, again with some notable changes to both the trilogies.</div>
							</div>
							<div class="timeline-item">
								<div class="year">2012<span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">The Phantom Menace is re-released in 3D, with Lucas planning to release all the other film in 3D too, which never came to fruition.</div>
							</div>
							<div class="timeline-item">
							<div class="year">Oct 30, 2012 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">Disney buys Lucasfilm for $4.06 billion. Kathleen Kennedy, co-chairman of Lucasfilm, became president of Lucasfilm, reporting to Walt Disney Studios Chairman Alan Horn. Additionally she serves as the brand manager for Star Wars, working directly with Disney's global lines of business to build, further integrate, and maximize the value of this global franchise. Kennedy serves as producer on new Star Wars feature films, with George Lucas serving as creative consultant.</div>
							</div>
							<div class="timeline-item">
								<div class="year">October 3, 2014 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">Disney discontinued Clone Wars and brought in Filoni to do another animated series, taking place just before Ep IV, thus Star Wars: Rebels was created.</div>
							</div>
							<div class="timeline-item">
							<div class="year">Dec 18, 2015 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">Star Wars Episode VII: The Force Awakens is scheduled to be the first film in the planned third Star Wars trilogy announced after The Walt Disney Company's acquisition of Lucasfilm in October 2012.</div>
							</div>
							<div class="timeline-item">
								<div class="year">2015 <span class="marker"><span class="dot"></span></span>
								</div>
								<div class="info">Lucasfilm announce Episode VIII for 2017, Episode IX for 2019. They also said they'll be doing 'anthology' films between each episode that will expand the Star Wars universe starting with 'Rogue One' in December 2016.</div>
							</div>
						</div>						
					</div>
					<div class="col-md-4">
						<h3>Test your Star Wars knowledge:</h3>
						</br>
						<b>1) Where did Darth Vader reveal himself to be Luke's father?</b>
							<div class="questions">

								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Tatooine</div>
								</div>

								<div class="question">
								 <div class="panel">Right</div>
								 <div class="flip">Bespin</div>
								</div>
								
								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Endor</div>
								</div>
								
								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Yavin</div>
								</div>

							</div>
							<br>
							<br>
							<br>
						<b>2) What location stood in for Tatooine in the first 1977 'Star Wars' movie?</b>	
							<div class="questions">

								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">The Syrian Desert</div>
								</div>

								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Sahara Desert</div>
								</div>
								
								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">The Death Valley</div>
								</div>
								
								<div class="question">
								 <div class="panel">Right</div>
								 <div class="flip">The Tunisian Desert</div>
								</div>

							</div>
							<br>
							<br>
							<br>
							
						<b>3) What famous composer has scored all the 'Star Wars' films so far?</b>	
							<div class="questions">

								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">James Horner</div>
								</div>

								<div class="question">
								 <div class="panel">Right</div>
								 <div class="flip">John Williams</div>
								</div>
								
								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Hans Zimmer</div>
								</div>
								
								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">John Barry</div>
								</div>

							</div>
							<br>
							<br>
							<br>
						<b>4) Whose DNA was used in the creation of the Clone Army?</b>
							<div class="questions">

								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Boba Fett</div>
								</div>

								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Count Dooku</div>
								</div>
								
								<div class="question">
								 <div class="panel">Right</div>
								 <div class="flip">Jango Fett</div>
								</div>
								
								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Anakin Skywalker</div>
								</div>

							</div>
							<br>
							<br>
							<br>
						<b>5) What Japanese filmmaker did George Lucas famously borrow from while making the first three 'Star Wars' movies?</b>	
							<div class="questions">

								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Hayao Miyazaki</div>
								</div>

								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Yasujiro Ozu</div>
								</div>
								
								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Takashi Miike</div>
								</div>
								
								<div class="question">
								 <div class="panel">Right</div>
								 <div class="flip">Akira Kurosawa</div>
								</div>

							</div>
							<br>
							<br>
							<br>
						<b>6) How did George Lucas first meet Harrison Ford?</b>	
							<div class="questions">

								<div class="question">
								 <div class="panel">Right</div>
								 <div class="flip">George hired Harrison build cabinets.</div>
								</div>

								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">George cast Harrison in American Graffiti.</div>
								</div>
								
								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Spielberg introduced him to Harrison.</div>
								</div>
								
								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Harrison is related to George.</div>
								</div>

							</div>
							<br>
							<br>
							<br>
							<br>
						<b>7) Name this pilot who survives both Death Star battles and the Battle of Hoth.</b>
							<div class="questions">

								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Porkins</div>
								</div>

								<div class="question">
								 <div class="panel">Right</div>
								 <div class="flip">Wedge Antillies</div>
								</div>
								
								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Poe Dameron</div>
								</div>
								
								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Biggs Darklighter</div>
								</div>

							</div>
							<br>
							<br>
							<br>
						<b>8) What's the name of the famous sound effect that can be heard in every 'Star Wars' movie?</b>	
							<div class="questions">

								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Castle Thunder</div>
								</div>

								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Laser Blast</div>
								</div>
								
								<div class="question">
								 <div class="panel">Right</div>
								 <div class="flip">Wilhelm Scream</div>
								</div>
								
								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Tarzan Call</div>
								</div>

							</div>
							<br>
							<br>
							<br>
						<b>9) Who played Darth Vader on the set of the original trilogy?</b>	
							<div class="questions">

								<div class="question">
								 <div class="panel">Right</div>
								 <div class="flip">David Prowse</div>
								</div>

								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">James Earl Jones</div>
								</div>
								
								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Jake Lloyd</div>
								</div>
								
								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Hayden Christensen</div>
								</div>

							</div>
							<br>
							<br>
							<br>
						<b>10) What was Anakin Skywalker's mom's name?</b>	
							<div class="questions">

								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Beru</div>
								</div>

								<div class="question">
								 <div class="panel">Right</div>
								 <div class="flip">Shmi</div>
								</div>
								
								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Padme</div>
								</div>
								
								<div class="question">
								 <div class="panel">Wrong</div>
								 <div class="flip">Mon Mothma</div>
								</div>

							</div>
							<br>
							<br>
							<br>
					</div>
					
					<div class="colo-md-3">
					
						<img src="http://static.tumblr.com/lqty9ko/ochm7qsm0/r2d2_tumblr_background.png" alt="Smiley face" height="200" width="200">
					
						<div class="button">
							<button id="askme" type="button" class="btn btn-info">Ask R2D2 Anything!</button>
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
</div>





</body>



</html>