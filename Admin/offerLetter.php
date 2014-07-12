<?php
session_start();
require 'inc/englishCourse.php';
//
if (isset($_SESSION['login'])) {
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Main Admin Menu :: VETA</title>
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
		<style type="text/css">
			.moreInstalments {
				margin-top: 1.5em;
				margin-bottom: 1.5em;
			}
		</style>
	</head>

	<body>
	<!-- /// /// -->
	<form id="insertClient" name="insertClient" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	<br/>
	<input type="hidden" value="<?php echo $keyVal; ?>" name="eaddress" id="eaddress"/>
	<input type="hidden" value="english" name="quoteType" id="quoteType"/>
	<br/>
	<table width="900" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
	<tr>
		<td>
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td width="211" rowspan="2"><img src="images/logomodulo.gif" alt="" width="194" height="106"
					                                 align="absmiddle"/></td>
					<td align="right" valign="middle">
						<!--
						<a href="mainAdmin.php"><img src="newsletter/images/back.png" alt="" border="0" /></a>
						<a href="logout.php"><img src="images/logoutp.png" alt="" width="104" height="44" border="0" /></a>
						-->
						<!-- <a class="btn btn-inverse" href="" onclick="close(); return false;"><i class="icon-remove-circle icon-white"></i></a>
						<script type="text/javascript">
						function close(){
					//		window.close();
							window.history.go(-1);
						}
						</script> -->
					</td>
				</tr>
				<tr>
					<td align="center" valign="middle"><h2>ENGLISH COURSE </h2></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td align="left" valign="top">
						<div class="pull-left span5">
							<dl class="dl-horizontal">
								<dt><strong>Today's Date</strong></dt>
								<dd><?php echo date('l jS \of F Y h:i a'); ?></dd>
								<dt><strong>Student Name</strong></dt>
								<dd><?php echo $fullName; ?></dd>
								<dt><strong>Profession</strong></dt>
								<dd>
									<?php if ($profession == '') {
										echo "&nbsp;";
									} else echo $profession; ?>
								</dd>
								<dt><strong>Mobile Phone</strong></dt>
								<dd>
									<?php if ($mobilePhone == '') {
										echo "&nbsp;";
									} else echo $mobilePhone; ?>
								</dd>
								<dt><strong>Email</strong></dt>
								<dd><?php echo $keyVal; ?></dd>
								<dt><strong>Visa Expiry Date</strong></dt>
								<dd>
									<?php if ($expiryDate == '') {
										echo "&nbsp;";
									} else echo $expiryDate; ?>
								</dd>
							</dl>
						</div>
					</td>
					<td align="left" valign="top">
						<div class="pull-right span6">
							<dl class="dl-horizontal">
								<dt><strong>Counsellor</strong></dt>
								<dd><?php echo $counsellor; ?></dd>
								<dt><strong>Counsellor Mobile</strong></dt>
								<dd><?php echo $cMobile; ?></dd>
								<dt><strong>Counsellor Email</strong></dt>
								<dd><?php echo $cEmail; ?></dd>
							</dl>
						</div>
					</td>
				</tr>
			</table>

		</td>
	</tr>

	<tr>
	<td align="left" valign="top">
	<fieldset>
	<legend>English Course Instalment No.1</legend>
	<input type="hidden" name="coursesNum[]" value="1"/>
	<table width="100%" border="0" cellpadding="4" cellspacing="1" class="table">

	<tr>
		<td colspan="6">
			<div name="quotation">
				<table width="100%" border="0" cellpadding="4" cellspacing="1" class="table table-bordered table-hover">
					<tr>
						<td height="0" align="left" valign="middle" bgcolor="#DFEBF4">Payment Fees<br>

							<div class="input-prepend">
								<input name="paymentTitle" type="text" id="paymentTitle" placeholder="" maxlength="80">
							</div>
						</td>
						<td height="0" align="left" valign="middle" bgcolor="#DFEBF4">Course Name<br>
							<input type="text" name="courseName" id="courseName" class="span2"/></td>
						<td height="0" colspan="2" align="left" valign="middle" bgcolor="#DFEBF4">College Name<br>
							<select class="span2" name="college" id="college">
								<?php
								print($colList);
								//echo "<tt><pre>".var_export($colList,true)."</pre></tt><br />";
								?>
							</select></td>
					</tr>
					<tr>
						<td height="0" align="left" valign="middle" bgcolor="#F2F2F2">New Course Start Date<br>
							<input type="text" name="newCourseStartDate" id="newCourseStartDate"
							       class="datePicker span2" title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/></td>
						<td height="0" align="left" valign="middle" bgcolor="#F2F2F2">New Course End Date <br>
							<input type="text" name="newCourseEndDate" id="newCourseEndDate" class="datePicker span2"
							       title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/></td>
						<td height="0" bgcolor="#F2F2F2">Holidays Duration (Weeks)<br>
							<select name="holidaysDuration" id="holidaysDuration" class="input-mini">
								<option value="0">0</option>
								<?php for ($j = 1; $j <= 8; $j++) {
									echo '<option value="' . $j . '">' . $j . '</option>';
								}
								?>
							</select></td>
						<td height="0" bgcolor="#F2F2F2">Time Table<br>
							<select name="courseTimeTable" class="span2" id="courseTimeTable">
								<option value="NaN">Choose a Time</option>
								<option value="morning">Morning</option>
								<option value="afternoon">Afternoon</option>
								<option value="evening">Evening</option>
							</select></td>
					</tr>
					<tr>
						<td width="0" height="0" bgcolor="#DFEBF4">Cost per Week<br>

							<div class="input-prepend pull-left" style="margin-right:2em;">
								<span class="add-on">$</span>
								<input type="text" name="weeklyCost" id="weeklyCost" class="span2 inst1"
								       placeholder="Cost AU$ per Week"/>
							</div>
						</td>
						<td height="0" bgcolor="#DFEBF4">Duration (Weeks)<br>
							<select name="courseDuration" id="courseDuration" class="input-mini inst1 wk">
								<option value="0">0</option>
								<?php for ($j = 1; $j <= 250; $j++) {
									echo '<option value="' . $j . '">' . $j . '</option>';
								}
								?>
							</select>
						</td>
						<td height="0" colspan="2" bgcolor="#DFEBF4">Number of Instalments<br>
							<select name="instalmentsNo" id="instalmentsNo" class="input-mini inst1">
								<option value="0">0</option>
								<?php for ($j = 1; $j <= 4; $j++) {
									echo '<option value="' . $j . '">' . $j . '</option>';
								}
								?>
							</select></td>
					</tr>
					<tr>
						<td width="0" height="0" bgcolor="#F2F2F2">Enrolment Fee<br>

							<div class="input-prepend pull-left" style="margin-right:2em;">
								<span class="add-on">$</span>
								<input type="text" class="span2 inst1" name="courseEnrolmentFee" id="courseEnrolmentFee"
								       placeholder="Enrolment Fee AU$"/>
							</div>
						</td>
						<td height="0" bgcolor="#F2F2F2"> Materials (AU$)<br>

							<div class="input-prepend pull-left" style="margin-right:2em;">
								<span class="add-on">$</span>
								<input type="text" name="materialsCost" id="materialsCost" class="span2 inst1"
								       placeholder="Materials Cost AU$"/>
							</div>
						</td>
						<td height="0" colspan="4" bgcolor="#F2F2F2">Instalment Fee<br>

							<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
								<input type="text" name="instalmentFee" id="instalmentFee" class="input-mini inst1"
								       placeholder="Instalment Fee AU$"/>
							</div>
						</td>
					</tr>

					<tr>
						<td width="0" height="0" bgcolor="#DFEBF4"><strong>Instalment No. 1</strong>
							<br>
							<div class="input-prepend pull-left" style="margin-right:2em;">
								<span class="add-on">$</span>
								<input type="text" name="instOne" id="instOne" class="span2 inst1" value="0"/>
							</div>
						</td>
						<td height="0" bgcolor="#DFEBF4"><strong>Total Instalment No. 1</strong>
							<br>
							<div class="input-prepend pull-left"><span class="add-on">$</span>
								<input name="totalInstOne" type="text" class="span2 totalInstVal" id="totalInstOne"
								       placeholder=" " value="0"/>
							</div>
						</td>
						<td height="0" colspan="3" bgcolor="#DFEBF4"><strong>Inst.1 - Due Date</strong><br>
							<!-- DUE DATE BEGIN -->
							<input type="text" name="dueDate1" id="dueDate1"
							       class="datePicker span2" title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/>
							<!-- DUE DATE END -->
						</td>
					</tr>
				</table>
			</div>
			<!-- Additional Instalments --><!-- --><!-- -->
			<!-- -->
			<!-- Aditional Instalments END -->
		</td>
	</tr>

	<tr>
		<td colspan="6">
			<table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-bordered">

				<tr>
					<td align="left" valign="middle" bgcolor="#FFFFFF">Health Cover<br>
						<!--<input type="text" name="healthFund" id="healthFund" class="span2" placeholder="Name"/>-->
						<select name="healthFund" id="healthFund" class="span3">
							<option value=" ">:: Select One ::</option>
							<option value="n/a">N/A</option>
							<option value="Medibank">Medibank</option>
							<option value="Bupa">Bupa</option>
							<option value="oshc">OSHC</option>

					</td>
					<td align="left" valign="middle" bgcolor="#FFFFFF"><span class="add-on">Cost AU$</span><br>

						<div class="input-prepend pull-left"><span class="add-on">$</span>
							<input type="text" class="span2 inst1" name="healthCost" id="healthCost"
							       placeholder="Cost AU$"/>
						</div>
					</td>
					<td align="left" valign="middle" bgcolor="#FFFFFF">
						<div class="pull-left span2"> Months<br>
							<select name="healthCoverMonths" id="healthCoverMonths" class="input-mini"
							        placeholder="Months">
								<option value="0">0</option>
								<?php for ($j = 1; $j <= 60; $j++) {
									echo '<option value="' . $j . '">' . $j . '</option>';
								}
								?>
							</select>
						</div>
					</td>
					<td align="left" valign="middle" bgcolor="#FFFFFF">
						<div class="control-group span2">
							<div class="span2">
								<input type="radio" name="healthCoverType" value="single"/>
								Single
							</div>
							<div class="span2">
								<input type="radio" name="healthCoverType" value="couple"/>
								Couple
							</div>
							<div class="span2">
								<input type="radio" name="healthCoverType" value="family"/>
								Family
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td align="left" valign="middle" bgcolor="#FFFFFF">Visas Fees AU$<br>

						<div class="input-prepend pull-left"><span class="add-on">$</span>
							<input type="text" class="span2 inst1" name="visaFees" id="visaFees"
							       placeholder="Visa Fees AU$"/>
						</div>
					</td>
					<td align="left" valign="middle" bgcolor="#FFFFFF">Deposit<br>

						<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
							<input type="text" name="deposit" id="deposit" class="span2 inst1"
							       placeholder="Deposit AU$"/>
						</div>
					</td>
					<td align="left" valign="middle" bgcolor="#FFFFFF">(-) Bond<br>

						<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
							<input type="text" name="bond" id="bond" class="span2 inst1" placeholder="If eligible AU$"/>
						</div>
					</td>
					<td align="left" valign="middle" bgcolor="#CCCCCC"><strong>Total Amount Due</strong><br>

						<div class="input-prepend pull-left"><span class="add-on">$</span>
							<input type="text" class="span2 inst1" name="totalAmountDue" id="totalAmountDue"
							       placeholder="Total Amount Due AU$"/>
						</div>
						<br></td>
				</tr>
				<tr>
					<td colspan="4" align="left" valign="middle" bgcolor="#FFFFFF">Notes
						<textarea name="quoteNotes" id="textarea" rows="4" class="span9"></textarea></td>
				</tr>
				<tr>
					<td colspan="4" align="right" valign="middle" bgcolor="#FFFFFF"><a
							class="btn btn-success pull-right" style="cursor:pointer; font-size:11px"
							onclick="addNewInst(2);" title="You can add UP to 4 Instalments" id="addMoreInst">+ Add more
							instalments</a></td>
				</tr>
			</table>
		</td>
		<!-- <td bgcolor="#F2F2F2">&nbsp;</td> -->
	</tr>
	<tr>
	<td colspan="6">
	<div class="moreInstalments" id="moreInstalments2">
		<!-- -->
		<legend>English Course Instalment No. 2 <a class="btn btn-small pull-right" onclick="removeInst(2)"><i
					class="icon-remove-sign"></i> Remove</a></legend>
		<input type="hidden" name="coursesNum[]" value="2"/>
		<table width="100%" border="0" cellpadding="4" cellspacing="1" class="table table-bordered table-hover">
			<tr>
				<td height="0" align="left" valign="middle" bgcolor="#DFEBF4">Payment Fees<br>

					<div class="input-prepend">
						<input name="paymentTitle2" type="text" id="paymentTitle2" placeholder="" maxlength="80">
					</div>
				</td>
				<td height="0" align="left" valign="middle" bgcolor="#DFEBF4">Course Name<br>
					<input type="text" name="courseName2" id="courseName2" class="span2 inst2"/></td>
				<td height="0" colspan="2" bgcolor="#DFEBF4">College Name<br>
					<select class="span2 inst2" name="college2" id="college2">
						<?php
						print($colList);
						//echo "<tt><pre>".var_export($colList,true)."</pre></tt><br />";
						?>
					</select></td>
			</tr>
			<tr>
				<td height="0" align="left" valign="middle" bgcolor="#F2F2F2">New Course Start Date<br>
					<input type="text" name="newCourseStartDate2" id="newCourseStartDate2" class="datePicker span2"
					       title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/></td>
				<td height="0" align="left" valign="middle" bgcolor="#F2F2F2">New Course End Date <br>
					<input type="text" name="newCourseEndDate2" id="newCourseEndDate2" class="datePicker span2"
					       title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/></td>
				<td height="0" bgcolor="#F2F2F2">Holidays Duration (Weeks)<br>
					<select name="holidaysDuration2" id="holidaysDuration2" class="input-mini">
						<option value="0">0</option>
						<?php for ($j = 1; $j <= 8; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select></td>
				<td height="0" bgcolor="#F2F2F2">Time Table<br>
					<select name="courseTimeTable2" class="span2" id="courseTimeTable2">
						<option value="NaN">Choose a Time</option>
						<option value="morning">Morning</option>
						<option value="afternoon">Afternoon</option>
						<option value="evening">Evening</option>
					</select></td>
			</tr>
			<tr>
				<td height="0" bgcolor="#DFEBF4">Cost per Week<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="weeklyCost2" id="weeklyCost2" class="span2 inst2"
						       placeholder="Cost AU$ per Week"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#DFEBF4">Duration (Weeks)<br>
					<select name="courseDuration2" id="courseDuration2" class="input-mini inst2 wk">
						<option value="0">0</option>
						<?php for ($j = 1; $j <= 250; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select></td>
				<td width="0" height="0" colspan="2" bgcolor="#DFEBF4">Enrolment Fee<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" class="span2 inst2" name="courseEnrolmentFee2" id="courseEnrolmentFee2"
						       placeholder="Enrolment Fee AU$"/>
					</div>
				</td>
			</tr>
			<tr>
				<td height="0" bgcolor="#F2F2F2">Materials (AU$)<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="materialsCost2" id="materialsCost2" class="span2 inst2"
						       placeholder="Materials Cost AU$"/>
					</div>
				</td>
				<td height="0" colspan="7" bgcolor="#F2F2F2">Instalment Fee<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="instalmentFee2" id="instalmentFee2" class="input-mini inst2"
						       placeholder="Instalment Fee AU$"/>
					</div>
				</td>
			</tr>
			<tr>
				<td height="0" bgcolor="#DFEBF4">Instalment No. 2<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input name="instTwo" type="text" class="span2 inst2 totalInst" id="instTwo" value="0"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#DFEBF4">Total Instalment No. 2<br>

					<div class="input-prepend pull-left"><span class="add-on">$</span>
						<input name="totalInstTwo" type="text" class="span2 totalInstVal" id="totalInstTwo"
						       placeholder="" value="0"/>
					</div>
				</td>
				<td height="0" bgcolor="#DFEBF4">Inst. 2 - Due Date<br>
					<!-- DUE DATE BEGIN -->
					<input type="text" name="dueDate2" id="dueDate2"
					       class="datePicker span2" title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/>
					<!-- DUE DATE END -->
				</td>
				<td height="0" colspan="5" bgcolor="#DFEBF4"><a class="btn btn-success pull-right"
				                                                style="cursor:pointer; margin-top:1.5em; font-size:11px"
				                                                onclick="addNewInst(3);"
				                                                title="You can add UP to 4 Instalments"
				                                                id="addMoreInst2">+ Add more instalments</a></td>
			</tr>
		</table>
	</div>
	<div class="moreInstalments" id="moreInstalments3">
		<!-- -->
		<legend>English Course Instalment No. 3 <a class="btn btn-small pull-right" onclick="removeInst(3)"><i
					class="icon-remove-sign"></i> Remove</a></legend>
		<input type="hidden" name="coursesNum[]" value="3"/>
		<table width="100%" border="0" cellpadding="4" cellspacing="1" class="table table-bordered table-hover">
			<tr>
				<td height="0" align="left" valign="middle" bgcolor="#DFEBF4">Payment Fees<br>

					<div class="input-prepend">
						<input name="paymentTitle3" type="text" id="paymentTitle3" placeholder="" maxlength="80">
					</div>
				</td>
				<td height="0" align="left" valign="middle" bgcolor="#DFEBF4">Course Name<br>
					<input type="text" name="courseName3" id="courseName3" class="span2 inst3"/></td>
				<td height="0" colspan="2" bgcolor="#DFEBF4">College Name<br>
					<select class="span2 inst3" name="college3" id="college3">
						<?php
						print($colList);
						//echo "<tt><pre>".var_export($colList,true)."</pre></tt><br />";
						?>
					</select></td>
			</tr>
			<tr>
				<td height="0" align="left" valign="middle" bgcolor="#F2F2F2">New Course Start Date<br>
					<input type="text" name="newCourseStartDate3" id="newCourseStartDate3" class="datePicker span2"
					       title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/></td>
				<td height="0" align="left" valign="middle" bgcolor="#F2F2F2">New Course End Date <br>
					<input type="text" name="newCourseEndDate3" id="newCourseEndDate3" class="datePicker span2"
					       title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/></td>
				<td height="0" bgcolor="#F2F2F2">Holidays Duration (Weeks)<br>
					<select name="holidaysDuration3" id="holidaysDuration3" class="input-mini">
						<option value="0">0</option>
						<?php for ($j = 1; $j <= 8; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select></td>
				<td height="0" bgcolor="#F2F2F2">Time Table<br>
					<select name="courseTimeTable3" class="span2" id="courseTimeTable3">
						<option value="NaN">Choose a Time</option>
						<option value="morning">Morning</option>
						<option value="afternoon">Afternoon</option>
						<option value="evening">Evening</option>
					</select></td>
			</tr>
			<tr>
				<td height="0" bgcolor="#DFEBF4">Cost per Week<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="weeklyCost3" id="weeklyCost3" class="span2 inst3"
						       placeholder="Cost AU$ per Week"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#DFEBF4">Duration (Weeks)<br>
					<select name="courseDuration3" id="courseDuration3" class="input-mini inst3 wk">
						<option value="0">0</option>
						<?php for ($j = 1; $j <= 250; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
					</select></td>
				<td width="0" height="0" colspan="2" bgcolor="#DFEBF4">Enrolment Fee<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" class="span2 inst3" name="courseEnrolmentFee3" id="courseEnrolmentFee3"
						       placeholder="Enrolment Fee AU$"/>
					</div>
				</td>
			</tr>
			<tr>
				<td height="0" bgcolor="#F2F2F2">Materials (AU$)<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="materialsCost3" id="materialsCost3" class="span2 inst3"
						       placeholder="Materials Cost AU$"/>
					</div>
				</td>
				<td height="0" colspan="7" bgcolor="#F2F2F2">Instalment Fee<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input type="text" name="instalmentFee3" id="instalmentFee3" class="input-mini inst3"
						       placeholder="Instalment Fee AU$"/>
					</div>
				</td>
			</tr>
			<tr>
				<td height="0" bgcolor="#DFEBF4">Instalment No. 3<br>

					<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
						<input name="instThree" type="text" class="span2 inst3 totalInst" id="instThree" value="0"/>
					</div>
				</td>
				<td width="0" height="0" bgcolor="#DFEBF4">Total Instalment No. 3<br>

					<div class="input-prepend pull-left"><span class="add-on">$</span>
						<input name="totalInstThree" type="text" class="span2 totalInstVal" id="totalInstThree"
						       placeholder="" value="0"/>
					</div>
				</td>
				<td height="0" bgcolor="#DFEBF4">Inst. 3 - Due Date<br>
					<!-- DUE DATE BEGIN -->
					<input type="text" name="dueDate3" id="dueDate3"
					       class="datePicker span2" title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/>
					<!-- DUE DATE END -->
				</td>
				<td height="0" colspan="5" bgcolor="#DFEBF4"><a class="btn btn-success pull-right"
				                                                style="cursor:pointer; margin-top:1.5em; font-size:11px"
				                                                onclick="addNewInst(4);"
				                                                title="You can add UP to 4 Instalments"
				                                                id="addMoreInst4">+ Add more instalments</a></td>
			</tr>
		</table>
	</div>
	<div id="moreQuotes" name="moreQuotes">
		<div class="moreInstalments" id="moreInstalments4">
			<!-- -->
			<legend>English Course Instalment No. 4 <a class="btn btn-small pull-right" onclick="removeInst(4)"><i
						class="icon-remove-sign"></i> Remove</a></legend>
			<input type="hidden" name="coursesNum[]" value="4"/>
			<table width="100%" border="0" cellpadding="4" cellspacing="1" class="table table-bordered table-hover">
				<tr>
					<td height="0" align="left" valign="middle" bgcolor="#DFEBF4">Payment Fees<br>

						<div class="input-prepend">
							<input name="paymentTitle4" type="text" id="paymentTitle4" placeholder="" maxlength="80">
						</div>
					</td>
					<td height="0" align="left" valign="middle" bgcolor="#DFEBF4">Course Name<br>
						<input type="text" name="courseName4" id="courseName4" class="span2 inst4"/></td>
					<td height="0" colspan="2" bgcolor="#DFEBF4">College Name<br>
						<select class="span2 inst4" name="college4" id="college4">
							<?php
							print($colList);
							//echo "<tt><pre>".var_export($colList,true)."</pre></tt><br />";
							?>
						</select></td>
				</tr>
				<tr>
					<td height="0" align="left" valign="middle" bgcolor="#F2F2F2">New Course Start Date<br>
						<input type="text" name="newCourseStartDate4" id="newCourseStartDate4" class="datePicker span2"
						       title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/></td>
					<td height="0" align="left" valign="middle" bgcolor="#F2F2F2">New Course End Date <br>
						<input type="text" name="newCourseEndDate4" id="newCourseEndDate4" class="datePicker span2"
						       title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/></td>
					<td height="0" bgcolor="#F2F2F2">Holidays Duration (Weeks)<br>
						<select name="holidaysDuration4" id="holidaysDuration4" class="input-mini">
							<option value="0">0</option>
							<?php for ($j = 1; $j <= 8; $j++) {
								echo '<option value="' . $j . '">' . $j . '</option>';
							}
							?>
						</select></td>
					<td height="0" bgcolor="#F2F2F2">Time Table<br>
						<select name="courseTimeTable4" class="span2" id="courseTimeTable4">
							<option value="NaN">Choose a Time</option>
							<option value="morning">Morning</option>
							<option value="afternoon">Afternoon</option>
							<option value="evening">Evening</option>
						</select></td>
				</tr>
				<tr>
					<td height="0" bgcolor="#DFEBF4">Cost per Week<br>

						<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
							<input type="text" name="weeklyCost4" id="weeklyCost4" class="span2 inst4"
							       placeholder="Cost AU$ per Week"/>
						</div>
					</td>
					<td width="0" height="0" bgcolor="#DFEBF4">Duration (Weeks)<br>
						<select name="courseDuration4" id="courseDuration4" class="input-mini inst4 wk">
							<option value="0">0</option>
							<?php for ($j = 1; $j <= 250; $j++) {
								echo '<option value="' . $j . '">' . $j . '</option>';
							}
							?>
						</select></td>
					<td width="0" height="0" colspan="2" bgcolor="#DFEBF4">Enrolment Fee<br>

						<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
							<input type="text" class="span2 inst4" name="courseEnrolmentFee4" id="courseEnrolmentFee4"
							       placeholder="Enrolment Fee AU$"/>
						</div>
					</td>
				</tr>
				<tr>
					<td height="0" bgcolor="#F2F2F2">Materials (AU$)<br>

						<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
							<input type="text" name="materialsCost4" id="materialsCost4" class="span2 inst4"
							       placeholder="Materials Cost AU$"/>
						</div>
					</td>
					<td height="0" colspan="7" bgcolor="#F2F2F2">Instalment Fee<br>

						<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
							<input type="text" name="instalmentFee4" id="instalmentFee4" class="input-mini inst4"
							       placeholder="Instalment Fee AU$"/>
						</div>
					</td>
				</tr>
				<tr>
					<td height="0" bgcolor="#DFEBF4">Instalment No. 4<br>

						<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
							<input name="instFour" type="text" class="span2 inst4 totalInst" id="instFour" value="0"/>
						</div>
					</td>
					<td width="0" height="0" bgcolor="#DFEBF4">Total Instalment No. 4<br>

						<div class="input-prepend pull-left"><span class="add-on">$</span>
							<input name="totalInstFour" type="text" class="span2 totalInstVal" id="totalInstFour"
							       placeholder="" value="0"/>
						</div>
					</td>
					<td height="0" bgcolor="#DFEBF4">Inst. 4 - Due Date<br>
						<!-- DUE DATE BEGIN -->
						<input type="text" name="dueDate4" id="dueDate4"
						       class="datePicker span2" title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/>
						<!-- DUE DATE END -->
					</td>
					<td height="0" colspan="6" bgcolor="#DFEBF4">&nbsp;</td>
				</tr>
			</table>
		</div>
	</div>
	<table width="100%" border="0">
		<tr>
			<td bgcolor="#E2E2E2"><strong>Total Study Weeks</strong><br>

				<div class="input-prepend pull-left"><span class="add-on">#</span>
					<input type="text" class="span2 inst1" name="totalStudyWeeks" id="totalStudyWeeks" placeholder=""/>
				</div>
			</td>
			<td bgcolor="#E2E2E2"><strong>Total Instalment(s)</strong><br>

				<div class="input-prepend pull-left"><span class="add-on">$</span>
					<input name="totalInstalmentsVal" type="text" class="span2 inst1" id="totalInstalmentsVal"
					       value="0"/>
				</div>
			</td>
			<td bgcolor="#E2E2E2"><strong>Total Course(s) Fee</strong><br>

				<div class="input-prepend pull-left"><span class="add-on">$</span>
					<input name="totalCoursesFee" type="text" class="span2 inst1" id="totalCoursesFee" placeholder=""
					       value="0"/>
				</div>
			</td>
		</tr>
	</table>
	</td>
	</tr>
	<tr>
		<td colspan="6">
			<div class="form-actions">
<!--				<button type="submit" class="btn btn-danger pull-right" name="submit" id="submit">Save changes</button>-->
				<a href="#myModal" role="button" class="btn btn-primary pull-right" data-toggle="modal">Save changes</a>
				<button type="reset" class="btn btn-warning pull-left">Reset</button>
			</div>
		</td>
	</tr>
	<tr>
		<td style="line-height: 2em;" colspan="6">
			<!--<div class="addProds" id="addMore" onclick="addNew();"> </div>
			 <a style="cursor:pointer;" onclick="addNew();" title="You can add UP to 3 Quotations" id="addMore">+ Add Quote</a>-->

		</td>
	</tr>
	</table>
	</fieldset>
	</td>
	</tr>
	</table>
	<!-- Modal Confirmation Begin -->
	<!-- Modal -->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Adding English Course</h3>
		</div>
		<div class="modal-body">
			<h3>Wait!</h3>
			<p>Are you <strong>100% sure</strong> that the values you've entered are correct??</p>
		</div>
		<div class="modal-footer">
			<div class="form-actions">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Oops! No, I'm not sure</button>
				<button type="submit" class="btn btn-primary pull-right" name="submit" id="submit" >Yes! Absolutely, save changes</button>
			</div>
		</div>
	</div>
	<!-- Modal Confirmation End -->
	</form>
	<!-- SCRIPTS BEGIN -->
	<!-- -->
	<script src="js/jquery-ui.js" type="text/javascript"></script>
	<!-- -->
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<!--	<script src="../js/livevalidation_standalone.js" type="text/javascript"></script>-->
<!--	<link href="../css/validateForm.css" rel="stylesheet" type="text/css"/>-->
	<!-- SCRIPTS END -->
	<script src="../js/admin-forms-js.js" type="text/javascript"></script>
	<script src="js/quotesOps.js" type="text/javascript"></script>
	</body>
	</html>
<?php
} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
