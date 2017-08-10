<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InspectionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inspection-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'room_id') ?>

    <?= $form->field($model, 'employee_id') ?>

    <?= $form->field($model, 'inspection_task') ?>

    <?= $form->field($model, 'inspection_assignment') ?>

    <?= $form->field($model, 'inspection_timein') ?>

    <?php // echo $form->field($model, 'inspection_timeout') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
