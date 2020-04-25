<?php
/**
 * Title      : login.php
 * MVC Type   : view
 * Purpose    : login view for existing user
 * Author     : Pascal.BENZONANA
 * Updated by : Nicolas.GLASSEY
 * Version    : 13-APR-2020
 */

$title ='Rent A Snow - Login/Logout';

ob_start();
?>
<h2>Oupsss... on vous a perdu en chemin ;(.</h2>
<?php 
  $content = ob_get_clean();
  require 'gabarit.php';
?>