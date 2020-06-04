<?php
/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
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
        case 'displayArticles' :
            displayArticles();
            break;
        case 'displaySingleArticle' :
            displaySingleArticle();
            break;
        case 'displayCart' :
            displayCart($_SESSION['cart']);
            break;
        case 'addItemCart' :
            addItemCart();
            break;
        case 'home' :
            home();
            break;
        case 'login' :
            login($_POST);
            break;
        case 'logout' :
            logout();
            break;
        case 'register' :
            register($_POST);
            break;
        default :
            lost();
    }
} else {
    home();
}