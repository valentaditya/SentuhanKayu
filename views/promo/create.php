<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Promo $model */

$this->title = 'Create Promo';
$this->params['breadcrumbs'][] = ['label' => 'Promos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="promo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
