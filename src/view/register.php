<?php
/**
 * @file      register.php
 * @brief     This view is designed to display the register form
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

$title = 'Rent A Snow - Inscription';

ob_start();
?>
<?php if(isset($registerErrorMessage)) : ?>
    <h5><span style="color:red"><?= $registerErrorMessage; ?></span></h5>
<?php endif ?>

    <section class="login_part padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Vous avez déjà un compte ?</h2>
                            <p>Cliquez sur le bouton ci-dessous</p>
                            <a href="index.php?action=login" class="btn_3">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>S'inscrire</h3>
                            <form class="row contact_form" action="index.php?action=login" method="POST" novalidate="novalidate">
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" id="name" name="inputUserEmailAddress" value=""
                                           placeholder="Email address" required>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="inputUserPsw" value=""
                                           placeholder="Mot de passe" required>
                                </div>

                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="inputUserPswRepeat" value=""
                                           placeholder="Confirmation mot de passe" required>
                                </div>


                                <div class="col-md-12 form-group">
                                    <p>En soumettant votre demande de compte, vous validez les conditions générales d'utilisation.<a
                                                href="https://termsfeed.com/blog/privacy-policies-vs-terms-conditions/"> CGU et vie
                                            privée</a>.</p>
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

    <!--<article>
        <form class='form' method='POST' action="index.php?action=register">

            <p>Pour vous inscrire chez Snows, nous vous prions de renseigner les champs suivants:</p>
            <div class="container">
                <label for="userEmail"><b>Adresse email</b></label>
                <input type="email" placeholder="Email address" name="inputUserEmailAddress" required>

                <label for="userPsw"><b>Mot de passe</b></label>
                <input type="password" placeholder="Mot de passe" name="inputUserPsw" required>

                <label for="psw-repeat"><b>Vérifier le mot de passe</b></label>
                <input type="password" placeholder="Mot de passe" name="inputUserPswRepeat" required>

                <p>En soumettant votre demande de compte, vous validez les conditions générales d'utilisation.<a
                            href="https://termsfeed.com/blog/privacy-policies-vs-terms-conditions/">CGU et vie
                        privée</a>.</p>
                <button type="submit" class="registerbtn">S'inscrire</button>
            </div>
        </form>
        <div class="container signin">
            <p>Déjà membre ? <a href="index.php?action=login">Login</a>.</p>
        </div>
    </article> -->
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>