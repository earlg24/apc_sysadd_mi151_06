<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Employee4;

/**
 * Employee4Search represents the model behind the search form about `app\models\Employee4`.
 */
class Employee4Search extends Employee4
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['employee_fname', 'employee_lname', 'employee_mi', 'employee_position'], 'safe'],
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
        $query = Employee4::find();

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
        ]);

        $query->andFilterWhere(['like', 'employee_fname', $this->employee_fname])
            ->andFilterWhere(['like', 'employee_lname', $this->employee_lname])
            ->andFilterWhere(['like', 'employee_mi', $this->employee_mi])
            ->andFilterWhere(['like', 'employee_position', $this->employee_position]);

        return $dataProvider;
    }
}
