<?php

/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @author    Updated by Adam.GRUBER
 * @author    Updated by Bastien.FARDEl
 * @author    Updated by Kaarththigan.EAASWARALINGAM
 * @version   03-NOV-2020
 */
require "model/Cart.php";
session_start();
require "controller/articles.php";
require "controller/navigation.php";
require "controller/users.php";
require "controller/cart.php";


if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'displayArticles' : //Go to Articles page
            displayArticles();
            break;
        case 'displaySingleArticle' : //Go to a specific article's page
            displaySingleArticle();
            break;
        case 'displayCart' : //Go to the user's cart
            displayCart(@$_SESSION['cart']);
            break;
        case 'addItemCart' : //Adds the item to the cart
            addItemCart();
            break;
        case 'deleteItem' : //Deletes the item from the cart
            deleteItemCart();
            break;
        case 'home' : //Go to home page
            home();
            break;
        case 'login' : //Go to login page
            login($_POST);
            break;
        case 'logout' : //Logout the user
            logout();
            break;
        case 'register' : //Go to register page
            register($_POST);
            break;
        case 'checkout' : //Checkout the cart
            checkout();
            break;
        case 'updateCart': //Refresh the cart and apply changes
            updateCart($_POST);
            break;
        default : //Illegal or Unknown action sends the user to the lost page
            lost();
    }
} else { //Otherwise go to the home page
    home();
}