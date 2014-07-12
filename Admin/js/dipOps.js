$('.moreInstalments').hide();
function addNewInst(instalment) {

	switch (instalment) {
		case 2:
			$('#moreInstalments2').show('slow');
			$('#addMoreInst').hide();
			break;

		case 3:
			$('#moreInstalments3').show('slow');
			$('#addMoreInst2').hide();
			break;

		case 4:
			$('#moreInstalments4').show('slow');
			$('#addMoreInst3').hide();
			break;
	}
}

function removeInst(instalment) {

	switch (instalment) {
		case 2:
			$('.inst2').val('');
			$('#moreInstalments2').hide();
			$('#addMoreInst').show('slow');
			break;

		case 3:
			$('.inst3').val('');
			$('#moreInstalments3').hide();
			$('#addMoreInst2').show('slow');
			break;

		case 4:
			$('.inst4').val('');
			$('#moreInstalments4').hide();
			$('#addMoreInst3').show('slow');
			break;
	}
}

$('.inst1').change(function () {
	/**/
	var quoteType = $('#quoteType').val();
	var costPerWeek = $('#weeklyCost').val() * 1;
	var courseDuration = $('#courseDuration').val() * 1;
	var instalmentsNo = $('#instalmentsNo').val() * 1;
	var materialsCost = $('#materialsCost').val() * 1;
	var courseEnrolmentFee = $('#courseEnrolmentFee').val() * 1;
	var deposit = $('#deposit').val() * 1;
	var bond = $('#bond').val() * 1;
	var subTotalCourse = $('#courseInstalment').val() * 1;
	var instalmentOne = $('#instOne').val() * 1;
	var totalInstOne = $('#totalInstOne').val() * 1;
	var healthCost = $('#healthCost').val() * 1;
	var instalmentFee = $('#instalmentFee').val() * 1;
	var visaFees = $('#visaFees').val() * 1;
	var totalAmountDue = $('#totalAmountDue').val() * 1;
	//
	var inst2 = $('#inst2').val() * 1;
	var inst3 = $('#inst3').val() * 1;
	var inst4 = $('#inst4').val() * 1;
	//
	instalmentOne = (costPerWeek * courseDuration );
	if (quoteType === 'Diploma' && courseDuration !== 0) {
		instalmentOne = costPerWeek * courseDuration / courseDuration;

		$('#instOne').val(instalmentOne);
		var totalInstalments = (instalmentOne * courseDuration); //+ inst2 + inst3 + inst4);
		//
		//alert (inst2 + '\n');
		//
		$('#totalInstalmentsVal').val(totalInstalments);
		//
		$('#dpInstalmentsNo').html('<b>'+ courseDuration + '</b>');
		$('#instalmentsNo').val(courseDuration);
		//alert(courseDuration);
		$('#totalStudyWeeks').val(courseDuration);
		//$('#instalmentsNo').change();
		//$('#dpInstalmentsNo').change();
		//
	}
	else {
		$('#instOne').val(instalmentOne);
	}
	var firstTotal = instalmentOne + courseEnrolmentFee + materialsCost + instalmentFee;
	totalAmountDue = instalmentOne + healthCost + visaFees - deposit + courseEnrolmentFee + materialsCost + instalmentFee - bond;
	$('#totalInstOne').attr('value', firstTotal);
	$('#totalInstOne').change();
//$('#totalAmountDue').val(totalAmountDue);
	$('#totalAmountDue').attr('value', totalAmountDue);
	$('#totalAmountDue').change();
//$('#remainingCost').val(costPerTerm);totalInstOne
	$('#dpInstalmentsNo').val(courseDuration);
	//$('#totalCoursesFee').val(firstTotal);
});

