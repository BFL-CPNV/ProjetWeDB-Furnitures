<?php
/**
 * Title      : articles.php
 * Type       : controler
 * Purpose    : articles management
 * Author     : Pascal.BENZONANA
 * Updated by : Nicolas.GLASSEY
 * Version    : 13-APR-2020
 */

/*
 * This controler was designed to manage all actions concerning the articles.
 */

/**
 * This function is designed to display Articles
 */
function displayArticles()
{
    require_once "model/articlesManager.php";
    try {
        $snowsResults = getArticles();
    } catch (ModelDataBaseException $ex) {
        $articleErrorMessage = "Nous rencontrons temporairement un problème technique pour afficher nos produits. Désolé du dérangement !";
    } finally {
        require "view/articles.php";
    }
}