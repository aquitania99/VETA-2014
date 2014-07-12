<?php

$email = $_REQUEST['email'] ;
$lastname = $_REQUEST['lastname'] ;
$firstname = $_REQUEST['firstname'] ;
$middlename = $_REQUEST['middlename'] ;
$DOB = $_REQUEST['DOB'] ;
$Citizenof = $_REQUEST['Citizenof'] ;
$address = $_REQUEST['address'] ;
$mobile = $_REQUEST['mobile'] ;
$passportno = $_REQUEST['passportno'] ;
$passportexp = $_REQUEST['passportexp'] ;
$visatype = $_REQUEST['visatype'] ;
$visaexp = $_REQUEST['visaexp'] ;
$visadate = $_REQUEST['visadate'] ;

$maritalstatus = $_REQUEST['maritalstatus'] ;
$spousename = $_REQUEST['spousename'] ;
$souseddob = $_REQUEST['souseddob'] ;
$spouseresidence = $_REQUEST['spouseresidence'] ;
$monthsinrelationship = $_REQUEST['monthsinrelationship'] ;
$child1 = $_REQUEST['child1'] ;
$child1dob = $_REQUEST['child1dob'] ;
$child2 = $_REQUEST['child2'] ;
$child2dob = $_REQUEST['child2dob'] ;
$child3 = $_REQUEST['child3'] ;
$child3dob = $_REQUEST['child3dob'] ;
$visadate = $_REQUEST['otherchildren'] ;
$dependents = $_REQUEST['dependents'] ;
$relatives = $_REQUEST['relatives'] ;
$relative1 = $_REQUEST['relative1'] ;
$relativeaddress1 = $_REQUEST['relativeaddress1'] ;
$relative2 = $_REQUEST['relative2'] ;
$relativeaddress2 = $_REQUEST['relativeaddress2'] ;

$educator1 = $_REQUEST['educator1'] ;
$award1 = $_REQUEST['award1'] ;
$datecommenced1 = $_REQUEST['datecommenced1'] ;
$datecompleted1 = $_REQUEST['datecompleted1'] ;
$educator2 = $_REQUEST['educator2'] ;
$award2 = $_REQUEST['award2'] ;
$datecommenced2 = $_REQUEST['datecommenced2'] ;
$datecompleted2 = $_REQUEST['datecompleted2'] ;
$educator3 = $_REQUEST['educator3'] ;
$award3 = $_REQUEST['award3'] ;
$datecommenced3 = $_REQUEST['datecommenced3'] ;
$datecompleted3 = $_REQUEST['datecompleted3'] ;
$educator4 = $_REQUEST['educator4'] ;
$award4 = $_REQUEST['award4'] ;
$datecommenced4 = $_REQUEST['datecommenced4'] ;
$datecompleted4 = $_REQUEST['datecompleted4'] ;

$employer1 = $_REQUEST['employer1'] ;
$country1 = $_REQUEST['country1'] ;
$position1 = $_REQUEST['position1'] ;
$startdate1 = $_REQUEST['startdate1'] ;
$enddate1 = $_REQUEST['enddate1'] ;

$employer2 = $_REQUEST['employer2'] ;
$country2 = $_REQUEST['country2'] ;
$position2 = $_REQUEST['position2'] ;
$startdate2 = $_REQUEST['startdate2'] ;
$enddate2 = $_REQUEST['enddate2'] ;

$employer3 = $_REQUEST['employer3'] ;
$country3 = $_REQUEST['country3'] ;
$position3 = $_REQUEST['position3'] ;
$startdate3 = $_REQUEST['startdate3'] ;
$enddate3 = $_REQUEST['enddate3'] ;

$employer4 = $_REQUEST['employer4'] ;
$country4 = $_REQUEST['country4'] ;
$position4 = $_REQUEST['position4'] ;
$startdate4 = $_REQUEST['startdate4'] ;
$enddate4 = $_REQUEST['enddate4'] ;

$englishtest = $_REQUEST['englishtest'] ;
$IELTSdates = $_REQUEST['IELTSdates'] ;
$listening = $_REQUEST['listening'] ;
$reading = $_REQUEST['reading'] ;
$writing = $_REQUEST['writing'] ;
$speaking = $_REQUEST['speaking'] ;
$Ooerall = $_REQUEST['overall'] ;

