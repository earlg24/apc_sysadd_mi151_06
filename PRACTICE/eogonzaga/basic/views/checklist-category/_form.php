<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChecklistCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="checklist-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'checklist_category_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
