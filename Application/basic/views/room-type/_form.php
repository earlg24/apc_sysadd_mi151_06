<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RoomType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'room_type')->dropDownList([ 'Two-Bedroom Deluxe Suite' => 'Two-Bedroom Deluxe Suite', 
														  'Premier Queen' => 'Premier Queen', 'Premier King' => 'Premier King', 
														  'Deluxe Queen' => 'Deluxe Queen', 'Deluxe King' => 'Deluxe King', 'Batangas Suite' => 'Batangas Suite', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
