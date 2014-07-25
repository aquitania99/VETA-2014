<?php
//
include_once 'database.php';
//////////////////////////////////
$db = Database::getInstance();
$mysqli = $db->getConnection();
//////////////////////////////////

//echo "PROBABLY!??<br>";
if (!empty($email)) {
	//$searchUser  = 'SELECT pt.firstName as firstName, pt.lastName as lastName, pp.quoteType as studyType, pp.quoteCreated as dateCreated ';
	//$searchUser .= 'FROM persons pt, payments_preview pp ';
	$searchUser = 'SELECT pp.prevID, pt.personID AS ID, pt.firstName as firstName, pt.lastName as lastName, pp.personID as personID, pp.quoteType as studyType, pp.instalmentsNo as courses, pp.quoteCreated AS dateCreated ';
	$searchUser .= 'FROM payments_preview pp ';
	$searchUser .= 'JOIN persons pt ON pt.emailAddress = pp.personID ';
	$searchUser .= 'WHERE pp.personID = \'' . $email . '\' ';
	$searchUser .= 'ORDER BY pp.quoteCreated DESC';
	//echo($searchUser)."<br>";
	$qrySearchResult = $mysqli->query($searchUser);
	//
	$engRows = $qrySearchResult->num_rows;
	//
	$encodeResults = $qrySearchResult->fetch_array();
	//
	$searchUsrDp = 'SELECT pt.personID AS ID, pt.firstName as firstName, pt.lastName as lastName, ppd.prevID, ppd.personID as personID, ppd.quoteType as studyType, ppd.courseDuration as terms, ppd.quoteCreated AS dateCreated ';
	$searchUsrDp .= 'FROM payments_preview_dp ppd ';
	$searchUsrDp .= 'JOIN persons pt ON pt.emailAddress = ppd.personID ';
	$searchUsrDp .= 'WHERE ppd.personID = \'' . $email . '\' ';
	$searchUsrDp .= 'ORDER BY ppd.quoteCreated DESC';
	//var_dump($searchUsrDp);die;
	$qrySearchResultDp = $mysqli->query($searchUsrDp);
	//
	$encodeResultsDp = $qrySearchResultDp->fetch_array();
	//
	$dpRows = $qrySearchResultDp->num_rows;
	//
	if (!empty($encodeResults) || !empty($encodeResultsDp)) {
		$result = array();
	}

	
	if (empty($encodeResults) && empty($encodeResultsDp)) {
		//echo 'No records found for this period....<br>';
		//
		$searchUser = 'SELECT pt.personID AS ID, pt.firstName as firstName, pt.lastName as lastName, emailAddress as emailAddress ';
		$searchUser .= 'FROM persons pt ';
		$searchUser .= 'WHERE pt.emailAddress = \'' . $email . '\' ';
		//print_r($searchUser);die;
		$qrySearchResult = $mysqli->query($searchUser);
		//
		$encodeSearchResults = $qrySearchResult->fetch_array();
		//
		//var_dump($encodeSearchResults);die;
		if (!empty($encodeSearchResults)) {
			$result = array();
		}
		else { error(); }
	}
	
	return;
}
//
if (empty($email) && !empty($passport)) {
	//$searchUser  = 'SELECT pt.firstName as firstName, pt.lastName as lastName, pp.quoteType as studyType, pp.quoteCreated as dateCreated ';
	//$searchUser .= 'FROM persons pt, payments_preview pp ';
	$searchUser = 'SELECT pp.prevID, pt.personID AS ID, pt.firstName as firstName, pt.lastName as lastName, pp.personID as personID, pp.quoteType as studyType, pp.instalmentsNo as courses, pp.quoteCreated AS dateCreated ';
	$searchUser .= 'FROM payments_preview pp ';
	$searchUser .= 'JOIN persons pt ON pt.emailAddress = pp.personID ';
	$searchUser .= 'WHERE pp.personID = (select emailAddress from persons where passNumber = \'' . $passport. '\') ';
	$searchUser .= 'ORDER BY pp.quoteCreated DESC';
	//echo($searchUser)."<br>";
//	var_dump($searchUser);
	$qrySearchResult = $mysqli->query($searchUser);
	//
	$engRows = $qrySearchResult->num_rows;
	//
	$encodeResults = $qrySearchResult->fetch_array();
	//
	$searchUsrDp = 'SELECT pt.personID AS ID, pt.firstName as firstName, pt.lastName as lastName, ppd.prevID, ppd.personID as personID, ppd.quoteType as studyType, ppd.courseDuration as terms, ppd.quoteCreated AS dateCreated ';
	$searchUsrDp .= 'FROM payments_preview_dp ppd ';
	$searchUsrDp .= 'JOIN persons pt ON pt.emailAddress = ppd.personID ';
	$searchUsrDp .= 'WHERE ppd.personID = (select emailAddress from persons where passNumber = \'' . $passport. '\') ';
	$searchUsrDp .= 'ORDER BY ppd.quoteCreated DESC';
	//var_dump($searchUsrDp);die;
	$qrySearchResultDp = $mysqli->query($searchUsrDp);
	//
	$encodeResultsDp = $qrySearchResultDp->fetch_array();
	//
	$dpRows = $qrySearchResultDp->num_rows;
	//
	if (!empty($encodeResults) || !empty($encodeResultsDp)) {
		$result = array();
	}

	
	if (empty($encodeResults) && empty($encodeResultsDp)) {
		//echo 'No records found for this period....<br>';
		//
		$searchUser = 'SELECT pt.personID AS ID, pt.firstName as firstName, pt.lastName as lastName, emailAddress as emailAddress ';
		$searchUser .= 'FROM persons pt ';
		$searchUser .= 'WHERE pt.emailAddress = (select emailAddress from persons where passNumber = \'' . $passport. '\') ';
		//print_r($searchUser);die;
		$qrySearchResult = $mysqli->query($searchUser);
		//
		$encodeSearchResults = $qrySearchResult->fetch_array();
		//
		//var_dump($encodeSearchResults);die;
		if (!empty($encodeSearchResults)) {
			$result = array();
		}
		else { error(); }
	}

	return;
}

