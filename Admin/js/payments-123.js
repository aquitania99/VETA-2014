/**
 * Created with JetBrains PhpStorm.
 * User: smedina
 * Date: 5/08/13
 * Time: 9:50 PM
 * To change this template use File | Settings | File Templates.
 */
$('#amountPay').change(function () {
	var totalAmountDue = $('#totalAmount').val() * 1;
	var amountPaid = $(this).val() * 1;
	var amountOutstanding = totalAmountDue - amountPaid;
	$('#amountOutstanding').val(amountOutstanding);

	//alert ($('#amountOutstanding').val());
});
//
/*
 $('#amountPay2').change(function() {
 var totalAmountDue2 = $('#totalAmount').val() * 1;
 var amountPaid2 = $(this).val() * 1;
 var amountOutstanding2 = totalAmountDue2 - amountPaid2;
 $('#amountOutstanding').val(amountOutstanding2);
 alert (amountPaid2);
 //
 //alert (amountPaid2);
 });
 //
 $('#amountPay3').change(function() {
 var totalAmountDue3 = $('#totalAmount').val() * 1;
 var amountPaid3 = $(this).val() * 1;
 var amountOutstanding3 = totalAmountDue3 - amountPaid3;
 $('#amountOutstanding').val(amountOutstanding3);
 //alert ($('#amountOutstanding3').val());
 });
 //
 $('#amountPay4').change(function() {
 var totalAmountDue4 = $('#totalAmount').val() * 1;
 var amountPaid4 = $(this).val() * 1;
 var amountOutstanding4 = totalAmountDue4 - amountPaid4;
 $('#amountOutstanding').val(amountOutstanding4);
 //alert ($('#amountOutstanding4').val());
 });
 */
function previousReceipt(receiptNo) {
	var personID = $('#email').val();
	var courseEntry = $('#courseEntry').val();
	var pID = $('#prevID').val();
	var sendData = {'check': 1, 'receipt_number': receiptNo, 'personID': personID, 'pID': pID};
	//
	$.ajax({
		type: "POST",
		url: "classes/PaymentClass.php",
		data: sendData,
		dataType: 'json',

		success: function (data) {
			var receiptNo = data.receipt_number;
			//window.location='createStudentReceipt.php?keyVal='+personID+'&receiptNumber='+receiptNo+'&courseEntry='+courseEntry;
			window.open('createStudentReceipt.php?keyVal=' + personID + '&receiptNumber=' + receiptNo + '&courseEntry=' + courseEntry + '&pID=' + pID);
		}
	});
}

