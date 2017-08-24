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
 * @property string $employee_position
 * @property integer $employee_contactno
 *
 * @property HousekeepingLog[] $housekeepingLogs
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
            [['employee_contactno'], 'required'],
            [['employee_contactno'], 'integer'],
            [['employee_fname', 'employee_lname', 'employee_position'], 'string', 'max' => 45],
            [['employee_mi'], 'string', 'max' => 3],
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
            'employee_position' => 'Employee Position',
            'employee_contactno' => 'Employee Contactno',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHousekeepingLogs()
    {
        return $this->hasMany(HousekeepingLog::className(), ['employee_id' => 'id']);
    }
}
