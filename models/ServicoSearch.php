<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\servico;

/**
 * ServicoSearch represents the model behind the search form of `app\models\servico`.
 */
class ServicoSearch extends servico
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'veiculo_id', 'funcionario_id'], 'integer'],
            [['descricao', 'status'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = servico::find();

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
            'veiculo_id' => $this->veiculo_id,
            'funcionario_id' => $this->funcionario_id,
        ]);

        $query->andFilterWhere(['like', 'descricao', $this->descricao])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
