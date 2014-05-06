
//Clear all error fields
function clearErrors(){
	document.getElementById('nameErr').innerHTML = "";
	document.getElementById('emailErr').innerHTML = "";
	document.getElementById('phoneErr').innerHTML = "";
	document.getElementById('eventEventErr').innerHTML = "";
	document.getElementById('eventLocErr').innerHTML = "";
	document.getElementById('eventDateStartErr').innerHTML = "";
	document.getElementById('eventDateEndErr').innerHTML = "";
	document.getElementById('customDateErr').innerHTML = "";
	document.getElementById('shadowDateErr').innerHTML = "";
	document.getElementById('messageErr').innerHTML = "";
}
	
//Email validation 
//Returns boolean
function emailCheck(text)
{	
	var atpos=text.indexOf("@");
	var dotpos=text.lastIndexOf(".");
	
	if (atpos < 1 || dotpos<atpos+2 || dotpos+2>=text.length){
  		return false;
	}  
	
 	return true;
}


//Validate custom scrapbooking section
//Returns number of errors
function validateCustom(){
	var customErrors = 0;

	var customPackage = document.forms ["contactUsForm"] ["customPackageSelect"].value;
	var customDateEnd = document.forms ["contactUsForm"] ["customDateEnd"].value;
	
	
	if(customDateEnd.length < 10 || customDateEnd.length > 30){
	
		document.getElementById('customDateErr').innerHTML = "Please enter a valid date";
		customErrors++;
	}
	
	return customErrors;
	
}

//Validate shadow boxing section
//Returns number of errors
function validateShadow(){
	var shadowErrors = 0;
	var shadowPackage = document.forms ["contactUsForm"] ["shadowPackageSelect"].value;
	var shadowDateEnd = document.forms ["contactUsForm"] ["shadowDateEnd"].value;

	if(shadowDateEnd.length < 10 || shadowDateEnd.length > 30 ){
	
		document.getElementById('shadowDateErr').innerHTML = "Please enter a valid date";
		shadowErrors++;
	}
	
	return shadowErrors;

}

//Validate event scrapbooking section
//Returns number of errors
function validateEvent(){

	var eventErrors = 0;
	
	var eventPackage = document.forms ["contactUsForm"] ["eventPackageOption"].value;
	var photoPackage = document.forms ["contactUsForm"] ["photoPackageSelect"].value;


	var eventType = document.forms ["contactUsForm"] ["eventType"].value;
	var eventLoc = document.forms ["contactUsForm"] ["eventLoc"].value;
	var eventDateStart = document.forms ["contactUsForm"] ["eventDateStart"].value;
	var eventDateEnd = document.forms ["contactUsForm"] ["eventDateEnd"].value;
	
	
	if(eventType.length < 3 || eventType.length > 50){
	
		document.getElementById('eventEventErr').innerHTML = "Please enter a more detailed event";
		eventErrors++;
	}
	
	if(eventLoc.length < 5 || eventLoc.length.length > 50){
	
		document.getElementById('eventLocErr').innerHTML = "Please enter a more specific location";
		eventErrors++;
	}
	
	if(eventDateStart.length < 10 || eventDateStart.length > 30){
	
		document.getElementById('eventDateStartErr').innerHTML = "Please enter a valid date";
		eventErrors++;
	}

	if(eventDateEnd < 10 || eventDateEnd.length > 30){
		
		document.getElementById('eventDateEndErr').innerHTML = "Please enter a valid date";
		eventErrors++;
	}
	

	return eventErrors;

}

//Main validation function
function validateSubmit(){

	clearErrors(); //Clear all error fields first

	var errors = 0;  //Error counter

	var fname = document.forms ["contactUsForm"] ["firstName"].value;
	var lname = document.forms ["contactUsForm"] ["lastName"].value;
	var email = document.forms ["contactUsForm"] ["emailInput"].value.toLowerCase();
	var email2 = document.forms ["contactUsForm"] ["emailInput2"].value.toLowerCase();
	
	var phone = document.forms ["contactUsForm"] ["phoneInput"].value;

	

	var radioMe = document.getElementById("radioMyself").checked;
	var radioSomeoneElse = document.getElementById("radioSomeoneElse").checked;
	
	var message = document.forms ["contactUsForm"] ["message"].value;
	
	var service = document.forms ["contactUsForm"] ["serviceOptions"].value;


	if(fname == null || fname.length < 3 || fname.length > 30){
	
		document.getElementById('nameErr').innerHTML = "Please enter a valid first name";
		errors++;
	}

	if(lname == null || lname.length < 3 || lname.length > 25){
		
		document.getElementById('nameErr').innerHTML = "Please enter a valid last name";
		errors++;
	}

	if(!emailCheck(email) || email.length > 50){
	
		document.getElementById('emailErr').innerHTML = "Please enter a valid email";
		errors++;
	}
	
	if(email != email2){
	
		document.getElementById('emailErr').innerHTML = "Emails do not match";
		errors++;			
	}
	
	
	if(phone.length != 10 || isNaN(phone)){
	
		document.getElementById('phoneErr').innerHTML = "Please enter a valid phone number";
		errors++;			
	}
	

	
	if(service == "Event Scrapbook"){
		errors += validateEvent(); //Add on number of errors
		
	}
	else if(service == "Custom Scrapbook"){
		errors += validateCustom(); //Add on number of errors
	}	
	else if(service == "Shadow Box"){
		errors += validateShadow(); //Add on number of errors
	}
	else{
		if(message.length < 10){
		
			document.getElementById('messageErr').innerHTML = "Please enter a more detailed message";
			errors++;
		}
	}
	

	if(message.length > 500){
	
		document.getElementById('messageErr').innerHTML = "This message is more than 500 characters long";
		errors++;
	}
	

	if(errors > 0){ //There were validation errors 
		return false;
	}else{ //No errors;  proceed 
		return true;
	}
}



