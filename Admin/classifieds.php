<?php
session_start();
/*if(!session_is_registered('login')){
header("location:../index.php");
}*/
/////////////////////// UPLOAD Newsletter Images END
$go = $_POST['submit'];
if (isset($go)) {
//////////////////////////////////////////////////////
	include('../inc/insertClassified.php');
/////////////////////////////////////////////////////
//echo "NewsletterID After Insert: ".$afterID."<br \>";
	if ($beforeID != $afterID) {
		echo "<script>  
			window.location = 'previewClassified.php?ID=$afterID';  
			</script>";
	}
	if ($beforeID == $afterID) {
		echo "Record not Inserted!!! Please Check the values entered.<br \><br \>";
		echo "<a href=" . $_SERVER['PHP_SELF'] . "?task=1b>Try Again => Go back to create a Newsletter</a><br \><br \>";
	}
}
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Module Classifieds :: Online Marketing VETA</title>
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<!-- Add images and text Start -->
		<script src='multiFileUp/jquery.js' type="text/javascript"></script>
		<script src='multiFileUp/documentation.js' type="text/javascript"></script>
		<!-- -->
		<!--// code-highlighting //-->
		<script type="text/javaScript" src="/jquery/project/chili/jquery.chili-2.0.js"></script>
		<!--///jquery/project/chili-toolbar/jquery.chili-toolbar.pack.js//-->
		<script type="text/javascript">try {
				ChiliBook.recipeFolder = "/jquery/project/chili/"
			} catch (e) {
			}</script>
		<!--// plugin-specific resources //-->
		<script src='multiFileUp/jquery.form.js' type="text/javascript" language="javascript"></script>
		<script src='multiFileUp/jquery.MetaData.js' type="text/javascript" language="javascript"></script>
		<script src='multiFileUp/jquery.MultiFile.js' type="text/javascript" language="javascript"></script>
		<script src='multiFileUp/jquery.blockUI.js' type="text/javascript" language="javascript"></script>
		<!-- -->
		<!-- TinyMCE Start -->
		<!-- Load jQuery -->
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script type="text/javascript">
			google.load("jquery", "1.3");
		</script>
		<!-- Load jQuery build -->
		<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
		<script type="text/javascript">
			tinyMCE.init({
				mode: "textareas",
				theme: "simple"
			});
		</script>
		<!-- / TinyMCE End -->
		<!-- -->
		<script type="text/javascript">
			<!--
			function MM_preloadImages() { //v3.0
				var d = document;
				if (d.images) {
					if (!d.MM_p) d.MM_p = new Array();
					var i, j = d.MM_p.length, a = MM_preloadImages.arguments;
					for (i = 0; i < a.length; i++)
						if (a[i].indexOf("#") != 0) {
							d.MM_p[j] = new Image;
							d.MM_p[j++].src = a[i];
						}
				}
			}
			function MM_swapImgRestore() { //v3.0
				var i, x, a = document.MM_sr;
				for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++) x.src = x.oSrc;
			}
			function MM_findObj(n, d) { //v4.01
				var p, i, x;
				if (!d) d = document;
				if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
					d = parent.frames[n.substring(p + 1)].document;
					n = n.substring(0, p);
				}
				if (!(x = d[n]) && d.all) x = d.all[n];
				for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
				for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
				if (!x && d.getElementById) x = d.getElementById(n);
				return x;
			}

			function MM_swapImage() { //v3.0
				var i, j = 0, x, a = MM_swapImage.arguments;
				document.MM_sr = new Array;
				for (i = 0; i < (a.length - 2); i += 3)
					if ((x = MM_findObj(a[i])) != null) {
						document.MM_sr[j++] = x;
						if (!x.oSrc) x.oSrc = x.src;
						x.src = a[i + 2];
					}
			}
			//-->
		</script>
	</head>

