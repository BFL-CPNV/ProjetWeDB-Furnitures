<?php
/**
 * Created by PhpStorm.
 * User: Akame
 * Date: 28/05/2020
 * Time: 13:19
 */

require_once "model/Cart.php";


function displayItems()
{
    $cart = $_SESSION['cart'];

    return $cart;
}

function updateCart()
{
    $cart = new Cart();
    $_SESSION['cart'] = $cart;
}