<?php
session_start();
//
date_default_timezone_set("Australia/Sydney");
//
require('classes/database.php');
require('classes/college.php');
//
require('classes/quote.php');
require('classes/person.php');
//
//////////////////////////////////
if (isset($_SESSION['login'])) {
//////////////////////////////////
	$modifBy = $_SESSION['login'];
//var_dump($modifBy);
//
//$db = Database::getInstance();
//$mysqli = $db->getConnection();

//
	if (isset($_POST['submit'])) {
		//$keyVal = $_GET['keyVal'];
		$keyVal = $_POST['email'];
		//$keyVal = 'lala@something.com';
		//
		$searchQuote = new Quote();
		//
		$searchQuote->personID = $_GET['keyVal']; //$_POST['email'];
		//////////////////////////////////
		$searchQuote->searchQuote();
		//
		$result = json_decode($searchQuote->results, TRUE);
		//
		if (!is_null($result)) {
			echo 'the jSon array is NOT empty<br>';
			echo $test['instalmentFee'] . "<br>";
			print_r($result);
		} else echo 'the jSon array IS empty<br>';
//
		if (!is_null($result)) {
			//
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			//
			$searchColleges = 'SELECT entity_name ';
			$searchColleges .= 'FROM education_provider ';
			//$searchColleges .= 'WHERE edu_providerID IN ('.$result['college'].','.$result['college2'].','.$result['college3'].','.$result['college4'].')';
			$searchColleges .= 'WHERE edu_providerID IN (' . $result['college'] . ',' . $result['college2'] . ',' . $result['college3'] . ',' . $result['college4'] . ')';
			//print_r($searchColleges);die();
			//
			$rsColleges = $mysqli->query($searchColleges);
			//
			$resultColleges = $rsColleges->fetch_array();
			//var_dump($resultColleges);die;
			//
			$colleges = array();
			//
			do {
				$colleges[] = $resultColleges['entity_name'];
			} while ($resultColleges = $rsColleges->fetch_array());
			//
		}
	}
//
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>VETA - PAYMENT RECEIPT PREVIEW DATA</title>
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
		<style type="text/css">
			<!--
			.style17 {
				font-size: 16px;
				color: #24205E;
				font-weight: bold;
			}

			. {
				color: #999;
			}

			.hide {
				display: none;
			}

			-->
			.moreInstalments {
				margin-top: 1.5em;
				margin-bottom: 1.5em;
			}
		</style>
	</head>

	<body>
	<!-- /// /// -->
	<?php if ($result['quoteType'] == 'diploma') { ?>
	<form id="createQuoteDiploma" name="createQuoteDiploma" method="post" action="createQuoteDiploma.php">
	<?php } else { ?>
	<form id="createQuote" name="createQuote" method="post" action="createQuote.php">
	<?php } ?>
	<br/>
	<input type="hidden" value="<?php echo $keyVal; ?>" name="eaddress" id="eaddress"/>
	<br/>
	<table width="900" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
	<tr>
		<td>
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td width="211" rowspan="2"><img src="images/logomodulo.gif" alt="" width="194" height="106"
					                                 align="absmiddle"/></td>
					<td align="right" valign="middle">
					</td>
				</tr>
				<tr>
					<td align="center" valign="middle"><h2>VETA STUDENT RECEIPT / RECIBO DE PAGO VETA</h2></td>
				</tr>
			</table>

		</td>
	</tr>
	<!-- -->
	<?php
	if (isset($_POST['submit'])) {
		?>
		<!-- -->
		<tr>
			<td>
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="left" valign="top">
							<div class="pull-left span5">
								<dl class="dl-horizontal">
									<dt><strong>Today's Date</strong></dt>
									<dd><?php echo date('l jS \of F Y h:i:s A'); ?></dd>
									<dt><strong>Student Name</strong></dt>
									<dd><?php echo $personalDetails->firstName . " " . $personalDetails->lastName; ?></dd>
									<dt><strong>Profession</strong></dt>
									<dd><?php if ($personalDetails->profession == '') {
											echo "&nbsp;";
										} else echo $personalDetails->profession; ?></dd>
									<dt><strong>Mobile Phone</strong></dt>
									<dd><?php if ($personalDetails->mobilePhone == '') {
											echo "&nbsp;";
										} else echo $personalDetails->mobilePhone; ?></dd>
									<dt><strong>Email</strong></dt>
									<dd><?php echo $keyVal; ?></dd>
									<dt><strong>Visa Expiry Date</strong></dt>
									<dd><?php if ($expiryDate == '') {
											echo "&nbsp;";
										} else echo $expiryDate; ?></dd>
								</dl>
							</div>
						</td>
						<td align="left" valign="top">
							<div class="pull-right span5">
								<dl class="dl-horizontal">
									<dt><strong>Counsellor</strong></dt>
									<dd><?php echo $personalDetails->stCounsellor; ?></dd>
									<dt><strong>Counsellor Mobile</strong></dt>
									<dd><?php echo "Mobile..."; ?></dd>
									<dt><strong>Counsellor Email</strong></dt>
									<dd><?php echo "Email..."; ?></dd>
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
		<legend>Quotation</legend>
		<input type="hidden" name="quoteNo" value="1" id="quoteNo1"/>
		<table border="0" cellspacing="1" cellpadding="4" class="table table-condensed">

		<tr>
		<td colspan="6">
		<div name="quotation">
			<table border="0" cellspacing="1" cellpadding="4" class="table table-hover">
				<tr>
					<td height="0" colspan="4" align="left" valign="middle" bgcolor="#DFEBF4">
						<div class="input-prepend">
							<span class="add-on"><strong>Quote
									Title:</strong> <?php echo $result['quoteTitle']; ?></span>
							<!-- <input name="quoteTitle" type="text" class="span9" id="prependedInput" placeholder="What are the Courses on this Quote..." maxlength="100"> -->
						</div>
					</td>
				</tr>
				<tr>
					<td width="0" height="0" align="left" valign="middle" bgcolor="#F2F2F2"><strong>Course Name</strong><br>
						<?php echo $result['courseName']; ?>
						<!-- <input type="text" name="courseName" id="courseName" class="span2"  /></td> -->
					<td height="0" colspan="2" align="left" valign="middle" bgcolor="#F2F2F2"><strong>College
							Name</strong><br>
						<?php echo $colleges[0]; ?>
					</td>
					<td width="0" height="0" align="left" valign="middle" bgcolor="#F2F2F2"><strong>Time
							Table</strong><br>
						<?php echo $result['courseTimeTable']; ?>
					</td>
				</tr>
				<tr>
					<td width="0" height="0" bgcolor="#DFEBF4"><strong>Current Course End Date</strong><br>
						<?php echo $result['currentCourseEndDate']; ?>
						<!-- <input type="text" name="currentCourseEndDate" id="currentCourseEndDate"  class="datePicker span2" title="yyyy/mm/dd" /> -->
					</td>
					<td height="0" bgcolor="#DFEBF4"><strong>New Course Start Date</strong><br>
						<?php echo $result['newCourseStartDate']; ?>
						<!-- <input type="text" name="newCourseStartDate" id="newCourseStartDate"  class="datePicker span2" title="yyyy/mm/dd" /> -->
					</td>
					<td height="0" bgcolor="#DFEBF4"><strong>New Course End Date </strong><br>
						<?php echo $result['newCourseEndDate']; ?>
						<!-- <input type="text" name="newCourseEndDate" id="newCourseEndDate"  class="datePicker span2" title="yyyy/mm/dd" /> -->
					</td>
					<td width="0" height="0" bgcolor="#DFEBF4"><strong>Holidays Duration (Weeks)</strong><br>
						<?php echo $result['holidaysDuration']; ?>
						<!--
               <select name="holidaysDuration" id="holidaysDuration" class="input-mini" >
                 <?php for ($j = 1; $j <= 8; $j++) {
							echo '<option value="' . $j . '">' . $j . '</option>';
						}
						?>
               </select>
                -->
					</td>
				</tr>
				<tr>
					<td height="0" colspan="4" bgcolor="#F2F2F2">&nbsp;</td>
				</tr>
				<tr>
					<td width="0" height="0" bgcolor="#DFEBF4"><strong>Cost per Week</strong><br>
						<strong>$</strong><?php echo $result['weeklyCost']; ?>

					</td>
					<td height="0" bgcolor="#DFEBF4"><strong>Duration (Weeks)</strong><br>
						<?php echo $result['courseDuration']; ?>

					</td>
					<td height="0" bgcolor="#DFEBF4"><strong>Number of Instalments</strong><br>
						<?php echo $result['instalmentsNo']; ?>

					</td>
					<td width="0" height="0" bgcolor="#DFEBF4"><strong>Enrolment Fee</strong><br>
						<strong>$</strong><?php echo $result['courseEnrolmentFee']; ?>
					</td>
				</tr>
				<tr>
					<td width="0" height="0" bgcolor="#F2F2F2"><strong>Materials (AU$)</strong><br>
						<strong>$</strong><?php echo $result['materialsCost']; ?>
					</td>
					<td height="0" bgcolor="#F2F2F2"><strong>Deposit</strong><br>
						<strong>$</strong><?php echo $result['deposit']; ?>
					</td>
					<td height="0" bgcolor="#F2F2F2"><strong>Bond</strong><br>
						<strong>$</strong><?php echo $result['bond']; ?>
					</td>
					<td height="0" colspan="3" bgcolor="#F2F2F2"><strong>Instalment Fee</strong><br>
						<strong>$</strong><?php echo $result['instalmentFee']; ?>
					</td>
				</tr>
				<tr>
					<td width="0" height="0" bgcolor="#DFEBF4"></td>
					<td height="0" colspan="2" bgcolor="#DFEBF4"></td>
					<td width="0" height="0" bgcolor="#DFEBF4"></td>
				</tr>
				<tr>
					<td width="0" height="0" bgcolor="#DFEBF4"><strong class="style5">SubTotal Course</strong><br>
						<strong class="style5">$</strong><?php echo $result['courseInstalment']; ?>
					</td>
					<td width="0" height="0" bgcolor="#DFEBF4"><strong class="style5">Total Course Fees</strong><br>
						<strong class="style5">$</strong><?php echo $result['totalCourseFees']; ?>
					</td>
					<td width="0" height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 1</strong><br>
						<strong class="style5">$</strong><?php echo $result['instOne']; ?>
					</td>
					<td height="0" colspan="3" bgcolor="#DFEBF4">

					</td>
				</tr>
			</table>
		</div>
		<!-- Additional Instalments -->
		<?php if ($result['college2'] > 0) { ?>
			<div class="moreInstalments" id="moreInstalments2">
				<!-- -->
				<legend>Instalment 2</legend>
				<table border="0" cellspacing="1" cellpadding="4" class="table table-hover table-condensed">
					<tr>
						<td height="0" bgcolor="#DFEBF4"><strong>Course Name</strong><br>
							<?php echo $result['courseName2']; ?>
							<!-- <input type="text" name="courseName2" id="courseName2" class="span2 inst2"  /> -->
						</td>
						<td width="0" height="0" bgcolor="#DFEBF4"><strong>College Name</strong><br>
							<?php echo $colleges[1]; ?>
						</td>
						<td width="0" height="0" bgcolor="#DFEBF4"><strong>Time Table</strong><br>
							<?php echo $result['courseTimeTable2']; ?>
						</td>
					</tr>
					<tr>
						<td height="0" bgcolor="#F2F2F2"><strong>Holidays Duration (Weeks)</strong><br>
							<?php echo $result['holidaysDuration2']; ?>
							<!--
                          <select name="holidaysDuration2" id="holidaysDuration2" class="input-mini inst2" >
                          <?php for ($j = 1; $j <= 8; $j++) {
								echo '<option value="' . $j . '">' . $j . '</option>';
							}
							?>
                        </select> -->
						</td>
						<td width="0" height="0" bgcolor="#F2F2F2"><strong>New Course Start Date
							</strong><br>
							<?php echo $result['newCourseStartDate2']; ?>
							<!-- <input type="text" name="newCourseStartDate2" id="newCourseStartDate2"  class="datePicker span2" title="yyyy/mm/dd" /> -->
						</td>
						<td width="0" height="0" bgcolor="#F2F2F2"><strong>New Course End Date</strong><br>
							<?php echo $result['newCourseEndDate2']; ?>
							<!-- <input type="text" name="newCourseEndDate2" id="newCourseEndDate2"  class="datePicker span2" title="yyyy/mm/dd" /> -->
						</td>
					</tr>
					<tr>
						<td height="0" bgcolor="#DFEBF4"><strong>Cost per Week</strong><br>
							<strong>$</strong><?php echo $result['weeklyCost2']; ?>
						</td>
						<td width="0" height="0" bgcolor="#DFEBF4"><strong>Duration (Weeks)</strong><br>
							<?php echo $result['courseDuration2']; ?>
						</td>
						<td width="0" height="0" bgcolor="#DFEBF4"><strong>Enrolment Fee</strong><br>
							<strong>$</strong><?php echo $result['courseEnrolmentFee2']; ?>
						</td>
					</tr>
					<tr>
						<td height="0" bgcolor="#F2F2F2"><strong>Materials (AU$)</strong><br>
							<strong>$</strong><?php echo $result['materialsCost2']; ?>
						</td>
						<td width="0" height="0" bgcolor="#F2F2F2"><strong>Instalment Fee</strong><br>
							<strong>$</strong><?php echo $result['instalmentFee2']; ?>
						</td>
						<td height="0" colspan="3" bgcolor="#F2F2F2"></td>
					</tr>
					<tr>
						<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 2</strong><br>
							<strong class="style5">$</strong><?php echo $result['instTwo']; ?>
						</td>
						<td width="0" height="0" bgcolor="#DFEBF4"><p>&nbsp;</p></td>
						<td height="0" colspan="3" bgcolor="#DFEBF4">
							<!-- <a style="cursor:pointer; font-size:11px" onclick="addNewInst(3);" title="You can add UP to 4 Instalments" id="addMoreInst2">+ Add more instalments</a> -->
						</td>
					</tr>
				</table>

			</div>
			<!-- -->
		<?php }
		if ($result['college3'] > 0) { ?>
			<div class="moreInstalments" id="moreInstalments3">
				<!-- -->
				<legend>Instalment 3</legend>

				<table border="0" cellspacing="1" cellpadding="4" class="table table-hover table-condensed">
					<tr>
						<td height="0" bgcolor="#DFEBF4"><strong>Course Name</strong><br>
							<?php echo $result['courseName3']; ?>
							<!-- <input type="text" name="courseName2" id="courseName2" class="span2 inst2"  /> --></td>
						<td width="0" height="0" bgcolor="#DFEBF4"><strong>College Name</strong><br>
							<?php echo $colleges[2]; ?>
							<!--
                          <select  class="span2 inst2" name="college3" id="college3">
                          <?php
							print($colList);
							//echo "<tt><pre>".var_export($colList,true)."</pre></tt><br />";
							?>
                        </select> --></td>
						<td width="0" height="0" bgcolor="#DFEBF4"><strong>Time Table</strong><br>
							<?php echo $result['courseTimeTable3']; ?>
							<!--
		<select name="courseTimeTable2" class="span2 inst2" id="courseTimeTable2">
								  <option value="NaN">Choose a Time</option>
								  <option value="morning">Morning</option>
								  <option value="afternoon">Afternoon</option>
								  <option value="evening">Evening</option>
								</select>
							--></td>
					</tr>
					<tr>
						<td height="0" bgcolor="#F2F2F2"><strong>Holidays Duration (Weeks)</strong><br>
							<?php echo $result['holidaysDuration3']; ?>
							<!--
                          <select name="holidaysDuration3" id="holidaysDuration3" class="input-mini inst2" >
                          <?php for ($j = 1; $j <= 8; $j++) {
								echo '<option value="' . $j . '">' . $j . '</option>';
							}
							?>
                        </select> --></td>
						<td width="0" height="0" bgcolor="#F2F2F2"><strong>New Course Start Date </strong><br>
							<?php echo $result['newCourseStartDate3']; ?>
							<!-- <input type="text" name="newCourseStartDate3" id="newCourseStartDate3"  class="datePicker span3" title="yyyy/mm/dd" /> -->
						</td>
						<td width="0" height="0" bgcolor="#F2F2F2"><strong>New Course End Date</strong><br>
							<?php echo $result['newCourseEndDate3']; ?>
							<!-- <input type="text" name="newCourseEndDate3" id="newCourseEndDate3"  class="datePicker span3" title="yyyy/mm/dd" /> -->
						</td>
					</tr>
					<tr>
						<td height="0" bgcolor="#DFEBF4"><strong>Cost per Week</strong><br>
							<strong>$</strong><?php echo $result['weeklyCost3']; ?></td>
						<td width="0" height="0" bgcolor="#DFEBF4"><strong>Duration (Weeks)</strong><br>
							<?php echo $result['courseDuration3']; ?></td>
						<td width="0" height="0" bgcolor="#DFEBF4"><strong>Enrolment Fee</strong><br>
							<strong>$</strong><?php echo $result['courseEnrolmentFee3']; ?></td>
					</tr>
					<tr>
						<td height="0" bgcolor="#F2F2F2"><strong>Materials (AU$)</strong><br>
							<strong>$</strong><?php echo $result['materialsCost3']; ?></td>
						<td width="0" height="0" bgcolor="#F2F2F2"><strong>Instalment Fee</strong><br>
							<strong>$</strong><?php echo $result['instalmentFee3']; ?></td>
						<td height="0" colspan="3" bgcolor="#F2F2F2"></td>
					</tr>
					<tr>
						<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 3</strong><br>
							<strong class="style5">$</strong><?php echo $result['instThree']; ?></td>
						<td width="0" height="0" bgcolor="#DFEBF4"><p>&nbsp;</p></td>
						<td height="0" colspan="3" bgcolor="#DFEBF4">
							<!-- <a style="cursor:pointer; font-size:11px" onclick="addNewInst(3);" title="You can add UP to 4 Instalments" id="addMoreInst3">+ Add more instalments</a> --></td>
					</tr>
				</table>
			</div>
			<!-- -->
		<?php }
		if ($result['college4'] > 0) { ?>
			<div class="moreInstalments" id="moreInstalments4">
				<!-- -->
				<legend>Instalment 4</legend>
				<table border="0" cellspacing="1" cellpadding="4" class="table table-hover table-condensed">
					<tr>
						<td height="0" bgcolor="#DFEBF4"><strong>Course Name</strong><br>
							<?php echo $result['courseName4']; ?>
							<!-- <input type="text" name="courseName2" id="courseName2" class="span2 inst2"  /> --></td>
						<td width="0" height="0" bgcolor="#DFEBF4"><strong>College Name</strong><br>
							<?php echo $colleges[3]; ?>
							<!--
                          <select  class="span2 inst2" name="college4" id="college4">
                          <?php
							print($colList);
							//echo "<tt><pre>".var_export($colList,true)."</pre></tt><br />";
							?>
                        </select> --></td>
						<td width="0" height="0" bgcolor="#DFEBF4"><strong>Time Table</strong><br>
							<?php echo $result['courseTimeTable4']; ?>
							<!--
		<select name="courseTimeTable4" class="span2 inst2" id="courseTimeTable4">
								  <option value="NaN">Choose a Time</option>
								  <option value="morning">Morning</option>
								  <option value="afternoon">Afternoon</option>
								  <option value="evening">Evening</option>
								</select>
							--></td>
					</tr>
					<tr>
						<td height="0" bgcolor="#F2F2F2"><strong>Holidays Duration (Weeks)</strong><br>
							<?php echo $result['holidaysDuration4']; ?>
							<!--
                          <select name="holidaysDuration4" id="holidaysDuration4" class="input-mini inst2" >
                          <?php for ($j = 1; $j <= 8; $j++) {
								echo '<option value="' . $j . '">' . $j . '</option>';
							}
							?>
                        </select> --></td>
						<td width="0" height="0" bgcolor="#F2F2F2"><strong>New Course Start Date </strong><br>
							<?php echo $result['newCourseStartDate4']; ?>
							<!-- <input type="text" name="newCourseStartDate4" id="newCourseStartDate4"  class="datePicker span3" title="yyyy/mm/dd" /> -->
						</td>
						<td width="0" height="0" bgcolor="#F2F2F2"><strong>New Course End Date </strong><br>
							<?php echo $result['newCourseEndDate4']; ?>
							<!-- <input type="text" name="newCourseEndDate4" id="newCourseEndDate4"  class="datePicker span4" title="yyyy/mm/dd" /> -->
						</td>
					</tr>
					<tr>
						<td height="0" bgcolor="#DFEBF4"><strong>Cost per Week</strong><br>
							<strong>$</strong><?php echo $result['weeklyCost4']; ?></td>
						<td width="0" height="0" bgcolor="#DFEBF4"><strong>Duration (Weeks)</strong><br>
							<?php echo $result['courseDuration4']; ?></td>
						<td width="0" height="0" bgcolor="#DFEBF4"><strong>Enrolment Fee</strong><br>
							<strong>$</strong><?php echo $result['courseEnrolmentFee4']; ?></td>
					</tr>
					<tr>
						<td height="0" bgcolor="#F2F2F2"><strong>Materials (AU$)</strong><br>
							<strong>$</strong><?php echo $result['materialsCost4']; ?></td>
						<td width="0" height="0" bgcolor="#F2F2F2"><strong>Instalment Fee</strong><br>
							<strong>$</strong><?php echo $result['instalmentFee4']; ?></td>
						<td height="0" colspan="3" bgcolor="#F2F2F2"></td>
					</tr>
					<tr>
						<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. 4</strong><br>
							<strong class="style5">$</strong><?php echo $result['instFour']; ?></td>
						<td width="0" height="0" bgcolor="#DFEBF4"><p>&nbsp;</p></td>
						<td height="0" colspan="3" bgcolor="#DFEBF4">
							<!-- <a style="cursor:pointer; font-size:11px" onclick="addNewInst(3);" title="You can add UP to 4 Instalments" id="addMoreInst4">+ Add more instalments</a> --></td>
					</tr>
				</table>
			</div>
			<!-- -->
		<?php } ?>
		<!-- Aditional Instalments END -->
		</td>
		</tr>

		<tr>
			<td colspan="6" bgcolor="#F2F2F2">
				<table class="table table-condensed">

					<tr>
						<td align="left" valign="middle"><strong>Health Fund</strong><br>
							<?php echo $result['healthFund']; ?>
						</td>
						<td align="left" valign="middle"><span class="add-on"><strong>Cost AU$</strong></span><br>
							<strong>$</strong><?php echo $result['mediBankCost']; ?>
						</td>
						<td align="left" valign="middle">
							<div class="pull-left span2">
								<strong>Months</strong><br>
								<?php echo $result['mediBankMonths']; ?>
						</td>
						<td align="left" valign="middle"><span class="add-on"><strong>Health Cover
									Type</strong></span><br>
							<?php echo $result['healthCoverType']; ?>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="left" valign="middle"><strong>Visas Fees AU$</strong><br>
							<strong>$</strong><?php echo $result['visaFees']; ?>
						</td>
						<td colspan="2" align="left" valign="middle" bgcolor="#CCCCCC"><strong class="style5">Total
								Amount Due<br>
								$</strong>                        <?php $totalDue = $result['instOne'] + $result['mediBankCost'] + $result['visaFees'] + $result['deposit'] - $result['bond'];
							echo $totalDue; ?>
						</td>
					</tr>
					<tr>
						<td colspan="4" align="left" valign="middle"><strong>Notes</strong><br>

							<div style="width:450px; height:120px; display:block;">
								<?php echo $result['quoteNotes']; ?>
							</div>
						</td>
					</tr>
				</table>
			</td>
			<!-- <td bgcolor="#F2F2F2">&nbsp;</td> -->
		</tr>
		<tr>
			<td colspan="6">
				<div class="form-actions pull-right">
					<button type="submit" class="btn btn-success btn-large" name="submit" id="submit">Create Quotation
					</button>
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
	<?php } ?>
	</table>
	</form>
	<!-- -->
	<form class="form-search" action="" method="post">
		<div class="control-group">
			<label class="control-label" for="inputIcon">Email address</label>

			<div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-envelope"></i></span>
					<input class="span2" id="inputIcon" name="email" id="email" type="text">
					<button type="submit" id="submit" name="submit" class="btn">Search</button>
				</div>
			</div>
		</div>
	</form>
	<!-- SCRIPTS BEGIN -->
	<!-- -->
	<script src="js/jquery-ui.js" type="text/javascript"></script>
	<!-- -->
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<script src="../js/livevalidation_standalone.js" type="text/javascript"></script>
	<link href="../css/validateForm.css" rel="stylesheet" type="text/css"/>
	<!-- SCRIPTS END -->
	<script src="../js/admin-forms-js.js" type="text/javascript"></script>
	<!-- <script src="js/quotesOps.js" type="text/javascript"></script> -->
	</body>
	</html>
<?php
} else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