function paymentReceipt(inst) {
	var personID = $('#email').val();
	//
	var courseEntry = $('#courseEntry').val();
	var pID = $('#prevID').val();
	//alert(courseEntry + 'Este es el courseEntry...\n');
	var amountDue = $('#totalAmountDue').val();
	var amountPaid = $('#amountPay').val();
	var amountOutstanding = $('#amountOutstanding').val();
	var receiptNotes = $('#receiptNotes').val();
	var receivedBy = $('#receivedBy').val();
	//
	var sendData = {'courseEntry': courseEntry, 'pID': pID, 'personID': personID, 'amountDue': amountDue, 'amountPaid': amountPaid, 'amountOutstanding': amountOutstanding, 'paymentComments': receiptNotes, 'receivedBy': receivedBy};
	$.ajax({
		type: "POST",
		url: "classes/PaymentClass.php",
		data: sendData,
		dataType: 'json',
		success: function (data) {
			var receiptNo = data.receipt_number;
			//alert(receiptNo );
			//window.location='createStudentReceipt.php?keyVal='+personID+'&receiptNumber='+receiptNo+'&courseEntry='+courseEntry;
			window.open('createStudentReceipt.php?keyVal=' + personID + '&receiptNumber=' + receiptNo + '&courseEntry=' + courseEntry + '&pID=' + pID);
		}
	});
	/*
	 switch (inst)
	 {
	 case '1':
	 var courseEntry = $('#courseEntry').val();
	 var amountDue = $('#totalAmountDue').val();
	 var amountPaid = $('#amountPay').val();
	 var amountOutstanding = $('#amountOutstanding').val();
	 var receiptNotes = $('#receiptNotes').val();
	 var receivedBy = $('#receivedBy').val();
	 //
	 var sendData = {'courseEntry':courseEntry,'personID':personID, 'amountDue':amountDue, 'amountPaid':amountPaid, 'amountOutstanding':amountOutstanding, 'paymentComments':receiptNotes, 'receivedBy':receivedBy};
	 $.ajax({
	 type: "POST",
	 url: "classes/PaymentClass.php",
	 data: sendData,
	 dataType:'json',
	 success: function(data){
	 var receiptNo = data.receipt_number;
	 //alert(receiptNo );
	 window.location='createStudentReceipt.php?keyVal='+personID+'&receiptNumber='+receiptNo;
	 }
	 });
	 break;
	 //
	 /*
	 case 2:
	 var receiptNo2 = $('#payReceipt2').val();
	 var amountDue2 = $('#totalAmount2').val();
	 var amountPaid2 = $('#amountPay2').val();
	 var amountOutstanding2 = $('#amountOutstanding').val();
	 var receiptNotes2 = $('#receiptNotes2').val();
	 var receivedBy2 = $('#receivedBy2').val();
	 //
	 var sendData2 = {'courseEntry':2,'personID':personID, 'receiptNumber':receiptNo2, 'amountDue':amountDue2, 'amountPaid':amountPaid2, 'amountOutstanding':amountOutstanding2, 'paymentComments':receiptNotes2, 'receivedBy':receivedBy2};
	 //
	 $.ajax({
	 type: "POST",
	 url: "classes/PaymentClass.php",
	 data: sendData2,
	 dataType:'json',
	 success: function(data){
	 var receiptNo = data.receipt_number;
	 //alert(receiptNo );
	 window.location='createStudentReceipt.php?keyVal='+personID+'&receiptNumber='+receiptNo;
	 }
	 });
	 break;
	 //
	 case 3:
	 var receiptNo3 = $('#payReceipt3').val();
	 var amountDue3 = $('#totalAmount3').val();
	 var amountPaid3 = $('#amountPay3').val();
	 var amountOutstanding3 = $('#amountOutstanding').val();
	 var receiptNotes3 = $('#receiptNotes3').val();
	 var receivedBy3 = $('#receivedBy3').val();
	 //
	 var sendData3 = {'courseEntry':3,'personID':personID, 'receiptNumber':receiptNo3, 'amountDue':amountDue3, 'amountPaid':amountPaid3, 'amountOutstanding':amountOutstanding3, 'paymentComments':receiptNotes3, 'receivedBy':receivedBy3};
	 //
	 $.ajax({
	 type: "POST",
	 url: "classes/PaymentClass.php",
	 data: sendData3,
	 dataType:'json',
	 success: function(data){
	 var receiptNo = data.receipt_number;
	 //alert(receiptNo );
	 window.location='createStudentReceipt.php?keyVal='+personID+'&receiptNumber='+receiptNo;
	 }
	 });
	 break;
	 //
	 case 4:
	 var receiptNo4 = $('#payReceipt4').val();
	 var amountDue4 = $('#totalAmount4').val();
	 var amountPaid4 = $('#amountPay4').val();
	 var amountOutstanding4 = $('#amountOutstanding4').val();
	 var receiptNotes4 = $('#receiptNotes4').val();
	 var receivedBy4 = $('#receivedBy4').val();
	 //
	 var sendData4 = {'courseEntry':4,'personID':personID, 'receiptNumber':receiptNo4, 'amountDue':amountDue4, 'amountPaid':amountPaid4, 'amountOutstanding':amountOutstanding4, 'paymentComments':receiptNotes4, 'receivedBy':receivedBy4};
	 //
	 $.ajax({
	 type: "POST",
	 url: "classes/PaymentClass.php",
	 data: sendData,
	 dataType:'json',
	 success: function(data){
	 var receiptNo = data.receipt_number;
	 //alert(receiptNo );
	 window.location='createStudentReceipt.php?keyVal='+personID+'&receiptNumber='+receiptNo;
	 }
	 });
	 break;

	 }
	 */
}
/*
 * Controller for the Invoice to College Section.
 * */
/** Invoice One **/
var instOne = $('#instOne').val();
if (instOne > 1) {
	$('#paimentFee').val(instOne);
}
$('#commisionRate').change(function () {
	var payment = $('#paimentFee').val() * 1;
	var value = payment * $(this).val() * 1 / 100;
	$('#commisionVal').val(value);
	//
	$('#commisionVal').change();
});
//
$('#commisionVal').change(function () {
	var gst = $(this).val() * 10 / 100;
	//
	$('#GSTexc').val(gst);
	//
	$('#GSTexc').change();
});
//
$('#GSTexc').change(function () {
	var gstExc = $(this).val() * 1;
	var commission = $('#commisionVal').val() * 1;
	var incentive = $('#incentiveValue').val() * 1;
	var revenue = gstExc + commission + incentive;
	//
	$('#GSTinc').val(revenue);
	$('#GSTinc').change();

});
//
$('#GSTinc').change(function () {
	var earn = $(this).val() * 1;
	var subTotal = instOne - earn;
	var invMaterials = $('#materialsCost').val() * 1;
	var invEnrolment = $('#courseEnrolmentFee').val() * 1;
	var invInstFee = $('#instalmentFee').val() * 1;
	//
	$('#subTotalToPay').val(subTotal);
	$('#subTotalToPay').change();
	//
	$('#invMaterials').val(invMaterials);
	$('#invEnrolment').val(invEnrolment);
	$('#invInstFee').val(invInstFee);
	//
	$('#totalToPay').val(subTotal + invMaterials + invEnrolment + invInstFee);
	$('#totalToPay').change();
});
//
$('#incentive').change(function () {
	//
	$('#incentiveValue').removeAttr('disabled');
	//$('#GSTinc').change();
});
//
$('#invInstFee').change(function () {
	$(this).val();
	$(this).change();
});

