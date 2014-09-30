<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">			
	<title>P2 - XKCD Password Generator</title>
	
	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	
	<!-- Bootstrap theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<!-- Local CSS -->
	
	<link rel="stylesheet" href="style.css">
	
	<?php 
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		require "xkcdlogic.php"; 
	?>	

</head>
<body>
<div class="container-fluid">
	<header class="row">
		<div class="col-md-12">
		<h1>DWA15 Project 2 - XKCD Password Generator</h1>
		</div> <!-- end col -->
	</header>
	<div class="row">
		<div class="col-md-4">
	
			<form action="<?=basename($_SERVER['PHP_SELF'])?>" method="POST">
				<div class="form-group">
					<label for="num_words">Number of Words</label>
					<input class="form-control" type="number" name="num_words" id="num_words" min="1" max="9" step="1" value="2">
				</div>
				<div class="form-group">
					<label for="incl_num">Include a Number</label>
					<input class="form-control" name="incl_num" id="incl_num"type="checkbox" checked>
				</div>
				<div class="form-group">
					<label for="incl_sym">Include a Symbol</label>
					<input class="form-control" name="incl_sym" id="incl_sym" type="checkbox" checked><br>
				</div>
				<input class="form-control" type="submit" value="Create Password!" class="btn btn-default">
			</form>
	
		</div> <!-- end col -->
		<div class="col-md-4" id="result">
		
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
				echo "<h2>Your Password:</h2><p>";
				echo make_password($numwords,$inclnum,$inclsym);
				echo "</p>";
			}
		}
	?>

		</div>
	</div> <!-- end div class row -->
</div> <!-- end div class container-fluid -->

<!-- JQuery Javascript -->
<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	
<script>

</script>

</body>
</html>