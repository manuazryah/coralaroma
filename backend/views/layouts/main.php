<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
$controler = Yii::$app->controller->id;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?= Yii::$app->homeUrl; ?>img/favicon.png" rel="icon">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <script src="<?= Yii::$app->homeUrl; ?>js/jquery.min.js"></script>
        <script type="text/javascript">
            var homeUrl = '<?= Yii::$app->homeUrl; ?>';
        </script>
        <?php $this->head() ?>
    </head>
    <body class="skin-blue fixed sidebar-mini sidebar-mini-expand-featuree">
        <?php $this->beginBody() ?>

        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="<?= yii::$app->homeUrl; ?>" class="logo">
                    <span class="logo-mini">
                        <img src="<?= Yii::$app->homeUrl; ?>img/favicon.png" itemprop="image">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= Yii::$app->homeUrl; ?>img/logo1.png" itemprop="image">
                    </span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <?php
                                echo ''
                                . Html::beginForm(['/site/logout'], 'post', ['style' => '']) . '<a>'
                                . Html::submitButton(
                                        '<i class="fa fa-sign-out" aria-hidden="true"></i> Sign out', ['class' => 'signout-btn', 'style' => '']
                                ) . '</a>'
                                . Html::endForm()
                                . '';
                                ?>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">
                        </li>
                        <li class="treeview <?= $controler == 'admin-posts' || $controler == 'admin-users' || $controler == 'site' ? 'active' : '' ?>">
                            <a href="">
                                <i class="fa fa-dashboard"></i>
                                <span>Administration</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Access Powers', ['/admin/admin-posts/index'], ['class' => 'title']) ?>
                                </li>

                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Admin Users', ['/admin/admin-users/index'], ['class' => 'title']) ?>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview <?= $controler == 'slider' || $controler == 'home-contents' ? 'active' : '' ?>">
                            <a href="">
                                <i class="fa fa-home"></i>
                                <span>Home Management</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Sliders', ['/cms/slider/index'], ['class' => 'title']) ?>
                                </li>
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Home Contents', ['/cms/home-contents/update'], ['class' => 'title']) ?>
                                </li>
                            </ul>
                        </li>
                        <li class="<?= $controler == 'about' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-flag"></i> <span>About</span>', ['/cms/about/update'], ['class' => 'title']) ?>
                        </li>
                        <li class="<?= $controler == 'scent-marketing' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-cart-plus"></i> <span>Scent Marketing</span>', ['/cms/scent-marketing/index'], ['class' => 'title']) ?>
                        </li>
                        <li class="treeview <?= $controler == 'products' || $controler == 'product-category' ? 'active' : '' ?>">
                            <a href="">
                                <i class="fa fa-product-hunt"></i>
                                <span>Products</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Product Category', ['/cms/product-category/index'], ['class' => 'title']) ?>
                                </li>
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Products', ['/cms/products/index'], ['class' => 'title']) ?>
                                </li>
                            </ul>
                        </li>
                        <li class="<?= $controler == 'signature-scent' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-inbox"></i> <span>Signature Scent</span>', ['/cms/signature-scent/update'], ['class' => 'title']) ?>
                        </li>
                        <li class="<?= $controler == 'blogs' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-rss"></i> <span>Blogs</span>', ['/cms/blogs/index'], ['class' => 'title']) ?>
                        </li>
                        <li class="<?= $controler == 'recipients' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-cogs"></i> <span>Recipients</span>', ['/cms/recipients/index'], ['class' => 'title']) ?>
                        </li>
                        <li class="<?= $controler == 'testimonials' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-commenting-o"></i> <span>Testimonials</span>', ['/cms/testimonials/index'], ['class' => 'title']) ?>
                        </li>
                        <li class="<?= $controler == 'contacts-info' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-address-card"></i> <span>Contact Info</span>', ['/cms/contacts-info/update'], ['class' => 'title']) ?>
                        </li>
                        <li class="treeview <?= $controler == 'contact-enquiry' || $controler == 'news-letter' ? 'active' : '' ?>">
                            <a href="">
                                <i class="fa fa-envelope"></i>
                                <span>Enquiry</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Contact Enquiry', ['/cms/contact-enquiry/index'], ['class' => 'title']) ?>
                                </li>
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> News Letter', ['/cms/news-letter/index'], ['class' => 'title']) ?>
                                </li>
                            </ul>
                        </li>
                        <li class="<?= $controler == 'baner-images' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-image"></i> <span>Baner Images</span>', ['/cms/baner-images/update'], ['class' => 'title']) ?>
                        </li>
                        <li class="<?= $controler == 'meta-tags' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-tags"></i> <span>Meta Tags</span>', ['/cms/meta-tags/index'], ['class' => 'title']) ?>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- =============================================== -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?= $content ?>
                </section>
            </div>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.4.0
                </div>
                <strong>Copyright &copy; <?= date('Y') ?> Coral Aroma.</strong> All rights reserved.
            </footer>
            <div class="control-sidebar-bg"></div>
        </div>
        <?php $this->endBody() ?>
        <script>
            jQuery(function () {
                CKEDITOR.config.extraPlugins = 'justify';
            });
        </script>
    </body>
</html>
<?php $this->endPage() ?>
