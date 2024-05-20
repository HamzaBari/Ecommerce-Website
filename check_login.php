<?php
    //Starting the session management
    session_start();
    
    //Checking if the user is logged in or not.
    if(array_key_exists("loggedInUserEmail", $_SESSION) ){
        echo "ok";
    }
    else{
        echo 'Not logged in.';
    }
?>