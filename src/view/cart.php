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
                    <?php if (!isset($_SESSION['cart']) || $articles == false || count($articles) == 0) : ?>
                        <h2 style="text-align: center">Empty cart</h2>
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
                                    <img src="<?php if (empty($article['img'])) : ?> view/content/img/feature/default.jpg <?php else: ?> <?= $article['img'] ?> <?php endif; ?>" alt="" style="height: 100px"/>
                                </div>
                                <div class="media-body">
                                    <p><?= $article['code'] ?></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <h5><?= $article['price'] ?></h5>
                        </td>
                        <td>
                            <div class="product_count">
                                <h5><?= $article['quantity'] ?></h5>
                            </div>
                        </td>
                        <td>
                            <h5><?= $article['totalPrice'] ?></h5>
                        </td>
                    </tr>
                        <?php endforeach; ?>
                    <tr class="bottom_button">
                        <td>
                            <a class="btn_1" href="#">Refresh Cart</a>
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="cupon_text float-right">
                                <a class="btn_1" href="#">Cancel Cart</a>
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
                            <h5><?= $totalPrice ?></h5>
                        </td>
                    </tr>
                    </tbody>

                    <?php endif; ?>
                </table>
                <div class="checkout_btn_inner float-right">
                    <a class="btn_1" href= >Continue Shopping</a>
                    <a class="btn_1 checkout_btn_1" href="index.php?action=checkout">Proceed to checkout</a>
                </div>
            </div>
        </div>
</section>
<?php

$content = ob_get_clean();
require "gabarit.php";

?>
