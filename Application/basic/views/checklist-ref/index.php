<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ChecklistRefSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Checklist Refs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="checklist-ref-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Checklist Ref', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'checklist_description',
            'checklist_category_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
