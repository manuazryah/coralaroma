<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'Signature Scent';
}
?>
<div id="marketing_inner_page" class="inner-page">

    <section id="banner" style="background-image: url('<?= Yii::$app->homeUrl; ?>uploads/signature_scent/signature_scent.<?= $scent->image ?>')">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title"><?= $scent->title ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index'], ['class' => '']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Scent Marketing"><?= $scent->title ?></li>
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
                        <h3 class="head"><?= $scent->title ?></h3>
                    </div>
                    <?= $scent->description ?>
                </div>
            </div>
        </div>
    </section>


</div>