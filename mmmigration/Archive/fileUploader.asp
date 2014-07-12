
<% dim action, fileNameError, upl, uploaddir
if request("action") = "saveImage" then 
	Set upload   = Server.CreateObject( "w3.upload" )
	actualName = randomString&".doc"
	Set fileName  = upload.Form( "FILE1" )
	if fileName.IsFile then
		'response.write Server.MapPath("cvuploads") &"\"& actualName
		fileName.SaveToFile( Server.MapPath("\") & "\cvuploads\" & actualName )
		 Response.Redirect("fileUploader.asp?action=close&cvname="&actualName&"")
	else
		session("msg") = session("msg")&"<br /><span class=""red"">An error occurred when saving the file on the server.</span>"
		Response.Redirect "fileUploader.asp?action=error"
	end if

	function randomString()
		dim random_number, pass_length, top_number, counter, thisNumber
		redim randomLetters(3)
		pass_length=10 ' (this lenght changes due to the randomiser)
		' Determines the highest value for any unique random number
		top_number=9
		randomLetters(1) = "wSp8niMalS"
		randomLetters(2) = "worLdSocIet5"
		randomLetters(3) = "pRoteCT10n"
		random_number = ""
		randomize
		For counter = 1 to pass_length
			thisNumber = Int(Rnd * top_number)+1
			random_number = random_number&thisNumber
			if Int(Rnd * top_number) = 4 or Int(Rnd * top_number) = 3 then ' add some letters
				random_number = random_number&left(mid(randomLetters(1),thisNumber),1)
			end if
		next
		randomString = random_number
	end function

end if 
response.write "<html><head><title>Upload your file!</title>"&chr(13)
response.write "<LINK rel=stylesheet type=""text/css"" href=""uploader.css"">"&chr(13)
action = request("action")
select case action
	case "load" 
		if request("formName") <> "" then
			session("formName") = request("formName")
			session("fieldName") = request("fieldName")
		end if
			%>
		<SCRIPT language=JavaScript>
		<!--
			function validateUploadForm(theForm) {
				Ctrl = theForm.FILE1;
				if (Ctrl.value==""){
				alert("Please locate your CV using the 'browse' button.");
				theForm.FILE1.focus();
				return(false);
				}
				if (Ctrl.value.indexOf ('.doc',0) == -1 && Ctrl.value.indexOf ('.DOC',0) == -1){
				alert("Please send your CV as a word document, all other file types are not accepted.");
				theForm.FILE1.focus();
				return(false);
				}
				if (Ctrl.value.indexOf ('&',0) != -1 | Ctrl.value.indexOf ('-',0) != -1) {
				alert("Please rename the file you have selected, making sure that the file name contains no spaces, hyphens or ampersands.");
				theForm.FILE1.focus();
				return(false);
				}
				toggle('pleasewait');
				toggle('pleaseupload');
				toggle('instructions');
				toggle('filename');
				toggle('submit');				
				toggle('animator');
				show_progress()
			}
	
	function toggle(target)
	{ obj=(document.all) ? document.all[target] : document.getElementById(target);
	  obj.style.display=(obj.style.display=='none') ? 'inline' : 'none';
	}
		function validateUploadFormALL(theForm) {
			Ctrl = theForm.FILE1;
			if (Ctrl.value==""){
			alert("Please locate your CV using the 'browse' button.");
			theForm.FILE1.focus();
			return(false);
			}
		}
function show_progress() 
{ 

var dv = document.getElementById('saveevent'); 
var pg = document.getElementById('progress'); 

if(dv && pg) { 
dv.style.display = 'none'; 
pg.style.display = 'block'; 
} 
setTimeout('document.images["twirly"].src = "/images/twirly_loader.gif"', 200); 

} 

		// -->
		</SCRIPT>
		</head>
		<body bgcolor="#E7E7E7">
			<div id="pad-uploader">
		<% if request("fileType") = "true" then %>
		<form name="LoadImage" action="fileUploader.asp?action=saveImage" enctype="multipart/form-data" method="Post" onsubmit="return validateUploadFormALL(this);">		
		<% else %>
		<form name="LoadImage" action="fileUploader.asp?action=saveImage" enctype="multipart/form-data" method="Post" onsubmit="return validateUploadForm(this);">
		<% end if %>
		<input type="hidden" name="uploaddir" value="/cvuploads">
<table border="0" cellpadding="20" cellspacing="0" align="center">
<tr><td>
		<table align="center" border="0" cellspacing="0" cellpadding="3">
			<tr><td class="green-large" id="pleaseupload"><strong>Upload your CV</strong></td></tr>
			<tr style="display:none;" id="pleasewait"><td class="green-large" align="center"><br><br><br><br><strong>Uploading your CV</strong></td></tr>

    		<tr><td id="instructions">Press the <strong>Browse</strong> button to locate your file on your computer and then press the <strong>Submit</strong> button.<br><br><strong>Large files may take a few minutes to process</strong> - please be patient. <br><br>This window will close once the upload is complete.</td></tr>    		
			<tr><td id="filename"><input type="file"  size="25" maxlength="30" name="FILE1"></td></tr>
    		<tr><td id="submit"><input type="image" value="Submit" src="/images/btn_submit2.gif" border="0" vspace="6"></td></tr>

			<tr  id="animator" style="display:none;" ><td nowrap>
				<img src="/img/twirly_loader.gif" width="16" height="16" alt="...loading" border="0" align="center" name="twirly" hspace="80">
			</td></tr>

			</form></table>
</td></tr>
</table>
<% 	case "close"	
		session("cvname") = request("cvname")
%>
<SCRIPT language=JavaScript>
		<!--
				function upload() {	
			top.opener.document.<%=session("formName")%>.<%=session("fieldName")%>.value='<%=request("cvname")%>';
		}

		// -->
		</SCRIPT>
<%
		response.write "</head><body bgcolor=""#ff0000"" onload=""javascript:upload(), self.close()"">"&chr(13)
	case "error"
		if session("msg") <> "" then
			response.write "<table border=0 cellpadding=20 cellspacing=0><tr><td class=uText>"&session("msg")&"</td></tr></table>"&chr(13)
		end if
		session("msg") = "" 
	end select
 %>
	</div>

</body>
</html>
