<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'Contact Info';
}
?>

<div id="contact_page" class="inner-page">

    <section id="banner" style="background-image: url('<?= Yii::$app->homeUrl; ?>uploads/baner_images/contact_us.<?= $baner_image->contact_us ?>')">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index'], ['class' => '']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Services">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 left-sec">
                    <div class="contact-details">
                        <div class="main_head">
                            <h3 class="sub-head">Coral Aroma</h3>
                            <h3 class="head">Contact Address</h3>
                        </div>
                        <div class="box">
                            <div class="title">Address:</div>
                            <p><?= $contact_info->address ?></p>
                        </div>
                        <div class="box">
                            <div class="title">Phone:</div>
                            <a href="tel:<?= $contact_info->phone ?>" class="bold"><?= $contact_info->phone ?></a>
                        </div>
                        <div class="box">
                            <div class="title">Whatsapp:</div>
                            <a href="tel:<?= $contact_info->whatsapp ?>"><?= $contact_info->whatsapp ?></a>
                        </div>
                        <div class="box">
                            <div class="title">Fax:</div>
                            <a href="tel:<?= $contact_info->fax ?>"><?= $contact_info->fax ?></a>
                        </div>
                        <div class="box">
                            <div class="title">Mail:</div>
                            <a href="mailto:<?= $contact_info->email ?>"><?= $contact_info->email ?></a>
                        </div>

                        <ul class="social-icon">
                            <li><a class="fab fa-facebook-f" target="_blank" href="<?= $home_contents->facebook_link != '' ? $home_contents->facebook_link : '' ?>"></a></li>
                            <li><a class="fab fa-twitter" target="_blank" href="<?= $home_contents->twitter_link != '' ? $home_contents->twitter_link : '' ?>"></a></li>
                            <li><a class="fab fa-linkedin-in" target="_blank" href="<?= $home_contents->linkedin_link != '' ? $home_contents->linkedin_link : '' ?>"></a></li>
                            <li><a class="fab fa-youtube" target="_blank" href="<?= $home_contents->youtube_link != '' ? $home_contents->youtube_link : '' ?>"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 right-sec">
                    <div class="info">Fill in the form below, and we'll get back to you within <span>24 hours.</span></div>
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

    <section id="contact-map">
        <iframe src="<?= $contact_info->map ?>" width="100%" height="530" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

</div>
