<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Inspection */

$this->title = $model->room_id;
$this->params['breadcrumbs'][] = ['label' => 'Inspections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inspection-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'room_id' => $model->room_id, 'employee_id' => $model->employee_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'room_id' => $model->room_id, 'employee_id' => $model->employee_id], [
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
            'room_id',
            'employee_id',
            'inspection_task',
            'inspection_assignment',
            'inspection_timein',
            'inspection_timeout',
        ],
    ]) ?>

</div>
