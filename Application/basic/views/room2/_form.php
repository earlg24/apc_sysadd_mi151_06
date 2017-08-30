<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Room2 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room2-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'room_type_id')->textInput() ?>

    <?= $form->field($model, 'room_qr')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
