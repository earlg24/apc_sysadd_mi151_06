<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HousekeepingLog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="housekeeping-log-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'room_id')->textInput() ?>

    <?= $form->field($model, 'room_room_type_id')->textInput() ?>

    <?= $form->field($model, 'employee_id')->textInput() ?>

    <?= $form->field($model, 'housekeeping_log_status')->dropDownList([ 'Completed' => 'Completed', 'Not yet done' => 'Not yet done', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'housekeeping_log_timein')->textInput() ?>

    <?= $form->field($model, 'housekeeping_log_timeout')->textInput() ?>

    <?= $form->field($model, 'cleaning_status')->dropDownList([ 'Completed' => 'Completed', 'Not yet done' => 'Not yet done', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'inspected_by_employee_id')->textInput() ?>

    <?= $form->field($model, 'inspection_status')->dropDownList([ 'Completed' => 'Completed', 'Not yet done' => 'Not yet done', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
