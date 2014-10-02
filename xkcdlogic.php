<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$words = array(
	"about",
	"after",
	"again",
	"air",
	"all",
	"along",
	"also",
	"an",
	"and",
	"another",
	"any",
	"are",
	"around",
	"as",
	"at",
	"away",
	"back",
	"be",
	"because",
	"been",
	"before",
	"below",
	"between",
	"both",
	"but",
	"by",
	"came"
);

$symbols = array (
	"!",
	"@",
	"#",
	"$",
	"%",
	"^",
	"&"
);

function show_formresult() {
	$numwords;
	$inclnum;
	$inclsym;

	if (array_key_exists('num_words', $_POST)) {
		if ( (int)$_POST['num_words'] < 1 ||
			(int)$_POST['num_words'] > 9) {
			echo "<div class=\"panel panel-danger\">\n";
			echo "\t<div class=\"panel-heading\">Error!</div>\n";
			echo "\t<div class=\"panel-body\">\n";
			echo "<p>Invalid number - enter a number between 1 and 9.</p>";
			echo "\n\t</div>\n</div>";
		} else {
			$numwords=$_POST['num_words'];
			if (array_key_exists('incl_num', $_POST)) {
				$inclnum = $_POST['incl_num'];
			} else {
				$inclnum = 0;
			}
			if (array_key_exists('incl_sym', $_POST)) {
				$inclsym = $_POST['incl_sym'];
			} else {
				$inclsym = 0;
			}
			echo "<div class=\"panel panel-success\">\n";
			echo "\t<div class=\"panel-heading\">Your Password!</div>\n";
			echo "\t<div class=\"panel-body\">\n";
			echo "<p>".make_password($numwords,$inclnum,$inclsym)."</p>\n";
			echo "\n\t</div>\n</div>";
			
		}
	}
}

function make_password($number_of_words, $has_number, $has_symbol) {
	global $words;
	global $symbols;
	$thepassword = "";
	for ($i = 0; $i < $number_of_words; $i++) {
		$newword=$words[rand(0, (sizeof($words)-1))];
		if ($i > 0) {
			$thepassword = $thepassword."_";
		}
		$thepassword = $thepassword.$newword;
	}
	if ($has_number) {
		$thepassword = $thepassword.rand(0,9);
	}
	
	if ($has_symbol) {
		$thepassword = $thepassword.$symbols[rand(0, (sizeof($symbols)-1))];
	}
	
	return $thepassword;
}

?>

