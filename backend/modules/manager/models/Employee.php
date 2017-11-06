<?php

namespace backend\modules\manager\models;

use Yii;

/**
 * This is the model class for table "tbl_employee".
 *
 * @property integer $id_em
 * @property string $emName
 * @property string $phone
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emName', 'phone', 'created_at', 'updated_at'], 'required'],
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['emName', 'phone'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_em' => 'Id Em',
            'emName' => 'Em Name',
            'phone' => 'Phone',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getAllEmployee(){
        return Employee::find()
            ->where(['status'=>'1'])
            ->all();
    }
}
