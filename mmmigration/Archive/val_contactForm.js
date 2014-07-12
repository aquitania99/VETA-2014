function validateForm(theForm){
	if (theForm.firstname.value==""){
		alert("Please enter your first name.");
		theForm.firstname.focus();
		return(false);
	}
	if (theForm.lastname.value==""){
		alert("Please enter your last name.");
		theForm.lastname.focus();
		return(false);
	}
	Ctrl = theForm.email;
	if (theForm.email.value==""){
	alert("Please enter your email address.");
	theForm.email.focus();
	return(false);
	}
	else if (Ctrl.value==" " || Ctrl.value.indexOf ('@',0) == -1)
	{
	alert("Please enter a valid email address.");
	theForm.email.focus();
	return(false);
	}
	else if (Ctrl.value==" " || Ctrl.value.indexOf ('.',0) == -1){
	alert("Please enter a valid email address.");
	theForm.email.focus();
	return(false);
	}
	if (theForm.email.value != theForm.emailconfirm.value){	
	alert("WOOPS: Please re-confirm your email.");
	theForm.email.focus();
	return (false);	}

	return(true);
	}