<?php

include "../scripts/main.php";
include "../scripts/navigation.php";

$current_page = "Creating a Website";
$current_subpage = "Creating a Website Tutorials";
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
				
				<h1>Creating a Website Tutorials</h1>
				
				<div class="site-sections">
					
					<div class="site-section">

						<div class="section-logo-fa"><i class="fas fa-sticky-note"></i></div>
						<div class="section-header">Planning</div>
						<div class="section-subheader">Learn why you don't need to plan out a website, and if you do want to how to do it</div>
						<div class="section-link"><a href="website-planning.php">Tutorial</a></div>

					</div>
					
					<div class="site-section">

						<div class="section-logo-fa"><i class="fas fa-gavel"></i></div>
						<div class="section-header">Image Usage Rights</div>
						<div class="section-subheader">How to properly and legally use images, or not, its not illegal to use images you don't have permission to use as long as you don't get caught</div>
						<div class="section-link"><a href="website-image-usage.php">Tutorial</a></div>

					</div>
					
					<div class="site-section">

						<div class="section-logo-fa"><i class="fas fa-file"></i></div>
						<div class="section-header">Plagiarism</div>
						<div class="section-subheader">Plagiarizing websites is fun! Why reinvent the wheel right?</div>
						<div class="section-link"><a href="website-plagiarism.php">Tutorial</a></div>

					</div>
					
					<div class="site-section">

						<div class="section-logo-fa"><i class="fas fa-eye"></i></div>
						<div class="section-header">Dark Patterns</div>
						<div class="section-subheader">The secret powers that let's you control your users (insert evil laugh)</div>
						<div class="section-link"><a class="blocked" href="#">Coming Soon</a></div>

					</div>
					
					<div class="site-section">

						<div class="section-logo-fa"><i class="fas fa-hand-middle-finger"></i></div>
						<div class="section-header">Annoying the User</div>
						<div class="section-subheader">Why make the user happy when you could just annoy them and have fun!</div>
						<div class="section-link"><a href="website-annoying-user.php">Tutorial</a></div>

					</div>
					
					<div class="site-section">

						<div class="section-logo-fa"><i class="fab fa-internet-explorer"></i></div>
						<div class="section-header">Compatibility</div>
						<div class="section-subheader">Why making your site Interent Explorer compatible is a good idea</div>
						<div class="section-link"><a class="blocked" href="">Tutorial</a></div>

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