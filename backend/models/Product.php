<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_product".
 *
 * @property integer $proID
 * @property string $productName
 * @property integer $price
 * @property integer $saleOf
 * @property integer $startSale
 * @property integer $endSale
 * @property integer $priceSale
 * @property integer $quanlity
 * @property integer $size
 * @property integer $color
 * @property integer $evaluation
 * @property string $image
 * @property string $keyword
 * @property string $description
 * @property string $content
 * @property integer $groups
 * @property integer $cateID
 * @property integer $suppliresID
 * @property integer $userID
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['productName', 'cateID', 'created_at', 'updated_at'], 'required'],
            [['price', 'saleOf', 'priceSale', 'quanlity', 'size', 'color', 'evaluation', 'groups', 'cateID', 'suppliresID', 'userID', 'status', 'created_at', 'updated_at'], 'integer'],
            [['startSale', 'endSale'], 'safe'],
            [['description', 'content'], 'string'],
            [['productName', 'image', 'keyword'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'proID' => 'Pro ID',
            'productName' => 'Product Name',
            'price' => 'Price',
            'saleOf' => 'Sale Of',
            'startSale' => 'Start Sale',
            'endSale' => 'End Sale',
            'priceSale' => 'Price Sale',
            'quanlity' => 'Quanlity',
            'size' => 'Size',
            'color' => 'Color',
            'evaluation' => 'Evaluation',
            'image' => 'Image',
            'keyword' => 'Keyword',
            'description' => 'Description',
            'content' => 'Content',
            'groups' => 'Groups',
            'cateID' => 'Cate ID',
            'suppliresID' => 'Supplires ID',
            'userID' => 'User ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
