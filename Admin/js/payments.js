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

function previousReceipt(receiptNo) {

	var personID = $('#email').val();
	var courseEntry = $('#courseNo').val();
	var courseType = $('#courseType').val();
	var pID = $('#prevID').val();
	var receipt_number = $('#receipt_number').val();
	var sendData = {'check': 1, 'receipt_number': receiptNo, 'personID': personID, 'pID': pID, 'courseType': courseType, 'courseEntry': courseEntry};

	$.ajax({
		type: "POST",
		url: "classes/PaymentClass.php",
		data: sendData,
		dataType: 'json',

		success: function (data) {
			window.open('createStudentReceipt.php?keyVal=' + data.person_ID + '&receiptNumber=' + data.receipt_number + '&courseEntry=' + data.courseEntry + '&pID=' + data.prevID);
		}
	});
}

function paymentReceipt(inst) {
	var personID = $('#email').val();

	var courseEntry = $('#courseNo').val();
	var pID = $('#prevID').val();
	var courseType = $('#courseType').val();
	var amountDue = $('#totalAmount').val();
	var amountPaid = $('#amountPay').val();
	var amountOutstanding = $('#amountOutstanding').val();
	var receiptNotes = $('#receiptNotes').val();
	var receivedBy = $('#receivedBy').val();

	var sendData = {'courseEntry': courseEntry, 'pID': pID, 'personID': personID, 'courseType': courseType, 'amountDue': amountDue, 'amountPaid': amountPaid, 'amountOutstanding': amountOutstanding, 'paymentComments': receiptNotes, 'receivedBy': receivedBy};
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

}
/*
 * Controller for the Invoice to College Section.
 * */
/* Invoice One */
var instOne = $('#instalment').val();

$('#paimentFee').val(instOne);
$('#paimentFee').change();

$('#commisionRate').change(function () {
	var payment = $('#paimentFee').val() * 1;
	var value = payment * $(this).val() * 1 / 100;
	$('#commisionVal').val(value);
	$('#commisionVal').change();
});

$('#commisionVal').change(function () {
	var gst = $(this).val() * 10 / 100;
	$('#GSTexc').val(gst);
	$('#GSTexc').change();
});

$('#GSTexc').change(function () {
	var gstExc = $(this).val() * 1;
	var commission = $('#commisionVal').val() * 1;
	var incentive = $('#incentiveValue').val() * 1;
	var revenue = gstExc + commission + incentive;
	$('#GSTinc').val(revenue);
	$('#GSTinc').change();

});

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
//
$('#incentiveValue').change(function () {
	var incValueFee = $('#incentiveValue').val() * 1;
	var subTotal = $('#subTotalToPay').val() * 1;
	var invMaterials = $('#invMaterials').val() * 1;
	var invEnrolment = $('#invEnrolment').val() * 1;
	var invInstFee = $('#invInstFee').val() * 1;
	//
	$('#incValueFee').val(incValueFee);
	$('#incValueFee').change();
	//
	$('#totalToPay').val(subTotal + invMaterials + invEnrolment + invInstFee - incValueFee);
	$('#totalToPay').change();
});
//
$('#other').change(function () {
	var other = $(this).val() * 1;
	var incValueFee = $('#incentiveValue').val() * 1;
	var subTotal = $('#subTotalToPay').val() * 1;
	var invMaterials = $('#invMaterials').val() * 1;
	var invEnrolment = $('#invEnrolment').val() * 1;
	var invInstFee = $('#invInstFee').val() * 1;
	//
	$('#totalToPay').val(subTotal + invMaterials + invEnrolment + invInstFee - incValueFee - other);
	$('#totalToPay').change();
});

function generateInvoice(inst) {

	var receipt_number = $('#payReceipt').val();
	var personID = $('#email').val();
	var edu_provider_ID = $('#college').val();
	var courseName = $('#courseName').val();
	var paymentFee = $('#paimentFee').val();
	//
	var intakeDate = $('#intakeDate').val();
	//
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
	//
	var Other = $('#other').val();
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
			window.open('generate-invoice.php?keyVal=' + personID + '&invNumber=' + InvoiceNumber + '&intakeDate=' + intakeDate + '&other=' + Other);
		}
	});

}

var amountOutstanding = document.getElementById("amountOutstanding").getAttribute("placeholder");
if (amountOutstanding === '0.00') {
	$('#amountPay').addClass('form-control').attr('disabled', true);
	$('#amountOutstanding').addClass('form-control').attr('disabled', true);
	$('#receiptNotes').addClass('form-control').attr('disabled', true);
	$('#receivedBy').addClass('form-control').attr('disabled', true);
	$('#submit').css({
		"background-color": "#DEDEDE",
		"color": "#616161"}).addClass('form-control').attr('disabled', true);
	//
}
console.log(amountOutstanding);
