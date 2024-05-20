<?php
    //Starting the session management
    session_start();

    //Removing all the session variables
    session_unset(); 

    //Destroying the session 
    session_destroy(); 
    
    //Inform the user that the session has been deleted
    echo 'Session deleted';
?>   