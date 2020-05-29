<?php
/**
 * Created by PhpStorm.
 * User: Adam
 * Date: 28/05/2020
 * Time: 11:54
 */

ob_start();
$title = "Rent A Snow - Home";

?>


<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Cart Products</h2>
                        <p>Home <span>-</span>Cart Products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================Cart Area =================-->
<section class="cart_area padding_top">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <?php if (!isset($_SESSION['cart'])) : ?>
                    Empty cart
                    <?php else: ?>
                    <?php foreach ($articles as $article) :?>
                    <thead>
                    <tr>
                        <th scope="col">Article</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/product/single-product/cart-1.jpg" alt="" />
                                </div>
                                <div class="media-body">
                                    <p>----</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <h5>$000.00</h5>
                        </td>
                        <td>
                            <div class="product_count">
                                <span class="input-number-decrement"> <i class="ti-angle-down"></i></span>
                                <input class="input-number" type="text" value="1" min="0" max="10">
                                <span class="input-number-increment"> <i class="ti-angle-up"></i></span>
                            </div>
                        </td>
                        <td>
                            <h5>$000.00</h5>
                        </td>
                    </tr>

                    <tr class="bottom_button">
                        <td>
                            <a class="btn_1" href="#">Update Cart</a>
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="cupon_text float-right">
                                <a class="btn_1" href="#">Close Coupon</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <h5>Subtotal</h5>
                        </td>
                        <td>
                            <h5>$2160.00</h5>
                        </td>
                    </tr>
                    </tbody>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </table>
                <div class="checkout_btn_inner float-right">
                    <a class="btn_1" href="#">Continue Shopping</a>
                    <a class="btn_1 checkout_btn_1" href="#">Proceed to checkout</a>
                </div>
            </div>
        </div>
</section>
<?php

$content = ob_get_clean();
require "gabarit.php";

?>
