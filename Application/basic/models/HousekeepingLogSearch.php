<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HousekeepingLog;

/**
 * HousekeepingLogSearch represents the model behind the search form about `app\models\HousekeepingLog`.
 */
class HousekeepingLogSearch extends HousekeepingLog
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'room_id', 'room_room_type_id', 'employee_id', 'inspected_by_employee_id', 'housekeeping_log_details_id'], 'integer'],
            [['housekeeping_log_status', 'housekeeping_log_timein', 'housekeeping_log_timeout', 'cleaning_status', 'inspection_status'], 'safe'],
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
        $query = HousekeepingLog::find();

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
            'room_id' => $this->room_id,
            'room_room_type_id' => $this->room_room_type_id,
            'employee_id' => $this->employee_id,
            'housekeeping_log_timein' => $this->housekeeping_log_timein,
            'housekeeping_log_timeout' => $this->housekeeping_log_timeout,
            'inspected_by_employee_id' => $this->inspected_by_employee_id,
            'housekeeping_log_details_id' => $this->housekeeping_log_details_id,
        ]);

        $query->andFilterWhere(['like', 'housekeeping_log_status', $this->housekeeping_log_status])
            ->andFilterWhere(['like', 'cleaning_status', $this->cleaning_status])
            ->andFilterWhere(['like', 'inspection_status', $this->inspection_status]);

        return $dataProvider;
    }
}
