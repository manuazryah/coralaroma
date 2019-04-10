<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "recipients".
 *
 * @property int $id
 * @property string $recipient_name
 * @property string $canonical_name
 * @property string $image
 * @property string $content
 * @property string $meta_title
 * @property string $meta_keyword
 * @property string $meta_description
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Recipients extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'recipients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['content', 'meta_description'], 'string'],
            [['content', 'meta_description', 'recipient_name', 'canonical_name', 'meta_title', 'meta_keyword'], 'required'],
            [['CB', 'UB', 'status'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['recipient_name'], 'string', 'max' => 100],
            [['canonical_name', 'meta_title', 'meta_keyword'], 'string', 'max' => 200],
            [['image'], 'file', 'extensions' => 'jpg, png,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'recipient_name' => 'Recipient',
            'canonical_name' => 'Canonical Name',
            'image' => 'Image',
            'content' => 'Content',
            'meta_title' => 'Meta Title',
            'meta_keyword' => 'Meta Keyword',
            'meta_description' => 'Meta Description',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
