<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<% if request("process") = "true" then'send email

    ' send JMail
			set JMail=Server.CreateObject("JMail.Message") 
			JMail.ContentType="text/html"
      JMail.AddRecipient "blossomingdesigns@gmail.com"
			JMail.FromName = "Melanie Macfarlane Migration"
			JMail.From= "blossomingdesigns@gmail.comu"
			JMail.Subject= "Melanie Macfarlane Migration Online Enquiry"

      JMail.AppendHTML "<html><body><table border=""0"" cellpadding=""3"" cellspacing=""1"" width=""95%"" align=""center"">"
	JMail.AppendHTML "<tr><td valign=""top""><img src=""http://www.mmmigration.com.au/images/logo_mmm2.gif"" border=""0""><br><p>The following enquiry has been submitted online from <a href=""mailto:"&request("email")&""">"&request("email")&"</a>.</td></tr>"
	JMail.AppendHTML "</table><table border=""0"" cellpadding=""3"" cellspacing=""0"">"
	JMail.AppendHTML "<tr><td colspan=""2""><br><strong>NB:</strong> To reply to this message, use the email address above - DO NOT 'reply' to this email as it was sent from the web server using info@mmmigration.com.au.<br><br></td></tr>"
	JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>APPLICANTS DETAILS</strong></td></tr>"
	' names
	JMail.AppendHTML "<tr><td valign=""top""><strong>Last/First/Middle Name:</strong></td><td valign=""top"">"&request("lastname")&" "&request("firstname")&" "&request("middlename")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>DOB:</strong></td><td valign=""top"">"&request("startDay")&"/"&request("startMonth")&"/"&request("startYear")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Citizen of:</strong></td><td valign=""top"">"&request("citizenof")&"</td></tr>"
	'address
	JMail.AppendHTML "<tr><td valign=""top""><strong>Address:</strong></td><td valign=""top"">"&request("address")&"</td></tr>"
	' contacts
	JMail.AppendHTML "<tr><td valign=""top""><strong>Email:</strong></td><td valign=""top""><a href=""mailto:"&request("email")&""">"&request("email")&"</a></td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Mobile:</strong></td><td valign=""top"">"&request("mobile")&"</td></tr>"
	
	' documentation
	JMail.AppendHTML "<tr><td valign=""top""><strong>Passport No:</strong></td><td valign=""top"">"&request("passportno")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Passport Expiry:</strong></td><td valign=""top"">"&request("passportexp")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Visa type:</strong></td><td valign=""top"">"&request("visatype")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Visa Expiry:</strong></td><td valign=""top"">"&request("visaexp")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Visa Date:</strong></td><td valign=""top"">"&request("visadate")&"</td></tr>"
	
	' dependent
	JMail.AppendHTML "<tr><td valign=""top""><strong>Never Married:</strong></td><td valign=""top"">"&request("nevermarried")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Married:</strong></td><td valign=""top"">"&request("married")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>De Facto:</strong></td><td valign=""top"">"&request("defacto")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Divorced:</strong></td><td valign=""top"">"&request("divorced")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Seperated:</strong></td><td valign=""top"">"&request("seperated")&"</td></tr>"
	
	' spouse
	JMail.AppendHTML "<tr><td valign=""top""><strong>Name of Spouse:</strong></td><td valign=""top"">"&request("spousename")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Spouse DOB:</strong></td><td valign=""top"">"&request("startDay")&"/"&request("startMonth")&"/"&request("startYear")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Country of current residence:</strong></td><td valign=""top"">"&request("spouseresidenceo")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Month in this relationship:</strong></td><td valign=""top"">"&request("monthsinrelationship")&"</td></tr>"
	
  ' children details
		JMail.AppendHTML "<tr><td valign=""top""><strong>Child1 &amp; DOB:</strong></td><td valign=""top"">"&request("child1")&" "&request("startDay")&"/"&request("startMonth")&"/"&request("startYear")&" </td></tr>"
		JMail.AppendHTML "<tr><td valign=""top""><strong>Child1 &amp; DOB:</strong></td><td valign=""top"">"&request("child2")&" "&request("startDay")&"/"&request("startMonth")&"/"&request("startYear")&" </td></tr>"
		JMail.AppendHTML "<tr><td valign=""top""><strong>Child1 &amp; DOB:</strong></td><td valign=""top"">"&request("child3")&" "&request("startDay")&"/"&request("startMonth")&"/"&request("startYear")&" </td></tr>"
		
		JMail.AppendHTML "<tr><td valign=""top""><strong>Other Children:</strong></td><td valign=""top"">"&request("otherchildren")&" </td></tr>"
		JMail.AppendHTML "<tr><td valign=""top""><strong>Other Children:</strong></td><td valign=""top"">"&request("nootherchildren")&" </td></tr>"
		
		JMail.AppendHTML "<tr><td valign=""top""><strong>Dependants over 25:</strong></td><td valign=""top"">"&request("dependant")&" </td></tr>"
		JMail.AppendHTML "<tr><td valign=""top""><strong>Other Children:</strong></td><td valign=""top"">"&request("nodependant")&" </td></tr>"
		
		JMail.AppendHTML "<tr><td valign=""top""><strong>Relatives in Aus:</strong></td><td valign=""top"">"&request("grandparent")&" </td></tr>"
		JMail.AppendHTML "<tr><td valign=""top""><strong>Relatives in Aus:</strong></td><td valign=""top"">"&request("parent")&" </td></tr>"
		JMail.AppendHTML "<tr><td valign=""top""><strong>Relatives in Aus:</strong></td><td valign=""top"">"&request("sister")&" </td></tr>"
		JMail.AppendHTML "<tr><td valign=""top""><strong>Relatives in Aus:</strong></td><td valign=""top"">"&request("auntuncle")&" </td></tr>"
		JMail.AppendHTML "<tr><td valign=""top""><strong>Relatives in Aus:</strong></td><td valign=""top"">"&request("cousin")&" </td></tr>"
		
	JMail.AppendHTML "<tr><td valign=""top""><strong>Relative1:</strong></td><td valign=""top"">"&request("relative1")&" "&request("relativeaddress1")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Relative2:</strong></td><td valign=""top"">"&request("relative1")&" "&request("relativeaddress2")&"</td></tr>"
	
	
	' Education
	JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>Education</strong></td></tr>"
	
	if request("educator1") <> "" then
		JMail.AppendHTML "<tr><td valign=""top""><strong>1:</strong></td><td valign=""top"">"&request("educator1")
		if request("award1") <> "" then
			JMail.AppendHTML ":"&request("award1")
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
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Enquiry Form for Migrating to Australia | MMMigration</title>

