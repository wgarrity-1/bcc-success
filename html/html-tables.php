<?php

include "../scripts/main.php";
include "../scripts/navigation.php";

$current_page = "HTML";
$current_subpage = "HTML Tables";
$home_location = "../index.php";

$attribute_table = [
	"align" => "Aligns the table either left, right, or center on the webpage",
	"bgcolor" => "Sets the background color of the table, this attribute also works on other elements",
	"border" => "Sets the border of the table and the cells",
	"cellpadding" => "Sets how much padding there should be inside of each cell",
	"cellspacing" => "Sets how far each cell should be from one another"
];

$attribute_cell = [
	"align" => "Aligns the text in a cell to the left, right, or center",
	"bgcolor" => "Sets the background color of the cell",
	"valign" => "Aligns the text in a cell to either the top, middle, or bottom of the cell"
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
				
				<h1>HTML Tables</h1>
				<h2>The Structure of a Table</h2>
				<p>Making tables in HTML is a pretty easy thing to do. All you need is a <code><?=htmlspecialchars("<table>");?></code> tag, some <code><?=htmlspecialchars("<tr>");?></code> (table row) tags, and some <code><?=htmlspecialchars("<td>");?></code> (table data, which is just the items in one row of the table) tags. <strong>You do need to make sure that for every row there are the same number of table data tags. If you don't follow this rule (except in certain scenarios where you can't have the same number of table data tags per row), your table will be really messed up. If you intended for your table to be messed up then go for it.</strong> You also should add the attribute <code><?=htmlspecialchars("border='1'");?></code> to the table tag so that you can actually see the table and cell borders. For example if you wanted to make this table:</p>
				<img class="image-tutorial-alt" src="../assets/images/table-1-example.png" alt="An example table" /> 
				<p>Then we would just use this code:</p>
				
				<div class="codesnip">
					<pre><code class="html"><?=outputCode("../assets/examples/html-tutorials/html-tables/tables-1.html");?></code></pre>
					<a href="../assets/examples/html-tutorials/html-tables/tables-1.html" target="_blank">View Example</a>
				</div>
				
				<h2>Formatting a Table</h2>
				<p>There are a few attributes that affect how a table is displayed on a webpage. Here is a table listing out thoes attributes:</p>
				<table>
					<tr>
						<th>Attribute</th>
						<th>Description</th>
					</tr>
					<?=displayTable($attribute_table);?>
				</table>
				
				<p>Here is an example of these attributes in action:</p>
				
				<div class="codesnip">
					<pre><code class="html"><?=outputCode("../assets/examples/html-tutorials/html-tables/tables-2.html");?></code></pre>
					<a href="../assets/examples/html-tutorials/html-tables/tables-2.html" target="_blank">View Example</a>
				</div>
				
				<h2>Formatting a Table Cell</h2>
				<p>As with formatting a whole table, you can also format a single table cell. Here is a table listing out attributes that affect the formatting of an individual cell:</p>
				<table>
					<tr>
						<th>Attribute</th>
						<th>Description</th>
					</tr>
					<?=displayTable($attribute_cell);?>
				</table>
				
				<p>And here is an example of thoes attributes in action:</p>
				
				<div class="codesnip">
					<pre><code class="html"><?=outputCode("../assets/examples/html-tutorials/html-tables/tables-3.html");?></code></pre>
					<a href="../assets/examples/html-tutorials/html-tables/tables-3.html" target="_blank">View Example</a>
				</div>
				
				<h2>Column Span and Row Span</h2>
				<p>Want to have a cell span 2 or more columns and/or span 2 or more rows? Well you can with the <code><?=htmlspecialchars("colspan");?></code> and <code><?=htmlspecialchars("rowspan");?></code> attributes. See the following example on how to properly span cells to a certain number of columns and rows because it can get confusing:</p>
				
				<div class="codesnip">
					<pre><code class="html"><?=outputCode("../assets/examples/html-tutorials/html-tables/tables-span.html");?></code></pre>
					<a href="../assets/examples/html-tutorials/html-tables/tables-span.html" target="_blank">View Example</a>
				</div>
				
				<h2>A Use for Tables: Layouts</h2>
				<p>Making layouts is one thing that tables are really good at. By disabling the table border, using formatting attributes, and a mix of column spanning and row spanning, you can create whole webpages inside of tables. Take a look at this example of a site using tables for laying out a site:</p>
				
				
				<div class="codesnip">
					<pre><code class="html"><?=outputCode("../assets/examples/html-tutorials/html-tables/tables-layout.html");?></code></pre>
					<a href="../assets/examples/html-tutorials/html-tables/tables-layout.html" target="_blank">View Example</a>
				</div>
				
				<div class="little-quiz">
					<div class="little-quiz-header">Quiz</div>
					<label>Which of the following uses <strong>is not</strong> a use for an HTML table?</label><br />
					<input id="quiz-1" type="radio" name="quiz" value="Test" /><label for="quiz-1">For putting information into a table if a table is an appropriate way to display the information</label><br />
					<input id="quiz-2" type="radio" name="quiz" value="Test" /><label for="quiz-2">For laying out a webpage</label><br />
					<input id="quiz-3" type="radio" name="quiz" value="Test" /><label for="quiz-3">For displaying statistical data on a webpage</label><br />
					<input id="quiz-4" type="radio" name="quiz" value="Test" /><label for="quiz-4">For displaying a scrambled image on a webpage</label><br />
					
					<button class="little-quiz-button" onclick="checkQuiz('quiz-4');">See if you are correct!</button>
					
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