<?php
/**
 * Title      : articlesManager.php
 * Type       :  model
 * Purpose    : Snows management
 * Author     : Pascal.BENZONANA
 * Updated by : Nicolas.GLASSEY
 * Version    : 13-APR-2020
 */

/**
 * This function is designed to get all active snows
 * @return array : containing all information about snows. Array can be empty.
 * @throws ModelDataBaseException : will be throw if something goes wrong with the database opening process
 */
function getArticles()
{

    $snowsQuery = 'SELECT code, brand, model, snowLength, dailyPrice, qtyAvailable, photo, active FROM snows';

    require_once 'model/dbConnector.php';

    return executeQuerySelect($snowsQuery);
}