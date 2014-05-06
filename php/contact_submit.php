<?php
include 'utility.php';

$row_count = 0; //Counter

try{
	
	$con = dbConnect(); //Connect to db

	$idQuery = $con -> prepare('SELECT UUID()'); //Generate random ID
	$idQuery -> execute(array());
	$idResult = $idQuery->fetch(PDO::FETCH_BOTH);		
	
	$randomID = $idResult[0]; //Random ID
	
 
	$email			= strtolower($_POST['emailInput']);	//Get email
		
	$query = $con -> prepare('SELECT * FROM customers WHERE email = :myEmail');
	$query-> execute(array(':myEmail' => $email));
		
	while($row = $query->fetch()){ //Does an entry already exist?
		$row_count++;
	}
	
	
	$service	 	= $_POST['serviceOptions']; //What service do they want	
	
	$fname 			= strtolower($_POST['firstName']);
	$lname 			= strtolower($_POST['lastName']);		
	$phone			= $_POST['phoneInput'];		
	$radio			= strtolower($_POST['optionsRadios']); //Who is it for
	$message	 	= $_POST['message'];
		
	//Event Scrapbooking fields
	$eventPackage	= strtolower($_POST['eventPackageOption']);
	$photoPackage	= strtolower($_POST['photoPackageSelect']);
	$eventType		= strtolower($_POST['eventType']);
	$eventLoc		= strtolower($_POST['eventLoc']);
	$eventDateStart	= $_POST['eventDateStart'];
	$eventDateEnd	= $_POST['eventDateEnd'];

	//Custom scrapbooking fields
	$customPackage	= strtolower($_POST['customPackageSelect']);
	$customDate		= $_POST['customDateEnd'];

	//Shadow Box fields
	$shadowPackage	= strtolower($_POST['shadowPackageSelect']);
	$shadowDate		= $_POST['shadowDateEnd'];


	//If this is the customer's first time
	if($row_count == 0){
	
		//Register user into DB
		$query_register = $con -> prepare('Insert Into customers (email, fname, lname, phone, date_registered, active)
		        										Values(:email, :fname, :lname, :phone, now(), 1)');
		$query_register-> execute(array(	':email' => $email,
										':fname' => $fname, 
										':lname' => $lname,
										':phone' => $phone));	
	}


	
	switch ($service) { //Which service did they want?
	

	    //Put in event scrapooking request	
	    case "Event Scrapbook":
	    
	        $query_1 = $con -> prepare('Insert Into event_scrapbooking (orderID, event_package, photo_package, event_type, event_location, event_start, event_end)
	        								Values(:ID, :event, :photo, :type, :location, :start, :end)');
	        								
			$query_1-> execute(array(	':ID' => $randomID,
									':event' => $eventPackage, 
									':photo' => $photoPackage, 
									':type'	=> $eventType, 
									':location' => $eventLoc, 
									':start' => $eventDateStart, 
									':end' => $eventDateEnd));
									
	
		    break;
		    
		    
    	//Put in custom scrapbooking request
		case "Custom Scrapbook":
		
			$query_1 = $con -> prepare('Insert Into custom (orderID, package_type, complete_date)
	        										Values(:ID, :package, :date)');
			$query_1-> execute(array(	':ID' => $randomID,
									':package' => $customPackage, 
									':date' => $customDate));
									
		    break;
    
    
    	//Put in shadow box request
		case "Shadow Box":
		
			$query_1 = $con -> prepare('Insert Into shadow_box (orderID, package_size, complete_date)
	        										Values(:ID, :package, :date)');
			$query_1-> execute(array(	':ID' => $randomID,
									':package' => $shadowPackage, 
									':date' => $shadowDate));
			
		    break;
    
		
		//They wanted to give feedback
		default:
		
			$query_1 = $con -> prepare('Insert Into feedback (email, feedback, submit_date)
	        										Values(:ID, :feedback, now())');
			$query_1-> execute(array(	':ID' => $randomID,
									':feedback' => $message));

		
			//success; Redirect
		    header('location: http://www.scrapbookmyevent.com/php/submit_success.php');	
			exit;
			break;

    
	}
	
		
		//Link order to customer
		$query_2 = $con -> prepare('Insert Into orders (orderID, package_type, email, notes)
		        										Values(:ID, :type, :email, :notes)');

		$query_2-> execute(array(	':ID' => $randomID,
										':type' => $service, 
										':email' => $email, 
										':notes' => $message
										)); 
										
		//success; Redirect								
		header('location: http://www.scrapbookmyevent.com/php/submit_success.php');	
		exit;
		break;




}catch(PDOException $e){

	//Error
	echo 'Error: ' . $e -> getMessage();


}



?>