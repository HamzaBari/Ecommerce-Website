<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->Ecommerce;

//Extract the data that was sent to the server
$name = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_STRING);

//Create a PHP array with our search criteria
$findCriteria = [
   "email" => $name, 
];

//Find all of the customers that match  this criteria
$cursor = $db->Orders->find($findCriteria);

// Include the PHP functions to be used on the page 
include('common.php'); 
	
// Output header and navigation 
outputHeader("BasketOverflow - Registration");
outputNavbar();

// Open the body
openBody();

//Output the results
echo "<h1>List of your orders</h1>";
echo '<br>';
echo '<br>';
foreach ($cursor as $cust){
   echo "<p>";
   echo " Order ID: ". $cust['_id'];
   echo '<br>';
   echo '<br>';
   echo " Amount Paid: £". $cust['cost'];
   echo '<br>';
   echo '<br>';
   echo " Date & Time Delivered: On ". $cust['date'] . " at " . $cust['time'] . ".";
   echo '<br>';
   echo '<br>';
   echo '<a href="index.php" class="btn btn-primary">Back to homepage</a>';
}

// Close body, output the footer, and end html
outputFooter();

?>