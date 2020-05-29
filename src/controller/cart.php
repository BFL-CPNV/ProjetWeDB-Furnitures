<?php
/**
 * Created by PhpStorm.
 * User: Akame
 * Date: 28/05/2020
 * Time: 12:10
 */

require_once "model/cartManager.php";


function displayCart(){
    $articles = displayItems();
    $test = $articles->numberOfItems;
    echo $test;
}