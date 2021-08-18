<?php

include "../scripts/main.php";
include "../scripts/navigation.php";

$current_page = "HTML";
$current_subpage = "HTML Images";
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
				
				<h1>HTML Images</h1>
				
				<div class="notice-box">
					<div class="notice-box-triangle"><i class="fas fa-exclamation-triangle"></i></div>
					<p>Before you continue this tutorial, you should know where your files are stored relative to the HTML file you are working on, as well as know how to access files in HTML. </p>
				</div>
				
				<h2>Adding an Image</h2>
				<img class="image-tutorial" src="../assets/examples/html-tutorials/html-images/images/teacher.jpg" alt="Mr. Burdick and some students doing something to a robot."/>
				<p>Adding an image to an HTML page is pretty simple, all we need is to use the <code><?=htmlspecialchars("<img>");?></code> tag. For instance if we want to add this photo called <code>teacher.jpg</code> and it is stored in the <code>images</code> folder where our HTML file is, we would use this code to put it on the webpage:</p>
				
				<div class="codesnip">
					<pre><code class="html"><?=outputCode("../assets/examples/html-tutorials/html-images/images-1.html");?></code></pre>
					<a href="../assets/examples/html-tutorials/html-images/images-1.html" target="_blank">View Example</a>
				</div>
				
				<p>The only attribute you need is the <code><?=htmlspecialchars("src");?></code> attribute as that tells the browser where the image is located. On other tutorials for HTML, you might see the <code><?=htmlspecialchars("alt");?></code> attribute used. <b>You don't have to use it, the image will show up without it.</b></p>
				
				<h2>Width and Height</h2>
				<p>Using the <code><?=htmlspecialchars("width");?></code> and <code><?=htmlspecialchars("height");?></code> attributes, you can change the width and height of an image on your webpage. You should always use both attributes together while setting the width and height for an image. If you don't want to make the image looked streched just play with the numbers until the image isn't stretched anymore. Here is an example:</p>
				
				<div class="codesnip">
					<pre><code class="html"><?=outputCode("../assets/examples/html-tutorials/html-images/images-size.html");?></code></pre>
					<a href="../assets/examples/html-tutorials/html-images/images-size.html" target="_blank">View Example</a>
				</div>
				
				<h2>Turning Images into Block Elements and Floating Them</h2>
				<p>By default images are inline elements, but what if you want an image to act like a block element, taking up 100% of the width (the image won't take up the whole entire width but the element will)? What if you want to have an image "float" right next to a paragraph or another block element? Well you can do both of thoes things. To make an image be a block element, just add the attribute <code><?=htmlspecialchars("style='display: block;'");?></code> to your image tag. If you want to float your image to the left or right of another element, make sure that your image is before the elements you want it to float against, then just add the attribute <code><?=htmlspecialchars("style='display: block; float: left;'");?></code> to the image tag (replacing left with right changes where the image floats). Here is an example of both block images and floated images:</p>
				
				<div class="codesnip">
					<pre><code class="html"><?=outputCode("../assets/examples/html-tutorials/html-images/images-block-float.html");?></code></pre>
					<a href="../assets/examples/html-tutorials/html-images/images-block-float.html" target="_blank">View Example</a>
				</div>
				
				<div class="little-quiz">
					<div class="little-quiz-header">Quiz</div>
					<label>What attribute is not needed to display an image?</label><br />
					<input id="quiz-1" type="radio" name="quiz" value="Test" /><label for="quiz-1"><code><?=htmlspecialchars("alt");?></code></label><br />
					<input id="quiz-2" type="radio" name="quiz" value="Test" /><label for="quiz-2"><code><?=htmlspecialchars("src");?></code></label><br />
					<input id="quiz-3" type="radio" name="quiz" value="Test" /><label for="quiz-3"><code><?=htmlspecialchars("pizza");?></code></label><br />
					<input id="quiz-4" type="radio" name="quiz" value="Test" /><label for="quiz-4"><code><?=htmlspecialchars("img");?></code></label><br />
					
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