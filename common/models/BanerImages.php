<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "baner_images".
 *
 * @property int $id
 * @property string $about
 * @property string $mgvision_difference
 * @property string $sustainability
 * @property string $security_market
 * @property string $customer_stories
 * @property string $corporate_governance
 * @property string $products_and_solutions
 * @property string $where_to_buy
 * @property string $search_result
 * @property string $partners
 * @property string $careers
 * @property string $news_events
 * @property string $contact
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class BanerImages extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'baner_images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['about', 'scent_marketing', 'products', 'blog', 'contact_us'], 'file', 'extensions' => 'jpg, png,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'about' => 'About',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