/*Instalment 2*/
$('.inst2').change(function () {
	//alert('got here..Inst2');
	/**/
	var quoteType = $('#quoteType').val();
	//
	var costPerWeek = $('#weeklyCost2').val() * 1;
	var courseDuration = $('#courseDuration2').val() * 1;
	var materialsCost = $('#materialsCost2').val() * 1;
	var courseEnrolmentFee = $('#courseEnrolmentFee2').val() * 1;
	var instalmentFee = $('#instalmentFee2').val() * 1;
	var instalmentTwo = $('#instTwo').val() * 1;
	var totalInstalmentTwo = $('#totalInstTwo').val() * 1;
	var costPerTerm = $('#weeklyCost2').val() * 1;
	//
	var totalInstalmentsVal = $('#totalInstalmentsVal').val() * 1;
	//
	instalmentTwo = costPerWeek * courseDuration;
	//
	if (quoteType === 'Diploma' && courseDuration !== 0) {
		instalmentTwo = costPerWeek * courseDuration / courseDuration;
		$('#instTwo').val(instalmentTwo);
		//$('#totalInstalmentsVal').val(instalmentOne + instalmentTwo);
	}
	else {
		$('#instTwo').val(instalmentTwo);
	}
	//
	totalInstalmentTwo = instalmentTwo + courseEnrolmentFee + materialsCost + instalmentFee;
	//
	$('#totalInstTwo').val(totalInstalmentTwo);
	$('#totalInstTwo').change();

	$('#dpInstalmentsNo2').val(courseDuration);
//
});

/*Instalment 3*/
$('.inst3').change(function () {
	/**/
	var costPerWeek = $('#weeklyCost3').val() * 1;
	var courseDuration = $('#courseDuration3').val() * 1;
	var materialsCost = $('#materialsCost3').val() * 1;
	var courseEnrolmentFee = $('#courseEnrolmentFee3').val() * 1;
	var instalmentFee = $('#instalmentFee3').val() * 1;
	var instalmentThree = $('#instThree').val() * 1;
	var totalInstalmentThree = $('#totalInstThree').val() * 1;
	/**/
	instalmentThree = costPerWeek * courseDuration;
	totalInstalmentThree = instalmentThree + materialsCost + courseEnrolmentFee + instalmentFee;
	/**/
	$('#instThree').val(instalmentThree);
	$('#totalInstThree').val(totalInstalmentThree);
//
	$('#totalInstThree').change();
	/**/
});

/*Instalment 4*/
$('.inst4').change(function () {
	/**/
	var costPerWeek = $('#weeklyCost4').val() * 1;
	var courseDuration = $('#courseDuration4').val() * 1;
	var materialsCost = $('#materialsCost4').val() * 1;
	var courseEnrolmentFee = $('#courseEnrolmentFee4').val() * 1;
	var instalmentFee = $('#instalmentFee4').val() * 1;
	var instalmentFour = $('#instFour').val() * 1;
	var totalInstalmentFour = $('#totalInstFour').val() * 1;
	/**/
	instalmentFour = costPerWeek * courseDuration;
	totalInstalmentFour = instalmentFour + materialsCost + courseEnrolmentFee + instalmentFee;
	/**/
	$('#instFour').val(instalmentFour);
	$('#totalInstFour').val(totalInstalmentFour);
//
	$('#totalInstFour').change();
	/**/
});
/*
 * Additional Information
 */

//Total Weeks
$('.wk').change(function () {
	var quoteType = $('#quoteType').val();
	var wkInst1 = $('#courseDuration').val() * 1;
	var wkInst2 = $('#courseDuration2').val() * 1;
	var wkInst3 = $('#courseDuration3').val() * 1;
	var wkInst4 = $('#courseDuration4').val() * 1;
//
	if (quoteType === 'Diploma') {
		wkInst2 = 0;
		wkInst3 = 0;
		wkInst4 = 0;
	}
//
	var totalStudyWeeks = wkInst1 + wkInst2 + wkInst3 + wkInst4;
//
	var instalOne = $('#instOne').val() * 1;
	var instalTwo = $('#instTwo').val() * 1;
	var instalThree = $('#instThree').val() * 1;
	var instalFour = $('#instFour').val() * 1;
//
	if (quoteType === 'Diploma') {
		instalTwo = 0;
		instalThree = 0;
		instalFour = 0;
	}
	var instlTotalVal = instalOne + instalTwo + instalThree + instalFour;
	$('#totalInstalmentsVal').val(instlTotalVal);
//
	$('#totalStudyWeeks').val(totalStudyWeeks);
});