/* Invoice Two */
var instTwo = $('#instTwo').val();
if (instTwo > 1) {
	$('#paimentFee2').val(instTwo);
}
$('#commisionRate2').change(function () {
	var payment = $('#paimentFee2').val() * 1;
	var value = payment * $(this).val() * 1 / 100;
	$('#commisionVal2').val(value);
	//
	$('#commisionVal2').change();
});
//
$('#commisionVal2').change(function () {
	var gst = $(this).val() * 10 / 100;
	//
	$('#GSTexc2').val(gst);
	//
	$('#GSTexc2').change();
});
//
$('#GSTexc2').change(function () {
	var gstExc = $(this).val() * 1;
	var commission = $('#commisionVal2').val() * 1;
	var incentive = $('#incentiveValue2').val() * 1;
	var revenue = gstExc + commission + incentive;
	//
	$('#GSTinc2').val(revenue);
	$('#GSTinc2').change();

});
//
$('#GSTinc2').change(function () {
	var earn = $(this).val() * 1;
	var subTotal = instOne - earn;
	var invMaterials = $('#materialsCost2').val() * 1;
	var invEnrolment = $('#courseEnrolmentFee2').val() * 1;
	var invInstFee = $('#instalmentFee2').val() * 1;
	//
	$('#subTotalToPay2').val(subTotal);
	$('#subTotalToPay2').change();
	//
	$('#invMaterials2').val(invMaterials);
	$('#invEnrolment2').val(invEnrolment);
	$('#invInstFee2').val(invInstFee);
	//
	$('#totalToPay2').val(subTotal + invMaterials + invEnrolment + invInstFee);
	$('#totalToPay2').change();
});
//
$('#incentive2').change(function () {
	//
	$('#incentiveValue2').removeAttr('disabled');
	//$('#GSTinc').change();
});
//
$('#invInstFee2').change(function () {
	$(this).val();
	$(this).change();
});

/* Invoice Three */
var instThree = $('#instThree').val();
if (instThree > 1) {
	$('#paimentFee3').val(instThree);
}
$('#commisionRate3').change(function () {
	var payment = $('#paimentFee3').val() * 1;
	var value = payment * $(this).val() * 1 / 100;
	$('#commisionVal3').val(value);
	//
	$('#commisionVal3').change();
});
//
$('#commisionVal3').change(function () {
	var gst = $(this).val() * 10 / 100;
	//
	$('#GSTexc3').val(gst);
	//
	$('#GSTexc3').change();
});
//
$('#GSTexc3').change(function () {
	var gstExc = $(this).val() * 1;
	var commission = $('#commisionVal3').val() * 1;
	var incentive = $('#incentiveValue3').val() * 1;
	var revenue = gstExc + commission + incentive;
	//
	$('#GSTinc3').val(revenue);
	$('#GSTinc3').change();

});
//
$('#GSTinc3').change(function () {
	var earn = $(this).val() * 1;
	var subTotal = instOne - earn;
	var invMaterials = $('#materialsCost3').val() * 1;
	var invEnrolment = $('#courseEnrolmentFee3').val() * 1;
	var invInstFee = $('#instalmentFee3').val() * 1;
	//
	$('#subTotalToPay3').val(subTotal);
	$('#subTotalToPay3').change();
	//
	$('#invMaterials3').val(invMaterials);
	$('#invEnrolment3').val(invEnrolment);
	$('#invInstFee3').val(invInstFee);
	//
	$('#totalToPay3').val(subTotal + invMaterials + invEnrolment + invInstFee);
	$('#totalToPay3').change();
});
//
$('#incentive3').change(function () {
	//
	$('#incentiveValue3').removeAttr('disabled');
	//$('#GSTinc').change();
});
//
$('#invInstFee3').change(function () {
	$(this).val();
	$(this).change();
});

