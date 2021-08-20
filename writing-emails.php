<?php

include "scripts/main.php";
include "scripts/navigation.php";

$current_page = "Writing Emails";
$current_subpage = "Writing Emails";
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
                <p>Yo dawg, don't email those instructors like you text your friend, it ain't cool man, it ain't cool.</p>
                <p>Did you notice how unprofessional that last sentence sounded? Your instructors will not like it if you send them emails that sound like a text message to your friends, they expect a professional email from you. A professional email creates a streamlined and concise communication between you and the instructor, show that you are professional and responsible, it’s appropriate for academic and work environments, it gets better responses from your instructor, and it cultivates confidence towards situations where you must communicate electronically to an adult in a professional setting.</p>

                <h2>The Only Professional Email Template You Will Ever Need</h2>
                <p>[Professional Greeting with honorific and name]</p>
				<p>[Polite interest/meaningless niceness]</p>
				<p>[Background information]. [The reason for your email]. [If applicable, explaining that you have tried to do this on your own beforehand]. [Restatement of your request].</p>
				<p>[Thank them],</p>
				<p>[Name]</p>
				<br />
				<p><a href="https://medium.com/@lportwoodstacer/how-to-email-your-professor-without-being-annoying-af-cf64ae0e4087">Check out this amazing article on how to write an email to your professor</a></p>
				
				<h2>How we will use this</h2>
                <p><em>William</em> - I'm going to be writing a ton of emails in college to my professors, so knowing how to write professionally is key to making sure that they understand me clearly and I look like I am taking the email seriously.</p>
                <p><em>Nicole</em> - Whenever I email someone for school, I am unsure if I am formatting it correctly or professionally in a way that they would like to see. Knowing how to do this will make it easier to know that I am sending the right email.</p>
                <p><em>Raelyn</em> - I will definitely be typing emails to my professors when I have questions I was not able to answer in class and are not on the syllabus. I will also be curating emails when communicating with potential bosses and other professional relationships.</p>
				
			
				<div class="little-quiz">
					<div class="little-quiz-header">Quiz</div>
					<label>Why should you write a professional email to your professor?</label><br />
					<input id="quiz-1" type="radio" name="quiz" value="Test" /><label for="quiz-1">You shouldn't</label><br />
					<input id="quiz-2" type="radio" name="quiz" value="Test" /><label for="quiz-2">Its appropriate for the academic environment</label><br />
					<input id="quiz-3" type="radio" name="quiz" value="Test" /><label for="quiz-3">To show that you are clueless in their class</label><br />
					<input id="quiz-4" type="radio" name="quiz" value="Test" /><label for="quiz-4">To get free money from them</label><br />
					
					<button class="little-quiz-button" onclick="checkQuiz('quiz-2');">See if you are correct!</button>
					
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