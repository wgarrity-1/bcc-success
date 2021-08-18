<?php

include "../scripts/main.php";
include "../scripts/navigation.php";

$current_page = "Creating a Website";
$current_subpage = "Annoying the User";
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
				
				<h1>Annoying the User</h1>
				<p>Users going to a website excepts to have a nice experience and for nothing to be broken or to go wrong on it. They expect fast loading times, no bloated ads, and no weird site mechanics. But what if you want to annoy your users and make them stay away from your website. Well then this tutorial is for you. In this tutorial we will be discussing three way to annoy the user, through alerts, through bloated ads, and through bad web design.</p>
				
				<h2>Popups</h2>
				<h3>JavaScript Alerts on Loop</h3>
				<p>The JavaScript <code>alert()</code> function is a powerful function that lets you annoy the user with annoying browser alerts. If you don't know what a browser alert is then press this button below:</p>
				
				<button onclick="alert('See this is an alert');">Click Me!</button>
				
				<p>Now that you have seen what an alert is, imagine if we had the power to infinitely give out alerts when a user visits a website. Well stop imagining because we do, we can just use a JavaScript <code>while</code> loop, have its condition always be true, and add the alert function inside of it with maybe some fancy stuff and bam, an infinite amount of alerts. Here is an example of that in action:</p>
				
				<div class="codesnip">
					<pre><code><?=outputCode("../assets/examples/creatingweb-tutorials/website-annoying-user/while-alerts.html");?></code></pre>
					<a href="../assets/examples/creatingweb-tutorials/website-annoying-user/while-alerts.html" target="_blank">View Example</a>
				</div>
				
				<h3>JavaScript Alerts on Hover</h3>
				<p>But what if you want to not break the users computer with infinite alerts? Well then you can have an alert come up when the user hovers over an element on the page. You can do this to any element, even the body so that users can't do anything on the page. To do this just add this attribute to any HTML element: <code>onmouseover="alert("Alert text here");"</code>. Here is an example of this in action on a specific element:</p>
				
				<div class="codesnip">
					<pre><code><?=outputCode("../assets/examples/creatingweb-tutorials/website-annoying-user/alert-element.html");?></code></pre>
					<a href="../assets/examples/creatingweb-tutorials/website-annoying-user/alert-element.html" target="_blank">View Example</a>
				</div>
				
				<p>And here is an example of it on the whole body:</p>
				
				<div class="codesnip">
					<pre><code><?=outputCode("../assets/examples/creatingweb-tutorials/website-annoying-user/alert-body.html");?></code></pre>
					<a href="../assets/examples/creatingweb-tutorials/website-annoying-user/alert-body.html" target="_blank">View Example</a>
				</div>
				
				<p>With the power of alerts, you can easily annoy your users on your website.</p>
				
				<div class="notice-box">
					<div class="notice-box-triangle"><i class="fas fa-exclamation-triangle"></i></div>
					<p>This page is incomplete, more content for this page is on its way. If you want a sneak peak of what is to come, look at the large comment in the HTML code of this page.</p>
				</div>
				
				<!--- For Future Use
				<h2>Bloated Ads</h2>
				<p>Ads, the most hated thing on the internet, that is why people like to use ad blockers. Ads are a great way to infuriate your users. You can even go a step further and replace ads with image ads (you would have to make them) so that they can't use ad blockers. Here is an example of our webpage but with ads all over the place.</p>
				
				<h2>Bad Web Design</h2>
				<p>Users expect their websites to work and their websites to look nice and have a common sense design. But by not making a common sense design with CSS, or even no design at all (no CSS), you can irritate your users.</p>
				
				<h3>Comic Sans Font</h3>
				<p>Comic sans, one of the worlds most hated font. You can drive your users nuts by having your site's main font Comic Sans. </p>
				-->
				
				
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