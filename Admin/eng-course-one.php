<div class="one">
<fieldset>
<legend>English Course Instalment No.1</legend>
<input type="hidden" name="courseEntry" id="courseEntry" value="<?php echo $courseNo; ?>"/>
<input type="hidden" name="prevID" id="prevID" value="<?php echo $pID; ?>"/>
<input type="hidden" name="courseType" id="courseType" value="english"/>
<input type="hidden" name="receipt_number" id="receipt_number" value="<?php echo $result['receipt_number']; ?>"/>

<div name="quotation">
	<table width="100%" border="0" cellpadding="4" cellspacing="1" class="table table-bordered">
		<tr>
			<td height="0" colspan="2" align="left" valign="middle" bgcolor="#DFEBF4">
				<?php if ($result['courseEntry'] == 1 && $result['amount_paid']) { ?>
					<div class="input-group"><span class="add-on"><strong>Receipt
								Number:</strong> <?php echo $result['receipt_number']; ?></span>
						<!-- <input name="quoteTitle" type="text" class="span9" id="prependedInput" placeholder="What are the Courses on this Quote..." maxlength="100"> -->
					</div>
				<?php } ?>
			</td>
			<td height="0" align="left" valign="middle" bgcolor="#DFEBF4">
				<div class="input-group">
					<span class="add-on"><strong>Payment Fees:</strong> <?php echo $paymentResult['paymentTitle']; ?></span>
					<!-- <input name="quoteTitle" type="text" class="span9" id="prependedInput" placeholder="What are the Courses on this Quote..." maxlength="100"> -->
				</div>
			</td>
		</tr>
		<tr>
			<td width="0" height="0" align="left" valign="middle" bgcolor="#F2F2F2"><strong>Course Name</strong><br/>
				<?php echo $paymentResult['courseName']; ?>
				<input type="hidden" id="courseName" name="courseName"
				       value='<?php echo $paymentResult['courseName']; ?>'/>
			</td>
			<td height="0" align="left" valign="middle" bgcolor="#F2F2F2"><strong>College Name</strong><br/>
				<?php echo $colleges; ?>
				<input type="hidden" id="college" name="college" value='<?php echo $colleges; ?>'/>
			</td>
			<td height="0" align="left" valign="middle" bgcolor="#F2F2F2"><strong>Time Table</strong><br/>
				<?php echo $paymentResult['courseTimeTable']; ?>
			</td>
		</tr>
		<tr>
			<td width="0" height="0" bgcolor="#DFEBF4"><strong>New Course Start Date</strong><br/>
				<?php echo $paymentResult['newCourseStartDate']; ?>
				<input type="hidden" id="intakeDate" name="intakeDate"
				       value='<?php echo $paymentResult['newCourseStartDate']; ?>'/>
			</td>
			<td height="0" bgcolor="#DFEBF4"><strong>New Course End Date </strong><br/>
				<?php echo $paymentResult['newCourseEndDate']; ?>
			</td>
			<td height="0" bgcolor="#DFEBF4"><strong>Holidays Duration (Weeks)</strong><br/>
				<?php echo $paymentResult['holidaysDuration']; ?>
			</td>
		</tr>
		<tr>
			<td width="0" height="0" bgcolor="#F2F2F2"><strong>Cost per Week</strong><br/>
				<strong>$</strong><?php echo $paymentResult['weeklyCost']; ?>
			</td>
			<td height="0" bgcolor="#F2F2F2"><strong>Duration (Weeks)</strong><br/>
				<?php echo $paymentResult['courseDuration']; ?>
			</td>
			<td height="0" bgcolor="#F2F2F2"><strong>Number of Instalments</strong><br/>
				<?php echo $paymentResult['instalmentsNo']; ?>
			</td>
		</tr>
		<tr>
			<td width="0" height="0" bgcolor="#DFEBF4"><strong>Enrolment Fee</strong><br/>
				<strong>$</strong><?php echo $paymentResult['courseEnrolmentFee']; ?>
				<input type="hidden" id="courseEnrolmentFee" name="courseEnrolmentFee" value="<?php echo $paymentResult['courseEnrolmentFee']; ?>"/>
			</td>
			<td height="0" bgcolor="#DFEBF4"><strong>Materials (AU$)</strong><br/>
				<strong>$</strong><?php echo $paymentResult['materialsCost']; ?>
				<input type="hidden" id="materialsCost" name="materialsCost" value="<?php echo $paymentResult['materialsCost']; ?>" />
			</td>
			<td height="0" bgcolor="#DFEBF4"><strong>Instalment Fee</strong><br/>
				<strong>$</strong><?php echo $paymentResult['instalmentFee']; ?>
				<input type="hidden" id="instalmentFee" name="instalmentFee" value="<?php echo $paymentResult['instalmentFee']; ?>"/>
			</td>
		</tr>
		<tr>
			<td width="0" height="0" bgcolor="#F2F2F2"><strong class="style5">Instalment No. <span
						class="badge badge-important">1</span></strong><br/>
				<strong class="style5">$</strong><?php echo $paymentResult['instOne']; ?>
				<input type="hidden" name="instalment" id="instalment" value="<?php echo $paymentResult['instOne']; ?>" />
			</td>
			<td width="0" height="0" bgcolor="#F2F2F2"><strong class="style5">Total Instalment No. <span
						class="badge badge-important">1</span></strong><br/>
				<strong class="style5">$</strong><?php echo $totalInstOne; ?></td>
			<td width="0" height="0" bgcolor="#F2F2F2">
				<!-- DUE DATE BEGIN -->
				<strong class="style5">Payment Due Date: <span class="badge badge-inverse"><?php echo $dueDate; ?></span></strong>
				<!-- DUE DATE END -->
			</td>
		</tr>
	</table>
