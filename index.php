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
	
	<?php require "xkcdlogic.php"; ?>	

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
		
		<?php show_formresult(); ?>
	
		<h2>Generate a Password</h2>
			
			<div class="panel panel-default">
				<div class="panel-heading">Make a password!</div>
				<div class="panel-body">
				<form action="<?=basename($_SERVER['PHP_SELF'])?>" method="POST">
					<div class="form-group">
						<label for="num_words">Number of Words</label>
						<input class="form-control" type="number" name="num_words" id="num_words" min="0" max="10" step="1" value="2">
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
				</div> <!-- end panel body -->
			</div> <!-- end panel -->
		
		</div> <!-- end col -->
		
		<div class="col-md-8">
			
			<h2>What is an XKCD Password?</h2>
			<p><a href="http://xkcd.com/936/" target="_blank"><img class="img-responsive" src="img/password_strength.png" border="0" alt="XKCD Comic #936" /></a></p>
		
		</div> <!-- end col -->
		
  	<div class="clearfix visible-md-block"></div>
		
	</div> <!-- end row -->
	
	<footer class="row">
		<div class="col-md-12">
			<p>Blah blah blah</p>
		</div>
	</footer>
			
</div> <!-- end div class container-fluid -->

<!-- JQuery Javascript -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>