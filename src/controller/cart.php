<?php
/**
 * @file      cart.php
 * @brief     This controller is designed to control the actions on the user's cart
 * @author    Created by Adam.GRUBER
 * @author    Updated by Bastien.FARDEL
 * @author    Updated by Kaarththigan.EAASWARALINGAM
 * @version   03-NOV-2020
 */

require "model/cartManager.php";


/**
 * @brief Display the cart's content
 * @param $cart
 */
function displayCart($cart){
    if (!isset($cart)){
        require "view/cart.php";
    }else{
        $articles = displayItems($cart);
        $totalPrice = displayTotalPrice($_SESSION['cart']);
        require_once "view/cart.php";
    }

}

/**
 * @brief Add an item to the cart
 */
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

/**
 * @brief Delete an item from the cart
 */
function deleteItemCart(){
    $itemCode = @$_GET['code'];
    $quantity = @$_GET['quantity'];
    deleteItemInCart($_SESSION['cart'], $itemCode, $quantity);

    displayCart(@$_SESSION['cart']);
}

/**
 * @brief Checkout the cart
 */
function checkout(){
    if (!isset($_SESSION['userEmailAddress'])){
        require "view/login.php";
    }
    else{
        unset($_SESSION['cart']);
        displayCart(null);
    }
}

/**
 * @brief Update / Refresh the cart
 * @param $codes
 */
function updateCart($codes){
    if (count($codes) < 1){
        require "view/lost.php";
    }
    else{
        $codeArray = $_POST;
        updateItemsInCart($codeArray, $_SESSION['cart']);
        displayCart(@$_SESSION['cart']);
    }
 }