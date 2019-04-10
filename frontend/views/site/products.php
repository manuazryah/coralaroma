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
                <h3 class="sub-head">Coral Aroma</h3>
                <h3 class="head">Diffuser Systems</h3>
            </div>
            <div class="pro-info">
                <p>
                    Coral Aroma manufactures eco-friendly Scent Diffusion products that can be connected to advanced HVAC system. These easy to maintain diffusion systems are equipped with intelligent remote technology that allows users to adjust nearly every function of system including the intensity of the fragrance. Powered with strong technological features, diffusion systems can release the scent without the assistance from any type of aromatic equipment. Cold air diffusion technology used in the device ensures thorough proliferation of fragrance in the atmosphere. The advanced technology converts the liquid scent into microscopic units without compromising the naturalness of the essential oil. Diffusion systems of Coral Aroma have been designed to complement the most intricate interiors and sophisticated infrastructures. All diffusions systems produced by Coral Aroma are guaranteed durable life-span. Production of unforgettable scents through these aesthetically appealing Diffusion systems resonates strongly with human emotions.
                </p>
            </div>
        </div>
    </section>

    <section id="area-size">
        <div class="sizing">
            <div class="box" style="background:url('assets/images/products/diffuser-system/small-area.jpg')">
                <div class="overlay">
                    <div class="content">
                        <div class="title">Small Area</div>
                        <div class="sub">Coral Wall, s300 & k401,S200</div>
                        <a href="#!" class="read-more">View More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sizing">
            <div class="box" style="background:url('assets/images/products/diffuser-system/medium-area.jpg')">
                <div class="overlay">
                    <div class="content">
                        <div class="title">Medium Area</div>
                        <div class="sub">Coral Trunk, S1000,S15000</div>
                        <a href="#!" class="read-more">View More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sizing">
            <div class="box" style="background:url('assets/images/products/diffuser-system/large-area.jpg')">
                <div class="overlay">
                    <div class="content">
                        <div class="title">Large Area</div>
                        <div class="sub">B2000 & B5000,s3000,A2000,D5000,S4500</div>
                        <a href="#!" class="read-more">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

