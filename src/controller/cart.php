<?php
/**
 * Created by PhpStorm.
 * User: Akame
 * Date: 28/05/2020
 * Time: 12:10
 */

require "model/cartManager.php";



function displayCart($cart){
    if (!isset($cart)){
        require "view/cart.php";
    }else{
        $articles = displayItems($cart);
        $totalPrice = displayTotalPrice($_SESSION['cart']);
        require_once "view/cart.php";
    }

}

function addItemCart(){

    $quantityToAdd = @$_POST['input-quantityToAdd'];
    $code = @$_POST['input-code'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = addItemToCart(null, $code, $quantityToAdd);
    }
    else{
        $_SESSION['cart'] = addItemToCart($_SESSION['cart'], $code, $quantityToAdd);
    }

    displayCart($_SESSION['cart']);
}

function deleteItemCart(){
    $itemCode = @$_GET['code'];
    $quantity = @$_GET['quantity'];
    deleteItemInCart($_SESSION['cart'], $itemCode, $quantity);

    displayCart(@$_SESSION['cart']);
}

function checkout(){
    if (!isset($_SESSION['userEmailAddress'])) require "view/login.php"; /* not connected */

    if (@$_SESSION['cart']->numberOfItems == 0) require "view/lost.php"; /* no items */

    checkoutCart($_SESSION['cart']);
    unset($_SESSION['cart']);
    displayCart(null);

}

function updateCart($codes){
    if (count($codes) < 1)  require "view/lost.php";
    else{
        $submitType = strtolower($_POST['submit_type']);
        $codeArray = $_POST;

        unset($codeArray['submit_type']);

        updateItemsInCart($codeArray, $_SESSION['cart']);

        if (strpos($submitType, "refresh")){
            displayCart(@$_SESSION['cart']);
        }
        else if (strpos($submitType, "checkout")) checkout();
    }
 }