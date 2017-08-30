<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HousekeepingLog */

$this->title = 'Create Housekeeping Log';
$this->params['breadcrumbs'][] = ['label' => 'Housekeeping Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="housekeeping-log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
