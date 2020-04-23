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
<h2>Login</h2>
<?php if (@$_GET['loginError'] == true) :?>
    <h5><span style="color:red">Login refusé</span></h5>
<?php endif ?>
<article>
      <form class='form' method='POST' action="index.php?action=login">
          <div class="container">
              <label for="userEmail"><b>Username</b></label>
              <input type="email" placeholder="Enter email address" name="inputUserEmailAddress" required>

              <label for="userPsw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="inputUserPsw" required>
          </div>
          <div class="container">
              <button type="submit" class="btn btn-default">Login</button>
              <button type="reset" class="btn btn-default">Reset</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
      </form>
    <div class="container signin">
        <p>Besoin d'un compte <a href="index.php?action=register">Register</a>.</p>
    </div>
</article>
<?php 
  $content = ob_get_clean();
  require 'gabarit.php';
?>