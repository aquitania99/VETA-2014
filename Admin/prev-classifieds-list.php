<?
session_start();
if (session_is_registered('login')) {
//////////////////////////////////////////////////////
	include("../Connections/config.inc.php");
	include("../Connections/mysql.class.php");
/////////////////////////////////////////////////////
/// Create New DB Object
	$db = new MySQL();
/// Open Connection
	$db->open();
//////////////////////////////////
//DATE_FORMAT(DATE '%d/%m/%Y') as formatted_date
	$queryPrevious = $db->dbQuery("SELECT classifiedID as 'ID', creationDate as 'Date'  FROM classifieds ORDER BY Date DESC LIMIT 0, 10");
	$rowsPrevious = $db->fetch_array($queryPrevious);
/// Classifieds Details
	//$email_ID = $rowsPrevious['ID'];
//////////////////////////////////////////	
	//$sent_Date = $rowsPrevious['Date'];
///        
	//$testDate = date("l jS \of F Y h:i:s A",strtotime($sent_Date));
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Previous Classifieds :: Australia VETA</title>
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<style type="text/css">
			.item {
				color: #CC0000;
				font-size: 14px;
				font-weight: bold;
				text-decoration: none;
				/*text-transform:uppercase;*/
			}

			.sub-classified {
				font-size: .8em;
				font-weight: normal;
				color: #363636;

			}

			.sub-classified a {
				text-decoration: underline;
				cursor: pointer;
			}

			.sub-classified a:hover {
				color: #0055BB;
				font-weight: bold;
			}
		</style>
	</head>

	<body>
	<br/>
	<br/>
	<table width="610" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
		<tr>
			<td>
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td width="211" rowspan="2"><img src="newsletter/images/logomodulo.gif" width="194" height="106"
						                                 align="absmiddle"/></td>
						<td align="right" valign="top">
							<a href="logout.php"> </a><a href="menu.php"><img src="newsletter/images/back.png"
							                                                  border="0"/></a><a href="logout.php"><img
									src="newsletter/images/logoutp.png" width="104" height="44" border="0" alt=""/>
							</a>
							<br/></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td align="center" valign="middle"><h2><span title="Click for alternate translations">Classifieds</span>
					<br/>
					previously sent by VETA</h2></td>
		</tr>
		<?php
		$i = 1;
		do {
			$num = $i++;
			?>
			<tr>
				<td style="padding-left:18px;">
					<font style="color:mediumvioletred;"><a
							href="newsletter/previewClassified.php?ID=<?php echo $rowsPrevious['ID']; ?>"
							title="Click to preview this sent"><?php echo $num . ")&nbsp;"; ?><?php echo date("l jS \of F Y h:i:s A", strtotime($rowsPrevious['Date'])); ?></a></font>
				</td>
			</tr>

		<? } while ($rowsPrevious = $db->fetch_array($queryPrevious)); ?>
		<tr>
			<td>&nbsp;</td>
		</tr>
	</table>
	</body>
	</html>
<?php
} else echo "<h1>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!</h1><br />";
?>