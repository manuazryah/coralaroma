<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$action = Yii::$app->controller->action->id;
$common_content = common\models\HomeContents::findOne(1);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex,nofollow">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="shortcut icon" href="<?= Yii::$app->homeUrl; ?>assets/images/favicon.png" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            var homeUrl = '<?= yii::$app->homeUrl; ?>';
        </script>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <header id="Header" class="header main_header">
            <!--header-->
            <section class="navbar-custom" role="navigation">
                <!--fixed-top header-->
                <div class="topbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="welcome"><?= $common_content->top_title ?> <span>Coral Aroma</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-navigation">
                    <div class="center-sec">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 sm-pad0">

                                    <div class="row">
                                        <div class="contact-link phone col-sm-4"><a href="tel:<?= $common_content->phone ?>"><?= $common_content->phone ?></a></div>
                                        <div class="menu-icon">
                                            <a href="#" class="menu-open" data-toggle="collapse" data-target="#navbarNavDropdown2"
                                               aria-controls="navbarNavDropdown2" aria-expanded="false"
                                               aria-label="Toggle navigation">
                                                <span class="line top-line"></span>
                                                <span class="line middle-line"></span>
                                                <span class="line bottom-line"></span>
                                                <span class="line middle-lines"></span>
                                                <span class="line top-line left"></span>
                                                <span class="line middle-line left"></span>
                                                <span class="line bottom-line left"></span>
                                                <span class="line middle-lines left"></span>
                                            </a>
                                        </div>
                                        <div class="logo-sec col-sm-4">
                                            <?= Html::a('<img src="' . Yii::$app->homeUrl . 'assets/images/logo.png" alt="logo" class="img-fluid"/>', ['/site/index'], ['class' => 'logo']) ?>
                                        </div>
                                        <div class="contact-link mail col-sm-4"><a href="mailto:<?= $common_content->email ?>" class="mail"><?= $common_content->email ?></a></div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="main-nav-section">
                        <div class="self_container container">
                            <div class="sticky-logo">
                                <?= Html::a('<img src="' . Yii::$app->homeUrl . 'assets/images/logo.png" alt="logo" class="img-fluid"/>', ['/site/index']) ?>
                            </div>
                            <nav class="navbar navbar-toggleable-lg navbar-light bg-faded navbar-expand-lg">
                                <div class="collapse navbar-collapse" id="navbarNavDropdown2">
                                    <ul class="navbar-nav">
                                        <a href="#" data-toggle="collapse" data-target="#navbarNavDropdown2"
                                           aria-controls="navbarNavDropdown2" aria-expanded="false"
                                           aria-label="Toggle navigation" class="menu-close"><span></span><span></span><span></span><span></span></a>
                                        <li class="nav-list <?= $action == 'index' ? 'active' : '' ?>">
                                            <?= Html::a('Home', ['/site/index'], ['class' => 'link']) ?>
                                        </li>
                                        <li class="nav-list <?= $action == 'about' ? 'active' : '' ?>">
                                            <?= Html::a('About', ['/site/about'], ['class' => 'link']) ?>
                                        </li>
                                        <li class="nav-list <?= $action == 'scent-marketing' || $action == 'scent-marketing-details' ? 'active' : '' ?>">
                                            <?= Html::a('Scent Marketing', ['/site/scent-marketing'], ['class' => 'link']) ?>
                                        </li>
                                        <li class="nav-list <?= $action == 'products' ? 'active' : '' ?>">
                                            <?= Html::a('Products', ['/site/products'], ['class' => 'link']) ?>
                                        </li>
                                        <li class="nav-list <?= $action == 'signature-scent' ? 'active' : '' ?>">
                                            <?= Html::a('Signature Scent', ['/site/signature-scent'], ['class' => 'link']) ?>
                                        </li>
                                        <li class="nav-list <?= $action == 'blog' || $action == 'blog-details' ? 'active' : '' ?>">
                                            <?= Html::a('Blog', ['/site/blog'], ['class' => 'link']) ?>
                                        </li>
                                        <li class="nav-list <?= $action == 'contact' ? 'active' : '' ?>">
                                            <?= Html::a('Contact Us', ['/site/contact'], ['class' => 'link']) ?>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
        </header>
        <?= $content ?>
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="foot-logo"><img src="<?= Yii::$app->homeUrl; ?>assets/images/foot-logo.png" alt="" class="img-fluid" /></div>
                            <div class="foot-about">
                                <p>
                                    <?= $common_content->footer_address ?>
                                </p>
                                <ul>
                                    <li><a class="bold" href="tel:<?= $common_content->phone ?>"><?= $common_content->phone ?></a></li>
                                    <li><a href="mailto:Email:<?= $common_content->email ?>">Email:<?= $common_content->email ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <div class="foot-head">Quick Links</div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <ul class="foot-link">
                                        <li>
                                            <?= Html::a('Home', ['/site/index']) ?>
                                        </li>
                                        <li>
                                            <?= Html::a('About', ['/site/about']) ?>
                                        </li>
                                        <li>
                                            <?= Html::a('Scent Marketing', ['/site/scent-marketing']) ?>
                                        </li>
                                        <li>
                                            <?= Html::a('Products', ['/site/products']) ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <ul class="foot-link">
                                        <li>
                                            <?= Html::a('Signature Scent', ['/site/signature-scent']) ?>
                                        </li>
                                        <li>
                                            <?= Html::a('Blog', ['/site/blog']) ?>
                                        </li>
                                        <li>
                                            <?= Html::a('Contact Us', ['/site/contact']) ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="foot-head">Sign up for Newsletter</div>
                            <form action="" method="post" class="news-letter">
                                <div class="newsletter-form">
                                    <input type="email" name="email" id="subscribe-email" class="input-text" value="" placeholder="Enter your Email Address" required="">
                                </div>
                                <input type="submit" class="subscribe" name="submit">
                            </form>
                        </div>

                        <div class="copyright">
                            <ul class="social-icon">
                                <li><a class="fab fa-facebook-f" target="_blank" href="<?= $common_content->facebook_link != '' ? $common_content->facebook_link : '' ?>"></a></li>
                                <li><a class="fab fa-twitter" target="_blank" href="<?= $common_content->twitter_link != '' ? $common_content->twitter_link : '' ?>"></a></li>
                                <li><a class="fab fa-linkedin" target="_blank" href="<?= $common_content->linkedin_link != '' ? $common_content->linkedin_link : '' ?>"></a></li>
                                <li><a class="fab fa-youtube" target="_blank" href="<?= $common_content->youtube_link != '' ? $common_content->youtube_link : '' ?>"></a></li>
                                <li><a class="fab fa-google-plus" target="_blank" href="<?= $common_content->google_plus != '' ? $common_content->google_plus : '' ?>"></a></li>
                            </ul>
                            <p>Copyright © <span><?= date('Y') ?>.</span> <a target="_blank" href="#!">Coral Aroma</a> <br>All Rights Reserved</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer-->
    <a href="#" class="scrollup" >Scroll</a>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
