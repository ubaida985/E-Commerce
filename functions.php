<?php

// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/Product.php');

// require Cart Class
require ('database/Cart.php');


require ('database/Validation.php');


// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$productShuffle = $product->getData();

$blogShuffle = $product->getData('blog');

// Cart object
$cartObj = new Cart($db );


//checks whether the item is already present in the cart
$inCart = $cartObj->getCartId($product->getData('cart')) ?? [];

$validationObj = new Validation($db);
