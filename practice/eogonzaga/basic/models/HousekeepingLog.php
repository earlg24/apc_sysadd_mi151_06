<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "housekeeping_log".
 *
 * @property integer $id
 * @property integer $room_id
 * @property integer $room_room_type_id
 * @property integer $employee_id
 * @property string $housekeeping_log_status
 * @property string $housekeeping_log_timein
 * @property string $housekeeping_log_timeout
 * @property string $cleaning_status
 * @property integer $inspected_by_employee_id
 * @property string $inspection_status
 *
 * @property Employee4 $employee
 * @property Room2 $room
 * @property HousekeepingLogDetails[] $housekeepingLogDetails
 */
class HousekeepingLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'housekeeping_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_id', 'room_room_type_id', 'employee_id'], 'required'],
            [['room_id', 'room_room_type_id', 'employee_id', 'inspected_by_employee_id'], 'integer'],
            [['housekeeping_log_status', 'cleaning_status', 'inspection_status'], 'string'],
            [['housekeeping_log_timein', 'housekeeping_log_timeout'], 'safe'],
            [['employee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee4::className(), 'targetAttribute' => ['employee_id' => 'id']],
            [['room_id', 'room_room_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room2::className(), 'targetAttribute' => ['room_id' => 'id', 'room_room_type_id' => 'room_type_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'room_id' => 'Room ID',
            'room_room_type_id' => 'Room Room Type ID',
            'employee_id' => 'Employee ID',
            'housekeeping_log_status' => 'Housekeeping Log Status',
            'housekeeping_log_timein' => 'Housekeeping Log Timein',
            'housekeeping_log_timeout' => 'Housekeeping Log Timeout',
            'cleaning_status' => 'Cleaning Status',
            'inspected_by_employee_id' => 'Inspected By Employee ID',
            'inspection_status' => 'Inspection Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee4::className(), ['id' => 'employee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room2::className(), ['id' => 'room_id', 'room_type_id' => 'room_room_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHousekeepingLogDetails()
    {
        return $this->hasMany(HousekeepingLogDetails::className(), ['housekeeping_log_id' => 'id', 'housekeeping_log_room_id' => 'room_id', 'housekeeping_log_room_room_type_id' => 'room_room_type_id', 'housekeeping_log_employee_id' => 'employee_id']);
    }
}
