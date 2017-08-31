<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChecklistCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="checklist-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'checklist_category_name')->dropDownList(['Checklist for Inspector' => 'Checklist for Inspector', 'Checklist for Housekeeper' => 'Checklist for Housekeeper', 'Checklist for Two-Bedroom Deluxe Suite' => 'Checklist for Two-Bedroom Deluxe Suite', 
	'Checklist for Premier Queen' => 'Checklist for Premier Queen', 'Checklist for Premier King' => 'Checklist for Premier King', 'Checklist for Deluxe Queen' => 'Checklist for Deluxe Queen', 'Checklist for Deluxe King' => 'Checklist for Deluxe King', 'Checklist for Batangas Suite' => 'Checklist for Batangas Suite', ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
