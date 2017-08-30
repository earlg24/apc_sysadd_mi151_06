<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ChecklistRef */

$this->title = 'Update Checklist Ref: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Checklist Refs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'checklist_category_id' => $model->checklist_category_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="checklist-ref-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
