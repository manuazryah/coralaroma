<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'Coral Aroma';
}
?>
<section id="main-slider">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            <?php
            if (!empty($sliders)) {
                $i = 0;
                foreach ($sliders as $slider) {
                    ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>" class="<?= $i == 0 ? 'active' : '' ?>"></li>
                    <?php
                    $i++;
                }
            }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
            if (!empty($sliders)) {
                $j = 0;
                foreach ($sliders as $slider) {
                    ?>
                    <div class="carousel-item <?= $j == 0 ? 'active' : '' ?>" style="background-image: url('<?= Yii::$app->homeUrl; ?>uploads/sliders/<?= $slider->id ?>/image.<?= $slider->image ?>')">
                        <div class="carousel-caption d-md-block">
                            <p class="lead"><?= $slider->title ?></p>
                            <h2 class="caption"><?= $slider->sub_title ?>  </h2>
                        </div>
                    </div>
                    <?php
                    $j++;
                }
            }
            ?>
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
                    <?= $home_contents->welcome_content ?>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="xlence">
                    <div class="box">
                        <h3 class="big"><?= $home_contents->year_of_experience ?></h3>
                        <h4 class="medium">Years</h4>
                        <h5 class="small">Excellence</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="atract">
                    <div class="img-box"><img src="<?= Yii::$app->homeUrl; ?>uploads/home_contents/welcome_image.<?= $home_contents->welcome_image ?>" alt="welcome-image" class="img-fluid"/></div>
                    <h5 class="title"><?= $home_contents->title ?></h5>
                    <p class="info"><?= $home_contents->description ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="service-box left">
        <div class="img-box" style="background: url('<?= Yii::$app->homeUrl; ?>uploads/home_contents/image1.<?= $home_contents->image1 ?>')"></div>
        <div class="service-cntnt">
            <div class="logo-flag">
                <span>Coralaroma</span>
            </div>
            <div class="col-lg-11">
                <div class="main_head">
                    <h3 class="sub-head">Coralaroma</h3>
                    <h3 class="head"><?= $home_contents->title1 ?></h3>
                </div>
                <p>
                    <?= $home_contents->description1 ?>
                </p>
                <?= Html::a('Read More', ['/site/scent-marketing'], ['class' => 'read-more']) ?>
            </div>
        </div>
    </div>
    <div class="service-box right">
        <div class="img-box" style="background: url('<?= Yii::$app->homeUrl; ?>uploads/home_contents/image2.<?= $home_contents->image2 ?>')"></div>
        <div class="service-cntnt">
            <div class="logo-flag">
                <span>Coralaroma</span>
            </div>
            <div class="col-lg-11">
                <div class="main_head">
                    <h3 class="sub-head">Coralaroma</h3>
                    <h3 class="head"><?= $home_contents->title2 ?></h3>
                </div>
                <p>
                    <?= $home_contents->description2 ?>
                </p>
                <?= Html::a('Read More', ['/site/products'], ['class' => 'read-more']) ?>
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

<section id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 left-sec">
                <div class="testimonial">
                    <div class="main_head">
                        <h6 class="sub-head">What our</h6>
                        <h1 class="head">Client Says</h1>
                    </div>
                    <div class="slider">
                        <div class="testimonial-carousel">
                            <?php
                            if (!empty($testimonials)) {
                                foreach ($testimonials as $testimonial) {
                                    ?>
                                    <div class="item">
                                        <div class="story-box">
                                            <div class="testi-icon"></div>
                                            <div class="testi-content">
                                                <?= $testimonial->message ?>
                                            </div>
                                        </div>
                                        <div class="testi-footer">
                                            <h4 class="title"><?= $testimonial->author ?></h4>
                                            <h4 class="sub-title">(<?= $testimonial->designation ?>)</h4>
                                            <div class="author"><img src="<?= Yii::$app->homeUrl; ?>uploads/testimonial/<?= $testimonial->id ?>/image.<?= $testimonial->image ?>" alt="<?= $testimonial->author ?>" class="img-fluid"/></div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 right-sec">
                <form action="" method="post" class="contact-enquiry">
                    <div class="form-head">Quick Contact</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control" required="" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" required="" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="phone" id="phone" name="phone" class="form-control" required="" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="company" name="company" class="form-control" required="" placeholder="Company">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" required="" placeholder="Message" rows="1"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-foot">
                                <button type="submit" class="btn btn-primary submit"></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
