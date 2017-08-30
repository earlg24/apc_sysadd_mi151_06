<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HousekeepingLogDetails */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Housekeeping Log Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="housekeeping-log-details-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'housekeeping_log_id' => $model->housekeeping_log_id, 'housekeeping_log_room_id' => $model->housekeeping_log_room_id, 'housekeeping_log_room_room_type_id' => $model->housekeeping_log_room_room_type_id, 'housekeeping_log_employee_id' => $model->housekeeping_log_employee_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'housekeeping_log_id' => $model->housekeeping_log_id, 'housekeeping_log_room_id' => $model->housekeeping_log_room_id, 'housekeeping_log_room_room_type_id' => $model->housekeeping_log_room_room_type_id, 'housekeeping_log_employee_id' => $model->housekeeping_log_employee_id], [
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
            'housekeeping_log_details_checklist',
            'housekeeping_log_details_status',
            'housekeeping_log_details_timecompleted',
            'housekeeping_log_id',
            'housekeeping_log_room_id',
            'housekeeping_log_room_room_type_id',
            'housekeeping_log_employee_id',
        ],
    ]) ?>

</div>
