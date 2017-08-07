<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property integer $id
 * @property integer $room_num
 * @property string $room_type
 * @property string $room_status
 * @property resource $room_qr
 *
 * @property Cleaning[] $cleanings
 * @property Inspection[] $inspections
 * @property Employee[] $employees
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_num'], 'integer'],
            [['room_qr'], 'string'],
            [['room_type'], 'string', 'max' => 60],
            [['room_status'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'room_num' => 'Room Num',
            'room_type' => 'Room Type',
            'room_status' => 'Room Status',
            'room_qr' => 'Room Qr',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCleanings()
    {
        return $this->hasMany(Cleaning::className(), ['room_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInspections()
    {
        return $this->hasMany(Inspection::className(), ['room_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Employee::className(), ['id' => 'employee_id'])->viaTable('inspection', ['room_id' => 'id']);
    }
}
