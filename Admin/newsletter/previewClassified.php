<?php
session_start();
//////////////////////////////////////////////////////
include('../inc/queryClassified.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Classifieds Module - VETA</title>
<style type="text/css">
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
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #FFFFFF; background-image: url(images/fondocla.gif); background-repeat: no-repeat; background-position: center center; font-weight: bold; height: 39px; }
.style9 {font-size: 16px}
</style>
</head>

<body>
<div id="top-container">
<div id="preview-static-content" class="transparent_class">
	  <?php 
        /////////////////////////////////////////////////////
		$testEmail = $_POST['testEmail'];
		$approved = $_POST['sendEmail'];
		//echo "this is the testing email...".$testEmail."<br />";
			if ($testEmail!='')
			{
				//echo "alrightio...inside the if...".$testEmail."><br />";
				include('../sendEmail/classifieds-email.php');
			}
			if ($approved=='yes')
			{
				$sendEmail=$approved;
				include('../sendEmail/classifieds-email.php');
			}
        /////////////////////////////////////////////////////
        ?>
        <form action="" method="post">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="0" height="50" align="center" valign="middle"><a href="modifyClassified.php?ID=<?php echo $afterID;?>" class="style7"> <strong>Click Here!!</strong></a><span class="style4"> if you want to modify the content</span></td>
            <td width="0" height="50" align="center" valign="middle"><span class="style5">
              <label for="test"><strong>Test Email</strong></label> 
            </span>
            <input name="testEmail" id="testEmail" /><input type="image" id="testIt" src="images/sendtest.png" align="absmiddle" title="test Classifieds Email" alt="test Classifieds Email"  /></td>
            <td width="0" align="center" valign="middle"><span class="style4">
                <input type="radio" name="sendEmail" value="yes" />
              send
              <input type="radio" name="sendEmail" value="no" checked="checked" />
              don't send!
              <input type="image" id="sendNewsletter" name="sendNewsletter" value="" width="126" height="44" src="images/sendmail.png" align="absmiddle" title="Send Newsletter" alt="Send Newsletter"  /></td>
            <td width="0" align="right" valign="middle"><a href="http://www.australiaveta.com.au/Admin/menu.php"><img src="images/back.png" width="126" height="44" border="0" align="absmiddle"></a></td>
            <td width="0" height="50" align="right" valign="middle"><a href="../logout.php"><img src="images/logoutp.png" alt="Logout" width="104" height="44" border="0" align="absmiddle"></a></td>
          </tr>
        </table>

</form>
  </div>
</div>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top" bgcolor="#E5E0D9"><table width="600" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" valign="top" bgcolor="#FFFFFF"><table width="600" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="25" align="center" valign="middle" bgcolor="#E5E0D9">Is this email not displaying correctly?  <a href="#">View it in your browser</a>.</td>
          </tr>
          <tr>
            <td height="30" align="center" valign="middle" bgcolor="#EB0310"><h2>Hi!,<?php echo $_SESSION['login'];?></h2></td>
          </tr>
          <tr>
            <td align="center" valign="top"><table width="560" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="130" align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="72%" height="130" align="left" valign="top"><img src="images/logo-viva-estudie-y-trabaje-en-australia.gif" width="197" height="117" /></td>
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
                <td height="214" align="left" valign="top"><img src="images/banner-viva-estudie-y-trabaje-en-australia.jpg" width="560" height="214" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="410" align="left" valign="top"><table width="410" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="42" align="left" valign="middle" bgcolor="#1F1D5D"><h1>&nbsp;Jobs</h1></td>
                      </tr>
                      <tr>
                        <td height="15" align="left" valign="top" bgcolor="#EFEFEF"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="5">
                          <tr>
                            <td align="left" valign="top"><p><br />
<?php echo $textOne;?></p></td>
                          </tr>
                        </table></td>
                        </tr>
                      <tr>
                        <td>&nbsp;</td>
                        </tr>
                      <tr>
                        <td height="42" align="left" valign="middle" bgcolor="#CC0000"><h1>&nbsp;Accommodation</h1></td>
                        </tr>
                      <tr>
                        <td bgcolor="#EFEFEF"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="5">
                          <tr>
                            <td align="left" valign="top"><p><br /><?php echo $textThree;?>
                              </p></td>
                          </tr>
                        </table></td>
                      </tr>
                      </table></td>
                    <td width="19">&nbsp;</td>
                    <td width="128" align="left" valign="top"><table width="128" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="113" align="left" valign="top"><img src="images/banne3-viva-estudie-y-trabaje-en-australia.jpg" width="128" height="113" /></td>
                        </tr>
                      <tr>
                        <td>&nbsp;</td>
                        </tr>
                      <tr>
                        <td height="600" align="left" valign="top"><img src="images/banne4-viva-estudie-y-trabaje-en-australia.jpg" width="128" height="600" /></td>
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
              <a href="http://www.australiaveta.com.au" target="_blank">www.australiaveta.com.au</a> |  <a href="mailto:admissions@australiaveta.com.au">admissions@australiaveta.com.au</a><br />
              Copyright © *|2012| VIVA Y ESTUDIE EN AUSTRALIA, Rights Reserved. <br />
              <a href="http://www.australiaveta.com.au/Admin/newsletter/unsubscribe.php?usr=$usr">Unsubscribe</a> from this list<br />
              <br /></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
