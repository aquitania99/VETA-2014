<?php
$year = date('Y');
$month = date('m');
$day = date('d');
$currentDate = date("Y/m/d");
///
$date = ($year+$month+$day);
$from = $_POST['dateFrom'];
$to = $_POST['dateTo'];
$search = $_POST['search'];
///
$send = $_POST['sendEmail'];
///
$emailSend = $_POST['sendOK'];
///
$visaExpNote = $rowVisaExpNote['visaExpNote'];
////
include('../inc/queryVisaExp.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Module Visa Expiring :: Online Marketing VETA</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<!--
<link media="print, projection, screen" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7/themes/south-street/jquery-ui.css" rel="stylesheet">
<script src="../inc/mask-js.js" type="text/javascript"></script>
-->
<!-- jQuery Calendar - Stuff -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<link href="../ui-lightness/jquery-ui-1.8.10.custom.css" rel="stylesheet" type="text/css" />
<!-- -->
<!-- TinyMCE Start -->
<!-- Load jQuery
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
        google.load("jquery", "1.3");
</script>
<!-- Load jQuery build -->
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "simple"
	});
</script>
<!-- / TinyMCE End -->

</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <br />
  <br />
  <table width="1000" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
    <tr>
      <td colspan="2"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="209"><img src="images/logomodulo.gif" width="194" height="106" align="absmiddle" /></td>
          <td width="538"><h2 align="center"><span id="result_box" lang="en" xml:lang="en"><span title="Click for alternate translations">module Visa Expiring</span></span></h2></td>
          <td width="132" align="center" valign="middle"><a href="../options.php"><img src="images/back.png" width="126" height="44" border="0" /></a></td>
          <td width="110" align="center" valign="middle"><a href="../logout.php"><img src="images/logoutp.png" width="104" height="44" border="0" /></a></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top"><fieldset>
        <legend>Visa Expiry  Date</legend>
        <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="50">From 
              <input type="text" id="dateFrom" name="dateFrom" maxlength="10" value="<?php echo $currentDate;?>" />
			  To 
            <!-- <input type="text" id="dateTo" class="datePicker"  name="dateTo" maxlength="10" onkeyup="mascara(this,'/',patron,true)" /> -->
            <input type="text" id="dateTo" class="datePicker"  name="dateTo" />
            <script>
			$(function() {
				$(".datePicker").datepicker({
					dateFormat: "yy-mm-dd",
					minDate: "-12D",
					maxDate: "+60Y",
					changeMonth: true,
					changeYear: true
				});
			});
			</script>
			<input type="submit" name="search" id="search" value="Search" style="cursor:pointer;" /></td>
          </tr>
		  <!-- -->
		  <?php
			if (isset($search))
				{
					echo '<tr style="height:60px;">
							<td><strong>Filter By &nbsp;&nbsp;</strong>
								<select name="idiomID" id="idiomID">
									<option value="" ><strong>::Language - ALL::</strong></option>
									<option value="3" ><strong>+ Only English</strong></option>
									<option value="1" ><strong>+ Only Spanish</strong></option>
									<option value="2" ><strong>+ Only Portuguese</strong></option>
								</select>
							</td>
						</tr>';
				}
		  ?>
		  <!-- -->
          <tr>
            <td height="100" valign="top"><table width="100%" border="0" cellpadding="2" cellspacing="2" bgcolor="#F0F0F0">
              <tr>
                <td height="25" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Name</strong></td>
                <td height="25" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Visa Expiry  Date </strong></td>
                <td height="25" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Email Address </strong></td>
                <td height="25" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Phone Number</strong></td>
				<!-- -->
				<td height="25" align="center" valign="middle" bgcolor="#CCCCCC">
				<strong>Language</strong>	
				</td>
				<!-- -->
                <td height="25" align="center" valign="middle" bgcolor="#CCCCCC">
                    <span id="result_box2" lang="en" xml:lang="en">
                        <span title="Click for alternate translations">
                            <strong>Select <a href="javascript:selectToggle(true, 'form1');">All</a> | <a href="javascript:selectToggle(false, 'form1');">None</a></strong>
                        </span>
                    </span>
                    <script type="text/javascript">	
					function selectToggle(toggle, form) {
					 var myForm = document.forms[form];
					 for( var i=0; i < myForm.length; i++ ) { 
						  if(toggle) {
							   myForm.elements[i].checked = "checked";
						  } 
						  else {
							   myForm.elements[i].checked = "";
						  }
					 }
				}
                    </script>
                </td>
            </tr>
              <?php
              if (isset($search))
				{
				do { ?>  
              <tr class="tr userCell-<?=$rowVisaExp['languageID'];?>">
                <td height="20" bgcolor="#FFFFFF">
				<?php echo $rowVisaExp['firstName']." ".$rowVisaExp['lastName']."";?>                
                </td>
                <td height="20" bgcolor="#FFFFFF">
				<?php echo $rowVisaExp['visaExpDate'];?>                
                </td>
                <td height="20" bgcolor="#FFFFFF">
				<?php echo $rowVisaExp['emailAddress'];?>                
                </td>
                <td height="20" bgcolor="#FFFFFF">
				<?php echo $rowVisaExp['mobilePhone'];?>                
                </td>
				<!-- -->
				<td height="25" align="center" valign="middle" bgcolor="#FFFFFF">
				<?php 
				$lngID = $rowVisaExp['languageID'];
				switch ($lngID) {
					case 0:
						$lngEq = "English";
						$lngVal = 0;
						break;
					case 1:
						$lngEq = "Spanish";
						$lngVal = 1;
						break;
					case 2:
						$lngEq = "Portuguese";
						$lngVal = 2;
						break;
					case 3:
						$lngEq = "English";
						$lngVal = 3;
						break;
				}		
				?>
					<input type="hidden" name="languageID" value="<?php echo $lngVal;?>" />
				<b><?=$lngEq;?></b>
				</td>
				<!-- -->
                <td height="20" align="center" valign="middle" bgcolor="#FFFFFF">
                <input type="checkbox" class="check" name="sendOK[]" id="sendOK[]" value="<?php echo $rowVisaExp['emailAddress']."+".$rowVisaExp['firstName']." ".$rowVisaExp['lastName']."+".$rowVisaExp['visaExpDate']."+".$rowVisaExp['personID'] ;?>" />                 </td>
                </tr>
                <?php }while ($rowVisaExp = $db->fetch_array($queryVisaExp)); }?>
            <script type="text/javascript">
			$(document).ready(function() {
			$('#visaLangID').val("3");
			});
			//
			$("#idiomID").change(function() {
				//alert ('Changed! '+$("#idiomID").val());
				var text = $("#idiomID").val();
				$('#visaLangID').val(text);
				//
				//alert ('newVAL'+text);
				//
				if ($("#idiomID").val() == 1) {
				//alert ('Changed to Spanish! \n\r'+$("#idiomID").val());
				$('.tr').hide();
				$('.userCell-'+$("#idiomID").val()).show();
				}
				if ($("#idiomID").val() == 2) {
				//alert ('Changed to Portuguese! \n\r'+$("#idiomID").val());
				$('.tr').hide();
				$('.userCell-'+$("#idiomID").val()).show();
				}
				if ($("#idiomID").val() == 3) {
				//alert ('Changed to English! \n\r'+$("#idiomID").val());
				$('.tr').hide();
				$('.userCell-'+$("#idiomID").val()).show();
				$('.userCell-0').show();
				//
				$('#visaLangID').val("3");
				}
				if ($("#idiomID").val() == "") {
				//alert ('Changed to ALL! \n\r'+$("#idiomID").val());
				$('.tr').show();
				}
			  });
			</script>    
            </table></td>
          </tr>
        </table>
      </fieldset></td>
      <td width="260" align="left" valign="top"><fieldset>
      <legend>Note</legend>
      <p>
        <textarea name="visaExpNote" id="visaExpNote" cols="40" rows="6"><?php echo $visaExpNote;?></textarea>
		<input type="hidden" name="visaLangID" id="visaLangID" value=""/>
      </p>
      </fieldset>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle">
      <input type="hidden" name="sendEmail" id="sendEmail" value="sendEmail" />
      <input type="image" src="images/send.jpg" width="195" height="65" name="send" id="send" /></td>
    </tr>
  </table>
</form>
</body>
</html>
