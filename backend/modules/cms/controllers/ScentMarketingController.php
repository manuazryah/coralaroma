<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\ScentMarketing;
use common\models\ScentMarketingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ScentMarketingController implements the CRUD actions for ScentMarketing model.
 */
class ScentMarketingController extends Controller {

    public function beforeAction($action) {
        if (!parent::beforeAction($action)) {
            return false;
        }
        if (Yii::$app->user->isGuest) {
            $this->redirect(['/site/index']);
            return false;
        }
        return true;
    }

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ScentMarketing models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ScentMarketingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ScentMarketing model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ScentMarketing model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new ScentMarketing();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ScentMarketing model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $model_ = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'image');
            $banner = UploadedFile::getInstance($model, 'banner_image');
            $model->image = !empty($image) ? $image->extension : $model_->image;
            $model->banner_image = !empty($banner) ? $banner->extension : $model_->banner_image;
            if ($model->save()) {
                $this->Upload($image, $banner, $model);
                Yii::$app->getSession()->setFlash('success', 'Updated Successfully');
            } else {
                var_dump($model->getErrors());
                exit;
            }
        } return $this->render('update', [
                    'model' => $model,
        ]);
    }

    public function Upload($image, $banner, $model) {
        if (!empty($image)) {
            $path = Yii::$app->basePath . '/../uploads/scent_marketing/images/' . $model->id;
            if (!is_dir($path)) {
                mkdir($path);
            }
            $name = 'image.' . $image->extension;
            $image->saveAs($path . '/' . $name);
        }
        if (!empty($banner)) {
            $path = Yii::$app->basePath . '/../uploads/scent_marketing/banner/' . $model->id . '/';
            $size = [['width' => 100, 'height' => 100, 'name' => 'small'], ['width' => 1920, 'height' => 675, 'name' => 'image'],];
            Yii::$app->UploadFile->UploadFile($model, $banner, $path, $size);
        }
        return;
    }

    /**
     * Deletes an existing ScentMarketing model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ScentMarketing model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ScentMarketing the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = ScentMarketing::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
