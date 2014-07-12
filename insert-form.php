<?
session_start();
//if(session_is_registered('login')){
if(isset( $_SESSION['login'])){
//echo $_SESSION['login'];
$sendInsert = $_POST['submit'];
//
if (isset($sendInsert)){
require_once('insert.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Main Admin Menu :: VETA</title>
<link href="newsletter/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<link href="../css/ui-lightness/jquery-ui-1.8.10.custom.css" rel="stylesheet" type="text/css" />
<script src="../js/livevalidation_standalone.js" type="text/javascript"></script>
<link href="../css/validateForm.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style17 {
	font-size: 16px;
	color: #24205E;
	font-weight: bold;
}
.auto-hint {
 color:#999;
}
-->
</style>
</head>

<body>
<!-- /// /// -->    
<form id="insertClient" name="insertClient" method="post" action="<?=$_SERVER['PHP_SELF'];?>">
  <br />
  <br />
  <table width="900" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
    <tr>
      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="211" rowspan="2"><img src="images/logomodulo.gif" width="194" height="106" align="absmiddle" /></td>
            <td align="right" valign="middle"><a href="options.php"><img src="newsletter/images/back.png" border="0" /></a><a href="logout.php"><img src="images/logoutp.png" width="104" height="44" border="0" /></a></td>
          </tr>
          <tr>
            <td align="center" valign="middle"><h2>Insert New Client VETA</h2></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top">
          <table width="100%" border="0" cellpadding="4" cellspacing="1">
          <tr>
          <!-- 
            <td align="left" valign="middle" bgcolor="#DFEBF4">Start Year</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="startYear" id="startYear"  /></td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Start Month</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="startMonth" id="startMonth"  /></td>
          -->
          	<td align="left" valign="middle" bgcolor="#DFEBF4">&nbsp;</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Counsellor</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">
                <select name="stCounsellor" id="stCounsellor">
                    <option value="">::Choose Counsellor::</option>
                    <option value="Y-Useche">Yovanny Useche</option>
                    <!-- <option value="C-Plata">Carlos Plata</option> -->
                    <!-- <option value="L-Ulloa">Luis Ulloa</option> -->
                    <option value="M-Ortiz">Maricela Ortiz</option>
                    <option value="R-Fonseca">Rocio Fonseca</option>
                    <option value="S-Moreira">Silvia Moreira</option>
                </select>
                <!-- <input type="text" name="stCounsellor" id="stCounsellor"  /> -->
            </td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">&nbsp;</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Client Status</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">
                <select name="personStatus" id="personStatus">
                    <option value="">::Choose Status::</option>
                    <option value="1">New</option>
                    <option value="2">Renovation</option>
                    <option value="3">Other Agency</option>
                    <option value="4">Return</option>
                </select>
                <!-- <input type="text" name="stCounsellor" id="stCounsellor"  /> -->
            </td>
          </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td valign="top"><fieldset>
        <legend>First Stage</legend>
        <table width="100%" border="0" cellspacing="1" cellpadding="4">
          <tr>
            <td align="left" valign="middle" bgcolor="#F2F2F2">First Name</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="firstName" id="firstName" class="auto-hint" title="Enter Name"  /></td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Last Name</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="lastName" id="lastName" class="auto-hint" title="Enter Last Name" /></td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Mobile</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="mobilePhone" id="mobilePhone"  /></td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Email Address</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="emailAddress" id="emailAddress" class="auto-hint" title="Email Address"  /></td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Visa ExpDate</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="visaExpDate" id="visaExpDate" class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Visa Type</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">
                <select name="visaType" id="visaType">
                    <option value="">::Select Visa::</option>
                    <option value="570">English(ELICOS)</option>
                    <option value="572">Vocational Education</option>
                    <option value="573">Higher Education Visa</option>
                    <option value="0">Other</option>
                </select> 
               <!-- <input type="text" name="visaType" id="visaType"  /> -->
            </td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Origin Country</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="originCountry" id="originCountry"   /></td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Residency Country</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="residencyCountry" id="residencyCountry"  /></td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Nationality</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="nationality" id="nationality"  /></td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Passport Number</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="passNumber" id="passNumber"  /></td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Passport Expiry Date</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="passExpDate" id="passExpDate" class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Date Of Birth</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="DOB" id="DOB" class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Language</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">
                <select name="language" id="language">
                    <option value="">::Select Language::</option>
                    <option value="1">Spanish</option>
                    <option value="2">Portuguese</option>
                    <option value="3">English</option>
                    <option value="0">Other</option>
                </select>
                <!-- <input type="text" name="homePhone" id="homePhone"  /> -->
            </td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Skype</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="skype" id="skype"  /></td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Msn</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="msn" id="msn"  /></td>
          </tr>
        </table>
      </fieldset></td>
    </tr>
    <tr>
      <td align="left" valign="top"><fieldset>
        <legend>Second Stage</legend>
        <table width="100%" border="0" cellspacing="1" cellpadding="4">
          <tr>
            <td bgcolor="#DFEBF4">Profession</td>
            <td bgcolor="#DFEBF4"><input type="text" name="profession" id="profession"  /></td>
            <td bgcolor="#DFEBF4">Work Experience</td>
            <td bgcolor="#DFEBF4"><input type="text" name="workExperience" id="workExperience"  class="auto-hint" title="Number of years of work experience" /></td>
            <td bgcolor="#DFEBF4">College Name</td>
            <td bgcolor="#DFEBF4"><input type="text" name="collegeName" id="collegeName"  /></td>
          </tr>
          <tr>
            <td bgcolor="#F2F2F2">Degree Date</td>
            <td bgcolor="#F2F2F2"><input type="text" name="degreeDate" id="degreeDate"  class="datePicker auto-hint" title="yyyy/mm/dd" /></td>
            <td bgcolor="#F2F2F2">Degree Uni</td>
            <td bgcolor="#F2F2F2"><input type="text" name="degreeUni" id="degreeUni"  /></td>
            <td bgcolor="#F2F2F2">Home Phone</td>
            <td colspan="3" bgcolor="#F2F2F2"><input type="text" name="homePhone" id="homePhone"  /></td>
          </tr>
          <tr>
            <td bgcolor="#DFEBF4">Seminar Attendance</td>
            <td bgcolor="#DFEBF4"><input type="text" name="seminarAttendance" id="seminarAttendance"  /></td>
            <td bgcolor="#DFEBF4">Seminar Date</td>
            <td bgcolor="#DFEBF4"><input type="text" name="seminarDate" id="seminarDate"  class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
            <td bgcolor="#DFEBF4">Agreed to Receive Info</td>
            <td bgcolor="#DFEBF4">
                <select name="getVetaInfo" id="getVetaInfo">
                    <option selected="selected" value="YES">YES</option>
                    <option value="NO">NO</option>
                </select> 
                <!-- <input type="text" name="getVetaInfo" id="getVetaInfo"  /> -->
            </td>
          </tr>
        </table>
      </fieldset></td>
    </tr>
    <tr>
      <td align="left" valign="top"><fieldset>
        <legend>Tercera Parte</legend>
        <table width="100%" border="0" cellspacing="1" cellpadding="4">
          <tr>
            <td bgcolor="#F2F2F2">English Test</td>
            <td bgcolor="#F2F2F2"><input type="radio" value="1" name="engTest"/>YES &nbsp; <input type="radio" value="0" name="engTest"/>NO</td>
            <td bgcolor="#F2F2F2">English Test Name</td>
            <td bgcolor="#F2F2F2">
                <select name="engTestName" id="engTestName">
                    <option value="">::Select English Test::</option>
                    <option value="IELTS">IELTS</option>
                    <option value="TOEFL">TOEFL</option>
                    <option value="Other">Other</option>
                </select> 
                <!-- <input type="text" name="engTestName" id="engTestName"  /> -->
            </td>
            <td bgcolor="#F2F2F2">English Test Version</td>
            <td bgcolor="#F2F2F2">
                <select name="engTestType" id="engTestType">
                    <option value="">::Select Test Version::</option>
                    <option value="General">General Training</option>
                    <option value="Academic">Academic</option>
                    <option value="Other">Other</option>
                </select> 
                <!-- <input type="text" name="engTestType" id="engTestType"  /> -->
            </td>
          </tr>
          <tr>
            <td bgcolor="#DFEBF4">Eng. Test Date</td>
            <td bgcolor="#DFEBF4"><input type="text" name="engTestDate" id="engTestDate" class="datePicker auto-hint" title="yyyy/mm/dd"/></td>
            <td bgcolor="#DFEBF4">Overall Score</td>
            <td bgcolor="#DFEBF4"><input type="text" name="overallScore" id="overallScore"  /></td>
            <td bgcolor="#DFEBF4">Report Form Number</td>
            <td bgcolor="#DFEBF4"><input type="text" class="auto-hint" title="Test Report Form Number" name="reptFormNo" id="reptFormNo"  /></td>
          </tr>
        </table>
      </fieldset></td>
    </tr>
    <tr>
      <td align="left" valign="top"><fieldset>
        <legend>Fourth Stage</legend>
        <table width="100%" border="0" cellspacing="1" cellpadding="4">
          <tr>
            <td bgcolor="#F2F2F2">General Comments</td>
            <td colspan="3" bgcolor="#F2F2F2"><textarea name="genComments" id="genComments" cols="90" rows="2"></textarea></td>
          </tr>
          <tr>
            <td bgcolor="#DFEBF4">Modified By</td>
            <td bgcolor="#DFEBF4"><?=$_SESSION['login'];?><input type="hidden" name="<?php echo $_SESSION['login'];?>" id="textfield29" /></td>
            <td bgcolor="#DFEBF4">Modified on</td>
            <td bgcolor="#DFEBF4"><?=date('l jS \of F Y h:i:s A');?><input type="hidden" name="<?php echo date('l jS \of F Y h:i:s A');?>" id="textfield31" /></td>
          </tr>
        </table>
      </fieldset></td>
    </tr>
    <tr>
      <td height="40" align="left" valign="top"><div align="center">
          <!--   <input type="button" name="goBack" id="goBack" value="< Search Again" onclick="javascript:history.back(-1);" /> -->
          <input type="submit" name="submit" id="submit" value="Submit" />
      </div></td>
    </tr>
  </table>
</form>
<script src="../js/admin-forms-js.js" type="text/javascript"></script>
</body>
</html>
<?php
}
else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
?>