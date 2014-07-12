<?php
//////////////////////////////////////////////////////
include("../Connections/config.inc.php");
include("../Connections/mysql.class.php");
/********************************************************************/
/* Code at [url=http://legend.ws/blog/tips-tricks/csv-php-mysql-import/]http://legend.ws/blog/tips-tricks/csv-php-mysql-import/[/url]
/* Edit the entries below to reflect the appropriate values
/********************************************************************/
/*
$databasehost = "localhost";
$databasename = "veta";
*/
$databasetable = "persons";
/*
$databaseusername ="root";
$databasepassword = "Prozac01";
 * 
 */
$fieldseparator = ",";
$lineseparator = "\n";
$csvfile = "bulkUpload/raw/" . $stksBulkFile;
/********************************************************************************************/
/* Would you like to add an ampty field at the beginning of these records?
/* This is useful if you have a table with the first field being an auto_increment integer
/* and the csv file does not have such as empty field before the records.
/* Set 1 for yes and 0 for no. ATTENTION: don't set to 1 if you are not sure.
/* This can dump data in the wrong fields if this extra field does not exist in the table
/********************************************************************************************/
$addauto = 0;
/********************************************************************************************/
/* Would you like to save the mysql queries in a file? If yes set $save to 1.
/* Permission on the file should be set to 777. Either upload a sample file through ftp and
/* change the permissions, or execute at the prompt: touch output.sql && chmod 777 output.sql
/********************************************************************************************/
$save = 1;
$outputfile = "bulkUpload/output.sql";
/********************************************************************************************/


if (!file_exists($csvfile)) {
	echo "File not found. Make sure you specified the correct path.\n";
	exit;
}

$file = fopen($csvfile, "r");

if (!$file) {
	echo "Error opening data file.\n";
	exit;
}

$size = filesize($csvfile);

if (!$size) {
	echo "File is empty.\n";
	exit;
}

$csvcontent = fread($file, $size);

fclose($file);
/*
$con = @mysql_connect($databasehost,$databaseusername,$databasepassword) or die(mysql_error());
@mysql_select_db($databasename) or die(mysql_error());
 * 
 */
//////////////////////////////////////////////////////
/// Create New DB Object
$db = new MySQL();
/// Open Connection
$db->open();
//////////////////////////////////////////////////////
//$preQuery = $db->dbQuery("SELECT COUNT(1) AS Count FROM persons");
$preQuery = $db->dbQuery("SELECT COUNT(1) AS Count FROM personstest"); //Testing Query
///
$rowPre = $db->fetch_array($preQuery);
$before = $rowPre['Count'];
echo "Actual Records..." . $before . "<br \>";
//////////////////////////////////////////////////////
$lines = 0;
$queries = "";
$linearray = array();
/* -------------------------- */
$databasehost = "localhost";
/*
 * //Local configuration
$databasename = "veta";
$databasetable = "personstest";
$databaseusername ="root";
$databasepassword = "Prozac01";
*/
//Live configuration
$databasename = "austravn_veta";
$databasetable = "personstest";
$databaseusername = "austravn_admindb";
$databasepassword = "pass@word01";

$con = @mysql_connect($databasehost, $databaseusername, $databasepassword) or die(mysql_error());
@mysql_select_db($databasename) or die(mysql_error());
/* -------------------------- */

foreach (split($lineseparator, $csvcontent) as $line) {

	$lines++;

	if ($lines > 1) {

		$line = trim($line, " \t");

		$line = str_replace("\r\n", "", $line);

		/************************************************************************************************************
		 * This line escapes the special character. remove it if entries are already escaped in the csv file
		 ************************************************************************************************************/

		$line = str_replace("'", "\'", $line);
		/***********************************************************************************************************/

		$linearray = explode($fieldseparator, $line);

		$linemysql = implode("','", $linearray);
		//echo "lineMysql ".$linemysql."<br />";
		if ($addauto)
			$query = "insert into $databasetable values('','$linemysql');";
		else
			$query = "insert into $databasetable values('$linemysql');";

		$queries .= $query . "\r\n";

		@mysql_query($query);
	}
}

@mysql_close($con);
/// Open Connection
//////////////////////////////////////////////////////
//$afterQuery = $db->dbQuery("SELECT COUNT(1) AS Count FROM persons");
$afterQuery = $db->dbQuery("SELECT COUNT(1) AS Count FROM personstest"); //Testing Query
///
$rowAfter = $db->fetch_array($afterQuery);
$after = $rowAfter['Count'];
echo "New records Records..." . $after . "<br \>";
//////////////////////////////////////////////////////
if ($before != $after) {
	$total = $after - $before;
	echo "<p>Congratulations!!! <br />
      The Loading Of the Contacts CSV file to the Server Has Been Done Successfully</p><p>In total " . $total . " records have been added to the database.";
} else {
	echo "<script type=\"text/javascript\">alert(\"Sorry!! but within the $lines registries found in the file uploaded, We didn\'t find any new record to be added to the database.\\n\\nThis means that the database is up to date. \\n\\nIf you want, try again later on, with an updated csv file.\\n\\nThank You!\\n\");</script>";
}
$db->close();

if ($save) {

	if (!is_writable($outputfile)) {
		echo "File is not writable, check permissions.\n";
	} else {
		$file2 = fopen($outputfile, "w");

		if (!$file2) {
			echo "Error writing to the output file.\n";
		} else {
			fwrite($file2, $queries);
			fclose($file2);
		}
	}

}
//echo "<br />Found a total of $lines records in this csv file.\n";
?>
