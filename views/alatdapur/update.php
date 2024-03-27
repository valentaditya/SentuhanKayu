<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Alatdapur $model */

$this->title = 'Update Alatdapur: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Alatdapurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alatdapur-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
