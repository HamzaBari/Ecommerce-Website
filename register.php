<?php
	//This is the php code which is linking to this file. 
	include('output.php'); 

	//This fucntion outputs the top html content.
	outputTop("Register");

	//This fucntion outputs the Banner & Navigation-Bar.
	outputBannerNavigation("Register");
?>

<!-- Resistration Form-->
<!--These are the two columns where the register form is seperated into two parts of columns-->
<div class="row">
	<!--This is the column for the first two sections of the register form-->
	<div class="column">
		<h1>Registration</h1><br>
		<h2>Create a Username & Password</h2>
		<form name="registerForm" action="new" method="post" id="nameform" onsubmit="return validateRegisterForm()">
			<p>Create Username:</p>
			<input type="username" name="username" placeholder="Enter Username" id="Username-Textfield"><br><br>
			<p>Create Password:</p>
			<input type="password" name="password" placeholder="Enter Password" id="Password-Textfield"><br><br><br>
			<h2>User Information</h2><br>
			<p>Enter Firstname:</p>
			<input type="enterFistname" name="Enter Firstname" placeholder="Enter Firstname" id="Firstname-Textfield"><br><br>
			<p>Enter Lastname:</p>
			<input type="enterLastname" name="Enter Lastname" placeholder="Enter Lastname" id="Lastname-Textfield"><br><br>
			<p>Enter Email Address:</p>
			<input type="enterEmail" name="Enter Email Address" placeholder="Enter Email Address" id="Email-Textfield"><br><br>
			<p>Enter Phonenumber:</p>
			<input type="enterPhonenumber" name="Enter Phonenumber" placeholder="Enter Phone Number" id="Phonenumber-Textfield"><br><br>
		</form>
	</div>
	<!--This is the column for the third section of the register form-->
	<div class="column">
		<h2>Address</h2>
		<form name="registerForm" action="new" method="get" id="nameform">
			<p>Address Line 1:</p>
			<input type="AddressL1" name="AddressL1" placeholder="Enter Address Line 1" id="AddressL1-Textfield"><br><br>
			<p>Address Line 2:</p>
			<input type="AddressL2" name="AddressL2" placeholder="Enter Address Line 2" id="AddressL2-Textfield"><br><br>
			<p>Post Code:</p>
			<input type="PostCode" name="PostCode" placeholder="Enter Post Code" id="Postcode-Textfield"><br><br>
			<p>City:</p>
			<input type="City" name="City" placeholder="Enter City" id="City-Textfield"><br><br>
			<p>Country:</p>
			<input type="Country" name="Country" placeholder="Enter Country" id="Country-Textfield"><br><br><br>	
			<button onclick="storeUser()" type="submit" form="#nameform" value="Submit" id="btnRegister">Register</button>
			<p id="Outcome"></p>
		</form>
	</div>
</div>

<!--This is the external Javascript code which links to the Javascript code for browser storage-->
<script src="js/storage.js"></script>

<?php
	//This is used for outtputting the footer bar at the bottom of the webpage.
	outputFooterBar();

	//This is used for outputting the bottom html content.
	outputFooter();
?>