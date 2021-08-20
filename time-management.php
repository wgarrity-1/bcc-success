<?php

include "scripts/main.php";
include "scripts/navigation.php";

$current_page = "Time Management";
$current_subpage = "Time Management";
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
                <p>Time management is key to college success, you <strong>need</strong> to be able to balance your time between your academics, your social life, and your job. If you don't learn to balance your time, you won't be successful in college. You might fail to succeed in your classes because you didn't budget enough study time, you might not be getting a full social life you need, you might not be working enough hours which will mess up your finances. Time management is extremely crucial to your college success and can be the make or break of your college career.</p>

                <h2>Analyze Your Time</h2>
                <p>Calculate the amount of time you need to spend on each activity in your day or week. Once you have done this you can organize your schedule around those blocks of time.</p>
				
				<h2>Manage Your Energy, Not Just Your Time</h2>
                <p>Observe your energy throughout the day and determine what times you are most and least productive. Knowing when you are most productive allows you to schedule the items that require the most energy during that time frame.</p>
				
                <h2>Use a Calendar/Planner and a To-Do List</h2>
                <p>These tools can help you to visualize your day, making it easier to manage your time and keep your mind at ease. You can get paper planners and calendars at most stores, and you can use services like Google Calendar (calendar) and Todoist (to-do list) to help manage your time.</p>

                <h2>Battle Procrastination</h2>
                <p>Procrastination has different causes for each individual, meaning there are different strategies for resolving it. Start with small steps and create a habit of doing things right away; procrastination does not go away immediately. Remember, practice makes perfect!</p>

                <h2>Make Your Schedule Realistic and Relax</h2>
                <p>Make sure you take into account time for breaks and time with family and friends, and some time for yourself. Without these breaks you can get burned out, which is never a good thing.</p>

                <h2>Find Support</h2>
                <p>If you are really struggling with time management and procrastination, do not be afraid to seek out help from a trusted friend, professor, or college advisor. Remember that there are people in the same situation that you are in, and there are people out there that can help you!</p>

                <h2>Stay Motivated!</h2>
                <p>When things get tough remember the long-term goal you have in mind, whether that be to finish college or get an A in that course. Remind yourself that it is worth it in the end. And remember, don't give up you can do this!</p>

				<h2>How we will use this</h2>
                <p><em>William</em> - I'm currently decent with time management and use a calendar and a to-do list to manage my day, but there is still room for improvement. I plan on using these tips to help myself manage my time a lot better.</p>
                <p><em>Nicole</em> - Using these strategies for time management would really help me to finish my work during college without affecting my sleep schedule.</p>
                <p><em>Raelyn</em> - I currently am terrible with time management and procrastination, so I will be practicing small habits of doing things right away and I hope that I eventually won’t procrastinate.</p>

				<div class="little-quiz">
					<div class="little-quiz-header">Quiz</div>
					<label>What should you do to practice good time management?</label><br />
					<input id="quiz-1" type="radio" name="quiz" value="Test" /><label for="quiz-1">Procrastinate</label><br />
					<input id="quiz-2" type="radio" name="quiz" value="Test" /><label for="quiz-2">Use a calendar/planner</label><br />
					<input id="quiz-3" type="radio" name="quiz" value="Test" /><label for="quiz-3">Burn out</label><br />
					<input id="quiz-4" type="radio" name="quiz" value="Test" /><label for="quiz-4">Sleep in a classroom on campus</label><br />
					
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