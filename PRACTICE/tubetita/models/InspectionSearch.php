<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Inspection;

/**
 * InspectionSearch represents the model behind the search form about `app\models\Inspection`.
 */
class InspectionSearch extends Inspection
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_id', 'employee_id'], 'integer'],
            [['inspection_task', 'inspection_assignment', 'inspection_timein', 'inspection_timeout'], 'safe'],
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
        $query = Inspection::find();

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
            'inspection_timein' => $this->inspection_timein,
            'inspection_timeout' => $this->inspection_timeout,
        ]);

        $query->andFilterWhere(['like', 'inspection_task', $this->inspection_task])
            ->andFilterWhere(['like', 'inspection_assignment', $this->inspection_assignment]);

        return $dataProvider;
    }
}
