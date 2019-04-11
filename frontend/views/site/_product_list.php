<?php

use yii\bootstrap\Html;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="pro-box">
    <div class="img-box">
        <img src="<?= Yii::$app->homeUrl; ?>uploads/product/<?= $model->id ?>/profile/<?= $model->canonical_name ?>.<?= $model->profile_image ?>" alt="" class="img-fluid"/>
    </div>
    <div class="content">
        <div class="title"><?= $model->product_name ?></div>
<?= Html::a('View More', ['/site/product-detail', 'product' => $model->canonical_name], ['class' => 'read-more']) ?>
    </div>
</div>

