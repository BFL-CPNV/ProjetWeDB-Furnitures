<?php
/**
 * Title      : usersManager.php
 * MVC Type   : model
 * Purpose    : User management
 * Author     : Pascal.BENZONANA
 * Updated by : Nicolas.GLASSEY
 * Version    : 13-APR-2020
 */

/**
 * This function is designed to verify user's login
 * @param $userEmailAddress
 * @param $userPsw
 * @return bool : "true" only if the user and psw match the database. In all other cases will be "false".
 */
function isLoginCorrect($userEmailAddress, $userPsw){
    $result = false;

    $strSeparator = '\'';
    $loginQuery = 'SELECT userHashPsw FROM users WHERE userEmailAddress = '. $strSeparator . $userEmailAddress . $strSeparator;

    require_once 'model/dbConnector.php';
    $queryResult = executeQuerySelect($loginQuery);

    if (count($queryResult) == 1)
    {
        $userHashPsw = $queryResult[0]['userHashPsw'];
        $result = password_verify($userPsw, $userHashPsw);
    }
    return $result;
}

/**
 * This function is designed to register a new account
 * @param $userEmailAddress
 * @param $userPsw
 * @return bool|null
 */
function registerNewAccount($userEmailAddress, $userPsw){
    $result = false;

    $strSeparator = '\'';

    $userHashPsw = password_hash($userPsw, PASSWORD_DEFAULT);

    $registerQuery = 'INSERT INTO users (`userEmailAddress`, `userHashPsw`) VALUES (' .$strSeparator . $userEmailAddress .$strSeparator . ','.$strSeparator . $userHashPsw .$strSeparator. ')';

    require_once 'model/dbConnector.php';
    $queryResult = executeQueryInsert($registerQuery);
    if($queryResult){
        $result = $queryResult;
    }
    return $result;
}