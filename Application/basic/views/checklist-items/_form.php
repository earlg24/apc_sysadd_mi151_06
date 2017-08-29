<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChecklistItems */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="checklist-items-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'checklist_ref_id')->textInput() ?>

    <?= $form->field($model, 'room_type_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
