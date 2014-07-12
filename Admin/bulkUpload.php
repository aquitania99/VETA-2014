<!-- Javascript Stuff Start -->
<script src='newsletter/multiFileUp/jquery.js' type="text/javascript"></script>
<script src='newsletter/multiFileUp/jquery.form.js' type="text/javascript"></script>
<script src='newsletter/multiFileUp/jquery.MetaData.js' type="text/javascript"></script>
<script src='newsletter/multiFileUp/jquery.MultiFile.js' type="text/javascript"></script>
<!-- Javascript Stuff End -->

<!-- /// /// -->
<h3>Upload Contact Details</h3>
<div class='admin_box'>
	<?php
	$stksBulkFile = $_FILES['personsBulkFile']['name'];
	$stksBulk = $_POST['personsBulkSubmit'];
	if (!isset($stksBulk)) {
		?>
		<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
			<label for="file">Filename:</label>
			<input type="file" name="personsBulkFile" id="personsBulkFile"/>
			<input name="filePath" type="hidden" id="filePath" value="bulkUpload/raw/"/>
			<br/>
			<input type="submit" name="personsBulkSubmit" value="**Upload**" id="personsBulkSubmit"/>
		</form>
		<p>
			<br/>
			Loads a Stockists CSV File to the Database.
		</p>
	<?php
	}
	if (isset($stksBulk)) {
		//echo "ANYTHING!! INSIDE??...".$stksBulkFile."<br />";
		include_once('bulkload.php');
	}
	?>
</div>
<!-- /// /// -->
