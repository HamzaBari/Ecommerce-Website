<?php

require __DIR__ . '/vendor/autoload.php';
//Get name and address strings - need to filter input to reduce chances of SQL injection etc.
$userString = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
// $addressString = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->Ecommerce;

$user = $db->Customers->findOne(["_id" => new MongoDB\BSON\ObjectID($userString)]);
$basket = $user->basket;

echo json_encode($basket);
