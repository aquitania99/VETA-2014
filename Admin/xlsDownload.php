<?php
session_start();
//////////////////////////////////////////////
/*if (session_is_registered('valid_user')) {*/
#Database Connection
require_once('inc/conn.php');
/////////////
#Sql, query to get the data from the table $table, defined in conn.php.
$sql = "SELECT personID as 'DB-ID', creationDate as 'Starting Date', 
stCounsellor as 'Student Counsellor', firstName as 'Name', lastName as 'Last Name',
mobilePhone as 'Mobile', emailAddress as 'Email', languageID as 'Language', visaExpDate as ' Visa Exp. Date',
visaType as 'Visa Type', genComments as ' Gen. Comments', nacionality as 'Nationality',
profession as 'Profession', workExperience as 'Work Experience', collegeName as 'College',
DOB as 'D.O.B.', passNumber as 'Passport No.', passExpDate as 'Passport Exp. Date', 
seminarAttendance as 'Has attended Seminars?', seminarDate as 'Seminar Date', 
getVetaInfo as 'Receives Veta Emails?', degreeDate as 'Degree Date', degreeUni as 'University',
residencyCountry as 'Country of Residence', originCountry as 'Country of Origin', 
homePhone as 'Home Phone', skype as 'Skype User', msn as 'MSN User', 
engTest as 'Has Done any English Test?', engTestName as 'English Test Name', 
engTestType as 'Type', engTestDate as 'English Test Date', overallScore as 'Overall Score',
modifDate as 'Modified on', modifBy as 'Modified By' FROM $table";

$r = mysql_query($sql) or trigger_error(mysql_error($link), E_USER_ERROR);
$return = '';
if (mysql_num_rows($r) > 0) {
	$return .= '<table border=1>';
	$cols = 0;
	while ($rs = mysql_fetch_row($r)) {
		$return .= '<tr>';
		if ($cols == 0) {
			$cols = sizeof($rs);
			$cols_names = array();
			for ($i = 0; $i < $cols; $i++) {
				$col_name = mysql_field_name($r, $i);
				$return .= '<th>' . htmlspecialchars($col_name) . '</th>';
				$cols_names[$i] = $col_name;
			}
			$return .= '</tr><tr>';
		}
		for ($i = 0; $i < $cols; $i++) {
			#En esta iteración podes manejar de manera personalizada datos, por ejemplo:
			if ($cols_names[$i] == 'fechaAlta') { #Fromateo el registro en formato Timestamp
				$return .= '<td>' . htmlspecialchars(date('d/m/Y H:i:s', $rs[$i])) . '</td>';
			} else if ($cols_names[$i] == 'activo') { #Estado lógico del registro, en vez de 1 o 0 le muestro Si o No.
				$return .= '<td>' . htmlspecialchars($rs[$i] == 1 ? 'SI' : 'NO') . '</td>';
			} else {
				$return .= '<td>' . htmlspecialchars($rs[$i]) . '</td>';
			}
		}
		$return .= '</tr>';
	}
	$return .= '</table>';
	mysql_free_result($r);
}
#Cambiando el content-type más las <table> se pueden exportar formatos como csv
header("Content-type: application/vnd-ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=" . $file . "_" . date('d-m-Y') . ".xls");
echo $return;
//////////////////////////////////////////////
/*
}
else
{
header('Location: index.php?err=0');
}
 * 
 */
?>