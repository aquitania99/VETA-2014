<?
session_start();
if (session_is_registered('login')) {
//////////////////////////////////////////////////////
	require_once("../Connections/config.inc.php");
	require_once("../Connections/mysql.class.php");
/// Create New DB Object
	$db = new MySQL();
/// Open Connection
	$db->open();
//////////////////////////////////
	$email = 'sergio@sevenstudio.com.au';
	$name = 'sergio';
	$lastName = 'medina';
//////////////////////////////////
	$queryUpdate = $db->dbQuery("SELECT * FROM persons where emailAddress = '$email' AND firstName = '$name' AND lastName = '$lastName'");
	$rowUpdate = $db->fetch_array($queryUpdate);
	$name = $rowUpdate['firstName'];
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Admin Section :: Australia VETA</title>
		<link href="newsletter/styles.css" rel="stylesheet" type="text/css"/>
		<!-- Baby Steps Stuff Start -->
		<style type="text/css">
			div .updateForm {
				border: 1px solid black;
				background: #efefef;
				width: 550px;
				margin: 3px;
				padding: 3px;
			}

			.hidden {
				display: none;
			}
		</style>

		<script type="text/javascript" src="../js/jquery.js"></script>

		<script type="text/javascript">
			//This is the basic example of how to set up some Divs to become babySteps.
			function step1_validator() {
				var firstName = $('#first_name').val();
				var lastName = $('#last_name').val();
				var email = $('#email').val();
				$('#name_error').remove();

				if (!firstName || !lastName || !email) {
					$('#step1').prepend("<span id='name_error' style='color:red'>You <b>MUST</b> enter your First Name, Last Name and Email !!</span>");
					return false;
				} else {
					return true;
				}
			}

			$(function () {
				//Taking reference to all of my step jQuery Objects (optional)				
				var step1 = $('#step1');
				var step2 = $('#step2');
				var step3 = $('#step3');
				var step4 = $('#step4');

				//Setting up my buttons and how I want my markup to look
				$.fn.bindStep.defaults.prevBtn = "/stuff/examples/babysteps/arrow_left_48.png";
				$.fn.bindStep.defaults.nextBtn = "/stuff/examples/babysteps/arrow_right_48.png";
				$.fn.bindStep.defaults.generateMarkup = function (id1, id2, img) {
					return([
						'<img ',
						'src="', img, '" ',
						'id="', id1 , '" ',
						'/>',
					].join(''));
				}

				//The first step is validated
				step1.bindStep(step2, {
					nextValidator: step1_validator
				});

				//here it is taking a jQuery object as the next step
				step2.bindStep(step3);

				// The bind step method will take a jQuery Object or a Selector
				// here it is using an ID based selector
				step3.bindStep('#step4');

				//There is a start over button in the page that will take you back to the first
				// step
				$('#start_over').click(function () {
					$.goToStep('#step1', function (currStep, nextStep) {
						currStep.slideUp('slow', function () {
							nextStep.slideDown('slow');
						});
					});
				});
			});
		</script>

		<script type="text/javascript">
			//This just displays the whole form at the end and stops it from submitting to our servers,
			//this is just a function to help the demo ;)
			$(function () {
				$('#babyStepsForm').submit(function () {
					destepify();
					alert('Yay you did it!  This is what your full-length form would look like!');
					return false;
				});
			});

			//this is just a function to help the demo ;)
			function destepify() {
				$('div').show();
				$('#destepify_btn').hide();
				$('#stepify_btn').show();
			}

			//this is just a function to help the demo ;)			
			function stepify() {
				$('div').hide();
				$("#step1").show();
				$('#stepify_btn').hide();
				$('#destepify_btn').show();
			}
		</script>
		<!-- Baby Steps Stuff End -->
	</head>

	<body>
	<br/>
	<br/>
	<table width="600" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
		<tr>
			<td>
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td width="211" rowspan="2"><img src="newsletter/images/logomodulo.gif" width="194" height="106"
						                                 align="absmiddle"/></td>
						<td align="right" valign="middle"><a href="logout.php"><img src="newsletter/images/logoutp.png"
						                                                            width="104" height="44" border="0"/></a>
						</td>
					</tr>
					<tr>
						<td align="center" valign="middle">
							<h2>UPDATE Your Information</h2>

							<p style="margin-top:-1.1em;margin-bottom:1.1em;">Help us know more about you! That will
								help us give you a more accurate and customised service!</p>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td valign="middle">
				<fieldset>
					<legend>Update Your Information <?= $name; ?></legend>
					<!-- /// /// -->
					<form style="margin-top:1em;" id="babyStepsForm" name="form1" method="post" action="">
						<div style="display: block;" id="step1">
							<!-- <span id="name_error" style="color: red;">You must enter your full name!</span> -->
							<h3>Step 1</h3>

							<div style=" margin-bottom:1em; height:2em; vertical-align:middle;">
								<label style="margin-right:2em;">First Name:</label> <input style="width:200px;"
								                                                            id="first_name" type="text"
								                                                            value="<?= $rowUpdate['firstName']; ?>"/>
							</div>
							Last Name: <input id="last_name" type="text" value="<?= $rowUpdate['lastName']; ?>"/>
							<br/>
							Email Address: <input id="email" type="text" value="<?= $rowUpdate['emailAddress']; ?>"/>
							<br/>
							Fecha de Nacimiento
							<br/>
							DD/MM/YYYY: <input type="text" name="birthDate" id="birthDate"
							                   value="<?= $rowUpdate['DOB']; ?>"/>
							<br/>
							Nacionalidad: <input type="text" name="nationality" id="nationality"
							                     value="<?= $rowUpdate['nacionality']; ?>"/>

							<div>
								<img src="../js/arrow_right_48.png" id="step1_to_step2_btn_container"
								     style="cursor:pointer;"/>
							</div>
						</div>


						<div style="display: none;" id="step2" class="hidden jQueryBabyStep">
							<h3>Step 2</h3>
							Profesion: <input type="text" name="career" id="career"/>
							<br/>
							Fecha de Grado: (DD/MM/YYYY) <input type="text" name="degreeDate" id="degreeDate"/>
							<br/>
							Experiencia Laboral despues del grado: <input type="text" name="textfield9"
							                                              id="textfield9"/>
							<img src="../js/arrow_left_48.png" id="step2_to_step1_btn_container"><img
								src="../js/arrow_right_48.png" id="step2_to_step3_btn_container"></div>
						<div style="display: none;" id="step3" class="hidden jQueryBabyStep">
							<h3>Step 3</h3>
							Tipo de Visa: <select name="visaType">
								<option selected="selected">red</option>
								<option>blue</option>
								<option>black</option>
								<option>some crappy color</option>
							</select>
							<br/>
							Fecha de Vencimiento: (DD/MM/YYYY) <input type="text" name="visaExpDate" id="visaExpDate"/>
							<br/>
							Numero de Pasaporte: <input type="text" name="passportNumber" id="passportNumber"/>
							<br/>
							Fecha de Vencimiento: (DD/MM/YYYY) <input type="text" name="passExpDate" id="passExpDate"/>
							<br/>
							País de residencia: <input type="text" name="residencyCountry" id="residencyCountry"/>
							<br/>
							País de Origen: <input type="text" name="originCountry" id="originCountry"/>
							<br/>
							Teléfono Fijo: <input type="text" name="homePhone" id="homePhone"/>
							<br/>
							Celular: <input type="text" name="mobilePhone" id="mobilePhone"/>
							<br/>
							Usuario Skype: <input type="text" name="skype" id="skype"/>
							<br/>
							Usuario MSN: <input type="text" name="msn" id="msn"/>
							<img src="../js/arrow_left_48.png" id="step3_to_step2_btn_container"><img
								src="../js/arrow_right_48.png" id="step3_to_step4_btn_container"></div>
						<div style="display: none;" id="step4" class="hidden jQueryBabyStep">
							<h3>Step 4</h3>
							Ha presentado pruebas de Inglés?: <label><input type="radio" name="engTest" value="1"
							                                                id="ielts-toefl_0"/>Sí</label>
							<br/>
							<label><input type="radio" name="engTest" value="0" id="ielts-toefl_1"/>No</label>
							<br/>
							Cual?
							<br/>
							IELTS<label><input name="engTest" type="checkbox" id="engTest" value="ielts"/>
							</label>
							<br/>
							TOEFL<label><input name="engTest" type="checkbox" id="engTest" value="toefl"/></label>
							<br/>
							Fecha en que se Presentó: (DD/MM/YYYY)<input type="text" name="engTestDate"
							                                             id="engTestDate"/>
							<br/>
							Puntaje Overall: <input type="text" name="engTestOverallScore" id="engTestOverallScore"/>
							<br/>
							Puntaje Lectura: <input type="text" name="engTestRead" id="engTestRead"/>
							<br/>
							Puntaje Escritura: <input type="text" name="engTestWrite" id="engTestWrite"/>
							<br/>
							Puntaje Escucha: <input type="text" name="engTestListen" id="engTestListen"/>
							<br/>
							Puntaje Habla: <input type="text" name="engTestSpeak" id="engTestSpeak"/>
							<br/>
							<button type="submit">Submit</button>
							or <a href="#" id="start_over">Start Over</a>
							<br>
							<img src="../js/arrow_left_48.png" id="step4_to_step3_btn_container"></div>
					</form>
					<script type="text/javascript" src="../js/babysteps.js"></script>
				</fieldset>
				<!-- /// /// -->

			</td>
		</tr>
		<tr>
			<td align="center" valign="middle">
				<a href="mainAdmin.php" style="float:right;"><img src="newsletter/images/back.png" width="126"
				                                                  height="44" border="0" align="absmiddle"></a>
			</td>
		</tr>
		<tr>
			<td align="center" valign="middle">&nbsp;</td>
		</tr>
	</table>
	</body>
	</html>
<?php
} else echo "<h1>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!</h1><br />";
?>