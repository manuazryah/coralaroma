<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contacts_info".
 *
 * @property int $id
 * @property string $address
 * @property string $phone
 * @property string $whatsapp
 * @property string $fax
 * @property string $email
 * @property string $map
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class ContactsInfo extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'contacts_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['address', 'map'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['address', 'map', 'phone', 'whatsapp', 'fax', 'email'], 'required'],
            [['DOC', 'DOU'], 'safe'],
            [['phone', 'whatsapp'], 'string', 'max' => 25],
            [['fax', 'email'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'address' => 'Address',
            'phone' => 'Phone',
            'whatsapp' => 'Whatsapp',
            'fax' => 'Fax',
            'email' => 'Email',
            'map' => 'Map',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
