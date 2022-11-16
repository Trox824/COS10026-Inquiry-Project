<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Us!</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css" media="screen">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<body>
	<?php
    	include("header.inc");
    ?>
	<section class = "Homepagebanner">
		<div class = "banner1">
			<img class ="bannerimg" alt = "banner1" src="./images/banner1.png">
			<div class="text-box text-box1 upper">
				<h1>About Us!</h1>
				<h5><span class = "computerScience">ComputerScience</span> <span class="name">& Swinburne student</span></h5>
				<p>This is the page in which you can find our team members' information.</p>
			</div>
		</div>  
		<div class = "banner2">
			<img class ="bannerimg" alt = "banner2" src="./images/banner2.png">
			<div class="text-box text-box2 upper">
				<h1>About Us!</h1>
				<h5><span class = "computerScience">ComputerScience</span> <span class="name">& Swinburne student</span></h5>
				<p>In short, we are a group of 5 who are passionate about computer.</p>
			</div>       
		</div>   
		<div class = "banner4">
			<img class ="bannerimg" alt = "banner4" src="./images/banner4.png">  
			<div class="text-box text-box4 upper">
				<h1>About Us!</h1>
				<h5><span class = "computerScience">ComputerScience</span> <span class="name">& Swinburne student</span></h5>
				<p>4 of us, which are Dat, Son, Hung and Nguyen all come from Vietnam. Samer comes from Bangladesh.</p>
			</div>   
		</div>  
		<div class = "banner5">
			<img class ="bannerimg" alt = "banner5" src="./images/banner5.jpg"> 
			<div class="text-box text-box5 upper">
				<h1>About Us!</h1>
				<h5><span class = "computerScience">ComputerScience</span> <span class="name">& Swinburne student</span></h5>
				<p>We are all future Data Scientists lol:). If you want to find out all information about each member of our team, please click the "Info" button below!</p>
			</div>  
		</div>
		<div class="wrapper">
			<div class="link_wrapper">
			  <a href="#bios">Explore Members!</a>
			  <div class="icon">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268.832 268.832">
				  <path d="M265.17 125.577l-80-80c-4.88-4.88-12.796-4.88-17.677 0-4.882 4.882-4.882 12.796 0 17.678l58.66 58.66H12.5c-6.903 0-12.5 5.598-12.5 12.5 0 6.903 5.597 12.5 12.5 12.5h213.654l-58.66 58.662c-4.88 4.882-4.88 12.796 0 17.678 2.44 2.44 5.64 3.66 8.84 3.66s6.398-1.22 8.84-3.66l79.997-80c4.883-4.882 4.883-12.796 0-17.678z"/>
				</svg>
			  </div>
			</div> 
		</div>
	</section>

	<section class="bios" id="bios">
		<div class="container">
			<h1 class="heading"><span id = "bio">visit </span>Our Team Members</h1>
				<div class="profiles">
						<a href="lxd.html">
							<div class="profile">
								<img class="prof" src="./images/Datbio.png" alt="img1">
								<h3 class="Team-profile">Xuan Dat</h3>
								<h5>Web Developer</h5>
								<p id = "biotext1">I am currently majoring in Data Science at Swinburne. I love Football, Reading and learning in some sense! I am one of the 5 web developers of my team!</p>
							</div>
						</a>
						<a href="samer.html">
							<div class="profile">
								<img class="prof" src="./images/Samer.png" alt="img1">
								<h3 class="Team-profile">Samer</h3>
								<h5>Web Developer</h5>
								<p id = "biotext2">I like computers and science and also computer science :D</p>
							</div>
						</a>
						<a href="alexngo.html">
							<div class="profile">
								<img class="prof" src="./images/Sonbio.png" alt="img1">
								<h3 class="Team-profile">The Son</h3>
								<h5>Web Developer</h5>
								<p id = "biotext3">I am currently majoring in AI at Swinburne. I love Basketball, Reading and learning in some sense! I am one of the 5 web developers of my team!</p>
							</div>
						</a>
						<a href="hung.html">
							<div class="profile">
								<img class="prof" src="./images/Hungbio.png" alt="img1">
								<h3 class="Team-profile">Tuan Hung</h3>
								<h5>Web Developer</h5>
								<p id = "biotext4">I am also majoring in Data Science. My initial passion is computer game, but I was attracted by the code behind those game and I decided  to become a data scientist in the future.</p>
							</div>
						</a>
						<a href="nguyen.html">
							<div class="profile">
								<img class="prof" src="./images/Nguyenbio.png" alt="img1">
								<h3 class="Team-profile">Nguyen</h3>
								<h5>Web Developer</h5>
								<p id = "biotext5">I am currently majoring in Data Science at Swinburne. I love Football, Reading and learning in some sense! I am one of the 5 web developers of my team!</p>
								</div>
							</a>
				</div>
		</div>
	</section>
	<?php
        include("footer.inc");
    ?>
</body>
</html>