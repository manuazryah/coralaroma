<?php

namespace common\models;

use Yii;
use yii\imagine\Image;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $product_name
 * @property string $canonical_name
 * @property string $profile_image
 * @property string $gallery_images
 * @property string $colours
 * @property string $dimenssions
 * @property string $features
 * @property string $coverage
 * @property string $power
 * @property string $scent
 * @property string $other
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Products extends \yii\db\ActiveRecord {

    public $colour;

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['dimenssions', 'features', 'coverage', 'power', 'scent', 'other'], 'string'],
            [['description', 'product_name', 'canonical_name'], 'required'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['product_name'], 'string', 'max' => 100],
            [['canonical_name'], 'string', 'max' => 255],
            [['profile_image'], 'required', 'on' => 'create'],
            [['profile_image'], 'file', 'extensions' => 'jpg, png,jpeg'],
            [['gallery_images', 'colours'], 'file', 'extensions' => 'png, jpg, jpeg', 'maxFiles' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'product_name' => 'Product Name',
            'canonical_name' => 'Canonical Name',
            'profile_image' => 'Profile Image',
            'gallery_images' => 'Gallery Images',
            'colours' => 'Colours',
            'dimenssions' => 'Dimenssions',
            'features' => 'Features',
            'coverage' => 'Coverage',
            'power' => 'Power',
            'scent' => 'Scent',
            'other' => 'Other',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

    public function upload($file, $model) {
        if (\yii::$app->basePath . '/../uploads') {
            $path = yii::$app->basePath . '/../uploads/product/' . $model->id . '/profile/' . $model->canonical_name . '_big.' . $file->extension;
            $main_path = yii::$app->basePath . '/../uploads/product/' . $model->id;
            $name = $model->canonical_name . '.' . $file->extension;
            Image::thumbnail($path, 600, 600)
                    ->save($main_path . '/profile/' . $name, ['quality' => 80]);
            Image::thumbnail($path, 1080, 1080)
                    ->save(\yii::$app->basePath . '/../uploads/product/' . $model->id . '/profile/' . $model->canonical_name . '_big.' . $file->extension, ['quality' => 50]);
            Image::thumbnail($path, 250, 250)
                    ->save(\yii::$app->basePath . '/../uploads/product/' . $model->id . '/profile/' . $model->canonical_name . '_thumb.' . $file->extension, ['quality' => 50]);
            return true;
        }
    }

    public function uploadMultiple($file, $product_id, $canname, $i) {
        if (\yii::$app->basePath . '/../uploads') {
            chmod(\yii::$app->basePath . '/../uploads', 0777);

            if (!is_dir(\yii::$app->basePath . '/../uploads/product/')) {
                mkdir(\yii::$app->basePath . '/../uploads/product/');
                chmod(\yii::$app->basePath . '/../uploads/product/', 0777);
            }
            if (!is_dir(\yii::$app->basePath . '/../uploads/product/' . $product_id)) {
                mkdir(\yii::$app->basePath . '/../uploads/product/' . $product_id);
                chmod(\yii::$app->basePath . '/../uploads/product/' . $product_id, 0777);
            }
            if (!is_dir(\yii::$app->basePath . '/../uploads/product/' . $product_id . '/gallery')) {
                mkdir(\yii::$app->basePath . '/../uploads/product/' . $product_id . '/gallery');
                chmod(\yii::$app->basePath . '/../uploads/product/' . $product_id . '/gallery', 0777);
            }
            $path = yii::$app->basePath . '/../uploads/product/' . $product_id . '/gallery';
            $main_path = yii::$app->basePath . '/../uploads/product/' . $product_id;
            $name = $this->fileExists($path, $canname, $image_name = $canname, $file->extension, 1);
            if ($file->saveAs($path . '/' . $name)) {
                chmod($path . '/' . $name, 0777);
                if (!is_dir(\yii::$app->basePath . '/../uploads/product/' . $product_id . '/gallery_thumb/')) {
                    mkdir(\yii::$app->basePath . '/../uploads/product/' . $product_id . '/gallery_thumb/');
                    chmod(\yii::$app->basePath . '/../uploads/product/' . $product_id . '/gallery_thumb/', 0777);
                }
                if (!is_dir(\yii::$app->basePath . '/../uploads/product/' . $product_id . '/gallery_profile/')) {
                    mkdir(\yii::$app->basePath . '/../uploads/product/' . $product_id . '/gallery_profile/');
                    chmod(\yii::$app->basePath . '/../uploads/product/' . $product_id . '/gallery_profile/', 0777);
                }
                Image::thumbnail($path . '/' . $name, 250, 250)
                        ->save($main_path . '/gallery_thumb/' . $name, ['quality' => 80]);
                Image::thumbnail($path . '/' . $name, 1080, 1080)
                        ->save($main_path . '/gallery/' . $name, ['quality' => 80]);
                Image::thumbnail($path . '/' . $name, 600, 600)
                        ->save($main_path . '/gallery_profile/' . $name, ['quality' => 80]);
            }
            return true;
        }
    }

    public function fileExists($path, $canname, $image_name, $extension, $sufix) {
        if (file_exists($path . '/' . $image_name . '.' . $extension)) {
            $image_name = basename($path . '/' . $canname . '_' . $sufix);
            return $this->fileExists($path, $canname, $image_name, $extension, $sufix + 1);
        } else {
            return $image_name . '.' . $extension;
        }
    }

}
