<?php
session_start();
//
require('classes/database.php');
//
date_default_timezone_set("Australia/Sydney");
//////////////////////////////////
if (isset($_SESSION['login'])) {
//////////////////////////////////
	$modifBy = $_SESSION['login'];
//var_dump($modifBy);
//
	if (isset($_POST['submit'])) {
		require('classes/quote.php');
		//
		$searchQuote = new Quote();
		//
		$searchQuote->personID = $_POST['email'];
		//////////////////////////////////
		$searchQuote->searchQuote();
		//
		$test = json_decode($searchQuote->results, TRUE);
		//
		if (!is_null($test)) {
			echo 'the jSon array is NOT empty<br>';
		} else echo 'the jSon array IS empty<br>';
		//var_dump($test);
		//echo "<br>";
		print_r($test);
		echo $test['quoteType'] . "<br>";
	}
//
	?>
	<form class="form-search" action="" method="post">
		<div class="control-group">
			<label class="control-label" for="inputIcon">Email address</label>

			<div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-envelope"></i></span>
					<input class="span2" id="inputIcon" name="email" id="email" type="text">
					<button type="submit" id="submit" name="submit" class="btn">Search</button>
				</div>
			</div>
		</div>
	</form>
<?php } ?>
<!-- SCRIPTS BEGIN -->
<!-- -->
<script src="js/jquery-ui.js" type="text/javascript"></script>
<!-- -->
<script src="js/bootstrap.js" type="text/javascript"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<!-- -->
<!-- SCRIPTS END -->