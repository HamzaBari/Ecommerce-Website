<?php
    //Starting the session management
    session_start();

    //Getting the email and password
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);    

    //Connect to MongoDB and select database
    require __DIR__ . '/vendor/autoload.php';
    $mongoClient = (new MongoDB\Client);

    $db = $mongoClient->Ecommerce;

    //Create a PHP array with our search criteria
    $findCriteria = [
        "email" => $email, 
     ];

    //Find all of the customers that match this criteria
    $cursor = $db->Customers->find($findCriteria);

    //Convert results to array
    $resultsArray = $cursor->toArray();

    //Check that the customer exists which is making sure that the customer email exists.
    if(count ($resultsArray) == 0){
        echo '<p> This Email Address does not exist. Make sure your sign up/Register. </p>';
        echo '<br>';
        echo '<a href="registration.php" class="btn btn-primary">Registration</a>';
        return;
    }
    else if(count ($resultsArray) > 1){ //Check that there is exactly one customer singed up with one email.
        echo '<p> This email address exists a multiple times. Unable to login. </p>';
        return;
    }   

    //Checking the correct password
    if($resultsArray[0]['password'] != $password){
        echo '<p> Your Password is incorrect, Please try again. </p>';
        return;
    }
        
    //Start session for this user
    $_SESSION['loggedInUserEmail'] = $email;
    
    //Inform web page that login is successful
    echo 'ok';  
?>