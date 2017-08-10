<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inspection".
 *
 * @property integer $room_id
 * @property integer $employee_id
 * @property string $inspection_task
 * @property string $inspection_assignment
 * @property string $inspection_timein
 * @property string $inspection_timeout
 *
 * @property Employee $employee
 * @property Room $room
 */
class Inspection extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inspection';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_id', 'employee_id'], 'required'],
            [['room_id', 'employee_id'], 'integer'],
            [['inspection_timein', 'inspection_timeout'], 'safe'],
            [['inspection_task', 'inspection_assignment'], 'string', 'max' => 45],
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
            'inspection_task' => 'Inspection Task',
            'inspection_assignment' => 'Inspection Assignment',
            'inspection_timein' => 'Inspection Timein',
            'inspection_timeout' => 'Inspection Timeout',
        ];
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
