<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HousekeepingLogDetailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="housekeeping-log-details-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'housekeeping_log_details_checklist') ?>

    <?= $form->field($model, 'housekeeping_log_details_status') ?>

    <?= $form->field($model, 'housekeeping_log_details_timecompleted') ?>

    <?= $form->field($model, 'housekeeping_log_id') ?>

    <?php // echo $form->field($model, 'housekeeping_log_room_id') ?>

    <?php // echo $form->field($model, 'housekeeping_log_room_room_type_id') ?>

    <?php // echo $form->field($model, 'housekeeping_log_employee_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
