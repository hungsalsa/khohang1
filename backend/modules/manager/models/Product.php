<?php

namespace backend\modules\manager\models;

use Yii;

/**
 * This is the model class for table "tb_pro_stock".
 *
 * @property integer $idPro
 * @property string $proName
 * @property integer $quanlity
 * @property integer $supId
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_pro_stock';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['proName', 'supId', 'status', 'created_at', 'updated_at'], 'required'],
            [['quanlity', 'supId', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['proName'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPro' => 'Id Pro',
            'proName' => 'Pro Name',
            'quanlity' => 'Quanlity',
            'supId' => 'Sup ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getAllProduct(){
        return Product::find()
            ->where(['status'=>'1'])
            ->all();
    }
}
