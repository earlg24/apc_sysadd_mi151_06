<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "checklist".
 *
 * @property integer $id
 * @property string $checklist_taskname
 * @property string $checklist_taskdesc
 * @property string $checklist_status
 *
 * @property Cleaning[] $cleanings
 */
class Checklist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'checklist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['checklist_taskname', 'checklist_status'], 'string', 'max' => 45],
            [['checklist_taskdesc'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'checklist_taskname' => 'Checklist Taskname',
            'checklist_taskdesc' => 'Checklist Taskdesc',
            'checklist_status' => 'Checklist Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCleanings()
    {
        return $this->hasMany(Cleaning::className(), ['checklist_id' => 'id']);
    }
}
