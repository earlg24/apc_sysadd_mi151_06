<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ChecklistItems;

/**
 * ChecklistItemsSearch represents the model behind the search form about `app\models\ChecklistItems`.
 */
class ChecklistItemsSearch extends ChecklistItems
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'checklist_ref_id', 'room_type_id'], 'integer'],
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
        $query = ChecklistItems::find();

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
            'checklist_ref_id' => $this->checklist_ref_id,
            'room_type_id' => $this->room_type_id,
        ]);

        return $dataProvider;
    }
}
