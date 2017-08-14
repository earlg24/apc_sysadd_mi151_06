<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Inspection */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inspection-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'room_id')->textInput() ?>

    <?= $form->field($model, 'employee_id')->textInput() ?>

    <?= $form->field($model, 'inspection_task')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inspection_assignment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inspection_timein')->textInput() ?>

    <?= $form->field($model, 'inspection_timeout')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
