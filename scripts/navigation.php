<?php

/*

William Garrity
8/18/2021

This PHP file is to be used to create both the navigation bar and mobile navigation pane for the How Not To HTML website for each page. There is one big associative array which is the site map. There are two functions, getNavLinks() and getMobileNavLinks() which return HTML for the nav bar and the mobile nav pane respectively.

*/

# Variables that have no value so that they can be used inside of each webpage to tell the PHP functions what is the current page and current subpage.
$current_page = ""; # Used for determining what nav bar button should be highlighted on the current page
$current_subpage = ""; # used for determining what nav dropdown button should be highlighted on the current page as well as the first part of the page ttile

# Associative array which contains the site map. Dropdown menus have another associative array attached to them detailing the path of the pages, root of the page category, and all of the pages that should go into the dropdown menu.
$navigation_links = [
	"Home" => "index.php",
	"BCC Services" => "services.php",
	"Technology" => "technology.php",
	"Note Taking" => "note-taking.php",
	"Studying Tips" => "studying-tips.php",
	"Time Management" => "time-management.php",
	"Writing Emails" => "writing-emails.php",
	"About Us" => [
		"path" => "about/",
		"root" => "index.php",
		"dropdown" => [
			"Sources" => "sources.php",
		],
	],
	"Tutorial Test" => "tutorial-test.php",
];


# Function that returns HTML for the navbar. It takes a number for an input which is supposed to correlate to how many folders the current page is down so that the proper number of ../ can be inserted in to the navigation links
function getNavLinks($dir_level){
	# These functions must be declared inside the function so I have access to them
	global $navigation_links;
	global $current_page;
	global $current_subpage;
	
	# Blank variables for later use in function
	$return_html = "";
	$current_page_html = "";
	$current_subpage_html = "";
	$back_dots = "";
	
	# for loop that basically gives the desired number of ../'s depending on the directory level and puts that into the variable $back_dots
	for ($i = 0; $i != $dir_level; $i++){
		$back_dots = $back_dots . "../";
	};
	
	# foreach loop that loops through the whole entire navigation array to generate the HTML for the navbar (for every link and details in navigation link)
	foreach ($navigation_links as $link => $details){
		
		# if else statement to determine if the page is the current page depending on what was set in the varialbe $current_page.
		if ($link === $current_page){
			$current_page_html = "id='current-page'";
		} else{
			$current_page_html = "";
		};
		
		
		# if, else if, else statement that generates the HTML for the navbar depending on if the $details variable is a sting (not a dropdown) or an array (dropdown), then stores the HTML in $return_html
		if (gettype($details) === "string"){
			if ($link === "Login" or $link === "Register"){
				$return_html .= "<a {$current_page_html} href='{$back_dots}{$details}' style='float: right;'>{$link}</a>\n";
				
			} else{
				$return_html .= "<a {$current_page_html} href='{$back_dots}{$details}'>{$link}</a>\n";
			};
			
		} else if (gettype($details) === "array"){
			$return_html .= "<div class='dropdown'>\n";
			$return_html .= "<button class='dropdown-button' {$current_page_html} onclick=\"window.location.href='{$back_dots}{$details["path"]}{$details["root"]}'\">{$link} <i class='fa fa-caret-down'></i></button>\n";
			$return_html .= "<div class='dropdown-content'>\n";
			
			foreach ($details["dropdown"] as $link => $location){
				if ($link === $current_subpage){
					$current_subpage_html = "id='current-page'";
				} else{
					$current_subpage_html = "";
				};
				
				$return_html .= "<a {$current_subpage_html} href='{$back_dots}{$details["path"]}{$location}'>{$link}</a>\n";
				
			};
			
			$return_html .= "</div></div>\n\n";
			
			
		} else{
			$return_html = "<h1>An error has occured</h1>";
			break;
		};
	};
	
	return $return_html;
};

function getMobileNavLinks($dir_level){
	global $navigation_links;
	global $current_page;
	global $current_subpage;
	
	$return_html = "";
	$current_page_html = "";
	$current_subpage_html = "";
	$back_dots = "";
	
	for ($i = 0; $i != $dir_level; $i++){
		$back_dots = $back_dots . "../";
	};
	
	foreach ($navigation_links as $link => $details){
		if ($link === $current_page){
			$current_page_html = "id='current-page-mobile'";
		} else{
			$current_page_html = "";
		};
		
		if (gettype($details) === "string"){
				$return_html .= "<a class='mobile-nav-header' {$current_page_html} href='{$back_dots}{$details}'>{$link}</a>\n";
			} else if (gettype($details) === "array"){
				
				$return_html .= "<a class='mobile-nav-header' {$current_page_html} href='{$back_dots}{$details["path"]}{$details["root"]}'>{$link}</a>\n";
				
				foreach ($details["dropdown"] as $link => $location){
					if ($link === $current_subpage){
						$current_subpage_html = "id='current-page-mobile'";
					} else{
						$current_subpage_html = "";
					};

					$return_html .= "<a {$current_subpage_html} href='{$back_dots}{$details["path"]}{$location}'>{$link}</a>\n";
				};
			
		} else{
			$return_html = "<h1>An error has occured</h1>";
			break;
		};
	};
	
	return $return_html;
	
};
