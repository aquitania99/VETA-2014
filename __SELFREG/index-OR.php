<?php
// session_start();
//
date_default_timezone_set("Australia/Sydney");
//
require('../Admin/classes/database.php');
// require('classes/college.php');
// require('classes/counsellors.php');
//////////////////////////////////
// if (isset($_SESSION['login'])) {
//////////////////////////////////

//
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	//
	
	if (isset($_POST['submit'])) {
//////////////////////////////////
		require("../Admin/classes/person.php");
//
		$person = new Person();
		$person->_date = date('Y/m/d');
		$person->stCounsellor = $cID;
		$person->personstatus = $_POST['personStatus'];
		$person->firstName = ucwords(strtolower($_POST['firstName']));
		$person->lastName = ucwords(strtolower($_POST['lastName']));
		$person->emailAddress = strtolower($_POST['emailAddress']);
		//
		$person->mobilePhone = $_POST['mobilePhone'];
		$person->language = $_POST['language'];

		//
		if (empty($_POST['visaExpDate'])) {
			$person->visaExpDate = '0000-00-00';
		} else {
			$expDate = explode('-', $_POST['visaExpDate']);
			$person->visaExpDate = $expDate[2] . '-' . $expDate[1] . '-' . $expDate[0];
		}
		//

		$person->visaType = $_POST['visaType'];
		$person->genComments = strtolower($_POST['genComments']);
		$person->nationality = ucwords(strtolower($_POST['nationality']));
		$person->profession = ucwords(strtolower($_POST['profession']));
		//var_dump($_POST['workExperience']);
		if (empty($_POST['workExperience'])) {
			$person->workExperience = '0';
		} else $person->workExperience = $_POST['workExperience'];
		//
		$person->collegeName = $_POST['collegeName'];
		//

		if (empty($_POST['DOB'])) {
			$person->DOB = '0000-00-00';
		} else {
			$personDob = explode('-', $_POST['DOB']);
			$person->DOB = $personDob[2] . '-' . $personDob[1] . '-' . $personDob[0];
		}
		//
		$person->passNumber = $_POST['passNumber'];
		//
		if (empty($_POST['passExpDate'])) {
			$person->passExpDate = '0000-00-00';
		} else {
			$passExpDate = explode('-', $_POST['passExpDate']);
			$person->passExpDate = $passExpDate[2] . '-' . $passExpDate[1] . '-' . $passExpDate[0];
		}
		//
		if (!empty($_POST['seminarAttendance'])) {
			$person->seminarAttendance = $_POST['seminarAttendance'];
		} else $person->seminarAttendance = 'NULL';
		//
		if (empty($_POST['seminarDate'])) {
			$person->seminarDate = '0000-00-00';
		} else {
			$seminarDate = explode('-', $_POST['seminarDate']);
			$person->seminarDate = $seminarDate[2] . '-' . $seminarDate[1] . '-' . $seminarDate[0];
		}
		//
		$person->getVetaInfo = $_POST['getVetaInfo'];
		//
		if (empty($_POST['degreeDate'])) {
			$person->degreeDate = '0000-00-00';
		} else {
			$degreeDate = explode('-', $_POST['degreeDate']);
			$person->degreeDate = $degreeDate[2] . '-' . $degreeDate[1] . '-' . $degreeDate[0];
		}
		//
		$person->degreeUni = ucwords(strtolower($_POST['degreeUni']));
		$person->residencyCountry = ucwords(strtolower($_POST['residencyCountry']));
		$person->originCountry = ucwords(strtolower($_POST['originCountry']));
		$person->homePhone = $_POST['homePhone'];
		$person->skype = strtolower($_POST['skype']);

		if (!empty($_POST['engTest'])) {
			$person->engTest = $_POST['engTest'];
		} else $person->engTest = '0';

		$person->engTestName = $_POST['engTestName'];
		$person->engTestType = $_POST['engTestType'];
		//
		if (empty($_POST['engTestDate'])) {
			$person->engTestDate = '0000-00-00';
		} else {
			$testDate = explode('-', $_POST['engTestDate']);
			$person->engTestDate = $testDate[2] . '-' . $testDate[1] . '-' . $testDate[0];
		}
		//
		$person->overallScore = $_POST['overallScore'];
		$person->reptFormNo = $_POST['reptFormNo'];
		$person->modifBy = $_POST['modifBy'];
		$person->referredBy = $_POST['referredBy'];
		//
		// var_export($person,true);
		//
		$person->check($person->emailAddress);
		//
		$result = $person->results;

		//
		if (isset($result)) {
			//echo "<pre>Getting response from the class... ".$result."</pre>";
			switch ($result) {

				case 0:
					//echo "<code><pre>That email address is not on the system yet...</pre></code>";
					$person->add();
					break;

				case 1:
					//echo "<pre>This will UPDATE the user...</pre>";
					echo "<script type='text/javascript'> $('#myModal').modal('toggle'); </script>";
					//$person->update();
					break;

				default:
					# code...
					break;
			}
		}

	}
	?>
