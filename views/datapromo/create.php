<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Datapromo $model */

$this->title = 'Create Datapromo';
$this->params['breadcrumbs'][] = ['label' => 'Datapromos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datapromo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
