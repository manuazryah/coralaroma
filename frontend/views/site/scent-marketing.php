<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'Scent Marketing';
}
?>

<div id="scent_marketing_page" class="inner-page">

    <section id="banner" style="background-image: url('<?= Yii::$app->homeUrl; ?>uploads/baner_images/scent_marketing.<?= $baner_image->scent_marketing ?>')">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">Scent Marketing</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index'], ['class' => '']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Scent Marketing">Scent Marketing</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="wheels">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wheel">
                        <a
                            href="#"><img
                                class="head-1 scope" src="assets/images/wheel/h1.png"></a>
                        <a
                            href="#"><img
                                class="head-2 scope2" src="assets/images/wheel/hh2.png"></a>
                        <a
                            href="#"><img
                                class="head-3 scope3" src="assets/images/wheel/h3.png"></a>
                        <a
                            href="#"><img
                                class="head-4 scope4" src="assets/images/wheel/h4.png"></a>
                        <a
                            href="#"><img
                                class="head-5 scope5" src="assets/images/wheel/h5.png"></a>
                        <a
                            href="#!"><img
                                class="poses" src="assets/images/wheel/center.png"></a>
                            <?= Html::a('<img class="pr ab" src="assets/images/wheel/fruity2.png" data-group="pr">', ['/site/scent-marketing-details', 'scent' => 'fruity'], ['class' => 'pos-1']) ?>
                            <?= Html::a('<img class="pr ab" src="assets/images/wheel/w2.png" data-group="pr">', ['/site/scent-marketing-details', 'scent' => 'floral'], ['class' => 'pos-2']) ?>
                            <?= Html::a('<img class="pr ab" src="assets/images/wheel/w3.png" data-group="pr">', ['/site/scent-marketing-details', 'scent' => 'soft-floral'], ['class' => 'pos-3']) ?>
                            <?= Html::a('<img class="pr ab" src="assets/images/wheel/w4.png" data-group="pr">', ['/site/scent-marketing-details', 'scent' => 'floral-oriental'], ['class' => 'pos-4']) ?>
                            <?= Html::a('<img class="pr ab" src="assets/images/wheel/w5.png" data-group="pr">', ['/site/scent-marketing-details', 'scent' => 'soft-oriental'], ['class' => 'pos-5']) ?>
                            <?= Html::a('<img class="pr ab" src="assets/images/wheel/spicy2.png" data-group="pr">', ['/site/scent-marketing-details', 'scent' => 'spicy-oriental'], ['class' => 'pos-6']) ?>
                            <?= Html::a('<img class="pr ab" src="assets/images/wheel/w7.png" data-group="pr">', ['/site/scent-marketing-details', 'scent' => 'sweet-oriental'], ['class' => 'pos-7']) ?>
                            <?= Html::a('<img class="pr ab" src="assets/images/wheel/w8.png" data-group="pr">', ['/site/scent-marketing-details', 'scent' => 'woody-oriental'], ['class' => 'pos-8']) ?>
                            <?= Html::a('<img class="pr ab" src="assets/images/wheel/w9.png" data-group="pr">', ['/site/scent-marketing-details', 'scent' => 'woods-mosses'], ['class' => 'pos-9']) ?>
                            <?= Html::a('<img class="pr ab" src="assets/images/wheel/Arabic2.png" data-group="pr">', ['/site/scent-marketing-details', 'scent' => 'arabic-oil'], ['class' => 'pos-10']) ?>
                            <?= Html::a('<img class="pr ab" src="assets/images/wheel/signature2.png" data-group="pr">', ['/site/scent-marketing-details', 'scent' => 'signature-scent'], ['class' => 'pos-11']) ?>
                            <?= Html::a('<img class="pr ab" src="assets/images/wheel/w12.png" data-group="pr">', ['/site/scent-marketing-details', 'scent' => 'water'], ['class' => 'pos-12']) ?>
                            <?= Html::a('<img class="pr ab" src="assets/images/wheel/w13.png" data-group="pr">', ['/site/scent-marketing-details', 'scent' => 'green-herbs'], ['class' => 'pos-13']) ?>
                            <?= Html::a('<img class="pr ab" src="assets/images/wheel/w14.png" data-group="pr">', ['/site/scent-marketing-details', 'scent' => 'citrus'], ['class' => 'pos-14']) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="wheel-mobile">
        <div class="container">
            <div id="accordion">
                <div class="card">
                    <div class="card-header">
                        <a class="left-b card-link  floral" data-toggle="collapse" href="#collapse1" aria-expanded="false">Floral Notes</a>
                    </div>
                    <div id="collapse1" class="collapse show" data-parent="#accordion" style="">
                        <div class="sizing">
                            <div class="in-product-left-categories"><!--in-left-Categories-->

                                <div class="other-range-box brands">
                                    <div class="content pad0">
                                        <ul>
                                            <li><?= Html::a('FRUITY', ['/site/scent-marketing-details', 'scent' => 'fruity']) ?></li>
                                            <li><?= Html::a('FLORAL', ['/site/scent-marketing-details', 'scent' => 'floral']) ?></li>
                                            <li><?= Html::a('SOFT FLORAL', ['/site/scent-marketing-details', 'scent' => 'soft-floral']) ?></li>
                                            <li><?= Html::a('FLORAL ORIENTAL', ['/site/scent-marketing-details', 'scent' => 'floral-oriental']) ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="left-b card-link collapsed oriental" data-toggle="collapse" href="#collapse2" aria-expanded="false">Oriental Notes</a>
                    </div>
                    <div id="collapse2" class="collapse" data-parent="#accordion" style="">
                        <div class="sizing">
                            <div class="in-product-left-categories"><!--in-left-Categories-->

                                <div class="other-range-box brands">
                                    <div class="content pad0">
                                        <ul>
                                            <li><?= Html::a('FLORAL ORIENTAL', ['/site/scent-marketing-details', 'scent' => 'floral-oriental']) ?></li>
                                            <li><?= Html::a('SOFT ORIENTAL', ['/site/scent-marketing-details', 'scent' => 'soft-oriental']) ?></li>
                                            <li><?= Html::a('SPICY ORIENTAL', ['/site/scent-marketing-details', 'scent' => 'spicy-oriental']) ?></li>
                                            <li><?= Html::a('SWEET ORIENTAL', ['/site/scent-marketing-details', 'scent' => 'sweet-oriental']) ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="left-b card-link collapsed woody" data-toggle="collapse" href="#collapse3" aria-expanded="false">Woody Notes</a>
                    </div>
                    <div id="collapse3" class="collapse" data-parent="#accordion" style="">
                        <div class="sizing">
                            <div class="in-product-left-categories"><!--in-left-Categories-->

                                <div class="other-range-box brands">
                                    <div class="content pad0">
                                        <ul>
                                            <li><?= Html::a('WOODY ORIENTAL', ['/site/scent-marketing-details', 'scent' => 'woody-oriental']) ?></li>
                                            <li><?= Html::a('WOODS & MOSSES', ['/site/scent-marketing-details', 'scent' => 'woods-mosses']) ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="left-b card-link collapsed signature" data-toggle="collapse" href="#collapse4" aria-expanded="false">Signature Notes</a>
                    </div>
                    <div id="collapse4" class="collapse" data-parent="#accordion" style="">
                        <div class="sizing">
                            <div class="in-product-left-categories"><!--in-left-Categories-->

                                <div class="other-range-box brands">
                                    <div class="content pad0">
                                        <ul>
                                            <li><?= Html::a('ARABIC OIL', ['/site/scent-marketing-details', 'scent' => 'arabic-oil']) ?></li>
                                            <li><?= Html::a('SIGNATURE SCENT', ['/site/scent-marketing-details', 'scent' => 'signature-scent']) ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="left-b card-link collapsed fresh" data-toggle="collapse" href="#collapse5" aria-expanded="false">Fresh Notes</a>
                    </div>
                    <div id="collapse5" class="collapse" data-parent="#accordion" style="">
                        <div class="sizing">
                            <div class="in-product-left-categories"><!--in-left-Categories-->

                                <div class="other-range-box brands">
                                    <div class="content pad0">
                                        <ul>
                                            <li><?= Html::a('GREEN AND HERBS', ['/site/scent-marketing-details', 'scent' => 'green-herbs']) ?></li>
                                            <li><?= Html::a('CITRUS', ['/site/scent-marketing-details', 'scent' => 'citrus']) ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</div>