//
var quoteType = $('#quoteType').val();
if (quoteType === 'Diploma' && courseDuration !== 0) {
	$('#healthCost').change(function () {
		var totalAmountDue = $('#totalAmountDue').val() * 1;
		//alert('Medical stuff changed...' + totalAmountDue);
		var healthCost = $(this).val() * 1;
		var newTotalAmountDue = totalAmountDue + healthCost;
		$('#totalAmountDue').val(newTotalAmountDue);
	});
//
	$('#visaFees').change(function () {
		var totalAmountDue = $('#totalAmountDue').val() * 1;
		//alert('Visa stuff changed...' + totalAmountDue);
		var visaFees = $(this).val() * 1;
		var newVisaFees = totalAmountDue + visaFees;
		//alert('Visa stuff changed... '+newVisaFees);
		$('#totalAmountDue').val(newVisaFees);
	});
}
/*
 * Gran Total Course(s) Fee
 */

$('.totalInstVal').change(function () {
	var quoteType = $('#quoteType').val();
	var firstTotal = $('#totalInstOne').val() * 1;
	var secondTotal = $('#totalInstTwo').val() * 1;
	var thirdTotal = $('#totalInstThree').val() * 1;
	var fourthTotal = $('#totalInstFour').val() * 1;
//
	if (quoteType === 'Diploma') {
		thirdTotal = 0;
		fourthTotal = 0;
		//
		var instalmentsNo = $('#instalmentsNo').val() * 1;
		var materialsCost = $('#materialsCost').val() * 1;
		var courseEnrolmentFee = $('#courseEnrolmentFee').val() * 1;
		var instalmentFee = $('#instalmentFee').val() * 1;
		//
		var courseDuration = $("#courseDuration").val() * 1;
		//
		var totalCoursesFee = $('#instOne').val() * courseDuration + courseEnrolmentFee + materialsCost + instalmentFee;
		//var totalCoursesFee = firstTotal * courseDuration;
	}
//
	//var totalCoursesFee = firstTotal + secondTotal + thirdTotal + fourthTotal;
//
	$('#totalCoursesFee').val(totalCoursesFee);
});

/* Table 1 - General Information */
$('.genInfo').change(function () {
	/**/
	var yourself = $('#yourself').val() * 1;
	var partner = $('#partner').val() * 1;
	var firstChild = $('#firstChild').val() * 1;
	var eachOtherChild = $('#eachOtherChild').val() * 1;
	var totalCourseCostInfo = $('#totalCourseCostInfo').val() * 1;
	var childrenStudyFees = $('#childrenStudyFees').val() * 1;
	var ticketFees = $('#ticketFees').val() * 1;
	var grandSum = yourself + partner + firstChild + eachOtherChild + totalCourseCostInfo + childrenStudyFees + ticketFees;
//$('#totalCourseCostInfo').val(totalCourseCostInfo) * 1;
	$('#totalFees').val(grandSum) * 1;
});

/* Table 2 - General Information */
$('.genInfo2').change(function () {
	/**/
	var yourself = $('#yourself2').val() * 1;
	var partner = $('#partner2').val() * 1;
	var firstChild = $('#firstChild2').val() * 1;
	var eachOtherChild = $('#eachOtherChild2').val() * 1;
	var totalCourseCostInfo = $('#totalCourseCostInfo2').val() * 1;
	var childrenStudyFees = $('#childrenStudyFees2').val() * 1;
	var ticketFees = $('#ticketFees2').val() * 1;
	var grandSum2 = yourself + partner + firstChild + eachOtherChild + totalCourseCostInfo + childrenStudyFees + ticketFees;
//$('#totalCourseCostInfo2').val(totalCourseCostInfo) * 1;
	$('#totalFees2').val(grandSum2) * 1;
});
/* *** *** */
/*
 * Amount Due - Payment Receipt English
 */

$('#amountPay').change(function () {
	//alert('Change??\n');
	var totalDue = $('#totalAmount').val() * 1;
	var amountPaid = $('#amountPay').val() * 1;
	var remain = totalDue - amountPaid;
	$('#amountOustanding').val(remain);
});

$('#amountPay2').change(function () {
	//alert('Change??\n');
	var totalDue = $('#totalAmount2').val() * 1;
	var amountPaid = $('#amountPay2').val() * 1;
	var remain = totalDue - amountPaid;
	$('#amountOustanding2').val(remain);
});
