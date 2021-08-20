<?php

include "scripts/main.php";
include "scripts/navigation.php";

$current_page = "Studying Tips";
$current_subpage = "Studying Tips";
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
				<h2>Why is this important</h2>
                <p>As with proper note taking, proper studying can help you to not forget what was said in your biology lecture, leading you to failing your final exam and making Gina disappointed in you. You don't want to make her disappointed right? Well then start to learn how to study and make Gina proud of you!</p>

                <h2>How are study tips useful?</h2>
                <p>Study tips can help to combat test anxiety by making sure you remember the course content. Study tips also make you more confident in your own knowledge and abilities, helps you to pass upcoming quizzes and exams and to pass the course, and most importantly helps you to retain important information that will become useful outside of the classroom (that's why you are going to college right?). By following these tips, you are bound to have a successful experience in college!</p>

                <h2>The Tips</h2>

                <h3>Study every day, don't cram!</h3>
                <p>Make sure the information you are studying is spread out so it can be remembered properly. Breaks are vital to avoid fatigue and stress when taking in so much information.</p>

                <h3>Get rid of distractions!</h3>
                <p>Make sure the environment that you are in allows you to focus on studying. If you can't get rid of distractions in your own house, go to a library and study there.</p>

                <h3>Use the resources around you!</h3>
                <p>This could be using the tutoring center or creating a study group with peers. Don't let BCC's valuable resources go to waste, USE THEM!</p>

                <h3>Use memory tricks!</h3>
                <p>Create mnemonics (devices such as acronyms, rhymes, jingles, etc.) and personal connections with your material so it can better be remembered.</p>

                <h3>Make a study group!</h3>
                <p>If the members are wisely chosen, these work out great. A good study group has a small amount of people (no more than 3 or 4 people), people who are doing well in the class or want to do well, and complementary learning styles and skills. For each study group session, you should also create an agenda of things to get done to stay on track and make sessions useful.</p>

                <h3>Use material that was assigned in class!</h3>
                <p>This includes tests, quizzes, the reading, and homework. Quizzing each other, reviewing assignments, and “reteaching” material to classmates all help reinforce your knowledge.</p>

                <h3>Ask questions!</h3>
                <p>Getting clarification from the professor or even peers on a subject helps it stick in your memory. Remember, asking questions is NOT a sign of weakness, so JUST ASK!</p>
				
                <h2>How we will use this</h2>
                <p><em>William</em> - For some of my courses this fall I plan out somehow making a study group to help study for exams and projects as well as reaching out to the professor if I need help.</p>
                <p><em>Nicole</em> - I hope that using these study tips will make studying less stressful and easier to remember information provided to me.</p>
                <p><em>Raelyn</em> - Studying every day rather than cramming is something I hope to incorporate into my first semester at BCC. These study tips will allow me to retain information so I can apply them on my tests and in my career.</p>

				<div class="little-quiz">
					<div class="little-quiz-header">Quiz</div>
					<label>How many people should be in a study group?</label><br />
					<input id="quiz-1" type="radio" name="quiz" value="Test" /><label for="quiz-1">2 people</label><br />
					<input id="quiz-2" type="radio" name="quiz" value="Test" /><label for="quiz-2">5 - 6 people</label><br />
					<input id="quiz-3" type="radio" name="quiz" value="Test" /><label for="quiz-3">3 - 4 people</label><br />
					<input id="quiz-4" type="radio" name="quiz" value="Test" /><label for="quiz-4">It doesn't matter at all</label><br />
					
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