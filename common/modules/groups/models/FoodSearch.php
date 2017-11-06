<?php

namespace common\modules\groups\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\groups\models\Food;

/**
 * FoodSearch represents the model behind the search form about `common\modules\groups\models\Food`.
 */
class FoodSearch extends Food
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'country_id', 'state_id', 'citiy'], 'integer'],
            [['food_name'], 'safe'],
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
        $query = Food::find();

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
            'id' => $this->id,
            'country_id' => $this->country_id,
            'state_id' => $this->state_id,
            'citiy' => $this->citiy,
        ]);

        $query->andFilterWhere(['like', 'food_name', $this->food_name]);

        return $dataProvider;
    }
}
