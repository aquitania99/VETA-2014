<?php
//echo "YA ESTAMOS EN BULKLOAD.PHP!!!<br />NOW WHAT!!!!???<br />";
/* *** *** */
$brImgsPath = $_POST['filePath'];
///Image 2
if (isset($stksBulkFile)) {
	$uploaded_size = $_FILES['personsBulkFile']['size'];
	$uploaded_type = $_FILES['personsBulkFile']['type'];
	//////
	if ($uploaded_size > 5550000) {
		echo "Your file is too large.<br>";
		$ok = 0;
	}

	//This is our limit file type condition
	if ($uploaded_type == "text/php") {
		echo "No PHP files<br>";
		$ok = 0;
	}
	//////
	if (file_exists($brImgsPath . $_FILES['personsBulkFile']['name'])) {
		echo $_FILES['personsBulkFile']['name'] . " already exists.<br /> ";
		$csvFile = $_FILES['personsBulkFile']['name'];
		unlink("bulkUpload/raw/" . $csvFile);
		echo "Please wait a minute while we clean up the folder.......<br /><br />DONE!!<br />Now.... back to our business!<br />";
		///
		move_uploaded_file($_FILES['personsBulkFile']['tmp_name'],
			$brImgsPath . $stksBulkFile);
		echo "<br />Alright! The File " . $stksBulkFile . " has been successfully uploaded to the server<br \>";
		///
		include_once('simplecsvimport.php');

	} else {
		move_uploaded_file($_FILES['personsBulkFile']['tmp_name'],
			$brImgsPath . $stksBulkFile);
		echo "<br />The File " . $stksBulkFile . " has been successfully uploaded to the server<br \>";
		///
		include_once('simplecsvimport.php');

	}

}
?>
