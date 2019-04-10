<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'Blogs';
}
?>

<div id="blog_page" class="inner-page">

    <section id="banner" style="background-image: url('<?= Yii::$app->homeUrl; ?>uploads/baner_images/blog.<?= $baner_image->blog ?>')">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">Blog</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index'], ['class' => '']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Blog">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="blog-list">
        <div class="container">
            <div class="row">
                <?php
                if (!empty($blogs)) {
                    foreach ($blogs as $blog) {
                        ?>
                        <div class="col-lg-4">
                            <div class="blog-box">
                                <div class="img-box"><img src="<?= Yii::$app->homeUrl; ?>uploads/blogs/<?= $blog->id ?>/image.<?= $blog->image ?>" alt="<?= $blog->title ?>" class="img-fluid"></div>
                                <h4 class="head" title="Incredible scents."><?= $blog->title ?></h4>
                                <p><?= $blog->small_description ?></p>
                                <?= Html::a('Read More', ['/site/blog-details', 'page' => $blog->canonical_name], ['class' => 'link']) ?>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
    </section>


</div>
