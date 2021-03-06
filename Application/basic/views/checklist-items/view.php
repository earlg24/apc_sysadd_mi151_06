<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ChecklistItems */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Checklist Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="checklist-items-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'checklist_ref_id' => $model->checklist_ref_id, 'room_type_id' => $model->room_type_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'checklist_ref_id' => $model->checklist_ref_id, 'room_type_id' => $model->room_type_id], [
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
            'checklist_ref_id',
            'room_type_id',
        ],
    ]) ?>

</div>
