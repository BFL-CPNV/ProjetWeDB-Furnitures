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

function deleteItemInCart($cart, $code, $quantity){
    $cart->DeleteItemToCart($code,$quantity);
}

function updateItemsInCart($codeArray, $cart){
    $keys = array_keys($codeArray);
    $index = 0;

    $newArray = array();
    foreach ($codeArray as $item){
        $code = str_replace('-', '', substr($keys[$index],strpos($keys[$index], '-', 17))); /* This basically gets the code of the item */
        if ($item == null) {
            deleteItemInCart($cart, $code, $item);
            array_splice($codeArray, $index, 1);
        }
        $index++;
    }
    $cart->UpdateCart($codeArray);
}