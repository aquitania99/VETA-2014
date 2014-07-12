<?php
if (isset ($name, $lastName)) {
//////////////////////////////////////////////////////
	mysql_select_db($database_greenlight, $greenlight);
	$Contacts1 = "SELECT id, name, last_name, email, mobile_phone, gender, DataAdded, flag
FROM contacts WHERE name like '$name' OR last_name like '$lastName'
ORDER BY DataAdded DESC";
//echo $Contacts1."<br />";
	$contactsSQL1 = mysql_query($Contacts1, $greenlight) or die(mysql_error());
	$row_contacts1 = mysql_fetch_assoc($contactsSQL1);
	$totalRows_contacts1 = mysql_num_rows($contactsSQL1);
//echo $totalRows_contacts1."<br />";
//////////////////////////////////////////////////////
	$name1 = $row_contacts1['name'];
	$lastName1 = $row_contacts1['last_name'];
	$email = $row_contacts1['email'];
	$mobile = $row_contacts1['mobile_phone'];
	$gender1 = $row_contacts1['gender'];
	$DataAdded = $row_contacts1['DataAdded'];
	$newsletter = $row_contacts1['flag'];
//echo $row_contacts[0]."<br />";
}
if (isset ($gender)) {
////////////////////////////////////////////////////////
	mysql_select_db($database_greenlight, $greenlight);
	$Gender = "SELECT id, name, last_name, email, mobile_phone, gender, DataAdded, flag
FROM contacts WHERE gender = '$gender' 
ORDER BY DataAdded DESC";
	$genderSQL = mysql_query($Gender, $greenlight) or die(mysql_error());
	$row_gender = mysql_fetch_assoc($genderSQL);
	$totalRows_gender = mysql_num_rows($genderSQL);
//////////////////////////////////////////////////////
	$name2 = $row_gender['name'];
	$lastName2 = $row_gender['last_name'];
	$email1 = $row_gender['email'];
	$mobile1 = $row_gender['mobile_phone'];
	$gender2 = $row_gender['gender'];
	$DataAdded1 = $row_gender['DataAdded'];
	$newsletter1 = $row_gender['flag'];
//echo "There's ".$gender." =".$totalRows_gender."<br>";
////////////////////////////////////////////////////////
	/*
	echo $name1."<br />";
	echo $lastName1."<br />";
	echo $email."<br />";
	echo $mobile."<br />";
	echo $gender1."<br />";
	echo $DataAdded."<br />";
	if ($newsletter == 1)
	{ echo "Subscribed";}
	*/
}
?>