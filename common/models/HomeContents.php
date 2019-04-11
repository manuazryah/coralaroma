<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "home_contents".
 *
 * @property int $id
 * @property string $top_title
 * @property string $phone
 * @property string $email
 * @property string $facebook_link
 * @property string $twitter_link
 * @property string $linkedin_link
 * @property string $youtube_link
 * @property string $welcome_content
 * @property int $year_of_experience
 * @property string $welcome_image
 * @property string $title
 * @property string $description
 * @property string $title1
 * @property string $description1
 * @property string $image1
 * @property string $title2
 * @property string $description2
 * @property string $image2
 * @property string $footer_address
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class HomeContents extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'home_contents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['welcome_content', 'footer_address'], 'string'],
            [['year_of_experience', 'status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU' . 'google_plus', 'pinterest', 'description1', 'description2'], 'safe'],
            [['top_title', 'email', 'title', 'description', 'title1', 'title2'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 25],
            [['facebook_link', 'twitter_link', 'linkedin_link', 'youtube_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'top_title' => 'Top Title',
            'phone' => 'Phone',
            'email' => 'Email',
            'facebook_link' => 'Facebook Link',
            'twitter_link' => 'Twitter Link',
            'linkedin_link' => 'Linkedin Link',
            'youtube_link' => 'Youtube Link',
            'welcome_content' => 'Welcome Content',
            'year_of_experience' => 'Year Of Experience',
            'welcome_image' => 'Welcome Image',
            'title' => 'Title',
            'description' => 'Description',
            'title1' => 'Title1',
            'description1' => 'Description1',
            'image1' => 'Image1',
            'title2' => 'Title2',
            'description2' => 'Description2',
            'image2' => 'Image2',
            'footer_address' => 'Footer Address',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
