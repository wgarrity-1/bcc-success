<?php

include "scripts/main.php";
include "scripts/navigation.php";

$current_page = "Note Taking";
$current_subpage = "Note Taking";
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
                <p>People forget, it's a part of life. You don't want to forget what Gina said in her lecture on evolution on the final exam right? Proper note taking combined with proper studying can make sure that you ace exams and succeed in your college courses!</p>

                <h2>The List Method</h2>
                <p></p>

                <h2>The Outline Method</h2>
                <p></p>

                <h2>The Concept Map Method</h2>
                <p></p>

                <h2>The Cornell Method</h2>
                <p></p>
				
				<h2>How we will use this</h2>
                <p><em>William</em> - </p>
                <p><em>Nicole</em> - </p>
                <p><em>Raelyn</em> - </p>
			
				<div class="little-quiz">
					<div class="little-quiz-header">Quiz</div>
					<label>What two tags are not really needed to display a webpage?</label><br />
					<input id="quiz-1" type="radio" name="quiz" value="Test" /><label for="quiz-1">Wrong</label><br />
					<input id="quiz-2" type="radio" name="quiz" value="Test" /><label for="quiz-2">Wrong</label><br />
					<input id="quiz-3" type="radio" name="quiz" value="Test" /><label for="quiz-3">Right</label><br />
					<input id="quiz-4" type="radio" name="quiz" value="Test" /><label for="quiz-4">Wrong</label><br />
					
					<button class="little-quiz-button" onclick="checkQuiz('quiz-3');">See if you are correct!</button>
					
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