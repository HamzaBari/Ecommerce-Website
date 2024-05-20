<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->Ecommerce;

//Extract the data that was sent to the server
$firstname = filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_STRING);

//Create a PHP array with our search criteria
$findCriteria = [
    "firstname" => $firstname, 
 ];

//Find all of the customers that match  this criteria
$cursor = $db->Customers->find($findCriteria);

//Output the results
echo "<h1>Results</h1>";
foreach ($cursor as $cust){
   echo "<p>";
   echo "Customer firstname: " . $cust['firstname'];
   echo "</p>";
}



