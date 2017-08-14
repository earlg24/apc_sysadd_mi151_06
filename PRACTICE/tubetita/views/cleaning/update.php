<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cleaning */

$this->title = 'Update Cleaning: ' . $model->room_id;
$this->params['breadcrumbs'][] = ['label' => 'Cleanings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->room_id, 'url' => ['view', 'room_id' => $model->room_id, 'employee_id' => $model->employee_id, 'checklist_id' => $model->checklist_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cleaning-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
