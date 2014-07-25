<?php
session_start();
//
ini_set('display_errors',true);
error_reporting(E_ALL);
date_default_timezone_set("Australia/Sydney");
//
if (isset($_SESSION['login'])) {
	if (!empty($_GET['qt'])) {
		$qt = $_GET['qt'];
	}
	//
	if (!empty($_GET['check'])) {
		$email = $_GET['check'];
		require_once 'classes/classFind.php';
	}
	//
	$title = isset($qt) ? "<h2>SEARCH USERS </h2>" : "<h2>PAYMENTS + INVOICES</h2>";
	//

	if (!isset($qt) && isset($_POST['search'])) {
		$email = $_POST['emailAddress'];
		$passport = $_POST['passport'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$dateFrom = $_POST['fromDate'];
		$dateTo = $_POST['toDate'];

		if (!empty($dateFrom) && !empty($dateTo)) {
			$reorgFrom = (explode('/', $dateFrom));
			$mmFrom = $reorgFrom[0];
			$ddFrom = $reorgFrom[1];
			$yyFrom = $reorgFrom[2];
			$finalDateFrom = $yyFrom . '-' . $mmFrom . '-' . $ddFrom;
			//
			$dateTo = $_POST['toDate'];
			$reorgTo = (explode('/', $dateTo));
			$mmTo = $reorgTo[0];
			$ddTo = $reorgTo[1];
			$yyTo = $reorgTo[2];
			$finalDateTo = $yyTo . '-' . $mmTo . '-' . $ddTo;
			//
		}
		require_once 'classes/classFind.php';
		//
		if (!empty($result)) {

		}
	}
	//
	if (isset($_POST['search']) && isset($qt)) {
		require_once 'classes/person.php';
		require_once 'classes/database.php';
		//
		$email = $_POST['emailAddress'];
		$fname = $_POST['firstName'];
		$lname = $_POST['lastName'];
		$passport = $_POST['passport'];
		//
		$getPerson = new person;
		//
		if (!empty($email)) {
			$choice = 1;
			$getPerson->search($choice, $email);
		}
		if (empty($email) && !empty($fname)) {
			$choice = 2;
			$getPerson->search($choice, $fname);
		}
		if (empty($email) && !empty($lname)) {
			$choice = 3;
			$lName = $lname;
			$getPerson->search($choice, $lName);
		}
		if (empty($email) && !empty($fname) && !empty($lname)) {
			$choice = 4;
			$fName = $fname;
			$lName = $lname;
			$fullName = $fName . ' ' . $lName;
			$getPerson->search($choice, $fullName);
		}
		if (!empty($passport)) {
			$choice = 7;
			$getPerson->search($choice, $passport);
		}

	}
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Main Admin Menu :: VETA</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<!-- <link href="newsletter/styles.css" rel="stylesheet" type="text/css" /> -->
		<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<style type="text/css">
			.inputError {
				border: 1px solid darkorange;
				background-color: lightyellow;
			}

			.test {

			}

			.style17 {
				font-size: 16px;
				color: #24205E;
				font-weight: bold;
			}
		</style>
	</head>

	<body>
	<br/>
	<br/>
	<table width="900" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF" class="bordes">
	<tr>
		<td valign="top" bgcolor="#FFFFFF">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td width="211" rowspan="2"><img src="images/logomodulo.gif" width="194" height="106"
					                                 align="absmiddle"/></td>
					<td align="right" valign="middle"><a href="options.php"><img src="newsletter/images/back.png"
					                                                             border="0"/></a><a
							href="logout.php"><img src="images/logoutp.png" width="104" height="44" border="0"/></a>
					</td>
				</tr>
				<tr>
					<td align="center" valign="middle"> <?php echo $title; ?></td>
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
	<div class="span6">

		<fieldset>
			<legend>Search Student</legend>
			<span class="help-block">Search a student by <strong>email</strong>, <strong>Name and Last Name</strong> or by <strong>Date
					range</strong></span>

			<form name="searchForm" id="searchForm" method="post" action="">
				<div class="input-prepend">
					<span class="add-on">@</span>
					<input class="test span3" id="emailAddress" name="emailAddress" type="text"
					       placeholder="Email Address">
				</div>
				<br/>

				<div class="input-prepend">
					<span class="add-on">
						<i class="icon-briefcase"></i>
					</span>
					<input class="test span3" id="passport" name="passport" type="text"
					       placeholder="Passport No.">
				</div>
				<br/>

				<div class="input-prepend">
                          <span class="add-on">
                            <i class="icon-user"></i>
                          </span>
					<input class="test span2" id="firstName" name="firstName" type="text" placeholder="First Name">
				</div>
				<div class="input-prepend">
					<input class="test span2" id="lastName" name="lastName" type="text" placeholder="Last Name">
				</div>
				<br/>

				<div class="input-prepend">
                          <span class="add-on">
                            <i class="icon-calendar"></i>
                          </span>
					<input class="test datepicker span2" id="fromDate" name="fromDate" type="text"
					       placeholder="From Date">
				</div>
				<div class="input-append">
					<input class="test datepicker span2" id="toDate" name="toDate" type="text" placeholder="To Date">
                          <span class="add-on">
                            <i class="icon-calendar"></i>
                          </span>
				</div>
				<br>
				<button class="btn btn-danger pull-left" name="search" id="search" onclick="searchPerson()">Search
				</button>
			</form>
		</fieldset>
	</div>
	<div class="clearfix"></div>
	<!-- User Results - Begin -->
	<?php
	if (isset($result)) {
		//var_dump($engRows);
		//var_dump($dpRows);die;
		?>
		<div id="results" class="row">
			<?php
			//printf($encodeResults['studyType'])."<br";
			if ($encodeResults['studyType'] != '' || $encodeResultsDp['studyType'] != '') {
				?>
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
					if (!empty($encodeResults)) {
						do {
							?>
							<tr id="<?=$encodeResults['prevID']?>">
								<td>
									<?php echo $encodeResults['firstName'] . " " . $encodeResults['lastName']; ?>
								</td>
								<td>
									<?php echo $encodeResults['personID']; ?>
								</td>
								<td>
									<?php echo $encodeResults['dateCreated']; ?>
								</td>
								<td>
									<div class="btn-group">
										<a class="btn btn-info btn-small dropdown-toggle" data-toggle="dropdown"
										   href="#">
											<i class='icon-pencil icon-white'> </i>
											English<?php //echo $encodeResults['studyType'];?>
											<span class="caret"></span>
										</a>
										<ul class="dropdown-menu">
											<!-- dropdown menu links -->
											<?php $i = 1;
											for ($i; $i <= $encodeResults['courses']; $i++) { ?>
												<li>
													<a href='preview-payments.php?keyVal=<?php echo $encodeResults['personID']; ?>&courseNo=<?php echo $i; ?>&prevID=<?php echo $encodeResults['prevID']; ?>'
													   target='_blank'>
														Instalment # <?php echo $i; ?> </a>
												</li>
											<?php } ?>
										</ul>
									</div>
								</td>
								<td>
                            <span class="btn btn-small btn-warning">
                              <a href='offerLetter.php?eaddress=<?php echo $encodeResults['personID']; ?>'
                                 title='Add English Course' target='_blank'>
	                              <i class="icon-pencil icon-white"></i>
                              </a>
                            </span>
                            <span class="btn btn-small btn-warning">
                              <a href='offerLetterDp.php?eaddress=<?php echo $encodeResults['personID']; ?>'
                                 title='Add Diploma' target='_blank'>
	                              <i class="icon-book icon-white"></i>
                              </a>
                            </span>
							<span class="btn btn-small btn-danger">
                                <a href="#cancelModal" data-toggle="modal" title='Cancel Studies'>
                                    <i class="icon-exclamation-sign icon-white"></i>
                                </a>
                            </span>
							</td>
							</tr>
						<?php
						} while ($encodeResults = $qrySearchResult->fetch_array());
					}
					/*<!-- Diploma Stuff Begin -->*/
					if (!empty($encodeResultsDp)) {
						//
						do {
							?>
							<tr id="<?=$encodeResultsDp['prevID']?>" >
								<td>
									<?php echo $encodeResultsDp['firstName'] . " " . $encodeResultsDp['lastName']; ?>
								</td>
								<td>
									<?php echo $encodeResultsDp['personID']; ?>
								</td>
								<td>
									<?php echo $encodeResultsDp['dateCreated']; ?>
								</td>
								<td>
									<div class="btn-group">
										<a class="btn btn-info btn-small dropdown-toggle" data-toggle="dropdown"
										   href="#">
											<i class='icon-pencil icon-white'> </i>
											Diploma<?php //echo $encodeResultsDp['studyType'];?>
											<span class="caret"></span>
										</a>
										<ul class="dropdown-menu">
											<!-- dropdown menu links -->
											<?php $j = 1;
											for ($j; $j <= $encodeResultsDp['terms']; $j++) { ?>
												<li>
													<a href='preview-paymentsDp.php?keyVal=<?php echo $encodeResultsDp['personID']; ?>&courseNo=<?php echo $j; ?>&prevID=<?php echo $encodeResultsDp['prevID']; ?>'
													   target='_blank'>
														Term # <?php echo $j; ?> </a>
												</li>
											<?php } ?>
										</ul>
									</div>
								</td>
								<td>
		                            <span class="btn btn-small btn-warning">
		                              <a href='offerLetter.php?eaddress=<?php echo $encodeResultsDp['personID']; ?>'
		                                 title='Add English Course' target='_blank'>
			                              <i class="icon-pencil icon-white"></i>
		                              </a>
		                            </span>
		                            <span class="btn btn-small btn-warning">
		                              <a href='offerLetterDp.php?eaddress=<?php echo $encodeResultsDp['personID']; ?>'
		                                 title='Add Diploma' target='_blank'>
			                              <i class="icon-book icon-white"></i>
		                              </a>
		                            </span>
									<span class="btn btn-small btn-danger cancelBtn">
		                              	<!-- <a style="height: 100%; display: block;" onclick="test(<?=$encodeResultsDp['prevID'];?>)" title='Cancel Studies'>
	                            	  		<i class="icon-exclamation-sign icon-white"></i>
		                              	</a> -->
		                              	<a onclick="cancel()" href="#" data-id="<?=$encodeResultsDp['prevID'];?>" data-toggle="modal" title='Cancel Studies'>
	                                    	<i class="icon-exclamation-sign icon-white"></i>
	                                	</a>
                                		<script>
											$(document).on("click", ".cancelBtn", function () {
											     var courseId = $(this).data('id');
											     $(".modal-body #courseId").val( courseId );
											});
										</script>
		                            </span>
								</td>
							</tr>
							<?php
							//var_dump($encodeResultsDp);
						} while ($encodeResultsDp = $qrySearchResultDp->fetch_array());
					}
					?>
					<!-- Diploma Stuff End -->
					</tbody>
				</table>
			<?php
			}
			//Non Existent Yet ... Begin
			if (!empty($encodeSearchResults)) {
				//svar_dump($encodeSearchResults);
				?>
				<p>&nbsp;</p>
				<p class="text-info span8">
					This user <strong>doesn't have any Offer Letters</strong> registered in the system yet.<br>
					However you can create one by choosing the appropriate option below.
				</p>
				<table class="table table-striped span8">
				<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email Address</th>
					<th>Study Type</th>
				</tr>
				</thead>
				<tbody>
				<?php do { ?>
					<tr id="">
						<td>
							<?php echo $encodeSearchResults['firstName']; ?>
						</td>
						<td>
							<?php echo $encodeSearchResults['lastName']; ?>
						</td>
						<td>
							<?php echo $encodeSearchResults['emailAddress']; ?>
						</td>
						<td>
							<?php echo "<a href='offerLetter.php?eaddress=" . $encodeSearchResults['emailAddress'] . "' title='Add English Course' target='_blank'><i class='icon-pencil'></i> English</a>"; ?>
						</td>
						<td>
							<?php echo "<a href='offerLetterDp.php?eaddress=" . $encodeSearchResults['emailAddress'] . "' title='Add Diploma' target='_blank'><i class='icon-book'></i> Diploma</a>"; ?>
						</td>
					</tr>
					</tbody>
					</table>
				<?php
				} while ($encodeSearchResults = $qrySearchResult->fetch_array());
			}
			?>
			<!-- Non Existent Yet ... End -->
		</div>
	<?php
	}
	?>
	<!-- User Results - End -->
	<!-- Users Search Begin -->
	<div id="showResults">
		<p></p>

		<p class="span8">These are the users found under your <strong>search criteria</strong>. You can Edit or Delete
			these records. </p>
		<table class="table table-striped span8">
			<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email Address</th>
				<!-- <th>Counsellor</th> -->
				<th>Actions</th>
			</tr>
			</thead>
			<tbody>
			<?php
			if(!empty($getPerson)){
			foreach ($getPerson->results as $key => $value) {
				echo "<tr>";
				foreach ($value as $newKey => $newValue) {
			?>
			<td><?php echo $newValue; ?></td>
			<?php
					if ($newKey == 'emailAddress'){ $email = $newValue; }
			}
			echo "<td>
	                <span class=\"btn btn-small btn-warning\">
                      <a href='update-form.php?keyVal=$email' title='Edit User'><i class=\"icon-edit icon-white\"></i></a>
                    </span>
                    <span class=\"btn btn-small btn-danger\"><a href='#' title='Delete' target='_blank'><i class=\"icon-remove-sign icon-white\"></i></a>
                    </span>
                  </td>
	          </tr>";
				}
			}
			?>
			</tbody>
		</table>
	</div>
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
	<!-- Not Found Alert - BEGIN -->
	<div id="cancelModal" class="modal hide fade">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>Cancel Course</h3>
		</div>
		<div class="modal-body">
			<p>
				<strong>Be careful!</strong> This operation <strong>CANNOT BE UNDONE</strong><br>
				Are you sure you want to continue?
			</p>
			<input type="text" name="courseId" id="courseId" value=""/>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn btn-inverse close" data-dismiss="modal">No, I'm not sure! =(</a>
			<a href="#" class="btn btn-danger" onclick="alert('disable this!')" style="margin-right: 1em">Totally! Cancel it!</a>
		</div>
	</div>
	<!-- Not Found Alert - END -->
	<!-- SCRIPTS BEGIN -->
	<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/bootstrap-alert.js">
	<script src="js/search.js" type="text/javascript"></script>
	<!-- SCRIPTS END -->
	<?php
	if (empty($getPerson->results)) {
		?>
		<script type='text/javascript'> $('#showResults').hide('fast'); </script>
	<?php } else { ?>
		<script type='text/javascript'> $('#showResults').show('2000'); </script> <?php } ?>
	</body>
	</html>
<?php
}
//else echo "<font style='font-size:1.5em; font-weight:bold; text-align:center; color:#666; font-family:arial;'>YOU HAVE TO BE A VALID USER TO ACCESS THIS MODULE....!!!'</font>";
?>