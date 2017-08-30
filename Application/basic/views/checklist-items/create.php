<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ChecklistItems */

$this->title = 'Create Checklist Items';
$this->params['breadcrumbs'][] = ['label' => 'Checklist Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="checklist-items-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
