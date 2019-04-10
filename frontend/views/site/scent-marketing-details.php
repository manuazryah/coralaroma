<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = '';
if (isset($scent_details->meta_title) && $scent_details->meta_title != '') {
    $this->title = $scent_details->meta_title;
} else {
    $this->title = 'Scent Marketing';
}
?>
<div id="marketing_inner_page" class="inner-page">

    <section id="banner" style="background-image: url('<?= Yii::$app->homeUrl; ?>uploads/scent_marketing/banner/<?= $scent_details->id ?>/image.<?= $scent_details->banner_image ?>')">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title"><?= $scent_details->title ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index'], ['class' => '']) ?></li>
                            <li class="breadcrumb-item"><?= Html::a('Scent Marketing', ['/site/scent-marketing'], ['class' => '']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Scent Marketing"><?= $scent_details->title ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="notes-dtl">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main_head">
                        <h3 class="sub-head">SCENT MARKETING</h3>
                        <h3 class="head"><?= $scent_details->title ?></h3>
                    </div>
                    <?= $scent_details->content ?>
                </div>
            </div>
        </div>
    </section>


</div>

