<?php
    //Starting the session management
    session_start();
    
    //Setting a session variable
    $_SESSION["username"] = 'Group 35';

    //Outputing result
    echo 'Session started. username=' . $_SESSION["username"];
?>