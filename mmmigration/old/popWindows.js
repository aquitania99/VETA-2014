function popFileUploader(formName, fieldName) {
	popupWin=window.open("fileUploader.asp?action=load&fieldname="+fieldName+"&formName="+formName+"","AddImage","scrollbars=no,dependent,titlebar=no,alwaysontop=yes,width=300,height=250,left=50,top=50")
}
