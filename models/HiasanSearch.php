<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Hiasan;

/**
 * HiasanSearch represents the model behind the search form of `app\models\Hiasan`.
 */
class HiasanSearch extends Hiasan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'harga1', 'harga2', 'harga3'], 'integer'],
            [['gambar1', 'nama_produk1', 'gambar2', 'nama_produk2', 'gambar3', 'nama_produk3'], 'safe'],
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
        $query = Hiasan::find();

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
            'harga1' => $this->harga1,
            'harga2' => $this->harga2,
            'harga3' => $this->harga3,
        ]);

        $query->andFilterWhere(['like', 'gambar1', $this->gambar1])
            ->andFilterWhere(['like', 'nama_produk1', $this->nama_produk1])
            ->andFilterWhere(['like', 'gambar2', $this->gambar2])
            ->andFilterWhere(['like', 'nama_produk2', $this->nama_produk2])
            ->andFilterWhere(['like', 'gambar3', $this->gambar3])
            ->andFilterWhere(['like', 'nama_produk3', $this->nama_produk3]);

        return $dataProvider;
    }
}
