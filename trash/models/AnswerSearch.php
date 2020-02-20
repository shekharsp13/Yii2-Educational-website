<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Answer;

/**
 * AnswerSearch represents the model behind the search form about `app\models\Answer`.
 */
class AnswerSearch extends Answer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'que_id', 'ans_opt', 'state_id', 'type_id', 'created_by'], 'integer'],
            [['option1', 'option2', 'option3', 'option4', 'option5', 'ans', 'created_at', 'updated_at'], 'safe'],
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
        $query = Answer::find();

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
            'que_id' => $this->que_id,
            'ans_opt' => $this->ans_opt,
            'state_id' => $this->state_id,
            'type_id' => $this->type_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
        ]);

        $query->andFilterWhere(['like', 'option1', $this->option1])
            ->andFilterWhere(['like', 'option2', $this->option2])
            ->andFilterWhere(['like', 'option3', $this->option3])
            ->andFilterWhere(['like', 'option4', $this->option4])
            ->andFilterWhere(['like', 'option5', $this->option5])
            ->andFilterWhere(['like', 'ans', $this->ans]);

        return $dataProvider;
    }
}
