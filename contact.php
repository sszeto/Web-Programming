<!DOCTYPE html>
<html>

<head>
<?php include 'php/head.php'; ?>
<title>Contact - Scrapbook My Event</title>
<style type="text/css">
</style>
</head>

<body>

<div id="wrapper">
	<?php include 'php/nav_complete.php';  ?>   <!--Tool Bar-->
	<div class="row">
		<h1 class="text-center text-info" style="margin-top: 0px">Hi! Did you want 
		to get in contact with us?</h1>
		<br />
		<br />
		<div class="col-md-6 col-md-offset-3">
				<!--Start form-->		
			<form id="contactUsForm" action="php/contact_submit.php" method="post" onsubmit="return validateSubmit();" role="form">
				<div class="row">
					<div class="form-group">
						<!--Name Inputs-->
						<label class="col-md-4" for="firstName">Name</label>
						<div class="col-md-4">
							<input id="firstName" class="form-control" name="firstName" placeholder="First Name" type="text" />
						</div>
						
						<label class="sr-only" for="lastName">Last Name</label>
						<div class="col-md-4">
							<input id="lastName" class="form-control" name="lastName" placeholder="Last Name" type="text" />
						</div>
					</div>
				</div>
				<div class="row text-center">
						<!--Name validation text-->
					<strong id="nameErr" class="text-danger"></strong></div>
				<br />
						<!--Email input-->
				<div class="row">
					<div class="form-group">
						<label class="col-md-4" for="emailInput">Email Address</label>
						<div class="col-md-8">
							<input id="emailInput" class="form-control" name="emailInput" placeholder="Your Email Address" type="text" />
						</div>
					</div>
				</div>
				<br>
						<!--Email confirmation input-->
				<div class="row">
					<div class="form-group">
						<label class="sr-only" for="emailInput2">Email Confirmation 
						address</label>
						<div class="col-md-8 col-md-offset-4">
							<input id="emailInput2" class="form-control" name="emailInput2" placeholder="Retype Your Email Address" type="text" />
						</div>
					</div>
				</div>
						<!--Email vallidation text-->
				<div class="row text-center">
					<strong id="emailErr" class="text-danger"></strong></div>
				<br />
						<!--Phone input-->
				<div class="row">
					<div class="form-group">
						<label class="col-md-4" for="phoneInput">Phone Number</label>
						<div class="col-md-8">
							<input id="phoneInput" class="form-control" name="phoneInput" placeholder="Phone Number" type="number" />
						</div>
					</div>
				</div>
					<!--Phone validation text-->
				<div class="row text-center">
					<strong id="phoneErr" class="text-danger"></strong></div>
				<br />
					<!--Radio group-->
				<div class="row">
					<div class="col-md-6">
						<strong>I am inquiring about a package for</strong></div>
					<div class="col-md-6">
						<div class="form-group">
							<div class="radio">
								<label>
								<input id="radioMyself" checked name="optionsRadios" type="radio" /> 
								Myself </label></div>
							<div class="radio">
								<label>
								<input id="radioSomeoneElse" name="optionsRadios" type="radio" /> 
								A Friend </label></div>
						</div>
					</div>
				</div>
				<br />
				<div class="row">
					<!--Options for services-->
					<div class="form-group">
						<div class="col-md-4">
							<strong>Service Requested</strong> </div>
						<div class="col-md-8">
							<select id="serviceOptions" class="form-control" name="serviceOptions">
							<option>Event Scrapbook</option>
							<option>Custom Scrapbook</option>
							<option>Shadow Box</option>
							<option>I would like to make a suggestion</option>
							</select> </div>
					</div>
				</div>
				<br />
				
					<!--EVENT SCRAPBOOKING START-->
				<div id="eventInputInfo" class="row">
					<hr />
					<div class="form-group">
						<div class="row">
							<!--Package select-->
							<div class="col-md-4">
								<strong>Event Package</strong> </div>
							<div class="col-md-8">
								<select id="eventPackageOption" class="form-control" name="eventPackageOption">
								<option>Happy</option>
								<option>Bliss</option>
								<option>Sparkle</option>
								<option>Dreams</option>
								<option>Help me decide!</option>
								</select> </div>
						</div>
						<br>
						
							<!--Photo package select-->
						<div id="photoPackageOptions" class="row">
							<div class="col-md-4">
								<strong>Photo Package</strong> </div>
							<div class="col-md-8">
								<select id="photoPackageSelect" class="form-control" name="photoPackageSelect">
								<option>None</option>
								<option>Delight</option>
								<option>Glowing</option>
								<option>Dazzle</option>
								<option>Help me decide!</option>
								</select> </div>
						</div>
						<br />
						<div class="row">
						
							<!--Event type input-->
							<div class="form-group">
								<label class="col-md-4" for="eventType">Type of 
								Event</label>
								<div class="col-md-8">
									<input id="eventType" class="form-control" name="eventType" placeholder="Birthday, Wedding, etc..." type="text" />
								</div>
							</div>
							
							<!--Event type validation text-->
							<div class="row text-center">
								<strong id="eventEventErr" class="text-danger">
								</strong></div>
							<br><br>
							
							<!--Location input text-->
							<div class="form-group">
								<label class="col-md-4" for="eventLoc">Location 
								of Event</label>
								<div class="col-md-8">
									<input id="eventLoc" class="form-control" name="eventLoc" placeholder="City, State" type="text" />
								</div>
							</div>
							
							<!--Location validation text-->
							<div class="row text-center">
								<strong id="eventLocErr" class="text-danger">
								</strong></div>
							<br><br>
							
							<!--Event date start input-->
							<div class="form-group">
								<label class="col-md-4" for="eventDateStart">Start 
								of Event</label>
								<div class="col-md-8">
									<input id="eventDateStart" class="form-control" name="eventDateStart" placeholder="MM/DD/YYYY HH:MM:SS PM/AM" type="text" />
								</div>
							</div>
							
							<!--date validation text-->
							<div class="row text-center">
								<strong id="eventDateStartErr" class="text-danger">
								</strong></div>
							<br><br>
							
							<!--Event date end input-->
							<div class="form-group">
								<label class="col-md-4" for="eventDateEnd">End of 
								Event</label>
								<div class="col-md-8">
									<input id="eventDateEnd" class="form-control" name="eventDateEnd" placeholder="MM/DD/YYYY HH:MM:SS PM/AM" type="text" />
								</div>
							</div>
							<!--Event end validation text-->
							<div class="row text-center">
								<strong id="eventDateEndErr" class="text-danger">
								</strong></div>
						</div>
					</div>
				</div>
				<!--/EVENT SCRAPBOOKING END-->
				
				<!--CUSTOM SCRAPBOOKING START-->
				<div id="customInputInfo" class="row">
					<hr />
					<div class="form-group">
						<div class="row">
								<!--custom package select-->
							<div class="col-md-4">
								<strong>Package</strong> </div>
							<div class="col-md-8">
								<select id="customPackageSelect" class="form-control" name="customPackageSelect">
								<option>Blossom</option>
								<option>Lucky</option>
								<option>Harmony</option>
								<option>Inspire</option>
								<option>Joy</option>
								<option>Charm</option>
								<option>Help me decide!</option>
								</select> </div>
						</div>
						<br>
						
							<!--Custom date input-->
						<div class="row">
							<label class="col-md-4" for="customDateEnd">Requested 
							Completion Date</label>
							<div class="col-md-8">
								<input id="customDateEnd" class="form-control" name="customDateEnd" placeholder="MM/DD/YYYY" type="text" />
							</div>
						</div>
							<!--Custom date validation text-->
						<div class="row text-center">
							<strong id="customDateErr" class="text-danger">
							</strong></div>
					</div>
				</div>
				<!--/CUSTOM SCRAPBOOKING END -->
				
				<!--SHADOW BOX START-->
				<div id="shadowInputInfo" class="row">
					<hr />
					<div class="form-group">
						<div class="row">
						
							<!--package size select-->
							<div class="col-md-4">
								<strong>Package Size</strong> </div>
							<div class="col-md-8">
								<select id="shadowPackageSelect" class="form-control" name="shadowPackageSelect">
								<option>Small</option>
								<option>Medium</option>
								<option>Large</option>
								</select> </div>
						</div>
						<br>
						
							<!--date validation text-->
						<div class="row">
							<label class="col-md-4" for="shadowDateEnd">Requested 
							Completion Date</label>
							<div class="col-md-8">
								<input id="shadowDateEnd" class="form-control" name="shadowDateEnd" placeholder="MM/DD/YYYY" type="text" />
							</div>
						</div>
						<div class="row text-center">
							<strong id="shadowDateErr" class="text-danger">
							</strong></div>
					</div>
				</div>
				<!--SHADOW BOX END-->
				<hr />
				<div class="row">
					<div class="form-group">
					<!--Message input-->
						<label class="sr-only" for="message"></label>
						<div class="col-md-12">
							<textarea id="message" class="form-control" name="message" placeholder="Type your message here (MAX 500 Characters)" rows="5"></textarea>
						</div>
					</div>
				</div>
				
					<!--Message validation text-->
				<div class="row text-center">
					<strong id="messageErr" class="text-danger"></strong></div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<div class="pull-right">
							<!--Reset Button-->
							<button id="resetBtn" class="btn btn-danger" onclick="clearErrors();" type="reset">
							Reset</button>
							<!--Submit Button-->
							<button id="submitBtn" class="btn btn-info" type="submit">
							Finished!</button></div>
					</div>
				</div>
				<!--/Form-->
			</form>
		</div>
	</div>
