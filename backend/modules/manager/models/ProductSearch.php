<?php

namespace backend\modules\manager\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\manager\models\Product;

/**
 * ProductSearch represents the model behind the search form about `backend\modules\manager\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPro', 'quanlity', 'supId', 'status'], 'integer'],
            [['proName', 'created_at', 'updated_at'], 'safe'],
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
            'idPro' => $this->idPro,
            'quanlity' => $this->quanlity,
            'supId' => $this->supId,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'proName', $this->proName]);

        return $dataProvider;
    }
}
