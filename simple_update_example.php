<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->ecommerce;

//Create a PHP array with our search criteria
$findCriteria = [
    '$text' => [ '$search' => "Jane" ] 
 ];

//Specify how the documents will be updated
$updateCriteria = [
    '$set' => [ "password" => "abcde" ]
];

//Update all of the customers that match  this criteria
$updateRes = $db->customers->updateOne($findCriteria, $updateCriteria);

//Echo result back to user
echo 'Number of documents updated: ' . $updateRes->getModifiedCount();

