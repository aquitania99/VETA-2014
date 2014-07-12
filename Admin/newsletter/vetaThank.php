<?php
session_start();
//////////////////////////////////////////////////////
$year = date('Y');
$month = date('m');
$day = date('d');
$currentDate = date("Y/m/d");
//////////////////////////////////////////////////////
	include("../../Connections/config.inc.php");
	include("../../Connections/mysql.class.php");
/////////////////////////////////////////////////////
$usrID = $_GET['usr'];
	/// Create New DB Object
	$db = new MySQL();
	/// Open Connection
	$db->open();
/////////////////////////////////////////////////////	
	$queryNLEmails = $db->dbQuery("SELECT personID, firstName, lastName, visaExpDate FROM persons WHERE personID=$usrID");
	$rowNLEmails = $db->fetch_array($queryNLEmails);
	////
	$row_Count = mysql_num_rows($queryNLEmails);
	$total = $row_Count;	//Count	Records Fetched
	//echo "Total records fetched...!".$total."<br />";
/// Newsletter Details
	$Name = $rowNLEmails['firstName'];
	$LastName = $rowNLEmails['lastName'];
	$fullName = $Name." ".$LastName;
	$expDate = $rowNLEmails['visaExpDate'];
	$expDate = explode("-", $expDate);
///////////////////////
//echo "The Expiry Date Formated...".$expDate[2]."/".$expDate[1]."/".$expDate[0]."<br />"; // expiry date	
	$expFullDate = 	$expDate[2]."/".$expDate[1]."/".$expDate[0];	
	$usr = $rowNLEmails['personID'];
//////////////////////////////////
	$queryVisaExpNote = $db->dbQuery("SELECT * FROM visaExpNote");
	$rowVisaExpNote = $db->fetch_array($queryVisaExpNote);
	$visaExpNote = $rowVisaExpNote['visaExpNote'];
