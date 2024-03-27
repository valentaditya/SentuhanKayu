<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Promo;

/**
 * PromoSearch represents the model behind the search form of `app\models\Promo`.
 */
class PromoSearch extends Promo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'bruto', 'netto'], 'integer'],
            [['gambar', 'nmbarang'], 'safe'],
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
        $query = Promo::find();

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
            'bruto' => $this->bruto,
            'netto' => $this->netto,
        ]);

        $query->andFilterWhere(['like', 'gambar', $this->gambar])
            ->andFilterWhere(['like', 'nmbarang', $this->nmbarang]);

        return $dataProvider;
    }
}
