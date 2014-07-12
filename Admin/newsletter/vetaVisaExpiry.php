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
/*
	$queryNLEmails = $db->dbQuery("SELECT personID, firstName, lastName, visaexpdate FROM persons WHERE personID=$usrID");
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
*/
//////////////////////////////////
$queryVisaExp = $db->dbQuery("SELECT firstName, lastName, emailAddress, visaExpDate, personID FROM persons WHERE personID=$usrID");
	$rowVisaExp = $db->fetch_array($queryVisaExp);
//////////////////////////////////
	$personID = $rowVisaExp['personID'];
	$firstName = $rowVisaExp['firstName'];
	$lastName =  $rowVisaExp['lastName'];
	$fullName = $firstName." ".$lastName;
	$email =  $rowVisaExp['emailAddress'];
	//echo "WTF! ".$email."<br />";
	$expDate = $rowVisaExp['visaExpDate'];	
	$expDate = explode("-", $expDate);
///////////////////////
//echo "The Expiry Date Formated...".$expDate[2]."/".$expDate[1]."/".$expDate[0]."<br />"; // expiry date	
	$expFullDate = 	$expDate[2]." ".$expDate[1]." ".$expDate[0];	
	$usr = $rowNLEmails['personID'];
//////////////////////////////////
 $month = $expDate[1];
 //echo $month."<br />";
                        switch ($month) {
                        ///
                        case '01':
                        $month = 'JANUARY';
                        break;
                        case '02':
                        $month = 'FEBRUARY';
                        break;
						case '03':
                        $month = 'MARCH';
                        break;
						case '04':
                        $month = 'APRIL';
                        break;
						case '05':
                        $month = 'MAY';
                        break;
						case '06':
                        $month = 'JUNE';
                        break;
						case '07':
                        $month = 'JULY';
                        break;
						case '08':
                        $month = 'AUGUST';
                        break;
						case '09':
                        $month = 'SEPTEMBER';
						//echo "<br />".$month."<br />";
                        break;
						case '10':
                        $month = 'OCTOBER';
                        break;
						case '11':
                        $month = 'NOVEMBER';
                        break;
						case '12':
                        $month = 'DECEMBER';
                        break;
                        }
//////////////////////////////////
	$queryVisaExpNote = $db->dbQuery("SELECT * FROM visaexpnote");
	$rowVisaExpNote = $db->fetch_array($queryVisaExpNote);
	$visaExpNote = $rowVisaExpNote['visaExpNote'];
//////////////////////////////////	
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Untitled Document</title><style type='text/css'>
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
}