/* Invoice Four */
var instFour = $('#instFour').val();
if (instFour > 1) {
	$('#paimentFee4').val(instFour);
}
$('#commisionRate4').change(function () {
	var payment = $('#paimentFee4').val() * 1;
	var value = payment * $(this).val() * 1 / 100;
	$('#commisionVal4').val(value);
	//
	$('#commisionVal4').change();
});
//
$('#commisionVal4').change(function () {
	var gst = $(this).val() * 10 / 100;
	//
	$('#GSTexc4').val(gst);
	//
	$('#GSTexc4').change();
});
//
$('#GSTexc4').change(function () {
	var gstExc = $(this).val() * 1;
	var commission = $('#commisionVal4').val() * 1;
	var incentive = $('#incentiveValue4').val() * 1;
	var revenue = gstExc + commission + incentive;
	//
	$('#GSTinc4').val(revenue);
	$('#GSTinc4').change();

});
//
$('#GSTinc4').change(function () {
	var earn = $(this).val() * 1;
	var subTotal = instOne - earn;
	var invMaterials = $('#materialsCost4').val() * 1;
	var invEnrolment = $('#courseEnrolmentFee4').val() * 1;
	var invInstFee = $('#instalmentFee4').val() * 1;
	//
	$('#subTotalToPay4').val(subTotal);
	$('#subTotalToPay4').change();
	//
	$('#invMaterials4').val(invMaterials);
	$('#invEnrolment4').val(invEnrolment);
	$('#invInstFee4').val(invInstFee);
	//
	$('#totalToPay4').val(subTotal + invMaterials + invEnrolment + invInstFee);
	$('#totalToPay4').change();
});
//
$('#incentive4').change(function () {
	//
	$('#incentiveValue4').removeAttr('disabled');
	//$('#GSTinc').change();
});
//
$('#invInstFee4').change(function () {
	$(this).val();
	$(this).change();
});
/**
 *
 */
function generateInvoice(inst) {
	alert('Let\'s create the invoice!!\n\n');
	//generate-invoice.php
	var personID = $('#email').val();
	switch (inst) {
		case 1:
			//
			var receipt_number = $('#payReceipt').val();
			var personID; //emailAddress
			var edu_provider_ID = $('#college').val();
			var courseName = $('#courseName').val();
			var paymentFee = $('#paimentFee').val();
			var commissionRate = $('#commisionRate').val();
			var commissionValue = $('#commisionVal').val();
			var GSTexc = $('#GSTexc').val();
			var GSTinc = $('#GSTinc').val();
			var InvoiceNumber = $('#InvoiceNumber').val();
			var CommDeducted = $('#CommDeducted').val();
			var incentive = $('#incentive').val();
			var incentiveValue = $('#incentiveValue').val();
			var PaymentDueDate = $('#PaymentDateDue').val();
			var StudentPaidDate = $('#StudentPaidDate').val();
			var TotalPaid = $('#TotalPaid').val();
			var ColPaymentDateDue = $('#ColPaymentDateDue').val();
			var CollegeDatePaid = $('#CollegeDatePaid').val();
			var ColTotalPaid = $('#ColTotalPaid').val();
			//courseActive
			var sendData = {'receipt_number': receipt_number, 'emailAddress': personID, 'edu_provider_ID': edu_provider_ID, 'courseName': courseName,
				'paymentFee': paymentFee, 'commissionRate': commissionRate, 'commissionValue': commissionValue, 'GSTexc': GSTexc,
				'GSTinc': GSTinc, 'InvoiceNumber': InvoiceNumber, 'CommDeducted': CommDeducted, 'incentive': incentive, 'incentiveValue': incentiveValue,
				'PaymentDueDate': PaymentDueDate, 'StudentPaidDate': StudentPaidDate, 'TotalPaid': TotalPaid, 'ColPaymentDateDue': ColPaymentDateDue,
				'CollegeDatePaid': CollegeDatePaid, 'ColTotalPaid': ColTotalPaid};
			//
			$.ajax({
				type: "POST",
				url: "classes/invReceipt.php",
				data: sendData,
				success: function () {
					//window.location = 'generate-invoice.php?keyVal='+personID+'&invNumber='+InvoiceNumber;
					window.open('generate-invoice.php?keyVal=' + personID + '&invNumber=' + InvoiceNumber);
				}
			});
			break;
		//
	}
}

var amountOutstanding = document.getElementById("amountOutstanding").getAttribute("placeholder");
if (amountOutstanding === '0.00') {
	$('#amountPay').addClass('form-control').attr('disabled', true);
	$('#amountOutstanding').addClass('form-control').attr('disabled', true);
	$('#receiptNotes').addClass('form-control').attr('disabled', true);
	$('#receivedBy').addClass('form-control').attr('disabled', true);
	$('#submit').addClass('disabled');
	//
	console.log(amountOutstanding);
}