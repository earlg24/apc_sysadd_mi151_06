<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HousekeepingLogSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="housekeeping-log-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'room_id') ?>

    <?= $form->field($model, 'room_room_type_id') ?>

    <?= $form->field($model, 'employee_id') ?>

    <?= $form->field($model, 'housekeeping_log_status') ?>

    <?php // echo $form->field($model, 'housekeeping_log_timein') ?>

    <?php // echo $form->field($model, 'housekeeping_log_timeout') ?>

    <?php // echo $form->field($model, 'cleaning_status') ?>

    <?php // echo $form->field($model, 'inspected_by_employee_id') ?>

    <?php // echo $form->field($model, 'inspection_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
