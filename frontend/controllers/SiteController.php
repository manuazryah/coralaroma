<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 1])->one();
        $home_contents = \common\models\HomeContents::find()->where(['id' => 1])->one();
        $sliders = \common\models\Slider::find()->where(['status' => 1])->orderBy(['id' => SORT_ASC])->all();
        $testimonials = \common\models\Testimonials::find()->where(['status' => 1])->orderBy(['id' => SORT_DESC])->all();
        $recipients = \common\models\Recipients::find()->where(['status' => 1])->orderBy(['id' => SORT_ASC])->all();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('index', [
                    'sliders' => $sliders,
                    'testimonials' => $testimonials,
                    'recipients' => $recipients,
                    'meta_tags' => $meta_tags,
                    'home_contents' => $home_contents,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 2])->one();
        $about = \common\models\About::findOne(1);
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('about', [
                    'about' => $about,
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
        ]);
    }

    /**
     * Displays Scent Marketing page.
     *
     * @return mixed
     */
    public function actionScentMarketing() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 3])->one();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('scent-marketing', [
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
        ]);
    }

    /**
     * Displays Scent Marketing page.
     *
     * @return mixed
     */
    public function actionScentMarketingDetails($scent) {
        $scent_details = \common\models\ScentMarketing::find()->where(['canonical_name' => $scent])->one();
        if (!empty($scent_details)) {
            \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $scent_details->meta_keyword]);
            \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $scent_details->meta_description]);
        }
        return $this->render('scent-marketing-details', [
                    'scent_details' => $scent_details,
        ]);
    }

    /**
     * Displays Products page.
     *
     * @return mixed
     */
    public function actionProducts() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 4])->one();
        $home_contents = \common\models\HomeContents::findOne(1);
        $product_category = \common\models\ProductCategory::find()->where(['status' => 1])->limit(3)->all();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('products', [
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
                    'home_contents' => $home_contents,
                    'product_category' => $product_category,
        ]);
    }

    /**
     * Displays Products Listing page based on product category.
     *
     * @return mixed
     */
    public function actionProductsList($product) {
        $searchModel = new \common\models\ProductsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 4])->one();
        $product_category = \common\models\ProductCategory::find()->where(['canonical_name' => $product])->one();
        if (!empty($product_category)) {
            $dataProvider->query->andWhere(['category' => $product_category->id]);
        }
        $dataProvider->pagination->pageSize = 30;
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('product-list', [
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
                    'product_category' => $product_category,
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays Products Listing page based on product category.
     *
     * @return mixed
     */
    public function actionProductDetail($product) {
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 4])->one();
        $product_details = \common\models\Products::find()->where(['canonical_name' => $product])->one();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('product_detail', [
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
                    'product_details' => $product_details,
        ]);
    }

    /**
     * Displays signature scent page.
     *
     * @return mixed
     */
    public function actionSignatureScent() {
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 5])->one();
        $scent = \common\models\SignatureScent::findOne(1);
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('signature-scent', [
                    'meta_tags' => $meta_tags,
                    'scent' => $scent,
        ]);
    }

    /**
     * Displays blog page.
     *
     * @return mixed
     */
    public function actionBlog() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 6])->one();
        $blogs = \common\models\Blogs::find()->where(['status' => 1])->all();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('blog', [
                    'meta_tags' => $meta_tags,
                    'blogs' => $blogs,
                    'baner_image' => $baner_image,
        ]);
    }

    /**
     * Displays Blog Details page.
     *
     * @return mixed
     */
    public function actionBlogDetails($page) {
        $baner_image = \common\models\BanerImages::findOne(1);
        $blog_details = \common\models\Blogs::find()->where(['canonical_name' => $page])->one();
        $recent_blogs = \common\models\Blogs::find()->where(['status' => 1])->andWhere(['!=', 'id', $blog_details->id])->orderBy(['date' => SORT_DESC])->all();
        if (!empty($blog_details)) {
            \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $blog_details->meta_keyword]);
            \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $blog_details->meta_description]);
        }
        return $this->render('blog-detail', [
                    'blog_details' => $blog_details,
                    'baner_image' => $baner_image,
                    'recent_blogs' => $recent_blogs,
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 7])->one();
        $contact_info = \common\models\ContactsInfo::findOne(1);
        $home_contents = \common\models\HomeContents::find()->where(['id' => 1])->one();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('contact', [
                    'meta_tags' => $meta_tags,
                    'contact_info' => $contact_info,
                    'baner_image' => $baner_image,
                    'home_contents' => $home_contents,
        ]);
    }

    /**
     * Displays Recipient Details page.
     *
     * @return mixed
     */
    public function actionRecipient($page) {
        $recipient_details = \common\models\Recipients::find()->where(['canonical_name' => $page])->one();
        $recipients = \common\models\Recipients::find()->where(['status' => 1])->orderBy(['id' => SORT_ASC])->all();
        if (!empty($recipient_details)) {
            \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $recipient_details->meta_keyword]);
            \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $recipient_details->meta_description]);
        }
        return $this->render('recipients', [
                    'recipient_details' => $recipient_details,
                    'recipients' => $recipients,
        ]);
    }

    /*
     * This function save contact enquiry from website to database
     */

    public function actionContactEnquiry() {
        if (Yii::$app->request->isAjax) {
            $model = new \common\models\ContactEnquiry();
            $model->name = $_POST['name'];
            $model->email = $_POST['email'];
            $model->phone = $_POST['phone'];
            $model->company = $_POST['company'];
            $model->message = $_POST['message'];
            $model->date = date('Y-m-d');
            if ($model->save()) {
//                    $this->sendContactMail($model);
                echo 1;
                exit;
            } else {
                echo 0;
                exit;
            }
        }
    }

    /*
     * Contact Enguery mail function
     */

    public function sendContactMail($model) {
        $message = Yii::$app->mailer->compose('enquiry-mail', ['model' => $model]) // a view rendering result becomes the message body here
                ->setFrom('info@coralaroma.com')
                ->setTo([
                    'manu@azryah.com',
                ])
                ->setSubject('Enquiry From coralaroma.com');

        $message->send();
        return TRUE;
    }

    /*
     * News Letter Subscription
     */

    public function actionNewsLetter() {
        if (Yii::$app->request->isAjax) {
            $exist = \common\models\NewsLetter::find()->where(['email' => $_POST['email']])->one();
            if (empty($exist)) {
                $model = new \common\models\NewsLetter();
                $model->email = $_POST['email'];
                $model->date = date('Y-m-d');
                if ($model->save()) {
//                    $this->sendNewsLetterMail($model);
                    echo 1;
                    exit;
                } else {
                    echo 0;
                    exit;
                }
            } else {
                echo 2;
                exit;
            }
        }
    }

    /*
     * News letter subscription mail function
     */

    public function sendNewsLetterMail($model) {
        $message = Yii::$app->mailer->compose('news-letter-mail', ['model' => $model]) // a view rendering result becomes the message body here
                ->setFrom('info@coralaroma.com')
                ->setTo([
                    'manu@azryah.com',
                ])
                ->setSubject('Newsletter Subscription From coralaroma.com');

        $message->send();
        return TRUE;
    }

}
