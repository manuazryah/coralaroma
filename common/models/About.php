<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $about_content
 * @property int $year_of_experience
 * @property string $image
 * @property string $image_title
 * @property string $description
 * @property string $why_coral_aroma
 * @property string $director_name
 * @property string $director_image
 * @property string $director_message
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class About extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['about_content', 'why_coral_aroma', 'director_message'], 'string'],
            [['about_content', 'why_coral_aroma', 'director_message', 'year_of_experience', 'image_title', 'description', 'director_name'], 'required'],
            [['year_of_experience', 'status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['image_title', 'description', 'director_name'], 'string', 'max' => 100],
            [['image', 'director_image'], 'required', 'on' => 'create'],
            [['image', 'director_image'], 'file', 'extensions' => 'jpg, png,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'about_content' => 'About Content',
            'year_of_experience' => 'Year Of Experience',
            'image' => 'Image',
            'image_title' => 'Image Title',
            'description' => 'Description',
            'why_coral_aroma' => 'Why Coral Aroma',
            'director_name' => 'Director Name',
            'director_image' => 'Director Image',
            'director_message' => 'Director Message',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
