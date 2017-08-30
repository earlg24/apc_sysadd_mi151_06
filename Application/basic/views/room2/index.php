<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Room2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Room2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room2-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Room2', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'room_type_id',
            'room_qr',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
