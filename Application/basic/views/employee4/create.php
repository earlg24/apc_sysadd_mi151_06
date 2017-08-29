<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Employee4 */

$this->title = 'Create Employee4';
$this->params['breadcrumbs'][] = ['label' => 'Employee4s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee4-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
