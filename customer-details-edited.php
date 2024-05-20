<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->Ecommerce;

//Extract the customer details 
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
$phonenumber = filter_input(INPUT_POST, 'phonenumber', FILTER_SANITIZE_STRING);
$addressLine1 = filter_input(INPUT_POST, 'AddressLine1', FILTER_SANITIZE_STRING);
$addressLine2 = filter_input(INPUT_POST, 'AdressLine2', FILTER_SANITIZE_STRING);
$city = filter_input(INPUT_POST, 'City', FILTER_SANITIZE_STRING);
$postcode = filter_input(INPUT_POST, 'Postcode', FILTER_SANITIZE_STRING);
$obj_id = filter_input(INPUT_POST, '_id', FILTER_SANITIZE_STRING);

//Criteria for finding document to replace
$replaceCustomer = [
    "_id" => new MongoDB\BSON\ObjectID($obj_id)
];

//Data to replace
$convertData = [
    "email" => $email,
    "password" => $password,
    "firstname" => $firstname,
    "lastname" => $lastname,
    "phonenumber" => $phonenumber,
    "AddressLine1" => $addressLine1,
    "AdressLine2" => $addressLine2,
    "City" => $city,
    "Postcode" => $postcode,
];

//Replace customer data for this ID
$updateDetails = $db->Customers->replaceOne($replaceCustomer, $convertData);
    
//Echo result back to user
if($updateDetails->getModifiedCount() == 1) {
    //Include the PHP functions to be used on the page 
    include('common.php'); 
            
    //Output header and navigation 
    outputHeader("BasketOverflow - Change Settings");
    outputNavbar();
            
    //Open the body
    openBody(); 

    //Returns a successful message back to the user with an button option.
    echo $firstname . " " . $lastname . " " . 'your details have been updated successfully.';
    echo "</br>";
    echo "</br>";
    echo '<a href="index.php" class="btn btn-primary">Back to homepage</a>';

    // Close body, output the footer, and end html 
    outputFooter();
} else {
    //Include the PHP functions to be used on the page 
    include('common.php'); 
            
    //Output header and navigation 
    outputHeader("BasketOverflow - Change Settings");
    outputNavbar();
                
    //Open the body
    openBody(); 
    
    //Returns a failure message back to the user with an button option.
    echo 'Unable to update your details.';
    echo "</br>";
    echo "</br>";
    echo '<a href="index.php" class="btn btn-primary">Back to homepage</a>';
}

?>