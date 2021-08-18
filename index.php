<?php

include "scripts/main.php";
include "scripts/navigation.php";

$current_page = "Home";
$current_subpage = "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home - How Not To HTML</title>
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/homepage.css" />
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
				<div id="logo" onmouseover="plainLogo();" onmouseout="normalLogo();" onclick="window.location.href='index.php'">
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
			<?=getNavLinks(0);?>
		</nav>
		
		<div class="mobile-nav" id="mobile-nav">
			<a href="javascript:void(0)" class="mobile-nav-close" onclick="closeNav()"><i class="fas fa-times"></i></a>
			<div class="mobile-nav-content">
				<?=getMobileNavLinks(0);?>
			</div>
		</div>
		
		<main>
			<div class="left-sidebar">
				
				<a href="http://dumud.net/~william.garrity/yondarin.com/"><img id="left-advert" src="assets/images/yondarin-pizza.jpg" alt="Need to buy pizza for your class because you keep forgetting to share your screen on Zoom? Then buy it from Yondarin Pizza. $5 per large pizza." /></a>
				
			</div>
			
			<div class="content">
				
				<div id="homepage-top-words">
					Do You Find <span class="topwords-emp">Tutorials</span> on How to Make Websites With HTML <span class="topwords-emp">Boring?</span><br />
					Want to Have Some <span class="topwords-emp">Devilish Fun</span> While Creating a Website?<br /> 
					<span class="topwords-emp">Hate</span> Following <span class="topwords-emp">the "Rules"</span> of Website Creation?<br />
					Well You Have Come to The Right Place!
				</div>
				
				<div id="homepage-sub-words">
					This site is the best place to find how <div class="not-to">NOT TO</div> make websites with HTML, CSS, JavaScript, and more!
				</div>
				
				<div class="site-sections">
					<div class="site-section">
						
						<div class="section-logo-fa"><i class="fab fa-html5"></i></div>
						<div class="section-header">HTML</div>
						<div class="section-subheader">The Building Block of Website Creation, and a Whole Load of Ways to Mess Things Up</div>
						<div class="section-link"><a href="html/index.php">HTML Tutorials</a></div>
						
					</div>
					<div class="site-section">
						
						<div class="section-logo-fa"><i class="fab fa-css3-alt"></i></div>
						<div class="section-header">CSS</div>
						<div class="section-subheader">How to Make Your Website Look Beautiful, or Make it Look Like a Five-Year-Old Made It</div>
						<div class="section-link"><a href="css/index.php">CSS Tutorials</a></div>
						
					</div>
					<div class="site-section">
						
						<div class="section-logo-fa"><i class="fab fa-js-square"></i></div>
						<div class="section-header">JavaScript</div>
						<div class="section-subheader">Makes Your Website Interactive, or Irritating to the User</div>
						<div class="section-link"><a class="blocked" href="">COMING SOON</a></div>
						
					</div>
					<div class="site-section">
						
						<div class="section-logo-fa"><i class="far fa-window-maximize"></i></div>
						<div class="section-header">Creating a Website</div>
						<div class="section-subheader">The Best Practices on How Not To Create a Website</div>
						<div class="section-link"><a href="creating-website/index.php">Tutorials</a></div>
						
					</div>
					<div class="site-section">
						
						<div class="section-logo-fa"><i class="fab fa-php"></i></div>
						<div class="section-header">PHP</div>
						<div class="section-subheader">How to Make Your Website Unique to Each User, or Loop Your Users Between Two Webpages</div>
						<div class="section-link"><a class="blocked" href="">COMING SOON</a></div>
						
					</div>
					<div class="site-section">
						
						<div class="section-logo-fa"><i class="fas fa-database"></i></div>
						<div class="section-header">SQL</div>
						<div class="section-subheader">How to Store and Access Data, or Accidentially Drop All Tables</div>
						<div class="section-link"><a class="blocked" href="">COMING SOON</a></div>
						
					</div>
					<div class="site-section">
						
						<div class="section-logo-fa"><i class="fas fa-server"></i></div>
						<div class="section-header">Backend Design</div>
						<div class="section-subheader">The Best Practices on How to Make Little Bobby Tables Inevitable</div>
						<div class="section-link"><a class="blocked" href="">COMING SOON</a></div>
						
					</div>
					<div class="site-section">
						
						<div class="section-logo-fa"><i class="fab fa-linux"></i></div>
						<div class="section-header">Linux</div>
						<div class="section-subheader">How to Use one of the Most Popular Families of Operating Systems for Servers, or How to Run <code>sudo rm -rf /</code> on Your Friend's Linux PC</div>
						<div class="section-link"><a class="blocked" href="">COMING SOON</a></div>
						
					</div>
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