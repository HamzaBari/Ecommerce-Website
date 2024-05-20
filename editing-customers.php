<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->Ecommerce;

//Extract the data that was sent to the server
$search_customer_name = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
$search_customer_password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

//Create a PHP array with our search criteria
$searchCriteria = [
    'firstname' => $search_customer_name,
    'password' => $search_customer_password,
];

//Find all of the customers that match  this criteria
$findCustomers = $db->Customers->find($searchCriteria);

// Include the PHP functions to be used on the page 
include('common.php'); 
        
// Output header and navigation 
outputHeader("BasketOverflow - Change Settings");
outputNavbar();
        
// Open the body
openBody(); 

//Returns all of the customer information listed. 
foreach ($findCustomers as $indentifiedCustomer){
echo '<article class="card p-5">';

    echo '<p class="text-primary title h4">Change Settings</p></br>';
    echo '<form action="customer-details-edited.php" method="post">';

    echo '<label for="Email">Email address</label>';
    echo '<input type="email" name="email" class="form-control" id="InputEmail" placeholder="Enter email ..." value="' . $indentifiedCustomer['email'] .'" required>';
    echo '<br>';

    echo '<label for="Password">Password</label>';
    echo '<input type="password" name="password" class="form-control" id="InputPassword" placeholder="Enter password ..." value="' . $indentifiedCustomer['password'] .'" required>';
    echo '<br>';

    echo '<label for="Firstname">First name</label>';
    echo '<input type="text" name="firstname" class="form-control" id="Inputfn" placeholder="Enter first name ..." value="' . $indentifiedCustomer['firstname'] .'" required>';
    echo '<br>';

    echo '<label for="Lastname">Last name</label>';
    echo '<input type="text" name="lastname" class="form-control" id="Inputln" placeholder="Enter last name ..." value="' . $indentifiedCustomer['lastname'] .'" required>';
    echo '<br>';

    echo '<label for="Phonenumber">Phonenumber</label>';
    echo '<input type="tel" name="phonenumber" class="form-control" id="InputPhonenumber" placeholder="Enter phonenumber ..." value="' . $indentifiedCustomer['phonenumber'] .'" required>';
    echo '<br>';
    
    echo '<label for="AddressLine1">Address Line 1</label>';
    echo '<input type="text" name="AddressLine1" class="form-control" id="InputAddressLine1" placeholder="Enter Address Line 1 ..." value="' . $indentifiedCustomer['AddressLine1'] .'" required>';
    echo '<br>';

    echo '<label for="AddressLine2">Address Line 2</label>';
    echo '<input type="text" name="AdressLine2" class="form-control" id="InputAdressLine2" placeholder="Enter Address Line 2 ..." value="' . $indentifiedCustomer['AdressLine2'] .'" required>';
    echo '<br>';

    echo '<label for="City">City</label>';
    echo '<input type="text" name="City" class="form-control" id="InputCity" placeholder="Enter City ..." value="' . $indentifiedCustomer['City'] .'" required>';
    echo '<br>';

    echo '<label for="Postcode">Postcode</label>';
    echo '<input type="text" name="Postcode" class="form-control" id="InputPostcode" placeholder="Enter Postcode ..." value="' . $indentifiedCustomer['Postcode'] .'" required>';
    echo '<br>';

    echo '<input type="hidden" name="_id" value="' . $indentifiedCustomer['_id'] . '" required>'; 
    
    echo '<input type="submit" class="btn btn-primary">';

    echo '</form>';

echo '</article>';

}

// Close body, output the footer, and end html 
outputFooter();

?>