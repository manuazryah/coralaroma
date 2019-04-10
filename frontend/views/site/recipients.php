<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = '';
if (isset($recipient_details->meta_title) && $recipient_details->meta_title != '') {
    $this->title = $recipient_details->meta_title;
} else {
    $this->title = 'Recipient Details';
}
?>

<div id="marketing_inner_page" class="inner-page">

    <section id="banner" style="background-image: url('<?= Yii::$app->homeUrl; ?>uploads/recipients/<?= $recipient_details->id ?>/image.<?= $recipient_details->image ?>')">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title"><?= $recipient_details->recipient_name ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index'], ['class' => '']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Scent Marketing">Recipients</li>
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
                        <h3 class="sub-head">Recipients</h3>
                        <h3 class="head"><?= $recipient_details->recipient_name ?></h3>
                    </div>
                    <?= $recipient_details->content ?>
                </div>
            </div>
        </div>
    </section>

    <section id="recipients">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 left-sec">
                    <div class="main_head">
                        <h6 class="sub-head">Recipients of</h6>
                        <h1 class="head">Coral Aroma</h1>
                    </div>
                </div>
                <div class="col-lg-9 right-sec">
                    <div class="service-list">
                        <?php
                        if (!empty($recipients)) {
                            $k = 0;
                            foreach ($recipients as $recipient) {
                                $k++;
                                ?>
                                <?= Html::a('<div class="icon icon' . $k . '"></div><div class="title">' . $recipient->recipient_name . '</div>', ['/site/recipient', 'page' => $recipient->canonical_name], ['class' => 'box']) ?>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
