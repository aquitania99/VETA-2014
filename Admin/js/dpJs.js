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
	instalmentOne = (costPerWeek * courseDuration );
	if (quoteType == 'Diploma' && courseDuration != 0) {
		instalmentOne = costPerWeek * courseDuration / courseDuration;
		$('#instOne').val(instalmentOne);
	}
	else {
		$('#instOne').val(instalmentOne);
	}
	firstTotal = instalmentOne + courseEnrolmentFee + materialsCost + instalmentFee;
	totalAmountDue = instalmentOne + healthCost + visaFees - deposit + courseEnrolmentFee + materialsCost + instalmentFee - bond;
	$('#totalInstOne').attr('value', firstTotal);
	$('#totalInstOne').change();
//$('#totalAmountDue').val(totalAmountDue);
	$('#totalAmountDue').attr('value', totalAmountDue);
//$('#remainingCost').val(costPerTerm);totalInstOne
});

/*Instalment 2*/
$('.inst2').change(function () {
	//alert('got here..Inst2');
	/**/
	var quoteType = $('#quoteType').val();
	//
	var costPerWeek = $('#weeklyCost2').val() * 1;
	var courseDuration = $('#courseDuration2').val() * 1;
	var instalmentsNo = $('#instalmentsNo2').val() * 1;
	var materialsCost = $('#materialsCost2').val() * 1;
	var courseEnrolmentFee = $('#courseEnrolmentFee2').val() * 1;
	var instalmentTwo = $('#instTwo').val() * 1;
	var totalInstTwo = $('#totalInstTwo').val() * 1;
	var healthCost = $('#healthCost').val() * 1;
	var instalmentFee = $('#instalmentFee2').val() * 1;
	var visaFees = $('#visaFees').val() * 1;
	var totalAmountDue = $('#totalAmountDue').val() * 1;
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
	instalmentTwo = costPerWeek * courseDuration;
	totalInstalmentTwo = instalmentTwo + materialsCost + courseEnrolmentFee + instalmentFee;
	//
	if (quoteType == 'Diploma' && courseDuration != 0) {
		//alert (quoteType + 'Inside the IF... \n It meets the parameters...');
		instalmentTwo = costPerWeek * courseDuration / courseDuration;
		$('#instTwo').val(instalmentTwo);
		//
		secondTotal = instalmentTwo + courseEnrolmentFee + materialsCost + instalmentFee;
		//totalAmountDue = instalmentOne + healthCost + visaFees + deposit + courseEnrolmentFee + materialsCost + instalmentFee - bond;
		/**/
			//$('#totalInstOne').val(totalInstOne);
			//$('#totalInstOne').val(firstTotal);
		$('#totalInstTwo').attr('value', secondTotal);
		//
		$('#totalInstTwo').change();
		//$('#totalAmountDue').val(totalAmountDue);
		$('#totalAmountDue').attr('value', totalAmountDue);
		//$('#remainingCost').val(costPerTerm);totalInstOne
	}
	else {
		$('#instTwo').val(instalmentTwo);
		//$('#instTwo').val(instalmentTwo);
		$('#instTwo').attr('value', instalmentTwo);
		//$('#totalInstTwo').val(totalInstalmentTwo);
		$('#totalInstTwo').attr('value', totalInstalmentTwo);
		//
		$('#totalInstTwo').change();
	}
	/*
	 //$('#instTwo').val(instalmentTwo);
	 $('#instTwo').attr('value',instalmentTwo);
	 //$('#totalInstTwo').val(totalInstalmentTwo);
	 $('#totalInstTwo').attr('value',totalInstalmentTwo);
	 //
	 $('#totalInstTwo').change();
	 /**/
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
	var wkInst1 = $('#courseDuration').val() * 1;
	var wkInst2 = $('#courseDuration2').val() * 1;
	var wkInst3 = $('#courseDuration3').val() * 1;
	var wkInst4 = $('#courseDuration4').val() * 1;
//
	if (!wkInst3.length && !wkInst4.length) {
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
	if (!instalThree.length && !instalFour.length) {
		instalThree = 0;
		instalFour = 0;
	}
//
	var instlTotalVal = instalOne + instalTwo + instalThree + instalFour;
//
	var dipInstalments = wkInst1;
	var dipInstalments2 = wkInst2;
//
	$('#totalStudyWeeks').val(totalStudyWeeks);
//
	$('#dpInstalmentsNo').val(dipInstalments);

	//
	$('#dpInstalmentsNo2').val(dipInstalments2);
	//
	//$('#totalInstalmentsVal').val(instlTotalVal);
});

$('#courseDuration').change(function () {
	if ($(this).val() > 0) {
		childInst(1);
	}
});

$('#courseDuration2').change(function () {
	if ($(this).val() > 0) {
		$('#totalInstalmentsVal').val();
		childInst(2);
	}
});
//

//ADD OR REMOVE NEW INSTALMENT BOXES TO EACH DIPLOMA
function childInst(dipInstalments) {
	var diploma = dipInstalments;
	//alert('Numero de instlaments... ' + instsNo + ' \n');
	if (diploma == 1) {
		var i = 1;
		var instsNo = $('#courseDuration').val();
		var divs;
		var html;
		divs = $('.testing').length;
		//alert("Resta... " + divs + "\n");
		if (divs <= 1) {
			//alert ('NO HAY DIVS AUN...\n');
			for (i; i < instsNo; i++) {
				html = '<div class="input-prepend pull-left testing instal' + (i) + '" style="margin-right:2em;">' +
					'<span class="add-on">$</span>' +
					'<input type="text" name="instal' + (i + 1) + '" id="instal' + (i + 1) + '" placeholder="Term No: ' + (i + 1) + '" class="instclass span2"></div>';
				$('#addInsts1').append(html);
			}
		}
		if (divs > 1 && divs < instsNo) {
			if (instsNo > divs) {
				var j = 1;
				var addDivs = (instsNo - divs) * 1;
				//
				//alert ('YA HAY' + divs + ' DIVS...\n PONGAMOS '+ addDivs +' MAS!! \n');
				for (j; j <= addDivs; j++) {
					html = '<div class="input-prepend pull-left testing instal' + (divs + j) + '" style="margin-right:2em;">' +
						'<span class="add-on">$</span>' +
						'<input type="text" name="instal' + (divs + j) + '" id="instal' + (divs + j) + '" placeholder="Term No: ' + (divs + j) + '" class="instclass span2"></div>';
					$('#addInsts1').append(html);
				}
			}
		}
		if (divs > 1 && divs > instsNo) {
			//
			if (divs > instsNo) {
				var delDivs = (divs - instsNo) * 1;
				var k = divs;
				alert('ESTA ES K ' + k + ' =)');
				//
				alert('HAY ' + divs + ' DIVS...\n QUITEMOS ' + delDivs + ' !! \n');
				for (k; k > delDivs; k--) {
					$('.instal' + k).remove();
					alert(k);
					console.log(k);
				}
			}
			//
		}
	}

	/* EL DIPLOMA 2 */
	if (diploma == 2) {
		var i = 1;
		var instsNo = $('#courseDuration2').val();
		var divs;
		var html;
		divs = $('.testing2').length;
		//alert("Resta... " + divs + "\n");
		if (divs <= 1) {
			//alert ('NO HAY DIVS AUN...\n');
			for (i; i < instsNo; i++) {
				html = '<div class="input-prepend pull-left testing2 instal' + (i) + '" style="margin-right:2em;">' +
					'<span class="add-on">$</span>' +
					'<input type="text" name="instalm' + (i + 1) + '" id="instalm' + (i + 1) + '" placeholder="Term No: ' + (i + 1) + '" class="instclass span2"></div>';
				$('#addInsts2').append(html);
			}
		}
		if (divs > 1 && divs < instsNo) {
			if (instsNo > divs) {
				var j = 1;
				var addDivs = (instsNo - divs) * 1;
				//
				//alert ('YA HAY' + divs + ' DIVS...\n PONGAMOS '+ addDivs +' MAS!! \n');
				for (j; j <= addDivs; j++) {
					html = '<div class="input-prepend pull-left testing2 instal' + (divs + j) + '" style="margin-right:2em;">' +
						'<span class="add-on">$</span>' +
						'<input type="text" name="instalm' + (divs + j) + '" id="instalm' + (divs + j) + '" placeholder="Term No: ' + (divs + j) + '" class="instclass span2"></div>';
					$('#addInsts2').append(html);
				}
			}
		}
		if (divs > 1 && divs > instsNo) {
			//
			if (divs > instsNo) {
				var delDivs = (divs - instsNo) * 1;
				var k = divs;
				alert('ESTA ES K ' + k + ' =)');
				//
				alert('HAY ' + divs + ' DIVS...\n QUITEMOS ' + delDivs + ' !! \n');
				for (k; k > delDivs; k--) {
					$('.instal' + k).remove();
					alert(k);
					console.log(k);
				}
			}
			//
		}
	}
}
//ADD OR REMOVE NEW INSTALMENT BOXES END

//$('#addInsts1.newInstalment').on('change', function() {
$('#addInsts1').on('change', '.instclass', function () {

	var newInst = $(this).val() * 1;
	var totalInstVal = $('#totalInstalmentsVal').val() * 1;
	var totalCoursesFee = $('#totalCoursesFee').val() * 1;
	var instOne = $('#instOne').val() * 1;
	var instTwo = $('#instTwo').val() * 1;
	var res = newInst + totalInstVal + instOne + instTwo;
	var tot = newInst + totalCoursesFee;
	$('#totalInstalmentsVal').val(res);
	$('#totalCoursesFee').val(tot);
	$('#totalCoursesFee').change();
});
//
$('#addInsts2').on('change', '.instclass', function () {
	var newInst = $(this).val() * 1;
	var totalInstVal = $('#totalInstalmentsVal').val() * 1;
	var totalCoursesFee = $('#totalCoursesFee').val() * 1;
	var instOne = $('#instOne').val() * 1;
	var instTwo = $('#instTwo').val() * 1;
	var res = newInst + instOne + instTwo;
	var tot = newInst + totalCoursesFee;
	$('#totalInstalmentsVal').val(res);
	$('#totalCoursesFee').val(tot);
	$('#totalCoursesFee').change();
});
