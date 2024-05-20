<?php

    //Get name and address strings - need to filter input to reduce chances of SQL injection etc.
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $firstname= filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $phonenumber = filter_input(INPUT_POST, 'phonenumber', FILTER_SANITIZE_STRING);
    $AddressLine1 = filter_input(INPUT_POST, 'AddressLine1', FILTER_SANITIZE_STRING);
    $AdressLine2= filter_input(INPUT_POST, 'AdressLine2', FILTER_SANITIZE_STRING);
    $City = filter_input(INPUT_POST, 'City', FILTER_SANITIZE_STRING);
    $Postcode = filter_input(INPUT_POST, 'Postcode', FILTER_SANITIZE_STRING);
    
    if($email != "" && $password != "" && $firstname != "" && $lastname != "" && $phonenumber != "" && $AddressLine1 != "" && $AdressLine2 != "" && $City != "" && $Postcode != ""){//Check query parameters 
        //STORE REGISTRATION DATA IN MONGODB

        //Include libraries
        require __DIR__ . '/vendor/autoload.php';
            
        //Create instance of MongoDB client
        $mongoClient = (new MongoDB\Client);
        
        //Select a database
        $db = $mongoClient->Ecommerce;
        
        //Select a collection 
        $collection = $db->Customers;
        
        //Converting it into a PHP array.
        $convertData = [
            "email" => $email,
            "password" => $password,
            "firstname" => $firstname,
            "lastname" => $lastname,
            "phonenumber" => $phonenumber,
            "AddressLine1" => $AddressLine1,
            "AdressLine2" => $AdressLine2,
            "City" => $City,
            "Postcode" => $Postcode,
        ];
        
        //Adding the customer to the database.
        $addCustomer = $collection->insertOne($convertData);

        if ($addCustomer->getInsertedCount() == 1) {

            //Output message confirming registration
            echo '<p> You have successfully been registered ' . $firstname . ' ' . $lastname . '. </p>';
        
        } 
    }
    else {   //A query string parameter cannot be found
        echo 'Registration data missing';
    }

?>