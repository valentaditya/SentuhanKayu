<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Hiasan $model */

$this->title = 'Update Hiasan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Hiasans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hiasan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
