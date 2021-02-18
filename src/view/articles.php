<?php
/**
 * @file      articles.php
 * @brief     This view is designed to display articles
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @author    Updated by Adam.GRUBER
 * @author    Updated by Bastien.FARDEL
 * @author    Kaarththigan.EAASWARALINGAM
 * @version   03-NOV-2020
 */

$title = "Rent A Snow - Snows";

ob_start();
$rows = 0; // Column count
?>

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding">
        <div class="container">
            <div class="row align-items-center latest_product_inner">
                <?php
                if (isset($snowsResults)) {
                    foreach ($snowsResults as $item) :
                        ?>
                        <div class="col-lg-4 col-sm-6">
                            <a href="index.php?action=displaySingleArticle&code=<?= $item['code'] ?>"
                               style="cursor: pointer">
                                <div class="single_product_item">
                                    <img src="
                                <?php if (empty($item['photo'])) : ?> view/content/img/feature/default.jpg <?php else: ?> <?= $item['photo'] ?> <?php endif; ?>"
                                         alt="">
                                    <form action="index.php?action=addItemCart" method="post"
                                          id="all-articles-form-<?= $item['code'] ?>">
                                        <input type="hidden" value="<?= $item['code'] ?>" name="input-code">
                                        <input type="hidden" value="1" name="input-quantityToAdd">
                                        <div class="single_product_text">
                                            <h4><?= $item['brand'] ?></h4>
                                            <h3>CHF <?= $item['price'] ?></h3>
                                            <a onclick="document.getElementById('all-articles-form-<?= $item['code'] ?>').submit();"
                                               class="add_cart" style="cursor: pointer">+ add to cart</a>
                                        </div>
                                    </form>
                                </div>
                            </a>
                        </div>
                    <?php endforeach;
                }
                {
                    if (isset($_GET['database-error'])) {
                        if ($_GET['database-error'] == true) {
                            echo "<div><h7 style='color:red'><strong>Sorry, we encountered an unexpected error...(ERROR 503)</strong></h7></div><br>";
                        }
                    }
                } ?>
            </div>
        </div>
        </div>
        </div>
    </section>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>