$medicalconditions = $_REQUEST['medicalconditions'] ;
$familysmedicalcondition = $_REQUEST['familysmedicalcondition'] ;

$criminaloffence = $_REQUEST['criminaloffence'] ;

$visarefused = $_REQUEST['visarefused'] ;

$militaryservice = $_REQUEST['militaryservice'] ;

$certify = $_REQUEST['certify'] ;

$message="

	Email:		    						$email		\n
	Lastname:	    						$lastname		\n
	Firstname:	    						$firstname		\n
	Middlename:		    					$middlename		\n
	DOB:	    							$DOB		\n
	Citizen of:		   						$Citizenof		\n
	Address:	   							$address		\n
	Mobile:   								$mobile	\n
	Passport number:						$passportno	\n
	Passport Exp: 							$passportexp	\n
	Visa type:	   							$visatype		\n
	Visa Exp: 								$visaexp	\n
	Date visa was applied for:				$visadate		\n
	
	Marital status:		    				$maritalstatus		\n
	Spouses name:	    					$spousename		\n
	Soused DOB:	    						$souseddob		\n
	Country of current residence:			$spouseresidence		\n
	Relationship duration (months):	    	$monthsinrelationship		\n
	Childs name:		   					$child1		\n
	Childs DOB:	   							$child1dob		\n
	Childs name2:   						$child2	\n
	Childs DOB2:							$child2dob	\n
	Childs name3: 							$child3	\n
	Childs DOB3:	   						$child3dob		\n
	Children from previous relationship: 	$otherchildren	\n
	Dependents over 25:						$dependents		\n
	Relatives in Australia? (spouse) 		$relatives	\n
	Relatives name:	   						$relative1		\n
	Relatives address:					 	$relativeaddress1	\n
	Relatives name2:						$relative2		\n
	Relatives address2:						$relativeaddress2		\n
	
	Educator:		    					$educator1		\n
	Award:	    							$award1		\n
	Date commenced:	    					$datecommenced1		\n
	Date completed:							$datecompleted1		\n
	Educator2:		    					$educator2		\n
	Award2:	    							$award2		\n
	Date commenced2:	    				$datecommenced2		\n
	Date completed2:						$datecompleted2		\n
	Educator3:		    					$educator3		\n
	Award3:	    							$award3		\n
	Date commenced3:	    				$datecommenced3		\n
	Date completed3:						$datecompleted3		\n
	Educator4:		    					$educator4		\n
	Award4:	    							$award4		\n
	Date commenced4:	    				$datecommenced4		\n
	Date completed4:						$datecompleted4		\n
	
	Employer:		    					$employer1		\n
	Country:	    						$country1		\n
	Position:	    						$position1		\n
	Date commenced:							$startdate1		\n
	Date completed:		    				$enddate1		\n
	Employer2:		    					$employer2		\n
	Country2:	    						$country2		\n
	Position2:	    						$position2		\n
	Date commenced2:						$startdate2		\n
	Date completed2:		    			$enddate2		\n
	Employer3:		    					$employer3		\n
	Country3:	    						$country3		\n
	Position3:	    						$position3		\n
	Date commenced3:						$startdate3		\n
	Date completed3:		    			$enddate3		\n
	Employer4:		    					$employer4		\n
	Country4:	    						$country4		\n
	Position4:	    						$position4		\n
	Date commenced4:						$startdate4		\n
	Date completed4:		    			$enddate4		\n
	
	Completed English test:					$englishtest		\n
	IELTS dates:		    				$IELTSdates		\n
	Listening score:		    			$listening		\n
	Reading score:	    					$reading		\n
	Writing score:	    					$writing		\n
	Speaking score:							$speaking		\n
	Overall score:		    				$overall		\n
	
	Medical conditions:		    			$medicalconditions		\n
	Medical conditions (family members) :	$familysmedicalcondition		\n
	
	Criminal record:	    				$criminaloffence		\n
	
	Ausralain visa cancelled or refused:	$visarefused		\n
	
	Military Service:						$militaryservice		\n
	
	Certify:	   							 $certify		\n";

  mail( "blossomingdesigns@gmail.com", "Feedback Form Results",$message,"From: $EMAIL");
  
  header( "Location: http://www.mmmigration.com.au/dev/thank-you.html" );
?>