<?php

// This fucntion is used for outputting all the top parts of the html.
function outputTop($title){
    echo
    '<!DOCTYPE html> 
    <html>
    <head>
    <link rel="javascript" href="js/storage.js">
        <!-- Meta Tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Adds the icon/image on the browser tab -->
        <link rel="shortcut icon" type="image/png" href="img/x-icon.png">
        <!-- Link to the Stylesheet -->
        <link rel="stylesheet" text="text/css" href="css/styles.css">
        <!-- Title on the browser -->
        <title>' . $title . '</title>
    </head>
    <body>';
}

// This function is used for outputting the banner & navigation bar on every webpage.
function outputBannerNavigation($pageName){
    echo
    '<!--Banner-->
    <div class="banner">
        <center>
            <img src="img/logo.png" alt="game logo" style="padding-top:14.5px">
        </center>
    </div>

    <!--Top Navigation Bar-->
    <div class ="Fixed-Top-Navbar">';

    $linkNames = array("Home", "Register", "Login", "Game", "Rankings");
    $linkAddresses = array("index.php","register.php", "login.php", "game.php", "rankings.php");

    for($add = 0; $add < count($linkNames); $add++){
        echo '<a ';
        if ($linkNames[$add] == $pageName){
            echo 'class= "active"';
        }
        echo 'href="' . $linkAddresses[$add] . '">' . $linkNames[$add] . '</a>';
    } 
    echo '</div>';
}

// This is used for outputting the footer bar on every webpage.
function outputFooterBar(){
    echo
    '<!--Bottom Footer Bar-->
    <div class = "Bottom-Footer-Bar">
        <div class="social">
            <a href="https://www.facebook.com" target="_blank_"> <img src="img/facebook.png"></a>
            <a href="https://www.Twitter.com"  target="_blank_" > <img src="img/twitter.png"></a>
            <a href="https://www.google.com" target="_blank_" > <img src="img/google.png"></a>
            <a href="https://uk.pinterest.com" target="_blank_" > <img src="img/pintrest.png"></a>
         </div>
         <div class="copyright-text">
            <p>&copy 2020 | Hamza Bari</p>
        </div>
    </div>';
}

// This fucntion is used for outputting all the bottom parts of the html.
function outputFooter(){
    echo 
    '</body>
    </html>';
}

// This function includes the break therefore, more space is added below the webpage.
function includeBreaks(){
    echo
    '<br>';
}

?>