<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Main Admin Menu :: VETA</title>
		<link href="../Admin/newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
		<!-- -->
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
		<!-- -->
		<script src="../js/livevalidation_standalone.js" type="text/javascript"></script>
		<style type="text/css">
			<!--
			.style17 {
				font-size: 16px;
				color: #24205E;
				font-weight: bold;
			}

			.auto-hint {
				color: #999;
			}

			.hide {
				display: none;
			}

			-->
			.moreInstalments {
				margin-top: 1.5em;
				margin-bottom: 1.5em;
			}
		</style>
	</head>

	<body>
	<!-- /// /// -->
	<form id="insertClient" name="insertClient" method="post" action="">
	<br/>
	<br/>
	<table width="900" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
	<tr>
		<td valign="top">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td width="211" rowspan="2">
						<img src="../Admin/images/logomodulo.gif" width="194" height="106" align="absmiddle"/>
					</td>
					<td align="right" valign="middle">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" valign="middle">
						<h3>Client VETA Registry Form / Formulario de Registro VETA</h3>
					</td>
				</tr>
			</table>
		</td>
	</tr>

	<tr>
		<td valign="top">
		  <fieldset>
		    <legend>Personal Details - Datos Personales</legend>
			  <table class="table table-hover" border="0" cellpadding="4" cellspacing="1" width="100%">
				  <tbody><tr>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">First Name - Nombre<br> <input name="firstName" id="firstName" class="auto-hint span3" placeholder="Enter Name" type="text">
					  </td>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">Last Name - Apellido<br> <input name="lastName" id="lastName" class="auto-hint span3" placeholder="Enter Last Name" type="text">
					  </td>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">Gender / Género<br>
							<input value="M" name="gender" type="radio">Male / Hombre &nbsp; <input value="F" name="gender" type="radio">Female / Mujer
					  </td>
					</tr>
					<tr>
						<td align="left" bgcolor="#DFEBF4" valign="middle">Email<br> <input name="emailAddress" id="emailAddress" class="auto-hint span3" placeholder="Email Address" type="text">
						</td>
						<td align="left" bgcolor="#DFEBF4" valign="middle">Mobile Phone - Celular<br> <input name="mobilePhone" id="mobilePhone" class="span3" placeholder="Enter Mobile" type="text">
						
                      </td>
						<td align="left" bgcolor="#DFEBF4" valign="middle">&nbsp;
                      
                      </td>
					</tr>
					<tr>
						<td align="left" bgcolor="#F2F2F2" valign="middle">Origin Country<br> <input name="originCountry" id="originCountry" class="span3" placeholder="Origin Country" type="text">
						</td>
						<td align="left" bgcolor="#F2F2F2" valign="middle">Residency Country<br> <input name="residencyCountry" id="residencyCountry" class="span3" placeholder="Residency Country" type="text">
						</td>
						<td align="left" bgcolor="#F2F2F2" valign="middle">Nationality<br> <input name="nationality" id="nationality" class="span3" placeholder="Nationality" type="text">
						</td>
					</tr>
					<tr>
						<td align="left" bgcolor="#DFEBF4" valign="middle">Passport Number<br>
					  <input name="passNumber" id="passNumber" class="span3" placeholder="Passport Number" type="text"></td>
						<td align="left" bgcolor="#DFEBF4" valign="middle">Passport Expiry Date<br>
						<input name="passExpDate" id="passExpDate" class="datePicker auto-hint hasDatepicker" placeholder="dd-mm-yyyy" type="text">
						</td>
						<td align="left" bgcolor="#DFEBF4" valign="middle">Issue Date – Fecha de Expedición <br>
						<input name="passpIssueDate" id="passpIssueDate" class="datePicker auto-hint hasDatepicker" placeholder="dd-mm-yyyy" type="text">
						</td>
					</tr>
					<tr>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">Issuing Authority  - Autoridad que firma el pasaporte<br>
                      <input name="passIssueAuth" id="passIssueAuth" class="span3" placeholder="Issuing Authority" type="text"></td>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">Date Of Birth / Fecha de Nacimiento<br> <input name="DOB" id="DOB" class="datePicker auto-hint hasDatepicker" placeholder="dd-mm-yyyy" type="text"></td>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">City/Town of birth – Ciudad de nacimiento <br>
                      <input name="COB" id="COB" class="span3" placeholder="City/Town of birth" type="text"></td>
				    </tr>
					<tr>
					  <td align="left" bgcolor="#DFEBF4" valign="middle">Relationship Status  - Estado Civil<br>
					    <input name="relStatus" id="relStatus" class="span3" placeholder="Relation Status" type="text">
				      </td>
					  <td align="left" bgcolor="#DFEBF4" valign="middle">Language / Idioma<br>
					    <select name="language" id="language">
					      <option selected="selected" value="">::Select Language::</option>
					      <option value="1">Spanish</option>
					      <option value="2">Portuguese</option>
					      <option value="3">English</option>
					      <option value="0">Other</option>
				        </select>
					  <td align="left" bgcolor="#DFEBF4" valign="middle">&nbsp;</td>
				    </tr>
					
	            </tbody>
		    </table>
            <h3>Current Residential Address – Direccion Actual </h3>
            <table class="table table-hover" border="0" cellpadding="4" cellspacing="1" width="100%">
				  <tbody><tr>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">Street Address - Calle<br>
                      <input name="curStreet" id="curStreet" class="auto-hint span3" placeholder="Street Address" type="text">
					  </td>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">Suburb – Barrio<br>
                      <input name="curSuburb" id="curSuburb" class="auto-hint span3" placeholder="Suburb" type="text">
					  </td>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">State – Departamento<br>
                      <input name="curState" id="curState" class="span3" placeholder="State" type="text">
					  </td>
					</tr>
					<tr>
						<td align="left" bgcolor="#DFEBF4" valign="middle">Country - Pais<br> 
                        <input name="curCountry" id="curCountry" class="span3" placeholder="Country" type="text">
						</td>
						<td align="left" bgcolor="#DFEBF4" valign="middle">Postcode – Codigo Postal<br>
                        <input name="curPostcode" id="curPostcode" class="span3" placeholder="Postcode" type="text">
						</td>
						<td align="left" bgcolor="#DFEBF4" valign="middle">Home Phone / Tl<br> <input name="homePhone" id="homePhone" class="span3" type="text"></td>
					</tr>
					
	            </tbody>
		    </table>
            <h3>Home Address – Dirección en su país de origen </h3>
            <table class="table table-hover" border="0" cellpadding="4" cellspacing="1" width="100%">
				  <tbody><tr>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">Street Address - Calle<br>
                      <input name="orStreet" id="orStreet" class="auto-hint span3" placeholder="Street Address" type="text">
					  </td>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">Suburb – Barrio<br>
                      <input name="orSuburb" id="orSuburb" class="auto-hint span3" placeholder="Suburb" type="text">
					  </td>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">State – Departamento<br>
                      <input name="orState" id="orState" class="span3" placeholder="State" type="text">
					  </td>
					</tr>
					<tr>
						<td align="left" bgcolor="#DFEBF4" valign="middle">Country - Pais<br> 
                        <input name="orCountry" id="orCountry" class="span3" placeholder="Country" type="text">
						</td>
						<td align="left" bgcolor="#DFEBF4" valign="middle">Postcode – Codigo Postal<br>
                        <input name="orPostCode" id="orPostCode" class="span3" placeholder="Postcode" type="text">
						</td>
						<td align="left" bgcolor="#DFEBF4" valign="middle">&nbsp;</td>
					</tr>
					
	            </tbody>
		    </table>
			</fieldset>
		</td>
	</tr>
	<tr>
	  <td align="left" valign="top">
      <fieldset>
				<legend>Employment Details</legend>
            <h3>Provide details of your employment history since you left your studies</h3>
            <p><strong>Employer 1</strong></p>
				<table class="table table-hover" border="0" cellpadding="4" cellspacing="1" width="100%">
					<tbody>
					<tr>
						<td bgcolor="#F2F2F2">Date from  - Desde<br>
                        <input name="job1FromDate" id="job1FromDate" class="datePicker auto-hint span3 hasDatepicker" placeholder="dd-mm-yyyy" type="text">
                      </td>
						<td bgcolor="#F2F2F2">Date To  - Hasta<br>
                        <input name="job1ToDate" id="job1ToDate" class="datePicker auto-hint span3 hasDatepicker" placeholder="dd-mm-yyyy" type="text">
                      </td>
						<td bgcolor="#F2F2F2">Employer Name - Nombre del Empleador<br>
					    <input name="job1Employer" id="job1Employer" class="span3" type="text"></td>
					</tr>
					<tr>
					  <td bgcolor="#DFEBF4">Business Type – Tipo de Negocio<br>
					    <input name="job1Business" id="job1Business" class="span3" type="text"></td>
					  <td bgcolor="#DFEBF4">Role - Cargo<br>
					    <input name="job1Role" id="job1Role" class="auto-hint span3" placeholder="Role" type="text"></td>
					  <td bgcolor="#DFEBF4">Employer Address – Direccion del Empleador <br>
					    <input name="job1EmpAddress" id="job1EmpAddress" class="span3" type="text">
                    </td>
					</tr>
					<tr>
						<td bgcolor="#F2F2F2">Country - País<br>
                        <input name="job1Country" id="job1Country" class="span3" type="text">
						</td>
						<td bgcolor="#F2F2F2">Telehone - Teléfono<br> 
                        <input name="job1Tel" id="job1Tel" type="text">
                        </td>
						<td bgcolor="#F2F2F2">&nbsp;</td>
					</tr>
				</tbody></table>
                <p><strong>Employer 2</strong></p>
               <table class="table table-hover" border="0" cellpadding="4" cellspacing="1" width="100%">
					<tbody>
					<tr>
						<td bgcolor="#F2F2F2">Date from  - Desde<br>
                        <input name="job2FromDate" id="job2FromDate" class="datePicker auto-hint span3 hasDatepicker" placeholder="dd-mm-yyyy" type="text">
                      </td>
						<td bgcolor="#F2F2F2">Date To  - Hasta<br>
                        <input name="job2ToDate" id="job2ToDate" class="datePicker auto-hint span3 hasDatepicker" placeholder="dd-mm-yyyy" type="text">
                      </td>
						<td bgcolor="#F2F2F2">Employer Name - Nombre del Empleador<br>
					    <input name="job2Employer" id="job2Employer" class="span3" type="text"></td>
					</tr>
					<tr>
					  <td bgcolor="#DFEBF4">Business Type – Tipo de Negocio<br>
					    <input name="job2Business" id="job2Business" class="span3" type="text"></td>
					  <td bgcolor="#DFEBF4">Role - Cargo<br>
					    <input name="job2Role" id="job2Role" class="auto-hint span3" placeholder="Role" type="text"></td>
					  <td bgcolor="#DFEBF4">Employer Address – Direccion del Empleador <br>
					    <input name="job2EmpAddress" id="job2EmpAddress" class="span3" type="text">
                    </td>
					</tr>
					<tr>
						<td bgcolor="#F2F2F2">Country - País<br>
                        <input name="job2Country" id="job2Country" class="span3" type="text">
						</td>
						<td bgcolor="#F2F2F2">Phone - Teléfono<br> 
                       <input name="job2Tel" id="job2Tel" type="text">
                        </td>
						<td bgcolor="#F2F2F2">&nbsp;</td>
					</tr>
				</tbody></table> 
			</fieldset>
      </td>
	  </tr>
	<tr>
		<td align="left" valign="top">
			<fieldset>
				<legend>Education Details - Estudios</legend>
                <h3>Home Education Details – Estudios en su Pais de Origen</h3>
			  <table class="table table-hover" border="0" cellpadding="4" cellspacing="1" width="100%">
					<tbody>
					<tr>
						<td bgcolor="#F2F2F2">Date from  - Desde<br>
                        <input name="stdOrFromDate" id="stdOrFromDate" class="datePicker auto-hint span3 hasDatepicker" placeholder="dd-mm-yyyy" type="text">
                      </td>
						<td bgcolor="#F2F2F2">Date To  - Hasta<br>
                        <input name="stdOrToDate" id="stdOrToDate" class="datePicker auto-hint span3 hasDatepicker" placeholder="dd-mm-yyyy" type="text">
                      </td>
						<td bgcolor="#F2F2F2">Course Level – Nivel del curso<br>
					    <input name="stdOrCourseLevel" id="stdOrCourseLevel" class="span3" type="text"></td>
					</tr>
					<tr>
					  <td bgcolor="#DFEBF4">Course Name – Nombre del curso<br>
					    <input name="stdOrCourseName" id="stdOrCourseName" class="span3" type="text"></td>
					  <td bgcolor="#DFEBF4">Course Status – Estado de los Estudios<br>
					  	<input name="stdOrCourseStatus" id="stdOrCourseStatus" class="span3" type="text"></td>
					  <td bgcolor="#DFEBF4">Profession / Title - Profesion / Titulo<br>
                      <input name="stdOrProfession" id="stdOrProfession" class="span3" type="text">
                    </td>
					</tr>
					<tr>
						<td bgcolor="#F2F2F2">Institution Name – Nombre de la institución <br>
                      <input name="stdOrInstName2" id="stdOrInstName2" class="span3" type="text">
						</td>
						<td bgcolor="#F2F2F2">Inst. Street Address – Direccion de la Institución<br>
                      <input name="stdOrInstAddress" id="stdOrInstAddress" class="span3" type="text"></td>
						<td bgcolor="#F2F2F2">&nbsp;</td>
					</tr>
				</tbody></table>
              <h3>Australian Education Details - Estudios en Australia</h3>
              <table class="table table-hover" border="0" cellpadding="4" cellspacing="1" width="100%">
                <tbody>
                  <tr>
                    <td bgcolor="#F2F2F2">Date from  - Desde<br>
                      <input name="stdOzFromDate" id="stdOzFromDate" class="datePicker auto-hint span3 hasDatepicker" placeholder="dd-mm-yyyy" type="text"></td>
                    <td bgcolor="#F2F2F2">Date To  - Hasta<br>
                      <input name="stdOzToDate" id="stdOzToDate" class="datePicker auto-hint span3 hasDatepicker" placeholder="dd-mm-yyyy" type="text"></td>
                    <td bgcolor="#F2F2F2">Course Level – Nivel del curso<br>
                      <input name="stdOzCourseLevel" id="stdOzCourseLevel" class="span3" type="text"></td>
                  </tr>
                  <tr>
                    <td bgcolor="#DFEBF4">Course Name – Nombre del curso<br>
                      <input name="stdOzCourseName" id="stdOzCourseName" class="span3" type="text"></td>
                    <td bgcolor="#DFEBF4">Course Status – Estado de los Estudios<br>
                      <input name="stdOzCourseStatus" id="stdOzCourseStatus" class="span3" type="text"></td>
                    <td bgcolor="#DFEBF4">Profession / Title - Profesion / Titulo<br> <input name="stdOzProfession" id="stdOzProfession" class="span3" type="text"></td>
                  </tr>
                  <tr>
                    <td bgcolor="#F2F2F2">Institution Name – Nombre de la institución <br>
                      <input name="stdOzInstName" id="stdOzInstName" class="span3" type="text"></td>
                    <td bgcolor="#F2F2F2">Inst. Street Address – Direccion de la Institución<br>
                    <input name="stdOzInstAddress" id="stdOzInstAddress" class="span3" type="text"></td>
                    <td bgcolor="#F2F2F2">&nbsp;</td>
                  </tr>
                </tbody>
              </table>
                <h3>VETA / MMMigration Seminars - Seminarios de VETA / MMMigration </h3>
                <table class="table table-hover" border="0" cellpadding="4" cellspacing="1" width="100%">
					<tbody>
					<tr>
						<td bgcolor="#DFEBF4">Seminar Attendance<br>
							<input value="1" name="seminarAttendance" type="radio">YES &nbsp; <input value="0" name="seminarAttendance" type="radio">NO
						</td>
						<td bgcolor="#DFEBF4">Seminar Date<br> <input name="seminarDate" id="seminarDate" class="datePicker auto-hint hasDatepicker" placeholder="dd-mm-yyyy" type="text"></td>
						<td bgcolor="#DFEBF4">Agreed to Receive Info<br>
							<select name="getVetaInfo" id="getVetaInfo" class="span3">
								<option selected="selected" value="1">YES</option>
								<option value="0">NO</option>
							</select>
							<!-- <input type="text" name="getVetaInfo" id="getVetaInfo"  /> -->            </td>
					</tr>
				</tbody></table>
			</fieldset>
		</td>
	</tr>
	<tr>
	  <td align="left" valign="top">
      <fieldset>
				<legend>Australian Visa application  - Aplicaciones de Visa en Australia</legend>
                <h3>Have you ever applied for or held a visa to enter or remain in Australia  - Ha usted aplicado a una visa Australiana o tiene una visa actual</h3>
				<table class="table table-hover" border="0" cellpadding="4" cellspacing="1" width="100%">
					<tbody><tr>
						<td bgcolor="#F2F2F2">Australian Visa<br>
							<input value="1" name="ozVisa" type="radio">
							YES &nbsp; <input value="0" name="ozVisa" type="radio">NO
						</td>
						<td bgcolor="#F2F2F2">Date of  Application   - Fecha de la aplicación <br>
							<input name="aplicationDate" id="aplicationDate" class="datePicker auto-hint span3 hasDatepicker" placeholder="dd-mm-yyyy" type="text">
						</td>
						<td bgcolor="#F2F2F2">Visa Type – Tipo de Visa <br>
						<input name="visaType" id="visaType" type="text">
                      </td>
					</tr>
					<tr>
						<td bgcolor="#DFEBF4">Office Applied At – Embajada donde Aplicó<br>
							<input name="applicationEmbassy" id="applicationEmbassy" type="text">
						</td>
						<td bgcolor="#DFEBF4">Visa ExpDate - Fecha expiración de la Visa<br>
                        <input name="visaExpDate" id="visaExpDate" class="datePicker auto-hint span3 hasDatepicker" placeholder="dd-mm-yyyy" type="text">
						</td>
						<td bgcolor="#DFEBF4">Visa Type - Tipo de Visa<br>
							<select name="visaType" id="visaType" class="span3">
								<option selected="selected" value="">:: Visa ::</option>
								<option value="570">English(ELICOS)</option>
								<option value="572">Vocational Education</option>
								<option value="573">Higher Education Visa</option>
								<option value="0">Other</option>
							</select>
						</td>
					</tr>
				</tbody></table>
			</fieldset>
      </td>
	  </tr>
	

	<tr>
	  <td align="left" valign="top">
      <fieldset>
				<legend>Children and Dependent Family Member Details – Datos de Esposa – Novia (o) y/o Hijos</legend>
                <h3>Spouse / Partner – Esposo(a) / Novio(a)</h3>
				<table class="table table-hover" border="0" cellpadding="4" cellspacing="1" width="100%">
					<tbody><tr>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">First Name - Nombre<br>
                      <input name="partnerFirstName" id="partnerFirstName" class="auto-hint span3" placeholder="Enter Name" type="text">
					  </td>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">Last Name - Apellido<br> <input name="partnerLastName" id="partnerLastName" class="auto-hint span3" placeholder="Enter Last Name" type="text">
					  </td>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">Gender / Género<br>
							<input value="M" name="partnerGender" type="radio">Male / Hombre &nbsp; <input value="F" name="partnerGender" type="radio">Female / Mujer
					  </td>
					</tr>
					<tr>
						<td align="left" bgcolor="#DFEBF4" valign="middle">Date Of Birth / Fecha de Nacimiento<br>
                        <input name="partnerDOB" id="partnerDOB" class="datePicker auto-hint hasDatepicker" placeholder="dd-mm-yyyy" type="text">
						</td>
						<td align="left" bgcolor="#DFEBF4" valign="middle">State - Province / Departamento<br>
                        <input name="partnerState" id="partnerState" class="span3" placeholder="State" type="text">
						
                      </td>
						<td align="left" bgcolor="#DFEBF4" valign="middle">City / Ciudad<br>
                        <input name="partnerCity" id="partnerCity" class="span3" placeholder="City" type="text">
                      </td>
					</tr>
					<tr>
						<td align="left" bgcolor="#F2F2F2" valign="middle">Country / Pais<br> <input name="partnerCountry" id="partnerCountry" class="span3" placeholder="Country" type="text">
						</td>
						<td align="left" bgcolor="#F2F2F2" valign="middle">&nbsp;
						</td>
						<td align="left" bgcolor="#F2F2F2" valign="middle">
						</td>
					</tr>
					<tr>
				</tbody></table>
                <h3>Children / Hijos</h3>
                <p><strong>Child 1 / Hijo 1</strong></p>
				<table class="table table-hover" border="0" cellpadding="4" cellspacing="1" width="100%">
					<tbody><tr>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">First Name - Nombre<br>
                      <input name="child1FirstName" id="child1FirstName" class="auto-hint span3" placeholder="Enter Name" type="text">
					  </td>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">Last Name - Apellido<br> <input name="child1LastName" id="child1LastName" class="auto-hint span3" placeholder="Enter Last Name" type="text">
					  </td>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">Gender / Género<br>
							<input value="M" name="child1Gender" type="radio">Male / Hombre &nbsp; <input value="F" name="child1Gender" type="radio">Female / Mujer
					  </td>
					</tr>
					<tr>
						<td align="left" bgcolor="#DFEBF4" valign="middle">Date Of Birth / Fecha de Nacimiento<br>
                        <input name="child1DOB" id="child1DOB" class="datePicker auto-hint hasDatepicker" placeholder="dd-mm-yyyy" type="text">
						</td>
						<td align="left" bgcolor="#DFEBF4" valign="middle">State - Province / Departamento<br>
                        <input name="child1State" id="child1State" class="span3" placeholder="State" type="text">
						
                      </td>
						<td align="left" bgcolor="#DFEBF4" valign="middle">City / Ciudad<br>
                        <input name="child1City" id="child1City" class="span3" placeholder="City" type="text">
                      </td>
					</tr>
					<tr>
						<td align="left" bgcolor="#F2F2F2" valign="middle">Country / Pais<br> 
                        <input name="child1Country" id="child1Country" class="span3" placeholder="Country" type="text">
						</td>
						<td align="left" bgcolor="#F2F2F2" valign="middle">&nbsp;
						</td>
						<td align="left" bgcolor="#F2F2F2" valign="middle">
						</td>
					</tr>
					<tr>
				</tbody></table>
              <p><strong>Child 2 / Hijo 2</strong></p>
				<table class="table table-hover" border="0" cellpadding="4" cellspacing="1" width="100%">
					<tbody><tr>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">First Name - Nombre<br>
                      <input name="child2FirstName" id="child2FirstName" class="auto-hint span3" placeholder="Enter Name" type="text">
					  </td>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">Last Name - Apellido<br> <input name="child2LastName" id="child2LastName" class="auto-hint span3" placeholder="Enter Last Name" type="text">
					  </td>
					  <td align="left" bgcolor="#F2F2F2" valign="middle">Gender / Género<br>
							<input value="M" name="child2Gender" type="radio">Male / Hombre &nbsp; <input value="F" name="child2Gender" type="radio">Female / Mujer
					  </td>
					</tr>
					<tr>
						<td align="left" bgcolor="#DFEBF4" valign="middle">Date Of Birth / Fecha de Nacimiento<br>
                        <input name="child2DOB" id="child2DOB" class="datePicker auto-hint hasDatepicker" placeholder="dd-mm-yyyy" type="text">
						</td>
						<td align="left" bgcolor="#DFEBF4" valign="middle">State - Province / Departamento<br>
                        <input name="child2State" id="child2State" class="span3" placeholder="State" type="text">
						
                      </td>
						<td align="left" bgcolor="#DFEBF4" valign="middle">City / Ciudad<br>
                        <input name="child2City" id="child2City" class="span3" placeholder="City" type="text">
                      </td>
					</tr>
					<tr>
						<td align="left" bgcolor="#F2F2F2" valign="middle">Country / Pais<br> 
                        <input name="child2Country" id="child2Country" class="span3" placeholder="Country" type="text">
						</td>
						<td align="left" bgcolor="#F2F2F2" valign="middle">&nbsp;
						</td>
						<td align="left" bgcolor="#F2F2F2" valign="middle">
						</td>
					</tr>
					<tr>
				</tbody></table>  
			</fieldset>
      </td>
	  </tr>
	<tr>
	  <td align="left" valign="top">
      <fieldset>
				<legend>Medical Examination - Exámenes Médicos</legend>
                <h3>Have you taken a medical examination in the last Year? / Se ha echo exámenes médicos en el último año? </h3>
				<table class="table table-hover" border="0" cellpadding="4" cellspacing="1" width="100%">
					<tbody><tr>
						<td bgcolor="#F2F2F2">
							<input value="1" name="medicalExams" type="radio">
							YES / SI &nbsp; <input value="0" name="medicalExams" type="radio">NO
						</td>
						<td bgcolor="#F2F2F2">When   - Cuando <br>
							<input name="medicalExamDate" id="medicalExamDate" class="datePicker auto-hint span3 hasDatepicker" placeholder="dd-mm-yyyy" type="text">
						</td>
						<td bgcolor="#F2F2F2">Country / País <br>
						<input name="medicalExamCountry" id="medicalExamCountry" type="text">
                      </td>
					</tr>
				</tbody></table>
			</fieldset>
      </td>
	  </tr>
	<tr>
		<td align="left" valign="top">
			<fieldset>
				<legend>Notes / Notas</legend>
				<table border="0" cellpadding="4" cellspacing="1" width="100%">
					<tbody><tr>
						<td colspan="2" bgcolor="#DFEBF4">
							<label class="control-label" for="genComments">Use this area to add additional information / Información adicional</label>
							<textarea style="width: 852px; height: 66px;" name="genComments" id="genComments" class="span5" rows="4"></textarea></td>
					</tr>
					<tr>
						<td bgcolor="#DFEBF4">&nbsp;</td>
						<td bgcolor="#DFEBF4"><strong>Modified on</strong><br>
							<?php echo date('l jS \of F Y h:i:s A'); ?><input type="hidden"
							                                                  name="<?php echo date('l jS \of F Y h:i:s A'); ?>"
							                                                  id="modifiedOn"/></td>
					</tr>
				</tbody></table>
			</fieldset>
		</td>
	</tr>
	<tr>
		<td align="left" height="40" valign="top">
			<div class="span8" id="test">
				<!--   <input type="button" name="goBack" id="goBack" value="< Search Again" onclick="javascript:history.back(-1);" /> 
				<input name="submit" id="submit" class="btn btn-large btn-primary pull-right" style="cursor:pointer" value="Submit" type="submit">-->
				<a href="#myModal" role="button" class="btn btn-primary pull-right" data-toggle="modal">Save changes</a>
				<button type="reset" class="btn btn-warning pull-left">Reset</button>
			</div>
		</td>
	</tr>
	</tbody></table>
	<!-- Modal Confirmation Begin -->
	<!-- Modal -->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Submit Information / Enviar Información</h3>
		</div>
		<div class="modal-body">
			<h3>Wait!</h3>
			<p>Are you <strong>100% sure</strong> that the values you've entered are correct??</p>
			<h3>Un momento!</h3>
			<p>Está <strong>100% segur@</strong> que los datos ingresados son los correctos??</p>
		</div>
		<div class="modal-footer">
			<div class="form-actions">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Oops! No</button>
				<button type="submit" class="btn btn-primary pull-right" name="submit" id="submit" value="Submit" >Yes! Absolutely / Si! Completamente!</button>
			</div>
		</div>
	</div>
	<!-- Modal Confirmation End -->
	</form>

	<!-- SCRIPTS BEGIN -->
	<script src="../Admin/js/bootstrap.js" type="text/javascript"></script>
	<link href="../Admin/css/bootstrap.css" rel="stylesheet" type="text/css"/>

	<link href="../css/validateForm.css" rel="stylesheet" type="text/css"/>
	<!-- SCRIPTS END -->

	<script src="../Admin/js/selfie.js" type="text/javascript"></script>
	<script type="text/javascript">

		var email = '';

		// $('#emailAddress').on("change", function () {
		// 	email = $(this).val();
		// 	//alert ($(this).val()+'\n');
		// 	//href="quotes.php?eaddress='+email+'" target="_blank"
		// 	//$('<input type="submit" name="submitNquote" id="submitNquote" class="btn btn-success pull-left" style="cursor:pointer" value="Create Quote" />').appendTo($('#test'));
		// 	$('<a class="btn btn-large btn-success pull-left" onclick="saveAndOpen();">Create Quote</a>').appendTo($('#test'));

		// });

		function saveAndOpen() {
			var stC = $('#stCounsellor').val();
			document.getElementById('insertClient').submit.click();
			console.log(stC);
			submitform();
		}
		;
		//
		$('#goAhead').click(function () {
			alert('Clicked....\n');
			//
			var sendData = document.getElementsByTagName('input');
			$.ajax({
				type: "POST",
				url: "../Admin/classes/person.php",
				data: sendData,
				dataType: 'json',
				success: function (data) {
					//var receiptNo = data.receipt_number;
					alert('Something...\n');
					//window.location='createStudentReceipt.php?keyVal='+personID+'&receiptNumber='+receiptNo+'&courseEntry='+courseEntry;
					window.open('thanks.php?eaddress="$email"');
				}
			});
			//
			$('#myModal').modal('hide');
			//
			console.log();
		});

	</script>
	</body>
	</html>
<?php
// } else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>"; ?>