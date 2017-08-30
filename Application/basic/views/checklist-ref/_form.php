<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\ChecklistCategory;

/* @var $this yii\web\View */
/* @var $model app\models\ChecklistRef */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="checklist-ref-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'checklist_description')->textInput() ?>

    <?= $form->field($model, 'checklist_category_id')->dropDownList(ArrayHelper::map(ChecklistCategory::find()->all(), 'id', 'id'), ['prompt' => 'Select ChecklistCategory']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
