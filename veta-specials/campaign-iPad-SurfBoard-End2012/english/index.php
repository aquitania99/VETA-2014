<?php
$ref = $_SERVER['HTTP_REFERER'];
$ref = substr($ref, 7);
//echo "Referral?? ".$ref."<br />";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Special Raffle 2012 | iPad - Surf Board</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<link href="../../../css/ui-lightness/jquery-ui-1.8.10.custom.css" rel="stylesheet" type="text/css" />
<link href="css/specials-style.css" rel="stylesheet" type="text/css" />
<script src="js/livevalidation_standalone.js" type="text/javascript"></script>
<link href="css/validateForm.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.sendButton {
	background-image:url(images/button.jpg);
	background-repeat:no-repeat;
	width:127px;
	height:60px;
	cursor:pointer;
}
.sendButton:hover {
	background-position: -127px 0px;
}
body,td,th {
	font-size: 12px;
}
</style>
<!-- GOOGLE ANALYTICS SCRIPT START -->   
<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-26926972-1']);
_gaq.push(['_setDomainName', 'australiaveta.com.au']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>
<!-- GOOGLE ANALYTICS SCRIPT END -->
</head>

<body>
<!-- Start Alexa Certify Javascript -->
<script type="text/javascript" src="https://d31qbv1cthcecs.cloudfront.net/atrk.js"></script><script type="text/javascript">_atrk_opts = { atrk_acct: "j0vQf1agwt00w/", domain:"australiaveta.com.au"}; atrk ();</script><noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=j0vQf1agwt00w/" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->
<form id="form1" name="form1" method="post" action="inc/queryCheckPersons.php">
  <table width="980" border="0" align="center" cellpadding="0" cellspacing="0" class="borde">
    <tr>
      <td valign="top"><table width="980" cellspacing="10">
        <tr>
          <td width="465" align="center" valign="top" bgcolor="#0072B1"><img src="images/IPAD-SURF-home.jpg" width="465" height="680" /><br>
            <br>
            <br>            <a href="http://www.australiaveta.com.au" target="_blank" class="linkweb">www.australiaveta.com.au</a><br>            <br></td>
          <td width="479" valign="top"><table width="100%" border="0" cellpadding="5" cellspacing="0">
            <tr>
              <td height="100" valign="top" bgcolor="#CC0001"><h2>Enter your details and we will be in contact with you soon to talk about your options.<br />
                  <br />
                </h2>
<h2>This will also give you access to our job and accomodation list in Australia<br>
</h2></td>
            </tr>
            <tr>
              <td align="center" valign="top"><table width="100%">
                <tr>
                  <td colspan="2" align="right" valign="middle" class="rojo">* Required field</td>
                  </tr>
                <tr>
                  <td width="38%" align="left" valign="middle">Name<span class="rojo">*</span></td>
                  <td width="62%" align="left" valign="middle"><input name="name" type="text" id="name" size="45" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Last Name<span class="rojo">*</span></td>
                  <td align="left" valign="middle"><input name="lastName" type="text" id="lastName" size="45" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Email Address<span class="rojo">*</span></td>
                  <td align="left" valign="middle"><input name="email" type="text" id="email" size="45" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Nationality<span class="rojo">*</span></td>
                  <td align="left" valign="middle">
					<select id="nationality" name="nationality">
						<option selected="selected">Please select one</option>
						<option value="Afghanistan">Afghanistan</option>
						<option value="Åland Islands">Åland Islands</option>
						<option value="Albania">Albania</option>
						<option value="Algeria">Algeria</option>
						<option value="American Samoa">American Samoa</option>
						<option value="Andorra">Andorra</option>
						<option value="Angola">Angola</option>
						<option value="Anguilla">Anguilla</option>
						<option value="Antarctica">Antarctica</option>
						<option value="Antigua and Barbuda">Antigua and Barbuda</option>
						<option value="Argentina">Argentina</option>
						<option value="Armenia">Armenia</option>
						<option value="Aruba">Aruba</option>
						<option value="Australia">Australia</option>
						<option value="Austria">Austria</option>
						<option value="Azerbaijan">Azerbaijan</option>
						<option value="Bahamas">Bahamas</option>
						<option value="Bahrain">Bahrain</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="Barbados">Barbados</option>
						<option value="Belarus">Belarus</option>
						<option value="Belgium">Belgium</option>
						<option value="Belize">Belize</option>
						<option value="Benin">Benin</option>
						<option value="Bermuda">Bermuda</option>
						<option value="Bhutan">Bhutan</option>
						<option value="Bolivia">Bolivia</option>
						<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
						<option value="Botswana">Botswana</option>
						<option value="Bouvet Island">Bouvet Island</option>
						<option value="Brazil">Brazil</option>
						<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
						<option value="Brunei Darussalam">Brunei Darussalam</option>
						<option value="Bulgaria">Bulgaria</option>
						<option value="Burkina Faso">Burkina Faso</option>
						<option value="Burundi">Burundi</option>
						<option value="Cambodia">Cambodia</option>
						<option value="Cameroon">Cameroon</option>
						<option value="Canada">Canada</option>
						<option value="Cape Verde">Cape Verde</option>
						<option value="Cayman Islands">Cayman Islands</option>
						<option value="Central African Republic">Central African Republic</option>
						<option value="Chad">Chad</option>
						<option value="Chile">Chile</option>
						<option value="China">China</option>
						<option value="Christmas Island">Christmas Island</option>
						<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
						<option value="Colombia">Colombia</option>
						<option value="Comoros">Comoros</option>
						<option value="Congo">Congo</option>
						<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
						<option value="Cook Islands">Cook Islands</option>
						<option value="Costa Rica">Costa Rica</option>
						<option value="Cote D'ivoire">Cote D'ivoire</option>
						<option value="Croatia">Croatia</option>
						<option value="Cuba">Cuba</option>
						<option value="Cyprus">Cyprus</option>
						<option value="Czech Republic">Czech Republic</option>
						<option value="Denmark">Denmark</option>
						<option value="Djibouti">Djibouti</option>
						<option value="Dominica">Dominica</option>
						<option value="Dominican Republic">Dominican Republic</option>
						<option value="Ecuador">Ecuador</option>
						<option value="Egypt">Egypt</option>
						<option value="El Salvador">El Salvador</option>
						<option value="Equatorial Guinea">Equatorial Guinea</option>
						<option value="Eritrea">Eritrea</option>
						<option value="Estonia">Estonia</option>
						<option value="Ethiopia">Ethiopia</option>
						<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
						<option value="Faroe Islands">Faroe Islands</option>
						<option value="Fiji">Fiji</option>
						<option value="Finland">Finland</option>
						<option value="France">France</option>
						<option value="French Guiana">French Guiana</option>
						<option value="French Polynesia">French Polynesia</option>
						<option value="French Southern Territories">French Southern Territories</option>
						<option value="Gabon">Gabon</option>
						<option value="Gambia">Gambia</option>
						<option value="Georgia">Georgia</option>
						<option value="Germany">Germany</option>
						<option value="Ghana">Ghana</option>
						<option value="Gibraltar">Gibraltar</option>
						<option value="Greece">Greece</option>
						<option value="Greenland">Greenland</option>
						<option value="Grenada">Grenada</option>
						<option value="Guadeloupe">Guadeloupe</option>
						<option value="Guam">Guam</option>
						<option value="Guatemala">Guatemala</option>
						<option value="Guernsey">Guernsey</option>
						<option value="Guinea">Guinea</option>
						<option value="Guinea-bissau">Guinea-bissau</option>
						<option value="Guyana">Guyana</option>
						<option value="Haiti">Haiti</option>
						<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
						<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
						<option value="Honduras">Honduras</option>
						<option value="Hong Kong">Hong Kong</option>
						<option value="Hungary">Hungary</option>
						<option value="Iceland">Iceland</option>
						<option value="India">India</option>
						<option value="Indonesia">Indonesia</option>
						<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
						<option value="Iraq">Iraq</option>
						<option value="Ireland">Ireland</option>
						<option value="Isle of Man">Isle of Man</option>
						<option value="Israel">Israel</option>
						<option value="Italy">Italy</option>
						<option value="Jamaica">Jamaica</option>
						<option value="Japan">Japan</option>
						<option value="Jersey">Jersey</option>
						<option value="Jordan">Jordan</option>
						<option value="Kazakhstan">Kazakhstan</option>
						<option value="Kenya">Kenya</option>
						<option value="Kiribati">Kiribati</option>
						<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
						<option value="Korea, Republic of">Korea, Republic of</option>
						<option value="Kuwait">Kuwait</option>
						<option value="Kyrgyzstan">Kyrgyzstan</option>
						<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
						<option value="Latvia">Latvia</option>
						<option value="Lebanon">Lebanon</option>
						<option value="Lesotho">Lesotho</option>
						<option value="Liberia">Liberia</option>
						<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
						<option value="Liechtenstein">Liechtenstein</option>
						<option value="Lithuania">Lithuania</option>
						<option value="Luxembourg">Luxembourg</option>
						<option value="Macao">Macao</option>
						<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
						<option value="Madagascar">Madagascar</option>
						<option value="Malawi">Malawi</option>
						<option value="Malaysia">Malaysia</option>
						<option value="Maldives">Maldives</option>
						<option value="Mali">Mali</option>
						<option value="Malta">Malta</option>
						<option value="Marshall Islands">Marshall Islands</option>
						<option value="Martinique">Martinique</option>
						<option value="Mauritania">Mauritania</option>
						<option value="Mauritius">Mauritius</option>
						<option value="Mayotte">Mayotte</option>
						<option value="Mexico">Mexico</option>
						<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
						<option value="Moldova, Republic of">Moldova, Republic of</option>
						<option value="Monaco">Monaco</option>
						<option value="Mongolia">Mongolia</option>
						<option value="Montenegro">Montenegro</option>
						<option value="Montserrat">Montserrat</option>
						<option value="Morocco">Morocco</option>
						<option value="Mozambique">Mozambique</option>
						<option value="Myanmar">Myanmar</option>
						<option value="Namibia">Namibia</option>
						<option value="Nauru">Nauru</option>
						<option value="Nepal">Nepal</option>
						<option value="Netherlands">Netherlands</option>
						<option value="Netherlands Antilles">Netherlands Antilles</option>
						<option value="New Caledonia">New Caledonia</option>
						<option value="New Zealand">New Zealand</option>
						<option value="Nicaragua">Nicaragua</option>
						<option value="Niger">Niger</option>
						<option value="Nigeria">Nigeria</option>
						<option value="Niue">Niue</option>
						<option value="Norfolk Island">Norfolk Island</option>
						<option value="Northern Mariana Islands">Northern Mariana Islands</option>
						<option value="Norway">Norway</option>
						<option value="Oman">Oman</option>
						<option value="Pakistan">Pakistan</option>
						<option value="Palau">Palau</option>
						<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
						<option value="Panama">Panama</option>
						<option value="Papua New Guinea">Papua New Guinea</option>
						<option value="Paraguay">Paraguay</option>
						<option value="Peru">Peru</option>
						<option value="Philippines">Philippines</option>
						<option value="Pitcairn">Pitcairn</option>
						<option value="Poland">Poland</option>
						<option value="Portugal">Portugal</option>
						<option value="Puerto Rico">Puerto Rico</option>
						<option value="Qatar">Qatar</option>
						<option value="Reunion">Reunion</option>
						<option value="Romania">Romania</option>
						<option value="Russian Federation">Russian Federation</option>
						<option value="Rwanda">Rwanda</option>
						<option value="Saint Helena">Saint Helena</option>
						<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
						<option value="Saint Lucia">Saint Lucia</option>
						<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
						<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
						<option value="Samoa">Samoa</option>
						<option value="San Marino">San Marino</option>
						<option value="Sao Tome and Principe">Sao Tome and Principe</option>
						<option value="Saudi Arabia">Saudi Arabia</option>
						<option value="Senegal">Senegal</option>
						<option value="Serbia">Serbia</option>
						<option value="Seychelles">Seychelles</option>
						<option value="Sierra Leone">Sierra Leone</option>
						<option value="Singapore">Singapore</option>
						<option value="Slovakia">Slovakia</option>
						<option value="Slovenia">Slovenia</option>
						<option value="Solomon Islands">Solomon Islands</option>
						<option value="Somalia">Somalia</option>
						<option value="South Africa">South Africa</option>
						<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
						<option value="Spain">Spain</option>
						<option value="Sri Lanka">Sri Lanka</option>
						<option value="Sudan">Sudan</option>
						<option value="Suriname">Suriname</option>
						<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
						<option value="Swaziland">Swaziland</option>
						<option value="Sweden">Sweden</option>
						<option value="Switzerland">Switzerland</option>
						<option value="Syrian Arab Republic">Syrian Arab Republic</option>
						<option value="Taiwan, Province of China">Taiwan, Province of China</option>
						<option value="Tajikistan">Tajikistan</option>
						<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
						<option value="Thailand">Thailand</option>
						<option value="Timor-leste">Timor-leste</option>
						<option value="Togo">Togo</option>
						<option value="Tokelau">Tokelau</option>
						<option value="Tonga">Tonga</option>
						<option value="Trinidad and Tobago">Trinidad and Tobago</option>
						<option value="Tunisia">Tunisia</option>
						<option value="Turkey">Turkey</option>
						<option value="Turkmenistan">Turkmenistan</option>
						<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
						<option value="Tuvalu">Tuvalu</option>
						<option value="Uganda">Uganda</option>
						<option value="Ukraine">Ukraine</option>
						<option value="United Arab Emirates">United Arab Emirates</option>
						<option value="United Kingdom">United Kingdom</option>
						<option value="United States">United States</option>
						<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
						<option value="Uruguay">Uruguay</option>
						<option value="Uzbekistan">Uzbekistan</option>
						<option value="Vanuatu">Vanuatu</option>
						<option value="Venezuela">Venezuela</option>
						<option value="Viet Nam">Viet Nam</option>
						<option value="Virgin Islands, British">Virgin Islands, British</option>
						<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
						<option value="Wallis and Futuna">Wallis and Futuna</option>
						<option value="Western Sahara">Western Sahara</option>
						<option value="Yemen">Yemen</option>
						<option value="Zambia">Zambia</option>
						<option value="Zimbabwe">Zimbabwe</option>
						</select>
				  </td>
                </tr>
				
				<tr>
                  <td align="left" valign="middle">Do you have a passport?<span class="rojo">*</span></td>
                  <td align="left" valign="middle">
					<select name="passport" id="passport">
						<option selected="selected">Please select one</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				  </td>
                </tr>
                
                <tr>
                  <td align="left" valign="middle">Passport Expiry Date<br /></td>
                  <td align="left" valign="middle">
					<input name="passportExpDate" type="text" id="passportExpDate" class="datePicker" size="45" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Date Of Birth<span class="rojo">*</span></td>
                  <td align="left" valign="middle"><input name="dob" type="text" id="dob" class="datePicker" size="45" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">User Skype </td>
                  <td align="left" valign="middle"><input name="skype" type="text" id="skype" size="45" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">User Msn</td>
                  <td align="left" valign="middle"><input name="msn" type="text" id="msn" size="45" /></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Phone</td>
                  <td align="left" valign="middle"><input name="phone" type="text" id="phone" size="45" /></td>
                </tr>
                
				<tr>
                  <td align="left" valign="middle">Do you have a occupation?<span class="rojo">*</span></td>
                  <td align="left" valign="middle">
					<select name="profession" id="profession">
						<option selected="selected">Please select one</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				  </td>
                </tr>
				
                <tr>
                  <td align="left" valign="middle">Occupationn name</td>
                  <td align="left" valign="middle"><input name="profName" type="text" id="profName" size="45" /></td>
                </tr>
                
				<tr>
                  <td align="left" valign="middle">Do you have work experience?<span class="rojo">*</span></td>
                  <td align="left" valign="middle">
					<select name="workExperience" id="workExperience">
						<option selected="selected">Please select one</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				  </td>
                </tr>
				
                <tr>
                  <td align="left" valign="middle">How many years?</td>
                  <td align="left" valign="middle"><input name="workExpYears" type="text" id="workExpYears" size="45" /></td>
                </tr>
				<tr>
                  <td align="left" valign="middle">Have you ever done an English Test?<span class="rojo">*</span></td>
                  <td align="left" valign="middle">
					<select name="engTest" id="engTest">
						<option selected="selected">Please select one</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
				  </td>
                </tr>
				<script type="type/javscript">
				
				</script>
                
                <tr>
                  <td align="left" valign="middle">Which one have you done before?</td>
                  <td align="left" valign="middle">
					<select name="engTestExam" id="engTestExam">
						<option selected="selected">Please select one</option>
						<option value="IELTS">IELTS</option>
						<option value="TOEFL">TOEFL</option>
					</select>
				  </td>
                </tr>
                <tr>
                  <td colspan="2" align="left" valign="middle">&nbsp;</td>
                </tr>
				<tr>
                  <td align="left" valign="middle">How did you hear about us?<span class="rojo">*</span></td>
                  <td align="left" valign="middle">
					<select name="whereKnewAboutUs" id="whereKnewAboutUs">
						<option selected="selected">Please select one</option>
						<option value="Facebook">VETA's Facebook Page</option>
						<option value="australiaveta.com.au">VETA's Website</option>
						<option value="Google Search">Google Search</option>
						<option value="Flyer">Flyer</option>
						<option value="Word of Mouth">Word of Mouth</option>
					</select>
				  </td>
                </tr>
				<tr>
                  <td colspan="2" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2" align="left" valign="middle">
					<input name="terms" type="checkbox" id="terms" />
                    I have read and agree to the <a href="terms-and-conditions.html" class="blue">Terms &amp; Conditions</a><span class="rojo"> *</span></td>
                  </tr>
                <tr>
                  <td colspan="2" align="left" valign="middle">
					<input type="checkbox" name="getMoreInfo" id="getMoreInfo" />
                    I would like to receive more information about VETA News and Promotions</td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td align="right" valign="middle">
				<input type="hidden" id="validForm" name="validForm" value="true"/>
				<input type="hidden" id="ref" name="ref" value="<?=$ref;?>"/>
				<div class="sendButton" onclick="javascript:submitform()"></div>
				<!-- <img src="images/button.jpg" width="254" height="62" /> -->
			  </td>
            </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="50" valign="middle" bgcolor="#1F1D5D"><table width="95%" align="center">
        <tr>
          <td width="61%" height="25" align="left" valign="middle"><h3>Web Design by <a href="http://www.sevenstudio.com.au/" target="_blank" class="seven">Seven Studio</a></h3></td>
          <td width="9%" height="25" align="center" valign="middle" class="bordeCopy"><a href="index.php">Home</a></td>
          <td width="20%" height="25" align="center" valign="middle" class="bordeCopy"><a href="terms-and-conditions.html">Terms & Conditions</a></td>
          <td width="10%" height="25" align="center" valign="middle"><a href="http://www.australiaveta.com.au/contact-form.php" target="_blank">Contact</a></td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
<script src="js/admin-forms-js.js" type="text/javascript"></script>
</body>
</html>
