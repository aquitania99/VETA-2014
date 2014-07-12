<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<% if request("process") = "true" then'send email

    ' send JMail
			set JMail=Server.CreateObject("JMail.Message") 
			JMail.ContentType="text/html"
      JMail.AddRecipient "blossomingdesigns@gmail.com"
			JMail.FromName = "Melanie Macfarlane Migration"
			JMail.From= "blossomingdesigns@gmail.com"
			JMail.Subject= "Melanie Macfarlane Migration Online Enquiry"

      JMail.AppendHTML "<html><body><table border=""0"" cellpadding=""3"" cellspacing=""1"" width=""95%"" align=""center"">"

' cv
	JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>CURRICULUM VITAE</strong></td></tr>"

	if session("cvname") <> "" then ' CV file has been saved to server
		JMail.AppendHTML "<tr><td valign=""top"" colspan=""2""><a href=""http://www.mmmigration.com.au/cvuploads/"&session("cvname")&""">I have uploaded my CV file here</a></td></tr>"
	ELSE
		JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"">Not Attached</td></tr>"
	end if

JMail.AppendHTML "</table></body><style>td {font-family:verdana; font-size:11px; }</style></html>"
      
      
			on error resume next
			JMail.send("127.0.0.1")
			if int(Err.Number) > int(0) then
				on error resume next
				JMail.send("localhost")
			end if
    

end if %>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MMMRECRUITMENT | Upload CV | MMMigration</title>
<script src="file:///Macintosh HD/Users/emmarose/Documents/#WIP/Begrin Designs/MBD201013 - MMMigration website/Web Archive %3A Dev/Dec 2010/Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/JavaScript" src="http://www.mmmigration.com.au/val_contactForm.js"></script>
<script type="text/JavaScript" src="http://www.mmmigration.com.au/popWindows.js"></script>
<link href="styles/mmmigration-internal.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">
  <div class="header"><!-- end .header --><img src="images/header.gif" width="1019" height="196" alt="mmmigration | Immigration website  | Australian Migration" /></div>
  <div class="content">
    <div class="breadcrumbs">Home<img src="images/arrows.gif" width="12" height="12" alt="migrating" />about us<img src="images/arrows.gif" width="12" height="12" alt="migrating" />MMMRecruitment</div>
    <div class="sidebar">
      <div class="testimonials">
<p>&nbsp;&nbsp;<img src="images/MMMigration-mission-statement.jpg" alt="About the Australain Immigration Sector" height="123" width="157" />
  
  &quot;She was  always helpful and supportive to me, and made me feel reassured that that everything would work out.&quot; </p>
</div>
      <div class="social-media"> <p><a href="http://www.facebook.com/pages/MMMigration/159594327402637?v=page_getting_started#!/pages/MMMigration/159594327402637?v=wall"><img src="images/facebook.gif" width="35" height="35" alt="MMMigration Facebook" /></a>        <a href="http://twitter.com/MMMigration"><img src="images/twitter.gif" width="35" height="35" alt="MMMigration Twitter" /></a>
<a href="http://twitter.com/MMMigration"><img src="images/youtube.gif" width="35" height="35" alt="MMMigration YouTube" /></a>
		<a href="http://au.linkedin.com/pub/melanie-macfarlane/17/a14/21b"><img src="images/linkdin.gif" width="35" height="35" alt=" Melanie  Macfarlane LinkdIn, " /></a></p>
      </div>
    </div>
    <div class="bodycopy">
<div id="content-inner">
 <%  if request("process") = "true" then ' THANK the user below%>
	 
		<p>Thank you, your CV has been submitted, please proceed to the <a href="enquiry-form.html">online application form.</a></p>


	 <% else ' show APPLICATION FORM%>
    
      <h1>MMMrecruitment - Upload your CV</h1>
      <form method="post" action="mmm-recruitment.asp?process=true" onsubmit="return validateForm(this);" name="applicationForm">
	    <table width="100%" border="0" cellspacing="5" cellpadding="0" class="form-table" id="Job Application Form">
      
  <tr>
            <tr>
            <td width="22%"><label for="firstname">First Name:</label>            </td>
            <td width="78%"><input type="text" name="firstname" id="firstname" style="width:155px;" />            </td>
          </tr>
          <tr>
            <td><label for="lastname">Family Name:</label></td>
            <td><input type="text" name="lastname" id="lastname" style="width:155px;" /></td>
          </tr>
          <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="text" name="email" id="email"  style="width:155px;"  /></td>
          </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td>Upload Word Document (ie not scanned)<br />
                <input type="text" name="docFilePath" size="30" class="text" readonly="readonly"  style="width:155px;" />
              <input name="button" type="button" class="buttons" onclick="javascript:popFileUploader('applicationForm','docFilePath')" value="Click to Load" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="submit" type="submit" class="buttons" value="SEND APPLICATION" /></td>
          </tr>
          </table>
	  </form>
       <% end if %>
       
       
</div>

    </div>
    
 <!-- end .content -->

  </div>
  <!-- end .container --></div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>
