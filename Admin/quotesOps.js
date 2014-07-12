/* 1 */
$('.inst1').val(0);
$('.inst2').val(0);
$('.inst3').val(0);
$('.inst4').val(0);
$('.instNo').val(0);

$('.moreInstalments').hide();

// Instalment 1
$('.inst1').change(function () {

	var weeklyCost = $('#weeklyCost').val() * 1;
	var courseDuration = $('#courseDuration').val() * 1;
	var materialsCost = $('#materialsCost').val() * 1;
	var courseEnrolmentFee = $('#courseEnrolmentFee').val() * 1;
	var instalmentFee = $('#instalmentFee').val() * 1;
	var divided = $('#instalmentsNo').val() * 1;
	var instalment1 = (weeklyCost * courseDuration / divided);
	var instalmentOne = weeklyCost * courseDuration;
	var total = instalment1 + materialsCost + courseEnrolmentFee;
	$('#instOne').val(total) * 1;
	//
	var totalCourseFees = instalmentOne + materialsCost + courseEnrolmentFee;
	$('#totalCourseFees').val(totalCourseFees) * 1;
	var deposit = $('#deposit').val() * 1;
	var health = $('#healthCover').val() * 1;

	$('#healthCover').change(function () {
		var result = $('#healthCover').val() * 1 + $('#totalAmountDue').val(totalAmountDue) * 1;
		alert('total' + total + ' ' + instalmentFee + ' ' + health);
		$('#totalAmountDue').val(totalAmountDue) * 1;
//  $('#totalCourseFees').val(totalCourseFees)*1;
		var totalAmountDue = total + instalmentFee + health;
		alert('total' + total + ' ' + instalmentFee + ' ' + health);
	});
	var totalAmountDue = total + instalmentFee + health;
	alert('total' + total + ' ' + instalmentFee + ' ' + health);
	//
	$('#totalAmountDue').val(totalAmountDue) * 1;
	$('#courseInstalment').val(instalmentOne) * 1;
});

// Rest Bond to Total Course Cost
$('#bond').change(function () {
	instalmentVal = $('#courseInstalment').val() * 1;
	bond = $('#bond').val() * 1;
	//
	totalInstCost = instalmentVal - bond;
	//
	$('#courseInstalment').val(totalInstCost) * 1;
	//
	if ($('#courseInstalment').change()) {
		alert('NEW VALUE! ' + $('#courseInstalment').val() + '\n');
	}
});
$('#courseInstalment').change(function () {
	totalInstCost = $('#courseInstalment').val();
	//alert('SOMETHING'+totalInstCost+'\n\n');
	$('#totalCourseCost').val(totalInstCost);
});
//
$('#deposit').change(function () {
	var deposit = $('#deposit').val() * 1;
	var instalment = $('#courseInstalment').val() * 1;
	if (deposit > 0) {
		totalInstCost = instalment + deposit;
		alert('The value to pay... ' + totalInstCost + '\n\n');
		$('#courseInstalment').val(totalInstCost);
		$('#totalCourseCost').val(totalInstCost);
	}
});
//
/*
 if ($('#courseInstalment').val() != 0){
 $('#courseDuration').change( function() {
 weeklyCost = $('#weeklyCost').val()*1;
 courseDuration = $('#courseDuration').val()*1;
 materialsCost = $('#materialsCost').val()*1;
 courseEnrolmentFee = $('#courseEnrolmentFee').val()*1;
 instalmentFee  = $('#instalmentFee').val()*1;
 //
 alert(weeklyCost+' '+courseDuration+' '+materialsCost+' '+courseEnrolmentFee)
 //var temp = instalmentOne*1;
 //
 instalmentOne = weeklyCost*courseDuration+materialsCost+courseEnrolmentFee;
 $('#courseInstalment').val(instalmentOne)*1;
 });
 //
 //
 $('#instalmentFee').change(function() {
 instalmentFee = $('#instalmentFee').val()*1;
 if (instalmentFee !=''){
 //
 materiales = $('#materialsCost').val()*1;
 enrolmentFee = $('#courseEnrolmentFee').val()*1;
 test = (temp+materiales+enrolmentFee);
 alert(test+'\n');
 instalmentOne = (temp + materiales + enrolmentFee + instalmentFee);
 $('#courseInstalment').val(instalmentOne);
 }
 });
 }

 /**/