<script type="text/JavaScript" src="mmm.js"></script>
<script type="text/JavaScript" src="val_contactForm.js"></script>
<script type="text/JavaScript" src="popWindows.js"></script>
<script src="file:///Macintosh HD/Users/emmarose/Documents/#WIP/Begrin Designs/MBD201013 - MMMigration website/Web Archive %3A Dev/Dec 2010/Scripts/swfobject_modified.js" type="text/javascript"></script>
<link href="styles/mmmigration-internal.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">
  <div class="header"><!-- end .header --><img src="images/header.gif" width="1019" height="196" alt="mmmigration | Immigration website  | Australian Migration" /></div>
  <div class="content">
    <div class="breadcrumbs">Home<img src="images/arrows.gif" width="12" height="12" alt="migrating" />Enquiry form</div>
    <div class="sidebar">
      <div class="testimonials">&quot;I have had no problems along the way and any issues that I have raised have been answered in a timely and very accurate manner.&quot; <img src="images/Great-Barrier-Reef.jpg" alt="About the Australain Immigration Sector" height="123" width="157" /></div>
      <div class="social-media"> <p><a href="http://www.facebook.com/pages/MMMigration/159594327402637?v=page_getting_started#!/pages/MMMigration/159594327402637?v=wall"><img src="images/facebook.gif" width="35" height="35" alt="MMMigration Facebook" /></a>        <a href="http://twitter.com/MMMigration"><img src="images/twitter.gif" width="35" height="35" alt="MMMigration Twitter" /></a>
<a href="http://twitter.com/MMMigration"><img src="images/youtube.gif" width="35" height="35" alt="MMMigration YouTube" /></a>
		<a href="http://au.linkedin.com/pub/melanie-macfarlane/17/a14/21b"><img src="images/linkdin.gif" width="35" height="35" alt=" Melanie  Macfarlane LinkdIn, " /></a></p>
      </div>
    </div>
    <div class="bodycopy">
