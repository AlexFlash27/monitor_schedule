<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Monitor */

$this->title = 'Create Monitor';
$this->params['breadcrumbs'][] = ['label' => 'Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
