<?php

namespace common\modules\groups\models;

use Yii;

/**
 * This is the model class for table "food".
 *
 * @property integer $id
 * @property integer $country_id
 * @property integer $state_id
 * @property integer $citiy
 * @property string $food_name
 */
class Food extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'food';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id', 'state_id', 'citiy', 'food_name'], 'required'],
            [['country_id', 'state_id', 'citiy'], 'integer'],
            [['food_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country_id' => 'Country ID',
            'state_id' => 'State ID',
            'citiy' => 'Citiy',
            'food_name' => 'Food Name',
        ];
    }
}
