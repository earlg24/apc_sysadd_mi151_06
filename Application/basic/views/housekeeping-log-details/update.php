<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HousekeepingLogDetails */

$this->title = 'Update Housekeeping Log Details: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Housekeeping Log Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'housekeeping_log_id' => $model->housekeeping_log_id, 'housekeeping_log_room_id' => $model->housekeeping_log_room_id, 'housekeeping_log_room_room_type_id' => $model->housekeeping_log_room_room_type_id, 'housekeeping_log_employee_id' => $model->housekeeping_log_employee_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="housekeeping-log-details-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
