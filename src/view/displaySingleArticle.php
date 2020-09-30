<?php
/**
 * Created by PhpStorm.
 * User: Akame
 * Date: 13/05/2020
 * Time: 15:47
 */

$title = "Rent A Snow - Snows";

ob_start();
?>
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Shop Single</h2>
                        <p>Home <span>-</span> Shop Single</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
<!--================End Home Banner Area =================-->

<!--================Single Product Area =================-->
<?php
if (isset($singleArticle)) { ?>
    <div class="product_image_area section_padding">
        <div class="container">
            <div class="row s_product_inner justify-content-between">
                <div class="col-lg-7 col-xl-7">
                    <div class="product_slider_img">
                        <div id="vertical">
                            <?php
                            for ($i = 0; $i <= 3; $i++) : ?>
                                <?php
                                $url = $singleArticle[0]['photo'];
                                $url = substr_replace($url, $i + 1, -5, 1)
                                ?>
                                <div data-thumb="<?php if (strlen($url) < 5) : ?> view/content/img/feature/default.jpg <?php else: ?> <?= $url ?> <?php endif; ?>">
                                    <img src="<?php if (strlen($url) < 5) : ?> view/content/img/feature/default.jpg <?php else: ?> <?= $url ?> <?php endif; ?>"/>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="s_product_text">
                        <h5>previous <span>|</span> next</h5>
                        <h3><?= $singleArticle[0]['material'] ?></h3>
                        <h2>CHF <?= $singleArticle[0]['price'] ?></h2>
                        <ul class="list">
                            <li>
                                <a class="active" href="#">
                                    <span>Category :  </span> Household
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Availibility :  </span> <?php if ($singleArticle[0]['active']) : ?> In stock <?php else: ?> Out of stock <?php endif; ?>
                                </a>
                            </li>
                        </ul>
                        <p><?= $singleArticle[0]['description'] ?></p>
                        <form action="index.php?action=addItemCart" method="post" id="quantity-form"
                              style="display: inline-block;">
                            <div class="card_area d-flex justify-content-between align-items-center">
                                <input type="hidden" value="<?= $singleArticle[0]['code'] ?>" name="input-code">
                                <div class="product_count">
                                    <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                                    <input class="input-number single-article-input-disabled" type="text" value="1"
                                           min="1" max="10"
                                           name="input-quantityToAdd">
                                    <span class="number-increment"> <i class="ti-plus"></i></span>
                                </div>
                                <a href="#"
                                   onclick="document.getElementById('quantity-form').submit();" class="btn_3">add to
                                    cart</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                       aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                       aria-controls="profile"
                       aria-selected="false">Specification</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                       aria-controls="contact"
                       aria-selected="false">Comments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab"
                       aria-controls="review"
                       aria-selected="false">Reviews</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p>
                        <?= $singleArticle[0]['longDescription']; ?>
                    </p>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    <h5>Width</h5>
                                </td>
                                <td>
                                    <h5>128mm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Height</h5>
                                </td>
                                <td>
                                    <h5>508mm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Depth</h5>
                                </td>
                                <td>
                                    <h5>85mm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Weight</h5>
                                </td>
                                <td>
                                    <h5>52gm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Quality checking</h5>
                                </td>
                                <td>
                                    <h5>yes</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Freshness Duration</h5>
                                </td>
                                <td>
                                    <h5>03days</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>When packeting</h5>
                                </td>
                                <td>
                                    <h5>Without touch of hand</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Each Box contains</h5>
                                </td>
                                <td>
                                    <h5>60pcs</h5>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="comment_list">
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="view/content/img/product/single-product/review-1.png" alt=""/>
                                        </div>
                                        <div class="media-body">
                                            <h4>Blake Ruiz</h4>
                                            <h5>12th Feb, 2017 at 05:56 pm</h5>
                                        </div>
                                    </div>
                                    <p>
                                        Gotta say I was amazed with the quality, never thought I'd find
                                        such quality for this item, very happy with the product.
                                    </p>
                                </div>
                                <div class="review_item reply">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="view/content/img/product/single-product/review-2.png" alt=""/>
                                        </div>
                                        <div class="media-body">
                                            <h4>Jacob Truiz</h4>
                                            <h5>12th Feb, 2017 at 05:56 pm</h5>
                                        </div>
                                    </div>
                                    <p>
                                        Quite surprised, I was waiting for a lesser quality but what I got
                                        is more than enough to make me change my mind, would buy again.
                                    </p>
                                </div>
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="view/content/img/product/single-product/review-3.png" alt=""/>
                                        </div>
                                        <div class="media-body">
                                            <h4>Blare Raiz</h4>
                                            <h5>12th Feb, 2017 at 05:56 pm</h5>
                                        </div>
                                    </div>
                                    <p>
                                        Had a lot of fun putting together with my kids, the pieces were well kept and
                                        no trace of any cuts or anything of the sort, I'm very happy with this order.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row total_rate">
                                <div class="col-6">
                                    <div class="box_total">
                                        <h5>Overall</h5>
                                        <h4>4.0</h4>
                                        <h6>(03 Reviews)</h6>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="rating_list">
                                        <h3>Based on 3 Reviews</h3>
                                        <ul class="list">
                                            <li>
                                                <a href="#">5 Star
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i> 01</a>
                                            </li>
                                            <li>
                                                <a href="#">4 Star
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i> 01</a>
                                            </li>
                                            <li>
                                                <a href="#">3 Star
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i> 01</a>
                                            </li>
                                            <li>
                                                <a href="#">2 Star
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i> 01</a>
                                            </li>
                                            <li>
                                                <a href="#">1 Star
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i> 01</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="review_list">
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="view/content/img/product/single-product/review-1.png" alt=""/>
                                        </div>
                                        <div class="media-body">
                                            <h4>Blake Ruiz</h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p>
                                        Top quality, nothing else to say.
                                    </p>
                                </div>
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="view/content/img/product/single-product/review-2.png" alt=""/>
                                        </div>
                                        <div class="media-body">
                                            <h4>Drake Buiz</h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p>
                                        I like this kind of site, easy to move through and quality products at cheap
                                        prices
                                        !
                                    </p>
                                </div>
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="view/content/img/product/single-product/review-3.png" alt=""/>
                                        </div>
                                        <div class="media-body">
                                            <h4>Lake Dumi</h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p>
                                        The color is wonderful, my wife loves it !
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Product Description Area =================-->

    <?php
}
{
    if (isset($_GET['database-error'])) {
        if ($_GET['database-error'] == true) {
            echo "
            <div class='roduct_image_area section_padding'>
                <div class='container'>
                    <div class='row s_product_inner justify-content-between'>
                        <div><h7 style='color:red'><strong>Sorry, we encountered an unexpected error...(ERROR 503)</strong></h7></div><br>
                    </div>
                </div>
            </div>";
        }
    }
} ?>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>
