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

//region users management
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
 * This fonction is designed
 * @param $registerRequest
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
    //set user type in Session
    $userType = getUserType($userEmailAddress);
    $_SESSION['userType'] = $userType;
}

/**
 * This function is designed to manage logout request
 */
function logout(){
    $_SESSION = array();
    session_destroy();
    require "view/home.php";
}
//endregion


//region snows management
/**
 * This function is designed to display Snows
 * There are two different view available.
 * One for the seller, an other one for the customer.
 */
function displaySnows(){
    if (isset($_POST['resetCart'])) {
        unset($_SESSION['cart']);
    }

    require_once "model/snowsManager.php";
    $snowsResults = getSnows();

    if (isset($_SESSION['userType']))
    {
        switch ($_SESSION['userType']) {
            case 1://this is a customer
                require "view/articles.php";
                break;
            case 2://this a seller
                require "view/snowsSeller.php";
                break;
            default:
                require "view/articles.php";
                break;
        }
    }else{
        require "view/articles.php";
    }
}

/**
 * This function is designed to get only one snow results (for aSnow view)
 * @param none
 */
function displayASnow($snow_code){
    if (isset($registerRequest['inputUserEmailAddress'])){
        //TODO
    }
    require_once "model/snowsManager.php";
    $snowsResults= getASnow($snow_code);
    require "view/aSnow.php";
}
//endregion

//region Cart Management
function displayCart(){
    $_GET['action'] = "cart";
    require "view/cart.php";
}


function snowLeasingRequest($snowCode){
     require "model/snowsManager.php";
     $snowsResults = getASnow($snowCode);
     $_GET['action'] = "snowLeasingRequest";
     require "view/snowLeasingRequest.php";
}

/**
 * This function designed to manage all request impacting the cart content
 * @param $snowCode
 * @param $snowLocationRequest
 */
function updateCartRequest($snowCode, $snowLocationRequest){
    $cartArrayTemp = array();
    if(($snowLocationRequest) AND ($snowCode)) {
        if (isset($_SESSION['cart'])) {
            $cartArrayTemp = $_SESSION['cart'];
        }
        require "model/cartManager.php";
        $cartArrayTemp = updateCart($cartArrayTemp, $snowCode, $snowLocationRequest['inputQuantity'], $snowLocationRequest['inputDays']);
        $_SESSION['cart'] = $cartArrayTemp;
    }
    $_GET['action'] = "displayCart";
    displayCart();
}
//endregion