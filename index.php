<?php
/**
 * Title      : index.php
 * MVC Type   : controler
 * Purpose    : user action management
 * Author     : Pascal.BENZONANA
 * Updated by : Nicolas.GLASSEY
 * Version    : 13-APR-2020
 */

session_start();
require "controler/users.php";

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
      case 'displaySnows' :
          displaySnows();
          break;
      default :
          home();
  }
}
else {
    home();
}