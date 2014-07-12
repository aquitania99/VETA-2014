/// DEFINE VARIABLES
var totalCourseCost = $("#totalCourseCost").val();
var eduEntity = $("#eduCentre").val();
////alert ('getting there...');
var scanDiv = $('.fees');
//var i = $(".fees").size() + 1;
//var i = $(".fees").size();
var i;
//
var originalComm = $("#commission").val();
//
var comm = $("#commission").val();
//
var invNumber = $('#maxInvNumber').val();
//
var newVal;
//
var originalInstalments = $("#instalments").val();
//
var originalStudentFee = (totalCourseCost / originalInstalments);
//
var num = $("#instalments").val();
var div;
//
//alert('instalments#: ' + num + '\n' );
//
//alert ('Table Objects: ' + i +' ' + ' Commision%: ' + comm);	  
$(function () {
	$("#eduCentre").change(function () {
		eduEntity = $(this).val();
		//alert ('Entered Value '+ eduEntity)
	});
	// When Updating the Total Cost of the Course.....
	$("#totalCourseCost").blur(function () {
		totalCourseCost = $(this).val().replace(/,/g, '');
		//alert ('Entered Value '+ totalCourseCost);
		/////
		i = 0;
		do {
			newTotalFeeValue = (totalCourseCost / num);
			$('#' + i + 'paimentFee').val(newTotalFeeValue);
			//alert ('The new Fee value has been modified: $'+ newTotalFeeValue);
			/////
			//alert ('The commission percentage: '+ comm);
			newCommValue = (newTotalFeeValue * comm / 100)
			$('#' + i + 'realPayment').val(newCommValue);
			//alert ('The new Commission value has been modified: $'+ newCommValue);
			////
			newGSTValue = (newCommValue * 10 / 100)
			$('#' + i + 'GSTexc').val(newGSTValue);
			//alert ('The new GST value has been modified: $'+ newGSTValue);
			////
			newGSTincValue = (newGSTValue + newCommValue);
			$('#' + i + 'GSTinc').val(newGSTincValue);
			//alert ('The Value Including GST is: $' + newGSTincValue);
			i++
		} while (i <= num);
	});

	// When Updating the Commission Percentage .....
	$("#commission").change(function () {
		newVal = $(this).val();
		//do something
		//alert("The new Commission value is: $" + $(this).val());
		/////
		paimentFee = $('#1paimentFee').val();
		//
		//alert("The Payment Fee value is: $" + paimentFee);
		//
		i = 0;
		do {
			newCommValue = (paimentFee * newVal / 100)
			$('#' + i + 'realPayment').val(newCommValue);
			//alert ('The new Commission value has been modified: $'+ newCommValue);
			////
			newGSTValue = (newCommValue * 10 / 100)
			$('#' + i + 'GSTexc').val(newGSTValue);
			//alert ('The new GST value has been modified: $'+ newGSTValue);
			////
			newGSTincValue = (newGSTValue + newCommValue);
			$('#' + i + 'GSTinc').val(newGSTincValue);
			//alert ('The Value Including GST is: $' + newGSTincValue);
			i++
		} while (i <= num);
	});
//
	/* ADD NEW INSTALMENTS START */
	$("#instalments").change(function () {
		if (originalInstalments > $(this).val()) {
			alert('Sooooo Soorrryyy!! The number of instalments Can\'t be reduced!! =(  (' + num + ')');
			$(this).val(originalInstalments);
			$("#commission").val(originalComm);
		}
		else if (num < $(this).val()) {
			num = $(this).val();
			//alert ('Number of Instalments : '+ num);
			//.last()
			//$("#commission").val(comm);
			//
			div = totalCourseCost / num;
			//alert ('The monthly fee will be : '+ div);
			comm = (div * comm) / 100;
			//alert ('commission: '+ comm);
			comm = parseFloat(comm);
			//
			var GstExc = (comm * 10) / 100;
			//alert ('GST? '+ GstExc);
			GstExc = parseFloat(GstExc);
			//
			var GstInc = (comm + GstExc);
			//alert ('Total to pay?'+ GstInc);
			GstInc = parseFloat(GstInc);
			//return false;
			/////
			u = 0;
			do {
				newTotalFeeValue = (totalCourseCost / num);
				$('#' + u + 'paimentFee').val(newTotalFeeValue.toFixed(2));
				//alert (u+'The new Fee value has been modified: $'+ newTotalFeeValue.toFixed(2));
				/////
				//alert (u+' HOW MUCH IS THE FREACKING COMM!!??? The commission percentage: '+ comm);
				//alert ('The commission percentage: '+ comm);
				newCommValue = comm;
				$('#' + u + 'realPayment').val(newCommValue.toFixed(2));
				//alert (u+'OJO!! --> The NEW COMISSION value has been modified: $'+ newCommValue.toFixed(2));
				//return false;
				////
				newGSTValue = (newCommValue * 10 / 100)
				$('#' + u + 'GSTexc').val(newGSTValue.toFixed(2));
				//alert (u+'The new GST value has been modified: $'+ newGSTValue.toFixed(2));
				////
				newGSTincValue = (newGSTValue + newCommValue);
				$('#' + u + 'GSTinc').val(newGSTincValue.toFixed(2));
				//alert (u+'The Value Including GST is: $' + newGSTincValue);
				u++
			} while (u < num);
			i = 0;
			newMaxInv = invNumber;
			existingDivs = $(".fees").size();
			newItems = (num - existingDivs);
			counting = existingDivs;
			//alert ('How many new instalments? '+ (newItems));
			//return false;
			if (num > existingDivs) {
				do {

					/*
					 $('#'+i+'paimentFee').val(div.toFixed(2));
					 $('#'+i+'realPayment').val(comm.toFixed(2));
					 alert ('The new Commission value has been modified: $'+ comm);
					 ////
					 $('#'+i+'GSTexc').val(GstExc.toFixed(2));
					 alert ('The new GST value has been modified: $'+ GstExc);
					 ////
					 $('#'+i+'GSTinc').val(GstInc.toFixed(2));
					 alert ('The Value Including GST is: $' + GstInc);
					 */
//i++
					//return;
					//} while (i <= num);

					//if (i <= num) {
					//alert('paymentFee '+div+'\n');
					//newMaxInv = invNumber;
//do {
					newMaxInv++;
//alert('InvoiceId '+newMaxInv+'\n');
					counting++
					i++;
////alert (i +' '+ $(comm));	  
					$('<div class="fees"><input type="hidden" name="invNumber[]" id="invNumber-' + newMaxInv + '" value="' + newMaxInv + '" />' + '<table width="100%" border="0" cellspacing="1" cellpadding="4">' +
						'<tr><td align="left" valign="middle" bgcolor="#F2F2F2"><label>Payment ' + counting + ' $</label>' +
						'</td><td align="left" valign="middle" bgcolor="#F2F2F2">' +
						'<input type="text" id="' + counting + 'paimentFee" class="field" name="payments[]" value="' + div.toFixed(2) + '" />' +
						'</td><td align="left" valign="middle" bgcolor="#F2F2F2"><label>Commission $</label></td>' +
						'<td align="left" valign="middle" bgcolor="#F2F2F2">' +
						'<input type="text" id="' + counting + 'realPayment" class="field" name="realPayment[]" value="' + comm.toFixed(2) + '" />' +
						'</td><td align="left" valign="middle" bgcolor="#F2F2F2"><label>GST(10%)</label></td>' +
						'<td align="left" valign="middle" bgcolor="#F2F2F2">' +
						'<input type="text" style="width:65px;" id="' + counting + 'GSTexc" class="field" name="GSTexc[]" value="' + GstExc.toFixed(2) + '" />' +
						'</td></tr>' +
						'<tr><td align="left" valign="middle" bgcolor="#DFEBF4"><label>Comm + GST $</label></td>' +
						'<td align="left" valign="middle" bgcolor="#DFEBF4">' +
						'<input type="text" class="field" id="' + counting + 'GSTinc" name="GSTinc[]" value="' + GstInc.toFixed(2) + '" /></td>' +
						'<td align="left" valign="middle" bgcolor="#DFEBF4"><label>Invoice No.</label></td>' +
						'<td align="left" valign="middle" bgcolor="#DFEBF4">' +
						'<input type="text" class="field" name="InvoiceNumber[]" /></td>' +
						'<td align="left" valign="middle" bgcolor="#DFEBF4"><label>Comm. Deducted Upfront</label></td>' +
						'<td align="left" valign="middle" bgcolor="#DFEBF4">' +
						'<input type="checkbox" style="width:15px;" name="CommDeducted[]" class="pay" /></td></tr>' +
						'<tr><td align="left" valign="middle" bgcolor="#F2F2F2"><label>Student Payment Due Date</label></td>' +
						'<td align="left" valign="middle" bgcolor="#F2F2F2">' +
						'<input type="text" name="PaymentDateDue[]" class="datePicker field" title="yyyy-mm-dd" id="' + i + 'PaymentDateDue" /></td>' +
						'<td align="left" valign="middle" bgcolor="#F2F2F2"><label>Student Paid Date</label></td>' +
						'<td align="left" valign="middle" bgcolor="#F2F2F2">' +
						'<input type="text" name="StudentPaidDate[]" class="datePicker field" title="yyyy-mm-dd"  /></td>' +
						'<td align="left" valign="middle" bgcolor="#F2F2F2"><label>Student Total($) Paid</label></td>' +
						'<td align="left" valign="middle" bgcolor="#F2F2F2">' +
						'<input type="text" name="TotalPaid[]" class="field" id="' + counting + '"TotalPaid" /></td></tr>' +
						'<tr><td align="left" valign="middle" bgcolor="#DFEBF4"><label>College Payment Due</label></td>' +
						'<td align="left" valign="middle" bgcolor="#DFEBF4">' +
						'<input type="text" name="ColPaymentDateDue[]" class="datePicker field" title="yyyy-mm-dd" /></td>' +
						'<td align="left" valign="middle" bgcolor="#DFEBF4"><label>College Date Paid</label></td>' +
						'<td align="left" valign="middle" bgcolor="#DFEBF4">' +
						'<input type="text" name="CollegeDatePaid[]" class="datePicker field" title="yyyy-mm-dd" /></td>' +
						'<td align="left" valign="middle" bgcolor="#DFEBF4"><label>College Total($) Paid</label></td>' +
						'<td align="left" valign="middle" bgcolor="#DFEBF4">' +
						'<input type="text" name="ColTotalPaid[]" class="field" id="' + counting + '"ColTotalPaid" /></td></tr>' +
						'<tr><td bgcolor="#F2F2F2"><label style="float:right;">Marketing Incentive </label></td>' +
						'<td align="left" valign="middle" bgcolor="#F2F2F2"><input name="marketingIncentive[]" type="checkbox" class="pay" style="width:15px;" id="' + counting + 'marketingIncentive"/></td>' +
						'<td bgcolor="#F2F2F2"><input type="text" name="mIncentive[]" class="field mkIncentive" id="' + counting + 'mIncentive" /></td>' +
						'<td bgcolor="#F2F2F2">&nbsp;</td>' +
						'<td bgcolor="#F2F2F2"><label style="float:right;">Generate Invoice >> </label></td>' +
						'<td bgcolor="#F2F2F2"><a href="#" onclick="callAlert();" title="" style="font-size:.8em;">Click to Generate the Invoice</a></td></tr></table></div>').fadeIn('slow').appendTo('#inputs');
					//return false;
				} while (i < newItems);
			}
//    
		}
	});
	//}
});
/* ADD NEW INSTALMENTS END */


