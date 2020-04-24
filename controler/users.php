<?php
/**
 * Title      : users.php
 * MVC Type   : controler
 * Purpose    : users management
 * Author     : Pascal.BENZONANA
 * Updated by : Nicolas.GLASSEY
 * Version    : 13-APR-2020
 */

/*
 * This controler was designed to manage all actions concerning the users.
 */

/**
 * This function is designed to redirect the user to the home page (depending on the action received by the index)
 */
function home(){
    require "view/home.php";
}

/**
 * This function is designed to manage login request
 * @param $loginRequest containing login fields required to authenticate the user
 */
function login($loginRequest){
    //if a login request was submitted
    if (isset($loginRequest['inputUserEmailAddress']) && isset($loginRequest['inputUserPsw'])) {
        //extract login parameters
        $userEmailAddress = $loginRequest['inputUserEmailAddress'];
        $userPsw = $loginRequest['inputUserPsw'];

        //try to check if user/psw are matching with the database
        require_once "model/usersManager.php";
        if (isLoginCorrect($userEmailAddress, $userPsw)) {
            createSession($userEmailAddress);
            require "view/home.php";
        } else { //if the user/psw does not match, login form appears again
            require "view/login.php";
        }
    }else{ //the user does not yet fill the form
        require "view/login.php";
    }
}

/**
 * This fonction is designed //TODO
 * @param $registerRequest : //TODO
 */
function register($registerRequest){
    //variable set
    if (isset($registerRequest['inputUserEmailAddress']) && isset($registerRequest['inputUserPsw']) && isset($registerRequest['inputUserPswRepeat'])) {

        //extract register parameters
        $userEmailAddress = $registerRequest['inputUserEmailAddress'];
        $userPsw = $registerRequest['inputUserPsw'];
        $userPswRepeat = $registerRequest['inputUserPswRepeat'];

        if ($userPsw == $userPswRepeat){
            require_once "model/usersManager.php";
            if (registerNewAccount($userEmailAddress, $userPsw)){
                createSession($userEmailAddress);
                require "view/home.php";
            }
        }else{
            require "view/register.php";
        }
    }else{
        require "view/register.php";
    }
}

/**
 * This function is designed to create a new user session
 * @param $userEmailAddress : user unique id
 */
function createSession($userEmailAddress){
    $_SESSION['userEmailAddress'] = $userEmailAddress;
}

/**
 * This function is designed to manage logout request
 */
function logout(){
    $_SESSION = array();
    session_destroy();
    require "view/home.php";
}