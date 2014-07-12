/**
 * 
 */
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
               /////////// PASSWORD
               $('INPUT.auto-hint, PASSWORD.auto-hint').focus(function(){
			if($(this).val() == $(this).attr('title')){ 
				$(this).val('');
				$(this).removeClass('auto-hint');
			}
		});
		
		$('INPUT.auto-hint, PASSWORD.auto-hint').blur(function(){
			if($(this).val() == '' && $(this).attr('title') != ''){ 
				$(this).val($(this).attr('title'));
				$(this).addClass('auto-hint'); 
			}
		});
		
		$('INPUT.auto-hint, PASSWORD.auto-hint').each(function(){
			if($(this).attr('title') == ''){ return; }
			if($(this).val() == ''){ $(this).val($(this).attr('title')); }
			else { $(this).removeClass('auto-hint'); }
		});

/* Validate Form */
	//$(document).ready(function(){
	//////
    var email = new LiveValidation('LoginName', {onlyOnSubmit: true } );
        email.add ( Validate.Exclusion, { within: [ 'Please type the email registered with us' ] } );
	email.add( Validate.Presence );
	email.add( Validate.Email );
	//////
	var password = new LiveValidation( 'Password', {onlyOnSubmit: true } );	
        password.add ( Validate.Exclusion, { within: [ 'Please type in your password' ] } );
	password.add( Validate.Presence );
	//////
	var automaticOnSubmit = name.form.onsubmit;
		name.form.onsubmit = function(){
			var valid = automaticOnSubmit();
			if(valid)
			{
				alert('Welcome back! you are being redirected in a moment we\'ll be there!');
				//function submit(){
					document.form.submit();
					return true;
				//}
			}
			else alert('Ooops! Sorry there\'s something wrong....! \n\n Please check the fields with red border. ');
			return false;
		};
	
	});