$('body').on('focus', ".datePicker", function () {
	$(this).datepicker({ dateFormat: "yy-mm-dd",
		changeMonth: true,
		changeYear: true,
		yearRange: "1970:2080"
	});
});

$('#remove').click(function () {
	if (i >= 1) {
		$('.fees:last').remove();
		i--;
	}
});
$('#reset').click(function () {
	alert('LET\'S PUT EVERYTHING BACK THE WAY IT WAS ORIGINALLY, SHALL WE?\n');
	/*
	 while(i >= 1) {
	 $('.fees:last').remove();
	 i--;
	 /* ~~~ PUT BACK THE $$$ - START ~~~ */
	$("#instalments").val(originalInstalments);
	$("#commission").val(originalComm);
	$('input[name=payments]').val(originalStudentFee);
	alert(originalStudentFee);
	//location.reload();
	window.location.reload(true);
	/* ~~~ PUT BACK THE $$$ - END ~~~ */

	//}
});
///
var balanceOwing;
if (balanceOwing != 0) {
// here's our click function for when the forms submitted
}

$('#Insert').click(function () {

	var answers = [];
	/*
	 $.each($('.field'), function() {
	 answers.push($(this).val());
	 });
	 */
	$.each($('#commissions'), function () {
		//answers.push($(this).text());
		answers.push("Choose a Commission %");
	});
//
	$.each($('#instalments'), function () {
		answers.push($(this).val());
	});
//
	if (answers.length == 0) {
		answers = "none";
	}

////alert(answers);
	document.insertForm.submit();
//return false;

});


//});


