<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Inspection */

$this->title = 'Update Inspection: ' . $model->room_id;
$this->params['breadcrumbs'][] = ['label' => 'Inspections', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->room_id, 'url' => ['view', 'room_id' => $model->room_id, 'employee_id' => $model->employee_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inspection-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
