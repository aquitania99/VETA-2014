<?php
session_start();
//
date_default_timezone_set("Australia/Sydney");
//
$title = "VETA - Counsellors Admin Tool";
//
require_once 'classes/database.php';
require_once 'classes/counsellors.php';
//
//
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	//
	$sql_query  = 'SELECT * ';
	$sql_query .= 'FROM counsellors ';
	$sql_query .= 'ORDER BY cID ASC ';
	//
	$result = $mysqli->query($sql_query);
	//$row_cnt = $result->num_rows;
	//
	$row = $result->fetch_array();
	//
	if (isset($_POST['search']) || isset($_POST['update']))
	{
		$action = $_POST['action'];
		//
		$recID = $_POST['recID'];
		$email = $_POST['emailAddress'];
		$fname = $_POST['firstName'];
		$lname = $_POST['lastName'];
		//
		$mobile = $_POST['mobile'];
		$password = $_POST['password'];
		//
		$counsellors = new counsellors();
		//
		switch ($action) {
			case '1':
				$counsellors->add($email, $fname, $lname, $mobile, $password);
				break;

			case '2':
				$counsellors->Update($recID, $email, $fname, $lname, $mobile, $password);
				break;

			default:
				# code...
				break;
		}
		//
	}
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Main Admin Menu :: VETA</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
		<!-- <link href="newsletter/styles.css" rel="stylesheet" type="text/css" /> -->
		<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
		
		<style type="text/css">
			.inputError{
				border: 1px solid darkorange;
				background-color: lightyellow;
			}
			.hidden{
				display:none;
			}
			.visible{
				display:inline-block;
			}
			.style17 {
				font-size: 16px;
				color: #24205E;
				font-weight: bold;
			}
		</style>
	</head>

	<body>
	<br />
	<br />
	<table width="960" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
	<tr>
		<td valign="top" bgcolor="#FFFFFF">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td width="211" rowspan="2"><img src="images/logomodulo.gif" width="194" height="106" align="absmiddle" /></td>
					<td align="right" valign="middle"><a href="options.php"><img src="newsletter/images/back.png" border="0" /></a><a href="logout.php"><img src="images/logoutp.png" width="104" height="44" border="0" /></a></td>
				</tr>
				<tr>
					<td align="center" valign="middle"><h2><?php echo $title; ?></h2></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
	<td valign="middle" bgcolor="#FFFFFF">
	<fieldset>
	<legend></legend>
	<table width="100%" border="0" align="center" cellpadding="4" cellspacing="4">
	<tr>
	<td width="0" height="100">
	<!--
	<div style="width:100%">
	<div id="container" style="width:750px; margin:auto; padding-top:3em;">
	-->
	<div class="span12 pull-left">
	    <table class="table table-striped table-condensed">
			<thead>
				<tr>
					<th>Veta account</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Name</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$i=0;
				do { 
					$i++;
					$fname = $row['firstName'];
					$lname = $row['LastName'];
					$recID = $row['recID'];
					$userKey = strtolower($fname[0].$lname);
				?>
				<tr>
					<td>
						<?php echo $userKey; ?>
						<input type="hidden" id="recID<?php echo $i;?>" value="<?php echo $recID;?>" />
						<input type="hidden" id="access<?php echo $i;?>" value="<?php echo $userKey;?>" />
					</td>
					<td>
						<?php echo ucwords($row['firstName']." ".$row['LastName']);?>
						<input type="hidden" id="fullName<?php echo $i;?>" value="<?php echo ucwords($row['firstName']." ".$row['LastName']);?>" />
					</td>
					<td>
						<?php echo strtolower($row['email']);?>
						<input type="hidden" id="emailAddress<?php echo $i;?>" value="<?php echo strtolower($row['email']);?>" />
					</td>
					<td>
						<?php echo '0'.$row['mobile'];?>
						<input type="hidden" id="mobilePhone<?php echo $i;?>" value="<?php echo $row['mobile'];?>" />
					</td>
					<td>
						<!-- <span><button id="editCounsellor" onclick="edit(<?php echo ucwords($row['firstName']).", ".ucwords($row['LastName']).", '".strtolower($row['email'])."', ".$row['mobile'];?>)" title="Edit Counsellor"><i class="icon-edit"></i> Edit</button></span> -->
						<span>
							<input type="hidden" id="data<?php echo $i;?>" value=<?php echo  $row['recID'].','.$userKey.','.ucwords($row['firstName']).','.$row['LastName'].','.strtolower($row['email']).','.$row['mobile']; ?> />
							<button id="editCounsellor<?php echo $i;?>" onclick='edit(<?php echo $i;?>)' title="Edit Counsellor"><i class="icon-edit"></i> Edit</button>
						</span>
						<span>&nbsp;</span>
						<span><button id="deleteCounsellor<?php echo $i;?>" onclick="del(<?php echo $i;?>)" title="Delete Counsellor"><i class="icon-remove-circle"></i> Delete</button></span>
						<span>&nbsp;</span>
						<span><button id="addCounsellor<?php echo $i;?>" onclick="add()" title="Add New Counsellor"><i class="icon-plus-sign"></i> Add</button></span>
					</td>
				</tr>
				<?php } while ($row = $result->fetch_array()); ?>
			</tbody>
		</table>	
	</div>

	<div class="span6 pull-left hidden" id="actionsForm">

		<fieldset>
			<legend>Counsellors Console...</legend>
			<span class="help-block">
				<strong>Create & Update </strong> student counsellors.
			</span>
			<form name="searchForm" id="searchForm" method="post" action="">
			<input type="hidden" id="recID" name="recID" />
				<div class="input-prepend">
                          <span class="add-on">
                            <i class="icon-user"></i>
                          </span>
					<input class="test span2" id="firstName" name="firstName" type="text" placeholder="First Name">
				</div>
				<div class="input-prepend">
					<input class="test span2" id="lastName" name="lastName" type="text" placeholder="Last Name">
				</div>
				<br />
				<div class="input-prepend">
					<span class="add-on"><i class="icon-envelope"></i></span>
					<input class="test span3" id="emailAddress" name="emailAddress" type="text" placeholder="Email Address">
				</div>
				<br />
				<div class="input-prepend">
					<span class="add-on"><i class="icon-bell"></i></span>
					<input class="test span3" id="mobile" name="mobile" type="text" placeholder="Mobile number">
				</div>
				<br>
				<div class="input-prepend">
					<span class="add-on"><i class="icon-lock"></i></span>
					<input class="test span3" id="password" name="password" type="text" placeholder="Counsellor Password">
				</div>
				<br>
				<input type="hidden" id="action" name="action" />
				<button class="btn btn-danger pull-left" name="search" id="search"  ><i class="icon-user icon-white"></i> New Counsellor</button>
			</form>
		</fieldset>
	</div>
	<div class="clearfix"></div>
	<!-- User Results - Begin -->
	<?php
	//var_dump($result);die;
	if (!isset($result)) { ?>
	<table class="table table-striped span8">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Creation Date</th>
				<th>Study Type</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
		<?php
		if (!empty($encodeResults)){
			//do {
		?>
			<tr>
				<td>
					<?php echo $encodeResults['firstName']." ".$encodeResults['lastName'];?>
				</td>
				<td>
					<?php echo $encodeResults['personID'];?>
				</td>
				<td>
					<?php echo $encodeResults['dateCreated'];?>
				</td>
				<td>
					<div class="btn-group">
						<a class="btn btn-info btn-small dropdown-toggle" data-toggle="dropdown" href="#">
							<i class='icon-pencil icon-white'> </i> English<?php //echo $encodeResults['studyType'];?>
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<!-- dropdown menu links -->
							<?php $i = 1; for ($i; $i <= $encodeResults['courses']; $i++) { ?>
								<li>
									<a href='preview-payments.php?keyVal=<?php echo $encodeResults['personID'];?>&courseNo=<?php echo $i;?>&prevID=<?php echo $encodeResults['prevID'];?>' target='_blank'>
										Instalment # <?php echo $i;?> </a>
								</li>
							<?php } ?>
						</ul>
					</div>
				</td>
				<td>
		            <span class="btn btn-small btn-warning">
						<a href='offerLetter.php?eaddress=<?php echo $encodeResults['personID'];?>' title='Add English Course' target='_blank'>
							<i class="icon-pencil icon-white"></i>
						</a>
		            </span>
		            <span class="btn btn-small btn-warning">
						<a href='offerLetterDp.php?eaddress=<?php echo $encodeResults['personID'];?>' title='Add Diploma' target='_blank'>
							<i class="icon-book icon-white"></i>
						</a>
		            </span>
				</td>
			</tr>
			<?php
			//} while($encodeResults = $qrySearchResult->fetch_array());
		}
		?>
		<!-- Diploma Stuff End -->
		</tbody>
	</table>
	<?php } ?>
	<!-- User Results - End -->
	
	<!-- Users Search Begin -->
	<!-- Users Search End -->
	</td>
	</tr>
	</table>
	</fieldset>
	</td>
	</tr>
	<tr>
		<td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
	</tr>
	</table>
	<!-- SCRIPTS BEGIN -->
	<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/search.js" type="text/javascript"></script>
	</body>
	</html>