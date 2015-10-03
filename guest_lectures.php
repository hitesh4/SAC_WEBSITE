<!DOCTYPE html>
<html>
	<head>
		<title>Guest Lectures</title>
		<link rel="stylesheet" href="css/guest_lectures.css">
	</head>
	<body>
		<div class="container">
			<?php
				include 'topheader.php';
		
			
				include 'css_include.php';
				include 'navbar.php';
				include 'metatags.php';
			?>
			<div class="mycontent">
			
				<div class="heading">
					<h2>Guest Lectures</h2>
				</div>
				<div class="myslider">
					<img src="http://placehold.it/1150x300" >
				</div>
				<div class="main_content">
				Continuing with its yearlong series of Guest Lectures by eminent alumni, the Students’ Alumni Ce
				ll recently hostel Mr. Veerendra Jaitley, an alumnus of the ECE department, 1979. He delivered a motivational lecture with the theme ‘We Can, We Can’. 
				The speech was received positively both by the student and the faculty alike. A week before that,
				Mr. Anshuman Mishra, an alumnus of the Patel Hall delivered a lecture on Marketing.
				This event was conducted in association with the Marketing and Advertising Club, Vinod Gupta School of Management.
				</div>
				<hr style="border:1px solid grey">
				<div class="our_speakers">
					<h2>Our Speakers</h2>
					<hr style="border:1px solid black">
					<div class="speaker_images">
						<div class="img">
							<img class="a" src="img/squareLogo.jpg" style="margin-bottom:10px" >
							<div class="name"> Name</div>
						</div>	
						<div class="img">	
							<img src="img/squareLogo.jpg" style="margin-bottom:10px" >
							<p class="name">Name</p>
						</div>
						<div class="img">	
							<img src="img/squareLogo.jpg" style="margin-bottom:10px" >
							<p class="name">Name</p>
						</div>	
						<div class="img">	
							<img src="img/squareLogo.jpg" style="margin-bottom:10px" >
							<p class="name">Name</p>
						</div>	
					</div>
				</div>
				<hr style="border:1px solid grey">
				<div class="videos">
					<h2>Videos</h2>
					<hr style="border:1px solid black">
					<div class="vid">
						<iframe class="frame" src="https://www.youtube.com/embed/gQ2AYloadeY" frameborder="0" allowfullscreen></iframe>
						<div class="name"> Name</div>
					</div>
					<div class="vid">
						<iframe class="frame" src="https://www.youtube.com/embed/gQ2AYloadeY" frameborder="0" allowfullscreen></iframe>
						<div class="name"> Name</div>
					</div>
					<div class="vid">
						<iframe class="frame" src="https://www.youtube.com/embed/gQ2AYloadeY" frameborder="0" allowfullscreen></iframe>
						<div class="name"> Name</div>
					</div>
					<div class="vid">
						<iframe class="frame" src="https://www.youtube.com/embed/gQ2AYloadeY" frameborder="0" allowfullscreen></iframe>
						<div class="name"> Name</div>
						<a href="archive.php">
							<div class="vid_link">
								View More
							</div>
						</a>
					</div>
				</div>
				<hr style="border:1px solid grey">
			</div>
			<?php include 'spons-slider.php'; ?>
			<?php
				
				include 'footer.php';
				include 'js_include.php';
			?>
		</div>
		<script type="text/javascript" src="js/guest_lectures.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	</body>
</html>