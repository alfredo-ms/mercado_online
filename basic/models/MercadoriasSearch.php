<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mercadorias;

/**
 * MercadoriasSearch represents the model behind the search form about `app\models\Mercadorias`.
 */
class MercadoriasSearch extends Mercadorias
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'quantidade'], 'integer'],
            [['tipo_mercadoria', 'nome', 'tipo_negocio'], 'safe'],
            [['preco'], 'number'],
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
        $query = Mercadorias::find();

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
            'codigo' => $this->codigo,
            'quantidade' => $this->quantidade,
            'preco' => $this->preco,
        ]);

        $query->andFilterWhere(['like', 'tipo_mercadoria', $this->tipo_mercadoria])
            ->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'tipo_negocio', $this->tipo_negocio]);

        return $dataProvider;
    }
}
