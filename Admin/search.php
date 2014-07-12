<?
//////////////////////////////////////////////////////
//require("../Connections/config.inc.php");
//require("../Connections/mysql.class.php");
/// Create New DB Object
//$db = new MySQL();
/// Open Connection
//$db->open();
//////////////////////////////////

$searchEmail = $_POST['searchEmail'];
$advance = $_POST['advance'];
//echo $advance."<br />";
///
$name = $_POST['searchName'];
//echo $name."<br />";
$lastName = $_POST['searchLastName'];
//echo $lastName."<br />";
$ID = $_POST['searchPassport'];
//echo $ID."<br />";
$chosen = $_GET['me'];
if (isset($chosen)) {
	$querySearch = $db->dbQuery("SELECT * FROM persons where personID = '$chosen'");
	$rowSearch = $db->fetch_array($querySearch);
	//echo "ID... ".$rowSearch['personID']."<br />";
	//echo "First Name... ".$rowSearch['firstName']."<br />";
}
//echo "<br /> Check ID : ".$id1."<br />";

//' OR firstName = '$name' OR lastName = '$lastName' OR passNumber = '$ID'
///
if (isset ($searchEmail) || isset ($advance)) {
//////////////////////////////////
	if ($searchEmail != '' || $chosen != '') {
		//echo "<br /> Check Chosen ID : ".$chosen."<br />";
		$querySearch = $db->dbQuery("SELECT * FROM persons where emailAddress = '$searchEmail' OR personID = '$chosen'");
		$rowSearch = $db->fetch_array($querySearch);
		$custID = $rowSearch['personID'];
		$name = $rowSearch['firstName'];
		//
		if ($custID == '') {
			//echo "ID... ".$custID."<br />";
			$none = true;
		} else $exist = true;
	}
	if ($advance != '') {
		//echo "A punto de hacer el query avanzado.....<br />";
		//$querySearch = $db->dbQuery("SELECT * FROM persons where firstName = '$name' AND firstName != '' OR lastName = '$lastName' AND lastName != '' OR passNumber = '$ID' AND passNumber != ''");
		if (($name != "") && ($lastName != "")) {
			$querySearch = $db->dbQuery("SELECT * FROM persons where firstName like '$name' AND lastName like '$lastName'");
			$rowSearch = $db->fetch_array($querySearch);
			$custID = $rowSearch['personID'];
			$name = $rowSearch['firstName'];
			if ($custID == '') {
				//echo "ID... ".$custID."<br />";
				//echo "First Name... ".$name."<br />";
				$none = true;
			} else $existArray = true;
		} else {
			$querySearch = $db->dbQuery("SELECT * FROM persons where firstName like '$name' AND firstName != '' OR lastName like '$lastName' AND lastName != '' OR passNumber = '$ID' AND passNumber != ''");
			$rowSearch = $db->fetch_array($querySearch);
			$custID = $rowSearch['personID'];
			$name = $rowSearch['firstName'];
			if ($custID == '') {
				//echo "ID... ".$custID."<br />";
				//echo "First Name... ".$name."<br />";
				$none = true;
			} else $existArray = true;
		}
	}
	/*
		$rowSearch = $db->fetch_array($querySearch);
		$custID = $rowSearch['personID'];
		$name = $rowSearch['firstName'];
		if ($custID !=''){
			//echo "ID... ".$custID."<br />";
			//echo "First Name... ".$name."<br />";
			//echo "There's someone with ID.... #".$custID." and Name.... :".$name." <br />";
			$exist = true;
			//echo "Entonces Existe...".$exist."<br />";
		}
		if ($custID ==''){
		//echo "ID... ".$custID."<br />";
		//echo "First Name... ".$name."<br />";
		$none = true; }
	 * *
	 */
//////////////////////////////////
}
?>