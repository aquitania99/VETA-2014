<?php
session_start();
if (isset($_SESSION['login'])) {
//////////////////////////////////////////////////////
	require_once("../Connections/config.inc.php");
	require_once("../Connections/mysql.class.php");
//////////////////////////////////	
//echo $_SESSION['login'];
//$searchPassport = $_POST['studentPassport'];
	$emailSearch = $_POST['emailAddress'];
/// Create New DB Object
	$db = new MySQL();
	/// Open Connection
	$db->open();
//////////////////////////////////
	$studentCheck = $db->dbQuery("SELECT emailAddress FROM `veta_students` WHERE emailAddress = '$emailSearch'");
	$resStudentCheck = $db->fetch_array($studentCheck);
	$emailAddress = $resStudentCheck['emailAddress'];
//////////////////////////////////	
//if (isset($searchPassport) || isset($emailAddress))
	if (isset($emailAddress)) {
		require_once('search_SP.php');
		//echo $emailAddress."<br />";
	} else {
		echo "<script type='text/javascript'>alert('Sorry!!\nSomething went wrong\r Please try again');</script>";
	}
//
	$do = $_GET['del'];
	print_r($do);
//
	if (isset($do)) {

		/// Create New DB Object
		$db = new MySQL();
		/// Open Connection
		$db->open();
		//////////////////////////////////

		//////////////////////////////////
		$vetaStudentDelete = $db->dbQuery("DELETE FROM `veta_students` WHERE emailAddress = '$do'");
		$vetaPaymentDelete = $db->dbQuery("DELETE FROM `payments` WHERE emailAddress = '$do'");
		$vetaInvoiceDelete = $db->dbQuery("DELETE FROM `invoices` WHERE emailAddress = '$do'");
		$vetaInvoiceDelete = $db->dbQuery("DELETE FROM `persons` WHERE emailAddress = '$do'");
		//$resSchoolAdd = $db->fetch_array($schoolsCheck);
		//////////////////////////////////
		$studentCheck = $db->dbQuery("SELECT emailAddress FROM `veta_students` WHERE emailAddress = '$do'");
		$resStudentCheck = $db->fetch_array($studentCheck);
		$IdResult = $resStudentCheck['emailAddress'];
		//////////////////////////////////

		//////////////////////////////////
		if ($IdResult = "") {
			echo "<script type='text/javascript'>alert('Record Deleted Successfully!!!');</script>";
			echo "<script type='text/javascript'>window.location='paymentMod.php';</script>";
			//////////////////////////////////
		} else {
			echo "<script type='text/javascript'>alert('Sorry!!\nSomething went wrong\r Please try again');</script>";
		}
	}
	?>
	<!DOCTYPE HTML>
	<html>
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

			/* ~~~ ~~~ */
			.submit {
				background-color: #FFFF66;
				border: 1px solid #FFCC00;
				margin-top: 20px;
				padding: 3px;
				width: 110px;
				cursor: pointer;
			}

			.submit:hover {
				background-color: #FFCC66;
				border: 1px solid #FFCC22;
			}

			.fees {
				/*border-bottom: 1px solid #991C1C;*/
				border-bottom: 1px solid #999999;
				font-size: 0.8em;
				margin-top: 2em;
				padding-bottom: 1.5em;
			}

			.field {
				width: 100px;
				line-height: 1.1em;
				font-family: Verdana, Geneva, sans-serif;
				font-size: small;
				color: #666;
			}

			a {
				color: #999;
				text-decoration: none;
			}

			a:hover {
				color: #802727;
			}

			/* ~~~ ~~~ */
			-->
		</style>
	</head>

	<body>
	<?php
	if (isset($exist)) {
		?>
		<!-- /// /// -->
		<!-- <form id="searchClient" name="searchClient" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
		<input disabled="disabled" type="hidden" id="clientID" name="clientID"
		       value="<? echo $rowSearch['personID']; ?>"/>
		<br/>
		<br/>
		<table width="900" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
		<tr>
			<td valign="top">
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td width="211" rowspan="2"><img src="images/logomodulo.gif" width="194" height="106"
						                                 align="absmiddle"/></td>
						<td align="right" valign="middle"><a href="paymentMod.php"><img src="newsletter/images/back.png"
						                                                                border="0"/></a><a
								href="logout.php"><img src="images/logoutp.png" width="104" height="44" border="0"/></a>
						</td>
					</tr>
					<tr>
						<td align="center" valign="middle"><h2>PAYMENTS + INVOICES MODULE</h2></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<table width="100%" border="0" cellpadding="4" cellspacing="1">
					<tr>
						<input disabled="disabled" type="hidden" id="clientID" name="clientID"
						       value="<?php echo $rowSearch['personID']; ?>"/>
						<input disabled="disabled" type="hidden" id="statusID" name="statusID"
						       value="<?php echo $rowSearch['statusID']; ?>"/>
						<td width="21%" align="left" valign="middle" bgcolor="#DFEBF4">Counsellor</td>
						<td align="left" valign="middle" bgcolor="#DFEBF4">
							<select name="stCounsellor" id="stCounsellor" disabled="disabled">
								<?php
								$counsellor = $rowSearch['Counsellor'];
								switch ($counsellor) {
									///
									case 'Y-Useche':
										echo "<option value=\"\">::Choose Counsellor::</option>
                                <option selected=\"selected\" value=\"Y-Useche\">Yovanny Useche</option>
                                <option value=\"M-Ortiz\">Maricela Ortiz</option>
                                <option value=\"R-Fonseca\">Rocio Fonseca</option>
                                <option value=\"S-Moreira\">Silvia Moreira</option>";
										break;
									case 'M-Ortiz':
										echo "<option value=\"\">::Choose Counsellor::</option>
                                <option value=\"Y-Useche\">Yovanny Useche</option>
                                <option selected=\"selected\" value=\"M-Ortiz\">Maricela Ortiz</option>
                                <option value=\"R-Fonseca\">Rocio Fonseca</option>
                                <option value=\"S-Moreira\">Silvia Moreira</option>";
										break;
									case 'R-Fonseca':
										echo "<option value=\"\">::Choose Counsellor::</option>
                                <option value=\"Y-Useche\">Yovanny Useche</option>
                                <option value=\"M-Ortiz\">Maricela Ortiz</option>
                                <option selected=\"selected\" value=\"R-Fonseca\">Rocio Fonseca</option>
                                <option value=\"S-Moreira\">Silvia Moreira</option>";
										break;
									case 'S-Moreira':
										echo "<option value=\"\">::Choose Counsellor::</option>
                                <option value=\"Y-Useche\">Yovanny Useche</option>
                                <option value=\"M-Ortiz\">Maricela Ortiz</option>
                                <option value=\"R-Fonseca\">Rocio Fonseca</option>
                                <option selected=\"selected\" value=\"S-Moreira\">Silvia Moreira</option>";
										break;
									default:
										echo "<option selected=\"selected\" value=\"\">::Choose Counsellor::</option>
                                <option value=\"Y-Useche\">Yovanny Useche</option>
                                <option value=\"M-Ortiz\">Maricela Ortiz</option>
                                <option value=\"R-Fonseca\">Rocio Fonseca</option>
                                <option value=\"S-Moreira\">Silvia Moreira</option>";
								}
								?>
							</select>
						</td>
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
			<td width="13%" align="left" valign="middle" bgcolor="#F2F2F2">First Name</td>
			<td width="20%" align="left" valign="middle" bgcolor="#F2F2F2">
				<input disabled="disabled" type="text" name="firstName" id="firstName" class="auto-hint"
				       title="Enter Name" value="<?php echo $rowSearch['Name']; ?>"/></td>
			<td width="13%" align="left" valign="middle" bgcolor="#F2F2F2">LastName</td>
			<td width="23%" align="left" valign="middle" bgcolor="#F2F2F2">
				<input disabled="disabled" type="text" name="lastName" id="lastName" class="auto-hint"
				       title="Enter Last Name" value="<?php echo $rowSearch['Last_Name']; ?>"/></td>
			<td width="11%" align="left" valign="middle" bgcolor="#F2F2F2">Mobile</td>
			<td width="20%" align="left" valign="middle" bgcolor="#F2F2F2">
				<input disabled="disabled" type="text" name="mobilePhone" id="mobilePhone" class="auto-hint"
				       title="Enter Mobile Phone" value="<?php echo $rowSearch['Mobile']; ?>"/></td>
		</tr>
		<tr>
			<td align="left" valign="middle" bgcolor="#DFEBF4">Email Address</td>
			<td align="left" valign="middle" bgcolor="#DFEBF4">
				<input disabled="disabled" type="text" name="emailAddress" id="emailAddress" class="auto-hint"
				       title="Enter Email Address" value="<?php echo $rowSearch['Email']; ?>"/></td>
			<td align="left" valign="middle" bgcolor="#DFEBF4">Passport No.</td>
			<td align="left" valign="middle" bgcolor="#DFEBF4">
				<input disabled="disabled" type="text" name="passportNo" id="passportNo" class="auto-hint"
				       title="Enter Passport Number" value="<?php echo $rowSearch['Passport']; ?>"/>
			</td>
			<td align="left" valign="middle" bgcolor="#DFEBF4">Visa Expiry Date</td>
			<td align="left" valign="middle" bgcolor="#DFEBF4">
				<input disabled="disabled" type="text" name="visaExpDate" id="visaExpDate" class="datePicker auto-hint"
				       title="yyyy-mm-dd" value="<?php echo $rowSearch['visaExpDate']; ?>"/>
			</td>
		</tr>
		<tr>
			<td align="left" valign="middle" bgcolor="#F2F2F2">Enrolment Date</td>
			<td align="left" valign="middle" bgcolor="#F2F2F2">
				<input disabled="disabled" type="text" name="enrolmentDate" id="enrolmentDate"
				       class="datePicker auto-hint" title="yyyy-mm-dd"
				       value="<?php echo $rowSearch['Enrolment_Date']; ?>"/>
			</td>
			<td align="left" valign="middle" bgcolor="#F2F2F2">Education Centre</td>
			<td align="left" valign="middle" bgcolor="#F2F2F2"><select name="eduCentre" id="eduCentre"
			                                                           style="font-size:x-small; width:200px"
			                                                           disabled="disabled">
					<option value="">::Education Centre::</option>
					<?php
					$eduProvider = $rowSearch['Edu_Provider'];

					do {
						$matchID = $resSchoolCheck[0];
						//echo "<br />the first value: ".$eduProvider." The second value : ".$matchID." <br />";

						if ($eduProvider == $matchID) {
							echo "<script type='text/javascript'> alert'THEY MATCH!!\\n'</script>";
							echo "<option value='" . $matchID . "' selected='selected'>" . strtoupper($resSchoolCheck[1]) . "</option>";
						}
						$schoolID = $resSchoolCheck[0];
						$school = strtoupper($resSchoolCheck[1]);
						echo "<option value='" . $schoolID . "'>" . $school . "</option>";
					} while ($resSchoolCheck = $db->fetch_array($schoolsCheck));
					?>
				</select></td>
			<td align="left" valign="middle" bgcolor="#F2F2F2">Course Name</td>
			<td align="left" valign="middle" bgcolor="#F2F2F2"><input disabled="disabled" type="text" name="courseName"
			                                                          id="courseName" class="auto-hint"
			                                                          title="Enter Course Name"
			                                                          value="<?php echo $rowSearch['Course_Name']; ?>"/>
			</td>
		</tr>
		<tr>
			<td align="left" valign="middle" bgcolor="#DFEBF4">Course Lenght (Weeks)</td>
			<td align="left" valign="middle" bgcolor="#DFEBF4"><input disabled="disabled" type="text"
			                                                          name="courseLenght" id="courseLenght"
			                                                          class="auto-hint" title="Course Lenght"
			                                                          value="<?php echo $rowSearch['Course_Lenght_in_Weeks']; ?>"/>
			</td>
			<td align="left" valign="middle" bgcolor="#DFEBF4">Total Course Cost ($)</td>
			<td align="left" valign="middle" bgcolor="#DFEBF4"><input disabled="disabled" type="text"
			                                                          name="totalCourseCost" id="totalCourseCost"
			                                                          class="auto-hint" title="Total Course Cost ($)"
			                                                          value="<?php echo $rowSearch['Total_Course_Cost']; ?>"/>
			</td>
			<td align="left" valign="middle" bgcolor="#DFEBF4">Number of Instalments</td>
			<td align="left" valign="middle" bgcolor="#DFEBF4"><select id="instalments" name="instalments"
			                                                           disabled="disabled">
					<option
						value="<?php echo $rowSearch['instalments']; ?>"><?php echo $rowSearch['instalments']; ?></option>
					<option value="0">--- --- ---</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
					<option value="32">32</option>
					<option value="33">33</option>
					<option value="34">34</option>
					<option value="35">35</option>
					<option value="36">36</option>
				</select></td>
		</tr>
		<tr>
			<td align="left" valign="middle" bgcolor="#F2F2F2">Commission %</td>
			<td align="left" valign="middle" bgcolor="#F2F2F2"><select name="commission" id="commission"
			                                                           disabled="disabled">
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
				</select></td>
			<td align="left" valign="middle" bgcolor="#F2F2F2">Language</td>
			<td colspan="3" align="left" valign="middle" bgcolor="#F2F2F2"><select name="language" id="language"
			                                                                       disabled="disabled">
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
				</select></td>
		</tr>
		</table>
		</fieldset>
		</td>
		</tr>
		<tr>
			<td align="left" valign="top">
				<fieldset>
					<legend>Payment History</legend>
					<table width="871">
						<tr>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td id="inputs">
								<!-- -->
								<?php
								$i = 0;
								do {
									$i++;
									$invLink = 'inv' . $i++;
									?>
									<div class="fees">
										<table width="100%" border="0" cellspacing="1" cellpadding="4">
											<tr>
												<td align="left" valign="middle" bgcolor="#F2F2F2">
													<label>Payment <?php echo $invoiceRes['invoice_Id']; ?> $</label>
												</td>
												<td align="left" valign="middle" bgcolor="#F2F2F2">
													<input disabled="disabled" type="hidden" name="invNumber[]"
													       value="<?php echo $invoiceRes['invoice_Id']; ?>"/>
													<input disabled="disabled" type="text" id=" " class="field"
													       name="payments[]"
													       value="<?php echo $invoiceRes['paymentFee']; ?>"/>
												</td>
												<td align="left" valign="middle" bgcolor="#F2F2F2">
													<label>Commission $</label>
												</td>
												<td align="left" valign="middle" bgcolor="#F2F2F2">
													<input disabled="disabled" type="text" class="field"
													       name="realPayment[]"
													       value="<?php echo $invoiceRes['commissionValue']; ?>"/>
												</td>
												<td align="left" valign="middle" bgcolor="#F2F2F2">
													<label>GST(10%)</label>
												</td>
												<td align="left" valign="middle" bgcolor="#F2F2F2">
													<input disabled="disabled" type="text" style="width:65px;"
													       class="field" name="GSTexc[]"
													       value="<?php echo $invoiceRes['GSTexc']; ?>"/>
												</td>
											</tr>
											<tr>
												<td align="left" valign="middle" bgcolor="#DFEBF4">
													<label>Comm + GST $</label>
												</td>
												<td align="left" valign="middle" bgcolor="#DFEBF4">
													<input disabled="disabled" type="text" class="field" name="GSTinc[]"
													       value="<?php echo $invoiceRes['GSTinc']; ?>"/>
												</td>
												<td align="left" valign="middle" bgcolor="#DFEBF4">
													<label>Invoice No.</label>
												</td>
												<td align="left" valign="middle" bgcolor="#DFEBF4">
													<input disabled="disabled" type="text" class="field"
													       name="InvoiceNumber[]"
													       value="<?php echo $invoiceRes['invoiceNumber']; ?>"/>
												</td>
												<td align="left" valign="middle" bgcolor="#DFEBF4">
													<label>Comm. Deducted Upfront</label>
												</td>
												<td align="left" valign="middle" bgcolor="#DFEBF4">
													<input disabled="disabled" name="CommDeducted[]" type="checkbox"
													       class="pay"
													       style="width:15px;"  <?php if ($invoiceRes['CommDeducted'] == 'Y') {
														echo "checked";
													} ?> />
												</td>
											</tr>
											<tr>
												<td align="left" valign="middle" bgcolor="#F2F2F2">
													<label>Student Payment Due Date</label>
												</td>
												<td align="left" valign="middle" bgcolor="#F2F2F2">
													<input disabled="disabled" type="text" name="PaymentDateDue[]"
													       class="datePicker field" title="yyyy-mm-dd"
													       value="<?php echo $invoiceRes['payDueDate']; ?>"/>
												</td>
												<td align="left" valign="middle" bgcolor="#F2F2F2">
													<label>Student Paid Date</label>
												</td>
												<td align="left" valign="middle" bgcolor="#F2F2F2">
													<input disabled="disabled" type="text" name="StudentPaidDate[]"
													       class="datePicker field" title="yyyy-mm-dd"
													       value="<?php echo $invoiceRes['StudentPaidDate']; ?>"/>
												</td>
												<td align="left" valign="middle" bgcolor="#F2F2F2">
													<label>Student Total($) Paid</label></td>
												<td align="left" valign="middle" bgcolor="#F2F2F2">
													<input disabled="disabled" type="text" name="TotalPaid[]"
													       class="field"
													       value="<?php echo $invoiceRes['totalPaid']; ?>"/>
												</td>
											</tr>
											<tr>
												<td align="left" valign="middle" bgcolor="#DFEBF4">
													<label>College Payment Due</label></td>
												<td align="left" valign="middle" bgcolor="#DFEBF4">
													<input disabled="disabled" type="text" name="ColPaymentDateDue[]"
													       class="datePicker field" title="yyyy-mm-dd"
													       value="<?php echo $invoiceRes['ColPaymentDateDue']; ?>"/>
												</td>
												<td align="left" valign="middle" bgcolor="#DFEBF4">
													<label>College Date Paid</label>
												</td>
												<td align="left" valign="middle" bgcolor="#DFEBF4">
													<input disabled="disabled" type="text" name="CollegeDatePaid[]"
													       class="datePicker field" title="yyyy-mm-dd"
													       value="<?php echo $invoiceRes['colPaidDate']; ?>"/>
												</td>
												<td align="left" valign="middle" bgcolor="#DFEBF4"><label>College
														Total($) Paid</label></td>
												<td align="left" valign="middle" bgcolor="#DFEBF4">
													<input disabled="disabled" type="text" name="ColTotalPaid[]"
													       class="field"
													       value="<?php echo $invoiceRes['ColTotalPaid']; ?>"/></td>
											</tr>
											<tr>
											<tr>
												<td bgcolor="#F2F2F2">
													<label style="float:right;">Marketing Incentive </label></td>
												<td align="left" valign="middle" bgcolor="#F2F2F2">
													<input name="marketingIncentive[]" type="checkbox"
													       disabled="disabled" class="pay"
													       style="width:15px;"  <?php if ($invoiceRes['marketingIncentive'] == 'Y') {
														echo "checked";
													} ?> />
												</td>
												<td bgcolor="#F2F2F2">
													<input disabled="disabled" name="mkIncentiveValue[]" type="text"
													       class=" field"
													       id="mkIncentive-<?php echo $invoiceRes['invoice_Id']; ?>"
													       value="<?php echo $invoiceRes['mkIncentiveValue']; ?>"/>
												</td>
												<td bgcolor="#F2F2F2">&nbsp;</td>
												<td bgcolor="#F2F2F2">
													<label style="float:right;">Generate Invoice >> </label></td>
												<td bgcolor="#F2F2F2">
													<a href="generate-invoice.php?name=<?php echo $rowSearch['Name']; ?> <?php echo $rowSearch['Last_Name']; ?>&inv=<?php echo $invoiceRes['invoiceNumber']; ?>
&eduCentre=<?php echo $schoolName; ?>&eduAddress=<?php echo $schoolAddress; ?>&course=<?php echo $rowSearch['Course_Name']; ?>&intakeDate=<?php echo $rowSearch['Enrolment_Date']; ?>&totalCost=<?php echo $invoiceRes['paymentFee']; ?>
&commRate=<?php echo $commission; ?>&realPay=<?php echo $invoiceRes['commissionValue']; ?>&GSTexc=<?php echo $invoiceRes['GSTexc']; ?>
&GSTinc=<?php echo $invoiceRes['GSTinc']; ?>&paymentNo=<?php echo $invoiceRes['invoice_Id']; ?>&incentive=<?php echo $invoiceRes['mkIncentiveValue']; ?>"
													   target="_blank" style="font-size:.8em;">Click to Generate the
														Invoice</a>
												</td>
											</tr>
										</table>
									</div>
								<?php } while ($invoiceRes = $db->fetch_array($invoiceDetails)) ?>
								<!-- -->
							</td>
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
								<textarea name="genComments" disabled="disabled" id="genComments" cols="90"
								          rows="2"><?php echo $rowSearch['General_Comments']; ?></textarea>
							</td>
						</tr>
						<tr>
							<td bgcolor="#DFEBF4">Added By</td>
							<td bgcolor="#DFEBF4"><?php echo $_SESSION['login']; ?><input disabled="disabled"
							                                                              type="hidden"
							                                                              name="<?php echo $_SESSION['login']; ?>"
							                                                              id="vetaAdminUser"/></td>
							<td bgcolor="#DFEBF4">Created on</td>
							<td bgcolor="#DFEBF4"><?php echo date('l jS \of F Y h:i:s A'); ?><input disabled="disabled"
							                                                                        type="hidden"
							                                                                        name="<?php echo date('l jS \of F Y h:i:s A'); ?>"
							                                                                        id="insertDate"/>
							</td>
						</tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr class="hidden">
			<td height="40" align="left" valign="top">
				<div align="center">
					<input type="button" name="goBack" id="goBack" value="< Back to Search"
					       onclick="window.location='paymentMod.php';"/>
					<input type="submit" name="submit" id="submit" style="cursor:pointer;" value="Delete Client >"
					       onclick="window.location='<?php $_SERVER['PHP_SELF']; ?>?del=<?php echo $rowSearch['Email']; ?>';"/>
				</div>
			</td>
		</tr>
		</table>
		<!-- </form> -->
		<!--
		<script src="../js/vetaAdmin-InsertUser.js" type="text/javascript"></script>
		-->
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
						<td align="right" valign="middle"><a href="paymentMod.php"><img src="newsletter/images/back.png"
						                                                                border="0"/></a><a
								href="logout.php"><img src="images/logoutp.png" width="104" height="44" border="0"/></a>
						</td>
					</tr>
					<tr>
						<td align="center" valign="middle"><h2>PAYMENTS + INVOICES MODULE</h2></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<form action="" method="post" id="search">

					<fieldset>
						<legend>DELETE CLIENT</legend>
						<br/><br/>
						<!--
							<label>Student Passport</label>
							<input type="text" name="studentPassport"/>
							<input type="submit" name="search" value="search" style="cursor: pointer" />
						   <br /><br />
						   -->
						<label>Student Email Address</label>
						<input type="text" name="emailAddress"/>
						<input type="submit" name="search" value="search" style="cursor: pointer"/>
						<br/><br/>
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
	</body>
	</html>
<?php
} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
?>