if (empty($email) && empty($passport) && !empty($firstName) && !empty($lastName)) {
	//$searchUser  = 'SELECT pt.firstName as firstName, pt.lastName as lastName, pp.quoteCreated as created ';
	$searchUser = 'SELECT pt.personID AS ID, pt.firstName as firstName, pt.lastName as lastName, pp.personID as personID, pp.quoteType as studyType, pp.quoteCreated AS dateCreated ';
	$searchUser .= 'FROM payments_preview pp ';
	$searchUser .= 'JOIN persons pt ON pt.emailAddress = pp.personID ';
	$searchUser .= 'WHERE pp.personID IN (SELECT emailAddress FROM persons pp WHERE pp.firstName = \'' . $firstName . '\' AND pp.lastName = \'' . $lastName . '\') ';
	$searchUser .= 'ORDER BY pp.quoteCreated DESC';
	//
	$qrySearchResult = $mysqli->query($searchUser);
	//
	$engRows = $qrySearchResult->num_rows;
	//
	$encodeResults = $qrySearchResult->fetch_array();
	//
	$searchUsrDp = 'SELECT pt.personID AS ID, pt.firstName as firstName, pt.lastName as lastName, ppd.prevID, ppd.personID as personID, ppd.quoteType as studyType, ppd.courseDuration as terms, ppd.quoteCreated AS dateCreated ';
	$searchUsrDp .= 'FROM payments_preview_dp ppd ';
	$searchUsrDp .= 'JOIN persons pt ON pt.emailAddress = ppd.personID ';
	$searchUsrDp .= 'WHERE ppd.personID IN (SELECT emailAddress FROM persons pp WHERE pp.firstName = \'' . $firstName . '\' AND pp.lastName = \'' . $lastName . '\') ';
	$searchUsrDp .= 'ORDER BY ppd.quoteCreated DESC';
	//var_dump($searchUsrDp);die;
	$qrySearchResultDp = $mysqli->query($searchUsrDp);
	//
	$encodeResultsDp = $qrySearchResultDp->fetch_array();
	//
	$dpRows = $qrySearchResultDp->num_rows;
	//
	if (!empty($encodeResults) || !empty($encodeResultsDp)) {
		$result = array();
	}


	if (empty($encodeResults) && empty($encodeResultsDp)) {
		//echo 'No records found for this period....<br>';
		//
		$searchUser = 'SELECT pt.personID AS ID, pt.firstName as firstName, pt.lastName as lastName, emailAddress as emailAddress ';
		$searchUser .= 'FROM persons pt ';
		$searchUser .= 'WHERE pt.emailAddress IN (SELECT emailAddress FROM persons pp WHERE pp.firstName = \'' . $firstName . '\' AND pp.lastName = \'' . $lastName . '\') ';
		$qrySearchResult = $mysqli->query($searchUser);
		//
		$encodeSearchResults = $qrySearchResult->fetch_array();
		//
		//var_dump($encodeSearchResults);die;
		if (!empty($encodeSearchResults)) {
			$result = array();
		}
		else { error(); }
	}

	return;
}

if (!empty($finalDateFrom) && !empty($finalDateTo)) {
	//$searchUser  = 'SELECT pt.firstName as firstName, pt.lastName as lastName, pp.quoteCreated as created ';
	$searchUser = 'SELECT pt.personID AS ID, pt.firstName as firstName, pt.lastName as lastName, pp.personID as personID, pp.quoteType as studyType, pp.quoteCreated AS dateCreated ';
	$searchUser .= 'FROM payments_preview pp ';
	$searchUser .= 'JOIN persons pt ON pt.emailAddress = pp.personID ';
	$searchUser .= 'WHERE pp.quoteCreated BETWEEN \'' . $finalDateFrom . '\' AND \'' . $finalDateTo . '\' ';
	$searchUser .= 'ORDER BY pp.quoteCreated DESC';
	//
	$qrySearchResult = $mysqli->query($searchUser);
	//
	$encodeResults = $qrySearchResult->fetch_array();
	//
	if (!empty($encodeResults)) {
		$result = array();
	} //
	else { error(); }
	//
	return;
	//$result = json_decode($encodeResults,true);
	//var_dump($result);die;
}

function error() {
	echo '<div id="alerts" class = "alert alert-error">
			<div style="padding: 1em;">
				<a class="close" data-dismiss="alert" onclick="window.location.href = window.location.href;">×</a>
					<h3>Ooops!! =(</h3>
					<p>Sorry! Not users were found by that search criteria.</p>
			</div>
	      </div>';
}