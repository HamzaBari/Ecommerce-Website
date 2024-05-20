<?php

include('common.php');

// Output header and navigation 
outputHeader("BasketOverflow - My Basket");
outputNavbar();

//Extract the product IDs that were sent to the server
$prodIDs = $_POST['prodIDs'];

//Convert JSON string to PHP array 
$productArray = json_decode($prodIDs, true);

//Include libraries
require __DIR__ . '/vendor/autoload.php';

//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$productDB = $mongoClient->Ecommerce->Products;



?>

<!-- open the body -->
<?php openBody() ?>

<!-- ========================= HEADING ========================= -->
<div class="row">

    <header class="mb-3 pb-3 m-1 col-md-12">
        <p class="text-primary title h5 text-center">Items in your basket</p>
    </header>

    <main class="col-md-9">

        <?php

        $totalcost = 0;

        
         // ========================= LIST OF PRODUCTS ========================= //
        for ($i = 0; $i < count($productArray); $i++) {


            $product = $productDB->findOne(array('_id' => new MongoDB\BSON\ObjectID($productArray[$i]['id'])));


            $cost = $product['Price'] * $productArray[$i]['count'];

            printf('
            <article class="card p-3 basket-item">
                <!-- quantity  -->
                <div class="row">
                    <div class="form-group row col-md-2 my-auto mx-auto">
                        <a href="#">Update</a>
                        <input class="form-control" type="number" value="%s">
                        <a href="#"><br>Remove</a>
                    </div>
                    <!-- image -->
                    <a class="col-md-3 " href="#"><img class="product-image" src="%s"></a>
                    <!-- title -->
                    <a href="#" class="h5 title col-md-3 my-auto">%s</a>
                    <!-- combined price and invidivual price -->
                    <aside class="col-md-3 my-auto">
                        <p class="price h4">£%s</p>
                        <p class="text-muted">$%s each</p>
                    </aside>
                </div>
            </article><br>
            ', $productArray[$i]['count'], $product['image'], $product['product_name'], $cost, $product['Price']);

            $totalcost += $cost;
        }

        // ========================= BASKET OPTIONS ========================= //
        printf('
        </main>
        <aside class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <p class="text-muted h5">Total Cost</p>
                    <p class="price h4">£%s<br><br></p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </aside>
        ', $totalcost);
        ?>

    </main>


    <!-- close body, output the footer, and end html -->
    <?php outputFooter() ?>