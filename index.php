<?php
/**
 * Title      : index.php
 * MVC Type   : rooter
 * Purpose    : user action management. Redirection to the controler.
 * Author     : Pascal.BENZONANA
 * Updated by : Nicolas.GLASSEY
 * Version    : 13-APR-2020
 */

session_start();
require "controler/users.php";
require "controler/articles.php";

if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {
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
      case 'displayArticles' :
          displayArticles();
          break;
      default :
          home();//TODO 404
  }
}
else {
    home();
}