<h1>ENQUIRY FORM </h1>
      
      
      <div>
        <%  if request("process") = "true" then ' THANK the user below%>
        
        <p>Thank you, your application has been successfully received. A representative will be in touch shortly.</p>
        
        
        <% else ' show APPLICATION FORM%>
        <form method="post" action="enquiry.asp?process=true" onsubmit="return validateForm(this);" name="applicationForm">
          <table width="100%" border="0" cellspacing="5" cellpadding="0">
            <tr>
              <td colspan="2"><strong>Personal Details <br />
                <br />
              </strong></td>
            </tr>
            <tr>
              <td width="211"><label for="firstname">Family Name:</label>            </td>
              <td width="284"><input type="text" name="lastname" id="lastname" style="width:155px;" />            </td>
            </tr>
            
            <tr>
              <td><label for="firstname">First Name:</label></td>
              <td ><input type="text" name="firstname" id="firstname" style="width:155px;" /></td>
            </tr>
            <tr>
              <td width="211"><label for="firstname">Middle Name:</label>            </td>
              <td width="284" ><input type="text" name="middlename" id="middlename" style="width:155px;" />            </td>
            </tr>
            <tr>
              <td><label for="startday">Date of Birth:</label>            </td>
              <td ><!--#include file="includes/select_date.asp" -->             </td>
            </tr>
            <tr>
              <td><label for="Citizenof">Citizen of:</label></td>
              <td ><input type="text" name="Citizenof " id="Citizenof " style="width:155px;"  /></td>
            </tr>
            <tr>
              <td valign="top"><label for="address">Residential Address:</label></td>
              <td ><textarea name="address" rows="4" id="address" style="width:155px;"></textarea></td>
            </tr>
            <tr>
              <td><label for="email">Email:</label></td>
              <td ><input type="text" name="email" id="email"  style="width:155px;"  /></td>
            </tr>
            <tr>
              <td valign="top"><label for="mobile">Mobile Phone:</label>            </td>
              <td colspan="2"><input type="text" name="mobile" id="mobile" style="width:155px;"  />
                <br />
              (Please include country &amp; area code) </td>
            </tr>
            <tr>
              <td colspan="2"><strong>Documentation <br />
                <br />
              </strong></td>
            </tr>
            <tr>
              <td><label for="passportno">Passport No:</label></td>
              <td ><input type="text" name="passportno" id="passportno"  style="width:155px;"  /></td>
            </tr>
            <tr>
              <td><label for="passportexp">Passport Expiry:</label></td>
              <td ><input type="text" name="passportexp" id="passportexp"  style="width:155px;"  /></td>
            </tr>
            <tr>
              <td><label for="visatype">Visa type held:</label></td>
              <td ><input type="text" name="visatype" id="visatype"  style="width:155px;"  /></td>
            </tr>
            <tr>
              <td><label for="visaexp">Visa Expiry:</label></td>
              <td ><input type="text" name="visaexp" id="visaexp"  style="width:155px;"  /></td>
            </tr>
            <tr>
              <td><label for="visadate">Date your visa was applied for:</label></td>
              <td ><input type="text" name="visadate" id="visadate"  style="width:155px;"  /></td>
            </tr>
            <td colspan="2"><strong>Dependent <br />
              <br />
              </strong></td>
              </tr>
            <tr>
              <td colspan="2">Marital Status <br />
                <input name="nevermarried" type="checkbox" id="nevermarried" value="nevermarried" />
                Never Married<br />
                <input name="married" type="checkbox" id="married" value="married" />
                Married<br />
                <input name="defacto" type="checkbox" id="defacto" value="defacto" />
                De Facto<br />
                <input name="divorced" type="checkbox" id="divorced" value="divorced" />
                Divorced<br />
                <input name="seperated" type="checkbox" id="seperated" value="seperated" />
                Seperated<br /><br />
                
            </tr>
            <tr>
              <td colspan="2">Spouse details:
            </td></tr>
            <tr>
              <td><label for="listening">Name of Spouse:</label>            </td>
              <td colspan="2"><input type="text" name="spousename" id="spousename" style="width:155px;"  /></td>
            </tr>
            <tr>
              <td><label for="spousedob">Spouse DOB:</label>            </td>
              <td colspan="2"><!--#include file="includes/select_date.asp" -->  </td>
              
              
            </tr>
            <tr>
              <td><label for="spouseresidence">Country of current residence :</label>            </td>
              <td colspan="2"><input type="text" name="spouseresidence" id="spouseresidence" style="width:155px;"  /></td>
            </tr>
            <tr>
              <td><label for="child1">For how many months have you been in this relationship?:</label>            </td>
              <td colspan="2"><input type="text" name="monthsinrelationship" id="monthsinrelationship" style="width:155px;"  /></td>
            </tr>
            
            
            <tr>
              <td colspan="2">Dependent Children:
            </td></tr>
            <td colspan="2"><table width="500px" border="0" cellspacing="5" cellpadding="0">
              <tr>
                <td width="22%"></td>
                <td width="38%">Name:</td>
                <td width="40%">DOB</td>
                </tr>
              <tr>
                <td><label for="child1">Child 1:</label></td>
                <td><input type="text" name="child1" id="child1"  /></td>
                <td><!--#include file="includes/select_date.asp" --> </td>
                </tr>
              <tr>
                <td><label for="relative2">Child 2:</label></td>
                <td><input type="text" name="child2" id="child2"  /></td>
                <td><!--#include file="includes/select_date.asp" --> </td>
                </tr>
              <tr>
                <td><label for="child3">Child 3:</label></td>
                <td><input type="text" name="child3" id="child3"  /></td>
                <td><!--#include file="includes/select_date.asp" --> </td>
                </tr></table>
            <tr>
              <td colspan="2">Do you have ANY other children from a previous marriage or relationship?   <br />
                <input name="yes" type="checkbox" id="yes" value="otherchildren" />
                  Yes<br />
                  <input name="no" type="checkbox" id="no" value="nootherchildren" />
                  No<br />
                  <br />
                  
            </tr>
            <tr>
              
              <td colspan="2">Do you have any person over the age of 25 years who is dependent upon you?    <br />
                <input name="yes" type="checkbox" id="yes" value="dependent" />
                Yes<br />
                <input name="no" type="checkbox" id="no" value="nodependent" />
                No<br />
                <br />
                
            </tr>
            <tr>
              
              <td colspan="2">Do you or does your spouse have any close relative(s) in Australia?    <br />
                <input name="grandparent" type="checkbox" id="grandparent" value="grandparent" />
                Grandparent<br />
                <input name="parent" type="checkbox" id="parent" value="parent" />
                Parent<br />
                <input name="sister" type="checkbox" id="sister" value="sister" />
                Sister<br />
                <input name="auntuncle" type="checkbox" id="auntuncle" value="auntuncle" />
                Aunt/Uncle<br />
                <input name="cousin" type="checkbox" id="cousin" value="cousin" />
                First Cousin<br />
                <br />
                
            </tr>
            
            <tr>
              <td colspan="2">Who and where do these relatives live in Australia?<br />
            Please indicate name, state and suburb OR town. </td></tr>
            <td colspan="2"><table width="100%" border="0" cellspacing="5" cellpadding="0">
              <tr>
                <td width="22%"></td>
                <td width="38%">NAME</td>
                <td>SUBURB or TOWN, STATE</td>
                </tr>
              <tr>
                <td><label for="child1">1:</label></td>
                <td><textarea name="relative1" id="relative1"></textarea></td>
                <td><textarea name="relativeaddress1" id="relativeaddress"></textarea></td>
                </tr>
              <tr>
                <td><label for="relative2">2:</label></td>
                <td><textarea name="relative2" id="relative2"></textarea></td>
                <td><textarea name="relativeaddress2" id="relativeaddress2"></textarea></td>
                </tr>
              </table>
              
            <tr>
                <td colspan="2"><strong>Education <br />
            </strong>(Start from most recent post-secondary vocational or tertiary qualification)</td></tr>
            <tr>
              <td colspan="2"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                <tr>
                  <td ></td>
                  <td valign="top"  >Educator</td>
                  <td valign="top" >Academic award</td>
                  <td >Date <br />
                    commenced <br />
                    (dd/mm/yyyy) </td>
                  <td >Date <br />
                    completed
                    <br />
                    (dd/mm/yyyy) </td>
                  </tr>
                <tr>
                  <td >1</td>
                  <td ><label for="employer1"></label>
                    <input type="text" name="educator1" id="educator1" / style="width:155px;"></td>
                  <td valign="top"><label for="country1"></label>
                    <input type="text" name="award1" id="award1" / style="width:155px;"></td>
                  <td valign="top"><!--#include file="includes/select_date.asp" --> </td>
                  <td valign="top"><!--#include file="includes/select_date.asp" --> </td>
                  </tr>
                <tr>
                  <td >2</td>
                  <td ><label for="employer2"></label>
                    <input type="text" name="educator2" id="educator2" / style="width:155px;"></td>
                  <td valign="top"><label for="award"></label>
                    <input type="text" name="award2" id="award2" / style="width:155px;" ></td>
                  <td valign="top"><!--#include file="includes/select_date.asp" --> </td>
                  <td valign="top"><!--#include file="includes/select_date.asp" --> </td>
                  </tr>
                <tr>
                  <td >3</td>
                  <td ><label for="employer3"></label>
                    <input type="text" name="educator3" id="educator3" / style="width:155px;"></td>
                  <td valign="top"><label for="country3"></label>
                    <input type="text" name="award3" id="award3" / style="width:155px;"></td>
                  <td valign="top"><!--#include file="includes/select_date.asp" --> </td>
                  <td valign="top"><!--#include file="includes/select_date.asp" --> </td>
                  </tr>
                <tr>
                  <td >4</td>
                  <td ><label for="employer4"></label>
                    <input type="text" name="educator4" id="educator4" / style="width:155px;"></td>
                  <td valign="top"><label for="country4"></label>
                    <input type="text" name="award4" id="award4" / style="width:155px;"></td>
                  <td valign="top"><!--#include file="includes/select_date.asp" --> </td>
                  <td valign="top"><!--#include file="includes/select_date.asp" --> </td>
                  </tr>
                
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  </tr></table>
                
                
            <tr>
                  
              <td colspan="2"><strong>Employment:</strong><br /> (Start from the recent employment)</td>
            </tr>
            
            
            </tr>
            <tr>
              <td colspan="2"> <table width="100%" border="0" cellspacing="5" cellpadding="0">
                <tr>
                  <td width="2%">&nbsp;</td>
                  <td width="20%" valign="top">Employer</td>
                  <td width="20%" valign="top">City, country</td>
                  <td width="20%" valign="top">Position title</td>
                  <td width="19%">Date <br />
                    commenced <br />
                    (dd/mm/yyyy)</td>
                  <td width="19%">Date <br />
                    completed
                    <br />
                    (dd/mm/yyyy)
  </td>
                  </tr>
                <tr>
                  <td >1</td>
                  <td ><label for="employer1"></label>
                    <input type="text" name="employer1" id="employer1" / style="width:100px;"></td>
                  <td valign="top"><label for="country1"></label>
                    <input type="text" name="country1" id="country1" / style="width:100px;"></td>
                  <td valign="top"><label for="country1"></label>
                    <input type="text" name="position1" id="position1" / style="width:100px;"></td>
                  <td valign="top"><!--#include file="includes/select_date.asp" --> </td>
                  <td valign="top"><!--#include file="includes/select_date.asp" --> </td>
                  </tr>
                <tr>
                  <td >2</td>
                  <td ><label for="employer2"></label>
                    <input type="text" name="employer2" id="employer2" / style="width:100px;"></td>
                  <td valign="top"><label for="award"></label>
                    <input type="text" name="country2" id="country2" / style="width:100px;"></td>
                  <td valign="top"><label for="country1"></label>
                    <input type="text" name="position1" id="position1" / style="width:100px;"></td>
                  <td valign="top"><!--#include file="includes/select_date.asp" --> </td>
                  <td valign="top"><!--#include file="includes/select_date.asp" --> </td>
                  </tr>
                <tr>
                  <td >3</td>
                  <td ><label for="employer3"></label>
                    <input type="text" name="employer3" id="employer3" / style="width:100px;"></td>
                  <td valign="top"><label for="country3"></label>
                    <input type="text" name="country3" id="country3" / style="width:100px;"></td>
                  <td valign="top"><label for="country1"></label>
                    <input type="text" name="position1" id="position1" / style="width:100px;"></td>
                  <td valign="top"><!--#include file="includes/select_date.asp" --> </td>
                  <td valign="top"><!--#include file="includes/select_date.asp" --> </td>
                  </tr>
                <tr>
                  <td >4</td>
                  <td ><label for="employer4"></label>
                    <input type="text" name="employer4" id="employer4" / style="width:100px;"></td>
                  <td valign="top"><label for="country4"></label>
                    <input type="text" name="country4" id="country4" / style="width:100px;"></td>
                  <td valign="top"><label for="country1"></label>
                    <input type="text" name="position1" id="position1" / style="width:100px;"></td>
                  <td valign="top"><!--#include file="includes/select_date.asp" --> </td>
                  <td valign="top"><!--#include file="includes/select_date.asp" --> </td>
                  </tr>
                
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  </tr>
                </table>
                
            <tr>
                  <td ><img src="img/img_pix.gif" alt="" width="100%" height="1" /></td>
            </tr>
            
            <tr>
              
              <td colspan="2"><strong>English Language:</strong><br />              <br /></td>
            </tr>
            
            <td colspan="2"><label for="englishtest">Have you completed an English test?</label>
              <!--#include file="includes/select_yesno.asp"--></td>
              <tr>
                <td><label for="startday">What was the date of the most recent IELTS test:</label>            </td>
                <td valign="top" ><!--#include file="includes/select_date.asp" -->            </td>
            </tr>
            <tr>
              <td colspan="2"><p>What were the individual IELTS band scores? And the overall score?</p></td>
            </tr>
            <tr>
              <td><label for="listening">Listening:</label>            </td>
              <td colspan="2"><input type="text" name="listening" id="listening" style="width:155px;"  /></td>
            </tr>
            <tr>
              <td><label for="listening">Reading:</label>            </td>
              <td colspan="2"><input type="text" name="reading" id="reading" style="width:155px;"  /></td>
            </tr>
            <tr>
              <td><label for="listening">Writing:</label>            </td>
              <td colspan="2"><input type="text" name="writing" id="writing" style="width:155px;"  /></td>
            </tr>
            <tr>
              <td><label for="listening">Speaking:</label>            </td>
              <td colspan="2"><input type="text" name="speaking" id="speaking" style="width:155px;"  /></td>
            </tr>
            <tr>
              <td><label for="listening">Overall:</label>            </td>
              <td colspan="2"><input type="text" name="Overall" id="Overall" style="width:155px;"  /></td>
            </tr>
            
            <tr>
              
              <td colspan="2"><strong>Health:</strong><br />              <br /></td>
            </tr>
            <tr>
              <td colspan="2"><label for="medicalconditions">Do you currently suffer from or have you suffered from any significant medical conditions? </label>
                <!--#include file="includes/select_yesno.asp"--></td></tr>
            
            <td colspan="2"><label for="familymedicalconditions">Does any member of your family or any child of yours from a previous relationship suffer from any significant medical condition? </label>
              <!--#include file="includes/select_yesno.asp"--></td>
              
            <tr>
              <td colspan="2"><strong>Character:</strong><br />              
              <br /></td>
            </tr>
            <tr>
              <td colspan="2"><label for="character">Have you or any member of your immediate family ever been convicted of ANY criminal offence in any country? </label>
                <!--#include file="includes/select_yesno.asp"--></td></tr>
            
            <tr>
              <td colspan="2"><strong>Australian Visa:</strong><br />              
              <br /></td>
            </tr>
            
            <td colspan="2"><label for="australianvisarefused">Have you or any member of your immediate family been REFUSED an Australian visa OR had an Australian Visa CANCELLED?</label>
              <!--#include file="includes/select_yesno.asp"--></td>
              
              <tr>
                <td colspan="2"><strong>Military Service or Intelligence Agency:</strong><br />              
                <br /></td>
            </tr>
            
            <td colspan="2"><label for="militaryservice">Have you or any member of your immediate family ever served in the military forces of any country OR been employed by an intelligence agency in any country?</label>
              <!--#include file="includes/select_yesno.asp"--></td>
              
            </table></td>
          </tr>
          <br />
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td>
              I certify that the answers I have given on this Client Questionnaire are true and correct<br /></td></tr>
          <tr><td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="2"><input name="submit" type="submit" class="buttons" value="SEND APPLICATION" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="2">&nbsp;</td>
          </tr>
          </table>
        </form>
        <% end if %>
      </div>
</div>
    <div class="navigation"><br />
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="800" height="100" id="FlashID" title="mmmigration">
        <param name="movie" value="swf/navigation.swf" />
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="swfversion" value="8.0.35.0" />
        <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
        <param name="expressinstall" value="file:///Macintosh HD/Users/emmarose/Documents/#WIP/Begrin Designs/MBD201013 - MMMigration website/Web Archive %3A Dev/Dec 2010/Scripts/expressInstall.swf" />
        <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
        <!--[if !IE]>-->
        
        

        
          <!--<![endif]-->
          <param name="quality" value="high" />
          <param name="wmode" value="opaque" />
          <param name="swfversion" value="8.0.35.0" />
          <param name="expressinstall" value="file:///Macintosh HD/Users/emmarose/Documents/#WIP/Begrin Designs/MBD201013 - MMMigration website/Web Archive %3A Dev/Dec 2010/Scripts/expressInstall.swf" />
          <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
          <div>
            <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
          </div>
          <!--[if !IE]>-->
        </object>
        <!--<![endif]-->
      </object>
    </div>
    
 <!-- end .content -->

  </div>
  <!-- end .container --></div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>
