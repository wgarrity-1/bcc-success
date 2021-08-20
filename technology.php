<?php

include "scripts/main.php";
include "scripts/navigation.php";

$current_page = "Technology";
$current_subpage = "Technology";
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
				<p>Especially after COVID there are going to be more online and digital components to your college courses. Heck some of your courses may be completely online. At BCC the main tech services you will be dealing with is Moodle, Microsoft Word and Excel, and WebAdvisor. By knowing how to use these services you will be able to complete your coursework effectively and be able to succeed in your courses!</p>

                <h2>Moodle</h2>
                <p>At BCC, Moodle is used in most courses as a place for instructors to post assignments and to post class materials and other class information. In Moodle you can find assignment due dates, submit assignments, stay organized with assignment due dates with the Moodle Calendar, send messages to classmates via quickmail, and more! If you are used to using anything like Canvas or Schoology, then Moodle should be easy to learn.</p>
                <p><a href="https://docs.google.com/document/d/1I5e3UFTusVTem9GUJZIsPrF6R-57AfKLR4cgJbIlS9M/edit">Check out the BCC Moodle User's Guide to learn more on how to use Moodle at BCC!</a></p>

                <h2>Microsoft Word and Excel</h2>
                <h3>Word</h3>
                <p>Microsoft Word skills are crucial for success in writing reports and papers in your courses. It is crucial to know how to format your essays properly in Word for success in college. Word can also be used to create digital notes with lists and shapes.</p>
                <p><a href="https://www.berkshirecc.edu/knowledge/microsoft-office/word-paragraph-spacing.php">Check out the BCC's Word Paragraph Spacing article on how to format your papers correctly for your courses</a></p>
                <p><a href="https://berkshirecc.smartcatalogiq.com/Current/Catalog/Courses/CIS-Computer-Info-Systems/100/CIS-102">Also check out taking CIS-102 Fundamental Computer Literacy to learn how to use Microsoft Word, Excel, and PowerPoint</a></p>
                <h3>Excel</h3>
                <p>Microsoft Excel is also crucial to know for college, especially if you are majoring in a STEM field. With Excel you can manage sets of data, do math on sets of data (ex. find averages of a set of data), format sets of data, and use Excel's many functions.</p>
                <p><a href="assets/excel-tutorial.xlsx">Check out this Excel tutorial file given to BCC STEM 101 student!</a></p>
                <p><a href="https://berkshirecc.smartcatalogiq.com/Current/Catalog/Courses/CIS-Computer-Info-Systems/100/CIS-102">Also check out taking CIS-102 Fundamental Computer Literacy to learn how to use Microsoft Word, Excel, and PowerPoint</a></p>

                <h2>WebAdvisor</h2>
                <p>WebAdvisor is going to be your main place where you will be able to register for classes, view your class schedule, view your grades and transcript, view your student bill and financial aid information, make payments to your account, and search for course sections.</p>
                <p><a href="https://www.berkshirecc.edu/knowledge/bcc-technology/index.php">Please check out the BCC Knowledge Base's WebAdvisor section on how to properly use WebAdvisor to be successful at BCC!</a></p>

                <h2>How we will use this</h2>
                <p><em>William</em> - I plan on maintaining my skills in Word, Excel, and Moodle to be successful at BCC in the fall!</p>
                <p><em>Nicole</em> - I will use these programs to complete my assignments for the classes I am in during the semester and I will use WebAdvisor to make payments to my student bill and view my schedule for classes.</p>
                <p><em>Raelyn</em> - Since I am a CS major, I will be using all of the Microsoft Office applications for my classes. Moodle and WebAdvisor are a must for me to check my bills and manage my assignments and classes.</p>
			
				<div class="little-quiz">
					<div class="little-quiz-header">Quiz</div>
					<label>What service is not used at BCC?</label><br />
					<input id="quiz-1" type="radio" name="quiz" value="Test" /><label for="quiz-1">Google Chrome</label><br />
					<input id="quiz-2" type="radio" name="quiz" value="Test" /><label for="quiz-2">Moodle</label><br />
					<input id="quiz-3" type="radio" name="quiz" value="Test" /><label for="quiz-3">WebAdvisor</label><br />
					<input id="quiz-4" type="radio" name="quiz" value="Test" /><label for="quiz-4">Excel</label><br />
					
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