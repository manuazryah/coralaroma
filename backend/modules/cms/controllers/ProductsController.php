<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\Products;
use common\models\ProductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller {

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
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Products model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Products();

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $file11 = UploadedFile::getInstance($model, 'profile_image');
            $file12 = UploadedFile::getInstances($model, 'gallery_images');
            $model->profile_image = !empty($file11) ? $file11->extension : '';
            $model->gallery_images = '';
            if ($model->save()) {
                if ($file11) {
                    if ($this->upload($model, $file11)) {
                        $model->upload($file11, $model);
                    }
                }
            }
            for ($i = 0; $i < sizeof($file12); $i++) {
                if ($model->uploadMultiple($file12[$i], $model->id, $model->canonical_name, $i)) {
                    
                }
            }
            Yii::$app->getSession()->setFlash('success', "New product created successfully");
            $model = new Products();
        } return $this->render('create', [
                    'model' => $model,
        ]);
    }

    public function Upload($model, $file) {
        if (!is_dir(\Yii::$app->basePath . '/../uploads/product/' . $model->id)) {
            mkdir(\Yii::$app->basePath . '/../uploads/product/' . $model->id);
            chmod(\Yii::$app->basePath . '/../uploads/product/' . $model->id, 0777);
        }
        if (!is_dir(\Yii::$app->basePath . '/../uploads/product/' . $model->id . '/profile/')) {
            mkdir(\Yii::$app->basePath . '/../uploads/product/' . $model->id . '/profile/');
            chmod(\Yii::$app->basePath . '/../uploads/product/' . $model->id . '/profile/', 0777);
        }
        $file->saveAs(Yii::$app->basePath . '/../uploads/product/' . $model->id . '/profile/' . $model->canonical_name . '_big.' . $file->extension);
        return TRUE;
    }

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $image_ = $model->profile_image;
        $canonical_name = $model->canonical_name;
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $file11 = UploadedFile::getInstance($model, 'profile_image');
            $file12 = UploadedFile::getInstances($model, 'gallery_images');
            $files = UploadedFile::getInstances($model, 'colours');
            $model->profile_image = !empty($file11) ? $file11->extension : $image_;
            $model->gallery_images = '';
            $model->colours = '';
            if ($canonical_name != $model->canonical_name) {
                $this->rename($model->id, $model->canonical_name, 'profile');
                $this->rename($model->id, $model->canonical_name, 'gallery');
                $this->rename($model->id, $model->canonical_name, 'gallery_thumb');
            }
            if ($model->save()) {
                if ($file11) {
                    if ($this->upload($model, $file11)) {
                        $model->upload($file11, $model);
                    }
                }
            }
            for ($i = 0; $i < sizeof($file12); $i++) {
                if ($model->uploadMultiple($file12[$i], $model->id, $model->canonical_name, $i)) {
                    
                }
            }
            $this->UploadColorImages($files, $model);
            Yii::$app->getSession()->setFlash('success', "Product updated successfully");
            return $this->redirect(['update', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /*
     * This function upload gallery images
     * return
     */

    public function UploadColorImages($files, $model) {
        if ($files != '' && $model != '') {
            $paths = Yii::$app->basePath . '/../uploads/product/' . $model->id . '/colours/';
            $path = $this->CheckPath($paths);
            foreach ($files as $file) {
                $name = $this->fileExists($path, $file->baseName . '.' . $file->extension, $file, 1);
                $file->saveAs($path . '/' . $name);
            }
            return true;
        } else {
            return false;
        }
    }

    public function CheckPath($paths) {
        if (!is_dir($paths)) {
            mkdir($paths);
        }
        return $paths;
    }

    public function fileExists($path, $name, $file, $sufix) {
        if (file_exists($path . '/' . $name)) {

            $name = basename($path . '/' . $file->baseName, '.' . $file->extension) . '_' . $sufix . '.' . $file->extension;
            return $this->fileExists($path, $name, $file, $sufix + 1);
        } else {
            return $name;
        }
    }

    public function actionRemove($file, $id) {
        $path = Yii::$app->basePath . '/../uploads/product/' . $id . '/colours/' . $file;
        if (file_exists($path)) {
            unlink($path);
        }
        return $this->redirect(Yii::$app->request->referrer);
    }

    public function rename($id, $canonical_name, $name) {
        $path = Yii::getAlias('@paths') . '/product/' . $id . '/' . $name;
        if (count(glob("{$path}/*")) > 0) {
            $k = 0;
            foreach (glob("{$path}/*") as $file) {
                $k++;
                $arry = explode('/', $file);
                $img_nmee = end($arry);
                if (strpos($img_nmee, '_') !== false) {
                    $test = explode('_', $img_nmee);
                    rename($path . '/' . $img_nmee, $path . '/' . $canonical_name . '_' . $test['1']);
                } else {
                    $test = explode('.', $img_nmee);
                    rename($path . '/' . $img_nmee, $path . '/' . $canonical_name . '.' . $test['1']);
                }
            }
        }
    }

    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Products::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionAjax_imgdelete() {
        if (yii::$app->request->isAjax) {
            $image = Yii::$app->request->post()['image'];
            if ($image) {
                $img = explode('@', $image);
                unlink(yii::$app->basepath . '/../uploads/product/' . $img['0'] . '/gallery/' . $img['1']);
                unlink(yii::$app->basepath . '/../uploads/product/' . $img['0'] . '/gallery_thumb/' . $img['1']);
                unlink(yii::$app->basepath . '/../uploads/product/' . $img['0'] . '/gallery_profile/' . $img['1']);
                echo json_encode(array('msg' => 'success', 'id' => $img['2']));
            } else {
                echo json_encode(array('msg' => 'error', 'title' => 'Image Not Found'));
            }
        }
    }

}
