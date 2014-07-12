<div id="moreQuotes" name="moreQuotes">
<!-- Additional Instalments -->
<?php
$i = $courseNo;

//if ($courseNo > 1 /*&& $paymentResult->results['college'.$i] > 0*/ )
/*
{

  switch ($courseNo) {
	case 2:
	  $receipt = $paymentResult['receiptTwo'];
	  $instNo = $paymentResult['instTwo'];
	  $totalInst = $totalInstTwo;
	break;

	case 3:
	  $receipt = $paymentResult['receiptThree'];
	  $instNo = $paymentResult['instThree'];
	  $totalInst = $totalInstThree;
	break;

	case 4:
	  $receipt = $paymentResult['receiptFour'];
	  $instNo = $paymentResult['instFour'];
	  $totalInst = $totalInstFour;
	break;
  }*/
?>
<div class="moreInstalments" id="moreInstalments<?php echo $i; ?>">
<fieldset>
<!-- -->
<legend>English Course Instalment No. <?php echo $i; ?></legend>
<input type="hidden" name="courseEntry" id="courseEntry" value="<?php echo $i; ?>"/>
<input type="hidden" name="prevID" id="prevID" value="<?php echo $pID; ?>"/>
<input type="hidden" name="courseType" id="courseType" value="english"/>
<input type="hidden" name="receipt_number" id="receipt_number" value="<?php echo $result['receipt_number']; ?>"/>
<table width="100%" border="0" cellpadding="4" cellspacing="1" class="table table-bordered">
	<tr>
		<td height="0" colspan="2" align="left" valign="middle" bgcolor="#F2F2F2">
			<!-- <div class="input-group"><span class="add-on"><strong>Receipt
						Number:</strong> <?php echo $receipt; ?></span> -->
				<!-- <input name="quoteTitle" type="text" class="span9" id="prependedInput" placeholder="What are the Courses on this Quote..." maxlength="100"> 
			</div> -->
		</td>
		<td height="0" colspan="2" align="left" valign="middle" bgcolor="#F2F2F2">
			<div class="input-group"><span class="add-on"><strong>Payment
						Fees:</strong> <?php echo $paymentResult['paymentTitle' . $i]; ?></span>
				<!-- <input name="quoteTitle" type="text" class="span9" id="prependedInput" placeholder="What are the Courses on this Quote..." maxlength="100"> -->
			</div>

		</td>
	</tr>
	<tr>
		<td height="0" bgcolor="#DFEBF4"><strong>Course Name</strong><br>
			<?php echo $paymentResult['courseName' . $i]; ?>
			<input type="hidden" id="courseName" name="courseName"
			       value='<?php echo $paymentResult['courseName' . $i]; ?>'/>
			<!-- <input type="text" name="courseName<?php echo $i; ?>" id="courseName<?php echo $i; ?>" class="span2 inst<?php echo $i; ?>"  /> -->
		</td>
		<td width="0" height="0" bgcolor="#DFEBF4"><strong>College Name</strong><br>
			<?php echo $colleges; ?>
			<input type="hidden" id="college" name="college" value='<?php echo $colleges; ?>'/>
		</td>
		<td width="0" height="0" bgcolor="#DFEBF4"><strong>Time Table</strong><br>
			<?php echo $paymentResult['courseTimeTable' . $i]; ?></td>
	</tr>
	<tr>
		<td height="0" bgcolor="#F2F2F2"><strong>New Course Start Date </strong><br>
			<?php echo $paymentResult['newCourseStartDate' . $i]; ?>
			<input type="hidden" id="intakeDate" name="intakeDate"
			       value='<?php echo $paymentResult['newCourseStartDate' . $i]; ?>'/>
		</td>
		<td width="0" height="0" bgcolor="#F2F2F2"><strong>New Course End Date</strong><br>
			<?php echo $paymentResult['newCourseEndDate' . $i]; ?>
			<!-- <input type="text" name="newCourseEndDate<?php echo $i; ?>" id="newCourseEndDate<?php echo $i; ?>"  class="datePicker span2" title="yyyy/mm/dd" /> -->
		</td>
		<td width="0" height="0" bgcolor="#F2F2F2"><strong>Holidays Duration (Weeks)</strong><br>
			<?php echo $paymentResult['holidaysDuration' . $i]; ?>
		</td>
	</tr>
	<tr>
		<td height="0" bgcolor="#DFEBF4"><strong>Cost per Week</strong><br>
			<strong>$</strong><?php echo $paymentResult['weeklyCost' . $i]; ?></td>
		<td width="0" height="0" bgcolor="#DFEBF4"><strong>Duration (Weeks)</strong><br>
			<?php echo $paymentResult['courseDuration' . $i]; ?></td>
		<td width="0" height="0" bgcolor="#DFEBF4"></td>
	</tr>
	<tr>
		<td height="0" bgcolor="#F2F2F2"><strong>Enrolment Fee</strong><br>
			<strong>$</strong><?php echo $paymentResult['courseEnrolmentFee' . $i]; ?>
			<input type="hidden" id="courseEnrolmentFee" name="courseEnrolmentFee" value="<?php echo $paymentResult['courseEnrolmentFee' . $i]; ?>"/>
		</td>
		<td width="0" height="0" bgcolor="#F2F2F2"><strong>Materials (AU$)</strong><br>
			<strong>$</strong><?php echo $paymentResult['materialsCost' . $i]; ?>
			<input type="hidden" id="materialsCost" name="materialsCost" value="<?php echo $paymentResult['materialsCost' . $i]; ?>"/>
		</td>
		<td height="0" colspan="3" bgcolor="#F2F2F2"><strong>Instalment Fee</strong><br>
			<strong>$</strong><?php echo $paymentResult['instalmentFee' . $i]; ?>
			<input type="hidden" id="instalmentFee" name="instalmentFee" value="<?php echo $paymentResult['instalmentFee' . $i]; ?>"/>
		</td>
	</tr>
	<tr>
		<td height="0" bgcolor="#DFEBF4"><strong class="style5">Instalment No. <span
					class="badge badge-important"><?php echo $i; ?></span> </strong><br>
			<strong class="style5">$</strong><?php echo $instNo; ?>
			<input type="hidden" name="instalment" id="instalment" value="<?php echo $instNo; ?>"/>
		</td>
		<td width="0" height="0" bgcolor="#DFEBF4"><strong class="style5">Total Instalment No. <span
					class="badge badge-important"><?php echo $i; ?></span> </strong><br>
			<strong class="style5">$</strong><?php echo $totalInst; ?></td>
		<td height="0" colspan="3" bgcolor="#DFEBF4">
			<!-- DUE DATE BEGIN -->
			<strong class="style5">Payment Due Date: <span class="badge badge-inverse"><?php echo $dueDate; ?></span></strong>
			<!-- DUE DATE END -->
		</td>
	</tr>
