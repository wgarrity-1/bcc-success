<?php

include "../scripts/main.php";
include "../scripts/navigation.php";

$current_page = "Creating a Website";
$current_subpage = "Plagiarism";
$home_location = "../index.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$current_subpage?> - How Not To HTML</title>
	<link rel="stylesheet" href="../assets/css/main.css" />
	<link rel="stylesheet" href="../assets/css/tutorials.css" />
	<script src="../assets/js/main.js"></script>
	
	<link rel="stylesheet" href="../assets/highlight.js/styles/monokai-sublime.css" />
	<script src="../assets/highlight.js/highlight.pack.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
	
	<script src="https://kit.fontawesome.com/c7a6440550.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class="body_flex">
		
		<header>
			<div class="mobile-nav-button" onclick="openNav();">
				<i class="fas fa-bars"></i>
			</div>
			<div class="left-header">
				<div id="logo" onmouseover="plainLogo();" onmouseout="normalLogo();" onclick="window.location.href='<?=$home_location;?>'">
					<span id="logo-how">How</span>
					<div id="logo-not-to">NOT TO</div>
					<span id="logo-html">HTML</span>
				</div>
			</div>
			
			<div class="right-header">
				<div id="motto">The best guide on the internet on how <div class="not-to">NOT TO</div> create HTML websites</div>
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
				
				<a href="http://dumud.net/~william.garrity/yondarin.com/"><img id="left-advert" src="../assets/images/yondarin-pizza.jpg" alt="Need to buy pizza for your class because you keep forgetting to share your screen on Zoom? Then buy it from Yondarin Pizza. $5 per large pizza." /></a>
				
			</div>
			
			<div class="content">
				
				<h1>Plagiarism</h1>
				<h2>Why Plagiarism is not Bad in Web Development</h2>
				<p>Unlike in english class, plagiarism is not a bad thing in web development. Because there is no copyright on the internet, as is discussed in <a href="website-image-usage.php">image usage rights</a>, you can "plagiarize" other people's websites <strong>as long as you change the content of the website.</strong></p>
				
				<p>For example, lets take a look at <a href="http://dumud.net/examples/JavaScript/snowflake/snowflake.html">this webpage which contains floating snowflakes.</a> We can view the code by right clicking anywhere on the page and clicking the view source button (this was tried on Google Chrome and Microsoft Edge, it may be different on other browsers). This is the webpage's code:</p>
				
				<div class="codesnip">
					<pre><code><?=outputCode("../assets/examples/creatingweb-tutorials/website-plagiarism/plagiarized-webpage.html");?></code></pre>
				</div>
				
				<p>Now we just need to change some things in this code. We are going to change the image, the number of snowflakes on the screen, and how fast they go. We are going to use this image named <code>logo.png</code> for the new "snowflakes":</p>
				<img class="image-tutorial" src="../assets/examples/creatingweb-tutorials/website-plagiarism/logo.png" alt="logo" />
				
				<p>We just need to resize the image so that is small, so we will add a CSS stylesheet and make the width of the image 30px. Then we want to double the number of snowflakes on the page, so for every time the number 25 showed up we replaced it with 50. And change the 50 to 25 in the line of code that says <code>setTimeout("move()",50);</code> to increase the number of snowflakes. Here is the final result:</p>
				
				<div class="codesnip">
					<pre><code><?=outputCode("../assets/examples/creatingweb-tutorials/website-plagiarism/plagiarized-edited.html");?></code></pre>
					<a href="../assets/examples/creatingweb-tutorials/website-plagiarism/plagiarized-edited.html" target="_blank">View Example</a>
				</div>
				
				<p>And there you have it, you learnred how to properly "plagiarize" a website.</p>
				
				<div class="little-quiz">
					<div class="little-quiz-header">Quiz</div>
					<label>Plagiarizing a website is okay as long as you...</label><br />
					<input id="quiz-1" type="radio" name="quiz" value="Test" /><label for="quiz-1">Change the content of the webpage</label><br />
					<input id="quiz-2" type="radio" name="quiz" value="Test" /><label for="quiz-2">Say that it is fair use</label><br />
					<input id="quiz-3" type="radio" name="quiz" value="Test" /><label for="quiz-3">Contact the owner</label><br />
					<input id="quiz-4" type="radio" name="quiz" value="Test" /><label for="quiz-4">Ask your teacher</label><br />
					
					<button class="little-quiz-button" onclick="checkQuiz('quiz-1');">See if you are correct!</button>
					
					<div id="feedback"></div>
				</div>
				<div id="really-small">Please do note that this is not legal advice and shouldn't be treated as such. Please talk to a lawyer before doing anything this tutorial says. How Not to HTML is not responsible for any lawsuits or criminal charges you may face by following this advice.</div>
				
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