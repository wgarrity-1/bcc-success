<?php

include "../scripts/main.php";
include "../scripts/navigation.php";

$current_page = "CSS";
$current_subpage = "CSS Tutorials";
$home_location = "../index.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$current_subpage?> - How Not To HTML</title>
	<link rel="stylesheet" href="../assets/css/main.css" />
	<script src="../assets/js/main.js"></script>
	
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
				
				<h1>CSS Tutorials</h1>
				
				<div class="site-sections">
					
					<div class="site-section">

						<div class="section-logo-fa"><i class="fab fa-css3-alt"></i></div>
						<div class="section-header">CSS Basics</div>
						<div class="section-subheader">Learn the basics on how CSS makes your site look like a five-year-old made it</div>
						<div class="section-link"><a class="blocked" href="css-basics.php">COMING SOON</a></div>

					</div>
					
					<div class="site-section">

						<div class="section-logo-fa"><i class="fas fa-palette"></i></div>
						<div class="section-header">CSS Colors</div>
						<div class="section-subheader">How to change the colors of HTML elements and mess with colorblind people</div>
						<div class="section-link"><a class="blocked" href="css-colors.php">COMING SOON</a></div>

					</div>
					
					<div class="site-section">

						<div class="section-logo-fa"><i class="far fa-object-group"></i></div>
						<div class="section-header">CSS Positioning</div>
						<div class="section-subheader">How to position HTML elements on the webpage, and mess with people with larger and smaller screens than you</div>
						<div class="section-link"><a class="blocked" href="">COMING SOON</a></div>

					</div>
					
					<div class="site-section">

						<div class="section-logo-fa"><i class="fas fa-mobile"></i></div>
						<div class="section-header">CSS Responsive Design</div>
						<div class="section-subheader">How to mess with mobile users and users with very large monitors</div>
						<div class="section-link"><a class="blocked" href="css-responsive-design.php">COMING SOON</a></div>

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