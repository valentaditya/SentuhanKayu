<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Databaru $model */

$this->title = 'Create Databaru';
$this->params['breadcrumbs'][] = ['label' => 'Databarus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="databaru-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
