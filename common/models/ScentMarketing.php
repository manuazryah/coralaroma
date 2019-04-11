<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "scent_marketing".
 *
 * @property int $id
 * @property int $category
 * @property string $title
 * @property string $image
 * @property string $content
 * @property string $banner_image
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class ScentMarketing extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'scent_marketing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['category', 'status', 'CB', 'UB'], 'integer'],
            [['content'], 'string'],
            [['content', 'title', 'canonical_name', 'mata_title', 'meta_keyword', 'meta_description'], 'required'],
            [['DOC', 'DOU'], 'safe'],
            [['title'], 'string', 'max' => 100],
            [['image', 'banner_image'], 'file', 'extensions' => 'jpg, png,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'title' => 'Title',
            'image' => 'Image',
            'content' => 'Content',
            'banner_image' => 'Banner Image',
            'status' => 'Status',
            'mata_title' => 'Meta Title',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
