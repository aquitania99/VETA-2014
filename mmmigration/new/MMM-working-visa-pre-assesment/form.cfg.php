<?php exit(0); ?> { 
"settings":
{
	"data_settings" : 
	{
		"save_database" : 
		{
			"database" : "auau2012_mmmigration",
			"is_present" : true,
			"password" : "Proz@c01",
			"port" : 3306,
			"server" : "localhost",
			"tablename" : "working_visa_pre_assessment",
			"username" : "auau2012_admindb"
		},
		"save_file" : 
		{
			"filename" : "working-visa-form-results.csv",
			"is_present" : true
		},
		"save_sqlite" : 
		{
			"database" : "MMM-working-visa-pre-assesment.dat",
			"is_present" : false,
			"tablename" : "MMM-working-visa-pre-assesment"
		}
	},
	"email_settings" : 
	{
		"auto_response_message" : 
		{
			"custom" : 
			{
				"body" : "<!DOCTYPE html>\n<html dir=\"ltr\" lang=\"en\">\n<head><title>You got mail!</title></head>\n<body style=\"background-color: #f9f9f9; padding-left: 11%; padding-top: 7%; padding-right: 2%; max-width: 700px; font-family: Helvetica, Arial;\">\n<style type=\"text/css\">\nbody {background-color: #f9f9f9;padding-left: 110px;padding-top: 70px; padding-right: 20px;max-width:700px;font-family: Helvetica, Arial;}\np{font-size: 12px; color: #666666;}\nh2{font-size: 28px !important;color: #666666 ! important;margin: 0px; border-bottom: 1px dotted #00A2FF; padding-bottom:3px;}\ntable{width:80%;}\ntd {font-size: 12px !important; line-height: 30px;color: #666666 !important; margin: 0px;border-bottom: 1px solid #e9e9e9;}\ntd:first-child {font-size: 13px !important; font-weight:bold; color: #333 !important; vertical-align:text-top; min-width:10%; padding-right:5px;}\na:link {color:#666666; text-decoration:underline;} a:visited {color:#666666; text-decoration:none;} a:hover {color:#00A2FF;}\nb{font-weight: bold;}\n</style>\n<h2 style=\"font-size: 28px !important;color: #666666 ! important;margin: 0px; border-bottom: 1px dotted #00A2FF; padding-bottom:3px;\">Thanks for taking the time to fill out the form. <br/>Here's a copy of what you submitted:</h2>\n<div>\n[_form_results_]\n</div>\n</body>\n</html>\n",
				"is_present" : true,
				"subject" : "Thank you for your submission"
			},
			"from" : "",
			"is_present" : false,
			"to" : ""
		},
		"notification_message" : 
		{
			"bcc" : "info@sevenstudio.com.au",
			"cc" : "Melanie.Macfarlane@mmmigration.com.au",
			"custom" : 
			{
				"body" : "<!DOCTYPE html>\n<html dir=\"ltr\" lang=\"en\">\n<head><title>You got mail!</title></head>\n<body style=\"background-color: #f9f9f9; padding-left: 11%; padding-top: 7%; padding-right: 20px; max-width: 700px; font-family: Helvetica, Arial;\">\n<style type=\"text/css\">\nbody {background-color: #f9f9f9;padding-left: 11%; padding-top: 7%; padding-right: 2%;max-width:700px;font-family: Helvetica, Arial;}\np{font-size: 12px; color: #666666;}\nh1{font-size: 60px !important;color: #cccccc !important;margin:0px;}\nh2{font-size: 28px !important;color: #666666 ! important;margin: 0px; border-bottom: 1px dotted #00A2FF; padding-bottom:3px;}\ntable{width:80%;}\ntd {font-size: 12px !important; line-height: 30px;color: #666666 !important; margin: 0px;border-bottom: 1px solid #e9e9e9;}\ntd:first-child {font-size: 13px !important; font-weight:bold; color: #333 !important; vertical-align:text-top; min-width:10%; padding-right:5px;}\na:link {color:#666666; text-decoration:underline;} a:visited {color:#666666; text-decoration:none;} a:hover {color:#00A2FF;}\nb{font-weight: bold;}\n</style>\n<h1 style=\"font-size: 60px !important; color: #cccccc !important; margin: 0px;\">Hey there,</h1>\n<p style=\"font-size: 12px; color: #666666;\">\nSomeone filled out your form, and here's what they said:\n</p>\n<div>\n[_form_results_]\n<p style=\"font-size: 12px; color: #666666;\">\n<b style=\"font-weight: bold;\">Note: </b> Customizing your email message is as easy as 1-2-3! To get started, edit your form and go into the <b style=\"font-weight: bold;\">Settings &gt; Email Notices Tab</b> and then click on <b style=\"font-weight: bold;\">\"Configure email message\"</b>. Web Form Builder supports HTML and CSS so there is no limit to how snazzy you can design your message.\nFor more info <a href=\"http://coffeecup.com\" style=\"color: #666666; text-decoration: underline;\">go here</a>.\nHope you're enjoying the software!\n</p>\n</div>\n</body>\n</html>\n",
				"is_present" : true,
				"subject" : "Somebody filled out your form!"
			},
			"from" : "notifications@mmmigration.com.au",
			"is_present" : true,
			"replyto" : "",
			"to" : "admin@mmmigration.com.au"
		}
	},
	"general_settings" : 
	{
		"colorboxautoenabled" : false,
		"colorboxautotime" : 3,
		"colorboxenabled" : false,
		"colorboxname" : "Default",
		"formname" : "Working Visa Pre-Assessment",
		"is_appstore" : "0",
		"timezone" : "Australia/Sydney"
	},
	"mailchimp" : 
	{
		"apiKey" : "",
		"lists" : []
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
		"gotopage" : "http://www.mmmigration.com.au/work-pre-assessment-confirmation.php",
		"inline" : "<center>\n<style type=\"text/css\">\n#docContainer table {margin-top: 30px; margin-bottom: 30px; width:80%;}\n#docContainer td {font-size: 12px !important; line-height: 30px;color: #666666 !important; margin: 0px;border-bottom: 1px solid #e9e9e9;}\n#docContainer td:first-child {font-size: 13px !important; font-weight:bold; color: #333 !important; vertical-align:text-top; min-width:50%; padding-right:5px;}\n</style>\n[_form_results_]\n<h2>Thank you!</h2><br/>\n<p>Your form was successfully submitted. We received the information shown above.</p>\n</center>",
		"type" : "gotopage"
	},
	"uid" : "08d0cb4ee7c798969f1ad57240a44728",
	"validation_report" : "in_line"
},
"rules":{"name":{"label":"Name","fieldtype":"text","required":true},"lastname":{"label":"Last Name","fieldtype":"text","required":true},"email":{"email":true,"label":"Email Address","fieldtype":"email","required":true},"phone":{"label":"Phone Number","fieldtype":"text"},"dob":{"date":true,"label":"Date of Birth","fieldtype":"date","date_config":{"minDate":null,"maxDate":null,"dateFormat":"DATE_CUSTOM_1"},"required":true},"genre":{"label":"Gender","required":true,"fieldtype":"radiogroup","values":["Male","Female"]},"maritalstatus":{"label":"Marital Status","fieldtype":"text"},"nationality":{"label":"Nationality","fieldtype":"text"},"countryresidency":{"label":"Country of Residence","fieldtype":"text"},"doublenationality":{"label":"Do you have other nationality apart from the one already stated?","required":true,"fieldtype":"radiogroup","values":["Yes","No"]},"howmanymembers":{"label":"How many people?","fieldtype":"text"},"includefamily":{"label":"Would you like to include a family member to your application?","required":true,"fieldtype":"radiogroup","values":["Yes","No"]},"howmanyminors":{"label":"How many under age?","fieldtype":"text"},"howmanyadults":{"label":"How many adults?","fieldtype":"text"},"hasunistudies":{"label":"Do you have College / University Degrees?","required":true,"fieldtype":"radiogroup","values":["Yes","No"]},"namecourse":{"label":"Degree name / Profession","fieldtype":"text"},"unidurationinyears":{"decimals":0,"range":{"0":0,"1":999999999,"2":1},"label":"Studies duration in years","fieldtype":"number"},"eduinstitutionname":{"label":"College / University name","fieldtype":"text"},"degreeyear":{"decimals":0,"range":{"0":0,"1":999999999,"2":1},"label":"Degree date","fieldtype":"number"},"studieslanguage":{"label":"In what language was your study?","fieldtype":"text"},"masters":{"label":"Have you studied a Master or Postgraduate?","required":false,"fieldtype":"radiogroup","values":["Yes","No"]},"mastersname":{"label":"Master / Postgraduate name?","fieldtype":"text"},"mastersdurationinyears":{"decimals":0,"range":{"0":0,"1":999999999,"2":1},"label":"Master/Postgraduate duration in Years","fieldtype":"number"},"mastersuniname":{"label":"College / University name","fieldtype":"text"},"mastersdegreeyear":{"decimals":0,"range":{"0":0,"1":999999999,"2":1},"label":"Degree date","fieldtype":"number"},"masterslanguage":{"label":"In what language was your study?","fieldtype":"text"},"doeswork":{"label":"Are you currently working?","required":true,"fieldtype":"radiogroup","values":["Yes","No"]},"ocupationname":{"label":"Position / Role?","fieldtype":"text"},"countryworking":{"label":"Country where you are working","fieldtype":"text"},"workexperienceaftergrade":{"label":"Do you have any work experience after receiving your Degree?","required":true,"fieldtype":"radiogroup","values":["Yes","No"]},"yearsofexperience":{"decimals":0,"range":{"0":0,"1":999999999,"2":1},"label":"How many years of work experience do you have?","fieldtype":"number"},"ieltstest":{"label":"Have you presented the IELTS test in the last 2 years?","required":true,"fieldtype":"radiogroup","values":["Yes","No"]},"listening":{"decimals":1,"range":{"0":0,"1":999999999,"2":0.1},"label":"Listening","fieldtype":"number","required":true},"reading":{"decimals":1,"range":{"0":0,"1":999999999,"2":0.1},"label":"Reading","fieldtype":"number"},"writing":{"decimals":1,"range":{"0":0,"1":999999999,"2":0.1},"label":"Writing","fieldtype":"number","required":true},"speaking":{"decimals":1,"range":{"0":0,"1":999999999,"2":0.1},"label":"Speaking","fieldtype":"number","required":true},"overallscore":{"decimals":1,"range":{"0":0,"1":999999999,"2":0.1},"label":"Overall Score","fieldtype":"number","required":true},"australiastudies":{"required":true,"fieldtype":"radiogroup","values":["Yes","No"]},"isrelatedtoworkexp":{"label":"Is your qualification closely related to your work experience?","required":true,"fieldtype":"radiogroup","values":["Yes","No"]},"coursestartdate":{"date":true,"label":"Course starting date","fieldtype":"date","date_config":{"minDate":null,"maxDate":null,"dateFormat":"DATE_CUSTOM_1"},"required":true},"coursestartend":{"date":true,"label":"Course end date","fieldtype":"date","date_config":{"minDate":null,"maxDate":null,"dateFormat":"DATE_CUSTOM_1"},"required":true},"qualificationobtained":{"label":"Australian qualification awarded?","fieldtype":"text"},"whereyouheardfromus":{"label":"How did you hear about us?","fieldtype":"dropdown","required":true,"values":["Choose an option","MMM Facebook page","MMM Website","Google search","Flyer","A friend told you"]}},
"payment_rules":{"genre":{},"doublenationality":{},"includefamily":{},"hasunistudies":{},"masters":{},"doeswork":{},"workexperienceaftergrade":{},"ieltstest":{},"australiastudies":{},"isrelatedtoworkexp":{},"whereyouheardfromus":{}},
"conditional_rules":{"namecourse":{"element":{"name":"hasunistudies","operator":"is","value":"Yes"}},"unidurationinyears":{"element":{"name":"hasunistudies","operator":"is","value":"Yes"}},"eduinstitutionname":{"element":{"name":"hasunistudies","operator":"is","value":"Yes"}},"degreeyear":{"element":{"name":"hasunistudies","operator":"is","value":"Yes"}},"studieslanguage":{"element":{"name":"hasunistudies","operator":"is","value":"Yes"}},"mastersname":{"element":{"name":"masters","operator":"is","value":"Yes"}},"mastersdurationinyears":{"element":{"name":"masters","operator":"is","value":"Yes"}},"mastersuniname":{"element":{"name":"masters","operator":"is","value":"Yes"}},"mastersdegreeyear":{"element":{"name":"masters","operator":"is","value":"Yes"}},"masterslanguage":{"element":{"name":"masters","operator":"is","value":"Yes"}},"ocupationname":{"element":{"name":"doeswork","operator":"is","value":"Yes"}},"countryworking":{"element":{"name":"doeswork","operator":"is","value":"Yes"}},"yearsofexperience":{"element":{"name":"workexperienceaftergrade","operator":"is","value":"Yes"}},"listening":{"element":{"name":"ieltstest","operator":"is","value":"Yes"}},"writing":{"element":{"name":"ieltstest","operator":"is","value":"Yes"}},"speaking":{"element":{"name":"ieltstest","operator":"is","value":"Yes"}},"overallscore":{"element":{"name":"ieltstest","operator":"is","value":"Yes"}},"isrelatedtoworkexp":{"element":{"name":"australiastudies","operator":"is","value":"Yes"}},"coursestartdate":{"element":{"name":"australiastudies","operator":"is","value":"Yes"}},"coursestartend":{"element":{"name":"australiastudies","operator":"is","value":"Yes"}},"qualificationobtained":{"element":{"name":"australiastudies","operator":"is","value":"Yes"}},"reading":{"element":{"name":"ieltstest","operator":"is","value":"Yes"}},"howmanymembers":{"element":{"name":"includefamily","operator":"is","value":"Yes"}},"howmanyminors":{"element":{"name":"includefamily","operator":"is","value":"Yes"}},"howmanyadults":{"element":{"name":"includefamily","operator":"is","value":"Yes"}}},
"application_version":"Web Form Builder (Windows), build 2.3.5217"
}