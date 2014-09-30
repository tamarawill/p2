<html>
<head>
	<meta charset="UTF-8">
	<title>XKCD Password Generator</title>
	<?php 
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		require "xkcdlogic.php"; 
	?>
</head>
<body>
	<?php
		$numwords;
		$inclnum;
		$inclsym;
		
		if (array_key_exists('num_words', $_POST)) {
			if ( (int)$_POST['num_words'] < 1 ||
				(int)$_POST['num_words'] > 9) {
				echo "<p>Invalid number - enter a number between 1 and 9.</p>";
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
				echo "<p>Your password: ";
				echo make_password($numwords,$inclnum,$inclsym);
				echo "</p>";
			}
		}
	?>
	
	<form action="<?=basename($_SERVER['PHP_SELF'])?>" method="POST">
		<p>
		<label for="num_words">Number of Words</label>
		<input type="number" name="num_words" id="num_words" min="1" max="9" step="1" value="2"><br>
		<label for="incl_num">Include a Number</label>
		<input name="incl_num" id="incl_num"type="checkbox" checked><br>
		<label for="incl_sym">Include a Symbol</label>
		<input name="incl_sym" id="incl_sym" type="checkbox" checked><br>
		<input type="submit">
		</p>
	</form>

</body>
</html>