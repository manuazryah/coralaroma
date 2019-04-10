<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = '';
if (isset($blog_details->meta_title) && $blog_details->meta_title != '') {
    $this->title = $blog_details->meta_title;
} else {
    $this->title = 'Blog';
}
?>

<div id="blog_page" class="inner-page">

    <section id="banner" style="background-image: url('<?= Yii::$app->homeUrl; ?>uploads/baner_images/about.<?= $baner_image->about ?>')">
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

    <section id="blog-dtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 left-sec">
                    <div class="news-header">
                        <h5 class="news-title"><?= $blog_details->title ?></h5>
                        <div class="author-dtl">
                            <div class="author">
                                <div class="img-box"><img src="<?= Yii::$app->homeUrl; ?>assets/images/user.png" alt="" class="img-fluid"></div>
                                <p>Post by: <span><?= $blog_details->author ?></span></p>
                            </div>
                            <div class="date"><?= date("F d, Y", strtotime($blog_details->date)) ?></div>
                        </div>
                    </div>
                    <div class="news-cntnt">
                        <img src="<?= Yii::$app->homeUrl; ?>uploads/blogs/<?= $blog_details->id ?>/<?= $blog_details->id ?>.<?= $blog_details->image ?>" alt="<?= $blog_details->title ?>" class="img-fluid">
                        <?= $blog_details->detailed_description ?>
                    </div>
                </div>

                <div class="col-lg-4 right-sec">
                    <div class="related-news">
                        <h5 class="title">Company News posts</h5>
                        <?php
                        if (!empty($recent_blogs)) {
                            foreach ($recent_blogs as $recent_blog) {
                                if (!empty($recent_blog)) {
                                    ?>
                                    <div class="list">
                                        <?php
                                        $img = '<img src="' . Yii::$app->homeUrl . 'uploads/blogs/' . $recent_blog->id . '/' . $recent_blog->id . '.' . $recent_blog->image . '" alt="' . $recent_blog->title . '" class="img-fluid"/>';
                                        ?>
                                        <?= Html::a($img, ['/site/blog-details', 'page' => $recent_blog->canonical_name], ['class' => 'img-box']) ?>
                                        <div class="box-content">
                                            <?= Html::a(strlen($recent_blog->title) > 45 ? substr($recent_blog->title, 0, 42) . '...' : $recent_blog->title, ['/site/blog-details', 'page' => $recent_blog->canonical_name], ['class' => 'post-title']) ?>
                                            <?= Html::a('Read More', ['/site/blog-details', 'page' => $recent_blog->canonical_name], ['class' => 'read-more']) ?>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </section>


</div>
