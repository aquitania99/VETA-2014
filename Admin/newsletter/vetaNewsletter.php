<?php
session_start();
//////////////////////////////////////////////////////
include('../inc/queryNewsletter.php');

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
<title>Preview Newsletter VETA</title>
<style type='text/css'>
<!--
<style type='text/css'>
<!--
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
}
h4 {
	font-size: 20px;
	color: #333;
	font-weight: normal;
	margin: 0px;
	font-variant: normal;
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
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top" bgcolor="#E5E0D9"><table width="600" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" valign="top" bgcolor="#FFFFFF"><table width="600" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="30" align="center" valign="middle" bgcolor="#EB0310"><h2>Hi!, <?php echo $Name." ".$LastName;?></h2></td>
          </tr>
          <tr>
            <td align="center" valign="top"><table width="560" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="130" align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="72%" height="130" align="left" valign="top"><img src="http://www.australiaveta.com.au/Admin/newsletter/images/logo-viva-estudie-y-trabaje-en-australia.gif" width="197" height="117" /></td>
                    <td width="28%" align="right" valign="middle"><table width="155" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="25" align="left" valign="middle"><strong>Keep Up With Us</strong></td>
                      </tr>
                      <tr>
                        <td height="24" align="left" valign="middle"><h6><a href="https://www.facebook.com/australiaveta" target="_blank">Facebook</a></h6></td>
                      </tr>
                      <tr>
                        <td height="24" align="left" valign="middle"><h6><a href="https://twitter.com/veta_education" target="_blank">Twitter</a></h6></td>
                      </tr>
                      <tr>
                        <td height="24" align="left" valign="middle"><h6><a href="http://www.youtube.com/user/VETAEDUCATION/feed" target="_blank">Youtube</a></h6></td>
                      </tr>
                      <tr>
                        <td height="24" align="left" valign="middle"><h6><a href="http://www.australiaveta.com.au/" target="_blank">www.australiaveta.com.au</a></h6></td>
                      </tr>
                    </table></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td height="214" align="left" valign="top"><img src="http://www.australiaveta.com.au/Admin/newsletter/images/banner5-viva-estudie-y-trabaje-en-australia.jpg" width="560" height="214" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="200" align="center" valign="middle" bgcolor="#1F1D5D"><table width="520" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="left" valign="top"><h1><?php echo $titleEight;?></h1></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><h2><?php echo $textOne; ?></h2></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="410" align="left" valign="top"><table width="410" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="left" valign="top"><img src="../../<?php echo $imageThree;?>" width="410" /></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="left" valign="top"><h3><?php echo $titleThree;?></h3></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="left" valign="top"><?php echo $textThree;?></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="194" height="170" align="left" valign="top"><img src="../../<?php echo $imageFour;?>" width="194" height="170" /></td>
                            <td>&nbsp;</td>
                            <td width="194" align="left" valign="top"><img src="../../<?php echo $imageFive;?>" width="194" height="170" /></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="top"><h4><?php echo $titleFour;?></h4></td>
                            <td>&nbsp;</td>
                            <td align="left" valign="top"><h4><?php echo $titleFive;?></h4></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="left" valign="top"><p><?php echo $textFour;?></p></td>
                            <td>&nbsp;</td>
                            <td align="left" valign="top"><p><?php echo $textFive;?> </p></td>
                          </tr>
                        </table></td>
                      </tr>
                    </table></td>
                    <td width="19">&nbsp;</td>
                    <td width="128" align="left" valign="top"><table width="128" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="113" align="left" valign="top"><img src="http://www.australiaveta.com.au/Admin/newsletter/images/4g.jpg" width="128" height="114" /></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="600" align="left" valign="top"><img src="../../<?php echo $imageEight;?>" width="128" height="600" /></td>
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
            <td height="150" align="center" valign="top" bgcolor="#1F1D5D"><table width="560" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="185" height="20">&nbsp;</td>
                <td width="211" height="20">&nbsp;</td>
                <td width="164" height="20">&nbsp;</td>
              </tr>
              <tr>
                <td height="20" align="left" valign="middle"><h5><strong>APPLICATION FOR</strong></h5></td>
                <td height="20" align="left" valign="middle"><h5><strong>INFORMATION</strong></h5></td>
                <td height="20"><h5><strong>OTHERS</strong></h5></td>
              </tr>
              <tr>
                <td><h5>&nbsp;</h5></td>
                <td><h5>&nbsp;</h5></td>
                <td><h5>&nbsp;</h5></td>
              </tr>
              <tr>
                <td height="80" align="left" valign="top"><h5>Student Visas<br />
                  English Courses<br />
                  Vocational Courses<br />
                  Universities Pre and <br />
                  Post Graduate</h5></td>
                <td height="80" align="left" valign="top"><h5>Permanent Residency<br />
                  Company Sponsorships<br />
                  Partner Visas<br />
                  University Scholarship<br />
                  Engineers Migration Options</h5></td>
                <td height="80" align="left" valign="top"><h5>Accommodation<br />
                  Tax File Number<br />
                  Jobs Option<br />
                  Proof Of Age Card<br />
                  Booking for &quot; White Card,<br />
                  RSA, RCG and RFH Courses</h5></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td bgcolor="#E5E0D9"><br />
              T+61 2 9299 14 58 |  F+61 2 9299 92 14 | Suite 102, Level 1, 22 Market St. Sydney, NSW 2000, Australia<br />
              <a href="http://www.australiaveta.com.au" target="_blank">www.australiaveta.com.a</a><a href="http://www.australiaveta.com.au" target="_blank">u</a> | <a href="mailto:admissions@australiaveta.com.au">admissions@australiaveta.com.au</a><a href="mailto:info@australiaveta.com.au"></a><br />
              Copyright © *|2012| VIVA Y ESTUDIE EN AUSTRALIA, Rights Reserved. <br />
              <a href="#">Unsubscribe</a> from this list<br />
              <br /></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
