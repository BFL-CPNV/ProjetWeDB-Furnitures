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
                            <?php if (isset($_GET['login-error'])) {
                                if ($_GET['login-error'] == true) {
                                    echo "<div><h6 style='color:red'><strong>L'email ou le mot de passe est incorrect.</strong></h6></div><br>";
                                }
                            }

                            if (isset($_GET['database-error'])) {
                                if ($_GET['database-error'] == true) {
                                    echo "<div><h6 style='color:red'><strong>Nous avons rencontré une erreur inattendue...(ERROR 503)</strong></h6></div><br>";
                                }
                            }
                            ?>


                            <form class="row contact_form" action="index.php?action=login" method="POST">
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" id="name" name="inputUserEmailAddress"
                                           value=""
                                           placeholder="E-mail address" required>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="inputUserPsw"
                                           value=""
                                           placeholder="Password" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="submit" class="btn_3">
                                        log in
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>