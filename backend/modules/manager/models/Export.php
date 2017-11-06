<?php

namespace backend\modules\manager\models;

use Yii;

/**
 * This is the model class for table "tbl_export".
 *
 * @property integer $idEx
 * @property integer $idEmpl
 * @property integer $idPro
 * @property integer $quanlity
 * @property string $created_at
 * @property string $updated_at
 */
class Export extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_export';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idEmpl', 'idPro', 'quanlity', 'created_at', 'updated_at'], 'required'],
            [['idEmpl', 'idPro', 'quanlity'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idEx' => 'Id Ex',
            'idEmpl' => 'Id Empl',
            'idPro' => 'Id Pro',
            'quanlity' => 'Quanlity',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getAllExport(){
        return Export::find()
            ->where(['status'=>'1'])
            ->all();
    }

    public function getAllExportSum(){
        // $model = Export::find()->select('id,name as full')->asArray()->all();
        return Export::find()
            ->select('idEmpl','idPro','SUM(quanlity) AS Sumtotal Export')
            ->where(['status'=>'1'])
            ->groupBy('idEmpl','idPro' )->asArray();
            // ->all();
    }
}
// $leadsCount = Lead::find()
// ->select(['COUNT(*) AS cnt'])
// ->where('approved = 1')
// ->groupBy(['promoter_location_id', 'lead_type_id'])
// ->all();