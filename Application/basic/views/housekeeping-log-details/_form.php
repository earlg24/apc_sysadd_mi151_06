<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HousekeepingLogDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="housekeeping-log-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'housekeeping_log_details_checklist')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'housekeeping_log_details_status')->dropDownList([ 'Completed' => 'Completed', 'Not yet done' => 'Not yet done', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'housekeeping_log_details_timecompleted')->textInput() ?>

    <?= $form->field($model, 'housekeeping_log_id')->textInput() ?>

    <?= $form->field($model, 'housekeeping_log_room_id')->textInput() ?>

    <?= $form->field($model, 'housekeeping_log_room_room_type_id')->textInput() ?>

    <?= $form->field($model, 'housekeeping_log_employee_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>