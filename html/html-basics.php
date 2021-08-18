<?php

include "../scripts/main.php";
include "../scripts/navigation.php";

$current_page = "HTML";
$current_subpage = "HTML Basics";
$home_location = "../index.php";

$table_array = [
	"<a>" => "Defines a hyperlink",
	"<b>" => "Defines bold text",
	"<body>" => "Defines the site body",
	"<br />" => "Defines a single line break",
	"<button>" => "Defines a clickable button",
	"<center>" => "Centers all content inside of it",
	"<div>" => "Defines a block section of a page",
	"<form>" => "Defines an HTML form",
	"<h1> to <h6>" => "Defines page headings",
	"<head>" => "Defines information about the webpage",
	"<hr>" => "Defines a horizontal ruler",
	"<i>" => "Defines italic text",
	"<img>" => "Defines an image",
	"<ol> and <ul>" => "Defines an ordered list (with numbers) or an unordered list (with bullets) respectfully",
	"<li>" => "Defines an item in a list",
	"<mark>" => "Defines highlighted text",
	"<p>" => "Defines a paragraph",
	"<style>" => "Defines CSS Style",
	"<script>" => "Defines a client-side script",
	"<del>" => "Defines crossed out text",
	"<small>" => "Defines small text",
	"<span>" => "Defines an inline section of the webpage",
	"<table>" => "Defines a table",
	"<title>" => "Defines a title for the web page",
	"<u>" => "Defines underlined text"
];


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
				
				<h1>HTML Basics</h1>
				
				<div class="notice-box">
					<div class="notice-box-triangle"><i class="fas fa-exclamation-triangle"></i></div>
					<p>Before you continue this tutorial, you should have a basic understanding of HTML (it can be any version, you just need to know the basics). You should know what a web browser is, what an HTML element is, and what the basic syntax of HTML is. You can check out <a href="https://www.w3schools.com/html/default.asp">w3schools’s HTML tutorial.</a> Follow the tutorial from <strong>home</strong> to <strong>attributes</strong> and then come back here to go through this tutorial.</p>
				</div>
				
				
				<h2>The HTML Framework</h2>
				<p>You might have seen on other HTML tutorials that you need to format an HTML page like this:</p>
				<div class="codesnip">
					<pre><code class="html"><?=outputCode("../assets/examples/html-tutorials/html-basics/normal-outline.html");?></code></pre>
					<a href="../assets/examples/html-tutorials/html-basics/normal-outline.html" target="_blank">View Example</a>
				</div>
				
				<p>Well you don’t really need a lot of that stuff. You can get rid of the <code class="html"><?=htmlspecialchars("<!DOCTYPE HTML>");?></code> tag and the <code class="html"><?=htmlspecialchars("<html>");?></code> tag and leave the <code class="html"><?=htmlspecialchars("<head>");?></code> and <code class="html"><?=htmlspecialchars("<body>");?></code> tags intact and your browser will still display the site properly. Look at our first example:</p>
				
				<div class="codesnip">
					<pre><code class="html"><?=outputCode("../assets/examples/html-tutorials/html-basics/no-fancy-stuff.html");?></code></pre>
					<a href="../assets/examples/html-tutorials/html-basics/no-fancy-stuff.html" target="_blank">View Example</a>
				</div>
				
				<p>See the page works properly! Why waste your time (and storage space) with all of these unnecessary tags when you can just leave them out, right?</p>
				
				<h2>The Major HTML Tags</h2>
				<p>Below are the major HTML tags that you should know how to use. Except for a few other tags dealing with forms and tables and some other weird ones, these are the tags that you will deal with all the time in your web development career. There is no good reason to deal with other tags unless you want to.</p>
				
				<table>
					<tr>
						<th>Element</th>
						<th>Description</th>
					</tr>
					<?=displayTable($table_array);?>
				</table>
				
				<h2>The Marquee Tag</h2>
				<p>Although obsolete and probably will get removed at some point, the <code><?=htmlspecialchars("<marquee>");?></code> tag still works in all modern browsers today to give you scrolling and bouncing text. Sound fun doesn't it? Well then why not use it in your webpages?</p>
				
				<p>Having text scroll right to left is the main purpose of the <code><?=htmlspecialchars("<marquee>");?></code> tag. You can have the text scroll right to left or have it bounce from right to left by adding the <code><?=htmlspecialchars("behavior='alternate'");?></code> attribute to the tag. Here is an example:</p>
				
				
				<div class="codesnip">
					<pre><code class="html"><?=outputCode("../assets/examples/html-tutorials/html-basics/marquee-scroll-lr.html");?></code></pre>
					<a href="../assets/examples/html-tutorials/html-basics/marquee-scroll-lr.html" target="_blank">View Example</a>
				</div>
				
				<p>You can have text scroll bottom to top with the <code><?=htmlspecialchars("direction='up'");?></code> attribute (you can also make the text go left to right and up to down with this attribute as well). Do note that to make the scroll area larger you have to set a width and height to the tag. Here is an example:</p>
				
				<div class="codesnip">
					<pre><code class="html"><?=outputCode("../assets/examples/html-tutorials/html-basics/marquee-scroll-td.html");?></code></pre>
					<a href="../assets/examples/html-tutorials/html-basics/marquee-scroll-td.html" target="_blank">View Example</a>
				</div>
				
				<p>And if you wrap a <code><?=htmlspecialchars("<marquee>");?></code> tag inside of another <code><?=htmlspecialchars("<marquee>");?></code> tag with both different directions (left or right and up or down) and with the <code><?=htmlspecialchars("behavior='alternate'");?></code> set and you set a specified width and height, you can make the text bounce from each wall of the element, just like the DVD logo. Here is an example:</p>
				
				<div class="codesnip">
					<pre><code class="html"><?=outputCode("../assets/examples/html-tutorials/html-basics/marquee-bounce.html");?></code></pre>
					<a href="../assets/examples/html-tutorials/html-basics/marquee-bounce.html" target="_blank">View Example</a>
				</div>
				
				<h2>Block vs. Inline Elements</h2>
				<p>There are two types of HTML elements, block elements and inline elements. A block element is displayed on a new line and takes up 100% of the width of its container (for instance it will take up 100% of the width of the body or as far as it can). Inline elements on the other hand don't display on a new line and only takes as much width as it needs. You can force a line break on an inline element (or even in and after a block element) by using the <code><?=htmlspecialchars("<br />");?></code> tag. Here is an example showing what elements are inline elements and block elements:</p>
				
				<div class="codesnip">
					<pre><code class="html"><?=outputCode("../assets/examples/html-tutorials/html-basics/inline-block.html");?></code></pre>
					<a href="../assets/examples/html-tutorials/html-basics/inline-block.html" target="_blank">View Example</a>
				</div>
			
				<div class="little-quiz">
					<div class="little-quiz-header">Quiz</div>
					<label>What two tags are not really needed to display a webpage?</label><br />
					<input id="quiz-1" type="radio" name="quiz" value="Test" /><label for="quiz-1"><code><?=htmlspecialchars("<head>");?></code> and  <code><?=htmlspecialchars("<body>");?></code></label><br />
					<input id="quiz-2" type="radio" name="quiz" value="Test" /><label for="quiz-2"><code><?=htmlspecialchars("<b>");?></code> and  <code><?=htmlspecialchars("<a>");?></code></label><br />
					<input id="quiz-3" type="radio" name="quiz" value="Test" /><label for="quiz-3"><code><?=htmlspecialchars("<!DOCTYPE>");?></code> and  <code><?=htmlspecialchars("<html>");?></code></label><br />
					<input id="quiz-4" type="radio" name="quiz" value="Test" /><label for="quiz-4"><code><?=htmlspecialchars("<tag>");?></code> and  <code><?=htmlspecialchars("<attribute>");?></code></label><br />
					
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