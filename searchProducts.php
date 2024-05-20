<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->Ecommerce;

//Extract the data that was sent to the server
$search_string = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);

//Create a PHP array with our search criteria
$findCriteria = [
    '$text' => [ '$search' => $search_string ] 
];

//Extract the data from the server
$sort_string = filter_input(INPUT_GET, 'sort', FILTER_SANITIZE_STRING);

//Create a PHP array with our search criteria
$option = ['sort' => ['Price' => 1]]; // default option

// Options to sort by the price.
if ($sort_string == "Price ascending"){
    $option = ['sort' => ['Price' => 1]];
} else if ($sort_string == "Price descending"){
    $option = ['sort' => ['Price' => -1]];
} 

//Find all of the customers that match  this criteria and sorted 
$cursor = $db->Products->find($findCriteria, $option);

// Include the PHP functions to be used on the page 
include('common.php'); 
	
// Output header and navigation 
outputHeader("BasketOverflow - Results");
outputNavbar();

// open the body 
openBody();

echo '<script src="options.js"></script>';

echo '<main class="col-md-15">';
echo '<header class="border-bottom mb-4 pb-4 text-muted">';
echo '<div class="form-inline">';

//Sorting by the price section.
echo '<select id = "sortby" class=" form-control" onchange="clicked()">';
if ($sort_string == "Price ascending"){
    echo '<option selected>Price ascending</option>'; // selected
    echo '<option>Price descending</option>';
} else {
    echo '<option>Price ascending</option>';
    echo '<option selected>Price descending</option>'; // selected
}
echo '</select>';
echo '</header>';


//Output the results
echo "<h1>Results...</h1>";
foreach ($cursor as $prodcutsInfo){
    echo '<article class= "card p-3">';
    echo "<p>";
    echo '<h1> ' . $prodcutsInfo['product_name'] .' </h1>';
    echo '<a href="#" class="h5 title" ' . $prodcutsInfo['type'] . '</a>';
    echo "</br>";
    echo "</br>";
    echo " Type: " . $prodcutsInfo['type'];
    echo "</br>";
    echo "</br>";
    echo '<a class="col-md-3" href="#"><img class="product-image" src=" ' . $prodcutsInfo['image'] . '  "></a>';
    echo "</br>";
    echo "</br>";
    echo " Description: " . $prodcutsInfo['Description'];
    echo "</br>";
    echo "</br>";
    echo '<aside class="col-md-3 my-auto">';
    echo '<p class="price h3"> ' . '£' . $prodcutsInfo['Price'] . '</p><br>';
    echo '<a href="basket.php" class="btn btn-primary">Add to basket</a>';
    echo '</aside>';
    echo "</p>";
    echo '</article><br>';
}

//close body, output the footer, and end html 
outputFooter();

?>