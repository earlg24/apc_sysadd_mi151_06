<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $employee_fname
 * @property string $employee_lname
 * @property string $employee_mi
 * @property string $employee_department
 * @property string $employee_position
 * @property string $employee_attendance
 *
 * @property Cleaning[] $cleanings
 * @property Inspection[] $inspections
 * @property Room[] $rooms
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_fname', 'employee_lname', 'employee_department', 'employee_position'], 'string', 'max' => 60],
            [['employee_mi'], 'string', 'max' => 3],
            [['employee_attendance'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'employee_fname' => 'Employee Fname',
            'employee_lname' => 'Employee Lname',
            'employee_mi' => 'Employee Mi',
            'employee_department' => 'Employee Department',
            'employee_position' => 'Employee Position',
            'employee_attendance' => 'Employee Attendance',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCleanings()
    {
        return $this->hasMany(Cleaning::className(), ['employee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInspections()
    {
        return $this->hasMany(Inspection::className(), ['employee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRooms()
    {
        return $this->hasMany(Room::className(), ['id' => 'room_id'])->viaTable('inspection', ['employee_id' => 'id']);
    }
}
