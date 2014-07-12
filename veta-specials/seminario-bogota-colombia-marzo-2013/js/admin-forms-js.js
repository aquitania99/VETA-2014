	$(function() {
		$( ".datePicker" ).datepicker({ 
			yearRange: "1970:2006",
			dateFormat: "mm-dd-yy",
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
//	

		$('#occupationName').hide();
		$('#courseName').hide();
		$('#schoolName').hide();
		
		$("input[name=hasWork]").change(function(){          
            
			if ($(this).val() == "Si") {
				$("#occupationName").show('slow')	
			$("#occupationName").html("<td align='left' valign='middle'>Nombre de la Ocupaci&oacute;n</td>\n<td align='left' valign='middle'><input name='occupation' type='text' id='occupation' size='40' /></td>" +
				  "<script type='text/javascript'>var occupation = new LiveValidation( 'occupation', {onlyOnSubmit:true } ); occupation.add( Validate.Presence );</script>")		
            }
            else {
				$("#occupationName").hide('slow')
				$("#occupationName").html("<td align='left' valign='middle'>Nombre de la Ocupaci&oacute;n</td>\n<td align='left' valign='middle'><input name='occupation' type='text' id='occupation' size='40' /></td>")
            }                                                            
       });
//});
		
		$('#educationLevel').change(function(){
			$('#schoolName').show('slow');
			$('#courseName').show('slow');
		});
//
	
//  Focus auto-focus fields
/*
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
*/
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
	/*
	var nationality = new LiveValidation( 'nationality', {onlyOnSubmit: true } );
	nationality.add( Validate.Exclusion, { within: [ 'Please select one' ] } ); 
	nationality.add( Validate.Presence );
	//////
	var passport = new LiveValidation( 'passport', {onlyOnSubmit: true } );
	passport.add( Validate.Exclusion, { within: [ 'Please select one' ] } ); 
	passport.add( Validate.Presence );
	//////
	*/
    var educationLevel = new LiveValidation( 'educationLevel', {onlyOnSubmit: true } );
	educationLevel.add( Validate.Exclusion, { within: [ 'Seleccione Una Opcion' ] } ); 
	educationLevel.add( Validate.Presence );
	//////
	var schoolName = new LiveValidation( 'schoolName', {onlyOnSubmit: true } );
	schoolName.add( Validate.Presence );
	//////
	
	//////
	var dob = new LiveValidation('dob', {onlyOnSubmit: true } );
	dob.add( Validate.Presence );
	//////
	/*
	var engTest = new LiveValidation( 'engTest', {onlyOnSubmit: true } );
	engTest.add( Validate.Exclusion, { within: [ 'Please select one' ] } ); 
	engTest.add( Validate.Presence );
	//////
	
	var engTestExam = new LiveValidation( 'engTestExam', {onlyOnSubmit: true } );
	engTestExam.add( Validate.Exclusion, { within: [ 'Please select one' ] } ); 
	engTestExam.add( Validate.Presence );
	*/
	
	//////
	var whereKnewAboutUs = new LiveValidation( 'whereKnewAboutUs', {onlyOnSubmit: true } );
	whereKnewAboutUs.add( Validate.Exclusion, { within: [ 'Seleccione Una Opcion' ] } );
	whereKnewAboutUs.add( Validate.Presence );
	//////
	var terms = new LiveValidation( 'terms' );	
	terms.add( Validate.Acceptance );
	//////
	
	var automaticOnSubmit = document.form1.onsubmit;
		document.form1.onsubmit = function(){
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