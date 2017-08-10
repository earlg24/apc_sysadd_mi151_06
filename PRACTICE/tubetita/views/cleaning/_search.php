<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CleaningSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cleaning-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'room_id') ?>

    <?= $form->field($model, 'employee_id') ?>

    <?= $form->field($model, 'cleaning_task') ?>

    <?= $form->field($model, 'cleaning_assignment') ?>

    <?= $form->field($model, 'cleaning_timein') ?>

    <?php // echo $form->field($model, 'cleaning_timeout') ?>

    <?php // echo $form->field($model, 'checklist_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
