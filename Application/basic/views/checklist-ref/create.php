<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ChecklistRef */

$this->title = 'Create Checklist Ref';
$this->params['breadcrumbs'][] = ['label' => 'Checklist Refs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="checklist-ref-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