function addNewInst(instalment) {

	switch (instalment) {
		case 2:
			$('#moreInstalments2').show('slow');
			$('#addMoreInst2').remove();
			break;

		case 3:
			$('#moreInstalments3').show('slow');
			$('#addMoreInst3').remove();
			break;

		case 4:
			$('#moreInstalments4').show('slow');
			$('#addMoreInst4').remove();
			break;
	}
}
/**/
/*
 if ($('#weeklyCost').change( function() {
 if ($('#courseInstalment').val() !=0){
 weeklyCost = $('#weeklyCost').val();
 courseDuration = $('#courseDuration').val();
 instalmentOne = (weeklyCost * courseDuration) + materials + enrolmentFee + instalmentFee;
 $('#courseInstalment').val(0);
 //
 $('#courseInstalment').val(instalmentOne);
 //alert('NEW Instalment Value $: '+instalmentOne+'\n')
 }
 })
 );
 */
// Instalment 2

//
//             $('#instalmentFee2').change(function() {
$('.inst2').change(function () {
	weeklyCost = $('#weeklyCost2').val() * 1;
	courseDuration = $('#courseDuration2').val() * 1;
	materialsCost = $('#materialsCost2').val() * 1;
	courseEnrolmentFee = $('#courseEnrolmentFee2').val() * 1;
	instalmentFee = $('#instalmentFee2').val() * 1;
	//
	instalmentTwo = weeklyCost * courseDuration + materialsCost + courseEnrolmentFee + instalmentFee;
	$('#courseInstalment2').val(instalmentTwo) * 1;
	//
	//alert('Weekly Cost $'+weeklyCost+' Materials Cost $'+materialsCost+' Course duration (Wks) '+courseDuration+' Enrolment Fee $'+courseEnrolmentFee+' Instalment Fee $'+instalmentFee+'\n'+'Total :'+instalmentTwo+'\n');
	//var temp = instalmentOne*1;
});
//
// Instalment 3

//
//$('#instalmentFee3').change(function() {
$('.inst3').change(function () {
	weeklyCost = $('#weeklyCost3').val() * 1;
	courseDuration = $('#courseDuration3').val() * 1;
	materialsCost = $('#materialsCost3').val() * 1;
	courseEnrolmentFee = $('#courseEnrolmentFee3').val() * 1;
	instalmentFee = $('#instalmentFee3').val() * 1;
	//
	instalmentThree = weeklyCost * courseDuration + materialsCost + courseEnrolmentFee + instalmentFee;
	$('#courseInstalment3').val(instalmentThree) * 1;
	//
});
//
$('.inst4').change(function () {
	weeklyCost = $('#weeklyCost4').val() * 1;
	courseDuration = $('#courseDuration4').val() * 1;
	materialsCost = $('#materialsCost4').val() * 1;
	courseEnrolmentFee = $('#courseEnrolmentFee4').val() * 1;
	instalmentFee = $('#instalmentFee4').val() * 1;
	bond = $('#bond').val() * 1;
	//
	instalmentFour = weeklyCost * courseDuration + materialsCost + courseEnrolmentFee + instalmentFee;
	$('#courseInstalment4').val(instalmentFour) * 1;
	//
});
// Total Course Cost
$('#instalmentFee').change(function () {
	var totalCourseCost = 0;
	totalCourseCost = $('#courseInstalment').val() - $('#bond').val() * 1;
	$('#totalCourseCost').val(totalCourseCost) * 1;
	alert('Total course AU$: ' + totalCourseCost + '\n');
	$('#totalCourseCostInfo').val(totalCourseCost) * 1;
});
//
$('#instalmentFee2').change(function () {
	var totalCourseCost = 0;
	totalCourseCost = $('#courseInstalment').val() * 1 + $('#courseInstalment2').val() * 1;
	$('#totalCourseCost').val(totalCourseCost) * 1;
	alert('Total course AU$: ' + totalCourseCost + '\n');
	$('#totalCourseCostInfo').val(totalCourseCost) * 1;
});
//
$('#instalmentFee3').change(function () {
	var totalCourseCost = 0;
	totalCourseCost = $('#courseInstalment').val() * 1 + $('#courseInstalment2').val() * 1 + $('#courseInstalment3').val() * 1;
	$('#totalCourseCost').val(totalCourseCost) * 1;
	alert('Total course AU$: ' + totalCourseCost + '\n');
	$('#totalCourseCostInfo').val(totalCourseCost) * 1;
});
//
$('#instalmentFee4').change(function () {
	var totalCourseCost = 0;
	totalCourseCost = $('#courseInstalment').val() * 1 + $('#courseInstalment2').val() * 1 + $('#courseInstalment3').val() * 1 + $('#courseInstalment4').val() * 1;
	$('#totalCourseCost').val(totalCourseCost) * 1;
	alert('Total course AU$: ' + totalCourseCost + '\n');
	$('#totalCourseCostInfo').val(totalCourseCost) * 1;
});
//