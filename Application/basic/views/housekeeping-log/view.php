<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HousekeepingLog */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Housekeeping Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="housekeeping-log-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'room_id' => $model->room_id, 'room_room_type_id' => $model->room_room_type_id, 'employee_id' => $model->employee_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'room_id' => $model->room_id, 'room_room_type_id' => $model->room_room_type_id, 'employee_id' => $model->employee_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'room_id',
            'room_room_type_id',
            'employee_id',
            'housekeeping_log_status',
            'housekeeping_log_timein',
            'housekeeping_log_timeout',
            'cleaning_status',
            'inspected_by_employee_id',
            'inspection_status',
        ],
    ]) ?>

</div>
