<?
session_start();
if (session_is_registered('login')) {
//echo $_SESSION['login'];
	$searchUsr = $_POST['search'];
	$searchPassport = $_POST['studentPassport'];
//    
	if (isset($searchUsr)) {
		$do = $searchPassport;
		require_once('search_SP.php');
	}
	$do = $_GET['do'];
	if (isset($do)) {
		require_once('search_SP.php');
	}
//
	$update = $_POST['toUpdate'];
	if (isset($update)) {
		//echo "The button... ".$update."<br /> Inside the IF!";
		require_once('update_SP.php');

	}
	?>
	<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Main Admin Menu :: VETA</title>
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<!-- jQuery Calendar - Stuff -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript"
		        src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<link href="../css/ui-lightness/jquery-ui-1.8.10.custom.css" rel="stylesheet" type="text/css"/>
		<!-- -->
		<style type="text/css">
			<!--
			.style17 {
				font-size: 16px;
				color: #24205E;
				font-weight: bold;
			}

			.auto-hint {
				color: #444;
			}

			-->
		</style>
	</head>

	<body>
	<?php
	if (isset($exist)) {
		?>
		<!-- /// /// -->
		<br/>
		<br/>
		<form id="searchClient" name="searchClient" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
		<input type="hidden" id="clientID" name="clientID" value="<?= $rowSearch['personID']; ?>"/>
		<input type="hidden" id="statusID" name="statusID" value="<?= $rowSearch['statusID']; ?>"/>
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
						<td width="21%" align="left" valign="middle" bgcolor="#DFEBF4">Counsellor</td>
						<td width="26%" align="left" valign="middle" bgcolor="#DFEBF4">
							<select name="stCounsellor" id="stCounsellor">
								<?php
								$counsellor = $rowSearch['Counsellor'];
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
								<input type="text" name="firstName" id="firstName" value="<?= $rowSearch['Name']; ?>"/>
							</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">LastName</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">
								<input type="text" name="lastName" id="lastName"
								       value="<?= $rowSearch['Last_Name']; ?>"/>
							</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">Mobile</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">
								<input type="text" name="mobilePhone" id="mobilePhone"
								       value="<?= $rowSearch['Mobile']; ?>"/></td>
						</tr>
						<tr>
							<td align="left" valign="middle" bgcolor="#DFEBF4">Email Address</td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">
								<input type="text" name="emailAddress" id="emailAddress"
								       value="<?= $rowSearch['Email']; ?>"/></td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">Passport No.</td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">
								<input type="text" name="passportNo" id="passportNo"
								       value="<?= $rowSearch['Passport']; ?>"/>
							</td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">Visa Expiry Date</td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">
								<input type="text" name="visaExpDate" id="visaExpDate" class="datePicker auto-hint"
								       title="yyyy/mm/dd" value="<?= $rowSearch['visaExpDate']; ?>"/>
							</td>
						</tr>
						<tr>
							<td align="left" valign="middle" bgcolor="#F2F2F2">Enrolment Date</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">
								<input type="text" name="enrolmentDate" id="enrolmentDate"
								       value="<?= $rowSearch['Enrolment_Date']; ?>"/>
							</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">Course Lenght (Weeks)</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">
								<input type="text" name="courseLenght" id="courseLenght"
								       value="<?= $rowSearch['Course_Lenght_in_Weeks']; ?>"/></td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">Total Course Cost ($)</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">
								<input type="text" name="totalCourseCost" id="totalCourseCost"
								       value="<?= $rowSearch['Total_Course_Cost']; ?>"/></td>
						</tr>
						<tr>
							<td align="left" valign="middle" bgcolor="#DFEBF4">Education Centre</td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">
								<select name="eduCentre" id="eduCentre">
									<?php
									$eduProvider = $rowSearch['Edu_Provider'];

									do {
										$matchID = $resSchoolCheck[0];
										echo "<br />the first value: " . $eduProvider . " The second value : " . $matchID . " <br />";

										if ($eduProvider == $matchID) {
											echo "<script type='text/javascript'> alert'THEY MATCH!!\\n'</script>";
											echo "<option value='" . $matchID . "' selected='selected'>" . strtoupper($resSchoolCheck[1]) . "</option>";
										}
										$schoolID = $resSchoolCheck[0];
										$school = strtoupper($resSchoolCheck[1]);
										echo "<option value='" . $schoolID . "'>" . $school . "</option>";
									} while ($resSchoolCheck = $db->fetch_array($schoolsCheck));
									?>
								</select>
							</td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">Course Name</td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">
								<input type="text" name="courseName" id="courseName"
								       value="<?= $rowSearch['Course_Name']; ?>"/>
							</td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">Mother Tongue</td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">
								<select name="language" id="language">
									<?php
									$language = $rowSearch['Language'];
									switch ($language) {
										///
										case '1':
											echo "<option value='1' selected='selected'>Spanish</option>
                                    <option value='2'>Portuguese</option>
                                    <option value='3'>English</option>
                                    <option value='4'>Other</option>";
											break;
										case '2':
											echo "<option value='1'>Spanish</option>
                                    <option value='2' selected='selected'>Portuguese</option>
                                    <option value='3'>English</option>
                                    <option value='4'>Other</option>";
											break;
										case '3':
											echo "<option value='1'>Spanish</option>
                                    <option value='2'>Portuguese</option>
                                    <option value='3' selected='selected'>English</option>
                                    <option value='4'>Other</option>";
											break;
										case '4':
											echo "<option value='1'>Spanish</option>
                                    <option value='2'>Portuguese</option>
                                    <option value='3'>English</option>
                                    <option value='4' selected='selected'>Other</option>";
											break;
										default:
											echo "<option value='' selected='selected'>Choose a Language</option>
                                    <option value='1'>Spanish</option>
                                    <option value='2'>Portuguese</option>
                                    <option value='3'>English</option>
                                    <option value='4'>Other</option>";
											break;
									}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td align="left" valign="middle" bgcolor="#F2F2F2">Student ID</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="studentID"
							                                                          id="studentID"
							                                                          value="<?= $rowSearch['Student_ID']; ?>"/>
							</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">Number of Instalments</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="feesNumber"
							                                                          id="feesNumber"
							                                                          value="<?= $rowSearch['Fees_Number']; ?>"/>
							</td>
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

		<tr class="fees" style="text-align:center; font-weight: bold;">
			<td bgcolor="#F2F2F2">Payment(s)</td>
			<td bgcolor="#F2F2F2">
				Commission
				<select name="commission" id="commission">
					<?php
					//echo "This is the commission... ".$invoiceRes['commissionRate']."<br />";
					$commission = $invoiceRes['commissionRate'];
					//echo $commission."<br />";
					switch ($commission) {
						///
						case '10':
							echo "<option value='0'>:::</option>
                                    <option value='10' selected='selected'>10%</option>
                                    <option value='15'>15%</option>
                                    <option value='20'>20%</option>
                                    <option value='25'>25%</option>
                                    <option value='30'>30%</option>";
							break;
						case '15':
							echo "<option value='0'>:::</option>
                                    <option value='10'>10%</option>
                                    <option value='15' selected='selected'>15%</option>
                                    <option value='20'>20%</option>
                                    <option value='25'>25%</option>
                                    <option value='30'>30%</option>";
							break;
						case '20':
							echo "<option value='0'>:::</option>
                                    <option value='10'>10%</option>
                                    <option value='15'>15%</option>
                                    <option value='20' selected='selected'>20%</option>
                                    <option value='25'>25%</option>
                                    <option value='30'>30%</option>";
							break;
						case '25':
							echo "<option value='0'>:::</option>
                                    <option value='10'>10%</option>
                                    <option value='15'>15%</option>
                                    <option value='20'>20%</option>
                                    <option value='25' selected='selected'>25%</option>
                                    <option value='30'>30%</option>";
							break;
						case '30':
							echo "<option value='0'>:::</option>
                                    <option value='10'>10%</option>
                                    <option value='15'>15%</option>
                                    <option value='20'>20%</option>
                                    <option value='25'>25%</option>
                                    <option value='30' selected='selected'>30%</option>";
							break;
						default:
							echo "<option value='0' selected='selected'>:::</option>
                                    <option value='10'>10%</option>
                                    <option value='15'>15%</option>
                                    <option value='20'>20%</option>
                                    <option value='25'>25%</option>
                                    <option value='30'>30%</option>";
							break;
					}
					?>
				</select>
			</td>
			<td bgcolor="#F2F2F2">+GST(10%)</td>
			<td bgcolor="#F2F2F2">Student Date Due</td>
			<td bgcolor="#F2F2F2">Invoice No.</td>
			<td bgcolor="#F2F2F2">College Date Paid</td>
			<td bgcolor="#F2F2F2">Total($) Paid</td>
		</tr>

		<tr class="fees">
			<td bgcolor="#F2F2F2"><span style="margin-right:5px;">1)</span>
				$<input type="text" style="width:70px;" class="pay" name="firstPayment" id="firstPayment"
				        value="<?= $rowSearch['1st_Payment']; ?>"/>
			</td>
			<td bgcolor="#F2F2F2">
				<div id="realPay1">
					<span style='margin-left:1em;'>$</span><input type='text' style='width:65px;' class='pay'
					                                              name='realPayment1'
					                                              value='<?= $invoiceRes['commissionValue']; ?>'/>
				</div>
			</td>
			<td bgcolor="#F2F2F2">
				<div id="firstTotalGST">
					<input type='hidden' style='width:65px;' name='GSTexc1' value='<?= $invoiceRes['GSTexc']; ?>'/>
					<span style='margin-left:1em;'>$</span><input type='text' style='width:65px;' name='paymentGSTinc1'
					                                              value='<?= $invoiceRes['GSTinc']; ?>'/>
				</div>
			</td>
			<script type="text/javascript">
				var newVal = 0;
				$("#commission").change(function () {
					newVal = $(this).val();
					//do something
					//alert("The new value is: " + $(this).val());
					//var value = $("#firstPayment").attr('value');
					if ($("#firstPayment").change()) {
						var value = $("#firstPayment").attr('value');
					}
					;
					var commission = newVal;
					var real = (value * commission) / 100;
					value = parseFloat(value);
					real = parseFloat(real);

					//alert("The new value is: " + $(this).val());
					//alert("The real value is: " + real);
					//
					//
					$("#realPay1").html("<span style='margin-left:1em;'>$</span><input type='text' style='width:65px;' class='pay' name='realPayment1' value='" + real + "' />");
					var GST = (real * 10) / 100;
					//alert('The GST $'+GST);
					var realPay = real + GST;
					realPay = parseFloat(realPay);
					//alert('What we are going to get paid... '+realPay);
					$("#firstTotalGST").html("<input type='hidden' style='width:65px;' name='GSTexc1' value='" + GST + "' /><span style='margin-left:1em;'>$</span><input type='text' style='width:65px;' name='paymentGSTinc1' value='" + realPay + "' />");
					/*
					 $(document).ready(function() {
					 alert('Welcome to StarTrackr! Now no longer under police …');

					 });
					 */
				});

			</script>
			<td bgcolor="#F2F2F2">
				<input type="text" style='width:75px; margin-left:1em;' name="1stPaymentDate"
				       class="datePicker auto-hint" title="yyyy/mm/dd" id="1stPaymentDate"
				       value="<?= $rowSearch['1st_Payment Date']; ?>"/>
			</td>
			<td bgcolor="#F2F2F2">
				<input type="text" style='width:80px; margin-left:1em;' name="InvoiceNo" class="auto-hint"
				       title="Invoice Number" value="<?= $invoiceRes['invoiceNumber']; ?>"/>
			</td>
			<td bgcolor="#F2F2F2">
				<input type="text" style='width:75px; margin-left:1em;' name="1stPaidDate" class="datePicker auto-hint"
				       title="yyyy/mm/dd" id="1stPaidDate" value="<?= $rowSearch['realPaidDate']; ?>"/>
			</td>
			<td bgcolor="#F2F2F2">
				$ <input type="text" style='width:65px; margin-left:1em;' name="1stTotalPayment" class="auto-hint"
				         title="Total Paid" id="1stTotalPayment" value="<?= $rowSearch['1stTotalPayment']; ?>"/>
			</td>
		</tr>

		<tr class="fees">
			<td bgcolor="#F2F2F2"><span style="margin-right:5px;">2)</span>
				$<input type="text" style="width:70px;" class="pay" name="secondPayment" id="secondPayment"
				        value="<?= $rowSearch['2nd_Payment']; ?>"/>
			</td>
			<td bgcolor="#F2F2F2">
				<div id="realPay2"></div>
			</td>
			<td bgcolor="#F2F2F2">
				<div id="secondTotalGST"></div>
			</td>
			<script type="text/javascript">
				var newVal = 0;
				$("#commission").change(function () {
					newVal = $(this).val();
					//do something
					//alert("The new value is: " + $(this).val());
					//var value = $("#firstPayment").attr('value');
					if ($("#secondPayment").change()) {
						var value = $("#secondPayment").attr('value');
					}
					;
					var commission = newVal;
					var real = (value * commission) / 100;
					value = parseFloat(value);
					real = parseFloat(real);

					//alert("The new value is: " + $(this).val());
					//alert("The real value is: " + real);
					//
					//
					$("#realPay2").html("<span style='margin-left:1em;'>$</span><input type='text' style='width:65px;' class='pay' name='realPayment2' value='" + real + "' />");
					var GST = (real * 10) / 100;
					//alert('The GST $'+GST);
					var realPay = real + GST;
					realPay = parseFloat(realPay);
					//alert('What we are going to get paid... '+realPay);
					$("#secondTotalGST").html("<input type='hidden' style='width:65px;' name='GSTexc2' value='" + GST + "' /><span style='margin-left:1em;'>$</span><input type='text' style='width:65px;' name='paymentGSTinc2' value='" + realPay + "' />");
					/*
					 $(document).ready(function() {
					 alert('Welcome to StarTrackr! Now no longer under police …');

					 });
					 */
				});

			</script>
			<td bgcolor="#F2F2F2">
				<input type="text" style='width:75px; margin-left:1em;' name="2ndPaymentDate"
				       class="datePicker auto-hint" title="yyyy/mm/dd" id="2ndPaymentDate"
				       value="<?= $rowSearch['2nd_Payment Date']; ?>"/>
			</td>
			<td bgcolor="#F2F2F2">
				<input type="text" style='width:80px; margin-left:1em;' name="2ndInvoiceNo" class="auto-hint"
				       title="Invoice Number" id="2ndInvoiceNo" value="<?= $rowSearch['2ndInvoiceNo']; ?>"/>
			</td>
			<td bgcolor="#F2F2F2">
				<input type="text" style='width:75px; margin-left:1em;' name="2ndPaidDate" class="datePicker auto-hint"
				       title="yyyy/mm/dd" id="2ndPaidDate" value="<?= $rowSearch['realPaidDate2']; ?>"/>
			</td>
			<td bgcolor="#F2F2F2">
				$ <input type="text" style='width:65px; margin-left:1em;' name="2ndTotalPayment" class="auto-hint"
				         title="Total Paid" id="2ndTotalPayment" value="<?= $rowSearch['2ndTotalPayment']; ?>"/>
			</td>
		</tr>
		<!--
            <tr class="fees">
            <td bgcolor="#F2F2F2">2nd Payment</td>
            <td bgcolor="#F2F2F2">
            <input type="text" name="secondPayment" id="secondPayment" value="<?= $rowSearch['2nd_Payment']; ?>" />
            </td>
            <td bgcolor="#F2F2F2">2nd Payment Date</td>
            <td bgcolor="#F2F2F2"><input type="text" name="2ndPaymentDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="2ndPaymentDate" value="<?= $rowSearch['2nd_Payment Date']; ?>" /></td>
            <td bgcolor="#F2F2F2">Paid on</td>
            <td bgcolor="#F2F2F2"><input type="text" name="2ndPaidDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="2ndPaidDate" value="<?= $rowSearch['realPaidDate2']; ?>"/></td>
            </tr>
            <tr class="fees">
            <td bgcolor="#F2F2F2">3rd Payment</td>
            <td bgcolor="#F2F2F2">
            <input type="text" name="thirdPayment" id="thirdPayment" value="<?= $rowSearch['3rd_Payment']; ?>" />
            <td bgcolor="#F2F2F2">3rd Payment Date</td>
            <td bgcolor="#F2F2F2"><input type="text" name="3rdPaymentDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="3rdPaymentDate" value="<?= $rowSearch['3rd_Payment Date']; ?>" /></td>
            <td bgcolor="#F2F2F2">Paid on</td>
            <td bgcolor="#F2F2F2"><input type="text" name="3rdPaidDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="3rdPaidDate" value="<?= $rowSearch['realPaidDate3']; ?>"  /></td>
            </tr>
            <tr class="fees">
            <td bgcolor="#F2F2F2">4th Payment</td>
            <td bgcolor="#F2F2F2">
            <input type="text" name="fourthPayment" id="fourthPayment" value="<?= $rowSearch['4th_Payment']; ?>" />
            <td bgcolor="#F2F2F2">4th Payment Date</td>
            <td bgcolor="#F2F2F2"><input type="text" name="4thPaymentDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="4thPaymentDate" value="<?= $rowSearch['4th_Payment Date']; ?>" /></td>
            <td bgcolor="#F2F2F2">Paid on</td>
            <td bgcolor="#F2F2F2"><input type="text" name="4thPaidDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="4thPaidDate" value="<?= $rowSearch['realPaidDate4']; ?>"  /></td>
            </tr>  
            <tr class="fees">
            <td bgcolor="#F2F2F2">5th Payment</td>
            <td bgcolor="#F2F2F2">
            <input type="text" name="fifthPayment" id="fifthPayment" value="<?= $rowSearch['5th_Payment']; ?>"  />
            <td bgcolor="#F2F2F2">5th Payment Date</td>
            <td bgcolor="#F2F2F2"><input type="text" name="5thPaymentDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="5thPaymentDate" value="<?= $rowSearch['5th_Payment Date']; ?>" /></td>
            <td bgcolor="#F2F2F2">Paid on</td>
            <td bgcolor="#F2F2F2"><input type="text" name="5thPaidDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="5thPaidDate" value="<?= $rowSearch['realPaidDate5']; ?>" /></td>
            </tr>
            <tr class="fees">
            <td bgcolor="#F2F2F2">6th Payment</td>
            <td bgcolor="#F2F2F2">
            <input type="text" name="sixthPayment" id="sixthPayment" value="<?= $rowSearch['6th_Payment']; ?>"  />
            <td bgcolor="#F2F2F2">6th Payment Date</td>
            <td bgcolor="#F2F2F2"><input type="text" name="6thPaymentDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="6thPaymentDate" value="<?= $rowSearch['6th_Payment Date']; ?>" /></td>
            <td bgcolor="#F2F2F2">Paid on</td>
            <td bgcolor="#F2F2F2"><input type="text" name="6thPaidDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="6thPaidDate" value="<?= $rowSearch['realPaidDate6']; ?>" /></td>
            </tr>
            <tr class="fees">
            <td bgcolor="#F2F2F2">7th Payment</td>
            <td bgcolor="#F2F2F2">
            <input type="text" name="seventhPayment" id="seventhPayment" value="<?= $rowSearch['7th_Payment']; ?>"  />
            <td bgcolor="#F2F2F2">7th Payment Date</td>
            <td bgcolor="#F2F2F2"><input type="text" name="7thPaymentDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="7thPaymentDate" value="<?= $rowSearch['7th_Payment Date']; ?>" /></td>
            <td bgcolor="#F2F2F2">Paid on</td>
            <td bgcolor="#F2F2F2"><input type="text" name="7thPaidDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="7thPaidDate" value="<?= $rowSearch['realPaidDate7']; ?>" /></td>
            </tr>
            <tr class="fees">
            <td bgcolor="#F2F2F2">8th Payment</td>
            <td bgcolor="#F2F2F2">
            <input type="text" name="eighthPayment" id="eighthPayment" value="<?= $rowSearch['8th_Payment']; ?>"  />
            <td bgcolor="#F2F2F2">8th Payment Date</td>
            <td bgcolor="#F2F2F2"><input type="text" name="eighthPaymentDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="8thPaymentDate" value="<?= $rowSearch['8th_Payment Date']; ?>"  /></td>
            <td bgcolor="#F2F2F2">Paid on</td>
            <td bgcolor="#F2F2F2"><input type="text" name="8thPaidDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="8thPaidDate" value="<?= $rowSearch['realPaidDate8']; ?>" /></td>
            </tr>
            <tr class="fees">
            <td bgcolor="#F2F2F2">9th Payment</td>
            <td bgcolor="#F2F2F2">
            <input type="text" name="ninethPayment" id="ninethPayment" value="<?= $rowSearch['9th_Payment']; ?>"  />
            <td bgcolor="#F2F2F2">9th Payment Date</td>
            <td bgcolor="#F2F2F2"><input type="text" name="9thPaymentDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="9thPaymentDate" value="<?= $rowSearch['9th_Payment Date']; ?>"  /></td>
            <td bgcolor="#F2F2F2">Paid on</td>
            <td bgcolor="#F2F2F2"><input type="text" name="9thPaidDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="9thPaidDate" value="<?= $rowSearch['realPaidDate9']; ?>" /></td>
            </tr>
            <tr class="fees">
            <td bgcolor="#F2F2F2">10th Payment</td>
            <td bgcolor="#F2F2F2">
            <input type="text" name="tenthPayment" id="tenthPayment" value="<?= $rowSearch['10th_Payment']; ?>"  />
            <td bgcolor="#F2F2F2">10th Payment Date</td>
            <td bgcolor="#F2F2F2"><input type="text" name="10thPaymentDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="10thPaymentDate" value="<?= $rowSearch['10th_Payment Date']; ?>"  /></td>
            <td bgcolor="#F2F2F2">Paid on</td>
            <td bgcolor="#F2F2F2"><input type="text" name="10thPaidDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="10thPaidDate" value="<?= $rowSearch['realPaidDate10']; ?>" /></td>
            </tr>
            <tr class="fees">
            <td bgcolor="#F2F2F2">11th Payment</td>
            <td bgcolor="#F2F2F2">
            <input type="text" name="eleventhPayment" id="eleventhPayment" value="<?= $rowSearch['11th_Payment']; ?>" />
            <td bgcolor="#F2F2F2">11th Payment Date</td>
            <td bgcolor="#F2F2F2"><input type="text" name="11thPaymentDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="11thPaymentDate" value="<?= $rowSearch['11th_Payment Date']; ?>" /></td>
            <td bgcolor="#F2F2F2">Paid on</td>
            <td bgcolor="#F2F2F2"><input type="text" name="11thPaidDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="11thPaidDate" value="<?= $rowSearch['realPaidDate11']; ?>" /></td>
            </tr>
            <tr class="fees">
            <td bgcolor="#F2F2F2">12th Payment</td>
            <td bgcolor="#F2F2F2">
            <input type="text" name="twelfthPayment" id="twelfthPayment" value="<?= $rowSearch['12th_Payment']; ?>" />
            <td bgcolor="#F2F2F2">12th Payment Date</td>
            <td bgcolor="#F2F2F2"><input type="text" name="12thPaymentDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="12thPaymentDate"  value="<?= $rowSearch['12th_Payment Date']; ?>" /></td>
            <td bgcolor="#F2F2F2">Paid on</td>
            <td bgcolor="#F2F2F2"><input type="text" name="12thPaidDate" class="datePicker auto-hint" title="yyyy/mm/dd"  id="12thPaidDate" value="<?= $rowSearch['realPaidDate12']; ?>" /></td>
            </tr>
            -->
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
							<td bgcolor="#DFEBF4">Number of Fees Paid</td>
							<td bgcolor="#DFEBF4"><input style="color:#333;" type="text" name="numberFeesPaid"
							                             id="numberFeesPaid" value="<?= $rowSearch['Paid_Fees']; ?>"/>
							</td>
							<td bgcolor="#DFEBF4">Outstanding Fees</td>
							<td bgcolor="#DFEBF4"><input style="color:#333;" type="text" name="balance" id="balance"
							                             value="<?= $outstandingFees; ?>"/></td>
							<td bgcolor="#DFEBF4">Balance Owing</td>
							<td bgcolor="#DFEBF4"><input style="color:#333;" type="text" name="balance" id="balance"
							                             value="<?= $rowSearch['Balance']; ?>"/>
							</td>
						</tr>
						<tr>
							<td bgcolor="#DFEBF4">Total Paid to Date ($)</td>
							<td bgcolor="#DFEBF4"><input style="color:#333;" type="text" name="totalPaidToDate"
							                             id="totalPaidToDate"
							                             value="<?= $rowSearch['Total_Paid_to_Date']; ?>"/></td>
							<td bgcolor="#F2F2F2">Next Payment Due Date</td>
							<td bgcolor="#F2F2F2"><input style="color:#333;" type="text" name="nextPaymentDueDate"
							                             class="datePicker auto-hint" title="yyyy/mm/dd"
							                             id="nextPaymentDueDate"
							                             value="<?= $rowSearch['Next_Payment_Due']; ?>"/></td>
							<td bgcolor="#F2F2F2">Generate Invoice</td>
							<td colspan="3" bgcolor="#F2F2F2"><a href="#" title="" style="font-size:.8em;">Click to
									generate a new Invoice</a></td>
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
								<textarea name="genComments" id="genComments"
								          style="display: block; font-family: arial; font-size: 1em; height: auto; text-align: left; width: 720px;">
									<?= ltrim($rowSearch['General_Comments']); ?>
								</textarea>
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
					<input type="submit" name="toUpdate" id="toUpdate" value="Update Client >"/>
				</div>
			</td>
		</tr>
		</table>
		</form>
	<?php
	}
	if (!isset($exist)){
	?>
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
						<td align="center" valign="middle"><h2>online VETA</h2></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<form action="" method="post" id="search">

					<fieldset>
						<legend>SEARCH CLIENT</legend>
						<br/><br/>
						<label>Student Passport</label>
						<input type="text" name="studentPassport"/>
						<input type="submit" name="search" value="search"/>
					</fieldset>
					<br/><br/>
				</form>
				<br/><br/>
				<?php
				}
				if ($exist == NULL) {
					echo "<b>" . $message . "</b><br />";
				}
				?>
			</td>
		</tr>
	</table>
	<script src="../js/vetaAdmin-InsertUser.js" type="text/javascript"></script>
	</body>
	</html>
<?php
} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
?>