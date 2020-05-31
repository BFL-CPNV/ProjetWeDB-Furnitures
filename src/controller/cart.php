<?php
/**
 * Created by PhpStorm.
 * User: Akame
 * Date: 28/05/2020
 * Time: 12:10
 */

require_once "model/cartManager.php";
require_once "model/Cart.php";


function displayCart(){
    $articles = displayItems(@$_SESSION['cart']);
}

function addItemCart(){
    $cart = getCart(@$_SESSION['cart']);

}