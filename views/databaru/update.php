<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Databaru $model */

$this->title = 'Update Databaru: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Databarus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="databaru-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
