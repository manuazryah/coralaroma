<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'About Coral Aroma';
}
?>

<div id="about_page" class="inner-page">

    <section id="banner" style="background-image: url('<?= Yii::$app->homeUrl; ?>uploads/baner_images/about.<?= $baner_image->about ?>')">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index'], ['class' => '']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Services">About us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="welcome-sec">
        <div class="container">
            <div class="main_head">
                <h3 class="sub-head">Welcome to</h3>
                <h3 class="head">Coral Aroma</h3>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="welcome-txt">
                        <p><?= $about->about_content ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="xlence">
                        <div class="box">
                            <h3 class="big"><?= $about->year_of_experience ?></h3>
                            <h4 class="medium">Years</h4>
                            <h5 class="small">Excellence</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="atract">
                        <div class="img-box"><img src="<?= Yii::$app->homeUrl; ?>uploads/about/about_image.<?= $about->image ?>" alt="<?= $about->image_title ?>" class="img-fluid"/></div>
                        <h5 class="title"><?= $about->image_title ?></h5>
                        <p class="info"><?= $about->description ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Y-Aroma">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5">
                    <div class="heading">
                        <div class="sub">Why</div>
                        <div class="title">Coral Aroma</div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="content">
                        <p><?= $about->why_coral_aroma ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ceo-message">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 left-sec">
                    <div class="heading">
                        <div class="big">What do</div>
                        <div class="medium">Say our</div>
                        <div class="medium">Director</div>
                    </div>
                </div>

                <div class="col-lg-7 right-sec">
                    <div class="story-box">
                        <div class="content">
                            <div class="ceo">
                                <img src="<?= Yii::$app->homeUrl; ?>uploads/about/director_image.<?= $about->director_image ?>" alt="ceo image" class="img-fluid"/>
                            </div>
                            <div class="info">
                                <?= $about->director_message ?>
                            </div>
                            <div class="story-footer">
                                <h5><?= $about->director_name ?></h5>
                                <h6>( Managing Director )</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>

</div>