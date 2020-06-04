<?php
/**
 * Created by PhpStorm.
 * User: Akame
 * Date: 28/05/2020
 * Time: 13:19
 */

require_once "model/Cart.php";
require_once "controller/cart.php";

function displayItems($cart)
{
    return $cart->GetEveryItems();
}

function displayTotalPrice($cart){
    return $cart->GetTotalPrice();
}

function addItemToCart($cart, $code, $quantityToAdd)
{
    if ($cart == null){
        $cart = new Cart();
    }
    $cart->AddItemToCart($code, $quantityToAdd);
    return $cart;
}