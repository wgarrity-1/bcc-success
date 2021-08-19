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
				<div id="logo" onclick="window.location.href='index.php'">
					<img src="assets/images/bcc_logo.png" alt="BCC Logo"></img>
				</div>
				<div class="mobile-motto">
					A guide to student success at BCC
				</div>
			</div>
			
			<div class="right-header">
				<div id="motto">A guide to student success at BCC</div>
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
				
			</div>
			
			<div class="content">
				
				<div id="homepage-top-words">
					Are you a new student that want's to succeede at BCC?
				</div>
				
				<div id="homepage-sub-words">
					Well you have come to the right place! This site contains tips to be successful at BCC!
				</div>
				
				<div class="site-sections">
					<div class="site-section">
						
						<div class="section-logo-fa"><i class="fab fa-html5"></i></div>
						<div class="section-header">BCC Services</div>
						<div class="section-subheader">BCC has many services that can help you to succeede! Use them!</div>
						<div class="section-link"><a href="html/index.php">HTML Tutorials</a></div>
						
					</div>
					<div class="site-section">
						
						<div class="section-logo-fa"><i class="fab fa-css3-alt"></i></div>
						<div class="section-header">Technology</div>
						<div class="section-subheader">Moodle, WebAdvisor, Microsoft Word, Microsoft Excel oh my!</div>
						<div class="section-link"><a href="css/index.php">CSS Tutorials</a></div>
						
					</div>
					<div class="site-section">
						
						<div class="section-logo-fa"><i class="fab fa-js-square"></i></div>
						<div class="section-header">Note Taking</div>
						<div class="section-subheader">Don't want to forget what your biology instructor said on the final exam!</div>
						<div class="section-link"><a class="blocked" href="">COMING SOON</a></div>
						
					</div>
					<div class="site-section">
						
						<div class="section-logo-fa"><i class="far fa-window-maximize"></i></div>
						<div class="section-header">Studying Tips</div>
						<div class="section-subheader">You don't want to fail that final exam in biology right? You don't want to disappoint Gina right?</div>
						<div class="section-link"><a href="creating-website/index.php">Tutorials</a></div>
						
					</div>
					<div class="site-section">
						
						<div class="section-logo-fa"><i class="fab fa-php"></i></div>
						<div class="section-header">Time Management</div>
						<div class="section-subheader">You don't want to spend 90% of your time socializing and have no time left over for studying.</div>
						<div class="section-link"><a class="blocked" href="">COMING SOON</a></div>
						
					</div>
					<div class="site-section">
						
						<div class="section-logo-fa"><i class="fas fa-database"></i></div>
						<div class="section-header">Writing Emails</div>
						<div class="section-subheader">Yo, don't email instructors like you text, that ain't cool man.</div>
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