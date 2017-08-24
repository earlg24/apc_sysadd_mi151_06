<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ChecklistCategory */

$this->title = 'Create Checklist Category';
$this->params['breadcrumbs'][] = ['label' => 'Checklist Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="checklist-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
