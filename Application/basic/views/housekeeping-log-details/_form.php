<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\HousekeepingLog;
use app\models\Room2;
use app\models\RoomType;
use app\models\Employee4;

/* @var $this yii\web\View */
/* @var $model app\models\HousekeepingLogDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="housekeeping-log-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'housekeeping_log_details_checklist')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'housekeeping_log_details_status')->dropDownList([ 'Completed' => 'Completed', 'Not yet done' => 'Not yet done', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'housekeeping_log_details_timecompleted')->textInput() ?>

    <?= $form->field($model, 'housekeeping_log_id')->dropDownList(ArrayHelper::map(HousekeepingLog::find()->all(), 'id', 'id'), ['prompt' => 'Select HousekeepingLogID']) ?>

    <?= $form->field($model, 'housekeeping_log_room_id')->dropDownList(ArrayHelper::map(Room2::find()->all(), 'id', 'id'), ['prompt' => 'Select RoomID']) ?>

    <?= $form->field($model, 'housekeeping_log_room_room_type_id')->dropDownList(ArrayHelper::map(RoomType::find()->all(), 'id', 'id'), ['prompt' => 'Select RoomTypeID']) ?>

    <?= $form->field($model, 'housekeeping_log_employee_id')->dropDownList(ArrayHelper::map(Employee4::find()->all(), 'id', 'id'), ['prompt' => 'Select EmployeeID']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