</div>

<table width="100%" class="table table-bordered">
	<tr>
		<td width="29%" align="left" valign="middle"><strong>Health Fund</strong><br/>
			<?php echo $paymentResult['healthFund']; ?></td>
		<td width="20%" align="left" valign="middle"><span class="add-on"><strong>Cost AU$</strong></span><br/>
			<strong>$</strong><?php echo $paymentResult['healthCost']; ?></td>
		<td width="24%" align="left" valign="middle">
			<div class="pull-left span2"><strong>Months</strong><br/>
				<?php echo $paymentResult['healthCoverMonths']; ?></div>
		</td>
		<td width="26%" align="left" valign="middle"><span class="add-on"><strong>Health Cover Type</strong></span><br/>
			<?php echo $paymentResult['healthCoverType']; ?></td>
	</tr>
	<!-- -->
	<tr>
		<td align="left" valign="middle" class="span2"><strong>Visas Fees AU$</strong><br>
			<strong>$</strong><?php echo $paymentResult['visaFees']; ?></td>
		<td height="0" class="span2"><strong>Deposit</strong><br>
			<strong>$</strong><?php echo $paymentResult['deposit']; ?></td>
		<td height="0" class="span2"><strong>(-) Bond</strong><br>
			<strong>$</strong><?php echo $paymentResult['bond']; ?></td>
		<td align="left" valign="middle" bgcolor="#CCCCCC" class="span2"><strong class="style5">Total Amount Due
				$</strong> <?php echo $totalDue; ?>
			<?php if (empty($result['amount_outstanding'])){ ?>
			<input type="hidden" name="totalAmount" id="totalAmount" value="<?php echo $totalDue; ?>"/></td>
		<?php
		}
		else {
			?>
			<input type="hidden" name="totalAmount" id="totalAmount"
			       value="<?php echo $result['amount_outstanding']; ?>"/>
		<?php } ?>
	</tr>
	<!-- -->
	<tr>
		<td colspan="2" align="left" valign="middle">
			<strong>Amount Paid AU$</strong><br>

			<div class="input-prepend input-append">
				<span class="add-on">$</span>
				<?php
				if ($result['courseEntry'] == 1 && $result['amount_paid'] != '') {
					?>
					<input type="text" class="span2 inst1"
					       name=<?php echo '"amountPay"'; ?> id="amountPay" <?php echo "placeholder='" . $result['amount_paid'] . "'"; ?>  />
				<?php } else { ?>
					<input type="text" class="span2 inst1" name=<?php echo '"amountPay"'; ?> id="amountPay"
					       placeholder="Amount Paid AU$"/>
				<?php } ?>
			</div>
		</td>
		<td colspan="2" align="left" valign="middle" bgcolor="#FFCCCC">
			<strong>Amount Outstanding AU$</strong><br/>

			<div class="input-prepend input-append">
				<span class="add-on">$</span>
				<?php if ($result['courseEntry'] == 1 && $result['amount_paid'] != '') { ?>
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
		<td colspan="4" align="left" valign="middle">
			<strong>Comments:</strong>
			<textarea name="receiptNotes" id="receiptNotes" rows="4" class="span6"
			          placeholder="<?php echo $result['payment_comments']; ?>"></textarea>
			<br>
		</td>
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
		<td colspan="4" align="left" valign="middle"></td>
	</tr>
</table>

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
				<input type="hidden" name="PaymentDateDue" id="PaymentDateDue" value="<?php echo $paymentResult['dueDate'];?>"/>
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