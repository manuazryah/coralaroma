<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

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

    <section id="main_category">
        <div class="container">
            <div class="main_head">
                <h3 class="head">Diffuser Systems</h3>
            </div>
            <div class="pro-info">
                <p>
                    <?= $home_contents->description2 ?>
                </p>
            </div>
        </div>
    </section>
    <?php if (!empty($product_category)) { ?>
        <section id="area-size">
            <?php foreach ($product_category as $category) { ?>
                <div class="sizing">
                    <div class="box" style="background:url('<?= Yii::$app->homeUrl; ?>uploads/product_category/<?= $category->id ?>/image.<?= $category->image ?>')">
                        <div class="overlay">
                            <div class="content">
                                <div class="title"><?= $category->category ?></div>
                                <div class="sub"><?= $category->description ?></div>
                                <?= Html::a('View More', ['/site/products-list', 'product' => $category->canonical_name], ['class' => 'read-more']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </section>
    <?php }
    ?>
</div>

