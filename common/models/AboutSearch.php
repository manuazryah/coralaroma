<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\About;

/**
 * AboutSearch represents the model behind the search form about `common\models\About`.
 */
class AboutSearch extends About
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'year_of_experience', 'status', 'CB', 'UB'], 'integer'],
            [['about_content', 'image', 'image_title', 'description', 'why_coral_aroma', 'director_name', 'director_image', 'director_message', 'DOC', 'DOU'], 'safe'],
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
        $query = About::find();

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
            'year_of_experience' => $this->year_of_experience,
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'about_content', $this->about_content])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'image_title', $this->image_title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'why_coral_aroma', $this->why_coral_aroma])
            ->andFilterWhere(['like', 'director_name', $this->director_name])
            ->andFilterWhere(['like', 'director_image', $this->director_image])
            ->andFilterWhere(['like', 'director_message', $this->director_message]);

        return $dataProvider;
    }
}
