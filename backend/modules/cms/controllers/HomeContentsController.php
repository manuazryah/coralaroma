<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\HomeContents;
use common\models\HomeContentsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * HomeContentsController implements the CRUD actions for HomeContents model.
 */
class HomeContentsController extends Controller {

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
     * Lists all HomeContents models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new HomeContentsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HomeContents model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new HomeContents model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new HomeContents();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing HomeContents model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate() {
        $model = $this->findModel(1);
        $model_ = $this->findModel(1);
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'welcome_image');
            $image1 = UploadedFile::getInstance($model, 'image1');
            $image2 = UploadedFile::getInstance($model, 'image2');
            $model->welcome_image = !empty($image) ? $image->extension : $model_->welcome_image;
            $model->image1 = !empty($image1) ? $image1->extension : $model_->image1;
            $model->image2 = !empty($image2) ? $image2->extension : $model_->image2;
            if ($model->save()) {
                $this->Upload($image, $image1, $image2, $model);
                Yii::$app->getSession()->setFlash('success', 'Updated Successfully');
            }
        } return $this->render('update', [
                    'model' => $model,
        ]);
    }

    public function Upload($image, $image1, $image2, $model) {
        $paths = Yii::$app->basePath . '/../uploads/home_contents';
        if (!empty($image)) {
            $name = 'welcome_image.' . $image->extension;
            $image->saveAs($paths . '/' . $name);
        }
        if (!empty($image1)) {
            $name = 'image1.' . $image1->extension;
            $image1->saveAs($paths . '/' . $name);
        }
        if (!empty($image2)) {
            $name = 'image2.' . $image2->extension;
            $image2->saveAs($paths . '/' . $name);
        }
        return TRUE;
    }

    /**
     * Deletes an existing HomeContents model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HomeContents model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HomeContents the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = HomeContents::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
