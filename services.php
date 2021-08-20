<?php

include "scripts/main.php";
include "scripts/navigation.php";

$current_page = "BCC Services";
$current_subpage = "BCC Services";
$home_location = "index.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$current_subpage?> - BCC Student Success Guide</title>
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/tutorials.css" />
	<script src="assets/js/main.js"></script>
	
	<script src="https://kit.fontawesome.com/c7a6440550.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class="body_flex">
		
		<header>
			<div class="mobile-nav-button" onclick="openNav();">
				<i class="fas fa-bars"></i>
			</div>
			<div class="left-header">
				<div id="logo" onclick="window.location.href='index.php'">
					<img src="assets/images/bcc_logo.png" alt="BCC Logo"></img>
				</div>
				<div class="mobile-motto">
					A guide to student success at BCC
				</div>
			</div>
			
			<div class="right-header">
				<div id="motto">A guide to student success at BCC</div>
			</div>
		</header>
		
		<nav>
			<?=getNavLinks(1);?>
		</nav>
		
		<div class="mobile-nav" id="mobile-nav">
			<a href="javascript:void(0)" class="mobile-nav-close" onclick="closeNav()"><i class="fas fa-times"></i></a>
			<div class="mobile-nav-content">
				<?=getMobileNavLinks(1);?>
			</div>
		</div>
		
		<main>
			<div class="left-sidebar">
				
			</div>
			
			<div class="content">
				
				<h1><?=$current_subpage?></h1>
				<h2>Why is this important?</h2>
                <p>Berkshire Community College has many resources to help students to succeed at college and beyond. From tutoring services to research services to special groups that support each other, BCC has it all. By taking part in these services you are almost guarenteed to succeed in college.</p>

                <h2>BCC Tutoring</h2>
                <p>Berkshire Community College provides free tutoring for all students in most courses. BCC Tutors can help students that are struggling in a course, or even students that are doing well to help them to succeed even more. BCC tutors are well versed in the course content, either from taking the course at BCC (peer tutors) or from work experience (community tutors). Tutors can provide one on one tutoring and help students with studying and preparing for tests.</p>
                <p><a href="https://www.berkshirecc.edu/academics/academic-support/tutorial-services/">Check out BCC's Tutorial Service webpage for more information!</a></p>

                <h2>Library and Digital Commons</h2>
                <p>The BCC Library and Digital Commons provides many benefical services to BCC students. Along with the usual library services, the BCC library provides access to many acadmeic databases for helping out with research projects, an easy to access search interface for searching all databases, and provides free textbooks to be used in the library. The BCC Digital Commons inside the library also has a computer lab that all students can use, a technology helpdesk, as well as free black and white printing.</p>
                <p><a href="https://www.berkshirecc.edu/about-bcc/library/index.php/">Check out the BCC Library webpage to learn more about library services</a></p>
                <p><a href="https://www.berkshirecc.edu/about-bcc/campus-services/computer-labs/">Check out the BCC Digital Commons webpage to learn more about the Digital Commons services</a></p>

                <h2>TRIO</h2>
                <p>TRIO is a program at BCC that provides supports for fist-generation college students, low-income students, and students with disabilities. TRIO provides specialized tutoring services (both individual and group tutoring), life skills training, and counseling. The program also provides an oppurtunity to socialize with other students in the TRIO program.</p>
                <p><a href="https://www.berkshirecc.edu/student-engagement/the-trio-program/index.php">Click here to learn more about the TRIO program at BCC</a></p>

                <h2>How we will use this</h2>
                <p><em>William</em> - I plan on trying to take advantage of the BCC tutoring center for my courses this fall as well as signing up for the TRIO program as I believe I qualify.</p>
                <p><em>Nicole</em> - </p>
                <p><em>Raelyn</em> - </p>
			
				<div class="little-quiz">
					<div class="little-quiz-header">Quiz</div>
					<label>What is a service that BCC offers?</label><br />
					<input id="quiz-1" type="radio" name="quiz" value="Test" /><label for="quiz-1">Transportation</label><br />
					<input id="quiz-2" type="radio" name="quiz" value="Test" /><label for="quiz-2">High School Tutoring</label><br />
					<input id="quiz-3" type="radio" name="quiz" value="Test" /><label for="quiz-3">Plane Tickets</label><br />
					<input id="quiz-4" type="radio" name="quiz" value="Test" /><label for="quiz-4">TRIO</label><br />
					
					<button class="little-quiz-button" onclick="checkQuiz('quiz-4');">See if you are correct!</button>
					
					<div id="feedback"></div>
				</div>
				
			</div>
			
			
			<div class="right-sidebar">
			</div>
		</main>

		<footer>
			<div id="copyright"><?=$footer_copy;?></div>
			<div id="site-designer"><?=$footer_designer;?></div>
		</footer>
	
	</div>
</body>

</html>