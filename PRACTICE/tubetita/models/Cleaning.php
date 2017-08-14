<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cleaning".
 *
 * @property integer $room_id
 * @property integer $employee_id
 * @property string $cleaning_task
 * @property string $cleaning_assignment
 * @property string $cleaning_timein
 * @property string $cleaning_timeout
 * @property integer $checklist_id
 *
 * @property Checklist $checklist
 * @property Employee $employee
 * @property Room $room
 */
class Cleaning extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cleaning';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_id', 'employee_id', 'checklist_id'], 'required'],
            [['room_id', 'employee_id', 'checklist_id'], 'integer'],
            [['cleaning_timein', 'cleaning_timeout'], 'safe'],
            [['cleaning_task', 'cleaning_assignment'], 'string', 'max' => 45],
            [['checklist_id'], 'exist', 'skipOnError' => true, 'targetClass' => Checklist::className(), 'targetAttribute' => ['checklist_id' => 'id']],
            [['employee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['employee_id' => 'id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['room_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'room_id' => 'Room ID',
            'employee_id' => 'Employee ID',
            'cleaning_task' => 'Cleaning Task',
            'cleaning_assignment' => 'Cleaning Assignment',
            'cleaning_timein' => 'Cleaning Timein',
            'cleaning_timeout' => 'Cleaning Timeout',
            'checklist_id' => 'Checklist ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChecklist()
    {
        return $this->hasOne(Checklist::className(), ['id' => 'checklist_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }
}
