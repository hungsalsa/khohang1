<?php

namespace backend\modules\manager\models;

use Yii;

/**
 * This is the model class for table "tbl_inventory".
 *
 * @property integer $idEmpl
 * @property integer $idPro
 * @property integer $quantityTaken
 * @property integer $quantityExported
 * @property integer $quantityPersisted
 * @property string $created_at
 * @property string $update_at
 */
class Inventory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_inventory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPro', 'quantityTaken', 'quantityExported', 'quantityPersisted', 'created_at', 'update_at'], 'required'],
            [['idPro', 'quantityTaken', 'quantityExported', 'quantityPersisted'], 'integer'],
            [['created_at', 'update_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idEmpl' => 'Id Empl',
            'idPro' => 'Id Pro',
            'quantityTaken' => 'Quantity Taken',
            'quantityExported' => 'Quantity Exported',
            'quantityPersisted' => 'Quantity Persisted',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
        ];
    }

   

    
}
