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
    if (isset($cart)){
        $cart = unserialize($cart);
        return $cart->GetEveryItems();
    } else{
        return "No session";
    }
}

function getCart($cart){
    if (!isset($cart)){
        $cart = new Cart();
        $_SESSION['cart'] = serialize($cart);
        return $_SESSION['cart'];
    }

    return $_SESSION['cart'];
}