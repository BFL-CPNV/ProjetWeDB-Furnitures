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
    <section class="login_part padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Already got an account ?</h2>
                            <p>Login here !</p>
                            <a href="index.php?action=login" class="btn_3">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Register</h3>

                            <?php if (isset($_GET['register-error'])) {
                                if ($_GET['register-error'] == true) {
                                    echo "<div><h6 style='color:red'><strong>Something went wrong...</strong></h6></div><br>";
                                }
                            }

                            if (isset($_GET['register-pwd-error'])) {
                                if ($_GET['register-pwd-error'] == true) {
                                    echo "<div><h6 style='color:red'><strong>The passwords do not match</strong></h6></div><br>";
                                }
                            }

                            if (isset($_GET['database-error'])) {
                                if ($_GET['database-error'] == true) {
                                    echo "<div><h6 style='color:red'><strong>We encountered an unexpected error...(ERROR 503)</strong></h6></div><br>";
                                }
                            }
                            ?>

                            <form class="row contact_form" action="index.php?action=register" method="POST">
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" id="name" name="inputUserEmailAddress"
                                           value=""
                                           placeholder="Email address" required>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="inputUserPsw"
                                           value=""
                                           placeholder="Password" required>
                                </div>

                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="inputUserPswRepeat"
                                           value=""
                                           placeholder="Confirm password" required>
                                </div>


                                <div class="col-md-12 form-group">
                                    <p>By registering an account, you agree to the general conditions of use.<a
                                                href="https://termsfeed.com/blog/privacy-policies-vs-terms-conditions/">
                                            CGU and private life</a>.</p>
                                    <button type="submit" value="submit" class="btn_3">
                                        Register
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