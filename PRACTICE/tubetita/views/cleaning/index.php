<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CleaningSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cleanings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cleaning-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cleaning', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'room_id',
            'employee_id',
            'cleaning_task',
            'cleaning_assignment',
            'cleaning_timein',
            // 'cleaning_timeout',
            // 'checklist_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
