<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "housekeeping_log_details".
 *
 * @property integer $id
 * @property string $housekeeping_log_details_checklist
 * @property string $housekeeping_log_details_status
 * @property string $housekeeping_log_details_timecompleted
 * @property integer $housekeeping_log_id
 * @property integer $housekeeping_log_room_id
 * @property integer $housekeeping_log_room_room_type_id
 * @property integer $housekeeping_log_employee_id
 *
 * @property HousekeepingLog $housekeepingLog
 */
class HousekeepingLogDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'housekeeping_log_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['housekeeping_log_details_status'], 'string'],
            [['housekeeping_log_details_timecompleted'], 'safe'],
            [['housekeeping_log_id', 'housekeeping_log_room_id', 'housekeeping_log_room_room_type_id', 'housekeeping_log_employee_id'], 'required'],
            [['housekeeping_log_id', 'housekeeping_log_room_id', 'housekeeping_log_room_room_type_id', 'housekeeping_log_employee_id'], 'integer'],
            [['housekeeping_log_details_checklist'], 'string', 'max' => 60],
            [['housekeeping_log_id', 'housekeeping_log_room_id', 'housekeeping_log_room_room_type_id', 'housekeeping_log_employee_id'], 'exist', 'skipOnError' => true, 'targetClass' => HousekeepingLog::className(), 'targetAttribute' => ['housekeeping_log_id' => 'id', 'housekeeping_log_room_id' => 'room_id', 'housekeeping_log_room_room_type_id' => 'room_room_type_id', 'housekeeping_log_employee_id' => 'employee_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'housekeeping_log_details_checklist' => 'Housekeeping Log Details Checklist',
            'housekeeping_log_details_status' => 'Housekeeping Log Details Status',
            'housekeeping_log_details_timecompleted' => 'Housekeeping Log Details Timecompleted',
            'housekeeping_log_id' => 'Housekeeping Log ID',
            'housekeeping_log_room_id' => 'Housekeeping Log Room ID',
            'housekeeping_log_room_room_type_id' => 'Housekeeping Log Room Room Type ID',
            'housekeeping_log_employee_id' => 'Housekeeping Log Employee ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHousekeepingLog()
    {
        return $this->hasOne(HousekeepingLog::className(), ['id' => 'housekeeping_log_id', 'room_id' => 'housekeeping_log_room_id', 'room_room_type_id' => 'housekeeping_log_room_room_type_id', 'employee_id' => 'housekeeping_log_employee_id']);
    }
}