<body onload="MM_preloadImages('newsletter/images/estructuraclasi1.png')">
<?php
if (!isset($go)) {
	?>
	<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
		<table width="1000" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF" class="bordes">
			<tr>
				<td colspan="3" valign="top">
					<table width="100%" border="0">

						<tr>
							<td width="0"><img src="newsletter/images/logomodulo.gif" width="194" height="106"
							                   align="absmiddle"/></td>
							<td width="0"><h1 align="center">MODULe Classifieds VETA</h1></td>
							<td width="0" align="right" valign="middle"><a href="#"><img
										src="newsletter/images/boton1.png" width="155" height="50" border="0"/></a><a
									href="#"><img src="newsletter/images/logout.png" width="134" height="50"
							                      border="0"/></a></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td width="0" valign="top">
					<fieldset>
						<legend class="style2">Area 1</legend>
						<p>Title <strong>Inf. Trabajos / Jobs</strong></p>

						<p>Tex 1
							<textarea name="textarea" cols="45" rows="5" wrap="virtual" id="textarea"></textarea>
						</p>
					</fieldset>
				</td>
				<td width="0" valign="top">
					<fieldset>
						<legend class="style3">Area 2</legend>
						<p>Title <strong>Inf. Mensual / Monthly</strong></p>

						<p>Imagen 2
							<input type="file" name="fileField4" id="fileField4"/>
						</p>

						<p>&nbsp;</p>

						<p>&nbsp; </p>
					</fieldset>
				</td>
				<td width="0" rowspan="4" valign="top">
					<fieldset>
						<legend>Framework</legend>
						<h6><a href="#" onmouseout="MM_swapImgRestore()"
						       onmouseover="MM_swapImage('Image1','','newsletter/images/estructuraclasi1.png',1)"><img
									src="newsletter/images/estructuraclasi.png" name="Image1" width="482" height="736"
									border="0" id="Image2"/></a></h6>
					</fieldset>
				</td>
			</tr>
			<tr>
				<td valign="top">
					<fieldset>
						<legend class="style4">Area 3</legend>
						<p>Title <strong>Inf. Acomodacion / Accommodation</strong></p>

						<p>Tex 3
							<textarea name="textarea3" cols="45" rows="5" wrap="virtual" id="textarea3"></textarea>
						</p>
					</fieldset>
				</td>
				<td valign="top">
					<fieldset>
						<legend class="style5">Area 4</legend>
						<p>Title <strong>De Interes... / Interesting...</strong></p>

						<p>Imagen 4
							<input type="file" name="fileField6" id="fileField6"/>
						</p>

						<p>Tex 4
							<textarea name="textarea4" cols="45" rows="5" wrap="virtual" id="textarea4"></textarea>
						</p>
					</fieldset>
				</td>
			</tr>

			<tr>
				<td valign="top">
					<fieldset>
						<legend class="style16">Area 5</legend>
						<p>Title 5
							<input type="text" name="textfield2" id="textfield2"/>
						</p>

						<p>Imagen 5
							<input type="file" name="fileField" id="fileField"/>
						</p>

						<p>Tex 5
							<textarea name="textarea2" cols="45" rows="5" wrap="virtual" id="textarea2"></textarea>
						</p>
					</fieldset>
				</td>
				<td valign="top">
					<fieldset>
						<legend><span class="style15">Area 6</span></legend>
						<p>Title 6
							<input type="text" name="textfield7" id="textfield7"/>
						</p>

						<p>Imagen 6
							<input type="file" name="fileField7" id="fileField7"/>
						</p>

						<p>Tex 6
							<textarea name="textarea6" cols="45" rows="5" wrap="virtual" id="textarea6"></textarea>
						</p>
					</fieldset>
				</td>
			</tr>
			<tr>
				<td valign="top">&nbsp;</td>
				<td valign="top">&nbsp;</td>
			</tr>
			<tr>
				<td height="50" colspan="3" align="center" valign="middle"><img src="newsletter/images/preview.jpg"
				                                                                width="204" height="64"/></td>
			</tr>
		</table>
	</form>
	</body>
	</html>
<?php } ?>