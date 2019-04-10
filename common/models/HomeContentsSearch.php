<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\HomeContents;

/**
 * HomeContentsSearch represents the model behind the search form about `common\models\HomeContents`.
 */
class HomeContentsSearch extends HomeContents
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'year_of_experience', 'status', 'CB', 'UB'], 'integer'],
            [['top_title', 'phone', 'email', 'facebook_link', 'twitter_link', 'linkedin_link', 'youtube_link', 'welcome_content', 'welcome_image', 'title', 'description', 'title1', 'description1', 'image1', 'title2', 'description2', 'image2', 'footer_address', 'DOC', 'DOU'], 'safe'],
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
        $query = HomeContents::find();

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

        $query->andFilterWhere(['like', 'top_title', $this->top_title])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'facebook_link', $this->facebook_link])
            ->andFilterWhere(['like', 'twitter_link', $this->twitter_link])
            ->andFilterWhere(['like', 'linkedin_link', $this->linkedin_link])
            ->andFilterWhere(['like', 'youtube_link', $this->youtube_link])
            ->andFilterWhere(['like', 'welcome_content', $this->welcome_content])
            ->andFilterWhere(['like', 'welcome_image', $this->welcome_image])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'title1', $this->title1])
            ->andFilterWhere(['like', 'description1', $this->description1])
            ->andFilterWhere(['like', 'image1', $this->image1])
            ->andFilterWhere(['like', 'title2', $this->title2])
            ->andFilterWhere(['like', 'description2', $this->description2])
            ->andFilterWhere(['like', 'image2', $this->image2])
            ->andFilterWhere(['like', 'footer_address', $this->footer_address]);

        return $dataProvider;
    }
}
