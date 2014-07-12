<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<% if request("process") = "true" then'send email

    ' send JMail
			set JMail=Server.CreateObject("JMail.Message") 
			JMail.ContentType="text/html"
      JMail.AddRecipient "info@mmmigration.com.au"
			JMail.FromName = "Melanie Macfarlane Migration"
			JMail.From= "info@mmmigration.com.au"
			JMail.Subject= "Melanie Macfarlane Migration Online Enquiry"

      JMail.AppendHTML "<html><body><table border=""0"" cellpadding=""3"" cellspacing=""1"" width=""95%"" align=""center"">"
	JMail.AppendHTML "<tr><td valign=""top""><img src=""http://www.mmmigration.com.au/images/logo_mmm2.gif"" border=""0""><br><p>The following enquiry has been submitted online from <a href=""mailto:"&request("email")&""">"&request("email")&"</a>.</td></tr>"
	JMail.AppendHTML "</table><table border=""0"" cellpadding=""3"" cellspacing=""0"">"
	JMail.AppendHTML "<tr><td colspan=""2""><br><strong>NB:</strong> To reply to this message, use the email address above - DO NOT 'reply' to this email as it was sent from the web server using info@mmmigration.com.au.<br><br></td></tr>"
	JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>APPLICANTS DETAILS</strong></td></tr>"

	JMail.AppendHTML "<tr><td valign=""top""><strong>First/Last Name:</strong></td><td valign=""top"">"&request("firstname")&" "&request("lastname")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Email:</strong></td><td valign=""top""><a href=""mailto:"&request("email")&""">"&request("email")&"</a></td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>DOB:</strong></td><td valign=""top"">"&request("startDay")&"/"&request("startMonth")&"/"&request("startYear")&"</td></tr>"
	'address
	JMail.AppendHTML "<tr><td valign=""top""><strong>Address:</strong></td><td valign=""top"">"&request("address")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>City:</strong></td><td valign=""top"">"&request("city")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>State:</strong></td><td valign=""top"">"&request("state")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Country:</strong></td><td valign=""top"">"&request("country")&"</td></tr>"
	' phone
	JMail.AppendHTML "<tr><td valign=""top""><strong>Home Phone:</strong></td><td valign=""top"">"&request("homeph")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Mobile:</strong></td><td valign=""top"">"&request("mobile")&"</td></tr>"
  ' children & sponsor details
	if request("childrensdetails") <> "" then
		myMessage = request("childrensdetails")
		if instr (myMessage, vbcrlf) then
			myMessage=replace(myMessage, vbcrlf, "<br>")
		end if
		if instr (myMessage, "<br>") then
			myMessage=replace(myMessage, "<br><br>", "<p>")
			myMessage=replace(myMessage, "<br>", "")
		end if
		if instr(myMessage, "@") then ' strip these out - could be spam attack
			myMessage = replace(myMessage, "@", " at ")
		end if
		JMail.AppendHTML "<tr><td valign=""top""><strong>Children's Names &amp; Date of Birth:</strong></td><td valign=""top"">"&myMessage&"</td></tr>"
	end if
	JMail.AppendHTML "<tr><td valign=""top""><strong>Sponsor's Name:</strong></td><td valign=""top"">"&request("sponsorname")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Sponsor's Relationship:</strong></td><td valign=""top"">"&request("sponsorrelationship")&"</td></tr>"
	' primary qualifications
	JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>PRIMARY QUALIFICATIONS</strong></td></tr>"
	
	if request("primaryqualification1") <> "" then
		JMail.AppendHTML "<tr><td valign=""top""><strong>Primary Qualification:</strong></td><td valign=""top"">"&request("primaryqualification1")
		if request("otherprimaryqualification1") <> "" then
			JMail.AppendHTML ":"&request("otherprimaryqualification1")
		end if
		JMail.AppendHTML "</td></tr>"
	end if
	if request("primarycountry1") <> "" then
		JMail.AppendHTML "<tr><td valign=""top""><strong>Country:</strong></td><td valign=""top"">"&request("primarycountry1")&"</td></tr>"
	end if
	if request("primaryyear1") <> "" then
		JMail.AppendHTML "<tr><td valign=""top"" nowrap><strong>Yr Obtained:</strong></td><td valign=""top"">"&request("primaryyear1")&"</td></tr>"
	end if
	if request("primarylength1_months") <> "0" OR request("primarylength1_months") <> "0" then
		JMail.AppendHTML "<tr><td valign=""top""><strong>Length of course:</strong></td><td valign=""top"">"&request("primarylength1_years")&"Yrs &amp; "&request("primarylength1_months")&"Mths</td></tr>"
	end if
	' secondary qualifications
	JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>SECONDARY QUALIFICATIONS</strong></td></tr>"

	if request("secondaryqualification1") <> "" then
		JMail.AppendHTML "<tr><td valign=""top""><strong>Secondary Qualification:</strong></td><td valign=""top"">"&request("secondaryqualification1")
		if request("othersecondaryqualification1") <> "" then
			JMail.AppendHTML ":"&request("othersecondaryqualification1")
		end if
		JMail.AppendHTML "</td></tr>"
	end if
	if request("secondarycountry1") <> "" then
		JMail.AppendHTML "<tr><td valign=""top""><strong>Country:</strong></td><td valign=""top"">"&request("secondarycountry1")&"</td></tr>"
	end if
	if request("secondaryyear1") <> "" then
		JMail.AppendHTML "<tr><td valign=""top""><strong>Yr Obtained:</strong></td><td valign=""top"">"&request("secondaryyear1")&"</td></tr>"
	end if
	if request("secondarylength1_months") <> "0" OR request("secondarylength1_months") <> "0" then
		JMail.AppendHTML "<tr><td valign=""top""><strong>Length of course:</strong></td><td valign=""top"">"&request("secondarylength1_years")&"Yrs &amp; "&request("secondarylength1_months")&"Mths</td></tr>"
	end if
	' english test
	JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>ENGLISH TEST</strong></td></tr>"

	JMail.AppendHTML "<tr><td valign=""top""><strong>Completed english test?</strong></td><td valign=""top"">"&request("englishtest")&"</td></tr>"
	if request("englishtestscore") <> "" then
		myMessage = request("englishtestscore")
		if instr (myMessage, vbcrlf) then
			myMessage=replace(myMessage, vbcrlf, "<br>")
		end if
		if instr (myMessage, "<br>") then
			myMessage=replace(myMessage, "<br><br>", "<p>")
			myMessage=replace(myMessage, "<br>", "")
		end if
		if instr(myMessage, "@") then ' strip these out - could be spam attack
			myMessage = replace(myMessage, "@", " at ")
		end if
		JMail.AppendHTML "<tr><td valign=""top""><strong>Test/Score:</strong></td><td valign=""top"">"&myMessage&"</td></tr>"
	end if
	' cover letter
	JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>COVER LETTER</strong></td></tr>"

	myMessage = request("coverletter")
	if instr (myMessage, vbcrlf) then
		myMessage=replace(myMessage, vbcrlf, "<br>")
	end if
	if instr (myMessage, "<br>") then
		myMessage=replace(myMessage, "<br><br>", "<p>")
		myMessage=replace(myMessage, "<br>", "")
	end if
	if instr(myMessage, "@") then ' strip these out - could be spam attack
		myMessage = replace(myMessage, "@", " at ")
	end if
	JMail.AppendHTML "<tr><td valign=""top""><strong>Cover Letter:</strong></td><td valign=""top"">"&myMessage&"</td></tr>"
	' work experience
	JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>WORK EXPERIENCE</strong></td></tr>"

	if request("position") <> "" then
		JMail.AppendHTML "<tr><td valign=""top""><strong>Current Position:</strong></td><td valign=""top"">"&request("position")&"</td></tr>"
	end if
	if request("secondarylength1_months") <> "0" OR request("secondarylength1_months") <> "0" then
		JMail.AppendHTML "<tr><td valign=""top""><strong>Years of Experience:</strong></td><td valign=""top"">"&request("yearsexperience_years")&"Yrs &amp; "&request("yearsexperience_months")&"Mths</td></tr>"
	end if
	JMail.AppendHTML "<tr><td valign=""top""><strong>Worked outside country?</strong></td><td valign=""top"">"&request("workedoutside")&"</td></tr>"
	if request("workedoutsidedetails") <> "" then
		myMessage = request("workedoutsidedetails")
		if instr (myMessage, vbcrlf) then
			myMessage=replace(myMessage, vbcrlf, "<br>")
		end if
		if instr (myMessage, "<br>") then
			myMessage=replace(myMessage, "<br><br>", "<p>")
			myMessage=replace(myMessage, "<br>", "")
		end if
		if instr(myMessage, "@") then ' strip these out - could be spam attack
			myMessage = replace(myMessage, "@", " at ")
		end if
		JMail.AppendHTML "<tr><td valign=""top""><strong>Details outside country:</strong></td><td valign=""top"">"&myMessage&"</td></tr>"
	end if
	' cv
	JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>CURRICULUM VITAE</strong></td></tr>"

	if session("cvname") <> "" then ' CV file has been saved to server
		JMail.AppendHTML "<tr><td valign=""top"" colspan=""2""><a href=""http://www.mmmigration.com.au/cvuploads/"&session("cvname")&""">I have uploaded my CV file here</a></td></tr>"
	ELSE
		JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"">Not Attached</td></tr>"
	end if
	' declaration	
	JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>DECLARATION</strong></td></tr>"

	JMail.AppendHTML "<tr><td valign=""top"">Have you ever been investigated by a professional body or have a criminal record? <strong>"&request("investigated")&"</strong></td></tr>"
	JMail.AppendHTML "<tr><td valign=""top"">Have you ever been declined a visa travel or work in Australia? <strong>"&request("declinedvisa")&"</strong></td></tr>"
	if request("declinedvisadetails") <> "" then
		myMessage = request("declinedvisadetails")
		if instr (myMessage, vbcrlf) then
			myMessage=replace(myMessage, vbcrlf, "<br>")
		end if
		if instr (myMessage, "<br>") then
			myMessage=replace(myMessage, "<br><br>", "<p>")
			myMessage=replace(myMessage, "<br>", "")
		end if
		if instr(myMessage, "@") then ' strip these out - could be spam attack
			myMessage = replace(myMessage, "@", " at ")
		end if
		JMail.AppendHTML "<tr><td valign=""top""><strong>Details about declined visa/work:</strong></td><td valign=""top"">"&myMessage&"</td></tr>"
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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MMMigration</title>
<meta name="description" content="MMMigration. Registered Migration Agent - for skilled migration to Australia.">
	<META name="keywords" content="Melanie Macfarlane Migration, MMMigration, australia, migration, migrate, immigration, emigrate, visa, migrate to australia, migration to australia, agent, australia immigration, australia migration, western australia, permanent residence, immigrate, migration australia, emigrate to australia, migrating to australia, Migration Agents Australia, Migration Agent Australia, Australian Migration Agent">
		<META name="author" content="MMMigration">
	<META name="copyright" content="&copy; MMMigration 2009">
	<META name="date" content="2007-5-13T00:00:32+00:00">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="mmm.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/JavaScript" src="mmm.js"></script>
<script type="text/JavaScript" src="val_contactForm.js"></script>
<script type="text/JavaScript" src="popWindows.js"></script>
</head>

<body>	
<div id="wrapper">
<div id="inside-wrapper">
<div id="logo"><a href="index.html"><img src="images/logo_mmm2.gif" alt="MMM Home" width="216" height="65" border="0" /></a></div>
<div id="navtop"><a href="index.html"><img src="images/btn_home.gif" alt="Home" name="Image1" width="95" height="44" border="0" id="Image1" onmouseover="MM_swapImage('Image1','','images/btn_home_on.gif',0)" onmouseout="MM_swapImgRestore()" /></a><a href="aboutus.html"><img src="images/btn_about.gif" alt="About Us" name="Image2" width="123" height="44" border="0" id="Image2" onmouseover="MM_swapImage('Image2','','images/btn_about_on.gif',0)" onmouseout="MM_swapImgRestore()" /></a><a href="services.html"><img src="images/btn_services.gif" alt="Services" name="Image3" width="121" height="44" border="0" id="Image3" onmouseover="MM_swapImage('Image3','','images/btn_services_on.gif',0)" onmouseout="MM_swapImgRestore()" /></a><a href="living_in_australia.html"><img src="images/btn_living.gif" alt="Living in Australia" name="Image4" width="190" height="44" border="0" id="Image4" onmouseover="MM_swapImage('Image4','','images/btn_living_on.gif',0)" onmouseout="MM_swapImgRestore()" /></a><a href="enquiry.html"><img src="images/btn_enquiry.gif" alt="Enquiry Form" name="Image5" width="154" height="44" border="0" id="Image5" onmouseover="MM_swapImage('Image5','','images/btn_enquiry_on.gif',0)" onmouseout="MM_swapImgRestore()" /></a><a href="contactus.html"><img src="images/btn_contact.gif" alt="Contact Us" name="Image6" width="135" height="44" border="0" id="Image6" onmouseover="MM_swapImage('Image6','','images/btn_contact_on.gif',0)" onmouseout="MM_swapImgRestore()" /></a></div>

<div id="bnner_home"><img src="images/bnner_pic19.jpg" width="189" height="115" /><img src="images/hdr_enquiry2.jpg" width="436" height="115" /><img src="images/bnner_pic1_c.gif" width="56" height="115" /><a href="http://www.mia.org.au/" target="_blank"><img src="images/bnner_pic1_d_new.gif" alt="he Migration Institute of Australia" width="137" height="115" border="0" /></a></div>

<div id="content-left-inner"><img src="images/pic10.jpg" /></div>
<div id="content-inner">
 <%  if request("process") = "true" then ' THANK the user below%>
	 
		<p>Thank you, your application has been successfully received. A representative will be in touch shortly.</p>


	 <% else ' show APPLICATION FORM%>
	  <form method="post" action="enquiry.asp?process=true" onsubmit="return validateForm(this);" name="applicationForm">
	    <table width="100%" border="0" cellspacing="5" cellpadding="0" class="form-table" id="Job Application Form">
          <tr>
            <td colspan="2"><strong>Personal Details <br />
                  <br />
            </strong></td>
          </tr>
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
            <td><label for="emailconfirm">Retype Email:</label>            </td>
            <td><input type="text" name="emailconfirm" id="emailconfirm" style="width:155px;"  /></td>
          </tr>
          <tr>
            <td><label for="startday">Date of Birth:</label>            </td>
            <td><!--#include file="includes/select_date.asp"-->            </td>
          </tr>
          <tr>
            <td><label for="address">Address:</label></td>
            <td><input type="text" name="address" id="address" style="width:155px;"  /></td>
          </tr>
          <tr>
            <td><label for="city">City:</label></td>
            <td><input type="text" name="city" id="city" style="width:155px;" /></td>
          </tr>
          <tr>
            <td><label for="state">State:</label></td>
            <td><input type="text" name="state" id="state" style="width:155px;" /></td>
          </tr>
          <tr>
            <td><label for="country">Country:</label></td>
            <td><% selectName = "country" %>
                <!--#include file="includes/select_country.asp"-->            </td>
          </tr>
          <tr>
            <td><label for="homeph">Home Phone:</label>            </td>
            <td><input type="text" name="homeph" id="homeph" style="width:155px;" />
              (Please include country &amp; area code) </td>
          </tr>
          <tr>
            <td><label for="mobile">Mobile Phone:</label>            </td>
            <td><input type="text" name="mobile" id="mobile" style="width:155px;"  />
              (Please include country &amp; area code) </td>
          </tr>

          <tr>
            <td><label for="childrensdetails">Children's Names &amp; Date of Birth:</label>            </td>
            <td><textarea name="childrensdetails" id="childrensdetails" style="width:95%" rows="5"></textarea></td>
          </tr>
          <tr>
            <td><label for="sponsorname">Sponsor's Name:</label>            </td>
            <td><input type="text" name="sponsorname" id="sponsorname" style="width:155px;"  /></td>
          </tr>
          <tr>
            <td><label for="sponsorrelationship">Sponsor's Relationship to you:</label>            </td>
            <td><input type="text" name="sponsorrelationship" id="sponsorrelationship" style="width:155px;"  /> </td>
          </tr>


          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><img src="img/img_pix.gif" alt="" width="500" height="1" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><strong>Primary Qualification </strong><br /></td>
          </tr>
          <tr>
            <td colspan="2"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                <tr>
                  <td width="22%">&nbsp;</td>
                  <td width="28%"><strong>Country</strong></td>
                  <td width="17%" nowrap><strong>Yr Obtained </strong></td>
                  <td width="33%" nowrap><strong>Length of Course </strong></td>
                </tr>
                <tr>
                  <td nowrap><input type="checkbox" name="primaryqualification1" value="Trade Certificate" />
                    Trade Certificate<br />
                    <input type="checkbox" name="primaryqualification1" value="Diploma" />
                    Diploma<br />
                    <input type="checkbox" name="primaryqualification1" value="Advanced Diploma" />
                    Advanced Diploma<br />
                    <input type="checkbox" name="primaryqualification1" value="Bachelor" />
                    Bachelor<br />
                    <input type="checkbox" name="primaryqualification1" value="Other" />
                    Other (please specify)<br />
                    <input type="text" name="otherprimaryqualification1" /></td>
                  <td valign="top"><% selectName = "primarycountry1" %>
                      <!--#include file="includes/select_country.asp"--></td>
                  <td valign="top"><% selectName = "primaryyear1" %>
                      <!--#include file="includes/select_year.asp"-->                  </td>
                  <td valign="top"><% selectName = "primarylength1" %>
                      <!--#include file="includes/select_timelength.asp"--></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="4"><img src="img/img_pix.gif" alt="" width="500" height="1" /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="4"><strong>Secondary Qualification <br />
                  </strong></td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="secondaryqualification1" value="Graduate Certificate" />
                    Graduate Certificate<br />
                    <input type="checkbox" name="secondaryqualification1" value="Graduate Diploma" />
                    Graduate Diploma<br />
                    <input type="checkbox" name="secondaryqualification1" value="Masters Degree" />
                    Masters Degree<br />
                    <input type="checkbox" name="secondaryqualification1" value="PhD" />
                    PhD<br />
                    <input type="checkbox" name="secondaryqualification1" value="Other" />
                    Other (please specify)<br />
                    <input type="text" name="othersecondaryqualification1" /></td>
                  <td valign="top"><% selectName = "secondarycountry1" %>
                      <!--#include file="includes/select_country.asp"--></td>
                  <td valign="top"><% selectName = "secondaryyear1" %>
                      <!--#include file="includes/select_year.asp"--></td>
                  <td valign="top"><% selectName = "secondarylength1" %>
                      <!--#include file="includes/select_timelength.asp"--></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <% selectName = "englishtest" %>
            <td colspan="2"><label for="englishtest">Have you completed an English test?</label>
                <!--#include file="includes/select_yesno.asp"--></td>
          </tr>
          <tr>
            <td valign="top"><label for="englishtestscore"></label></td>
            <td>If yes, which test did you complete and what was your score?<br />
<textarea name="englishtestscore" id="englishtestscore" style="width:95%" rows="5"></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><img src="img/img_pix.gif" alt="" width="500" height="1" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td valign="top"><label for="coverletter"><strong>Cover Letter</strong></label></td>
            <td><textarea name="coverletter" id="coverletter" style="width:95%" rows="5"></textarea></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><img src="img/img_pix.gif" alt="" width="500" height="1" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><strong>Work Experience <br />
                <br />
            </strong></td>
          </tr>
          <tr>
            <td colspan="2" valign="top"><label for="label">What is your current position:</label></td>
          </tr>
          <tr>
            <td valign="top"><label for="position"></label></td>
            <td><input type="text" name="position" id="position" style="width:155px;" /></td>
          </tr>
          <tr>
            <td colspan="2" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" valign="top">How many years work experience do you have? </td>
          </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td><% selectName = "yearsexperience" %>
                <!--#include file="includes/select_timelength.asp"--></td>
          </tr>
          <tr>
            <td colspan="2" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" valign="top">Have you worked outside your own country?</td>
          </tr>
          <tr>
            <td valign="top"><br />            </td>
            <td><% selectName = "workedoutside" %>
                <!--#include file="includes/select_yesno.asp"-->
              If yes, please provide details. <br />
              <textarea name="workedoutsidedetails" rows="3"  style="width:95%"></textarea>            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><img src="img/img_pix.gif" alt="" width="500" height="1" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><strong>Attach Curriculum Vitae</strong> (please specify exact dates of your work experience)</td>
          </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td>Upload Word Document (ie not scanned)<br />
                <input type="text" name="docFilePath" size="30" class="text" readonly="readonly"  style="width:155px;" />
              <input name="button" type="button" class="buttons" onclick="javascript:popFileUploader('applicationForm','docFilePath')" value="Click to Load" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><img src="img/img_pix.gif" alt="" width="500" height="1" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><strong>Delcaration<br />
              <br />
            </strong></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><label for="investigated">Have you ever been investigated by a professional body or have a criminal record?</label>

                <% selectName = "investigated" %>
                <!--#include file="includes/select_yesno.asp"--></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><label for="declinedvisa">Have you ever been declined a visa travel or work in Australia?</label></td>
          </tr>
          <tr>
            <td><label for="declinedvisa"></label></td>
            <td><% selectName = "declinedvisa" %>
                <!--#include file="includes/select_yesno.asp"-->
             
                <label for="declinedvisadetails"> If yes, please provide details</label>
              <br />
              <textarea name="declinedvisadetails" id="declinedvisadetails" rows="3"  style="width:95%"></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="submit" type="submit" class="buttons" value="SEND APPLICATION" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
	  </form>
	  <% end if %>
  </div>
<div class="brclear">
</div>
</div>
</div>
<div id="footer">© copyright 2009 MMMigration</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-9157327-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
