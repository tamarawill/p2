<html>
<body>

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

//var_dump($words);

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

//echo make_password(3,FALSE,1);


?>

</body>
</html>
