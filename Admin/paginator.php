<?php
////////////////////////////////////////////////
if (!isset($_SESSION)) {
	session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup)
{
	// For security, start by assuming the visitor is NOT authorized.
	$isValid = False;

	// When a visitor has logged into this site, the Session variable MM_Username set equal to their username.
	// Therefore, we know that a user is NOT logged in if that Session variable is blank.
	if (!empty($UserName)) {
		// Besides being logged in, you may restrict access to only certain users based on an ID established when they login.
		// Parse the strings into arrays.
		$arrUsers = Explode(",", $strUsers);
		$arrGroups = Explode(",", $strGroups);
		if (in_array($UserName, $arrUsers)) {
			$isValid = true;
		}
		// Or, you may restrict access to only certain users based on their username.
		if (in_array($UserGroup, $arrGroups)) {
			$isValid = true;
		}
		if (($strUsers == "") && true) {
			$isValid = true;
		}
	}
	return $isValid;
}

$MM_restrictGoTo = "../index.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("", $MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {
	$MM_qsChar = "?";
	$MM_referrer = $_SERVER['PHP_SELF'];
	if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
	if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0)
		$MM_referrer .= "?" . $QUERY_STRING;
	$MM_restrictGoTo = $MM_restrictGoTo . $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
	header("Location: " . $MM_restrictGoTo);
	exit;
}
///////////////////////////////////////////////
//initialize the session
if (!isset($_SESSION)) {
	session_start();
}
require_once('../Connections/greenlight.php');
//Sentencia sql (sin limit)
mysql_select_db($database_greenlight, $greenlight);
$_pagi_sql = "SELECT * FROM contacts ORDER BY DataAdded Desc";
$_pagi_result = mysql_query($_pagi_sql, $greenlight) or die(mysql_error());
//cantidad de resultados por página (opcional, por defecto 20)
$_pagi_cuantos = 15;

//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente
include("paginator.inc.php");
///*
?>
<html>
<head>
	<link href="adminStyles.css" rel="stylesheet" type="text/css">

	<style type="text/css">
		<!--
		.Estilo1 {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 12px;
			font-weight: bold;
		}

		.Estilo2 {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 11px;
			color: #333333;
			text-decoration: none;
			text-align: center;
		}

		-->
	</style>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.gif">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href="../style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="90%" border="0" cellspacing="1" cellpadding="1">
	<tr>
		<td bgcolor="#E7F3C4" class="downLine"><img src="mail/images/fle_ver_ver.gif" width="40" height="53"></td>
		<td colspan="4" bgcolor="#E7F3C4" class="downLine">
			<div align="center" class="alphabetical">GREENLIGHT MEMBERS LIST</div>
		</td>
		<td align="right" bgcolor="#E7F3C4" class="downLine"><a href="contactsSQL.php" class="LinkingWords">&lt;&lt;Back&gt;&gt;</a>
		</td>
	</tr>
	<tr bgcolor="#CEE785">
		<td align="center" class="dottedLeftTop Estilo1">Name</td>
		<td align="center" class="dottedLeftTop Estilo1">Last Name</td>
		<td align="center" class="dottedLeftTop Estilo1">Email</td>
		<td align="center" class="dottedLeftTop Estilo1">Mobile Phone</td>
		<td align="center" class="dottedLeftTop Estilo1">Gender</td>
		<td align="center" class="dottedBottom Estilo1">Member Since</td>
	</tr>
	<?php
	//Leemos y escribimos los registros de la página actual
	do {
		?>
		<tr>
			<td class="dottedLeftTop Estilo1"><?php echo "&nbsp;" . $row['name']; ?></td>
			<td class="dottedLeftTop Estilo1"><?php echo "&nbsp;" . $row['last_name']; ?></td>
			<td class="dottedLeftTop Estilo1"><?php echo "&nbsp;" . $row['email']; ?></td>
			<td class="dottedLeftTop Estilo1"><?php echo "&nbsp;" . $row['mobile_phone']; ?></td>
			<td align="center" class="dottedLeftTop Estilo1"><?php echo "&nbsp;" . $row['gender']; ?></td>
			<td align="center" class="dottedBottom Estilo1"><?php echo "&nbsp;" . $row['DataAdded']; ?></td>
		</tr>
	<?php } while ($row = mysql_fetch_array($_pagi_result)) ?>
</table>
<table width="90%" border="0" cellspacing="1" cellpadding="1">
	<tr>
		<td class="dottedBox">
			<?php
			//Incluimos la barra de navegación
			echo "<p>" . $_pagi_navegacion . "</p>";
			//*/
			?>    </td>
	</tr>
</table>
</body>
</html>