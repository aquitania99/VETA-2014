	$(function() {
		$( ".datePicker" ).datepicker({ 
			yearRange: "1970:2050",
			dateFormat: "yy-mm-dd",
			changeMonth: true,
			changeYear: true
		});
		//$( ".datePicker" ).datepicker();
	});

	/* Submit Form */
	function submitform()
		{
			if(document.form1.onsubmit &&
				!document.form1.onsubmit())
						{
							//alert("SOMETHING INSIDE.... ???");
							return;
						}
				document.form1.submit();
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
	/////
	var name = new LiveValidation( 'name', {onlyOnSubmit: true } );	
	name.add( Validate.Presence );
	//////
	var lastName = new LiveValidation( 'lastName', {onlyOnSubmit: true } );	 
	lastName.add( Validate.Presence );
	//////
	var email = new LiveValidation('email', {onlyOnSubmit: true } );
	email.add( Validate.Presence );
	email.add( Validate.Email );
	//////
	var nationality = new LiveValidation( 'nationality', {onlyOnSubmit: true } );
	nationality.add( Validate.Exclusion, { within: [ 'Please select one' ] } ); 
	nationality.add( Validate.Presence );
	//////
	var passport = new LiveValidation( 'passport', {onlyOnSubmit: true } );
	passport.add( Validate.Exclusion, { within: [ 'Please select one' ] } ); 
	passport.add( Validate.Presence );
	//////
    var profession = new LiveValidation( 'profession', {onlyOnSubmit: true } );
	profession.add( Validate.Exclusion, { within: [ 'Please select one' ] } ); 
	profession.add( Validate.Presence );
	//////
	var workExperience = new LiveValidation( 'workExperience', {onlyOnSubmit: true } );
	workExperience.add( Validate.Exclusion, { within: [ 'Please select one' ] } ); 
	workExperience.add( Validate.Presence );
	//////
	var dob = new LiveValidation('dob', {onlyOnSubmit: true } );
	dob.add( Validate.Presence );
	//////
	var engTest = new LiveValidation( 'engTest', {onlyOnSubmit: true } );
	engTest.add( Validate.Exclusion, { within: [ 'Please select one' ] } ); 
	engTest.add( Validate.Presence );
	//////
	/*
	var engTestExam = new LiveValidation( 'engTestExam', {onlyOnSubmit: true } );
	engTestExam.add( Validate.Exclusion, { within: [ 'Please select one' ] } ); 
	engTestExam.add( Validate.Presence );
	*/
	//////
	var whereKnewAboutUs = new LiveValidation( 'whereKnewAboutUs', {onlyOnSubmit: true } );
	whereKnewAboutUs.add( Validate.Exclusion, { within: [ 'Please select one' ] } ); 
	whereKnewAboutUs.add( Validate.Presence );
	//////
	var terms = new LiveValidation( 'terms' );	
	terms.add( Validate.Acceptance );
	//////
	
	var automaticOnSubmit = name.form1.onsubmit;
		name.form1.onsubmit = function(){
			var valid = automaticOnSubmit();
			if(valid)
			{
				alert('Thank you! the form is valid and ready to go!');
				//function submit(){
					document.form1.submit();
					return true;
				//}
			}
			else alert('Sorry! the form is not valid.... yet! \n\n Please check the fields with red border. ');
			return false;
		};
	
	});