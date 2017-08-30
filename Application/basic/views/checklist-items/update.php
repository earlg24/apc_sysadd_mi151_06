<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ChecklistItems */

$this->title = 'Update Checklist Items: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Checklist Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'checklist_ref_id' => $model->checklist_ref_id, 'room_type_id' => $model->room_type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="checklist-items-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
