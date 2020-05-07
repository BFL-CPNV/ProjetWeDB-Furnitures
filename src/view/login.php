<?php
/**
 * @file      login.php
 * @brief     This view is designed to display the login form
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

$title = 'Rent A Snow - Login/Logout';

ob_start();
?>
<?php if(isset($loginErrorMessage)) : ?>
    <h5><span style="color:red"><?= $loginErrorMessage; ?></span></h5>
<?php endif ?>

    <section class="login_part padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Besoin d'un compte ?</h2>
                            <p>Cliquez sur le bouton ci-dessous</p>
                            <a href="index.php?action=register" class="btn_3">S'inscrire</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Login</h3>
                            <form class="row contact_form" action="index.php?action=login" method="POST" novalidate="novalidate">
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" id="name" name="inputUserEmailAddress" value=""
                                           placeholder="E-mail address" required>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="inputUserPsw" value=""
                                           placeholder="Password" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Remember me</label>
                                    </div>
                                    <button type="submit" value="submit" class="btn_3">
                                        log in
                                    </button>
                                    <a class="lost_pass" href="#">forget password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- <article>
        <form class='form' method='POST' action="index.php?action=login">
            <div class="container">
                <label for="userEmail"><b>Adresse email</b></label>
                <input type="email" placeholder="Adresse email" name="inputUserEmailAddress" required>

                <label for="userPsw"><b>Mot de passe</b></label>
                <input type="password" placeholder="Mot de passe" name="inputUserPsw" required>
            </div>
            <div class="container">
                <button type="submit" class="btn btn-default">Login</button>
                <button type="reset" class="btn btn-default">Effacer</button>
                <span class="psw"><a href="index.php?action=forgotPassword">Mot de passe oublié ?</a></span>
            </div>
        </form>
        <div class="container signin">
            <p>Besoin d'un compte <a href="index.php?action=register">S'inscrire</a>.</p>
        </div>
    </article>  -->
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>