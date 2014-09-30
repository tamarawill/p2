<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mucking around with file scraping</title>
		<?php
		error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
		ini_set('display_errors', 1); # Display errors on page (instead of a log file)
		?>
</head>
<body>

<?php

	$thelongstring = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html');
		
	$num_matches = preg_match_all("#<li>\s*(.*)\s*</li>#", $thelongstring);
	
	echo "\n\n $num_matches match(es)\n";

?>


</body>
</html>