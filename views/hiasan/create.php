<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Hiasan $model */

$this->title = 'Create Hiasan';
$this->params['breadcrumbs'][] = ['label' => 'Hiasans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hiasan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
