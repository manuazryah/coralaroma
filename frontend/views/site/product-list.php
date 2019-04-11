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

    <section id="sub_category">
        <div class="container">
            <div class="main_head">
                <h3 class="head">Small Area</h3>
            </div>
            <div class="pro-list">
                <?=
                $dataProvider->totalcount > 0 ? ListView::widget([
                            'dataProvider' => $dataProvider,
                            'itemView' => '_product_list',
                            'options' => [
                                'tag' => 'div',
                                'class' => 'row'
                            ],
                            'itemOptions' => [
                                'tag' => 'div',
                                'class' => 'col-lg-4 col-sm-6'
                            ],
                            'pager' => [
                                'options' => ['class' => 'pagination'],
                                'prevPageLabel' => '<', // Set the label for the "previous" page button
                                'nextPageLabel' => '>', // Set the label for the "next" page button
                                'firstPageLabel' => '<<', // Set the label for the "first" page button
                                'lastPageLabel' => '>>', // Set the label for the "last" page button
                                'nextPageCssClass' => '>', // Set CSS class for the "next" page button
                                'prevPageCssClass' => '<', // Set CSS class for the "previous" page button
                                'firstPageCssClass' => '<<', // Set CSS class for the "first" page button
                                'lastPageCssClass' => '>>', // Set CSS class for the "last" page button
                                'maxButtonCount' => 5, // Set maximum number of page buttons that can be displayed
                            ],
                        ]) : '';
                ?>
            </div>
        </div>
    </section>

</div>