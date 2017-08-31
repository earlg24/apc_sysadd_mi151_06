<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ChecklistCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Checklist Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="checklist-category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Checklist Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'checklist_category_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
