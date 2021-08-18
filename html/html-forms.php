<?php

include "../scripts/main.php";
include "../scripts/navigation.php";

$current_page = "HTML";
$current_subpage = "HTML Forms";
$home_location = "../index.php";

$form_types = [
	"text" => "Defines a text input field that is a single line",
	"password" => "Defines a password input field with password dots",
	"rado" => "Defines a choice input field with only one choice",
	"checkbox" => "Defines a choice field with many choices that can be chosen",
	"number" => "Defines an input field that is only to be used with numbers",
	"reset" => "Defines a form reset field which resets all fields to their default values",
	"submit" => "Defines a submit button which will send the form data to its proper destination"
]

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
				
				<h1>HTML Forms</h1>
				
				<h2>The Basics</h2>
				<p>Forms in HTML is the main way of recieving input from your users on your webpage. Unless you know some sort of server side programming language like PHP, you will not be able to do anything with user input, but you can get yourself ready by working with forms.</p>
				<p>HTML forms are contained within a <code><?=htmlspecialchars("<form>");?></code> tag and takes two attributes, <code><?=htmlspecialchars("action");?></code> and <code><?=htmlspecialchars("method");?></code>. The <code><?=htmlspecialchars("action");?></code> attribute sets where you want the form data to go once the user submitted the form. For now, we will just have the attribute set to <code><?=htmlspecialchars("#");?></code>. The <code><?=htmlspecialchars("method");?></code> attribute sets how you want to send the form data over once the user submitted the form. There are two methods that you can use, GET and POST. GET sends form data over via the URL of the webpage, providing convience for testing out your forms and allowing your users to bookmark their form submission. But because the length of the URL bar is limited to 2048 characters, it is not good for long forms. That is where POST comes into play. POST sends form data via the HTTP request, which means that it doesn't show up in the URL and that it has no size limits, meaning that it is good for large forms. Always use GET for short forms (like short questionnaires, login forms, etc.) and always use POST for large forms (like registration forms, very long surveys, etc.). Here is an example of the backbone of a form with no inputs:</p>
				
				<div class="codesnip">
					<pre><code class="html"><?=outputCode("../assets/examples/html-tutorials/html-forms/form-1.html");?></code></pre>
					<a href="../assets/examples/html-tutorials/html-forms/form-1.html" target="_blank">View Example</a>
				</div>
				
				<h2>Form Inputs</h2>
				<p>What good is a form without inputs, right? I mean you could use the <code><?=htmlspecialchars("<form>");?></code> tag like a <code><?=htmlspecialchars("<div>");?></code> tag, but you probably want to have user input fields inside of your forms, not text. That is where the <code><?=htmlspecialchars("<input>");?></code> tag comes into play, it defines a place where users can input stuff. There is one absolutely necessary attribute, and that is <code><?=htmlspecialchars("type");?></code>, which defines the type of input to place inside of the form. There are many different types of form inputs but here is a table listing out the few that you will mostly be working with in your web development career:</p>
				
				<table>
					<tr>
						<th>Type</th>
						<th>Description</th>
					</tr>
					<?=displayTable($form_types);?>
				</table>
				
				<p>There are also a few common attributes that these types share in common, but only two of them are really important. The <code><?=htmlspecialchars("value");?></code> attribute, which sets the initial value of what is inside a text input field, the value of a selected radio or checkbox input, or the name of the reset and submit buttons. This is very important attribute to set, especially for checkboxes and radio buttons. The second one is the <code><?=htmlspecialchars("name");?></code> attribute, which sets the name of the input field that gets sent over with the form data so that the code processing the data knows what data goes with what form input. <strong>You must have this attribute on all input fields or the data they contain will not be sent over.</strong></p>
				
				<div class="notice-box">
					<div class="notice-box-triangle"><i class="fas fa-exclamation-triangle"></i></div>
					<p>Because of how special radio button input fields are (as you are supposed to only be able to select one of many radio buttons), to have them work properly you need to use the <code><?=htmlspecialchars("name");?></code> attribute and <strong>set all radio buttons that go together to the same value, or things will be broken.</strong></p>
				</div>
				
				<p>Here is an example of a form with a variety of input fields:</p>
				
				<div class="codesnip">
					<pre><code class="html"><?=outputCode("../assets/examples/html-tutorials/html-forms/form-2.html");?></code></pre>
					<a href="../assets/examples/html-tutorials/html-forms/form-2.html" target="_blank">View Example</a>
				</div>
				
				<div class="little-quiz">
					<div class="little-quiz-header">Quiz</div>
					<label>Which method would you send form data over if it was just a short login field?</label><br />
					<input id="quiz-1" type="radio" name="quiz" value="Test" /><label for="quiz-1">DELETE</label><br />
					<input id="quiz-2" type="radio" name="quiz" value="Test" /><label for="quiz-2">GET</label><br />
					<input id="quiz-3" type="radio" name="quiz" value="Test" /><label for="quiz-3">#</label><br />
					<input id="quiz-4" type="radio" name="quiz" value="Test" /><label for="quiz-4">POST</label><br />
					
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