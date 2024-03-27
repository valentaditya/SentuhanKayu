<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Alatdapur $model */

$this->title = 'Create Alatdapur';
$this->params['breadcrumbs'][] = ['label' => 'Tambahan Data Alat Dapur', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alatdapur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
