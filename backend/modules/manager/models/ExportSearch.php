<?php

namespace backend\modules\manager\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\manager\models\Export;

/**
 * ExportSearch represents the model behind the search form about `backend\modules\manager\models\Export`.
 */
class ExportSearch extends Export
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idEx', 'idEmpl', 'idPro', 'quanlity'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
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
        $query = Export::find();

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
            'idEx' => $this->idEx,
            'idEmpl' => $this->idEmpl,
            'idPro' => $this->idPro,
            'quanlity' => $this->quanlity,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        return $dataProvider;
    }
}
