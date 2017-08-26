<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        The Unity Housekeeping system contains the Hotel Room Cleaning Checklist 
		Module that revolves around tracking the cleaning and checking of each hotel
		room. The Unity Housekeeping system will have an automated check list that lets 
		the user track their time of work which can help them be motivated to be more productive.
    </p>

    <code><?= __FILE__ ?></code>
</div>
