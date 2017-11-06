<?php

namespace backend\modules\manager\models;

use Yii;

/**
 * This is the model class for table "tbl_suppliers".
 *
 * @property integer $suppID
 * @property string $companyName
 * @property string $addressName
 * @property integer $phone
 * @property string $email
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Suppliers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_suppliers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['companyName', 'addressName', 'created_at', 'updated_at'], 'required'],
            [['phone', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['companyName', 'addressName', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'suppID' => 'Supp ID',
            'companyName' => 'Company Name',
            'addressName' => 'Address Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getAllSuppliers(){
        return Suppliers::find()
            ->where(['status'=>'1'])
            ->all();
    }
}
