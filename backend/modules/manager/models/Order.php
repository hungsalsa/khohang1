<?php

namespace backend\modules\manager\models;

use Yii;

/**
 * This is the model class for table "tbl_order".
 *
 * @property integer $idOrder
 * @property integer $idEmpl
 * @property integer $idPro
 * @property integer $quanlity
 * @property integer $idCust
 * @property string $note
 * @property string $created_at
 * @property string $updated_at
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idEmpl', 'idPro', 'quanlity', 'idCust', 'created_at', 'updated_at'], 'required'],
            [['idEmpl', 'idPro', 'quanlity', 'idCust'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['note'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idOrder' => 'Id Order',
            'idEmpl' => 'Id Empl',
            'idPro' => 'Id Pro',
            'quanlity' => 'Quanlity',
            'idCust' => 'Id Cust',
            'note' => 'Note',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