</div>
<?php include 'php/footer.php';  ?>
<!--Javascript form validation-->
<script src="js/contact_validate.js"></script>
<script type="text/javascript">


	$(function () { 
		//Handle toolbar effects
		$("li > a").css("color","gray");
		$("#contactNav").css("color","black");
		$("#contactNav").css("font-weight","bolder");
		
		//Display event scrapbooking section to start
		$("#eventInputInfo").css("display", "");
		$("#customInputInfo").css("display", "none");
		$("#shadowInputInfo").css("display", "none");
    });
    
    
    
    $(function () {
   		
		$(document).on('change','#serviceOptions',function(){ //Detect when user selects services
		
			var myService = document.getElementById('serviceOptions').value;
		
			//Change which section is visible on change
			if( myService == "Event Scrapbook"){
			
				$("#eventInputInfo").css("display", "");
				$("#customInputInfo").css("display", "none");
				$("#shadowInputInfo").css("display", "none");
			
			} else if(myService == "Custom Scrapbook"){
			
				$("#eventInputInfo").css("display", "none");
				$("#customInputInfo").css("display", "");
				$("#shadowInputInfo").css("display", "none");
			
			} else if(myService == "Shadow Box"){
			
				$("#eventInputInfo").css("display", "none");
				$("#customInputInfo").css("display", "none");
				$("#shadowInputInfo").css("display", "");
				
			} else if(myService == "I would like to make a suggestion"){
				$("#eventInputInfo").css("display", "none");
				$("#customInputInfo").css("display", "none");
				$("#shadowInputInfo").css("display", "none");
			
			}
		});
	});

</script>

</body>

</html>
