<?php
/**
 * @file      articlesManager.php
 * @brief     This model is designed to implement the articles business logic
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @author    Updated by Adam.GRUBER
 * @version   14-MAI-2020
 */

/**
 * @brief This function is designed to get all active articles
 * @return array : containing all information about the articles. Array can be empty.
 * @throws ModelDataBaseException : will be throw if something goes wrong with the database opening process
 */

require_once 'model/dbConnector.php';

function getArticles()
{

    $snowsQuery = 'SELECT code, brand, material, price, qtyAvailable, photo, active FROM furnitures';

    return executeQuerySelect($snowsQuery);
}

/**
 * @brief This function is designed to get on particular article thank to the code
 * @return array : containing all information about the articles.
 * @throws ModelDataBaseException : will be throw if something goes wrong with the database opening process
 */
function getSingleArticleByCode($code){
    $articleQuery = "SELECT code, brand, material, price, qtyAvailable, photo, active, description, longDescription FROM furnitures where code = '$code';";

    return executeQuerySelect($articleQuery);
}