<?php
/**
 * @file      articles.php
 * @brief     this controller is designed to manage articles actions
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @author    Updated by Adam.GRUBER
 * @version   14-MAI-2020
 */

/**
 * @brief This function is designed to display Articles
 */
require_once "model/articlesManager.php";

function displayArticles()
{
    try {
        $snowsResults = getArticles();
    } catch (ModelDataBaseException $ex) {
        $articleErrorMessage = "Nous rencontrons temporairement un problème technique pour afficher nos produits. Désolé du dérangement !";
    } finally {
        require "view/articles.php";
    }
}

/**
 * @brief This function is designed to display one article from the code given
 */
function displaySingleArticle()
{
    try {
        $code = $_GET['code'];
        $singleArticle = getSingleArticleByCode($code);
    } catch (ModelDataBaseException $ex) {
        $articleErrorMessage = "Nous rencontrons temporairement un problème technique pour afficher nos produits. Désolé du dérangement !";
    } finally {
        require "view/displaySingleArticle.php";
    }
}