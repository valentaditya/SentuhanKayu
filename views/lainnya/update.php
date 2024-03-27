<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Lainnya $model */

$this->title = 'Update Lainnya: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lainnyas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lainnya-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
