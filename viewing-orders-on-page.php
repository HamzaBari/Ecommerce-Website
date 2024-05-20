<?php
    // Include the PHP functions to be used on the page 
    include('common.php'); 
	
    // Output header and navigation 
    outputHeader("BasketOverflow - View Orders");
    outputNavbar();
?>

<!-- open the body -->
<?php openBody() ?>

<header class="mb-3 pb-3 m-1 col-md-12">
    <p class="text-primary title h5 text-center">View Orders</p>
</header>

<article class="card p-5">
    <p class="text-primary title h4">View Orders</p><br>
    <form action = "view-orders.php" method = "get">
            <input type="email" name = "email" class="form-control" placeholder="Enter Email ..." required>
        <br>
        <button type="submit" class="btn btn-primary">View Orders</button>
    </form>
</article>

<!-- close body, output the footer, and end html -->
<?php outputFooter() ?>