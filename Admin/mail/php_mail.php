<?php
	$sendTo = "webmaster@greenlightmemorabilia.com";
	$subject = "Greenlight Memorabilia Newsletter";
	$headers = "From: webmaster@greenlightmemorabilia.com";
	$headers .= "<webmaster@greenlightmemorabilia.com>\r\n";
	$headers .= "Reply-To: aquitania99@gmail.com"; 
	// Para enviar correo HTML, la cabecera Content-type debe definirse
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$message = "
	<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
	<html xmlns='http://www.w3.org/1999/xhtml'>
	<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<title>Green Light Memorabilia - Newsletter</title>
	<link rel='stylesheet' type='text/css' href='http://www.greenlightmemorabilia.com/mail/styles.css' rel='Stylesheet' type='text/css' />
</head>
<body>
<style type='text/css'>
<!--
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
.fondo_logo {
	background-image: url(http://www.greenlightmemorabilia.com/mail/images/fondo_logo.jpg);
	background-repeat: no-repeat;
	background-position: center top;
}
.fondo_logoCopy {
	background-image: url(http://www.greenlightmemorabilia.com/mail/images/fondo_logo.jpg);
	background-repeat: no-repeat;
	background-position: center bottom;
}
.tex {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
	text-decoration: none;
}
.titu_dear {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 21px;
	font-weight: bold;
	color: #000000;
	text-decoration: none;
}
.texww {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
	color: #99CC00;
}
.texfe {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #CCCCCC;
	text-decoration: none;
}
.lin {
	color: #999900;
}
.titu {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
	color: #999999;
}
.line {
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: solid;
	border-left-style: none;
	border-top-color: #CCCCCC;
	border-right-color: #CCCCCC;
	border-bottom-color: #CCCCCC;
	border-left-color: #CCCCCC;
}
.texverde {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #828200;
}
.titu2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #FFFFFF;
	text-decoration: none;
}
.fir {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: normal;
	color: #666666;
	text-decoration: none;
}
.style1 {color: #000000}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #666666; text-decoration: none; }
.style4 {color: #666666}
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #CCCCCC; text-decoration: none; font-weight: bold; }
-->
</style>
<table width='760' border='0' align='center' cellpadding='0' cellspacing='0' background='http://www.greenlightmemorabilia.com/mail/images/fondo.jpg'>
  <tr>
    <td valign='top'><table width='760' border='0' cellspacing='0' cellpadding='0'>
      <tr>
        <td height='126' valign='bottom' STYLE= 'background-image:  url('http://www.greenlightmemorabilia.com/mail/images/fondo_logo.jpg'); background-repeat: no-repeat; background-position: center top';'><table width='726' border='0' align='center' cellpadding='0' cellspacing='0'>
          <tr>
            <td width='371'>&nbsp;</td>
            <td width='189' height='30'><div align='right' class='texfe' id='desc'>March 2, 2009</div></td>
            <td width='166'><div id='desc' align='right' class='style5'>Volumen 2, Edition One</div></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height='102' valign='top' class='fondo_logoCopy'><table width='726' border='0' align='center' cellpadding='0' cellspacing='0'>
          <tr>
            <td width='335'><img src='http://www.greenlightmemorabilia.com/mail/images/banner1.jpg' width='335' height='126'></td>
            <td width='387' bgcolor='#FFFFFF'><p><span class='titu_dear'>Dear Sergio, <span class='style4'>Welcome</span></span><br>
              <span class='style3' id='desc'>Greenlight Memorabilia manufactures and distributes premium quality film, television and celebrity products for the many thousands of fans and collectors worldwide.</span><br>
              <br>
              <a href='#' class='texww'>www.greenlightmemorabilia.com</a></p>
              </td>
            <td width='10' align='left' valign='top'><img src='http://www.greenlightmemorabilia.com/mail/images/punta5.gif' width='12' height='126'></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td valign='top'><table width='723' border='0' align='center' cellpadding='0' cellspacing='0'>
          <tr>
            <td><div align='center'><img src='http://www.greenlightmemorabilia.com/mail/images/punta1.gif' width='723' height='27'></div></td>
          </tr>
          <tr>
            <td valign='top' bgcolor='#FFFFFF'><table width='715' border='0' cellspacing='0' cellpadding='0'>
              <tr>
                <td width='507' valign='top' bgcolor='#E7F3C4'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td width='40' height='160' valign='top' bgcolor='#FFFFFF'><img src='http://www.greenlightmemorabilia.com/mail/images/fle_ver.gif' width='40' height='53'></td>
                    <td width='467' valign='top' bgcolor='#FFFFFF'><table width='98%' border='0' cellspacing='3' cellpadding='3'>
                      <tr>
                        <td height='40' valign='bottom' class='line'><p class='titu'>Latest <span class='style1'>Autograph</span> NEWS</p></td>
                      </tr>
                      <tr>
                        <td valign='top'><p class='tex'><img src='http://www.greenlightmemorabilia.com/mail/images/foto1.jpg' width='80' height='80' hspace='8' vspace='8' align='left'><span class='editText' id='desc'>Simulated text Simulated text Simulated Simulated text Simulated text Simulated Simulated text Simulated text Simulated Simulated text Simulated text Simulated Simulated text Simulated text Simulated Simulated text</span><br>
                            <a href='#' class='lin'>Read more...</a></p></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height='160' valign='top' bgcolor='#E7F3C4'><img src='http://www.greenlightmemorabilia.com/mail/images/fle_ver_ver.gif' width='40' height='53'></td>
                    <td valign='top' bgcolor='#E7F3C4'><table width='98%' border='0' cellspacing='3' cellpadding='3'>
                      <tr>
                        <td height='40' valign='bottom' class='line'><p class='titu'>Latest <span class='style1'>Film</span> NEWS</p></td>
                      </tr>
                      <tr>
                        <td valign='top'><p class='tex'><img src='http://www.greenlightmemorabilia.com/mail/images/foto2.jpg' width='80' height='80' hspace='8' vspace='8' align='left'>Simulated text Simulated text Simulated Simulated text Simulated text Simulated Simulated text Simulated text Simulated Simulated text Simulated text Simulated Simulated text Simulated text Simulated Simulated text<br>
                            <a href='#' class='lin'>Read more...</a></p></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height='160' valign='top' bgcolor='#FFFFFF'><img src='http://www.greenlightmemorabilia.com/mail/images/fle_ver.gif' width='40' height='53'></td>
                    <td valign='top' bgcolor='#FFFFFF'><table width='98%' border='0' cellspacing='3' cellpadding='3'>
                      <tr>
                        <td height='40' valign='bottom' class='line'><p class='titu'>Other <span class='style1'>Cool</span> Things</p></td>
                      </tr>
                      <tr>
                        <td valign='top'><p class='tex'><img src='http://www.greenlightmemorabilia.com/mail/images/foto3.jpg' width='80' height='80' hspace='8' vspace='8' align='left'>Simulated text Simulated text Simulated Simulated text Simulated text Simulated Simulated text Simulated text Simulated Simulated text Simulated text Simulated Simulated text Simulated text Simulated Simulated text<br>
                            <a href='#' class='lin'>Read more...</a></p></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height='160' valign='top' bgcolor='#E7F3C4'><img src='http://www.greenlightmemorabilia.com/mail/images/fle_ver_ver.gif' width='40' height='53'></td>
                    <td valign='top' bgcolor='#E7F3C4'><table width='98%' border='0' cellspacing='3' cellpadding='3'>
                      <tr>
                        <td height='40' valign='bottom' class='line'><p class='titu'><span class='style1'>Company</span> NEWS</p></td>
                      </tr>
                      <tr>
                        <td valign='top'><p class='tex'><img src='http://www.greenlightmemorabilia.com/mail/images/foto4.jpg' width='80' height='80' hspace='8' vspace='8' align='left'>Simulated text Simulated text Simulated Simulated text Simulated text Simulated Simulated text Simulated text Simulated Simulated text Simulated text Simulated Simulated text Simulated text Simulated Simulated text<br>
                            <a href='#' class='lin'>Read more...</a></p></td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
                <td width='208' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td><table width='194' border='0' align='center' cellpadding='0' cellspacing='0'>
                      <tr>
                        <td><div align='center'><img src='http://www.greenlightmemorabilia.com/mail/images/punta3.gif' width='194' height='11'></div></td>
                      </tr>
                      <tr>
                        <td bgcolor='#99CC00'><div align='center' class='titu2'>Film Ink Awards Nigh</div></td>
                      </tr>
                      <tr>
                        <td valign='top' bgcolor='#EBEBEB'><table width='95%' border='0' align='center' cellpadding='0' cellspacing='0'>
                          <tr>
                            <td class='texverde'><br>
                              <em>Greenlight Memorabilia Works is proud to be one of the sponsors at this year's Film Ink Awards on 18th March.<br>
We will also be making the award prizes for the winners on the night. Stay tuned for more info.</em></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src='http://www.greenlightmemorabilia.com/mail/images/punta4.gif' width='194' height='21'></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table width='194' border='0' align='center' cellpadding='0' cellspacing='0'>
                      <tr>
                        <td><div align='center'><img src='http://www.greenlightmemorabilia.com/mail/images/punta3.gif' width='194' height='11'></div></td>
                      </tr>
                      <tr>
                        <td bgcolor='#99CC00'><div align='center' class='titu2'>SUPANOVA 2009 DATES</div></td>
                      </tr>
                      <tr>
                        <td bgcolor='#EBEBEB'><div align='center'>
                          <table width='95%' border='0' cellspacing='0' cellpadding='0'>
                            <tr>
                              <td class='texverde'><p><br>
                                  2009-02-14 21:56:35<br>
                                That's right gang, Supanova is only around the corner, the Supanova Crew have been working harder than ever before to make 2009 its biggest series of Supanova Expos (is that possible, I thought 2008 was excellent enough). Daniel and his crew will be announcing more talent and providing updates via <a href='#'>www.supanova.com.au.</a> Greenlight Pop Culture will also keep you up to date with all the news and gossip!</p>
                                <strong><em>MELBOURNE 2009</em></strong><br>
                                  March 27-29, Royal Showgrounds<br>                                  <strong><em>BRISBANE</em></strong> <strong><em>2009</em></strong><br> 
                                  April 3-5, RNA Showgrounds<br>                                  <strong><em>SYDNEY 2009</em></strong><br>
                                  June 26-28, The Dome, Olympic Park<br>                                  <strong><em>PERTH 2009</em></strong><br>
                                  July 3-5, Claremont Showgrounds</td>
                            </tr>
                          </table>
                        </div></td>
                      </tr>
                      <tr>
                        <td><img src='http://www.greenlightmemorabilia.com/mail/images/punta4.gif' width='194' height='21'></td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><img src='http://www.greenlightmemorabilia.com/mail/images/punta2.gif' width='723' height='29'></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height='110' bgcolor='#EFEFEF'><table width='723' border='0' align='center' cellpadding='0' cellspacing='0'>
          <tr>
            <td width='507' height='77' bgcolor='#FFFFFF'><div align='center'><img src='http://www.greenlightmemorabilia.com/mail/images/botones.jpg' width='435' height='60' border='0' usemap='#Map'></div></td>
            <td width='216' bgcolor='#FFFFFF' class='fir'>PO BOX 452<br>
Darlinghurst NSW 2010<br>
Sydney, NSW Australia<br>
AUS Tel:                     +61 2 8005 7374<br>
USA Tel: (310) 7348 833<br>
Email: info@greenlightmemorabilia.com<br>
ABN: 68 450 154 725</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>

<map name='Map'><area shape='rect' coords='2,4,78,59' href='#'><area shape='rect' coords='140,4,220,61' href='#'><area shape='rect' coords='286,4,434,61' href='#'></map>
</body>
</html>"; 
mail($sendTo, $subject, $message, $headers);
?>