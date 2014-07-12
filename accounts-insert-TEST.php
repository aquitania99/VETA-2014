<?php
session_start();
if(isset($_SESSION['login'])){
//echo $_SESSION['login'];
//require_once('search.php');
//
$insertClient = $_POST['submit'];

if (!isset($insertClient)){
    $do = $_GET['do'];
	require_once('search_SP.php');
}
//

if (isset($insertClient)){
require_once('insert_SP.php');
///
}
//
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Main Admin Menu :: VETA</title>
<link href="newsletter/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<link href="../css/ui-lightness/jquery-ui-1.8.10.custom.css" rel="stylesheet" type="text/css" />
<script src="../js/livevalidation_standalone.js" type="text/javascript"></script>
<link href="../css/validateForm.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style17 {
	font-size: 16px;
	color: #24205E;
	font-weight: bold;
}
.auto-hint {
 color:#999;
}
/* ~~~ ~~~ */
.submit {
    background-color: #FFFF66;
    border: 1px solid #FFCC00;
    margin-top: 20px;
    padding: 3px;
    width: 110px;
    cursor: pointer;
}
.submit:hover {
	background-color: #FFCC66;
	border: 1px solid #FFCC22;
}
.fees {
	/*border-bottom: 1px solid #991C1C;*/
	border-bottom: 1px solid #999999;
    font-size: 0.8em;
    margin-top: 2em;
    padding-bottom: 1.5em;
}
.field{
	width:100px;
	line-height:1.1em;
	font-family:Verdana, Geneva, sans-serif;
	font-size:small;
	color:#666;
}
a { color:#999; text-decoration: none; }
a:hover { color:#802727; }
/* ~~~ ~~~ */
-->
</style>
</head>

<body>
<!-- /// /// -->    
<form id="searchClient" name="searchClient" method="post" action="<?=$_SERVER['PHP_SELF'];?>">
<!-- <input type="hidden" id="clientID" name="clientID" value="<?=$rowSearch['personID'];?>"/> -->
  <br />
  <br />
  <table width="900" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
    <tr>
      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="211" rowspan="2"><img src="images/logomodulo.gif" width="194" height="106" align="absmiddle" /></td>
            <td align="right" valign="middle"><a href="paymentMod.php"><img src="newsletter/images/back.png" border="0" /></a><a href="logout.php"><img src="images/logoutp.png" width="104" height="44" border="0" /></a></td>
          </tr>
          <tr>
            <td align="center" valign="middle"><h2>Payments Module</h2></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top">
          <table width="100%" border="0" cellpadding="4" cellspacing="1">
          <tr>
          <!-- 
            <td align="left" valign="middle" bgcolor="#DFEBF4">Start Year</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="startYear" id="startYear" value="<?=$rowSearch['startYear'];?>" /></td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Start Month</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4"><input type="text" name="startMonth" id="startMonth" value="<?=$rowSearch['startMonth'];?>" /></td>
             -->
            <td width="21%" align="left" valign="middle" bgcolor="#DFEBF4">Counsellor</td>
            <td width="26%" align="left" valign="middle" bgcolor="#DFEBF4">
                <select name="stCounsellor" id="stCounsellor">
                    <?php 
                        $counsellor = $rowSearch['Counsellor'];
                        switch ($counsellor) {
                        ///
                        case 'Y-Useche':
                        echo "<option value=\"\">::Choose Counsellor::</option>
                                <option selected=\"selected\" value=\"Y-Useche\">Yovanny Useche</option>
                                <option value=\"M-Ortiz\">Maricela Ortiz</option>
                                <option value=\"R-Fonseca\">Rocio Fonseca</option>
                                <option value=\"S-Moreira\">Silvia Moreira</option>";
                        break;
                        case 'M-Ortiz':
                        echo "<option value=\"\">::Choose Counsellor::</option>
                                <option value=\"Y-Useche\">Yovanny Useche</option>
                                <option selected=\"selected\" value=\"M-Ortiz\">Maricela Ortiz</option>
                                <option value=\"R-Fonseca\">Rocio Fonseca</option>
                                <option value=\"S-Moreira\">Silvia Moreira</option>";
                        break;
                        case 'R-Fonseca':
                        echo "<option value=\"\">::Choose Counsellor::</option>
                                <option value=\"Y-Useche\">Yovanny Useche</option>
                                <option value=\"M-Ortiz\">Maricela Ortiz</option>
                                <option selected=\"selected\" value=\"R-Fonseca\">Rocio Fonseca</option>
                                <option value=\"S-Moreira\">Silvia Moreira</option>";
                        break;
                        case 'S-Moreira':
                        echo "<option value=\"\">::Choose Counsellor::</option>
                                <option value=\"Y-Useche\">Yovanny Useche</option>
                                <option value=\"M-Ortiz\">Maricela Ortiz</option>
                                <option value=\"R-Fonseca\">Rocio Fonseca</option>
                                <option selected=\"selected\" value=\"S-Moreira\">Silvia Moreira</option>";
                        break;
                        default:
                        echo "<option selected=\"selected\" value=\"\">::Choose Counsellor::</option>
                                <option value=\"Y-Useche\">Yovanny Useche</option>
                                <option value=\"M-Ortiz\">Maricela Ortiz</option>
                                <option value=\"R-Fonseca\">Rocio Fonseca</option>
                                <option value=\"S-Moreira\">Silvia Moreira</option>";
                        }
                    ?>
                </select>
            </td>
            <td width="4%" align="left" valign="middle" bgcolor="#DFEBF4">&nbsp;</td>
            <td width="30%" align="left" valign="middle" bgcolor="#DFEBF4">&nbsp;</td>
            <td width="19%" align="left" valign="middle" bgcolor="#DFEBF4">&nbsp;</td>
          </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td valign="top"><fieldset>
        <legend>Personal Details</legend>
        <table width="100%" border="0" cellspacing="1" cellpadding="4">
          <tr>
            <td align="left" valign="middle" bgcolor="#F2F2F2">First Name</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">
            <input type="text" name="firstName" id="firstName" class="auto-hint" title="Enter Name" /></td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">LastName</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">
                <input type="text" name="lastName" id="lastName" class="auto-hint" title="Enter Last Name" /></td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Mobile</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">
                <input type="text" name="mobilePhone" id="mobilePhone" class="auto-hint" title="Enter Mobile Phone" /></td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Email Address</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">
                <input type="text" name="emailAddress" id="emailAddress" class="auto-hint" title="Enter Email Address" /></td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Passport No.</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">
            <input type="text" name="passportNo" id="passportNo" class="auto-hint" title="Enter Passport Number" />
            </td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Visa Expiry Date</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">
            <input type="text" name="visaExpDate" id="visaExpDate" class="datePicker auto-hint" title="yyyy-mm-dd" />
            </td>
            </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Enrolment Date</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">
                <input type="text" name="enrolmentDate" id="enrolmentDate" class="datePicker auto-hint" title="yyyy-mm-dd"/>
            </td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Course Lenght (Weeks)</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">
                <input type="text" name="courseLenght" id="courseLenght" class="auto-hint" title="Course Lenght" /></td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Total Course Cost ($)</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">
                <input type="text" name="totalCourseCost" id="totalCourseCost" class="auto-hint" title="Total Course Cost ($)"  /></td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Education Centre</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">
             <select name="eduCentre" id="eduCentre" style="font-size:x-small">
                <option value="">::Education Centre::</option>
				<?php 
				do {
				$school = strtolower($resSchoolCheck[1]);	
				echo "<option value='".$resSchoolCheck[0]."'>".ucwords($school)."</option>";
				} while($resSchoolCheck = $db->fetch_array($schoolsCheck));
				?>
             </select>   
            </td> 
            <td align="left" valign="middle" bgcolor="#DFEBF4">Course Name</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">
            <input type="text" name="courseName" id="courseName" class="auto-hint" title="Enter Course Name"/>
            </td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">Language</td>
            <td align="left" valign="middle" bgcolor="#DFEBF4">
                <select name="language" id="language">
                    <option value="">::Select Language::</option>
                    <option value="1">Spanish</option>
                    <option value="2">Portuguese</option>
                    <option value="3">English</option>
                    <option value="0">Other</option>
                </select>
            </td>
          </tr>
          <tr>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Commission %</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">
                <select name="commission" id="commission">
                   <option value='0'>:::</option>
                   <option value='10'>10%</option>
                   <option value='15'>15%</option>
                   <option value='20'>20%</option>
                   <option value='25'>25%</option>
                   <option value='30'>30%</option>
                </select>
            </td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">Number of Instalments</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2"><select id="instalments" name="instalments">
	<option value="0">Number of Instalments</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
	<option value="32">32</option>
	<option value="33">33</option>
	<option value="34">34</option>
	<option value="35">35</option>
	<option value="36">36</option>
</select></td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">&nbsp;</td>
            <td align="left" valign="middle" bgcolor="#F2F2F2">&nbsp;</td>
          </tr>
        </table>
      </fieldset></td>
    </tr>
    <tr>
      <td align="left" valign="top">
      <script type="text/javascript">
	var totalCourseCost;
	var eduEntity;
//alert ('getting there...');
	var scanDiv = $('.fees');
	var i = $(".fees").size() + 1;
	var comm;
	var newVal;
	var num;
	var div;
	//
	$(function() {
		$("#eduCentre").change(function() {
			eduEntity = $(this).val();
			//alert ('Entered Value '+ eduEntity);
		});
		//
		$("#totalCourseCost").blur(function(){
			totalCourseCost = $(this).val();
			//alert ('Entered Value '+ totalCourseCost);
		});
		//
		$("#commission").change(function() {
		newVal = $(this).val();
		//do something
		//alert("The new value is: " + $(this).val());
		});
        
        $("#instalments").change(function(){
			num = $(this).val();
			//alert ('Number of Instalments : '+ num);
			div = totalCourseCost/num;
			//alert ('The monthly fee will be : '+ div);
			comm = (div*newVal)/100;
			//alert ('commission?'+ comm);
			comm = parseFloat(comm);
			//
			var GstExc = (comm*10)/100;
			//alert ('GST?'+ GstExc);
			GstExc = parseFloat(GstExc);
			//
			var GstInc = (comm+GstExc);
			//alert ('Total to pay?'+ GstInc);
			GstInc = parseFloat(GstInc);
			if (i <= num) {
				do {
		            //alert (i +' '+ $(comm));	  
		            $('<div class="fees">'+'<table width="100%" border="0" cellspacing="1" cellpadding="4">'+
  			'<tr><td align="left" valign="middle" bgcolor="#F2F2F2"><label>Payment'+i+' $</label>'+
    		'</td><td align="left" valign="middle" bgcolor="#F2F2F2">'+
			'<input type="text" id="' + i + '" class="field" name="payments[]" value="'+div.toFixed(3)+'" />'+
    		'</td><td align="left" valign="middle" bgcolor="#F2F2F2"><label>Commission $</label></td>'+
    		'<td align="left" valign="middle" bgcolor="#F2F2F2">'+
   	  		'<input type="text" class="field" name="realPayment[]" value="'+comm.toFixed(3)+'" />'+
    		'</td><td align="left" valign="middle" bgcolor="#F2F2F2"><label>GST(10%)</label></td>'+
    		'<td align="left" valign="middle" bgcolor="#F2F2F2">'+
	    	'<input type="text" style="width:65px;" class="field" name="GSTexc[]" value="'+GstExc.toFixed(3)+'" />'+
    		'</td></tr>'+
  			'<tr><td align="left" valign="middle" bgcolor="#DFEBF4"><label>Comm + GST $</label></td>'+
    		'<td align="left" valign="middle" bgcolor="#DFEBF4">'+
			'<input type="text" class="field" name="GSTinc[]" value="'+GstInc.toFixed(3)+'" /></td>'+
    		'<td align="left" valign="middle" bgcolor="#DFEBF4"><label>Invoice No.</label></td>'+
    		'<td align="left" valign="middle" bgcolor="#DFEBF4">'+
			'<input type="text" class="field" name="InvoiceNumber[]" /></td>'+
    		'<td align="left" valign="middle" bgcolor="#DFEBF4"><label>Comm. Deducted Upfront</label></td>'+
    		'<td align="left" valign="middle" bgcolor="#DFEBF4">'+
    		'<input type="checkbox" style="width:15px;" name="CommDeducted[]" class="pay" /></td></tr>'+
  			'<tr><td align="left" valign="middle" bgcolor="#F2F2F2"><label>Student Payment Due Date</label></td>'+
    		'<td align="left" valign="middle" bgcolor="#F2F2F2">'+
    		'<input type="text" name="PaymentDateDue[]" class="datePicker field" title="yyyy-mm-dd" id="'+i+'PaymentDateDue" /></td>'+
    		'<td align="left" valign="middle" bgcolor="#F2F2F2"><label>Student Paid Date</label></td>'+
    		'<td align="left" valign="middle" bgcolor="#F2F2F2">'+
    		'<input type="text" name="StudentPaidDate[]" class="datePicker field" title="yyyy-mm-dd"  /></td>'+
    		'<td align="left" valign="middle" bgcolor="#F2F2F2"><label>Student Total($) Paid</label></td>'+
    		'<td align="left" valign="middle" bgcolor="#F2F2F2">'+
    		'<input type="text" name="TotalPaid[]" class="field" id="'+i+'"TotalPaid" /></td></tr>'+
    		'<tr><td align="left" valign="middle" bgcolor="#DFEBF4"><label>College Payment Due</label></td>'+
    		'<td align="left" valign="middle" bgcolor="#DFEBF4">'+
    		'<input type="text" name="ColPaymentDateDue[]" class="datePicker field" title="yyyy-mm-dd" /></td>'+
    		'<td align="left" valign="middle" bgcolor="#DFEBF4"><label>College Date Paid</label></td>'+
    		'<td align="left" valign="middle" bgcolor="#DFEBF4">'+
    		'<input type="text" name="CollegeDatePaid[]" class="datePicker field" title="yyyy-mm-dd" /></td>'+
    		'<td align="left" valign="middle" bgcolor="#DFEBF4"><label>College Total($) Paid</label></td>'+
    		'<td align="left" valign="middle" bgcolor="#DFEBF4">'+
    		'<input type="text" name="ColTotalPaid[]" class="field" id="'+i+'"ColTotalPaid" /></td></tr>'+
                '<tr><td bgcolor="#F2F2F2"><label style="float:right;">Marketing Incentive </label></td>'+
                '<td align="left" valign="middle" bgcolor="#F2F2F2"><input name="marketingIncentive[]" type="checkbox" class="pay" style="width:15px;" id="'+i+'marketingIncentive"/></td>'+
                '<td bgcolor="#F2F2F2"><input type="text" name="mIncentive[]" class="field mkIncentive" id="'+i+'mIncentive" /></td>'+
                '<td bgcolor="#F2F2F2">&nbsp;</td>'+
                '<td bgcolor="#F2F2F2"><label style="float:right;">Generate Invoice >> </label></td>'+
                '<td bgcolor="#F2F2F2"><a href="#" onclick="callAlert();" title="" style="font-size:.8em;">Click to Generate the Invoice</a></td></tr></table></div>') .fadeIn('slow').appendTo('#inputs');
		        	i++;
		        	//return false;
		        }	while (i <= num);
                 /**/
                $(document).ready(function(){
                    $('#'+i+'mIncentive').css("display","none");
                    $('#'+i+'marketingIncentive').click(function(){
                    // If checked
                    if ($('#'+i+'marketingIncentive').is(":checked"))
                    {
                            //hide the hidden div
                            $('#'+i+'mIncentive').show("fast");
                    }
                    else
                    {
                            //otherwise, show it
                            $('#'+i+'mIncentive').hide("fast");
                    }
                    /**/
                    });
                });  
             }
        });
        
        $('body').on('focus',".datePicker", function(){
		    $(this).datepicker({ dateFormat: "yy-mm-dd",
										changeMonth: true,
										changeYear: true,
										yearRange: "1970:2080"									
							});
		});

        $('#remove').click(function() {
            if(i > 1) {
                $('.fees:last').remove();
                i--;
            }
        });
        $('#reset').click(function() {
            while(i > 1) {
                $('.fees:last').remove();
                i--;
                $("#instalments").val('0');
                $("#commission").val('0');
                $("#studentFee").val('0');
            }
        });
    ///
    var balanceOwing;
    
		$('#balance')
     // here's our click function for when the forms submitted
        
        $('#Insert').click(function(){
     
        var answers = [];
        /*
        $.each($('.field'), function() {
            answers.push($(this).val());
        });
        */
        $.each($('#commissions'), function() {
            //answers.push($(this).text());
        	answers.push("Choose a Commission %");
        });
        //
        $.each($('#instalments'), function() {
            answers.push($(this).val());
        });
        //
        if(answers.length == 0) {
            answers = "none";
        }  
     
        //alert(answers);
        document.insertForm.submit();
        //return false;
     
        });

        
});
	
</script>
      <fieldset>
        <legend>Payment History</legend>
<table width="871">
<tr>
	<td>
		<!-- <a id="remove" href="#">Remove</a> | --> <a id="reset" href="#">Reset</a>
	</td>
</tr>
<tr>
   <td id="inputs">&nbsp;</td>
</tr>
</table> 
      </fieldset></td>
    </tr>
<!--      
    <tr>
      <td align="left" valign="top"><fieldset>
        <legend>Financial Details</legend>
        <table width="100%" border="0" cellspacing="1" cellpadding="4">
          <tr>
            <td bgcolor="#DFEBF4">Balance Owing</td>
            <td bgcolor="#DFEBF4"><input type="text" name="balance" id="balance" /></td>
            <td bgcolor="#DFEBF4">Number of Fees Paid</td>
            <td bgcolor="#DFEBF4"><input type="text" name="numberFeesPaid" id="numberFeesPaid" class="auto-hint" title="Number of Fees Paid" /></td>
            <td bgcolor="#DFEBF4">Total Paid to Date</td>
            <td bgcolor="#DFEBF4"><input type="text" name="totalPaidToDate" id="totalPaidToDate" /></td>
          </tr>
          <tr>
            <td bgcolor="#F2F2F2">Next Payment Due Date</td>
            <td bgcolor="#F2F2F2"><input type="text" name="nextPaymentDueDate" id="nextPaymentDueDate" class="datePicker auto-hint" title="yyyy-mm-dd" /></td>
            <td bgcolor="#F2F2F2">&nbsp;</td>
            <td bgcolor="#F2F2F2">&nbsp;</td>
            <td bgcolor="#F2F2F2">&nbsp;</td>
            <td colspan="3" bgcolor="#F2F2F2">&nbsp;</td>
          </tr>
        </table>
      </fieldset></td>
    </tr> 
  -->
    <tr>
      <td align="left" valign="top"><fieldset>
        <legend>Notes</legend>
        <table width="100%" border="0" cellspacing="1" cellpadding="4">
          <tr>
            <td bgcolor="#F2F2F2">General Comments</td>
            <td colspan="3" bgcolor="#F2F2F2">
                <textarea name="genComments" id="genComments" cols="90" rows="2"></textarea>
            </td>
          </tr>
          <tr>
            <td bgcolor="#DFEBF4">Added By</td>
            <td bgcolor="#DFEBF4"><?=$_SESSION['login'];?><input type="hidden" name="<?php echo $_SESSION['login'];?>" id="vetaAdminUser" /></td>
            <td bgcolor="#DFEBF4">Created on</td>
            <td bgcolor="#DFEBF4"><?=date('l jS \of F Y h:i:s A');?><input type="hidden" name="<?php echo date('l jS \of F Y h:i:s A');?>" id="insertDate" /></td>
          </tr>
        </table>
      </fieldset></td>
    </tr>
    <tr class="hidden">
      <td height="40" align="left" valign="top">
        <div align="center">
            <input type="button" name="goBack" id="goBack" value="< Back to Search" onclick="window.location='accounts-insert-TEST.php';" />
            <input type="submit" name="submit" id="submit" value="Insert New Client >" />    
        </div>
      </td>
    </tr>
  </table>
</form>
<script src="../js/vetaAdmin-InsertUser.js" type="text/javascript"></script>
<br />
<br />
</body>
</html>
<?php
}
else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
?>