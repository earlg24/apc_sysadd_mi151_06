<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Room2 */

$this->title = 'Update Room2: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Room2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'room_type_id' => $model->room_type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="room2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
