<?php
    //Starting the session management
    session_start();
    
    //Find out if the session has started or not
    if(array_key_exists("username", $_SESSION) ){
        echo 'Session in progress. username=' . $_SESSION["username"];
    }
    else{
        echo 'Session not started';
    }
?>    