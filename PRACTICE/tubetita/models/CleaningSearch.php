<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cleaning;

/**
 * CleaningSearch represents the model behind the search form about `app\models\Cleaning`.
 */
class CleaningSearch extends Cleaning
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_id', 'employee_id', 'checklist_id'], 'integer'],
            [['cleaning_task', 'cleaning_assignment', 'cleaning_timein', 'cleaning_timeout'], 'safe'],
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
        $query = Cleaning::find();

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
            'room_id' => $this->room_id,
            'employee_id' => $this->employee_id,
            'cleaning_timein' => $this->cleaning_timein,
            'cleaning_timeout' => $this->cleaning_timeout,
            'checklist_id' => $this->checklist_id,
        ]);

        $query->andFilterWhere(['like', 'cleaning_task', $this->cleaning_task])
            ->andFilterWhere(['like', 'cleaning_assignment', $this->cleaning_assignment]);

        return $dataProvider;
    }
}
