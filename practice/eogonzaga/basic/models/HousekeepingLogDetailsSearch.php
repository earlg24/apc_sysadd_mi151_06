<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HousekeepingLogDetails;

/**
 * HousekeepingLogDetailsSearch represents the model behind the search form about `app\models\HousekeepingLogDetails`.
 */
class HousekeepingLogDetailsSearch extends HousekeepingLogDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['housekeeping_log_details_checklist', 'housekeeping_log_details_status', 'housekeeping_log_details_timecompleted'], 'safe'],
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
        $query = HousekeepingLogDetails::find();

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
            'housekeeping_log_details_timecompleted' => $this->housekeeping_log_details_timecompleted,
        ]);

        $query->andFilterWhere(['like', 'housekeeping_log_details_checklist', $this->housekeeping_log_details_checklist])
            ->andFilterWhere(['like', 'housekeeping_log_details_status', $this->housekeeping_log_details_status]);

        return $dataProvider;
    }
}
