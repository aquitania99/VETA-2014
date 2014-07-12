<?
session_start();
if (session_is_registered('login')) {
//echo $_SESSION['login'];
//require_once('search.php');
//
	$insertClient = $_POST['submit'];

	if (!isset($insertClient)) {
		require_once('search_SP.php');
	}
//

	if (isset($insertClient)) {
		require_once('insert_SP.php');
	}
//
	?>
	<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Main Admin Menu :: VETA</title>
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript"
		        src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<link href="../css/ui-lightness/jquery-ui-1.8.10.custom.css" rel="stylesheet" type="text/css"/>
		<script src="../js/livevalidation_standalone.js" type="text/javascript"></script>
		<link href="../css/validateForm.css" rel="stylesheet" type="text/css"/>
		<style type="text/css">
			<!--
			.style17 {
				font-size: 16px;
				color: #24205E;
				font-weight: bold;
			}

			.auto-hint {
				color: #999;
			}

			-->
		</style>
	</head>

	<body>
	<!-- /// /// -->
	<form id="searchClient" name="searchClient" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
	<input type="hidden" id="clientID" name="clientID" value="<?= $rowSearch['personID']; ?>"/>
	<br/>
	<br/>
	<table width="900" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
	<tr>
		<td valign="top">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td width="211" rowspan="2"><img src="images/logomodulo.gif" width="194" height="106"
					                                 align="absmiddle"/></td>
					<td align="right" valign="middle"><a href="options.php"><img src="newsletter/images/back.png"
					                                                             border="0"/></a><a
							href="logout.php"><img src="images/logoutp.png" width="104" height="44" border="0"/></a>
					</td>
				</tr>
				<tr>
					<td align="center" valign="middle"><h2>Payments Module</h2></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td valign="top">
			<table width="100%" border="0" cellpadding="4" cellspacing="1">
				<tr>
					<!--
            <td align="left" valign="middle" bgcolor="#DFEBF4">Start Year</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="startYear" id="startYear" value="<?= $rowSearch['startYear']; ?>" /></td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Start Month</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="startMonth" id="startMonth" value="<?= $rowSearch['startMonth']; ?>" /></td>
             -->
					<td width="21%" align="left" valign="middle" bgcolor="#DFEBF4">Counsellor</td>
					<td width="26%" align="left" valign="middle" bgcolor="#DFEBF4">
						<select name="stCounsellor" id="stCounsellor">
							<?php
							$counsellor = $rowSearch['stCounsellor'];
							switch ($counsellor) {
								///
								case 'Y-Useche':
									echo "<option value=\"\">::Choose Counsellor::</option>
                                <option selected=\"selected\" value=\"Y-Useche\">Yovanny Useche</option>
                                <option value=\"C-Plata\">Carlos Plata</option>
                                <option value=\"L-Ulloa\">Luis Ulloa</option>
                                <option value=\"M-Ortiz\">Maricela Ortiz</option>";
									break;
								case 'C-Plata':
									echo "<option value=\"\">::Choose Counsellor::</option>
                                <option value=\"Y-Useche\">Yovanny Useche</option>
                                <option selected=\"selected\" value=\"C-Plata\">Carlos Plata</option>
                                <option value=\"L-Ulloa\">Luis Ulloa</option>
                                <option value=\"M-Ortiz\">Maricela Ortiz</option>";
									break;
								case 'L-Ulloa':
									echo "<option value=\"\">::Choose Counsellor::</option>
                                <option value=\"Y-Useche\">Yovanny Useche</option>
                                <option value=\"C-Plata\">Carlos Plata</option>
                                <option selected=\"selected\" value=\"L-Ulloa\">Luis Ulloa</option>
                                <option value=\"M-Ortiz\">Maricela Ortiz</option>";
									break;
								case 'M-Ortiz':
									echo "<option value=\"\">::Choose Counsellor::</option>
                                <option value=\"Y-Useche\">Yovanny Useche</option>
                                <option value=\"C-Plata\">Carlos Plata</option>
                                <option value=\"L-Ulloa\">Luis Ulloa</option>
                                <option selected=\"selected\" value=\"M-Ortiz\">Maricela Ortiz</option>";
									break;
								default:
									echo "<option selected=\"selected\" value=\"\">::Choose Counsellor::</option>
                                <option value=\"Y-Useche\">Yovanny Useche</option>
                                <option value=\"C-Plata\">Carlos Plata</option>
                                <option value=\"L-Ulloa\">Luis Ulloa</option>
                                <option value=\"M-Ortiz\">Maricela Ortiz</option>";
							}
							?>
						</select>
					</td>
					<td width="4%" align="left" valign="middle" bgcolor="#DFEBF4">&nbsp;</td>
					<td width="30%" align="left" valign="middle" bgcolor="#DFEBF4">&nbsp;</td>
					<td width="19%" align="left" valign="middle" bgcolor="#DFEBF4">&nbsp;</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td valign="top">
			<fieldset>
				<legend>Personal Details</legend>
				<table width="100%" border="0" cellspacing="1" cellpadding="4">
					<tr>
						<td align="left" valign="middle" bgcolor="#F2F2F2">First Name</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">
							<input type="text" name="firstName" id="firstName" class="auto-hint" title="Enter Name"/>
						</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">LastName</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">
							<input type="text" name="lastName" id="lastName" class="auto-hint" title="Enter Last Name"/>
						</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">Mobile</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">
							<input type="text" name="mobilePhone" id="mobilePhone" class="auto-hint"
							       title="Enter Mobile Phone"/></td>
					</tr>
					<tr>
						<td align="left" valign="middle" bgcolor="#DFEBF4">Email Address</td>
						<td align="left" valign="middle" bgcolor="#DFEBF4">
							<input type="text" name="emailAddress" id="emailAddress" class="auto-hint"
							       title="Enter Email Address"/></td>
						<td align="left" valign="middle" bgcolor="#DFEBF4">Passport No.</td>
						<td align="left" valign="middle" bgcolor="#DFEBF4">
							<input type="text" name="passportNo" id="passportNo" class="auto-hint"
							       title="Enter Passport Number"/>
						</td>
						<td align="left" valign="middle" bgcolor="#DFEBF4">Visa Expiry Date</td>
						<td align="left" valign="middle" bgcolor="#DFEBF4">
							<input type="text" name="visaExpDate" id="visaExpDate" class="datePicker auto-hint"
							       title="yyyy/mm/dd"/>
						</td>
					</tr>
					<tr>
						<td align="left" valign="middle" bgcolor="#F2F2F2">Enrolment Date</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">
							<input type="text" name="enrolmentDate" id="enrolmentDate" class="datePicker auto-hint"
							       title="yyyy/mm/dd"/>
						</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">Course Lenght (Weeks)</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">
							<input type="text" name="courseLenght" id="courseLenght" class="auto-hint"
							       title="Course Lenght"/></td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">Total Course Cost ($)</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">
							<input type="text" name="totalCourseCost" id="totalCourseCost" class="auto-hint"
							       title="Total Course Cost ($)"/></td>
					</tr>
					<tr>
						<td align="left" valign="middle" bgcolor="#DFEBF4">Education Centre</td>
						<td align="left" valign="middle" bgcolor="#DFEBF4">
							<select name="eduCentre" id="eduCentre">
								<option value="">::Education Centre::</option>
								<?php
								do {
									$school = strtolower($resSchoolCheck[1]);
									echo "<option value='" . $resSchoolCheck[0] . "'>" . ucwords($school) . "</option>";
								} while ($resSchoolCheck = $db->fetch_array($schoolsCheck));
								?>
								<!--
								<option value="1">APC</option>
								<option value="2">Greenwich</option>
								<option value="3">IIBIT</option>
								<option value="4">Universtity of Ballarat</option>
								<option value="5">TAFE - Somewhere</option>
								-->
							</select>
						</td>
						<td align="left" valign="middle" bgcolor="#DFEBF4">Course Name</td>
						<td align="left" valign="middle" bgcolor="#DFEBF4">
							<input type="text" name="courseName" id="courseName" class="auto-hint"
							       title="Enter Course Name"/>
						</td>
						<td align="left" valign="middle" bgcolor="#DFEBF4">Language</td>
						<td align="left" valign="middle" bgcolor="#DFEBF4">
							<select name="language" id="language">
								<option value="">::Select Language::</option>
								<option value="1">Spanish</option>
								<option value="2">Portuguese</option>
								<option value="3">English</option>
								<option value="0">Other</option>
							</select>
						</td>
					</tr>
					<tr>
						<td align="left" valign="middle" bgcolor="#F2F2F2">Number of Instalments</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="feesNumber"
						                                                          id="feesNumber" class="auto-hint"
						                                                          title="Number of Instalments"/></td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">&nbsp;</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">&nbsp;</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">&nbsp;</td>
						<td align="left" valign="middle" bgcolor="#F2F2F2">&nbsp;</td>
					</tr>
				</table>
			</fieldset>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top">
			<fieldset>
				<legend>Payment History</legend>
				<table width="100%" border="0" cellspacing="1" cellpadding="4">
					<script type="text/javascript">
						$(document).ready(function () {
							$(".fees").hide();
							///
						});

						$("#feesNumber").blur(function () {
							var instalments;
							instalments = ($(this).val());
							$(".fees").slice(0, (instalments)).show();
						});
						$("#feesNumber").blur(function () {
							var instalments;
							var test;
							test = ($(this).val());
							$(".fees").slice(0, (instalments)).hide();
							$(".fees").slice(0, (test)).show();
						});

					</script>
					<tr class="fees">
						<td bgcolor="#F2F2F2">1st Payment</td>
						<td bgcolor="#F2F2F2">
							<input type="text" name="firstPayment" id="firstPayment"/>
						<td bgcolor="#F2F2F2">1st Payment Date</td>
						<td bgcolor="#F2F2F2"><input type="text" name="1stPaymentDate" id="1stPaymentDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
						<td bgcolor="#F2F2F2">Paid on</td>
						<td bgcolor="#F2F2F2"><input type="text" name="1stPaidDate" id="1stPaidDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
					</tr>
					<tr class="fees">
						<td bgcolor="#F2F2F2">2nd Payment</td>
						<td bgcolor="#F2F2F2">
							<input type="text" name="secondPayment" id="secondPayment"/>
						<td bgcolor="#F2F2F2">2nd Payment Date</td>
						<td bgcolor="#F2F2F2"><input type="text" name="2ndPaymentDate" id="2ndPaymentDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
						<td bgcolor="#F2F2F2">Paid on</td>
						<td bgcolor="#F2F2F2"><input type="text" name="2ndPaidDate" id="2ndPaidDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
					</tr>
					<tr class="fees">
						<td bgcolor="#F2F2F2">3rd Payment</td>
						<td bgcolor="#F2F2F2">
							<input type="text" name="thirdPayment" id="thirdPayment"/>
						<td bgcolor="#F2F2F2">3rd Payment Date</td>
						<td bgcolor="#F2F2F2"><input type="text" name="3rdPaymentDate" id="3rdPaymentDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
						<td bgcolor="#F2F2F2">Paid on</td>
						<td bgcolor="#F2F2F2"><input type="text" name="3rdPaidDate" id="3rdPaidDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
					</tr>
					<tr class="fees">
						<td bgcolor="#F2F2F2">4th Payment</td>
						<td bgcolor="#F2F2F2">
							<input type="text" name="fourthPayment" id="fourthPayment"/>
						<td bgcolor="#F2F2F2">4th Payment Date</td>
						<td bgcolor="#F2F2F2"><input type="text" name="4thPaymentDate" id="4thPaymentDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
						<td bgcolor="#F2F2F2">Paid on</td>
						<td bgcolor="#F2F2F2"><input type="text" name="4thPaidDate" id="4thPaidDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
					</tr>
					<tr class="fees">
						<td bgcolor="#F2F2F2">5th Payment</td>
						<td bgcolor="#F2F2F2">
							<input type="text" name="fifthPayment" id="fifthPayment"/>
						<td bgcolor="#F2F2F2">5th Payment Date</td>
						<td bgcolor="#F2F2F2"><input type="text" name="5thPaymentDate" id="5thPaymentDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
						<td bgcolor="#F2F2F2">Paid on</td>
						<td bgcolor="#F2F2F2"><input type="text" name="5thPaidDate" id="5thPaidDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
					</tr>
					<tr class="fees">
						<td bgcolor="#F2F2F2">6th Payment</td>
						<td bgcolor="#F2F2F2">
							<input type="text" name="sixthPayment" id="sixthPayment"/>
						<td bgcolor="#F2F2F2">6th Payment Date</td>
						<td bgcolor="#F2F2F2"><input type="text" name="6thPaymentDate" id="6thPaymentDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
						<td bgcolor="#F2F2F2">Paid on</td>
						<td bgcolor="#F2F2F2"><input type="text" name="6thPaidDate" id="6thPaidDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
					</tr>
					<tr class="fees">
						<td bgcolor="#F2F2F2">7th Payment</td>
						<td bgcolor="#F2F2F2">
							<input type="text" name="seventhPayment" id="seventhPayment"/>
						<td bgcolor="#F2F2F2">7th Payment Date</td>
						<td bgcolor="#F2F2F2"><input type="text" name="7thPaymentDate" id="7thPaymentDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
						<td bgcolor="#F2F2F2">Paid on</td>
						<td bgcolor="#F2F2F2"><input type="text" name="7thPaidDate" id="7thPaidDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
					</tr>
					<tr class="fees">
						<td bgcolor="#F2F2F2">8th Payment</td>
						<td bgcolor="#F2F2F2">
							<input type="text" name="eighthPayment" id="eighthPayment"/>
						<td bgcolor="#F2F2F2">8th Payment Date</td>
						<td bgcolor="#F2F2F2"><input type="text" name="eighthPaymentDate" id="8thPaymentDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
						<td bgcolor="#F2F2F2">Paid on</td>
						<td bgcolor="#F2F2F2"><input type="text" name="8thPaidDate" id="8thPaidDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
					</tr>
					<tr class="fees">
						<td bgcolor="#F2F2F2">9th Payment</td>
						<td bgcolor="#F2F2F2">
							<input type="text" name="ninethPayment" id="ninethPayment"/>
						<td bgcolor="#F2F2F2">9th Payment Date</td>
						<td bgcolor="#F2F2F2"><input type="text" name="9thPaymentDate" id="9thPaymentDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
						<td bgcolor="#F2F2F2">Paid on</td>
						<td bgcolor="#F2F2F2"><input type="text" name="9thPaidDate" id="9thPaidDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
					</tr>
					<tr class="fees">
						<td bgcolor="#F2F2F2">10th Payment</td>
						<td bgcolor="#F2F2F2">
							<input type="text" name="tenthPayment" id="tenthPayment"/>
						<td bgcolor="#F2F2F2">10th Payment Date</td>
						<td bgcolor="#F2F2F2"><input type="text" name="10thPaymentDate" id="10thPaymentDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
						<td bgcolor="#F2F2F2">Paid on</td>
						<td bgcolor="#F2F2F2"><input type="text" name="10thPaidDate" id="10thPaidDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
					</tr>
					<tr class="fees">
						<td bgcolor="#F2F2F2">11th Payment</td>
						<td bgcolor="#F2F2F2">
							<input type="text" name="eleventhPayment" id="eleventhPayment"/>
						<td bgcolor="#F2F2F2">11th Payment Date</td>
						<td bgcolor="#F2F2F2"><input type="text" name="11thPaymentDate" id="11thPaymentDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
						<td bgcolor="#F2F2F2">Paid on</td>
						<td bgcolor="#F2F2F2"><input type="text" name="11thPaidDate" id="11thPaidDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
					</tr>
					<tr class="fees">
						<td bgcolor="#F2F2F2">12th Payment</td>
						<td bgcolor="#F2F2F2">
							<input type="text" name="twelfthPayment" id="twelfthPayment"/>
						<td bgcolor="#F2F2F2">12th Payment Date</td>
						<td bgcolor="#F2F2F2"><input type="text" name="12thPaymentDate" id="12thPaymentDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
						<td bgcolor="#F2F2F2">Paid on</td>
						<td bgcolor="#F2F2F2"><input type="text" name="12thPaidDate" id="12thPaidDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
					</tr>
				</table>
			</fieldset>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top">
			<fieldset>
				<legend>Financial Details</legend>
				<table width="100%" border="0" cellspacing="1" cellpadding="4">
					<tr>
						<td bgcolor="#DFEBF4">Balance Owing</td>
						<td bgcolor="#DFEBF4"><input type="text" name="balance" id="balance"/></td>
						<td bgcolor="#DFEBF4">Number of Fees Paid</td>
						<td bgcolor="#DFEBF4"><input type="text" name="numberFeesPaid" id="numberFeesPaid"
						                             class="auto-hint" title="Number of Fees Paid"/></td>
						<td bgcolor="#DFEBF4">Total Paid to Date</td>
						<td bgcolor="#DFEBF4"><input type="text" name="totalPaidToDate" id="totalPaidToDate"/></td>
					</tr>
					<tr>
						<td bgcolor="#F2F2F2">Next Payment Due Date</td>
						<td bgcolor="#F2F2F2"><input type="text" name="nextPaymentDueDate" id="nextPaymentDueDate"
						                             class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
						<td bgcolor="#F2F2F2">&nbsp;</td>
						<td bgcolor="#F2F2F2">&nbsp;</td>
						<td bgcolor="#F2F2F2">&nbsp;</td>
						<td colspan="3" bgcolor="#F2F2F2">&nbsp;</td>
					</tr>
				</table>
			</fieldset>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top">
			<fieldset>
				<legend>Notes</legend>
				<table width="100%" border="0" cellspacing="1" cellpadding="4">
					<tr>
						<td bgcolor="#F2F2F2">General Comments</td>
						<td colspan="3" bgcolor="#F2F2F2">
							<textarea name="genComments" id="genComments" cols="90" rows="2"></textarea>
						</td>
					</tr>
					<tr>
						<td bgcolor="#DFEBF4">Added By</td>
						<td bgcolor="#DFEBF4"><?= $_SESSION['login']; ?><input type="hidden"
						                                                       name="<?php echo $_SESSION['login']; ?>"
						                                                       id="vetaAdminUser"/></td>
						<td bgcolor="#DFEBF4">Created on</td>
						<td bgcolor="#DFEBF4"><?= date('l jS \of F Y h:i:s A'); ?><input type="hidden"
						                                                                 name="<?php echo date('l jS \of F Y h:i:s A'); ?>"
						                                                                 id="insertDate"/></td>
					</tr>
				</table>
			</fieldset>
		</td>
	</tr>
	<tr class="hidden">
		<td height="40" align="left" valign="top">
			<div align="center">
				<input type="button" name="goBack" id="goBack" value="< Back to Search"
				       onclick="javascript:history.back(-1);"/>
				<input type="submit" name="submit" id="submit" value="Insert New Client >"/>
			</div>
		</td>
	</tr>
	</table>
	</form>
	<script src="../js/vetaAdmin-InsertUser.js" type="text/javascript"></script>
	<br/>
	<br/>
	</body>
	</html>
<?php
} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
?>