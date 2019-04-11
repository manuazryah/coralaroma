<?php

use yii\bootstrap\Html;
use yii\widgets\ListView;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'Coral Aroma Products';
}
?>

<div id="products_page" class="inner-page">

    <section id="banner" style="background-image: url('<?= Yii::$app->homeUrl; ?>uploads/baner_images/products.<?= $baner_image->products ?>')">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">Products</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index'], ['class' => '']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Services">Products</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="product-gallery" class="product-view">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pro-gallery-grid">
                    <div class="pro-image-zoom" data-columns="4">
                        <figure class="product-gallery__wrapper">
                            <?php
                            $product_image = Yii::$app->basePath . '/../uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '.' . $product_details->profile_image;
                            if (file_exists($product_image)) {
                                ?>
                                <div data-thumb="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile_image ?>" class="product-gallery__image">
                                    <a class="wpb-wiz-main-images">
                                        <div class="zoomWrapper"><img src="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile_image ?>" class="wpb-wiz-main-image wp-post-image img-fluid" alt="" title="" data-zoom-image="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile_image ?>" ></div>
                                    </a>
                                </div>
                                <?php
                            } else {
                                ?>
                                <div data-thumb="<?= Yii::$app->homeUrl . 'uploads/product/gallery_dummy.png' ?>" class="product-gallery__image">
                                    <a class="wpb-wiz-main-images">
                                        <div class="zoomWrapper"><img src="<?= Yii::$app->homeUrl . 'uploads/product/gallery_dummy.png' ?>" class="wpb-wiz-main-image wp-post-image img-fluid" alt="" title="" data-zoom-image="<?= Yii::$app->homeUrl . 'uploads/product/gallery_dummy.png' ?>" ></div>
                                    </a>
                                </div>
                            <?php }
                            ?>
                            <div id="wpb_wiz_gallery" class="thumbnails wpb_wiz_gallery_slider owl-theme owl-carousel" style="display: block;">
                                <div class="owl-wrapper-outer">
                                    <div class="owl-wrapper" style="display: block;">
                                        <?php
                                        if (file_exists($product_image)) {
                                            ?>
                                            <div class="owl-item">
                                                <div class="wpb-woocommerce-product-gallery__image">
                                                    <a href="#!" data-image="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile_image ?>" data-zoom-image="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile_image ?>"><img width="250" height="250" src="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile_image ?>" class="attachment-shop_single size-shop_single img-fluid" alt="" title=""></a>
                                                </div>
                                            </div>
                                        <?php }
                                        ?>
                                        <?php
                                        $path = Yii::getAlias('@paths') . '/product/' . $product_details->id . '/gallery_thumb';
                                        if (file_exists($product_image)) {
                                            if (count(glob("{$path}/*")) > 0) {

                                                $k = 0;
                                                foreach (glob("{$path}/*") as $file) {
                                                    if ($k <= '2') {
                                                        $k++;
                                                        $arry = explode('/', $file);
                                                        $img_nmee = end($arry);
                                                        $img_nmees = explode('.', $img_nmee);
                                                        if ($img_nmees['1'] != '') {
                                                            ?>
                                                            <div class="owl-item">
                                                                <div class="wpb-woocommerce-product-gallery__image">
                                                                    <a href="#!" data-image="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/gallery/' . end($arry) ?>" data-zoom-image="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/gallery/' . end($arry) ?>"><img width="250" height="250" src="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/gallery/' . end($arry) ?>" class="attachment-shop_single size-shop_single img-fluid" alt="" title=""></a>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-7 prodtl">
                    <h1 class="pro-name"><?= $product_details->product_name ?></h1>
                    <?= $product_details->description ?>
                    <?php
                    if (!empty($product_details)) {
                        ?>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#Dimenssions" role="tab" data-toggle="tab">Dimenssions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Features" role="tab" data-toggle="tab">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Coverage" role="tab" data-toggle="tab">Coverage</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Power" role="tab" data-toggle="tab">Power</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Scent" role="tab" data-toggle="tab">Scent</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="Dimenssions">
                                <div class="spec">
                                    <?php
                                    if ($product_details->dimenssions != '') {
                                        ?>
                                        <h6 class="title">Dimenssions</h6>
                                        <?= $product_details->dimenssions ?>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Features">
                                <div class="spec">
                                    <?php
                                    if ($product_details->features != '') {
                                        ?>
                                        <h6 class="title">Features</h6>
                                        <?= $product_details->features ?>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Coverage">
                                <div class="spec">
                                    <?php
                                    if ($product_details->coverage != '') {
                                        ?>
                                        <h6 class="title">Coverage</h6>
                                        <?= $product_details->coverage ?>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Power">
                                <div class="spec">
                                    <?php
                                    if ($product_details->power != '') {
                                        ?>
                                        <h6 class="title">Power</h6>
                                        <?= $product_details->power ?>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Scent">
                                <div class="spec">
                                    <?php
                                    if ($product_details->scent != '') {
                                        ?>
                                        <h6 class="title">Scent</h6>
                                        <?= $product_details->scent ?>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="color-spec">
                            <?php
                            $path = Yii::getAlias('@paths') . '/product/' . $product_details->id . '/colours';
                            if (file_exists($product_image)) {
                                if (count(glob("{$path}/*")) > 0) {
                                    ?>
                                    <h1 class="clr-name">COLORS</h1>
                                    <?php
                                    $k = 0;
                                    foreach (glob("{$path}/*") as $file) {
                                        if ($k <= '2') {
                                            $k++;
                                            $arry = explode('/', $file);
                                            $img_nmee = end($arry);
                                            $img_nmees = explode('.', $img_nmee);
                                            if ($img_nmees['1'] != '') {
                                                ?>
                                                <div class="color-item">
                                                    <img src="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/colours/' . end($arry) ?>" alt="colours" class="img-fluid"/>
                                                </div>
                                                <?php
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        ?>
                    </div>
                    <?= Html::a('Contact Now', ['/site/contact'], ['class' => 'contact-btn']) ?>
                </div>
            </div>
        </div>
    </section>

</div>