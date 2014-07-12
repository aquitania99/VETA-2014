<?
session_start();
if(session_is_registered('login')){
//echo $_SESSION['login'];
$id1=$_GET['me'];
//echo "<br /> Check ID : ".$id1."<br />";
///
require_once('search.php');
//
$chosen=$id1;
//
$up = $_POST['submit'];
//
if (isset($up)){
require_once('update.php');
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
 color:#555;
}
-->
</style>
</head>

<body>
<?php 
    if (isset($exist) || isset($chosen)){
?>
<!-- /// /// -->    
<form id="updateClient" name="updateClient" method="post" action="<?=$_SERVER['PHP_SELF'];?>">
    <input type="hidden" id="clientID" name="clientID" value="<?=$rowSearch['personID'];?>"/>
  <br />
  <br />
  <table width="900" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
    <tr>
      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="211" rowspan="2"><img src="images/logomodulo.gif" width="194" height="106" align="absmiddle" /></td>
            <td align="right" valign="middle"><a href="mainAdmin.php"><img src="newsletter/images/back.png" border="0" /></a><a href="logout.php"><img src="images/logoutp.png" width="104" height="44" border="0" /></a></td>
          </tr>
          <tr>
            <td align="center" valign="middle"><h2>UPDATE / MODIFY CLIENT</h2></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top">
          <table width="100%" border="0" cellpadding="4" cellspacing="1">
          <tr>
          <!-- 
            <td align="left" valign="middle" bgcolor="#DFEBF4">Start Year</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="startYear" id="startYear" value="<?=$rowSearch['startYear'];?>" /></td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Start Month</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="startMonth" id="startMonth" value="<?=$rowSearch['startMonth'];?>" /></td>
            --> 
            <td align="left" valign="middle" bgcolor="#DFEBF4">Counsellor</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">
                <select name="stCounsellor" id="stCounsellor">
                    <?php 
                        $counsellor = $rowSearch['stCounsellor'];
                        switch ($counsellor) {
                        ///
                        case 'Y-Useche':
                        echo "<option value=\"\">::Choose Counsellor::</option>
                                <option selected=\"selected\" value=\"Y-Useche\">Yovanny Useche</option>
                                <option value=\"C-Plata\">Carlos Plata</option>
                                <!-- <option value=\"L-Ulloa\">Luis Ulloa</option> -->
                                <option value=\"M-Ortiz\">Maricela Ortiz</option>
								<option value=\"R-Fonseca\">Rocio Fonseca</option>
								<option value=\"S-Moreira\">Silvia Moreira</option>";
                        break;
                        case 'C-Plata':
                        echo "<option value=\"\">::Choose Counsellor::</option>
                                <option value=\"Y-Useche\">Yovanny Useche</option>
                                <option selected=\"selected\" value=\"C-Plata\">Carlos Plata</option>
                                <!-- <option value=\"L-Ulloa\">Luis Ulloa</option> -->
                                <option value=\"M-Ortiz\">Maricela Ortiz</option>
								<option value=\"R-Fonseca\">Rocio Fonseca</option>
								<option value=\"S-Moreira\">Silvia Moreira</option>";
                        break;
                        case 'L-Ulloa':
                        echo "<option value=\"\">::Choose Counsellor::</option>
                                <option value=\"Y-Useche\">Yovanny Useche</option>
                                <option value=\"C-Plata\">Carlos Plata</option>
                                <!-- <option selected=\"selected\"  value=\"L-Ulloa\">Luis Ulloa</option> -->
                                <option value=\"M-Ortiz\">Maricela Ortiz</option>
								<option value=\"R-Fonseca\">Rocio Fonseca</option>
								<option value=\"S-Moreira\">Silvia Moreira</option>";
                        break;
                        case 'M-Ortiz':
                        echo "<option value=\"\">::Choose Counsellor::</option>
                                <option value=\"Y-Useche\">Yovanny Useche</option>
                                <option value=\"C-Plata\">Carlos Plata</option>
                                <option value=\"L-Ulloa\">Luis Ulloa</option>
                                <option selected=\"selected\" value=\"M-Ortiz\">Maricela Ortiz</option>
								<option value=\"R-Fonseca\">Rocio Fonseca</option>
								<option value=\"S-Moreira\">Silvia Moreira</option>";
                        break;
						case 'R-Fonseca':
                        echo "<option value=\"\">::Choose Counsellor::</option>
                                <option value=\"Y-Useche\">Yovanny Useche</option>
                                <option value=\"C-Plata\">Carlos Plata</option>
                                <option value=\"L-Ulloa\">Luis Ulloa</option>
                                <option value=\"M-Ortiz\">Maricela Ortiz</option>
								<option selected=\"selected\" value=\"R-Fonseca\">Rocio Fonseca</option>
								<option value=\"S-Moreira\">Silvia Moreira</option>";
                        break;
						case 'S-Moreira':
                        echo "<option value=\"\">::Choose Counsellor::</option>
                                <option value=\"Y-Useche\">Yovanny Useche</option>
                                <option value=\"C-Plata\">Carlos Plata</option>
                                <option value=\"L-Ulloa\">Luis Ulloa</option>
                                <option selected=\"selected\" value=\"M-Ortiz\">Maricela Ortiz</option>
								<option value=\"R-Fonseca\">Rocio Fonseca</option>
								<option selected=\"selected\" value=\"S-Moreira\">Silvia Moreira</option>";
                        break;
                        default:
                        echo "<option selected=\"selected\" value=\"\">::Choose Counsellor::</option>
                                <option value=\"Y-Useche\">Yovanny Useche</option>
                                <option value=\"C-Plata\">Carlos Plata</option>
                                <!-- <option value=\"L-Ulloa\">Luis Ulloa</option> -->
                                <option value=\"M-Ortiz\">Maricela Ortiz</option>
								<option value=\"R-Fonseca\">Rocio Fonseca</option>
								<option value=\"S-Moreira\">Silvia Moreira</option>";
                        }
                    ?>
                </select>
                <!-- <input type="text" name="stCounsellor" id="stCounsellor" value="<?=$rowSearch['stCounsellor'];?>" /> -->
            </td>
          	<td align="left" valign="middle" bgcolor="#DFEBF4">&nbsp;</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Client Status</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">
                <select name="personStatus" id="personStatus">
                <?php 
                        $personStatus = $rowSearch['statusID'];
                        switch ($personStatus) {
                        ///
                        case '1':
                        echo "<option value=\"\">::Choose Status::</option>
                                <option selected=\"selected\" value=\"1\">New</option>
                                <option value=\"2\">Renovation</option>
                                <option value=\"3\">Other Agency</option>
                                <option value=\"4\">Return</option>";
                        break;
                        case '2':
                        echo "<option value=\"\">::Choose Status::</option>
                                <option value=\"1\">New</option>
                                <option selected=\"selected\" value=\"2\">Renovation</option>
                                <option value=\"3\">Other Agency</option>
                                <option value=\"4\">Return</option>";
                        break;
                        case '3':
                        echo "<option value=\"\">::Choose Status::</option>
                                <option value=\"1\">New</option>
                                <option value=\"2\">Renovation</option>
                                <option selected=\"selected\" value=\"3\">Other Agency</option>
                                <option value=\"4\">Return</option>";
                        break;
                        case '4':
                        echo "<option value=\"\">::Choose Status::</option>
                                <option value=\"1\">New</option>
                                <option value=\"2\">Renovation</option>
                                <option value=\"3\">Other Agency</option>
                                <option selected=\"selected\" value=\"4\">Return</option>";
                        break;
                        default:
                        echo "<option selected=\"selected\" value=\"\">::Choose Status::</option>
                                <option value=\"1\">New</option>
                                <option value=\"2\">Renovation</option>
                                <option value=\"3\">Other Agency</option>
                                <option value=\"4\">Return</option>";
                        break;
                        }
                    ?>
                </select>
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
            <td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="firstName" id="firstName" value="<?=$rowSearch['firstName'];?>" /></td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">LastName</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="lastName" id="lastName" value="<?=$rowSearch['lastName'];?>" /></td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Mobile</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="mobilePhone" id="mobilePhone" value="<?=$rowSearch['mobilePhone'];?>" /></td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Email Address</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="emailAddress" id="emailAddress" value="<?=$rowSearch['emailAddress'];?>" /></td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Visa ExpDate</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="visaExpDate" id="visaExpDate" class="datePicker auto-hint" title="yyyy/mm/dd" value="<?=$rowSearch['visaExpDate'];?>" /></td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Visa Type</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">
                <select name="visaType" id="visaType">
                    <?php 
                        $visa = $rowSearch['visaType'];
                        switch ($visa) {
                        ///
                        case 570:
                        echo "<option value=\"\">::Select Visa::</option>
                                <option selected=\"selected\" value=\"570\">English(ELICOS)</option>
                                <option value=\"572\">Vocational Education</option>
                                <option value=\"573\">Higher Education Visa</option>
                                <option value=\"0\">Other</option>";
                        break;
                        case 572:
                        echo "<option value=\"\">::Select Visa::</option>
                                <option value=\"570\">English(ELICOS)</option>
                                <option selected=\"selected\" value=\"572\">Vocational Education</option>
                                <option value=\"573\">Higher Education Visa</option>
                                <option value=\"0\">Other</option>";
                        break;
                        case 573:
                        echo "<option value=\"\">::Select Visa::</option>
                                <option value=\"570\">English(ELICOS)</option>
                                <option value=\"572\">Vocational Education</option>
                                <option selected=\"selected\" value=\"573\">Higher Education Visa</option>
                                <option value=\"0\">Other</option>";
                        break;
                        case 0:
                        echo "<option value=\"\">::Select Visa::</option>
                                <option value=\"570\">English(ELICOS)</option>
                                <option value=\"572\">Vocational Education</option>
                                <option selected=\"selected\" value=\"573\">Higher Education Visa</option>
                                <option selected=\"selected\" value=\"0\">Other</option>";
                        break;
                        default:
                        echo "<option selected=\"selected\" value=\"\">::Select Visa::</option>
                                <option value=\"570\">English(ELICOS)</option>
                                <option value=\"572\">Vocational Education</option>
                                <option value=\"573\">Higher Education Visa</option>";
                        }
                    ?>    
                    
                    
                </select>
                <!-- <input type="text" name="visaType" id="visaType" value="<?=$rowSearch['visaType'];?>" /> -->
            </td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Origin Country</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="originCountry" id="originCountry"  value="<?=$rowSearch['originCountry'];?>" /></td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Residency Country</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="residencyCountry" id="residencyCountry" value="<?=$rowSearch['residencyCountry'];?>" /></td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Nationality</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="nationality" id="nationality" value="<?=$rowSearch['nacionality'];?>" /></td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Passport Number</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="passNumber" id="passNumber" value="<?=$rowSearch['passNumber'];?>" /></td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Passport Expiry Date</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="passExpDate" id="passExpDate" class="datePicker auto-hint" title="yyyy/mm/dd" value="<?=$rowSearch['passExpDate'];?>" /></td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Date Of Birth</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="DOB" id="DOB"  class="datePicker auto-hint" title="yyyy/mm/dd" value="<?=$rowSearch['DOB'];?>" /></td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Language</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">
                <select name="language" id="language">
                    <?php 
                        $language = $rowSearch['languageID'];
                        switch ($language) {
                        ///
                        case 1:
                        echo "<option value=\"\">::Select Language::</option>
                                <option selected=\"selected\" value=\"1\">Spanish</option>
                                <option value=\"2\">Portuguese</option>
                                <option value=\"3\">English</option>
                                <option value=\"0\">Other</option>";
                        break;
                        case 2:
                        echo "<option value=\"\">::Select Language::</option>
                                <option value=\"1\">Spanish</option>
                                <option selected=\"selected\" value=\"2\">Portuguese</option>
                                <option value=\"3\">English</option>
                                <option value=\"0\">Other</option>";
                        break;
                        case 3:
                        echo "<option value=\"\">::Select Language::</option>
                                <option value=\"1\">Spanish</option>
                                <option value=\"2\">Portuguese</option>
                                <option selected=\"selected\" value=\"3\">English</option>
                                <option value=\"0\">Other</option>";
                        break;
                        case 0:
                        echo "<option value=\"\">::Select Language::</option>
                                <option value=\"1\">Spanish</option>
                                <option value=\"2\">Portuguese</option>
                                <option value=\"3\">English</option>
                                <option selected=\"selected\" value=\"0\">Other</option>";
                        break;
                        default:
                        echo "<option selected=\"selected\" value=\"\">::Select Language::</option>
                                <option value=\"1\">Spanish</option>
                                <option value=\"2\">Portuguese</option>
                                <option value=\"3\">English</option>
                                <option value=\"0\">Other</option>";
                        break;
                        }
                    ?>
                </select>
                <!-- <input type="text" name="language" id="language" value="<?=$rowSearch['language'];?>" /></td> -->
            <td align="left" valign="middle" bgcolor="#F2F2F2">Skype</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="skype" id="skype" value="<?=$rowSearch['skype'];?>" /></td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Msn</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2"><input type="text" name="msn" id="msn" value="<?=$rowSearch['msn'];?>" /></td>
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
            <td bgcolor="#DFEBF4"><input type="text" name="profession" id="profession" value="<?=$rowSearch['profession'];?>" /></td>
            <td bgcolor="#DFEBF4">Work Experience</td>
            <td bgcolor="#DFEBF4"><input type="text" name="workExperience" id="workExperience" value="<?=$rowSearch['workExperience'];?>" /></td>
            <td bgcolor="#DFEBF4">College Name</td>
            <td bgcolor="#DFEBF4"><input type="text" name="collegeName" id="collegeName" value="<?=$rowSearch['collegeName'];?>" /></td>
          </tr>
          <tr>
            <td bgcolor="#F2F2F2">Degree Date</td>
            <td bgcolor="#F2F2F2"><input type="text" name="degreeDate" id="degreeDate"  class="datePicker auto-hint" title="yyyy/mm/dd" value="<?=$rowSearch['degreeDate'];?>" /></td>
            <td bgcolor="#F2F2F2">Degree Uni</td>
            <td bgcolor="#F2F2F2"><input type="text" name="degreeUni" id="degreeUni" value="<?=$rowSearch['degreeUni'];?>" /></td>
            <td bgcolor="#F2F2F2">Home Phone</td>
            <td colspan="3" bgcolor="#F2F2F2"><input type="text" name="homePhone" id="homePhone" value="<?=$rowSearch['homePhone'];?>" /></td>
          </tr>
          <tr>
            <td bgcolor="#DFEBF4">Seminar Attendance</td>
            <td bgcolor="#DFEBF4"><input type="text" name="seminarAttendance" id="seminarAttendance" value="<?=$rowSearch['seminarAttendance'];?>" /></td>
            <td bgcolor="#DFEBF4">Seminar Date</td>
            <td bgcolor="#DFEBF4"><input type="text" name="seminarDate" id="seminarDate" class="datePicker auto-hint" title="yyyy/mm/dd" value="<?=$rowSearch['seminarDate'];?>" /></td>
            <td bgcolor="#DFEBF4">Agreed to Receive Info</td>
            <td bgcolor="#DFEBF4">
                <select name="getVetaInfo" id="getVetaInfo">
                <?php 
                        $getInfo = $rowSearch['getVetaInfo'];
                        switch ($getInfo) {
                        ///
                        case 1:
                        echo "<option selected=\"selected\" value=\"1\">YES</option>
                                <option value=\"0\">NO</option>";
                        break;
                        case 0:
                        echo "<option value=\"1\">YES</option>
                                <option selected=\"selected\" value=\"0\">NO</option>";
                        break;
                        default:
                        echo "<option selected=\"selected\" value=\"1\">YES</option>
                                <option value=\"0\">NO</option>";
                        break;
                        }
                    ?>
                </select>
          </tr>
        </table>
      </fieldset></td>
    </tr>
    <tr>
      <td align="left" valign="top"><fieldset>
        <legend>Third Stage</legend>
        <table width="100%" border="0" cellspacing="1" cellpadding="4">
          <tr>
            <td bgcolor="#F2F2F2">Eng Test</td>
            <td bgcolor="#F2F2F2">
                <?php 
                        $engTest = $rowSearch['engTest'];
                        switch ($engTest) {
                        ///
                        case 1:
                        echo "<input type=\"radio\" value=\"1\" checked=\"checked\" name=\"engTest\"/>YES &nbsp; <input type=\"radio\" value=\"0\" name=\"engTest\"/>NO";
                        break;
                        case 0:
                        echo "<input type=\"radio\" value=\"1\" name=\"engTest\"/>YES &nbsp; <input type=\"radio\" checked=\"checked\" value=\"0\" name=\"engTest\"/>NO";
                        break;
                        }
                    ?>
                <!-- <input type="radio" value="yes" name="engTest"/>YES &nbsp; <input type="radio" value="no" name="engTest"/>NO -->
            </td>
            <td bgcolor="#F2F2F2">Eng Test Name</td>
            <td bgcolor="#F2F2F2">
                <select name="engTestName" id="engTestName">
                <?php 
                        $testName = $rowSearch['engTestName'];
                        switch ($testName) {
                        ///
                        case "IELTS":
                        echo "<option value=\"\">::Select English Test::</option>
                                <option selected=\"selected\" value=\"IELTS\">IELTS</option>
                                <option value=\"TOEFL\">TOEFL</option>
                                <option value=\"Other\">Other</option>";
                        break;
                        case "TOEFL":
                        echo "<option value=\"\">::Select English Test::</option>
                                <option value=\"IELTS\">IELTS</option>
                                <option selected=\"selected\" value=\"TOEFL\">TOEFL</option>
                                <option value=\"Other\">Other</option>";
                        break;
                        case "Other":
                        echo "<option value=\"\">::Select English Test::</option>
                                <option value=\"IELTS\">IELTS</option>
                                <option value=\"TOEFL\">TOEFL</option>
                                <option selected=\"selected\" value=\"Other\">Other</option>";
                        break;
                        default:
                        echo "<option  selected=\"selected\" value=\"\">::Select English Test::</option>
                                <option value=\"IELTS\">IELTS</option>
                                <option value=\"TOEFL\">TOEFL</option>
                                <option value=\"Other\">Other</option>";
                        }
                    ?>    
                </select>
                <!-- <input type="text" name="engTestName" id="engTestName" value="<?=$rowSearch['engTestName'];?>" /> -->
            </td>
            <td bgcolor="#F2F2F2">Eng Test Type</td>
            <td bgcolor="#F2F2F2">
                <select name="engTestType" id="engTestType">
                <?php 
                        $testType = $rowSearch['engTestType'];
                        switch ($testType) {
                        ///
                        case "General":
                        echo "<option value=\"\">::Select Test Version::</option>
                                <option selected=\"selected\" value=\"General\">General Training</option>
                                <option value=\"Academic\">Academic</option>
                                <option value=\"Other\">Other</option>";
                        break;
                        case "Academic":
                        echo "<option value=\"\">::Select Test Version::</option>
                                <option value=\"General\">General Training</option>
                                <option selected=\"selected\" value=\"Academic\">Academic</option>
                                <option value=\"Other\">Other</option>";
                        break;
                        case "Other":
                        echo "<option value=\"\">::Select Test Version::</option>
                                <option value=\"General\">General Training</option>
                                <option value=\"Academic\">Academic</option>
                                <option selected=\"selected\" value=\"Other\">Other</option>";
                        break;
                        default:
                        echo "<option selected=\"selected\" value=\"\">::Select Test Version::</option>
                                <option value=\"General\">General Training</option>
                                <option value=\"Academic\">Academic</option>
                                <option value=\"Other\">Other</option>";
                        }
                    ?> 
                </select>
                <!-- <input type="text" name="engTestType" id="engTestType" value="<?=$rowSearch['engTestType'];?>" />-->
            </td>
          </tr>
          <tr>
            <td bgcolor="#DFEBF4">Eng. Test Date</td>
            <td bgcolor="#DFEBF4"><input type="text" name="engTestDate" id="engTestDate"  class="datePicker auto-hint" title="yyyy/mm/dd" value="<?=$rowSearch['engTestDate'];?>" /></td>
            <td bgcolor="#DFEBF4">Overall Score</td>
            <td bgcolor="#DFEBF4"><input type="text" name="overallScore" id="overallScore" value="<?=$rowSearch['overallScore'];?>" /></td>
            <td bgcolor="#DFEBF4">Report Form Number</td>
            <td bgcolor="#DFEBF4"><input type="text" class="auto-hint" title="Test Report Form Number" name="reptFormNo" id="reptFormNo" value="<?=$rowSearch['reportFormNo'];?>"  /></td>
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
            <td colspan="3" bgcolor="#F2F2F2"><textarea name="genComments" id="genComments" cols="90" rows="2"> <?=$rowSearch['genComments'];?></textarea></td>
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
          <input type="button" name="goBack" id="goBack" value="< Search Again" onclick="window.location='update-form.php';" />
          <input type="submit" name="submit" id="submit" value="Submit" />
      </div></td>
    </tr>
  </table>
</form>
<?php } 
else{
?>
<br />
  <br />
  <table width="600" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
    <tr>
      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="211" rowspan="2"><img src="images/logomodulo.gif" width="194" height="106" align="absmiddle" /></td>
            <td align="right" valign="middle"><a href="mainAdmin.php"><img src="newsletter/images/back.png" border="0" /></a><a href="logout.php"><img src="images/logoutp.png" width="104" height="44" border="0" /></a></td>
        </tr>
          <tr>
            <td align="center" valign="middle"><h2> UPDATE / MODIFY CLIENT </h2></td>
          </tr>
      </table></td>
    </tr>
      <tr>
          <td valign="top">
<form action="" method="post" id="search">
<?php if (isset($none) || !isset($exist)){
    if (isset($none)){
    echo "<script type='text/javascript'>alert('No records found.... Please try again using another criteria.');</script>";
    }
    ?>
    
   <fieldset>
   <legend>QUICK SEARCH</legend>
   <br /> 
    <label>Client Email </label>
    <input type="text" name="searchEmail"/>
    <input type="submit" name="search" value="search" />
    </fieldset>
   <br /><br />
    <fieldset>
    <legend>OR</legend>
    <br />
    <label>Client Passport</label>
    <input type="text" name="searchPassport"/>
    </fieldset>
    <br />
    <br />
    <fieldset>
    <legend>OR EVEN</legend>
    <br />
    <label>Client First Name</label>
    <input type="text" name="searchName"/>
    <br />
    <label>Client Last Name</label>
    <input type="text" name="searchLastName"/>
    <br />

    <input type="submit" name="advance" value="search" />
    </fieldset>
    </form>
<?php
}
if (isset($existArray)){
    $i;
    echo "<br /><strong>LIST OF RECORDS FOUND.....</strong><br /><br />";
    do {
        $i++;
          //printf("ID: %s  Name: %s <br />", $rowSearch[0], $rowSearch[4]);
        echo "<a style='font-size:.95em; padding-bottom:.5em; color:#666 !important; cursor:pointer;' href='".$_SERVER[PHP_SELF]."?me=".$rowSearch[0]."' title=''>".$i.") ".$rowSearch[3]." ".$rowSearch[4]."</a><br />";
        }
        while ($rowSearch = $db->fetch_array($querySearch));
}
?>
          </td>
      </tr>
  </table>
<?php } ?>
<script src="../js/admin-forms-js.js" type="text/javascript"></script>
</body>
</html>
<?php
}
else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
?>