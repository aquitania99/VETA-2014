/**
 * Created with JetBrains PhpStorm.
 * User: smedi_000
 * Date: 16/06/13
 * Time: 10:24 AM
 * To change this template use File | Settings | File Templates.
 */
/**/
//var weeklyCost;
//var courseDuration;
var weeklyCost = $("#weeklyCost").val() * 1;
var courseDuration = $("#courseDuration").val() * 1;
var materiales = $("#materialsCost").val() * 1;
var enrolmentFee = $("#courseEnrolmentFee").val() * 1;
var instalmentFee = $("#instalmentFee").val() * 1;
var totalInstalment;
/*
 var courseInstalment;
 var totalCourseCost;
 */
//
alert(courseInstalment + ' ' + courseInstalment2 + ' ' + courseInstalment3 + ' ' + courseInstalment4);
//
$('.moreInstalments').hide();

// Instalment 1

instalmentOne = weeklyCost * courseDuration;
$('#courseInstalment').val(instalmentOne);
var temp = instalmentOne * 1;
//
/**/
if ($('#weeklyCost').change(function () {
	if ($('#courseInstalment').val() != 0) {
		weeklyCost = $("#weeklyCost").val();
		courseDuration = $("#courseDuration").val();
		instalmentOne = (weeklyCost * courseDuration) + materials + enrolmentFee + instalmentFee;
		$('#courseInstalment').val(0);
		//
		$('#courseInstalment').val(instalmentOne);
		//alert('NEW Instalment Value $: '+instalmentOne+'\n')
	}
})
	);
/*
 $("#courseDuration").change( function() {

 //
 instalmentOne = weeklyCost*courseDuration;
 $('#courseInstalment').val(instalmentOne);
 var temp = instalmentOne*1;
 //
 $("#instalmentFee").change(function() {
 instalmentFee = $("#instalmentFee").val()*1;
 if (instalmentFee !=''){
 //
 materiales = $("#materialsCost").val()*1;
 enrolmentFee = $("#courseEnrolmentFee").val()*1;
 test = (temp+materiales+enrolmentFee);
 alert(test+'\n');
 instalmentOne = (temp + materiales + enrolmentFee + instalmentFee);
 $('#courseInstalment').val(instalmentOne);
 }
 });
 });
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

// Instalment 2
$("#courseDuration2").change(function () {
	weeklyCost = $("#weeklyCost2").val();
	courseDuration = $("#courseDuration2").val();
	instalmentOne = (weeklyCost * courseDuration / 2);
	$('#courseInstalment2').val(instalmentOne);
	//alert(instalmentOne+'\n');
});
/**/
if ($('#weeklyCost2').change(function () {
	if ($('#courseInstalment2').val() != 0) {
		weeklyCost = $("#weeklyCost2").val();
		courseDuration = $("#courseDuration2").val();
		instalmentOne = (weeklyCost * courseDuration / 2);
		$('#courseInstalment2').val(0);
		//
		$('#courseInstalment2').val(instalmentOne);
		//alert('NEW Instalment Value $: '+instalmentOne+'\n')
	}
})
	);

// Instalment 3
$("#courseDuration3").change(function () {
	weeklyCost = $("#weeklyCost3").val();
	courseDuration = $("#courseDuration3").val();
	instalmentOne = (weeklyCost * courseDuration / 2);
	$('#courseInstalment3').val(instalmentOne);
	//alert(instalmentOne+'\n');
});
/**/
if ($('#weeklyCost3').change(function () {
	if ($('#courseInstalment3').val() != 0) {
		weeklyCost = $("#weeklyCost3").val();
		courseDuration = $("#courseDuration3").val();
		instalmentOne = (weeklyCost * courseDuration / 2);
		$('#courseInstalment3').val(0);
		//
		$('#courseInstalment3').val(instalmentOne);
		//alert('NEW Instalment Value $: '+instalmentOne+'\n')
	}
})
	);

// Instalment 4
$("#courseDuration4").change(function () {
	weeklyCost = $("#weeklyCost4").val();
	courseDuration = $("#courseDuration4").val();
	instalmentOne = (weeklyCost * courseDuration / 2);
	$('#courseInstalment4').val(instalmentOne);
	//alert(instalmentOne+'\n');
});
/**/
if ($('#weeklyCost4').change(function () {
	if ($('#courseInstalment4').val() != 0) {
		weeklyCost = $("#weeklyCost4").val();
		courseDuration = $("#courseDuration4").val();
		instalmentOne = (weeklyCost * courseDuration / 2);
		$('#courseInstalment4').val(0);
		//
		$('#courseInstalment4').val(instalmentOne);
		//alert('NEW Instalment Value $: '+instalmentOne+'\n')
	}
})
	);

//if (courseInstalment != '' || courseInstalment2 != '' || courseInstalment3 != '' || courseInstalment4 != ''){
if (courseInstalment > 0 || courseInstalment2 > 0 || courseInstalment3 > 0 || courseInstalment4 > 0);
alert(courseInstalment + ' ' + courseInstalment2 + ' ' + courseInstalment3 + ' ' + courseInstalment4 + '\n');
if ($('#courseInstalment').change(function () {
	if ($('#courseInstalment').val() != 0) {
		totalCourseCost = (courseInstalment + courseInstalment2 + courseInstalment3 + courseInstalment4);
		$('#totalCourseCost').val(totalCourseCost);
		alert('TOTAL ' + totalCourseCost + '\n');
	}
})
	);
