<?php
session_start();
//////////////////////////////////////////////////////
include('../inc/querySeminars.php');
//////////////////////////////////
	$usrID = $_GET['usr'];
	//
	//echo "<br />El Pinche UsrID....!".$usrID."<br />";
	$queryNLEmails = $db->dbQuery("SELECT personID, firstName, lastName FROM persons WHERE personID=$usrID");
	$rowNLEmails = $db->fetch_array($queryNLEmails);
	////
	$row_Count = mysql_num_rows($queryNLEmails);
	$total = $row_Count;	//Count	Records Fetched
	//echo "Total records fetched...!".$total."<br />";
/// Newsletter Details
	$Name = $rowNLEmails['firstName'];
	$LastName = $rowNLEmails['lastName'];
	$usr = $rowNLEmails['personID'];
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>VETA Seminars</title>
<style type='text/css'>
<!--
.fondo_principal {
	background-image: url(http://www.australiaveta.com.au/Admin/newsletter/http://www.australiaveta.com.au/Admin/newsletter/images/fondoinvita.png);
	background-repeat: no-repeat;
	background-position: center top;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
h1,h2,h3,h4,h5,h6 {
	font-family: Arial, Helvetica, sans-serif;
}
h1 {
	font-size: 26px;
	color: #FFFFFF;
	font-weight: bold;
	margin: 0px;
}
h3 {
	font-size: 12px;
	color: #1F1D5D;
	margin: 0px;
}
p {
	font-size: 12px;
	color: #1F1D5D;
	text-decoration: none;
	margin: 0px;
}
h4 {
	font-size: 18px;
	color: #FFFFFF;
	font-family: Impact, 'Arial Black';
	text-decoration: none;
	font-weight: normal;
	margin: 0px;
	text-transform: uppercase;
}
h5 {
	color: #CCCCCC;
	margin: 0px;
	font-size: 12px;
	font-weight: normal;
}
.lineh {
	border-bottom-width: 1px;
	border-bottom-style: dotted;
	border-bottom-color: #CCCCCC;
}
.linev {
	border-right-width: 1px;
	border-right-style: dotted;
	border-right-color: #CCCCCC;
}
a {
	font-size: 12px;
	color: #0099FF;
}
.fondo_fle {
	background-image: url(http://www.australiaveta.com.au/Admin/newsletter/http://www.australiaveta.com.au/Admin/newsletter/images/fle.gif);
	background-repeat: no-repeat;
	background-position: right top;
}
li {
	margin-left: -15px;
}
.texpromo {
	font-family: Impact !important;
	font-size: 14px;
	font-weight: normal;
	color: #FF9900 !important;
	text-decoration: none;
}
.style1 {color: #8CA3D1}
.style7 {color: #99CC00}
.style2 {
	color: #CC0000;
	font-weight: bold;
}
.style3 {color: #D30D44}
.tituclasificados {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #FFFFFF;
	background-image: url(http://www.australiaveta.com.au/Admin/newsletter/http://www.australiaveta.com.au/Admin/newsletter/images/fondocla.gif);
	background-repeat: no-repeat;
	background-position: center center;
	font-weight: bold;
	height: 39px;
}
.bordecla {
	border: 1px solid #8FA0C9;
}
.tituprincipalcla {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
	font-weight: bold;
	color: #FFFFFF;
	text-decoration: none;
	background-image: url(http://www.australiaveta.com.au/Admin/newsletter/http://www.australiaveta.com.au/Admin/newsletter/images/fondoclatitupri.gif);
	background-repeat: no-repeat;
	background-position: left top;
	height: 39px;
}
h6 {
	font-size: 18px;
	color: #CC0001;
	font-family: Impact, 'Arial Black';
	text-decoration: none;
	font-weight: normal;
	margin: 0px;
}
.mensual_image {
	margin: 5px;
}
#top-container
{
	float:left;
	width:100%;
	height:auto;
	margin-right: auto;
	margin-left: auto;
	margin-top: 0px;
	position:fixed;
	z-index:500005;
	left: 0px;
	top: 0px;
}
#preview-static-content{
	margin-right: 20px;
	margin-left: 20px;
	height:auto;
	background-color:#777;
	margin-top: 0px;
	margin-bottom: 0px;	/*border: 1px solid #999999;*/
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #999999;
	border-right-width: 1px;
	border-right-style: solid;
	border-right-color: #999999;
	border-left-width: 1px;
	border-left-style: solid;
	border-left-color: #999999;
}
.transparent_class {
        filter:alpha(opacity=80);
        -moz-opacity:0.9;
        -khtml-opacity: 0.9;
        opacity: 0.9;
}
.style4 {
	color: #FFFFFF;
	font-weight: bold;
}
.style5 {color: #FFFFFF}
.line {
	border-top-width: 2px;
	border-top-style: solid;
	border-top-color: #000033;
}
-->
</style>
</head>
<body>
<table width='810' border='0' align='center' cellpadding='0' cellspacing='0' background='http://www.australiaveta.com.au/Admin/newsletter/images/fondototal.jpg'>
  <tr>
    <td align='left' valign='top'><table width='810' border='0' cellspacing='0' cellpadding='0'>
      <tr>
        <td valign='top' background='http://www.australiaveta.com.au/Admin/newsletter/images/fondoinvita.png' style='background-repeat: no-repeat; background-position: center top;'>
        <table width='810' border='0' cellspacing='0' cellpadding='0'>
          <tr>
            <td width='28' align='center' valign='top'><table width='24' border='0' cellspacing='0' cellpadding='0'>
              <tr>
                <td height='177'>&nbsp;</td>
              </tr>
              <tr>
                <td height='290' align='center' valign='middle'><a href='http://www.australiaveta.com.au/' target='_blank'><br />
                  <br />
                  <img src='http://www.australiaveta.com.au/Admin/newsletter/images/www.gif' width='21' height='246' border='0' /></a></td>
              </tr>
            </table></td>
            <td width='779' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
              <tr>
                <td height='30' align='center' valign='middle'>&nbsp;</td>
              </tr>
              <tr>
                <td height='154' align='left' valign='top'><table width='756' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td width='6%'>&nbsp;</td>
                    <td width='44%' align="center" valign="middle"><h4><?php $titleDate = $date; echo $titleDate;?></h4></td>
                    <td height='26' colspan='2' align='left' valign='middle'>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2">&nbsp;</td>
                    <td height='25' colspan='2' align='left' valign='middle'>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2">&nbsp;</td>
                    <td height='25' colspan='2' align='left' valign='middle'><h3>Hi!, <?php echo $Name." ".$LastName;?></h3></td>
                  </tr>
                  <tr>
                    <td colspan="2">&nbsp;</td>
                    <td width='30%' height='30' align='right' valign='middle'><h3>&nbsp;</h3></td>
                    <td width='20%' align='right' valign='middle'><h3>
<script type="text/javascript">

var d=new Date();
var month=new Array(12);
month[0]="January";
month[1]="February";
month[2]="March";
month[3]="April";
month[4]="May";
month[5]="June";
month[6]="July";
month[7]="August";
month[8]="September";
month[9]="October";
month[10]="November";
month[11]="December";

document.write(month[d.getMonth()] +", " + d.getDate() + " / " + d.getFullYear());

</script></h3></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td height='55' align='center' valign='middle'><h1><?php echo $titleOne;?></h1></td>
              </tr>
              <tr>
                <td align='left' valign='top'><table width='775' border='0' cellspacing='6' cellpadding='0'>
                  <tr>
                    <td width='52' align='left' valign='top'>&nbsp;</td>
                    <td width='520' align='left' valign='top'><div align='center'><img src='http://www.australiaveta.com.au/Admin/newsletter/images/home7_esp.jpg' width='500' height='94' />
                    </div>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><p><strong><img src="http://www.australiaveta.com.au/Admin/newsletter/images/marcasello.png" alt="" width="157" height="157" hspace="7" vspace="7" align="right" /></strong></p>
      <?php echo $textOne;?><br />
      <br /></td>
  </tr>
  <tr>
    <td class="line"><br />
      <strong><strong><em><img src="http://www.australiaveta.com.au/Admin/newsletter/images/marcasello1.png" width="157" height="157" hspace="7" vspace="7" align="right" /></em></strong></strong><?php echo $textTwo;?><br />
<p>&nbsp;</p></td>
  </tr>
  <tr>
    <td class="line"><br />
      <strong>
          <em>
              <img src="http://www.australiaveta.com.au/Admin/newsletter/images/marcasello2.png" width="157" height="157" hspace="7" vspace="7" align="right" />          </em>      </strong>
          <?php echo $text_br;?><br />
<p>&nbsp;</p></td>
  </tr>
</table></td>
                    <td width='183' align='left' valign='top'><table width='183' border='0' cellspacing='0' cellpadding='5'>
                      <tr>
                        <td><img src='http://www.australiaveta.com.au/Admin/newsletter/images/facebook.gif' width='16' height='16' hspace='6' vspace='6' align='absmiddle' /><a href='http://www.facebook.com/group.php?gid=83106243722&amp;ref=search&amp;sid=676263145.1918115937..1#!/group.php?gid=83106243722&amp;v=wall' target='_blank'>Friend on Facebook</a><br />
                          <img src='http://www.australiaveta.com.au/Admin/newsletter/images/mail.gif' width='16' height='16' hspace='6' vspace='6' align='absmiddle' /><a href='#'>Unsubscribe</a></td>
                      </tr>
                      <tr>
                        <td bgcolor='#CC0000' background='http://www.australiaveta.com.au/Admin/newsletter/images/31.gif' style='background-repeat: no-repeat; background-position: center top;' height='31px'><span style='font-size: 18px; color: #FFFFFF; font-family: Impact; text-decoration: none; font-weight: normal; margin: 0px;'><?php echo $titleThree;?></span></td>
                      </tr>
                      <tr>
                        <td align='left' valign='top'><p><img src='../../<?php echo $imageThree;?>' width='160' hspace='4' vspace='4' /><br>
                        </p>
                          <?php echo $textThree;?><br>
                          <br></td>
                      </tr>
                      <tr>
                        <td bgcolor='#CC0000' background='http://www.australiaveta.com.au/Admin/newsletter/images/31.gif' style='background-repeat: no-repeat; background-position: center top;' height='31px'><span style='font-size: 18px; color: #FFFFFF; font-family: Impact; text-decoration: none; font-weight: normal; margin: 0px;'><?php echo $titleFour;?></span></td>
                      </tr>
                      <tr>
                        <td align='left' valign='top'><img src='../../<?php echo $imageFour;?>' width='160' hspace='4' vspace='4' /><br>
                          <span class='texpromo'><?php echo $textFour;?><br>
                          <br>
                          </span></td>
                      </tr>
                      <tr>
                        <td bgcolor='#CC0000' background='http://www.australiaveta.com.au/Admin/newsletter/images/31.gif' style='background-repeat: no-repeat; background-position: center top;' height='31px'><span style='font-size: 18px; color: #FFFFFF; font-family: Impact; text-decoration: none; font-weight: normal; margin: 0px;'>MIGRATIONS</span></td>
                      </tr>
                      <tr>
                        <td align='left' valign='top'><img src='http://www.australiaveta.com.au/Admin/newsletter/images/foto3.gif' width='165' height='94' />
                          <ul>
                            <li><span class='style3'>If you are and Engineer such as Civil, Electronic, Electrical, Chemical, Mechanical, Mining, and Industrial. </span></li>
                            <li><span class='style3'>Or an Accountant, Business Administrator and financial manager.</span></li>
                            <li><span class='style3'>Have 1 year work experience after graduation</span></li>
                            <li><span class='style3'>General IELTS 6.0 no band under 6.0</span></li>
                            <li><span class='style3'>It means you have a good chance to apply for a permanent resident.</span></li>
                            <li><span class='style3'>Or if you don’t satisfy the above criteria we can show you the right pathway to follow </span></li>
                          </ul>
                          <p align='center'>FOR FUTHER INFROMATION <br />
                            CONTACT US:<br />
                            Suite 102, Level 1, 22 Market St.<br />
							Sydney, NSW 2000, Australia<br />
							T+61 2 9299 14 58<br />
							F+61 2 9299 92 14<br />
							info@mmmigration.com.au  <a href='http://www.mmmigration.com.au' target='_blank'>www.mmmigration.com.au</a><br>
                             <br>
                          </p>                          </td>
                      </tr>
                      <tr>
                        <td bgcolor='#CC0000' background='http://www.australiaveta.com.au/Admin/newsletter/images/31.gif' style='background-repeat: no-repeat; background-position: center top;' height='31px'><span style='font-size: 18px; color: #FFFFFF; font-family: Impact; text-decoration: none; font-weight: normal; margin: 0px;'>WEB VETA</span></td>
                      </tr>
                      <tr>
                        <td valign='top'><ul>
                            <li><a title='index.php' href='http://www.australiaveta.com.au/index.php' target='_blank'>HOME </a> <br>
                                <br>
                            </li>
                          <li>EDUCATION </li>
                          <li><a title='Education-English.html' href='http://www.australiaveta.com.au/Education-English.html' target='_blank'>English</a></li>
                          <li><a title='Education-Technical.html' href='http://www.australiaveta.com.au/Technical.html' target='_blank'>Technical </a></li>
                          <li><a title='Education-University.html' href='http://www.australiaveta.com.au/Education-University.html' target='_blank'>University</a><br>
                                <br>
                            </li>
                          <li>VISAS </li>
                          <li><a title='Visas-Study.html' href='http://www.australiaveta.com.au/Visas-Study.html' target='_blank'>Study</a></li>
                          <li><a title='Visas-Work.html' href='http://www.australiaveta.com.au/Visas-Work.html' target='_blank'>Work</a></li>
                          <li><a title='About-Australia.html' href='http://www.australiaveta.com.au/About-Australia.html' target='_blank'>About Australia</a><br>
                                <br>
                            </li>
                          <li>CONTACT US </li>
                          <li><a title='ContactForm.php' href='http://www.australiaveta.com.au/Contact-Form.php' target='_blank'>Contact Form</a></li>
                          <li><a title='Contact.html' href='http://www.australiaveta.com.au/Contact.html' target='_blank'>Staff</a></li>
                          <li><a title='testimonials.html' href='http://www.australiaveta.com.au/testimonials.html' target='_blank'>Testimonials</a><br>
                                <br>
                            </li>
                        </ul></td>
                      </tr>
                      
                      

                    </table></td>
                  </tr>
                  
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table>          </td>
      </tr>
    </table>      </td>
  </tr>
  <tr>
    <td height='179' align='left' valign='top' background='http://www.australiaveta.com.au/Admin/newsletter/images/imagen-footer.jpg' background-repeat:'no-repeat;'><table width='100%' border='0' cellspacing='0' cellpadding='5'>
      <tr>
        <td width='158' rowspan='3'>&nbsp;</td>
        <td height='29' colspan='3' align='right' valign='middle' class='lineh'><h5><strong>SERVICES OFFERED</strong></h5></td>
        <td align='left' valign='middle'>&nbsp;</td>
        <td width="177" align='left' valign='middle'>&nbsp;</td>
      </tr>
      <tr>
        <td width="119" align='left' valign='middle' class='linev'><span class='style2'>APPLICATION FOR</span></td>
        <td width="158" align='left' valign='middle' class='linev'><span class='style2'>INFORMATION</span></td>
        <td width="136" align='left' valign='middle'><span class='style2'>OTHERS</span></td>
        <td width='2' rowspan='2' align='left' valign='top'>&nbsp;</td>
        <td rowspan='2' align='left' valign='top'><span class='style1'><a href='http://www.australiaveta.com.au' target='_blank'>www.australiaveta.com.au<br>
          <br>
        </a>info@australiaveta.com.au <br />
            Suite 102, Level 1, 22 Market St.<br />
            Sydney, NSW 2000, Australia<br />
            T+61 2 9299 14 58<br />
            F+61 2 9299 92 14</span></td>
      </tr>
      <tr>
        <td align='left' valign='top' class='linev'><h5>Student Visas<br>
          English Courses<br>
          Vocational Courses<br>
          Universities Pre and <br>
          Post Graduate</h5></td>
        <td align='left' valign='top' class='linev'><h5>Permanent Residency<br>
          Company Sponsorships<br>
          Partner Visas<br>
          University Scholarship<br>
          Engineers Migration Options</h5></td>
        <td align='left' valign='top'><h5>Accommodation<br>
          Tax File Number<br>
          Jobs Option<br>
          Proof Of Age Card<br>
          Booking  for “ White Card, RSA, RCG and RFH Courses<br>
        </h5></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>