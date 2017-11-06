<?php

namespace backend\modules\manager\models;

use Yii;

/**
 * This is the model class for table "tbl_customer".
 *
 * @property integer $idCust
 * @property string $cusName
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $note
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cusName', 'address', 'phone', 'status', 'created_at', 'updated_at'], 'required'],
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['cusName', 'address'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 12],
            [['email'], 'string', 'max' => 100],
            [['note'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCust' => 'Id Cust',
            'cusName' => 'Cus Name',
            'address' => 'Address',
            'phone' => 'Phone',
            'email' => 'Email',
            'note' => 'Note',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getAllCustomer(){
        return Customer::find()
            ->where(['status'=>'1'])
            ->all();
    }
}
