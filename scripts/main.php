<?php

$footer_copy = "&copy;2020 How Not to HTML";
$footer_designer = "Site Designed by William Garrity";

function outputCode($path){
	$file = fopen($path, "r") or die("Unable to open file {$path}!");
	$file_html = htmlspecialchars(fread($file, filesize($path)));
	fclose($file);
	
	return $file_html;
};

function displayTable($array){
	$output_html = "";
	foreach ($array as $left => $right){
		$left_html = htmlspecialchars($left);
		$right_html = htmlspecialchars($right);
		$output_html .= "<tr><td>{$left_html}</td><td>{$right_html}</td></tr>\n";
	}
	
	return $output_html;
}