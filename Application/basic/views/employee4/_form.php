<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employee4 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee4-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'employee_fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employee_lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employee_mi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employee_position')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
