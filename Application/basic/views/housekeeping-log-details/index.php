<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HousekeepingLogDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Housekeeping Log Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="housekeeping-log-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Housekeeping Log Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'housekeeping_log_details_checklist',
            'housekeeping_log_details_status',
            'housekeeping_log_details_timecompleted',
            'housekeeping_log_id',
            // 'housekeeping_log_room_id',
            // 'housekeeping_log_room_room_type_id',
            // 'housekeeping_log_employee_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
