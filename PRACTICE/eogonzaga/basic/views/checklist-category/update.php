<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ChecklistCategory */

$this->title = 'Update Checklist Category: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Checklist Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="checklist-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
