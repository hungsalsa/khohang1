<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Nhaphang;

/**
 * NhaphangSearch represents the model behind the search form about `frontend\models\Nhaphang`.
 */
class NhaphangSearch extends Nhaphang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pro_id', 'soluong', 'gia', 'nhanvien', 'created_at'], 'integer'],
            [['update_at'], 'safe'],
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
        $query = Nhaphang::find();

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
            'pro_id' => $this->pro_id,
            'soluong' => $this->soluong,
            'gia' => $this->gia,
            'nhanvien' => $this->nhanvien,
            'created_at' => $this->created_at,
            'update_at' => $this->update_at,
        ]);

        return $dataProvider;
    }
}
