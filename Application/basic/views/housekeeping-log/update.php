<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HousekeepingLog */

$this->title = 'Update Housekeeping Log: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Housekeeping Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'room_id' => $model->room_id, 'room_room_type_id' => $model->room_room_type_id, 'employee_id' => $model->employee_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="housekeeping-log-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
