<?php
    //Starting the session management
    session_start();

    //Removing all the session variables
    session_unset(); 

    //Destroying the session 
    session_destroy(); 

    //Echo the result back to the user.
    echo 'ok';
?>