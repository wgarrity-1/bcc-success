<?php

include "../scripts/main.php";
include "../scripts/navigation.php";

$current_page = "Creating a Website";
$current_subpage = "Image Usage Rights";
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
				
				<h1>Image Usage Rights</h1>
				<h2>Why Image Licensing Doesn't Matter</h2>
				<p>Image licensing on the internet doesn't matter. You can use any type of image from anywhere without seeking permission on your webpages. This is the case because when a person uploads an image to the internet, they are giving up their copyright rights and saying that their image can be used anywhere on the internet without permission. They can not agree to this term by not uploading their image to the internet. Sometimes image owners will see their image being used without their permission and try to sue the website owners, and sometimes succede. They and the courts still think that copyright exists on the internet, but it simply does not. Although you can use any image as you please, you should take some basic precautions so that your chances of being sued for all of your money and end up living on the streets is drastically lowered.</p>
				
				<h2>Making your Website Non-Indexable with a <code>Robots.txt</code> File</h2>
				<p>Making your website non-indexable makes it harder for people to find your "unlicensed" images and sue you over for it, as your website will not appear in search engines and stop most robots from scanning the content of your website. All you need to do is create a file called <code>robots.txt</code> in the folder that your website is in and add the follow text inside of it:</p>
				
				<div class="codesnip">
					<pre><code class="plain-text"><?=outputCode("../assets/examples/creatingweb-tutorials/website-image-usage/example-robots.txt");?></code></pre>
				</div>
				
				<p>That is all you need to do to protect yourself from the bots and the lawyers.</p>
				
				<h2>Saying that you are Using Images Under Fair Use</h2>
				<p>Fair use is a complicated and ambiguous legal doctrine that allows for copyrighted materials to be used without permission from the person that holds the copyright on the material. Although technically using any image you like on your website doesn't fall under fair use (if images on the internet qualified for copyright), saying that it does fall under fair use keeps most lawyers away. Just by adding this HTML code to the bottom of your footer you can keep 90% of lawyers from suing you:</p>
				
				<div class="codesnip">
					<pre><code class="html"><?=htmlspecialchars("<div>All images used on this website are used under Fair Use</div>");?></code></pre>
				</div>
				
				<h2>Help! I got a Letter From a Lawyer Saying that I Need to Pay a Bunch of Money or else I Will be Sued for Everything I Own, What do I do?</h2>
				<p>Burn the letter and move to Switzerland, change your name, and forget about your previous life.</p>
				
				<div class="little-quiz">
					<div class="little-quiz-header">Quiz</div>
					<label>True or false, you need to get permission from the image owner to use their image on your website?</label><br />
					<input id="quiz-1" type="radio" name="quiz" value="Test" /><label for="quiz-1">True</label><br />
					<input id="quiz-2" type="radio" name="quiz" value="Test" /><label for="quiz-2">False</label><br />
					
					<button class="little-quiz-button" onclick="checkQuiz('quiz-2');">See if you are correct!</button>
					
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