</table>
<table width="100%" class="table table-bordered">
	<tr>
		<td height="0" colspan="<?php echo "3";//$i; ?>" align="left" valign="middle">&nbsp;</td>
		<td align="left" valign="middle" bgcolor="#CCCCCC"><strong class="style5">Total Amount Due<br>
				$</strong> <?php echo $totalInst; ?>
			<?php
			if (empty($result['amount_outstanding'])) {
				?>
				<input type="hidden" name="totalAmount" id="totalAmount" value="<?php echo $totalInst; ?>"/>
			<?php
			} else {
				?>
				<input type="hidden" name="totalAmount" id="totalAmount"
				       value="<?php echo $result['amount_outstanding']; ?>"/>
			<?php } ?>
		</td>
	</tr>
	<tr>
		<td colspan="<?php echo "3";//$i; ?>" align="left" valign="middle"><strong>Amount Paid AU$</strong><br/>

			<div class="input-prepend input-append"><span class="add-on">$</span>
				<?php
				if ($result['courseEntry'] == $i && $result['amount_paid'] != '') {
					?>
					<input type="text" class="span2 inst1" name="amountPay<?php echo $i; ?>"
					       id="amountPay" <?php echo "placeholder='" . $result['amount_paid'] . "'"; ?>  />
				<?php } else { ?>
					<input type="text" class="span2 inst1" name="amountPay<?php echo $i; ?>" id="amountPay"
					       placeholder="Amount Paid AU$"/>
				<?php } ?>
			</div>
		</td>
		<td colspan="<?php echo $i; ?>" align="left" valign="middle" bgcolor="#FFCCCC"><strong>Amount Outstanding
				AU$</strong><br>

			<div class="input-prepend input-append"><span class="add-on">$</span>
				<?php if ($result['courseEntry'] == $i && $result['amount_paid'] != '') { ?>
					<input type="text" class="span2 inst1" name="amountOutstanding"
					       id="amountOutstanding" <?php echo "placeholder='" . $result['amount_outstanding'] . "'"; ?> />
				<?php } else { ?>
					<input type="text" class="span2 inst1" name="amountOutstanding" id="amountOutstanding"
					       placeholder="Amount Outstanding AU$"/>
				<?php } ?>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="left" valign="middle"><strong>Comments:</strong>
			<textarea name="receiptNotes" id="receiptNotes" rows="4" class="span6"
			          placeholder="<?php echo $result['payment_comments']; ?>"></textarea>
			<br></td>
	</tr>
	<tr>
		<td width="29%" align="left" valign="middle"><strong>Received By:</strong>
			<?php if ($result['courseEntry'] == 1 && $result['amount_paid'] != '') { ?>
				<input type="text" class="span3 inst1" name="receivedBy" id="receivedBy"
				       placeholder="<?php echo $result['received_by']; ?>"/>
				<br/>
			<?php } else { ?>
				<input type="text" class="span3 inst1" name="receivedBy" id="receivedBy"
				       placeholder="in VETA Received By: "/>
			<?php } ?>
		</td>
		<td colspan="3" align="left" valign="middle">
			<?php if (!empty($result['amount_paid'])) { ?>
				<button type="button" class="btn btn-info pull-left" name="submit" id="printReceipt"
				        onClick="previousReceipt(<?php echo $result['receipt_number']; ?>)">Create Pay Receipt
				</button>
			<?php } ?>
			<button type="button" class="btn btn-warning pull-right" name="submit" id="submit"
			        onClick="paymentReceipt(1)">Create New Pay Receipt
			</button>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="left" valign="middle"></td>
	</tr>
