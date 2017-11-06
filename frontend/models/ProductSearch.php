<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Product;

/**
 * ProductSearch represents the model behind the search form about `frontend\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['proID', 'price', 'saleOf', 'priceSale', 'quanlity', 'size', 'color', 'evaluation', 'groups', 'cateID', 'suppliresID', 'userID', 'status', 'created_at', 'updated_at'], 'integer'],
            [['productName', 'startSale', 'endSale', 'image', 'keyword', 'description', 'content'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Product::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'proID' => $this->proID,
            'price' => $this->price,
            'saleOf' => $this->saleOf,
            'startSale' => $this->startSale,
            'endSale' => $this->endSale,
            'priceSale' => $this->priceSale,
            'quanlity' => $this->quanlity,
            'size' => $this->size,
            'color' => $this->color,
            'evaluation' => $this->evaluation,
            'groups' => $this->groups,
            'cateID' => $this->cateID,
            'suppliresID' => $this->suppliresID,
            'userID' => $this->userID,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'productName', $this->productName])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'keyword', $this->keyword])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
