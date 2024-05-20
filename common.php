<?php

function outputHeader($title)
{
    // <===== START HTML =====>
    print '
    <!DOCTYPE html>
    <html lang="en">
    ';
    
    // <====== HEAD =====>
    printf('
    <head>
      <title>%p</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="css/styles.css" rel="stylesheet">
    </head>', $title);
}

function outputNavbar()
{
    $basketnumitems = 3;
    // <===== NAVIGATION BAR =====>
    printf('
    <header>
    <!-- logo -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 fixed-top">
        <a class="navbar-brand text-primary h1 my-auto" href="index.php">BasketOverflow.com</a>
        <!-- products dropdown -->
        <ul class="navbar-nav nav-fill ml-auto">
        <!-- search bar -->
        <form class="form-inline" action="searchProducts.php" method="get">
            <div class="input-group">
            <input type="text" name="name" class="form-control" placeholder="Search for products..." required>
            <div class="input-group-append">
                <!-- <a class="input-group-text" type="submit" href="search.php" role="button">Search</a> -->
                <input type="submit">
                <!-- <button class="input-group-text" type="submit" action="search.html">Search</button> will be used in final submission -->
            </div>
            </div>
        </form>
            <!- account options -->
            <div class="dropdown">
            <button class="dropbtn"><a class="nav-link my-auto" href="registration.php">Registration</a></button>
            <button class="dropbtn"><a class="nav-link my-auto" href="login.php">Login</a></button>
                <div class="dropdown-content">
                    <a a class="nav-link my-auto" href="change-settings.php">Change Settings</a>
                    <a a class="nav-link my-auto" href="viewing-orders-on-page.php">View Orders</a>
                </div>
            </div>
            <!-- basket -->
            <a class="nav-link my-auto" href="basket.php">My Basket (%d)</a>
  
        </ul>
    </nav>
    </header>', $basketnumitems);
}


function openBody(){
    print '
    <body>
     <div class="container">
     ';
}




function outputFooter()
{
    // <===== END BODY =====>
    print '
    </div>
    </div>
    </body>
    ';

    // <===== FOOTER =====>
    print '
    <footer class="bottom p-3">
        <p class="text-muted text-center my-auto">
        © Copyright Notarealcompany LTD 2020 - 2077 All rights reserved
        <br>
        Middlesex University Year 2 Web Coursework 2 </p>
    </footer>
    ';
    
    // <===== END HTML =====>
     print  '</html>';
}