</table>
<!-- */* -->
<!-- // -->
<table width="100%" class="table table-bordered">
	<div class="control-group">
		<tr>
			<td align="left" valign="middle">
				<label>Payment
					<input type="hidden" name="invNumber[]" id="invNumber" value=""/>
				</label>
				<input type="text" id="paimentFee" class="field" name="payments" value=""/>
			</td>
			<td align="left" valign="middle">
				<label>Commission Rate</label>

				<div class="input-prepend">
					<span class="add-on">%</span>
					<input type="text" id="commisionRate" class="span1" name="commisionRate"/>
				</div>
			</td>
			<td align="left" valign="middle">
				<label>Commission Value</label>

				<div class="input-prepend">
					<span class="add-on">$</span>
					<input type="text" id="commisionVal" class="span2" name="commisionVal"/>
				</div>
			</td>
			<td align="left" valign="middle">
				<label>GST(10%)</label>

				<div class="input-prepend">
					<span class="add-on">$</span>
					<input type="text" class="span2" name="GSTexc" id="GSTexc"/>
				</div>
			</td>
			<td align="left" valign="middle">
				<label>Comm + GST </label>

				<div class="input-prepend">
					<span class="add-on">$</span>
					<input type="text" class="field" id="GSTinc" name="GSTinc"/>
				</div>
			</td>
		</tr>
		<tr>
			<td align="left" valign="middle">
				<label>Invoice No.</label>
				<input type="text" class="field" name="InvoiceNumber" id="InvoiceNumber"/>
			</td>
			<td align="left" valign="middle">
				<label>Comm. Deducted Upfront</label>
				<input name="CommDeducted" id="CommDeducted" type="checkbox"/>
			</td>
			<td align="left" valign="middle">
				<label>Student Payment Due Date</label>
				<span class="label label-important"><?php echo $dueDate; ?></span>
				<input type="hidden" name="PaymentDateDue" id="PaymentDateDue" value="<?php echo $dueDate;?>"/>
			</td>
			<td align="left" valign="middle">
				<label>Student Paid Date</label>
				<input type="text" name="StudentPaidDate" id="StudentPaidDate" class="datePicker field"
				       placeholder="dd-mm-yyyy"/>
			</td>
			<td align="left" valign="middle">
				<label>Student Total($) Paid</label>
				<input type="text" name="TotalPaid" class="field" id="TotalPaid"
				       value="<?php //echo $result['amount_paid'];?>"/>
			</td>
		</tr>
		<tr>
			<td align="left" valign="middle">
				<label>College Payment Due</label>
				<input type="text" name="ColPaymentDateDue" class="datePicker field" title="dd-mm-yyyy"
				       placeholder="dd-mm-yyyy" value="<?php //echo $invoiceRes['ColPaymentDateDue'];?>"/>
			</td>
			<td align="left" valign="middle">
				<label>College Date Paid</label>
				<input type="text" name="CollegeDatePaid" class="datePicker field" title="dd-mm-yyyy"
				       placeholder="dd-mm-yyyy" value="<?php //echo $invoiceRes['colPaidDate'];?>"/>
			</td>
			<td align="left" valign="middle">
				<label>College Total($) Paid</label>
				<input type="text" name="ColTotalPaid" class="field"
				       value="<?php //echo $invoiceRes['ColTotalPaid'];?>"/>
			</td>
			<td align="left" valign="middle">
				<label>Marketing Incentive</label>
				<input type="text" class="span2" name="incentive" id="incentive" placeholder="Incentive Name"/>
			</td>
			<td align="left" valign="middle">
				<label>Incentive Value</label>

				<div class="input-prepend">
					<span class="add-on">$</span>
					<input name="incentiveValue" type="text" class="span2" id="incentiveValue" disabled="disabled"/>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label>Subtotal to pay</label>

				<div class="input-prepend">
					<span class="add-on">$</span>
					<input name="subTotalToPay" type="text" class="span1" id="subTotalToPay" placeholder="0.00"/>
				</div>
			</td>
			<td>
				<label>+ Materials</label>

				<div class="input-prepend">
					<span class="add-on">$</span>
					<input name="invMaterials" type="text" class="span1" id="invMaterials" placeholder="0.00"/>
				</div>
			</td>
			<td>
				<label>+ Enrolment</label>

				<div class="input-prepend">
					<span class="add-on">$</span>
					<input name="invEnrolment" type="text" class="span1" id="invEnrolment" placeholder="0.00"/>
				</div>
			</td>
			<td>
				<label>+ Instalment Fee</label>

				<div class="input-prepend">
					<span class="add-on">$</span>
					<input name="invInstFee" type="text" class="span1" id="invInstFee" placeholder="0.00"/>
				</div>
				<label class="text-error">- Incentive</label>

				<div class="input-prepend">
					<span class="add-on">$</span>
					<input name="incValueFee" type="text" class="span1" id="incValueFee" placeholder="0.00"/>
				</div>
			</td>
			<td>
				<label class="text-error">- Other</label>

				<div class="input-prepend">
					<span class="add-on">$</span>
					<input name="other" type="text" class="span1" id="other" placeholder="0.00"/>
				</div>
				<label class="text-success"><strong>Total to pay</strong></label>

				<div class="input-prepend">
					<span class="add-on">$</span>
					<input name="totalToPay" type="text" class="span1" id="totalToPay"/>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="5">
				<a href="#" onClick="generateInvoice(1);" title="" class="btn btn-primary pull-right">Generate the
					Invoice</a>
			</td>
		</tr>
	</div>
</table>
</fieldset>
</div>