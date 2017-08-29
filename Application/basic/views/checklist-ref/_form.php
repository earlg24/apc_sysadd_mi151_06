<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChecklistRef */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="checklist-ref-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'checklist_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'checklist_category_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