h1 {
	font-size: 35px;
	color: #FFF;
	font-weight: normal;
	margin: 0px;
}
h2 {
	font-size: 16px;
	color: #FFF;
	font-weight: normal;
	margin: 0px;
}
h3 {
	font-size: 25px;
	color: #333;
	font-weight: normal;
	margin: 0px;
	text-align: left;
}
h4 {
	font-size: 20px;
	color: #333;
	font-weight: normal;
	margin: 0px;
}
h5 {
	font-size: 11px;
	color: #FFF;
	font-weight: normal;
	margin: 0px;
}
h6 {
	font-weight: normal;
	margin: 0px;
	color: #403B62;
	border-top-width: 1px;
	border-top-style: dotted;
	border-top-color: #CCC;
	font-size: 12px;
}
.span {
	color: #C00;
}
.spangris {
	color: #333;
}
.spanblanco {
	color: #FFF;
}
.image {
	background-image: url(http://www.australiaveta.com.au/Admin/newsletter/images/visa-date.gif);
	background-repeat: no-repeat;
	background-position: center center;
}
.number {
	font-size: 80px;
	font-weight: bold;
	color: #333;
}
</style>
</head>

<body>
<table width='100%' border='0' cellpadding='0' cellspacing='0'>
  <tr>
    <td align='center' valign='top' bgcolor='#E5E0D9'><table width='600' border='0' cellpadding='0' cellspacing='0'>
      <tr>
        <td align='left' valign='top' bgcolor='#FFFFFF'><table width='600' border='0' cellpadding='0' cellspacing='0'>
          <tr>
            <td height='30' align='center' valign='middle' bgcolor='#EB0310'><h2>Hi!, <?=$fullName;?></h2></td>
          </tr>
          <tr>
            <td align='center' valign='top'><table width='560' border='0' cellpadding='0' cellspacing='0'>
              <tr>
                <td height='130' align='left' valign='top'><table width='100%' border='0' cellpadding='0' cellspacing='0'>
                  <tr>
                    <td width='72%' height='130' align='left' valign='top'><img src='http://www.australiaveta.com.au/Admin/newsletter/images/logo-viva-estudie-y-trabaje-en-australia.gif' width='197' height='117' /></td>
                    <td width='28%' align='right' valign='middle'><table width='155' border='0' cellpadding='0' cellspacing='0'>
                      <tr>
                        <td height='25' align='left' valign='middle'><strong>Keep Up With Us</strong></td>
                      </tr>
                      <tr>
                        <td height='24' align='left' valign='middle'><h6><a href='https://www.facebook.com/australiaveta' target='_blank'>Facebook</a></h6></td>
                      </tr>
                      <tr>
                        <td height='24' align='left' valign='middle'><h6><a href='https://twitter.com/veta_education' target='_blank'>Twitter</a></h6></td>
                      </tr>
                      <tr>
                        <td height='24' align='left' valign='middle'><h6><a href='http://www.youtube.com/user/VETAEDUCATION/feed' target='_blank'>Youtube</a></h6></td>
                      </tr>
                      <tr>
                        <td height='24' align='left' valign='middle'><h6><a href='http://www.australiaveta.com.au/' target='_blank'>www.australiaveta.com.au</a></h6></td>
                      </tr>
                    </table></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td align='left' valign='top' bgcolor='#FFFFFF'>&nbsp;</td>
              </tr>
              <tr>
                <td height='214' align='left' valign='top' bgcolor='#EFEFEF'><br />
                  <table width='95%' border='0' align='center' cellpadding='0' cellspacing='0'>
                  <tr>
                    <td width='63%' valign='top'><h1 class='spangris'>Tu VISA esta a <br />
                      punto de VENCER</h1>
                      <p><br />
                        De acuerdo a la información que nos suministraste <strong>sabemos que tu visa está a punto de vencerse</strong> así que queremos ofrecerte nuestros servicios para llevar a cabo el proceso de la renovación de tu Visa. <br />
                        <strong>Estas son algunas razones para renovar con VETA.</strong><br />
                      </p></td>
                    <td width='37%' align='center' valign='top'><table width='170' border='0' cellspacing='0' cellpadding='0'>
                      <tr>
                        <td height='22'>&nbsp;</td>
                      </tr>
                      <tr>
                        <td height='35' align='center' valign='middle' bgcolor="#ED010F"><h4 class='spanblanco'><strong><?php echo $month;?></strong></h4></td>
                      </tr>
                      <tr>
                        <td height='114' align='center' valign='middle' bgcolor="#FFFFFF" style='font-family: Arial, Helvetica, sans-serif; font-size: 80px; color: #333333; font-weight: bold; margin: 0px;' span><?php echo $expDate[2];?></span></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align='left' valign='top'><table width='100%' border='0' cellpadding='0' cellspacing='0'>
                  <tr>
                    <td width='410' align='left' valign='top'><h3><br>
                      SIEMPRE PREGUNTA POR LA PROMOCION DEL MES!
                      </h3>
                      <ol>
                        <li>La asesoría y la aplicación es totalmente gratis.<br />
                          <br />
                        </li>
                        <li>Somos la única empresa de educación que utiliza una agente de migración para la aplicación de tu visa.<br />
                          <br />
                        </li>
                        <li>Si vas aplicar a una visa de Sponsor, nuestra agente de migración podrá ayudarte con tu proceso de aplicación.<br />
                          <br />
                        </li>
                        <li>Utiliza nuestro servicio de <strong>BOLSA DE EMPLEOS</strong>.<br />
                          <br />
                        </li>
                        <li>Con VETA puedes conseguir <strong>BECAS</strong> con Universidades fácilmente.</li>
                    </ol>
                      <h6 align='center'><strong><br />
                        <br />
                        RENUEVA TU VISA CON VETA Y RECIBIRÁS UNA MEMORIA USB 4GB, PARTICIPA EN LA RIFA DE UN IPAD Y UNA TABLA PARA SURFEAR EN EL ULTIMO SEMINARIO DEL AÑO 2012.</strong>                      <br />
                        <br />
                      </h6>
                      <p><span class='span'><strong>RECUERDA</strong> que si tu visa está a punto de vencer, es importante que iniciemos el proceso de renovación con un mes de anticipación. <br />
                          <em>No se te olvide preguntar que opciones tienes para aplicar a una residencia permanente</em></span>.<br />
                          <br />
                      </p>
                      <p><strong>Esperamos verte pronto en VETA!<br />
                        <br />
                      </strong>                      </p>
                      <p>Suite 102, Level 1, 22 Market St. Sydney NSW 2000 ó Contactanos al <a href='tel:0292991458' value='+61292991458' target='_blank'>0292991458</a> o responde a este mail <a href='mailto:admissions@australiaveta.com.au' target='_blank'>admissions@australiaveta.com.au<br />
                        <br />
                      </a>                      </p>
                      <table width='100%' border='0' cellpadding='2' cellspacing='4' bordercolor='#9E9EB8'>
                        <tr>
                          <td bgcolor='#CC0000'><span style='font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #ffffff; font-weight: bold;'>NOTA / NOTICE</span></td>
                        </tr>
                        <tr>
                          <td bgcolor='#EFEFEF'><p><?php $visaExpNote?></p></td>
                        </tr>
                    </table>                      <p>&nbsp;</p></td>
                    <td width='19'>&nbsp;</td>
                    <td width='128' align='left' valign='top'><table width='128' border='0' cellpadding='0' cellspacing='0'>
                      <tr>
                        <td height='113' align='left' valign='top'><img src='http://www.australiaveta.com.au/Admin/newsletter/images/4g.jpg' width='128' height='114' /></td>
                        </tr>
                      <tr>
                        <td>&nbsp;</td>
                        </tr>
                      <tr>
                        <td height='600' align='left' valign='top'><img src='http://www.australiaveta.com.au/Admin/newsletter/images/banne4-viva-estudie-y-trabaje-en-australia.jpg' width='128' height='600' /></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height='150' align='center' valign='top' bgcolor='#1F1D5D'><table width='560' border='0' cellpadding='0' cellspacing='0'>
              <tr>
                <td width='185' height='20'>&nbsp;</td>
                <td width='211' height='20'>&nbsp;</td>
                <td width='164' height='20'>&nbsp;</td>
              </tr>
              <tr>
                <td height='20' align='left' valign='middle'><h5><strong>APPLICATION FOR</strong></h5></td>
                <td height='20' align='left' valign='middle'><h5><strong>INFORMATION</strong></h5></td>
                <td height='20'><h5><strong>OTHERS</strong></h5></td>
              </tr>
              <tr>
                <td><h5>&nbsp;</h5></td>
                <td><h5>&nbsp;</h5></td>
                <td><h5>&nbsp;</h5></td>
              </tr>
              <tr>
                <td height='80' align='left' valign='top'><h5>Student Visas<br />
                  English Courses<br />
                  Vocational Courses<br />
                  Universities Pre and <br />
                  Post Graduate</h5></td>
                <td height='80' align='left' valign='top'><h5>Permanent Residency<br />
                  Company Sponsorships<br />
                  Partner Visas<br />
                  University Scholarship<br />
                  Engineers Migration Options</h5></td>
                <td height='80' align='left' valign='top'><h5>Accommodation<br />
                  Tax File Number<br />
                  Jobs Option<br />
                  Proof Of Age Card<br />
                  Booking for &quot; White Card,<br />
                  RSA, RCG and RFH Courses</h5></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td bgcolor='#E5E0D9'><br />
              T+61 2 9299 14 58 |  F+61 2 9299 92 14 | Suite 102, Level 1, 22 Market St. Sydney, NSW 2000, Australia<br />
              <a href='http://www.australiaveta.com.au' target='_blank'>www.australiaveta.com.au</a> | <a href='mailto:admissions@australiaveta.com.au'>admissions@australiaveta.com.au </a><br />
              Copyright © *|2012| VIVA Y ESTUDIE EN AUSTRALIA, Rights Reserved. <br />
              <!-- <a href='http://www.australiaveta.com.au/Admin/newsletter/unsubscribe.php?usr=$pieces[3]'>Unsubscribe</a> from this list<br /> -->
              <br /></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>