<?
session_start();
if (session_is_registered('login')) {
//echo $_SESSION['login'];
	$searchPassport = $_POST['studentPassport'];
//
	$emailAddress = $_POST['emailAddress'];
	if (isset($searchPassport) || isset($emailAddress)) {
		require_once('search_SP.php');
		echo $emailAddress . "<br />";
	}
//
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Main Admin Menu :: VETA</title>
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<style type="text/css">
			<!--
			.style17 {
				font-size: 16px;
				color: #24205E;
				font-weight: bold;
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
							<select name="stCounsellor" disabled="disabled" id="stCounsellor">
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
								<input disabled="disabled" type="text" name="firstName" id="firstName"
								       value="<?= $rowSearch['Name']; ?>"/></td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">LastName</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">
								<input disabled="disabled" type="text" name="lastName" id="lastName"
								       value="<?= $rowSearch['Last_Name']; ?>"/>
							</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">Mobile</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">
								<input disabled="disabled" type="text" name="mobilePhone" id="mobilePhone"
								       value="<?= $rowSearch['Mobile']; ?>"/></td>
						</tr>
						<tr>
							<td align="left" valign="middle" bgcolor="#DFEBF4">Email Address</td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">
								<input disabled="disabled" type="text" name="emailAddress" id="emailAddress"
								       value="<?= $rowSearch['Email']; ?>"/></td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">Passport No.</td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">
								<input disabled="disabled" type="text" name="passportNo" id="passportNo"
								       value="<?= $rowSearch['Passport']; ?>"/>
							</td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">Visa Expiry Date</td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">
								<input disabled="disabled" type="text" name="visaExpDate" id="visaExpDate"
								       value="<?= $rowSearch['visaExpDate']; ?>"/>
							</td>
						</tr>
						<tr>
							<td align="left" valign="middle" bgcolor="#F2F2F2">Enrolment Date</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">
								<input disabled="disabled" type="text" name="enrolmentDate" id="enrolmentDate"
								       value="<?= $rowSearch['Enrolment_Date']; ?>"/>
							</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">Course Lenght (Weeks)</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">
								<input disabled="disabled" type="text" name="courseLenght" id="courseLenght"
								       value="<?= $rowSearch['Course_Lenght_in_Weeks']; ?>"/></td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">Total Course Cost ($)</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">
								<input disabled="disabled" type="text" name="totalCourseCost" id="totalCourseCost"
								       value="<?= $rowSearch['Total_Course_Cost']; ?>"/></td>
						</tr>
						<tr>
							<td align="left" valign="middle" bgcolor="#DFEBF4">Education Centre</td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">
								<select disabled="disabled" name="eduCentre" id="eduCentre">
									<?php
									$eduProvider = $rowSearch['Edu_Provider'];

									do {
										$matchID = $resSchoolCheck[0];
										echo "<br />the first value: " . $eduProvider . " The second value : " . $matchID . " <br />";

										if ($eduProvider == $matchID) {
											echo "<script type='text/javascript'> alert('THEY MATCH!!\\n')</script>";
											echo "<option value='" . $matchID . "' selected='selected'>" . strtoupper($resSchoolCheck[1]) . "</option>";
										}
										$schoolID = $resSchoolCheck[0];
										$school = strtoupper($resSchoolCheck[1]);
										echo "<option value='" . $schoolID . "'>" . $school . "</option>";
									} while ($resSchoolCheck = $db->fetch_array($schoolsCheck));
									?>
								</select>
								<!-- <input disabled="disabled" type="text" name="eduCentre" id="eduCentre" value="<?= $resSchoolsName['entity_name']; ?>" /> -->
							</td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">Course Name</td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">
								<input disabled="disabled" type="text" name="courseName" id="courseName"
								       value="<?= $rowSearch['Course_Name']; ?>"/>
							</td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">Language</td>
							<td align="left" valign="middle" bgcolor="#DFEBF4">
								<input disabled="disabled" type="text" name="language" id="language" value="<?php
								$language = $rowSearch['Language'];
								switch ($language) {
									///
									case '1':
										echo "Spanish";
										break;
									case '2':
										echo "Portuguese";
										break;
									case '3':
										echo "English";
										break;
								}
								?>"/>
							</td>
						</tr>
						<tr>
							<td align="left" valign="middle" bgcolor="#F2F2F2">Student ID</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2"><input disabled="disabled" type="text"
							                                                          name="studentID" id="studentID"
							                                                          value="<?= $rowSearch['Student_ID']; ?>"/>
							</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2">Number of Instalments</td>
							<td align="left" valign="middle" bgcolor="#F2F2F2"><input disabled="disabled" type="text"
							                                                          name="feesNumber" id="feesNumber"
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
						<tr class="fees">
							<td bgcolor="#F2F2F2">1st Payment</td>
							<td bgcolor="#F2F2F2">
								<input disabled="disabled" type="text" name="firstPayment" id="firstPayment"
								       value="<?= $rowSearch['1st_Payment']; ?>"/>
							<td bgcolor="#F2F2F2">1st Payment Date</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="1stPaymentDate"
							                             id="1stPaymentDate"
							                             value="<?= $rowSearch['1st_Payment Date']; ?>"/></td>
							<td bgcolor="#F2F2F2">Paid on</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="1stPaidDate"
							                             id="1stPaidDate" value="<?= $rowSearch['realPaidDate']; ?>"/>
							</td>
						</tr>
						<tr class="fees">
							<td bgcolor="#F2F2F2">2nd Payment</td>
							<td bgcolor="#F2F2F2">
								<input disabled="disabled" type="text" name="secondPayment" id="secondPayment"
								       value="<?= $rowSearch['2nd_Payment']; ?>"/>
							<td bgcolor="#F2F2F2">2nd Payment Date</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="2ndPaymentDate"
							                             id="2ndPaymentDate"
							                             value="<?= $rowSearch['2nd_Payment Date']; ?>"/></td>
							<td bgcolor="#F2F2F2">Paid on</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="2ndPaidDate"
							                             id="2ndPaidDate" value="<?= $rowSearch['realPaidDate2']; ?>"/>
							</td>
						</tr>
						<tr class="fees">
							<td bgcolor="#F2F2F2">3rd Payment</td>
							<td bgcolor="#F2F2F2">
								<input disabled="disabled" type="text" name="thirdPayment" id="thirdPayment"
								       value="<?= $rowSearch['3rd_Payment']; ?>"/>
							<td bgcolor="#F2F2F2">3rd Payment Date</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="3rdPaymentDate"
							                             id="3rdPaymentDate"
							                             value="<?= $rowSearch['3rd_Payment Date']; ?>"/></td>
							<td bgcolor="#F2F2F2">Paid on</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="3rdPaidDate"
							                             id="3rdPaidDate" value="<?= $rowSearch['realPaidDate3']; ?>"/>
							</td>
						</tr>
						<tr class="fees">
							<td bgcolor="#F2F2F2">4th Payment</td>
							<td bgcolor="#F2F2F2">
								<input disabled="disabled" type="text" name="fourthPayment" id="fourthPayment"
								       value="<?= $rowSearch['4th_Payment']; ?>"/>
							<td bgcolor="#F2F2F2">4th Payment Date</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="4thPaymentDate"
							                             id="4thPaymentDate"
							                             value="<?= $rowSearch['4th_Payment Date']; ?>"/></td>
							<td bgcolor="#F2F2F2">Paid on</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="4thPaidDate"
							                             id="4thPaidDate" value="<?= $rowSearch['realPaidDate4']; ?>"/>
							</td>
						</tr>
						<tr class="fees">
							<td bgcolor="#F2F2F2">5th Payment</td>
							<td bgcolor="#F2F2F2">
								<input disabled="disabled" type="text" name="fifthPayment" id="fifthPayment"
								       value="<?= $rowSearch['5th_Payment']; ?>"/>
							<td bgcolor="#F2F2F2">5th Payment Date</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="5thPaymentDate"
							                             id="5thPaymentDate"
							                             value="<?= $rowSearch['5th_Payment Date']; ?>"/></td>
							<td bgcolor="#F2F2F2">Paid on</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="5thPaidDate"
							                             id="5thPaidDate" value="<?= $rowSearch['realPaidDate5']; ?>"/>
							</td>
						</tr>
						<tr class="fees">
							<td bgcolor="#F2F2F2">6th Payment</td>
							<td bgcolor="#F2F2F2">
								<input disabled="disabled" type="text" name="sixthPayment" id="sixthPayment"
								       value="<?= $rowSearch['6th_Payment']; ?>"/>
							<td bgcolor="#F2F2F2">6th Payment Date</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="6thPaymentDate"
							                             id="6thPaymentDate"
							                             value="<?= $rowSearch['6th_Payment Date']; ?>"/></td>
							<td bgcolor="#F2F2F2">Paid on</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="6thPaidDate"
							                             id="6thPaidDate" value="<?= $rowSearch['realPaidDate6']; ?>"/>
							</td>
						</tr>
						<tr class="fees">
							<td bgcolor="#F2F2F2">7th Payment</td>
							<td bgcolor="#F2F2F2">
								<input disabled="disabled" type="text" name="seventhPayment" id="seventhPayment"
								       value="<?= $rowSearch['7th_Payment']; ?>"/>
							<td bgcolor="#F2F2F2">7th Payment Date</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="7thPaymentDate"
							                             id="7thPaymentDate"
							                             value="<?= $rowSearch['7th_Payment Date']; ?>"/></td>
							<td bgcolor="#F2F2F2">Paid on</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="7thPaidDate"
							                             id="7thPaidDate" value="<?= $rowSearch['realPaidDate7']; ?>"/>
							</td>
						</tr>
						<tr class="fees">
							<td bgcolor="#F2F2F2">8th Payment</td>
							<td bgcolor="#F2F2F2">
								<input disabled="disabled" type="text" name="eighthPayment" id="eighthPayment"
								       value="<?= $rowSearch['8th_Payment']; ?>"/>
							<td bgcolor="#F2F2F2">8th Payment Date</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="eighthPaymentDate"
							                             id="8thPaymentDate"
							                             value="<?= $rowSearch['8th_Payment Date']; ?>"/></td>
							<td bgcolor="#F2F2F2">Paid on</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="8thPaidDate"
							                             id="8thPaidDate" value="<?= $rowSearch['realPaidDate8']; ?>"/>
							</td>
						</tr>
						<tr class="fees">
							<td bgcolor="#F2F2F2">9th Payment</td>
							<td bgcolor="#F2F2F2">
								<input disabled="disabled" type="text" name="ninethPayment" id="ninethPayment"
								       value="<?= $rowSearch['9th_Payment']; ?>"/>
							<td bgcolor="#F2F2F2">9th Payment Date</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="9thPaymentDate"
							                             id="9thPaymentDate"
							                             value="<?= $rowSearch['9th_Payment Date']; ?>"/></td>
							<td bgcolor="#F2F2F2">Paid on</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="9thPaidDate"
							                             id="9thPaidDate" value="<?= $rowSearch['realPaidDate9']; ?>"/>
							</td>
						</tr>
						<tr class="fees">
							<td bgcolor="#F2F2F2">10th Payment</td>
							<td bgcolor="#F2F2F2">
								<input disabled="disabled" type="text" name="tenthPayment" id="tenthPayment"
								       value="<?= $rowSearch['10th_Payment']; ?>"/>
							<td bgcolor="#F2F2F2">10th Payment Date</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="10thPaymentDate"
							                             id="10thPaymentDate"
							                             value="<?= $rowSearch['10th_Payment Date']; ?>"/></td>
							<td bgcolor="#F2F2F2">Paid on</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="10thPaidDate"
							                             id="10thPaidDate"
							                             value="<?= $rowSearch['realPaidDate10']; ?>"/></td>
						</tr>
						<tr class="fees">
							<td bgcolor="#F2F2F2">11th Payment</td>
							<td bgcolor="#F2F2F2">
								<input disabled="disabled" type="text" name="eleventhPayment" id="eleventhPayment"
								       value="<?= $rowSearch['11th_Payment']; ?>"/>
							<td bgcolor="#F2F2F2">11th Payment Date</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="11thPaymentDate"
							                             id="11thPaymentDate"
							                             value="<?= $rowSearch['11th_Payment Date']; ?>"/></td>
							<td bgcolor="#F2F2F2">Paid on</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="11thPaidDate"
							                             id="11thPaidDate"
							                             value="<?= $rowSearch['realPaidDate11']; ?>"/></td>
						</tr>
						<tr class="fees">
							<td bgcolor="#F2F2F2">12th Payment</td>
							<td bgcolor="#F2F2F2">
								<input disabled="disabled" type="text" name="twelfthPayment" id="twelfthPayment"
								       value="<?= $rowSearch['12th_Payment']; ?>"/>
							<td bgcolor="#F2F2F2">12th Payment Date</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="12thPaymentDate"
							                             id="12thPaymentDate"
							                             value="<?= $rowSearch['12th_Payment Date']; ?>"/></td>
							<td bgcolor="#F2F2F2">Paid on</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="12thPaidDate"
							                             id="12thPaidDate"
							                             value="<?= $rowSearch['realPaidDate12']; ?>"/></td>
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
							<td bgcolor="#DFEBF4">Number of Fees Paid</td>
							<td bgcolor="#DFEBF4"><input disabled="disabled" style="color:#333;" type="text"
							                             name="numberFeesPaid" id="numberFeesPaid"
							                             value="<?= $rowSearch['Paid_Fees']; ?>"/></td>
							<td bgcolor="#DFEBF4">Outstanding Fees</td>
							<td bgcolor="#DFEBF4"><input disabled="disabled" style="color:#333;" type="text"
							                             name="balance" id="balance" value="<?= $outstandingFees; ?>"/>
							</td>
							<td bgcolor="#DFEBF4">Balance Owing</td>
							<td bgcolor="#DFEBF4"><input disabled="disabled" style="color:#333;" type="text"
							                             name="balance" id="balance"
							                             value="<?= $rowSearch['Balance']; ?>"/></td>
						</tr>
						<tr>
							<td bgcolor="#DFEBF4">Total Paid to Date ($)</td>
							<td bgcolor="#DFEBF4"><input disabled="disabled" style="color:#333;" type="text"
							                             name="totalPaidToDate" id="totalPaidToDate"
							                             value="<?= $rowSearch['Total_Paid_to_Date']; ?>"/></td>
							<td bgcolor="#F2F2F2">Next Payment Due Date</td>
							<td bgcolor="#F2F2F2"><input disabled="disabled" style="color:#333;" type="text"
							                             name="nextPaymentDueDate" id="nextPaymentDueDate"
							                             value="<?= $rowSearch['Next_Payment_Due']; ?>"/></td>
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
								<textarea disabled="disabled" name="genComments" id="genComments" cols="90" rows="2">
									<?= $rowSearch['General_Comments']; ?>
								</textarea>
							</td>
						</tr>
						<tr>
							<td bgcolor="#DFEBF4">Added By</td>
							<td bgcolor="#DFEBF4"><?= $_SESSION['login']; ?><input disabled="disabled" type="hidden"
							                                                       name="<?php echo $_SESSION['login']; ?>"
							                                                       id="vetaAdminUser"/></td>
							<td bgcolor="#DFEBF4">Created on</td>
							<td bgcolor="#DFEBF4"><?= date('l jS \of F Y h:i:s A'); ?><input disabled="disabled"
							                                                                 type="hidden"
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
					<input type="submit" name="submit" id="submit" value="Update Client >"
					       onclick="window.location='accounts-update.php?do=<?= $rowSearch['Passport']; ?>';"/>
				</div>
			</td>
		</tr>
		</table>
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
						<br/><br/>
						<!--
						   <label>Student Email Address</label>
							<input type="text" name="emailAddress"/>
							<input type="submit" name="search" value="search" />
							</fieldset>
						   -->
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
	</body>
	</html>
<?php
} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
?>