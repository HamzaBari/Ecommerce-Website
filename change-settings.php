<?php
    // Include the PHP functions to be used on the page 
    include('common.php'); 
	
    // Output header and navigation 
    outputHeader("BasketOverflow - Change Settings");
    outputNavbar();
?>

<!-- open the body -->
<?php openBody() ?>

<header class="mb-3 pb-3 m-1 col-md-12">
    <p class="text-primary title h5 text-center">Change Settings</p>
</header>

<article class="card p-5">
    <p class="text-primary title h4">Enter the following details:</p><br>
    <form action="editing-customers.php" method="post">
        <label for="CustomerID">Name</label>
        <input type="text" name="firstname" class="form-control" id="InputCustID" placeholder="Enter name ..." required>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Enter password ..." required>
        <br>
        <input type="submit" class="btn btn-primary"> 
    </form>
</article>

<!-- close body, output the footer, and end html -->
<?php outputFooter() ?>