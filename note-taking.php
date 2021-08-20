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
                <p>Lists are a type of note-taking that involves a large amount of writing with the purpose of recording most of what the instructor says. This is known as the fallback method of notes and is usually considered to be less effective than others due to the sheer amount of information that is in the notes, making it very hard to study off of. <strong>Don't use this method</strong></p>

                <h2>The Outline Method</h2>
                <p>Outlines are created by starting with key ideas followed by supporting ideas indented below them. Indented further are details that go with the supporting ideas. It’s also a good idea to review your outline and add a short summary. This method is best done when the instructor’s presentation is organized or has other ways of a clear key idea.</p>

                <h2>The Concept Map Method</h2>
                <p>Concept maps are a graphic method of note taking and involve the use of shapes and symbols. Key ideas and concepts are placed in circles and branch out to supporting ideas and details. Lines connect back to related ideas and arrows demonstrate cause and effect. This method of taking notes is best for showing relationships between the ideas.</p>

                <h2>The Cornell Method</h2>
                <p>The Cornell Method of note taking where there are two columns, the cue/recall column on the left 1/3rd of the page and the notes column on the remaining 2/3rds of the page. The notes column is where notes are taken and any of the other note taking methods can be used. The cue column is where you write down the key ideas and concepts with questions and main points, which can be used later to help you to study and recall what you wrote down. This method also includes writing a summary at the bottom of the page.</p>

                <h2>Remember to Summarize</h2>
                <p>After your class or lecture, it is good practice to write a summary of what you learned as soon as possible after the class or lecture so that it sticks into head better. The Cornell Method emphasizes this with its bottom section dedicated to just a summary, but you should use it with the other note taking methods as well.</p>
				
				<h2>How we will use this</h2>
                <p><em>William</em> - Note taking is very essential to learning the material in my classes, so I plan on using the Cornell Method paired with the note taking software OneNote to take effective notes in my classes this fall.</p>
                <p><em>Nicole</em> - I will use the effective ways to take notes to record the most important concepts from any given lesson so I can better understand the lesson given.</p>
                <p><em>Raelyn</em> - Notes are essential to my understanding of the material in my upcoming classes. I will need to take notes that I am comfortable with and help me process the information best.</p>
			
				<div class="little-quiz">
					<div class="little-quiz-header">Quiz</div>
					<label>What is the worst note taking method?</label><br />
					<input id="quiz-1" type="radio" name="quiz" value="Test" /><label for="quiz-1">Lists</label><br />
					<input id="quiz-2" type="radio" name="quiz" value="Test" /><label for="quiz-2">Outline</label><br />
					<input id="quiz-3" type="radio" name="quiz" value="Test" /><label for="quiz-3">Concept Map</label><br />
					<input id="quiz-4" type="radio" name="quiz" value="Test" /><label for="quiz-4">Cornell Method</label><br />
					
					<button class="little-quiz-button" onclick="checkQuiz('quiz-1');">See if you are correct!</button>
					
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