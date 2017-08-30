<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HousekeepingLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Housekeeping Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="housekeeping-log-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Housekeeping Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'room_id',
            'room_room_type_id',
            'employee_id',
            'housekeeping_log_status',
            'housekeeping_log_timein',
            'housekeeping_log_timeout',
            'cleaning_status',
            'inspected_by_employee_id',
            'inspection_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
