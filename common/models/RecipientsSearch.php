<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Recipients;

/**
 * RecipientsSearch represents the model behind the search form about `common\models\Recipients`.
 */
class RecipientsSearch extends Recipients
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'CB', 'UB'], 'integer'],
            [['recipient_name', 'canonical_name', 'image', 'content', 'meta_title', 'meta_keyword', 'meta_description', 'DOC', 'DOU'], 'safe'],
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
        $query = Recipients::find();

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
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'recipient_name', $this->recipient_name])
            ->andFilterWhere(['like', 'canonical_name', $this->canonical_name])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'meta_title', $this->meta_title])
            ->andFilterWhere(['like', 'meta_keyword', $this->meta_keyword])
            ->andFilterWhere(['like', 'meta_description', $this->meta_description]);

        return $dataProvider;
    }
}
