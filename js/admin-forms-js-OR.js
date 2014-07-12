/**
 * 
 */
	$(function() {
		//$( ".datePicker" ).datepicker({ dateFormat: "yy-mm-dd" }); //Commented 10-08-2012
		$( ".datePicker" ).datepicker({ dateFormat: "yy-mm-dd",
										changeMonth: true,
										changeYear: true
							});
	});
	/* Submit Form */
	function submitform()
		{
			if(document.insertClient.onsubmit &&
				!document.insertClient.onsubmit())
						{
							//alert("A VER.... ???"+email);
							return false;
						}
			//else	{	
			//	alert('WHAT!?'+alert);
				//
			//	document.insertClient.submit();
			//	window.location='quotes.php?eaddress='+email;
				//alert("SOMETHING OUTSIDE THE IF INSIDE.... ???");
			//}
				
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
	//stCounsellor.add( Validate.Exclusion, { within: [ '::Choose Counsellor::' ] } ); 
	stCounsellor.add( Validate.Presence );
	//////
	var personStatus = new LiveValidation( 'personStatus', {onlyOnSubmit: true } );	
	personStatus.add( Validate.Exclusion, { within: [ '::Choose Status::' ] } ); 
	personStatus.add( Validate.Presence );
	//////
	var referredBy = new LiveValidation( 'referredBy', {onlyOnSubmit: true } );	
	referredBy.add( Validate.Exclusion, { within: [ 'referredBy' ] } ); 
	referredBy.add( Validate.Presence );
	//////
	var mobile = new LiveValidation( 'mobilePhone', {onlyOnSubmit: true } );	
	mobile.add( Validate.Presence );
	//////
	var name = new LiveValidation( 'firstName', {onlyOnSubmit: true } );
	name.add( Validate.Exclusion, { within: [ 'Enter Name' ] } ); 
	name.add( Validate.Presence );
	//////
	var lastName = new LiveValidation( 'lastName', {onlyOnSubmit: true } );
	lastName.add( Validate.Exclusion, { within: [ 'Enter Last Name' ] } ); 
	lastName.add( Validate.Presence );
	//////
    var email = new LiveValidation('emailAddress', {onlyOnSubmit: true } );
	email.add( Validate.Presence );
	email.add( Validate.Email );
	//////
	var language = new LiveValidation( 'language', {onlyOnSubmit: true } );	
	language.add( Validate.Exclusion, { within: [ '::Select Language::' ] } ); 
	language.add( Validate.Presence );
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
	
	//function saveAndOpen() {
//		document.insertClient.submit;
	//	document.getElementById('insertClient').submit.click();
//		myForm.submit.click();
		//alert('The button has been clicked...\n');
		
		
	//}
	
	});
	