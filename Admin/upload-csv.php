<?php
session_start();
if (isset($_SESSION['login'])) {
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Admin Section :: Australia VETA</title>
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<!-- Javascript Stuff Start -->
		<script src='newsletter/multiFileUp/jquery.js' type="text/javascript"></script>
		<!-- <script src='newsletter/multiFileUp/jquery.form.js' type="text/javascript" ></script> -->
		<!-- <script src='newsletter/multiFileUp/jquery.MetaData.js' type="text/javascript" ></script> -->
		<script src='newsletter/multiFileUp/jquery.MultiFile.js' type="text/javascript"></script>
	</head>

	<body>
	<br/>
	<br/>
	<table width="900" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
		<tr>
			<td>
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td width="211" rowspan="2"><img src="newsletter/images/logomodulo.gif" width="194" height="106"
						                                 align="absmiddle"/></td>
						<td align="right" valign="middle"><a href="otherTasks.php"><img src="newsletter/images/back.png"
						                                                                border="0"/></a><a
								href="logout.php"><img src="newsletter/images/logoutp.png" width="104" height="44"
						                               border="0"/></a></td>
					</tr>
					<tr>
						<td align="center" valign="middle"><h2> UPLOAD CLIENTS</h2></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td valign="middle">
				<fieldset>
					<legend>Bulk Upload - Contact Details</legend>
					<!-- /// /// -->
					<br/>
					<br/> <?php
					$stksBulkFile = $_FILES['personsBulkFile']['name'];
					//echo "Nombre del archivo... ".$stksBulkFile."<br />";
					$stksBulk = $_POST['personsBulkSubmit'];
					//echo "Sent by... ".$stksBulk."<br />";
					if ($stksBulk == "" || $stksBulkFile == ""){
					?>

					<form action="<?php echo $_SERVER['PHP_SELF']; ?> " style="margin-left:.2em;" method="post"
					      enctype="multipart/form-data">
						<label for="file" style="font-size:1.3em;">Filename : </label>
						<input type="file" name="personsBulkFile" id="personsBulkFile"/>
						<input name="filePath" type="hidden" id="filePath" value="bulkUpload/raw/"/>

						<div style="height:2em;"></div>
						<input type="submit"
						       style="border:1px solid #005; background-color:#888; color:#FFF; font-size:1em; font-size:bold; height:2em; cursor:pointer;"
						       name="personsBulkSubmit" value="Upload File" id="personsBulkSubmit"/>

						<div style="height:2em;"></div>
					</form>
					<?php if ($stksBulk != "" && $stksBulkFile == "") {
						echo "<script type=\"text/javascript\">alert(\"Ooopss!! Don\'t forget the file to upload!!\");</script>";
					} ?>
				</fieldset>
				<?php
				}
				if ($stksBulk != '' && $stksBulkFile != '') {
					//echo "ANYTHING!! INSIDE??...".$stksBulkFile."<br />";
					include_once('bulkload.php');
				}
				//else echo "ANYTHING!! INSIDE??...".$stksBulkFile."<br />";
				?>
				<!-- /// /// --></td>
		</tr>
	</table>
	</body>
	</html>
<?php
} else echo "<h1>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!</h1><br />";
?>