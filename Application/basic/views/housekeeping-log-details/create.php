<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HousekeepingLogDetails */

$this->title = 'Create Housekeeping Log Details';
$this->params['breadcrumbs'][] = ['label' => 'Housekeeping Log Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="housekeeping-log-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
