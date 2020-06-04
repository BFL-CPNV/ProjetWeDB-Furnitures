<?php
/**
 * Created by PhpStorm.
 * User: Akame
 * Date: 28/05/2020
 * Time: 12:10
 */

require "model/cartManager.php";



function displayCart($cart){

    $articles = displayItems($cart);
    $totalPrice = displayTotalPrice($_SESSION['cart']);
    require_once "view/cart.php";
}

function addItemCart(){

    $quantityToAdd = $_POST['input-quantityToAdd'];
    $code = $_POST['input-code'];

    echo $code . '<br>' . $quantityToAdd;
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = addItemToCart(null, $code, $quantityToAdd);
    }
    else{
        $_SESSION['cart'] = addItemToCart($_SESSION['cart'], $code, $quantityToAdd);
    }

    displayCart($_SESSION['cart']);
}