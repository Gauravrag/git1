<?php 
session_start();
if(isset($_SESSION['u_name'])){
     
     
	header("url=index.php");
   
}
else{
     header("refresh:0,url=loginp.php");
}
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" type="png" href="images/icon/mathaino.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>MATHAINO</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(window).on('scroll', function () {
			if ($(window).scrollTop()) {
				$('nav').addClass('black');
			} else {
				$('nav').removeClass('black');
			}
		})
	</script>
</head>

<body>
	<!-- Navigation Bar -->
	<header id="header">
		<nav>
			<!-- <div class="logo"><img src="images/icon/logo.png" alt="logo"></div> -->
			<a href="index.php"><div class="logo" style="font-size: 28px; font-weight: bolder; font-family: Arial, Helvetica, sans-serif;">MATHAINO</div></a>
			<ul>
				<li><a class="active" href="">Home</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="#contactus_section">Contact</a></li>
			</ul>
			<div class="srch"><input type="text" class="search" placeholder="Search here..."><img
					src="images/icon/search.png" alt="search" onclick=slide()></div>
			<a class="get-started" href="logout.php">logout</a>
			<img src="images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
			
		</nav>
		<div class="head-container">
			<div class="quote">
				<p>The beautiful thing about learning is that nobody can take it away from you</p>
				<h5>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values,
					beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and
					directed research!</h5>
			</div>
			<div class="svg-image" style="padding-bottom: 85px";>
				<img src="images/extra/gla2.jpg" alt="svg">
			</div>
		</div>
		<div class="side-menu" id="side-menu">
			<div class="close" onclick="sideMenu(1)"><img src="images/icon/close.png" alt=""></div>
			<div class="user">
				<img src="images/creator/sam.jpg" alt="Username">
				<p>Sameer Khan</p>
			</div>
			<ul>
				<li><a href="#about_section">About</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="#contactus_section">Contact</a></li>
				<li><a href="#feedBACK">Feedback</a></li>
			</ul>
		</div>
	</header>


	<!-- Some Popular Subjects -->
	<div class="title">
		<span>Popular Subjects on MATHAINO</span>
	</div>
	<br><br>
	<div class="course">
		<center>
			<div class="cbox">
				<div class="det"><a href="subjects/gate.html"><img src="images/courses/d1.png">GATE Preparation</a>
				</div>
				<div class="det"><a href="subjects/quiz.html"><img src="images/courses/d1.png">Daily Quiz</a></div>
			</div>
		<div class="cbox">
			<div class="det"><a href="subjects/computer_courses.html"><img src="images/courses/computer.png">Computer
					Courses</a></div>
		</div>
	</center>
	</div>

	<!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<center>
			<p style="font-size: 50px; padding-top: 100px; padding-bottom: 60px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: bolder;">About</p>
		</center>
		<div class="about-content">
			<div class="side-image">
				<img class="sideImage" src="images/extra/e3.jpg">
			</div>
			<div class="side-text">
				<h2>What you think about us ?</h2>
				<p>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values,
					beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and
					directed research.<br> Educational website can include websites that have games, videos or topic
					related resources that act as tools to enhance learning and supplement classroom teaching. These
					websites help make the process of learning entertaining and attractive to the student, especially in
					today's age. <br>Using HTML(HyperText Markup Language), CSS(Cascading Style Sheet), JavaScript, we
					can make learning more easier and in a interesting way.</p>
			</div>
		</div>
	</div>

	<!-- TEAM -->
	<div class="diffSection" id="team_section">
		<center>
			<p style="font-size: 50px; padding-top: 100px; padding-bottom: 60px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: bolder;">Team</p>
		</center>
		<div class="totalcard">
			<div class="card">
				<center><img src="images/creator/akash.jpg"></center>
				<center>
					<div class="card-title">Praval Tej Pratap Singh</div>
					<div id="detail">
						<p>“ You can teach a student a lesson for a day; but if you can teach him to learn by creating
							curiosity, he will continue the learning process as long as he lives .“</p>
						<div class="duty"></div>
						<a href="https://www.linkedin.com/in/praval-singh-73149020b/" target="_blank"><button
								class="btn-sameer">Follow +</button></a>
					</div>
				</center>
			</div>
			<div class="card">
				<center><img src="images/creator/sam.jpg"></center>
				<center>
					<div class="card-title">Sameer Khan</div>
					<div id="detail">
						<p>“ Real education should consist of drawing the goodness and the best out of our own students.
							What better books can there be than the book of humanity “</p>
						<div class="duty"></div>
						<a href="https://www.linkedin.com/in/sameer-khan-408333259/" target="_blank"><button
								class="btn-praval">Follow +</button></a>
					</div>
				</center>
			</div>
		</div>

		<div class="totalcard">
			<div class="card">
				<center><img src="images/creator/Gaurav.jpg"></center>
				<center>
					<div class="card-title">Gaurav Raghav</div>
					<div id="detail">
						<p>“ A simple but powerful reminder of the positive domino effect a good education can have on many aspects of a person’s life and outlook “</p>
						<div class="duty"></div>
						<a href="https://www.linkedin.com/in/praval-singh-73149020b/" target="_blank"><button
								class="btn-sameer">Follow +</button></a>
					</div>
				</center>
			</div>
			<div class="card">
				<center><img src="images/creator/suraj.jpg"></center>
				<center>
					<div class="card-title">Suraj Mishra</div>
					<div id="detail">
						<p>“ What makes a child gifted and talented may not always be good grades in school, but a different way of looking at the world and learning. “</p>
						<div class="duty"></div>
						<a href="https://www.linkedin.com/in/suraj-mishra-4a7322274" target="_blank"><button
								class="btn-praval">Follow +</button></a>
					</div>
				</center>
			</div>
		</div>
	</div>

	<!-- SERVICES -->
	<div class="service-swipe">
		<div class="diffSection" id="services_section">
			<center>
				<p style="font-size: 50px; padding-top: 100px; padding-bottom: 60px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: bolder; color: #fff">Services</p>
			</center>
		</div>
		<a href="subjects/computer_courses.html">
			<div class="s-card"><img src="images/icon/computer-courses.png">
				<p>Free Online Computer Courses</p>
			</div>
		</a>
		<a href="subjects/gate.html">
			<div class="s-card"><img src="images/icon/papers.jpg">
				<p>Sample Papers of Various Competitive Exams</p>
			</div>
		</a>
		<a href="subjects/quiz.html">
			<div class="s-card"><img src="images/icon/q1.png">
				<p>Daily Brain Teasing Questions to Improve IQ</p>
			</div>
		</a>
	</div>

	<!-- CONTACT US -->
	<div class="diffSection" id="contactus_section">
		<center>
			<!-- <p style="font-size: 50px; padding: 100px">Contact Us</p> -->
			<p style="font-size: 50px; padding-top: 50px; padding-bottom: 100px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: bolder;">Contact Us</p>
		</center>
		<div class="csec"></div>
		<div class="back-contact">
			<div class="cc">
				<form action="contact.php" method="post" enctype="text/plain">
					<label>First Name <span class="imp">*</span></label><br>
					<center>
						<input type="text" name="u_name" style="margin-right: 10px; width: 100%" required="required"><br>
					</center>
					<label>Email <span class="imp">*</span></label><br>
					<input type="email" name="e_mail" style="width: 100%" required="required"><br>
					<label>Message <span class="imp">*</span></label><br>
					<input type="text" name="messsage" style="width: 100%" required="required"><br>
					<label>Additional Details</label><br>
					<!-- //<textarea name="addtional"></textarea><br> -->
					<button type="submit" name="send" id="csubmit">Send Message</button>
				</form>
			</div>
		</div>
	</div>

	<!-- FEEDBACK -->
	<div class="title2" id="feedBACK">
		<span>Give Feedback</span>
		<div class="shortdesc2">
			<p>Please share your valuable feedback to us</p>
		</div>
	</div>

	<div class="feedbox">
		<div class="feed">
			<form action="mailto:roshank9419@gmail.com" method="post" enctype="text/plain">
				<label>Your Name</label><br>
				<input type="text" name="" class="fname" required="required"><br>
				<label>Email</label><br>
				<input type="email" name="mail" required="required"><br>
				<label>Additional Details</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
		</div>
	</div>
	<!-- FOOTER -->
	<footer>
		<div class="footer-container">
			<div class="left-col">
				<div class="logo" style="font-size: 28px; font-weight: bolder; font-family: Arial, Helvetica, sans-serif; padding-bottom: 16px; color: red;">MATHAINO</div>
				<div class="logo"></div>
				<div class="social-media">
					<a href="#"><img src="images/icon\fb.png"></a>
					<a href="#"><img src="images/icon\insta.png"></a>
					<a href="#"><img src="images/icon\tt.png"></a>
					<a href="#"><img src="images/icon\ytube.png"></a>
					<a href="#"><img src="images/icon\linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">Copyright © 2023 Created By Our Team, All Rights Reserved.</p>
				<br>
				<p><img src="images/icon/location.png"> <span style="color:red ; font-weight: bolder;" >GLA University</span><span> , Mathura UttarPradesh-281406 </span></p>
				<br>
				<p><img src="images/icon/mail.png">&nbsp;learnedonline9419@gmail.com</p>
			</div>
		</div>
	</footer>

</body>

</html>
	