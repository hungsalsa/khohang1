<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tbl_nhaphang".
 *
 * @property integer $id
 * @property integer $pro_id
 * @property integer $soluong
 * @property integer $gia
 * @property integer $nhanvien
 * @property integer $created_at
 * @property string $update_at
 */
class Nhaphang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_nhaphang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pro_id', 'soluong', 'created_at'], 'required'],
            [['pro_id', 'soluong', 'gia', 'nhanvien', 'created_at'], 'integer'],
            [['update_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pro_id' => 'Ten hang hoa',
            'soluong' => 'So luong nhap',
            'gia' => 'Gia ban',
            'nhanvien' => 'Nhanvien',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
        ];
    }
}
