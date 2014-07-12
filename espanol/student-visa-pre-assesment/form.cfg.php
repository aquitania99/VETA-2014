<?php exit(0); ?> { 
"settings":
{
	"data_settings" : 
	{
		"save_database" : 
		{
			"database" : "auau2012_veta",
			"is_present" : true,
			"password" : "Proz@c01",
			"port" : 3306,
			"server" : "localhost",
			"tablename" : "visa-eligibility-assessment",
			"username" : "auau2012_admindb"
		},
		"save_file" : 
		{
			"filename" : "form-results.csv",
			"is_present" : true
		},
		"save_sqlite" : 
		{
			"database" : "student-visa-pre-assesment.dat",
			"is_present" : false,
			"tablename" : "student-visa-pre-assesment"
		}
	},
	"email_settings" : 
	{
		"auto_response_message" : 
		{
			"custom" : 
			{
				"body" : "<!DOCTYPE html>\n<html dir=\"ltr\" lang=\"en\">\n<head><title>You got mail!</title></head>\n<body style=\"background-color: #f9f9f9; padding-left: 11%; padding-top: 7%; padding-right: 2%; max-width: 700px; font-family: Helvetica, Arial;\">\n<style type=\"text/css\">\nbody {background-color: #f9f9f9;padding-left: 110px;padding-top: 70px; padding-right: 20px;max-width:700px;font-family: Helvetica, Arial;}\np{font-size: 12px; color: #666666;}\nh2{font-size: 28px !important;color: #666666 ! important;margin: 0px; border-bottom: 1px dotted #00A2FF; padding-bottom:3px;}\ntable{width:80%;}\ntd {font-size: 12px !important; line-height: 30px;color: #666666 !important; margin: 0px;border-bottom: 1px solid #e9e9e9;}\ntd:first-child {font-size: 13px !important; font-weight:bold; color: #333 !important; vertical-align:text-top; min-width:10%; padding-right:5px;}\na:link {color:#666666; text-decoration:underline;} a:visited {color:#666666; text-decoration:none;} a:hover {color:#00A2FF;}\nb{font-weight: bold;}\n</style>\n<h1 style=\"font-size: 40px !important;color: #ccc !important;margin:0px;\">Gracias por tu tiempo! </h1>\n\n<h2> El formulario con tu Pre-Evaluación fue recibido con éxito.</h2>\n<br/>\n<p>Esta es la información que hemos recibimos:</p>\n<div>\n[_form_results_]\n</div>\n</body>\n</html>",
				"is_present" : true,
				"subject" : "Pre-Evaluación - Visa de Estudio en Australia"
			},
			"from" : "admissions@australiaveta.com.co",
			"is_present" : true,
			"to" : "[EMAIL]"
		},
		"notification_message" : 
		{
			"bcc" : "aquitania99@gmail.com",
			"cc" : "yovanny79@hotmail.com",
			"custom" : 
			{
				"body" : "<!DOCTYPE html>\n<html dir=\"ltr\" lang=\"en\">\n<head><title>You got mail!</title></head>\n<body style=\"background-color: #f9f9f9; padding-left: 11%; padding-top: 7%; padding-right: 20px; max-width: 700px; font-family: Helvetica, Arial;\">\n<style type=\"text/css\">\nbody {background-color: #f9f9f9;padding-left: 11%; padding-top: 7%; padding-right: 2%;max-width:700px;font-family: Helvetica, Arial;}\np{font-size: 12px; color: #666666;}\nh1{font-size: 60px !important;color: #cccccc !important;margin:0px;}\nh2{font-size: 28px !important;color: #666666 ! important;margin: 0px; border-bottom: 1px dotted #00A2FF; padding-bottom:3px;}\ntable{width:80%;}\ntd {font-size: 12px !important; line-height: 30px;color: #666666 !important; margin: 0px;border-bottom: 1px solid #e9e9e9;}\ntd:first-child {font-size: 13px !important; font-weight:bold; color: #333 !important; vertical-align:text-top; min-width:10%; padding-right:5px;}\na:link {color:#666666; text-decoration:underline;} a:visited {color:#666666; text-decoration:none;} a:hover {color:#00A2FF;}\nb{font-weight: bold;}\n</style>\n<h1 style=\"font-size: 60px !important; color: #cccccc !important; margin: 0px;\">Hey there,</h1>\n<p style=\"font-size: 12px; color: #666666;\">\nSomeone filled out your form, and here's what they said:\n</p>\n<div>\n[_form_results_]\n<p style=\"font-size: 12px; color: #666666;\"> </p>\n</div>\n</body>\n</html>\n",
				"is_present" : true,
				"subject" : "Somebody filled out your form!"
			},
			"from" : "pre-assessment@australiaveta.com.au",
			"is_present" : true,
			"replyto" : "[EMAIL]",
			"to" : "yovannyuseche@australiaveta.com.au"
		}
	},
	"general_settings" : 
	{
		"colorboxautoenabled" : false,
		"colorboxautotime" : 3,
		"colorboxenabled" : false,
		"colorboxname" : "Smooth Grey",
		"formname" : "studentVisaPreAssessment",
		"is_appstore" : "0",
		"timezone" : "Australia/Sydney"
	},
	"mailchimp" : 
	{
		"apiKey" : "c41f2b6cc30335ea6c22fc4cc6722975-us5",
		"lists" : 
		[
			
			{
				"action" : 
				{
					"subscribe" : 
					{
						"condition" : "always"
					},
					"unsubscribe" : 
					{
						"condition" : "never"
					}
				},
				"is_present" : true,
				"listid" : "dee2284513",
				"merge_tags" : 
				[
					
					{
						"fb_name" : "name",
						"field_type" : "text",
						"isGrouping" : false,
						"name" : "Nombre",
						"req" : true,
						"tag" : "NAME"
					},
					
					{
						"fb_name" : "lastname",
						"field_type" : "text",
						"isGrouping" : false,
						"name" : "Apellido",
						"req" : true,
						"tag" : "LASTNAME"
					},
					
					{
						"fb_name" : "email",
						"field_type" : "email",
						"isGrouping" : false,
						"name" : "Email Address",
						"req" : true,
						"tag" : "EMAIL"
					},
					
					{
						"fb_name" : "phone",
						"field_type" : "text",
						"isGrouping" : false,
						"name" : "Teléfono",
						"req" : true,
						"tag" : "PHONE"
					},
					
					{
						"dateformat" : "",
						"fb_name" : "dob",
						"field_type" : "date",
						"isGrouping" : false,
						"name" : "Fecha de Nacimiento",
						"req" : true,
						"tag" : "DOB"
					},
					
					{
						"choices" : 
						[
							"Selecciona un Pais",
							"Afghanistan",
							"Albania",
							"Algeria",
							"American Samoa",
							"Andorra",
							"Angola",
							"Anguilla",
							"Antarctica",
							"Antigua And Barbuda",
							"Argentina",
							"Armenia",
							"Aruba",
							"Australia",
							"Austria",
							"Azerbaijan",
							"Bahamas",
							"Bahrain",
							"Bangladesh",
							"Barbados",
							"Belarus",
							"Belgium",
							"Belize",
							"Benin",
							"Bermuda",
							"Bhutan",
							"Bolivia",
							"Bosnia and Herzegovina",
							"Botswana",
							"Bouvet Island",
							"Brazil",
							"British Indian Ocean Territory",
							"Brunei Darussalam",
							"Bulgaria",
							"Burkina Faso",
							"Burundi",
							"Cambodia",
							"Cameroon",
							"Canada",
							"Cape Verde",
							"Cayman Islands",
							"Central African Republic",
							"Chad",
							"Chile",
							"China",
							"Christmas Island",
							"Cocos (Keeling) Islands",
							"Colombia",
							"Comoros",
							"Congo",
							"Cook Islands",
							"Costa Rica",
							"Cote D'Ivoire",
							"Croatia",
							"Cuba",
							"Curacao",
							"Cyprus",
							"Czech Republic",
							"Denmark",
							"Djibouti",
							"Dominica",
							"Dominican Republic",
							"East Timor",
							"Ecuador",
							"Egypt",
							"El Salvador",
							"Equatorial Guinea",
							"Eritrea",
							"Estonia",
							"Ethiopia",
							"Falkland Islands",
							"Faroe Islands",
							"Fiji",
							"Finland",
							"France",
							"French Guiana",
							"French Polynesia",
							"French Southern Territories",
							"Gabon",
							"Gambia",
							"Georgia",
							"Germany",
							"Ghana",
							"Gibraltar",
							"Greece",
							"Greenland",
							"Grenada",
							"Guadeloupe",
							"Guam",
							"Guatemala",
							"Guernsey",
							"Guinea",
							"Guinea-Bissau",
							"Guyana",
							"Haiti",
							"Heard and Mc Donald Islands",
							"Honduras",
							"Hong Kong",
							"Hungary",
							"Iceland",
							"India",
							"Indonesia",
							"Iran",
							"Iraq",
							"Ireland",
							"Israel",
							"Italy",
							"Jamaica",
							"Japan",
							"Jersey  (Channel Islands)",
							"Jordan",
							"Kazakhstan",
							"Kenya",
							"Kiribati",
							"Kuwait",
							"Kyrgyzstan",
							"Lao People's Democratic Republic",
							"Latvia",
							"Lebanon",
							"Lesotho",
							"Liberia",
							"Libya",
							"Liechtenstein",
							"Lithuania",
							"Luxembourg",
							"Macau",
							"Macedonia",
							"Madagascar",
							"Malawi",
							"Malaysia",
							"Maldives",
							"Mali",
							"Malta",
							"Marshall Islands",
							"Martinique",
							"Mauritania",
							"Mauritius",
							"Mayotte",
							"Mexico",
							"Micronesia, Federated States of",
							"Moldova, Republic of",
							"Monaco",
							"Mongolia",
							"Montenegro",
							"Montserrat",
							"Morocco",
							"Mozambique",
							"Myanmar",
							"Namibia",
							"Nauru",
							"Nepal",
							"Netherlands",
							"Netherlands Antilles",
							"New Caledonia",
							"New Zealand",
							"Nicaragua",
							"Niger",
							"Nigeria",
							"Niue",
							"Norfolk Island",
							"North Korea",
							"Northern Mariana Islands",
							"Norway",
							"Oman",
							"Pakistan",
							"Palau",
							"Palestine",
							"Panama",
							"Papua New Guinea",
							"Paraguay",
							"Peru",
							"Philippines",
							"Pitcairn",
							"Poland",
							"Portugal",
							"Puerto Rico",
							"Qatar",
							"Republic of Kosovo",
							"Reunion",
							"Romania",
							"Russia",
							"Rwanda",
							"Saint Kitts and Nevis",
							"Saint Lucia",
							"Saint Vincent and the Grenadines",
							"Samoa (Independent)",
							"San Marino",
							"Sao Tome and Principe",
							"Saudi Arabia",
							"Senegal",
							"Serbia",
							"Seychelles",
							"Sierra Leone",
							"Singapore",
							"Sint Maarten",
							"Slovakia",
							"Slovenia",
							"Solomon Islands",
							"Somalia",
							"South Africa",
							"South Georgia and the South Sandwich Islands",
							"South Korea",
							"South Sudan",
							"Spain",
							"Sri Lanka",
							"St. Helena",
							"St. Pierre and Miquelon",
							"Sudan",
							"Suriname",
							"Svalbard and Jan Mayen Islands",
							"Swaziland",
							"Sweden",
							"Switzerland",
							"Syria",
							"Taiwan",
							"Tajikistan",
							"Tanzania",
							"Thailand",
							"Togo",
							"Tokelau",
							"Tonga",
							"Trinidad and Tobago",
							"Tunisia",
							"Turkey",
							"Turkmenistan",
							"Turks & Caicos Islands",
							"Turks and Caicos Islands",
							"Tuvalu",
							"Uganda",
							"Ukraine",
							"United Arab Emirates",
							"United Kingdom",
							"United States of America",
							"Uruguay",
							"USA Minor Outlying Islands",
							"Uzbekistan",
							"Vanuatu",
							"Vatican City State (Holy See)",
							"Venezuela",
							"Vietnam",
							"Virgin Islands (British)",
							"Virgin Islands (U.S.)",
							"Wallis and Futuna Islands",
							"Western Sahara",
							"Yemen",
							"Zaire",
							"Zambia",
							"Zimbabwe"
						],
						"fb_name" : "passport",
						"field_type" : "dropdown",
						"isGrouping" : false,
						"name" : "Por favor selecciona el País de tu Pasaporte",
						"req" : true,
						"tag" : "PASSPORT"
					},
					
					{
						"choices" : 
						[
							"Selecciona una opción",
							"Colegio",
							"Técnico - Tecnológico",
							"Universidad",
							"Postgrado - Master"
						],
						"fb_name" : "current_st",
						"field_type" : "dropdown",
						"isGrouping" : false,
						"name" : "Cual es tu nivel de estudios actualmente?",
						"req" : true,
						"tag" : "CURRENT_ST"
					},
					
					{
						"choices" : [ "Si", "No" ],
						"fb_name" : "finalised",
						"field_type" : "radio",
						"isGrouping" : false,
						"name" : "Ya has finalizado tus estudios?",
						"req" : true,
						"tag" : "FINALISED"
					},
					
					{
						"fb_name" : "grade",
						"field_type" : "text",
						"isGrouping" : false,
						"name" : "Grado",
						"req" : false,
						"tag" : "GRADE"
					},
					
					{
						"fb_name" : "degree_nam",
						"field_type" : "text",
						"isGrouping" : false,
						"name" : "Que Carrera Estudias?",
						"req" : false,
						"tag" : "DEGREE_NAM"
					},
					
					{
						"fb_name" : "semester",
						"field_type" : "text",
						"isGrouping" : false,
						"name" : "Que Semestre Cursas?",
						"req" : false,
						"tag" : "SEMESTER"
					},
					
					{
						"fb_name" : "deg_title",
						"field_type" : "text",
						"isGrouping" : false,
						"name" : "Título obtenido?",
						"req" : false,
						"tag" : "DEG_TITLE"
					},
					
					{
						"choices" : [ "Si", "No" ],
						"fb_name" : "does_work",
						"field_type" : "radio",
						"isGrouping" : false,
						"name" : "Trabajas actualmente?",
						"req" : false,
						"tag" : "DOES_WORK"
					},
					
					{
						"fb_name" : "role",
						"field_type" : "text",
						"isGrouping" : false,
						"name" : "Cargo?",
						"req" : false,
						"tag" : "ROLE"
					},
					
					{
						"dateformat" : "",
						"fb_name" : "start_date",
						"field_type" : "date",
						"isGrouping" : false,
						"name" : "Fecha Inicio",
						"req" : false,
						"tag" : "START_DATE"
					},
					
					{
						"choices" : 
						[
							"Selecciona Estudio",
							"Curso de Ingles",
							"Primaria - Secundaria",
							"Vocacional - Tecnico",
							"Universidad - Pregrado",
							"Universidad - Postgrado",
							"Universidad - Master o Doctorado"
						],
						"fb_name" : "studytype",
						"field_type" : "dropdown",
						"isGrouping" : false,
						"name" : "Que estudios deseas tomar en Australia?",
						"req" : true,
						"tag" : "STUDYTYPE"
					},
					
					{
						"choices" : [ "Si", "No" ],
						"fb_name" : "studyfunds",
						"field_type" : "radio",
						"isGrouping" : false,
						"name" : "Tienes fondos suficientes para cubrir tus estudios",
						"req" : true,
						"tag" : "STUDYFUNDS"
					},
					
					{
						"choices" : 
						[
							"Selecciona una opcion",
							"De 4 a 6 meses",
							"6 a 12 meses",
							"Más 12 meses"
						],
						"fb_name" : "duration",
						"field_type" : "dropdown",
						"isGrouping" : false,
						"name" : "Por cuanto tiempo planeas estar en Australia?",
						"req" : true,
						"tag" : "DURATION"
					},
					
					{
						"choices" : [ "SI", "No" ],
						"fb_name" : "joinedby",
						"field_type" : "radio",
						"isGrouping" : false,
						"name" : "Te acompañará algun miembro de tu Familia?",
						"req" : true,
						"tag" : "JOINEDBY"
					},
					
					{
						"fb_name" : "guardians",
						"field_type" : "number",
						"isGrouping" : false,
						"name" : "Cuantas personas te acompañarán?",
						"req" : false,
						"tag" : "GUARDIANS"
					},
					
					{
						"dateformat" : "",
						"fb_name" : "flightapx",
						"field_type" : "date",
						"isGrouping" : false,
						"name" : "Fecha Estimada de Viaje",
						"req" : false,
						"tag" : "FLIGHTAPX"
					},
					
					{
						"choices" : 
						[
							"Selecciona una opción",
							"Página de Facebook de VETA",
							"Website de VETA",
							"Busqueda en Google",
							"Volante",
							"Por medio de un amigo"
						],
						"fb_name" : "whereheard",
						"field_type" : "dropdown",
						"isGrouping" : false,
						"name" : "Como supiste de nosotros?",
						"req" : false,
						"tag" : "WHEREHEARD"
					}
				],
				"name" : "VETA Visa de Estudiante Pre-Evaluacion",
				"subscribe" : 
				{
					"double_optin" : false,
					"email_address_field" : "EMAIL",
					"email_type_field" : "html",
					"replace_interests" : true,
					"send_welcome" : false,
					"update_existing" : true
				},
				"unsubscribe" : 
				{
					"delete_member" : false,
					"email_address_field" : "EMAIL",
					"send_goodbye" : true,
					"send_notify" : true
				}
			}
		]
	},
	"payment_settings" : 
	{
		"confirmpayment" : "<center>\n<style type=\"text/css\">\n#docContainer table {width:80%; margin-top: 5px; margin-bottom: 5px;}\n#docContainer td {text-align:right; min-width:25%; font-size: 12px !important; line-height: 20px;margin: 0px;border-bottom: 1px solid #e9e9e9; padding-right:5px;}\n#docContainer td:first-child {text-align:left; font-size: 13px !important; font-weight:bold; vertical-align:text-top; min-width:50%;}\n#docContainer th {font-size: 13px !important; font-weight:bold; vertical-align:text-top; text-align:right; padding-right:5px;}\n#docContainer th:first-child {text-align:left;}\n#docContainer tr:first-child {border-bottom-width:2px; border-bottom-style:solid;}\n#docContainer center {margin-bottom:15px;}\n#docContainer form input { margin:5px; }\n#docContainer #fb_confirm_inline { margin:5px; text-align:center;}\n#docContainer #fb_confirm_inline>center h2 { }\n#docContainer #fb_confirm_inline>center p { margin:5px; }\n#docContainer #fb_confirm_inline>center a { }\n#docContainer #fb_confirm_inline input { border:none; color:transparent; font-size:0px; background-color: transparent; background-repat: no-repeat; }\n#docContainer #fb_paypalwps { background: url('https://coffeecupimages.s3.amazonaws.com/paypal.gif');background-repeat:no-repeat; width:145px; height:42px; }\n#docContainer #fb_googlepay { background: url('https://coffeecupimages.s3.amazonaws.com/googlecheckout.gif'); background-repeat:no-repeat; width:168px; height:44px; }\n#docContainer #fb_authnet { background: url('https://coffeecupimages.s3.amazonaws.com/authnet.gif'); background-repeat:no-repeat; width:135px; height:38px; }\n#docContainer #fb_2checkout { background: url('https://coffeecupimages.s3.amazonaws.com/2co.png'); background-repeat:no-repeat; width:210px; height:44px; }\n#docContainer #fb_invoice { background: url('https://coffeecupimages.s3.amazonaws.com/btn_email.png'); background-repeat:no-repeat; width:102px; height:31px; }\n#docContainer #fb_invoice:hover { background: url('https://coffeecupimages.s3.amazonaws.com/btn_email_hov.png'); }\n#docContainer #fb_goback { color: inherit; }\n</style>\n[_cart_summary_]\n<h2>Almost done! </h2>\n<p>Your order will not be processed until you click the payment button below.</p>\n<a id=\"fb_goback\"href=\"?action=back\">Back to form</a></center>",
		"currencysymbol" : "$",
		"decimals" : 2,
		"fixedprice" : "000",
		"invoicelabel" : "",
		"is_present" : false,
		"paymenttype" : "redirect",
		"shopcurrency" : "USD",
		"usecustomsymbol" : false
	},
	"redirect_settings" : 
	{
		"confirmpage" : "<!DOCTYPE html>\n<html dir=\"ltr\" lang=\"en\">\n<head>\n<title>Success!</title>\n<meta charset=\"utf-8\">\n<style type=\"text/css\">\nbody {background: #f9f9f9;padding-left: 11%;padding-top: 7%; padding-right: 2%;max-width:700px;font-family: Helvetica, Arial;}\ntable{width:80%;}\np{font-size: 16px;font-weight: bold;color: #666;}\nh1{font-size: 60px !important;color: #ccc !important;margin:0px;}\nh2{font-size: 28px !important;color: #666 !important;margin: 0px; border-bottom: 1px dotted #00A2FF; padding-bottom:3px;}\nh3{font-size: 16px; color: #a1a1a1; border-top: 1px dotted #00A2FF; padding-top:1.7%; font-weight: bold;}\nh3 span{color: #ccc;}\ntd {font-size: 12px !important; line-height: 30px;  color: #666 !important; margin: 0px;border-bottom: 1px solid #e9e9e9;}\ntd:first-child {font-size: 13px !important; font-weight:bold; color: #333 !important; vertical-align:text-top; min-width:50%; padding-right:5px;}\na:link {color:#666; text-decoration:none;} a:visited {color:#666; text-decoration:none;} a:hover {color:#00A2FF;}\n</style>\n</head>\n<body>\n<h1>Thanks! </h1>\n<h2>The form is on its way.</h2>\n<p>Here&rsquo;s what was sent:</p>\n<div>[_form_results_]</div>\n<!-- link back to your Home Page -->\n<h3>Let&rsquo;s go <span> <a target=\"_blank\" href=\"http://www.coffeecup.com\">Back Home</a></span></h3>\n</body>\n</html>\n",
		"gotopage" : "http://www.australiaveta.com.au/espanol/pre-evaluacion-confirmacion.php",
		"inline" : "<center>\n<style type=\"text/css\">\n#docContainer table {margin-top: 30px; margin-bottom: 30px; width:80%;}\n#docContainer td {font-size: 12px !important; line-height: 30px;color: #666666 !important; margin: 0px;border-bottom: 1px solid #e9e9e9;}\n#docContainer td:first-child {font-size: 13px !important; font-weight:bold; color: #333 !important; vertical-align:text-top; min-width:50%; padding-right:5px;}\n</style>\n<br /><br />\n<h2>Gracias por tu tiempo! en breve uno de nuestros asesores<br />se pondrá en contacto contigo!</h2><br/>\n<p>El formulario con tu Pre-Evaluación fue enviado con éxito.<br />La información que hemos recibido ha sido la siguiente:</p>\n\n[_form_results_]\n<br /><br />\n</center>",
		"type" : "gotopage"
	},
	"uid" : "c00e7480e5ae0d4db66e727a1709bd9d",
	"validation_report" : "in_line"
},
"rules":{"name":{"label":"Nombre","fieldtype":"text","required":true},"lastname":{"label":"Apellido","fieldtype":"text","required":true},"email":{"email":true,"label":"Correo Electr&oacute;nico","fieldtype":"email","required":true},"phone":{"label":"Tel&eacute;fono","fieldtype":"text","required":true},"dob":{"date":true,"label":"Fecha de Nacimiento","fieldtype":"date","date_config":{"minDate":0,"maxDate":851990400,"dateFormat":"DATE_CUSTOM_1"},"required":true},"passport":{"label":"Selecciona el Pa&iacute;s de tu Pasaporte","fieldtype":"dropdown","required":true,"values":["","Afghanistan","Albania","Algeria","American Samoa","Andorra","Angola","Anguilla","Antarctica","Antigua And Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana","Bouvet Island","Brazil","British Indian Ocean Territory","Brunei Darussalam","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central African Republic","Chad","Chile","China","Christmas Island","Cocos (Keeling) Islands","Colombia","Comoros","Congo","Cook Islands","Costa Rica","Cote D'Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","East Timor","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Guiana","French Polynesia","French Southern Territories","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guadeloupe","Guam","Guatemala","Guernsey","Guinea","Guinea-Bissau","Guyana","Haiti","Heard and Mc Donald Islands","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Israel","Italy","Jamaica","Japan","Jersey  (Channel Islands)","Jordan","Kazakhstan","Kenya","Kiribati","Kuwait","Kyrgyzstan","Lao People's Democratic Republic","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Martinique","Mauritania","Mauritius","Mayotte","Mexico","Micronesia, Federated States of","Moldova, Republic of","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauru","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Niue","Norfolk Island","North Korea","Northern Mariana Islands","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Pitcairn","Poland","Portugal","Puerto Rico","Qatar","Republic of Kosovo","Reunion","Romania","Russia","Rwanda","Saint Kitts and Nevis","Saint Lucia","Saint Vincent and the Grenadines","Samoa (Independent)","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Sint Maarten","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Georgia and the South Sandwich Islands","South Korea","South Sudan","Spain","Sri Lanka","St. Helena","St. Pierre and Miquelon","Sudan","Suriname","Svalbard and Jan Mayen Islands","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Togo","Tokelau","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos Islands","Turks and Caicos Islands","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","USA Minor Outlying Islands","Uzbekistan","Vanuatu","Vatican City State (Holy See)","Venezuela","Vietnam","Virgin Islands (British)","Virgin Islands (U.S.)","Wallis and Futuna Islands","Western Sahara","Yemen","Zaire","Zambia","Zimbabwe"]},"current_st":{"label":"Cual es tu nivel de estudios actualmente?","fieldtype":"dropdown","required":true,"values":["","Colegio","Técnico - Tecnológico","Universidad","Postgrado - Master"]},"finalised":{"label":"Ya has finalizado tus estudios?","required":true,"fieldtype":"radiogroup","values":["Si","No"]},"grade":{"label":"Grado","fieldtype":"text"},"degree_nam":{"label":"Que Carrera Estudias?","fieldtype":"text","required":true},"semester":{"label":"Que Semestre Cursas?","fieldtype":"text","required":true},"deg_title":{"label":"T&iacute;tulo obtenido?","fieldtype":"text","required":true},"does_work":{"label":"Trabajas actualmente?","required":true,"fieldtype":"radiogroup","values":["Si","No"]},"role":{"label":"Cargo?","fieldtype":"text"},"start_date":{"date":true,"label":"Fecha Inicio","fieldtype":"date","date_config":{"minDate":null,"maxDate":null,"dateFormat":"DATE_CUSTOM_1"}},"studytype":{"label":"Que estudios deseas tomar en Australia?","fieldtype":"dropdown","required":true,"values":["","Curso de Ingles","Primaria - Secundaria","Vocacional - Tecnico","Universidad - Pregrado","Universidad - Postgrado","Universidad - Master o Doctorado"]},"studyfunds":{"required":true,"fieldtype":"radiogroup","label":"Tienes los fondos suficientes para tus gastos personales y extras durante tu estad&iacute;a en Australia?","values":["Si","No"]},"duration":{"label":"Por cuanto tiempo planeas estar en Australia?","fieldtype":"dropdown","required":true,"values":["","De 4 a 6 meses","6 a 12 meses","Más 12 meses"]},"joinedby":{"label":"Te acompañará algun miembro de tu Familia?","required":true,"fieldtype":"radiogroup","values":["SI","No"]},"guardians":{"decimals":0,"range":{"0":0,"1":999999999,"2":1},"label":"Cuantas personas te acompañarán?","fieldtype":"number"},"flightapx":{"date":true,"label":"Fecha Estimada de Viaje","fieldtype":"date","date_config":{"minDate":null,"maxDate":null,"dateFormat":"US_SLASHED"}},"whereheard":{"label":"Como supiste de nosotros?","fieldtype":"dropdown","required":true,"values":["","Página de Facebook de VETA","Website de VETA","Busqueda en Google","Volante","Por medio de un amigo"]}},
"payment_rules":{"passport":{},"current_st":{},"finalised":{},"does_work":{},"studytype":{},"studyfunds":{},"duration":{},"whereheard":{}},
"conditional_rules":{"studyfunds":{"element":{"name":"studytype","operator":"is_not","value":""}},"duration":{"element":{"name":"studytype","operator":"is_not","value":""}},"joinedby":{"element":{"name":"duration","operator":"is_not","value":""}},"grade":{"set":{"operator":"and","rule1":{"element":{"name":"current_st","operator":"is","value":"Colegio"}},"rule2":{"element":{"name":"finalised","operator":"is","value":"No"}}}},"degree_nam":{"set":{"operator":"and","rule1":{"set":{"operator":"and","rule1":{"element":{"name":"current_st","operator":"is_not","value":"Colegio"}},"rule2":{"element":{"name":"current_st","operator":"is_not","value":""}}}},"rule2":{"element":{"name":"finalised","operator":"is","value":"No"}}}},"semester":{"set":{"operator":"and","rule1":{"set":{"operator":"and","rule1":{"element":{"name":"current_st","operator":"is_not","value":"Colegio"}},"rule2":{"element":{"name":"current_st","operator":"is_not","value":""}}}},"rule2":{"element":{"name":"finalised","operator":"is","value":"No"}}}},"deg_title":{"set":{"operator":"and","rule1":{"set":{"operator":"and","rule1":{"element":{"name":"current_st","operator":"is_not","value":"Colegio"}},"rule2":{"element":{"name":"current_st","operator":"is_not","value":""}}}},"rule2":{"element":{"name":"finalised","operator":"is","value":"Si"}}}},"role":{"element":{"name":"does_work","operator":"is","value":"Si"}},"start_date":{"element":{"name":"does_work","operator":"is","value":"Si"}},"guardians":{"element":{"name":"joinedby","operator":"is","value":"SI"}}},
"application_version":"Web Form Builder (Windows), build 2.3.5217"
}