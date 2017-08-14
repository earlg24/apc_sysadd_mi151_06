<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cleaning */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cleaning-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'room_id')->textInput() ?>

    <?= $form->field($model, 'employee_id')->textInput() ?>

    <?= $form->field($model, 'cleaning_task')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cleaning_assignment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cleaning_timein')->textInput() ?>

    <?= $form->field($model, 'cleaning_timeout')->textInput() ?>

    <?= $form->field($model, 'checklist_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
