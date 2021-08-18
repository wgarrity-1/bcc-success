<?php

include "../scripts/main.php";
include "../scripts/navigation.php";

$current_page = "Creating a Website";
$current_subpage = "Planning";
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
				
				<h1>Planning a Website</h1>
				<img class="image-tutorial" src="../assets/images/planningmeme.jpg" alt="Ain't nobody got time for that meme about website planning" />
				<p>You really don't need to plan out a website, just come up with an idea and run with it. You can mess around with your idea while creating your website. Planning just wastes time on other things you could be doing to make your website awesome. But if you do need to plan out a website, here are a few tips and tricks to help you out:</p>
				
				<ul>
					<li><strong>Use a word processor like Word or Google Docs to write out the content of your website</strong> - Using a word processor can help you plan out what you want your website's content to sound like. You also can use spell and grammar check to make sure that your content sounds professional, but whom neds spel chek, write?</li>
					<li><strong>Draw out what you want your site to look like</strong> - Grab a pencil and paper and start drawing out what you want your website to look like, then convert the looks into CSS later</li>
					<li><strong>Look at other websites and influence your design off of theirs</strong> - Looking at other peoples websites can help you design your website without having to come up with a new desing pattern. why do all the hard work if it has been done for you, right?</li>
					<li><strong>Have someone else do the planning for you</strong> - Why should you be the one that plans out a website when you can ask or pay someone else to do it, right?</li>
					<li><strong>Just use Wordpress</strong> - Why spend all of your time with planning and creating a website when you can just use Wordpress to make your website? It lets you plan and create your website all at once with an easy to use interface, no HTML required!</li>
				</ul>
				
				<div class="little-quiz">
					<div class="little-quiz-header">Quiz</div>
					<label>True or false, it is best practice not to plan out a website?</label><br />
					<input id="quiz-1" type="radio" name="quiz" value="Test" /><label for="quiz-1">True</label><br />
					<input id="quiz-2" type="radio" name="quiz" value="Test" /><label for="quiz-2">False</label><br />
					
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