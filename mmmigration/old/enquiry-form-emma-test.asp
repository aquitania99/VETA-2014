<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<%	

					' send JMail
			set JMail=Server.CreateObject("JMail.Message") 
			JMail.ContentType="text/html"
      JMail.AddRecipient "emma@blossomingdesigns.com.au"
			JMail.FromName = "Melanie Macfarlane Migration"
			JMail.From= "emma@blossomingdesigns.com.au"
			JMail.Subject= "Melanie Macfarlane Migration Online Enquiry"

	JMail.AppendHTML "<html><body><table border=""0"" cellpadding=""3"" cellspacing=""1"" width=""95%"" align=""center"">"
	JMail.AppendHTML "<tr><td valign=""top""><img src=""http://www.mmmigration.com.au/images/logo_mmm2.gif"" border=""0""><br><p>The following enquiry has been submitted online from <a href=""mailto:"&request("email")&""">"&request("email")&"</a>.</td></tr>"
	JMail.AppendHTML "</table><table border=""0"" cellpadding=""3"" cellspacing=""0"">"
	JMail.AppendHTML "<tr><td colspan=""2""><br><strong>NB:</strong> To reply to this message, use the email address below - DO NOT 'reply' to this email as it was sent from the web server using info@mmmigration.com.au.<br><br></td></tr>"
	JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>APPLICANTS DETAILS</strong></td></tr>"
	
	' names

	JMail.AppendHTML "<tr><td valign=""top""><strong>Last/First/Middle Name:</strong></td><td valign=""top"">"&request("lastname")&" "&request("firstname")&" "&request("middlename")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>DOB:</strong></td><td valign=""top"">"&request("DOB")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Citizen of:</strong></td><td valign=""top"">"&request("Citizenof")&"</td></tr>"
	
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
	
	' maritalstatus

	JMail.AppendHTML "<tr><td valign=""top""><strong>Marital Status:</strong></td><td valign=""top"">"&request("maritalstatus")&"</td></tr>"
	
	' spouse
		JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>Spouse</strong></td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Name of Spouse:</strong></td><td valign=""top"">"&request("spousename")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Spouse DOB:</strong></td><td valign=""top"">"&request("souseddob")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Country of current residence:</strong></td><td valign=""top"">"&request("spouseresidence")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Month in this relationship:</strong></td><td valign=""top"">"&request("monthsinrelationship")&"</td></tr>"
	
  ' children details
  	JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>Children Details</strong></td></tr>"
		JMail.AppendHTML "<tr><td valign=""top""><strong>Child1 &amp; DOB:</strong></td><td valign=""top"">"&request("child1")&" "&request("child1dob")&"</td></tr>"
		JMail.AppendHTML "<tr><td valign=""top""><strong>Child1 &amp; DOB:</strong></td><td valign=""top"">"&request("child2")&" "&request("child2dob")&"</td></tr>"
		JMail.AppendHTML "<tr><td valign=""top""><strong>Child1 &amp; DOB:</strong></td><td valign=""top"">"&request("child3")&" "&request("child3dob")&"</td></tr>"
		
		JMail.AppendHTML "<tr><td valign=""top""><strong>Other Children:</strong></td><td valign=""top"">"&request("otherchildren")&" </td></tr>"
		
		JMail.AppendHTML "<tr><td valign=""top""><strong>Dependants over 25:</strong></td><td valign=""top"">"&request("dependents")&" </td></tr>"
		
		JMail.AppendHTML "<tr><td valign=""top""><strong>Relatives in Aus:</strong></td><td valign=""top"">"&request("relatives")&" </td></tr>"
		JMail.AppendHTML "<tr><td valign=""top""><strong>Relatives in Aus:</strong></td><td valign=""top"">"&request("relative1")&" </td></tr>"

	JMail.AppendHTML "<tr><td valign=""top""><strong>Relative1:</strong></td><td valign=""top"">"&request("relative1")&" "&request("relativeaddress1")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Relative2:</strong></td><td valign=""top"">"&request("relative2")&" "&request("relativeaddress2")&"</td></tr>"
	
	
	' Education
		JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>Education</strong></td></tr>"
	
	JMail.AppendHTML "<tr><td valign=""top""><strong>Educator1:</strong></td><td valign=""top"">"&request("educator1")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Award1:</strong></td><td valign=""top"">"&request("award1")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Date Commenced1:</strong></td><td valign=""top"">"&request("datecommenced1")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Date Completed1:</strong></td><td valign=""top"">"&request("datecompleted1")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Educator2:</strong></td><td valign=""top"">"&request("educator2")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Award2:</strong></td><td valign=""top"">"&request("award2")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Date Commenced2:</strong></td><td valign=""top"">"&request("datecommenced2")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Date Completed2:</strong></td><td valign=""top"">"&request("datecompleted2")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Educator3:</strong></td><td valign=""top"">"&request("educator3")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Award3:</strong></td><td valign=""top"">"&request("award3")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Date Commenced3:</strong></td><td valign=""top"">"&request("datecommenced3")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Date Completed3:</strong></td><td valign=""top"">"&request("datecompleted3")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Educator4:</strong></td><td valign=""top"">"&request("educator4")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Award4:</strong></td><td valign=""top"">"&request("award4")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Date Commenced4:</strong></td><td valign=""top"">"&request("datecommenced4")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Date Completed4:</strong></td><td valign=""top"">"&request("datecompleted4")&"</td></tr>"
	
	'Employment
		JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>Employment</strong></td></tr>"
	
	JMail.AppendHTML "<tr><td valign=""top""><strong>Employer1:</strong></td><td valign=""top"">"&request("employer1")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Country1:</strong></td><td valign=""top"">"&request("country1")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Position1:</strong></td><td valign=""top"">"&request("position1")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Start Date1:</strong></td><td valign=""top"">"&request("startdate1")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>End Date1:</strong></td><td valign=""top"">"&request("enddate1")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Employer2:</strong></td><td valign=""top"">"&request("employer2")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Country2:</strong></td><td valign=""top"">"&request("country2")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Position2:</strong></td><td valign=""top"">"&request("position2")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Start Date2:</strong></td><td valign=""top"">"&request("startdate2")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>End Date2:</strong></td><td valign=""top"">"&request("enddate2")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Employer3:</strong></td><td valign=""top"">"&request("employer3")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Country3:</strong></td><td valign=""top"">"&request("country3")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Position3:</strong></td><td valign=""top"">"&request("position3")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Start Date3:</strong></td><td valign=""top"">"&request("startdate3")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>End Date3:</strong></td><td valign=""top"">"&request("enddate3")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Employer4:</strong></td><td valign=""top"">"&request("employer4")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Country4:</strong></td><td valign=""top"">"&request("country4")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Position4:</strong></td><td valign=""top"">"&request("position4")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Start Date4:</strong></td><td valign=""top"">"&request("startdate4")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>End Date4:</strong></td><td valign=""top"">"&request("enddate4")&"</td></tr>"
	

	'English Tests
		JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>English Tests</strong></td></tr>"

	JMail.AppendHTML "<tr><td valign=""top""><strong>Englishtest:</strong></td><td valign=""top"">"&request("englishtest")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>IELTSdates:</strong></td><td valign=""top"">"&request("IELTSdates")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Listening:</strong></td><td valign=""top"">"&request("listening")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Reading:</strong></td><td valign=""top"">"&request("reading")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Writing:</strong></td><td valign=""top"">"&request("writing")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Speaking:</strong></td><td valign=""top"">"&request("speaking")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Overall:</strong></td><td valign=""top"">"&request("overall")&"</td></tr>"
	
	'Medical
		JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>Medical</strong></td></tr>"
	
	JMail.AppendHTML "<tr><td valign=""top""><strong>Medical Conditions:</strong></td><td valign=""top"">"&request("medicalconditions")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Familys Medical Condition:</strong></td><td valign=""top"">"&request("familysmedicalcondition")&"</td></tr>"	

	'other
		JMail.AppendHTML "<tr><td valign=""top"" colspan=""2"" bgcolor=""#c0c0c0""><strong>Other</strong></td></tr>"

	JMail.AppendHTML "<tr><td valign=""top""><strong>Criminal Offence:</strong></td><td valign=""top"">"&request("criminaloffence")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Visa Refused:</strong></td><td valign=""top"">"&request("visarefused")&"</td></tr>"	
	JMail.AppendHTML "<tr><td valign=""top""><strong>Military Service:</strong></td><td valign=""top"">"&request("militaryservice")&"</td></tr>"
	JMail.AppendHTML "<tr><td valign=""top""><strong>Certify:</strong></td><td valign=""top"">"&request("certify")&"</td></tr>"	
			
	JMail.AppendHTML "</table></body><style>td {font-family:verdana; font-size:11px; }</style></html>"
      
      
			on error resume next
			JMail.send("127.0.0.1")
			if int(Err.Number) > int(0) then
				on error resume next
				JMail.send("localhost")
			end if
	
		
	
 %>
 
 <html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/mmm-template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Contact MMMigration</title>

<!-- styles needed by jScrollPane -->
<link type="text/css" href="styles/jquery.jscrollpane.css" rel="stylesheet" media="all" />

<!-- latest jQuery direct from google's CDN -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js">
</script>

<!-- the mousewheel plugin - optional to provide mousewheel support -->
<script type="text/javascript" src="script/jquery.mousewheel.js"></script>

<!-- the jScrollPane script -->
<script type="text/javascript" src="script/jquery.jscrollpane.min.js"></script>

<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!--<link href="styles/jquery.jscrollpane.css" rel="stylesheet" type="text/css" />-->

<script type="text/javascript" id="sourcecode">
	$(function()
{
	$('.scroll-pane').jScrollPane({showArrows: true});
});
		</script>

<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

<link href="styles/mmmigration-internal.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">
  <div class="header"><!-- end .header --><img src="images/header.gif" width="1019" height="196" alt="mmmigration | Immigration website  | Australian Migration" /></div>
  <div class="content">
    <div class="breadcrumbs"><!-- InstanceBeginEditable name="breadcrumbs" -->Home<img src="images/arrows.gif" width="12" height="12" alt="migrating" />Contact Us<!-- InstanceEndEditable --></div>
    <div class="sidebar">
      <div class="testimonials"><!-- InstanceBeginEditable name="testimonals" -->
      <p>&nbsp;&nbsp;<img src="images/Australia.jpg" alt="About the Australain Immigration Sector" height="123" width="157" />&nbsp;
      
      &quot;I'm very grateful to her for the help  to gain my permanent residency, and  recommend everyone to use her services!&quot; <!-- InstanceEndEditable --></div>
      <div class="social-media"> <p><a href="http://www.facebook.com/pages/MMMigration/159594327402637?v=page_getting_started#!/pages/MMMigration/159594327402637?v=wall"><img src="images/facebook.gif" width="35" height="35" alt="MMMigration Facebook" /></a>        <a href="http://twitter.com/MMMigration"><img src="images/twitter.gif" width="35" height="35" alt="MMMigration Twitter" /></a>
<a href="http://twitter.com/MMMigration"><img src="images/youtube.gif" width="35" height="35" alt="MMMigration YouTube" /></a>
		<a href="http://au.linkedin.com/pub/melanie-macfarlane/17/a14/21b"><img src="images/linkdin.gif" width="35" height="35" alt=" Melanie  Macfarlane LinkdIn, " /></a></p>
      </div>
    </div>
    <div class="bodycopy"><!-- InstanceBeginEditable name="body copy" -->
    
    
    <div class="jspContainer" style="width: 500px; height: 330px; ">
				<div class="scroll-pane" style="width: 500px; height: 330px; "> 
    
    <h1>ENQUIRY FORM </h1>
	
			<p>Thank you, your application has been successfully received. A representative will be in touch shortly.</p>
    
    <form name="form1" form method="ost" action="enquiry-form.asp">
             <table width="450px" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td colspan="2"><strong>Personal Details <br />
                  <br />
            </strong></td>
          </tr>
          <tr>
            <td width="140"><label for="firstname">Family Name:</label>            </td>
            <td width="364"><input type="text" name="lastname" id="lastname" style="width:155px;" />            </td>
          </tr>
          
          <tr>
            <td><label for="firstname">First Name:</label></td>
            <td ><input type="text" name="firstname" id="firstname" style="width:155px;" /></td>
          </tr>
          <tr>
            <td width="136"><label for="firstname">Middle Name:</label>            </td>
            <td width="364" ><input type="text" name="middlename" id="middlename" style="width:155px;" />            </td>
          </tr>
          <tr>
            <td><label for="startday">Date of Birth:</label>            </td>
            <td ><input type="text" name="DOB" id="DOB" style="width:155px;" /></td>
          </tr>
          <tr>
            <td><label for="Citizenof">Citizen of:</label></td>
            <td ><input type="text" name="Citizenof" id="Citizenof" style="width:155px;"  /></td>
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
          <td colspan="2">Marital Status: 
              <label for="maritalstatus"></label>
              <select  size="1" select name="maritalstatus" id="maritalstatus">
                <option value="Never Married">Never Married</option>
                <option value="Married">Married</option>
                <option value="De Facto">De Facto</option>
                <option value="Divorced">Divorced</option>
                <option value="Seperated">Seperated</option>
              </select>
              <br />
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
            <td colspan="2"><input type="text" name="souseddob" id="souseddob" style="width:155px;" /></td>
            
            
          </tr>
          <tr>
            <td><label for="spouseresidence">Country of current residence :</label>            </td>
            <td colspan="2"><input type="text" name="spouseresidence" id="spouseresidence" style="width:155px;"  /></td>
          </tr>
          <tr>
            <td><label for="child1">For how many months have you been in this relationship?:</label>            </td>
            <td colspan="2" valign="top"><input type="text" name="monthsinrelationship" id="monthsinrelationship" style="width:155px;"  /></td>
          </tr>


          <tr>
          <td colspan="2">Dependent Children:
          </td></tr>
          <td colspan="2"><table width="450px" border="0" cellspacing="5" cellpadding="0">
          <tr>
            <td width="22%"></td>
            <td width="38%">Name:</td>
            <td width="40%">DOB</td>
          </tr>
          <tr>
            <td><label for="child1">Child 1:</label></td>
            <td><input type="text" name="child1" id="child1"  /></td>
            <td><input type="text" name="child1dob" id="child1dob" style="width:155px;" /></td>
          </tr>
          <tr>
            <td><label for="relative2">Child 2:</label></td>
            <td><input type="text" name="child2" id="child2"  /></td>
            <td><input type="text" name="child2dob" id="middlename5" style="width:155px;" /></td>
          </tr>
          <tr>
            <td><label for="child3">Child 3:</label></td>
            <td><input type="text" name="child3" id="child3"  /></td>
            <td><input type="text" name="child3dob" id="middlename6" style="width:155px;" /></td>
          </tr></table>
          <tr>
          <td colspan="2">Do you have ANY other children from a previous marriage or relationship?   
            <select name="otherchildren" id="otherchildren">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
            <br />
          
          </tr>
          <tr>
          
          <td colspan="2">Do you have any person over the age of 25 years who is dependent upon you?    
            <select name="dependents" id="dependents">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
            <br />
          
          </tr>
          <tr>
          
          <td colspan="2">Do you or does your spouse have any close relative(s) in Australia?    
            <select name="relatives" id="relatives">
              <option value="None" selected="selected">None</option>
              <option value="Grandparent">Grandparent</option>
              <option value="Parent">Parent</option>
              <option value="Sister/Brother">Sister/Brother</option>
              <option value="Aunt/Uncle">Aunt/Uncle</option>
              <option value="First Cousin">First Cousin</option>
            </select>
            <br />
            <br />
                    <br />
          
          </tr>
          
                    <tr>
          <td colspan="2">Who and where do these relatives live in Australia?<br />
Please indicate name, state and suburb OR town. </td></tr>
          <td colspan="2"><table width="450px" border="0" cellspacing="5" cellpadding="0"> 
          <tr>
            <td width="22%"></td>
            <td width="38%">NAME</td>
            <td>SUBURB or TOWN, STATE</td>
          </tr>
          <tr>
            <td><label for="relative1">1:</label></td>
            <td><textarea name="relative1" id="relative1"></textarea></td>
            <td><textarea name="relativeaddress1" id="relativeaddress1"></textarea></td>
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
            <td colspan="2"><table width="450px" border="0" cellspacing="5" cellpadding="0">
              <tr>
                <td ></td>
                <td valign="top"  >Educator</td>
                <td valign="top" >Academic award</td>
                <td >Date <br />
                  commenced <br /></td>
                <td >Date <br />
                  completed                  </td>
                </tr>
                <tr>
                <td >1</td>
                <td ><label for="education1"></label>
                  <input type="text" name="educator1" id="educator1" / style="width:130px;"></td>
                <td valign="top"><label for="award1"></label>
                  <input type="text" name="award1" id="award1" / style="width:130px;"></td>
                <td valign="top"><input name="datecommenced1" type="text" id="datecommenced1" / style="width:79px;" value="dd/mm/yyyy" /></td>
                <td valign="top"><input name="datecompleted1" type="text" id="datecompleted1" / style="width:79px;" value="dd/mm/yyyy" /></td>
                </tr>
              <tr>
                <td >2</td>
                <td ><label for="educator2"></label>
                  <input type="text" name="educator2" id="educator2" / style="width:130px;"></td>
                <td valign="top"><label for="award"></label>
                  <input type="text" name="award2" id="award2" / style="width:130px;" ></td>
                <td valign="top"><input name="datecommenced2" type="text" id="datecommenced2" / style="width:79px;" value="dd/mm/yyyy" /></td>
                <td valign="top"><input name="datecompleted2" type="text" id="datecompleted2" / style="width:79px;" value="dd/mm/yyyy" /></td>
                </tr>
              <tr>
                <td >3</td>
                <td ><label for="educator3"></label>
                  <input type="text" name="educator3" id="educator3" / style="width:130px;"></td>
                <td valign="top"><label for="award3"></label>
                  <input type="text" name="award3" id="award3" / style="width:130px;"></td>
                <td valign="top"><input name="datecommenced3" type="text" id="datecommenced3" / style="width:79px;" value="dd/mm/yyyy" /></td>
                <td valign="top"><input name="datecompleted3" type="text" id="datecompleted3" / style="width:79px;" value="dd/mm/yyyy" /></td>
                </tr>
              <tr>
                <td >4</td>
                <td ><label for="educator4"></label>
                  <input type="text" name="educator4" id="educator4" / style="width:130px;"></td>
                <td valign="top"><label for="award4"></label>
                  <input type="text" name="award4" id="award4" / style="width:130px;"></td>
                <td valign="top"><input name="datecommenced4" type="text" id="datecommenced4" / style="width:79px;" value="dd/mm/yyyy" /></td>
                <td valign="top"><input name="datecompleted4" type="text" id="datecompleted4" / style="width:79px;" value="dd/mm/yyyy" /></td>
                </tr>
              
              </table>
              
              
            <tr>
          
            <td colspan="2"><strong>Employment:</strong><br /> (Start from the recent employment)</td>
          </tr>
                
           
          </tr>
          <tr>
            <td colspan="2"> <table width="450px" border="0" cellspacing="5" cellpadding="0">
                <tr>
                  <td width="2%">&nbsp;</td>
                  <td width="20%" valign="top">Employer</td>
                  <td width="20%" valign="top">City, country</td>
                  <td width="20%" valign="top">Position title</td>
                  <td width="19%">Date <br />
commenced <br /></td>
                  <td width="19%">Date <br />
                    completed
                      <br /></td>
                </tr>
                <tr>
                  <td >1</td>
                  <td ><label for="employer1"></label>
                    <input type="text" name="employer1" id="employer1" / style="width:79px;"></td>
                  <td valign="top"><label for="country1"></label>
                    <input type="text" name="country1" id="country1" / style="width:79px;"></td>
                    <td valign="top"><label for="position1"></label>
                    <input type="text" name="position1" id="position1" / style="width:79px;"></td>
                  <td valign="top"><input name="startdate1" type="text" id="startdate1" / style="width:83px;" value="dd/mm/yyyy" /></td>
                  <td valign="top"><input name="enddate1" type="text" id="enddate1" / style="width:83px;" value="dd/mm/yyyy" /></td>
                </tr>
                <tr>
                  <td >2</td>
                  <td ><label for="employer2"></label>
                    <input type="text" name="employer2" id="employer2" / style="width:79px;"></td>
                  <td valign="top"><label for="award"></label>
                    <input type="text" name="country2" id="country2" / style="width:79px;"></td>
                    <td valign="top"><label for="position2"></label>
                    <input type="text" name="position2" id="position1" / style="width:79px;"></td>
                  <td valign="top"><input name="startdate2" type="text" id="startdate2" / style="width:83px;" value="dd/mm/yyyy" /></td>
                  <td valign="top"><input name="enddate2" type="text" id="enddate2" / style="width:83px;" value="dd/mm/yyyy" /></td>
                </tr>
                <tr>
                  <td >3</td>
                  <td ><label for="employer3"></label>
                    <input type="text" name="employer3" id="employer3" / style="width:79px;"></td>
                  <td valign="top"><label for="country3"></label>
                    <input type="text" name="country3" id="country3" / style="width:79px;"></td>
                    <td valign="top"><label for="position3"></label>
                    <input type="text" name="position3" id="position1" / style="width:79px;"></td>
                  <td valign="top"><input name="startdate3" type="text" id="startdate3" / style="width:83px;" value="dd/mm/yyyy" /></td>
                  <td valign="top"><input name="enddate3" type="text" id="enddate3" / style="width:83px;" value="dd/mm/yyyy" /></td>
                </tr>
                <tr>
                  <td >4</td>
                  <td ><label for="employer4"></label>
                    <input type="text" name="employer4" id="employer4" / style="width:79px;"></td>
                  <td valign="top"><label for="country4"></label>
                    <input type="text" name="country4" id="country4" / style="width:79px;"></td>
                    <td valign="top"><label for="position4"></label>
                    <input type="text" name="position4" id="position1" / style="width:79px;"></td>
                  <td valign="top"><input name="startdate4" type="text" id="startdate4" / style="width:83px;" value="dd/mm/yyyy" /></td>
                  <td valign="top"><input name="enddate4" type="text" id="enddate4" / style="width:83px;" value="dd/mm/yyyy" /></td>
                </tr>
                </table>
                
            <tr>
                  <td ><img src="img/img_pix.gif" alt="" width="100%" height="1" /></td>
            </tr>
            
                        <tr>
          
            <td colspan="2"><strong>English Language:</strong><br />              <br /></td>
          </tr>
            
                <td colspan="2"><label for="englishtest">Have you completed an English test?</label>
                  <select name="englishtest" id="englishtest">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select></td>
                <tr>
            <td><label for="startday">What was the date of the most recent IELTS test:</label>            </td>
            <td valign="top" ><input name="IELTSdates" type="text" id="IELTSdates" / style="width:83px;" value="dd/mm/yyyy" /></td>
          </tr>
          <tr>
            <td colspan="2"><p>What were the individual IELTS band scores? And the overall score?</p></td>
            </tr>
            <tr>
            <td><label for="listening">Listening:</label>            </td>
            <td colspan="2"><input type="text" name="listening" id="listening" style="width:155px;"  /></td>
          </tr>
          <tr>
            <td><label for="reading">Reading:</label>            </td>
            <td colspan="2"><input type="text" name="reading" id="reading" style="width:155px;"  /></td>
          </tr>
          <tr>
            <td><label for="writing">Writing:</label>            </td>
            <td colspan="2"><input type="text" name="writing" id="writing" style="width:155px;"  /></td>
          </tr>
          <tr>
            <td><label for="speaking">Speaking:</label>            </td>
            <td colspan="2"><input type="text" name="speaking" id="speaking" style="width:155px;"  /></td>
          </tr>
          <tr>
            <td><label for="overall">Overall:</label>            </td>
            <td colspan="2"><input type="text" name="overall" id="overall" style="width:155px;"  /></td>
          </tr>
          
          <tr>
          
            <td colspan="2"><strong>Health:</strong><br />              <br /></td>
          </tr>
          <tr>
          <td colspan="2"><label for="medicalconditions">Do you currently suffer from or have you suffered from any significant <br />
medical conditions? </label>
            <select name="medicalconditions" id="medicalconditions">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select></td></tr>
                
                <td colspan="2"><label for="familymedicalconditions">Does any member of your family or any child of yours from a previous relationship <br />
suffer from any significant medical condition? </label>
                  <select name="familysmedicalcondition" id="familysmedicalcondition">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select></td>
          
          <tr>
            <td colspan="2"><strong>Character:</strong><br />              
              <br /></td>
          </tr>
          <tr>
          <td colspan="2"><label for="character">Have you or any member of your immediate family ever been convicted of ANY criminal offence in any country? </label>
            <select name="criminaloffence" id="criminaloffence">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select></td></tr>
                
                <tr>
            <td colspan="2"><strong>Australian Visa:</strong><br />              
              <br /></td>
          </tr>
                
                <td colspan="2"><label for="visarefused">Have you or any member of your immediate family been REFUSED an Australian visa <br />
OR had an Australian Visa CANCELLED?</label>
                  <select name="visarefused" id="visarefused">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select></td>
                
                <tr>
            <td colspan="2"><strong>Military Service or Intelligence Agency:</strong><br />              
              <br /></td>
          </tr>
                
                <td colspan="2"><label for="militaryservice">Have you or any member of your immediate family ever served in the military forces <br />
of any country OR been employed by an intelligence agency in any country?</label>
                  <select name="militaryservice" id="militaryservice">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select></td>
                  
                  <tr>
                  <td colspan="2"><label for="certify">I certify that the answers I have given on this Client Questionnaire are true and correct</label>
                  <select name="certify" id="certify">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select></td>
                  <tr>
                  <td colspan="2"><label>
                  <input type="submit" name="Submit" value="Submit Form">
                  </label></td>
          
            </td>
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
            </td></tr>
              <tr><td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="2">&nbsp;</td>
          </tr>
        </table>
        </form>
</div>
</div>
    <!-- InstanceEndEditable --></div>

	
	    <div class="navigation"><br />
	<OBJECT object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="800" height="100" id="FlashID" title="mmmigration">
        <param name="movie" value="swf/navigation.swf" />
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="swfversion" value="8.0.35.0" />

<EMBED src="swf/navigation.swf" quality="high" wmode="opaque"  WIDTH="800" HEIGHT="100" id="FlashID" swfversion="8.0.35.0"  title="mmmigration" TYPE="application/x-shockwave-flash"  >
</EMBED>


</OBJECT>
        </div>
 <!-- end .content -->

  </div>
  <!-- end .container --></div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
<!-- InstanceEnd -->

<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>

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

</html>
