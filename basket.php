<?php
    // Include the PHP functions to be used on the page 
    include('common.php'); 
	
    // Output header and navigation 
    outputHeader("BasketOverflow - My Basket");
    outputNavbar();
    echo '<script src="js/basket3.js"></script>';

?>

<!-- open the body -->
<?php openBody() ?>

<!-- ========================= HEADING ========================= -->
<div class="row">

    <header class="mb-3 pb-3 m-1 col-md-12">
        <p class="text-primary title h5 text-center">Items in your basket</p>
    </header>

    <!-- ========================= LISTINGS ========================= -->
    <main class="col-md-9">
    <div id="basketDiv"></div>


    </main>

    <!-- ========================= BASKET OPTIONS ========================= -->
    <aside class="col-md-3">
        <div class="card">
            <div class="card-body">
                <p class="text-muted h5">Total Cost</p>
                <p class="price h4">£629.95<br><br></p>
                <a href="#" class="btn btn-primary" onclick=basketPage()>Buy Now</a>
            </div>
        </div>
    </aside>

    <!-- close body, output the footer, and end html -->
    <?php outputFooter() ?>