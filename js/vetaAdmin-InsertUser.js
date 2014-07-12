/**
 * 
 */
	$(function() {
		$( ".datePicker" ).datepicker({ dateFormat: "yy-mm-dd",
										changeMonth: true,
										changeYear: true,
										yearRange: "1970:2080"									
							});
	});
	/* Submit Form */
	function submitform()
		{
			if(document.insertClient.onsubmit &&
				!document.insertClient.onsubmit())
						{
							//alert("SOMETHING INSIDE.... ???");
							return;
						}
				document.insertClient.submit();
				//alert("SOMETHING OUTSIDE THE IF INSIDE.... ???");
		}
/* Validate Form */
	$(document).ready(function(){
		//  Focus auto-focus fields
		$('.auto-focus:first').focus();
		
		//  Initialize auto-hint fields
		$('INPUT.auto-hint, TEXTAREA.auto-hint').focus(function(){
			if($(this).val() == $(this).attr('title')){ 
				$(this).val('');
				$(this).removeClass('auto-hint');
			}
		});
		
		$('INPUT.auto-hint, TEXTAREA.auto-hint').blur(function(){
			if($(this).val() == '' && $(this).attr('title') != ''){ 
				$(this).val($(this).attr('title'));
				$(this).addClass('auto-hint'); 
			}
		});
		
		$('INPUT.auto-hint, TEXTAREA.auto-hint').each(function(){
			if($(this).attr('title') == ''){ return; }
			if($(this).val() == ''){ $(this).val($(this).attr('title')); }
			//else { $(this).removeClass('auto-hint'); } 
		});

/* Validate Form */
	//$(document).ready(function(){
	
	var stCounsellor = new LiveValidation( 'stCounsellor', {onlyOnSubmit: true } );	
	stCounsellor.add( Validate.Exclusion, { within: [ '::Choose Counsellor::' ] } ); 
	stCounsellor.add( Validate.Presence );
	//////
        /*
	var personStatus = new LiveValidation( 'personStatus', {onlyOnSubmit: true } );	
	personStatus.add( Validate.Exclusion, { within: [ '::Choose Status::' ] } ); 
	personStatus.add( Validate.Presence );
        */
	//////
	var name = new LiveValidation( 'firstName', {onlyOnSubmit: true } );
	name.add( Validate.Exclusion, { within: [ 'Enter Name' ] } ); 
	name.add( Validate.Presence );
	//////
	var lastName = new LiveValidation( 'lastName', {onlyOnSubmit: true } );
	lastName.add( Validate.Exclusion, { within: [ 'Enter Last Name' ] } ); 
	lastName.add( Validate.Presence );
	//////
        var mobilePhone = new LiveValidation( 'mobilePhone', {onlyOnSubmit: true } );
	mobilePhone.add( Validate.Exclusion, { within: [ 'Enter Mobile Phone' ] } ); 
	mobilePhone.add( Validate.Presence );
        //////
        var email = new LiveValidation('emailAddress', {onlyOnSubmit: true } );
        email.add( Validate.Exclusion, { within: [ 'Enter Email Address' ] } );
	email.add( Validate.Presence );
	email.add( Validate.Email );
	//////
        var passNumber = new LiveValidation( 'passportNo', {onlyOnSubmit: true } );	
	passNumber.add( Validate.Exclusion, { within: [ 'Enter Passport Number' ] } ); 
	passNumber.add( Validate.Presence );
        //////
	var eduCentre = new LiveValidation( 'eduCentre', {onlyOnSubmit: true } );	
	eduCentre.add( Validate.Exclusion, { within: [ '::Choose Education Centre::' ] } ); 
	eduCentre.add( Validate.Presence );
	//////
        var language = new LiveValidation( 'language', {onlyOnSubmit: true } );	
	language.add( Validate.Exclusion, { within: [ '::Select Language::' ] } ); 
	language.add( Validate.Presence );
        //////
        var enrolmentDate = new LiveValidation( 'enrolmentDate', {onlyOnSubmit: true } );	
	enrolmentDate.add( Validate.Exclusion, { within: [ 'yyyy/mm/dd' ] } ); 
	enrolmentDate.add( Validate.Presence );
        //////
        var courseLenght = new LiveValidation( 'courseLenght', {onlyOnSubmit: true } );
        courseLenght.add( Validate.Exclusion, { within: [ 'Course Lenght' ] } ); 	
	courseLenght.add( Validate.Presence );
        //////
        var totalCourseCost = new LiveValidation( 'totalCourseCost', {onlyOnSubmit: true } );
        totalCourseCost.add( Validate.Exclusion, { within: [ 'Total Course Cost ($)' ] } ); 	
	totalCourseCost.add( Validate.Presence );
        //////
	var automaticOnSubmit = name.form.onsubmit;
		name.form.onsubmit = function(){
			var valid = automaticOnSubmit();
			if(valid)
			{
				alert('Thank you! the form is valid and ready to go!');
				//function submit(){
					document.form.submit();
					return true;
				//}
			}
			else alert('Sorry! the form is not valid.... yet! \n\n Please check the fields with red border. ');
			return false;
		};
	
	});