<?php
	session_start();
	require 'inc/newDiploma.php';
	//
	if (isset($_SESSION['login'])) {
	//////////////////////////////////
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Main Admin Menu :: VETA</title>
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<!--	<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script> -->
		<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
		<style type="text/css">
			.moreInstalments {
				margin-top: 1.5em;
				margin-bottom: 1.5em;
			}

			.hideRow {
				display: none;
			}

			.showRow {
				display: block;
			}
		</style>
	</head>

	<body>
	<!-- /// /// -->
	<form id="insertClient" name="insertClient" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	<br/>
	<input type="hidden" value="<?php echo $keyVal; ?>" name="eaddress" id="eaddress"/>
	<input type="hidden" value="Diploma" name="quoteType" id="quoteType"/>
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
					<td align="center" valign="middle"><h2>DIPLOMA + ADVANCED DIPLOMA </h2></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td align="left" valign="top">
						<div class="pull-left span5">
							<dl class="dl-horizontal">
								<dt><strong>Today's Date</strong></dt>
								<dd><?php echo date('l jS \of F Y h:i:s A'); ?></dd>
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
	<!-- DILOMA 1 BEGING -->
	<tr>
	<td align="left" valign="top">
	<fieldset></fieldset>
	<legend>New Diploma</legend>
	<input type="hidden" name="quoteNo" value="1" id="quoteNo1"/>
	<table width="100%" border="0" cellpadding="4" cellspacing="1" class="table">
	<tr>
	<td colspan="6">
	<div name="quotation">
	<table width="100%" border="0" cellpadding="4" cellspacing="1" class="table table-bordered">
		<tr>
			<td height="0" align="left" valign="middle" bgcolor="#DFEBF4">

			</td>
			<td height="0" align="left" valign="middle" bgcolor="#DFEBF4">Payment Fees<br>

				<div class="input-prepend">
					<input name="paymentTitle" type="text" id="paymentTitle" placeholder="" maxlength="80">
				</div>
			</td>
			<td height="0" align="left" valign="middle" bgcolor="#DFEBF4">Course Name<br>
				<input type="text" name="courseName" id="courseName" class="span2"/>
			</td>
			<td height="0" align="left" valign="middle" bgcolor="#DFEBF4">College Name<br>
				<select class="span2" name="college" id="college">
					<?php print($colList); ?>
				</select>
			</td>
		</tr>
		<tr>
			<td height="0" align="left" valign="middle" bgcolor="#F2F2F2">New Course Start Date<br>
				<input type="text" name="newCourseStartDate" id="newCourseStartDate" class="datePicker span2"
				       title="dd-mm-yyyy"/>
			</td>
			<td height="0" align="left" valign="middle" bgcolor="#F2F2F2">New Course End Date <br>
				<input type="text" name="newCourseEndDate" id="newCourseEndDate" class="datePicker span2"
				       title="dd-mm-yyyy"/></td>
			<td height="0" bgcolor="#F2F2F2">Holidays Duration (Weeks)<br>
				<select name="holidaysDuration" id="holidaysDuration" class="input-mini">
					<option value="0">0</option>
					<?php for ($j = 1; $j <= 8; $j++) {
						echo '<option value="' . $j . '">' . $j . '</option>';
					}
					?>
				</select>
			</td>
			<td height="0" bgcolor="#F2F2F2">Time Table<br>
				<select name="courseTimeTable" class="span2" id="courseTimeTable">
					<option value="NaN">Choose a Time</option>
					<option value="morning">Morning</option>
					<option value="afternoon">Afternoon</option>
					<option value="evening">Evening</option>
				</select>
			</td>
		</tr>
		<tr>
			<td width="0" height="0" bgcolor="#DFEBF4">Cost per Term<br>

				<div class="input-prepend pull-left" style="margin-right:2em;">
					<span class="add-on">$</span>
					<input type="text" name="weeklyCost" id="weeklyCost" class="span2 inst1"
					       placeholder="Cost AU$ per Term"/>
				</div>
			</td>
			<td height="0" bgcolor="#DFEBF4">Duration (Terms)<br>
				<select name="courseDuration" id="courseDuration" class="input-mini inst1 wk">
					<option value="0">0</option>
					<?php for ($j = 1; $j <= 12; $j++) {
						echo '<option value="' . $j . '">' . $j . '</option>';
					}
					?>
				</select>
			</td>
			<td height="0" bgcolor="#DFEBF4">Number of Instalments<br>
				<div name="dpInstalmentsNo" id="dpInstalmentsNo" class="input-mini inst1"></div>
				<input type="hidden" name="instalmentsNo" id="instalmentsNo" value="" />
			</td>
			<td width="0" height="0" bgcolor="#DFEBF4"></td>
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
			<td height="0" bgcolor="#F2F2F2">Instalment Fee<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="instalmentFee" id="instalmentFee" class="input-mini inst1"
					       placeholder="Instalment Fee AU$"/>
				</div>
			</td>
			<td height="0" colspan="3" bgcolor="#F2F2F2"></td>
		</tr>

		<tr>
			<td width="0" height="0" bgcolor="#DFEBF4"><strong>Instalment No. 1</strong>
				<br>
				<div class="input-prepend pull-left" style="margin-right:2em;">
					<span class="add-on">$</span>
					<input type="text" name="instOne" id="instOne" class="span2 inst1" value="0"/>
				</div>
			</td>
			<td width="0" height="0" bgcolor="#DFEBF4"><strong>Total Instalment No. 1</strong>
				<br>

				<div class="input-prepend pull-left"><span class="add-on">$</span>
					<input name="totalInstOne" type="text" class="span2 totalInstVal" id="totalInstOne" placeholder=" "
					       value="0"/>
				</div>
			</td>
			<td width="0" height="0" bgcolor="#DFEBF4">
				<strong>Inst.1 - Due Date</strong><br>
				<!-- DUE DATE BEGIN -->
				<input type="text" name="dueDate1" id="dueDate1"
				       class="datePicker span2" title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/>
				<!-- DUE DATE END -->
			</td>
			<td height="0" colspan="3" bgcolor="#DFEBF4">&nbsp;</td>
		</tr>
	</table>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-bordered">
		<tr>
			<td align="left" valign="middle" bgcolor="#FFFFFF">Health Cover<br>
				<select name="healthFund" id="healthFund" class="span3">
					<option value=" ">:: Select One ::</option>
					<option value="n/a">N/A</option>
					<option value="Medibank">Medibank</option>
					<option value="Bupa">Bupa</option>
					<option value="oshc">OSHC</option>
			</td>
			<td align="left" valign="middle" bgcolor="#FFFFFF"><span class="add-on">Cost AU$</span><br>

				<div class="input-prepend pull-left"><span class="add-on">$</span>
					<input type="text" class="span2 inst1" name="healthCost" id="healthCost" placeholder="Cost AU$"/>
				</div>
			</td>
			<td align="left" valign="middle" bgcolor="#FFFFFF">
				<div class="pull-left span2"> Months<br>
					<select name="healthCoverMonths" id="healthCoverMonths" class="input-mini" placeholder="Months">
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
					<input type="text" class="span2 inst1" name="visaFees" id="visaFees" placeholder="Visa Fees AU$"/>
				</div>
			</td>
			<td align="left" valign="middle" bgcolor="#FFFFFF">Deposit<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="deposit" id="deposit" class="span2 inst1" placeholder="Deposit AU$"/>
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
			<!--
			<td colspan="4" align="right" valign="middle" bgcolor="#FFFFFF">
				<a class="btn btn-success pull-right" style="cursor:pointer; font-size:11px" onclick="addNewInst(2);" title="You can add UP to 4 Instalments" id="addMoreInst">+ Add another diploma</a>
			</td>
			-->
		</tr>
	</table>
	<table width="100%" class="table table-bordered table-hover">
		<tr>
			<td width="29%" height="0" id="inst2" class="hideRow">Instalment No. 2<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="inst2" id="inst2" value="0.00" class="span2 inst1 instadd" placeholder="0"/>
				</div>
			</td>
			<td width="30%" height="0" id="mats2" class="hideRow">Materials (AU$) No. 2<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="mats2" id="mats2" value="0.00" class="span2 inst1 instadd"
					       placeholder="Materials Cost AU$"/>
				</div>
			</td>
			<td width="30%" height="0"  id="due2" class="hideRow">
				Inst.2 - Due Date<br>
				<!-- DUE DATE BEGIN -->
				<input type="text" name="dueDate2" id="dueDate2"
				       class="datePicker span2" title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/>
				<!-- DUE DATE END -->
			</td>
		</tr>
		<tr class="table table-hover">
			<td height="0" id="inst3" class="hideRow">Instalment No. 3<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="inst3" id="inst3" value="0.00" class="span2 inst1 instadd" placeholder="0"/>
				</div>
			</td>
			<td height="0" id="mats3" class="hideRow">Materials (AU$) No. 3<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="mats3" value="0.00" id="mats3" class="span2 inst1 instadd"
					       placeholder="Materials Cost AU$"/>
				</div>
			</td>
			<td height="0"  id="due3" class="hideRow">
				Inst.3 - Due Date<br>
				<!-- DUE DATE BEGIN -->
				<input type="text" name="dueDate3" id="dueDate3"
				       class="datePicker span2" title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/>
				<!-- DUE DATE END -->
			</td>
		</tr>
		<tr class="table table-hover">
			<td height="0" id="inst4" class="hideRow">Instalment No. 4<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="inst4" value="0.00"  id="inst4" class="span2 inst1 instadd" placeholder="0"/>
				</div>
			</td>
			<td height="0" id="mats4" class="hideRow">Materials (AU$) No. 4<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="mats4" value="0.00"  id="mats4" class="span2 inst1 instadd"
					       placeholder="Materials Cost AU$"/>
				</div>
			</td>
			<td height="0"  id="due4" class="hideRow">
				Inst.4 - Due Date<br>
				<!-- DUE DATE BEGIN -->
				<input type="text" name="dueDate4" id="dueDate4"
				       class="datePicker span2" title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/>
				<!-- DUE DATE END -->
			</td>
		</tr>
		<tr class="table table-hover">
			<td height="0" id="inst5" class="hideRow">Instalment No. 5<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="inst5" value="0.00"  id="inst5" class="span2 inst1" placeholder="0"/>
				</div>
			</td>
			<td height="0" id="mats5" class="hideRow">Materials (AU$) No. 5<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="mats5" value="0.00"  id="mats5" class="span2 inst1" placeholder="Materials Cost AU$"/>
				</div>
			</td>
			<td height="0"  id="due5" class="hideRow">
				Inst.5 - Due Date<br>
				<!-- DUE DATE BEGIN -->
				<input type="text" name="dueDate5" id="dueDate5"
				       class="datePicker span2" title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/>
				<!-- DUE DATE END -->
			</td>
		</tr>
		<tr class="table table-hover">
			<td height="0" id="inst6" class="hideRow">Instalment No. 6<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="inst6" value="0.00"  id="inst6" class="span2 inst1" placeholder="0"/>
				</div>
			</td>
			<td height="0" id="mats6" class="hideRow">Materials (AU$) No. 6<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="mats6" value="0.00"  id="mats6" class="span2 inst1" placeholder="Materials Cost AU$"/>
				</div>
			</td>
			<td height="0"  id="due6" class="hideRow">
				Inst.6 - Due Date<br>
				<!-- DUE DATE BEGIN -->
				<input type="text" name="dueDate6" id="dueDate6"
				       class="datePicker span2" title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/>
				<!-- DUE DATE END -->
			</td>
		</tr>
		<tr class="table table-hover">
			<td height="0" id="inst7" class="hideRow">Instalment No. 7<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="inst7" value="0.00"  id="inst7" class="span2 inst1" placeholder="0"/>
				</div>
			</td>
			<td height="0" id="mats7" class="hideRow">Materials (AU$) No. 7<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="mats7" value="0.00"  id="mats7" class="span2 inst1" placeholder="Materials Cost AU$"/>
				</div>
			</td>
			<td height="0"  id="due7" class="hideRow">
				Inst.7 - Due Date<br>
				<!-- DUE DATE BEGIN -->
				<input type="text" name="dueDate7" id="dueDate5"
				       class="datePicker span2" title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/>
				<!-- DUE DATE END -->
			</td>
		</tr>
		<tr class="table table-hover">
			<td height="0" id="inst8" class="hideRow">Instalment No. 8<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="inst8" value="0.00"  id="inst8" class="span2 inst1 instclass" placeholder="0"/>
				</div>
			</td>
			<td height="0" id="mats8" class="hideRow">Materials (AU$) No. 8<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="mats8" value="0.00"  id="mats8" class="span2 inst1" placeholder="Materials Cost AU$"/>
				</div>
			</td>
			<td height="0"  id="due8" class="hideRow">
				Inst.8 - Due Date<br>
				<!-- DUE DATE BEGIN -->
				<input type="text" name="dueDate8" id="dueDate8"
				       class="datePicker span2" title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/>
				<!-- DUE DATE END -->
			</td>
		</tr>
		<tr class="table table-hover">
			<td height="0" id="inst9" class="hideRow">Instalment No. 9<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="inst9" value="0.00"  id="inst9" class="span2 inst1" placeholder="0"/>
				</div>
			</td>
			<td height="0" id="mats9" class="hideRow">Materials (AU$) No. 9<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="mats9" value="0.00"  id="mats9" class="span2 inst1" placeholder="Materials Cost AU$"/>
				</div>
			</td>
			<td height="0"  id="due9" class="hideRow">
				Inst.9 - Due Date<br>
				<!-- DUE DATE BEGIN -->
				<input type="text" name="dueDate9" id="dueDate9"
				       class="datePicker span2" title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/>
				<!-- DUE DATE END -->
			</td>
		</tr>
		<tr class="table table-hover">
			<td height="0" id="inst10" class="hideRow">Instalment No. 10<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="inst10" value="0.00"  id="inst10" class="span2 inst1" placeholder="0"/>
				</div>
			</td>
			<td height="0" id="mats10" class="hideRow">Materials (AU$) No. 10<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="mats10" value="0.00"  id="mats10" class="span2 inst1" placeholder="Materials Cost AU$"/>
				</div>
			</td>
			<td height="0"  id="due10" class="hideRow">
				Inst.10 - Due Date<br>
				<!-- DUE DATE BEGIN -->
				<input type="text" name="dueDate10" id="dueDate10"
				       class="datePicker span2" title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/>
				<!-- DUE DATE END -->
			</td>
		</tr>
		<tr class="table table-hover">
			<td height="0" id="inst11" class="hideRow">Instalment No. 11<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="inst11" value="0.00"  id="inst11" class="span2 inst1" placeholder="0"/>
				</div>
			</td>
			<td height="0" id="mats11" class="hideRow">Materials (AU$) No. 11<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="mats11" value="0.00"  id="mats11" class="span2 inst1" placeholder="Materials Cost AU$"/>
				</div>
			</td>
			<td height="0"  id="due11" class="hideRow">
				Inst.11 - Due Date<br>
				<!-- DUE DATE BEGIN -->
				<input type="text" name="dueDate11" id="dueDate11"
				       class="datePicker span2" title="dd-mm-yyyy" placeholder="dd-mm-yyyy"/>
				<!-- DUE DATE END -->
			</td>
		</tr>
		<tr class="table table-hover">
			<td height="0" id="inst12" class="hideRow">Instalment No. 12<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="inst12" value="0.00" id="inst12" class="span2 inst1" placeholder="0"/>
				</div>
			</td>
			<td height="0" id="mats12" class="hideRow">Materials (AU$) No. 12<br>

				<div class="input-prepend pull-left" style="margin-right:2em;"><span class="add-on">$</span>
					<input type="text" name="mats12" value="0.00"  id="mats12" class="span2 inst1" placeholder="Materials Cost AU$"/>
				</div>
			</td>
			<td height="0"  id="due12" class="hideRow">
				Inst.10 - Due Date<br>
				<!-- DUE DATE BEGIN -->
				<input type="text" name="dueDate12" id="dueDate12"
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
			<script type="text/javascript">
				$('#courseDuration').change(function() {
					var terms = $('#courseDuration').val();
					$('#instalmentsNo').val(terms);
					$('#instalmentsNo').html('<strong>'+terms+'</strong>');
					var i = 1;
					for (i; i<=terms; i++){
						$('#inst'+i).attr('class','');
						$('#mats'+i).attr('class','');
						$('#due'+i).attr('class','');
					}
				});
			</script>
			<script type="text/javascript">
				$('.addinst1[:input]').change(function() {
					alert('???\n');
				})
			</script>
		</td>
		<!-- <td bgcolor="#F2F2F2">&nbsp;</td> -->
	</tr>
	<!-- DIPLOMA 1 - END -->
	</table>
	</div>
	<table width="100%" border="0" class="table table-bordered">
		<tr>
			<td bgcolor="#E2E2E2"><strong>Total Study Terms</strong><br>

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
	<div class="form-actions">
		<!-- <button type="submit" class="btn btn-primary pull-right" name="submit" id="submit">Save changes</button> -->
		<a href="#myModal" role="button" class="btn btn-primary pull-right" data-toggle="modal">Save changes</a>
		<button type="reset" class="btn btn-warning pull-left">Reset</button>
	</div>
	</div>
	</td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	<tr>
		<td style="line-height: 2em;" colspan="6">
			<!--<div class="addProds" id="addMore" onclick="addNew();"> </div>
			 <a style="cursor:pointer;" onclick="addNew();" title="You can add UP to 3 Quotations" id="addMore">+ Add Quote</a>-->
			<script type="text/javascript">
				$('.addinst')
			</script>
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
			<h3 id="myModalLabel">Adding Diploma</h3>
		</div>
		<div class="modal-body">
			<h3>Wait!</h3>
			<p>Are you <strong>100% sure</strong> that the values you've entered are correct??</p>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Oops! No, I'm not sure</button>
			<button type="submit" class="btn btn-primary pull-right" name="submit" id="submit" >Yes! Absolutely, save changes</button>
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
	<!-- <script src="../js/livevalidation_standalone.js" type="text/javascript"></script> -->
<!--	<link href="../css/validateForm.css" rel="stylesheet" type="text/css"/>-->
	<!-- SCRIPTS END -->
	<script src="../js/admin-forms-js.js" type="text/javascript"></script>
	<!-- <script src="js/quotesOps.js" type="text/javascript"></script> -->
	<script src="js/dipOps.js" type="text/javascript"></script>
	</body>
	</html>
<?php
} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