//////////////////////////////////	
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Thanks!</title>
<style type='text/css'>
<!--
.fondo_principal {
	background-image: url(http://www.australiaveta.com/Admin/newsletter/images/fondo.jpg);
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
	font-size: 24px;
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
	background-image: url(http://www.australiaveta.com/Admin/newsletter/images/fle.gif);
	background-repeat: no-repeat;
	background-position: right top;
}
li {
	margin-left: -15px;
}
.texpromo {
	font-family: Impact, 'Arial Black';
	font-size: 14px;
	font-weight: normal;
	color: #FF9900;
	text-decoration: none;
}
.style1 {color: #8CA3D1}
.style2 {
	color: #CC0000;
	font-weight: bold;
}
.style3 {color: #D30D44}
a:hover {
	color: #CC0000;
}
.style4 {
	color: #FFFFFF;
	font-weight: bold;
}

-->
</style>
</head>

<body>
<table width='810' border='0' align='center' cellpadding='0' cellspacing='0' background='http://www.australiaveta.com/Admin/newsletter/images/fondototal.jpg'>
  <tr>
    <td align='left' valign='top'><table width='810' border='0' cellspacing='0' cellpadding='0'>
      <tr>
        <td valign='top' class='fondo_principal'><table width='810' border='0' cellspacing='0' cellpadding='0'>
          <tr>
            <td width='28' align='center' valign='top'><table width='24' border='0' cellspacing='0' cellpadding='0'>
              <tr>
                <td height='177'>&nbsp;</td>
              </tr>
              <tr>
                <td height='290' align='center' valign='middle'><a href='http://www.australiaveta.com/' target='_blank'><img src='http://www.australiaveta.com/Admin/newsletter/images/www.gif' width='21' height='246' border='0' /></a></td>
              </tr>
            </table></td>
            <td width='779' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
              <tr>
                <td height='30' align='center' valign='middle'></td>
              </tr>
              <tr>
                <td height='128' align='left' valign='top'><table width='756' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td width='50%'>&nbsp;</td>
                    <td width='50%' height='26' align='left' valign='middle'>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td height='25' align='left' valign='middle'><h3><strong>Hi!,<?php echo $fullName;?></strong></h3></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td height='30' align='right' valign='middle'><h3>
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
                <td height='55' align='center' valign='middle'><h1>Gracias / Thanks</h1></td>
              </tr>
              <tr>
                <td align='left' valign='top'><table width='775' border='0' cellspacing='6' cellpadding='0'>
                  <tr>
                    <td width='52' align='left' valign='top'>&nbsp;</td>
                    <td width='520' align='left' valign='top'><p align='center'><img src='http://www.australiaveta.com/Admin/newsletter/images/home1_esp.jpg' width='500' height='94' /></p>
                      <p>&nbsp;</p>
                      <p><strong>VETA “Viva, Estudie y Trabaje en Australia ”</strong> es una agencia de educacion e inmigracion</p>
                      <p>donde te vamos a dar una asesoria completa y personalizada para renovar tu visa</p>
                      <p>las opciones que tienes para aplicar a residencia permanente Te invitamos a que conozcas</p>
                      <p>nuestra oficina donde vas a encontrar gente amable y dispuesta a prestarte la mejor</p>
                      <p>asesoria.</p>
                      <p>&nbsp;</p>
                      <p>Adicionalmente, podemos brindaerte informacion para aplicar a visa de pareja,</p>
                      <p>sponsorships e informarcion sobre los cambios de immigracion, a traves de nuestros</p>
                      <p>seminarios informativos que son completamente GRATIS.<strong><img src="images/marcasello.png" width="157" height="157" align="right" /></strong></p>
                      <p>&nbsp;</p>
                      <p>Esperando verte pronto en VETA! Suite 506, Level 5, 22 Market St. Sydney NSW 2000</p>
                      <p>O Contactanos al 0292991458 o responde a este mail<a href="mailto:info@australiaveta.com"> info@australiaveta.com</a></p>
                      <p>&nbsp;</p>
                      <p align="center"><strong>PREGUNTA POR LA PROMOCION DEL MES!</strong></p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <p align="left">Atentamente,</p>
                      <p><strong>VETA “Viva, Estudie y Trabaje en Australia ”</strong></p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>                      </td>
                    <td width='183' align='left' valign='top'><table width='183' border='0' cellspacing='0' cellpadding='5'>
                      <tr>
                        <td><img src='http://www.australiaveta.com/Admin/newsletter/images/facebook.gif' width='16' height='16' hspace='6' vspace='6' align='absmiddle' /><a href='http://www.facebook.com/group.php?gid=83106243722&amp;ref=search&amp;sid=676263145.1918115937..1#!/group.php?gid=83106243722&amp;v=wall' target='_blank'>Friend on Facebook</a><br />
                          <img src='http://www.australiaveta.com/Admin/newsletter/images/mail.gif' width='16' height='16' hspace='6' vspace='6' align='absmiddle' /><a href='#'>Unsubscribe</a></td>
                      </tr>
                      <tr>
                        <td bgcolor='#CC0000' class='fondo_fle'><h4>MIGRATIONS</h4></td>
                      </tr>
                      <tr>
                        <td align='left' valign='top'><img src='http://www.australiaveta.com/Admin/newsletter/images/foto3.gif' width='165' height='94' />
                          <ul>
                            <li><span class='style3'>If you are and Engineer such as Civil, Electronic, Electrical, Chemical, Mechanical, Mining, and Industrial. </span></li>
                            <li><span class='style3'>Or an Accountant, Business Administrator and financial manager.</span></li>
                            <li><span class='style3'>Have 1 year work experience after graduation</span></li>
                            <li><span class='style3'>General IELTS 6.0 no band under 6.0</span></li>
                            <li><span class='style3'>It means you have a good chance to apply for a permanent resident.</span></li>
                            <li><span class='style3'>Or if you don't satisfy the above criteria we can show you the right pathway to follow </span></li>
                          </ul>
                          <p align='center'>FOR FUTHER INFROMATION <br />
                            CONTACT US:<br />
                            Suite 506, 22 Market St,<br />
                            Sydney NSW 2000 Australia<br />
                            T /9299 0203<br />
                            F + 02 9299 9214<br />
                             Info@mmmigration.com.au  <a href='http://www.mmmigration.com.au' target='_blank'>www.mmmigration.com.au</a><br>
                             <br>
                             <br />
                          </p>                          </td>
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
    <td height='179' align='left' valign='top' background='http://www.australiaveta.com/Admin/newsletter/images/imagen-footer.jpg'><table width='100%' border='0' cellspacing='0' cellpadding='5'>
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
        <td rowspan='2' align='left' valign='top'><span class='style1'><a href='http://www.australiaveta.com' target='_blank'>www.australiaveta.com<br>
                <br>
          </a>Info@australiaveta.com <br />
          Suite 506, Level 5, 22 Market St<br />
          Sydney, NSW 2000, Australia<br />
          T+ 61 2 9299 14 58<br />
          F+ 61 2 9299 92 14</span></td>
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