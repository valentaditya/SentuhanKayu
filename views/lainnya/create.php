<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Lainnya $model */

$this->title = 'Create Lainnya';
$this->params['breadcrumbs'][] = ['label' => 'Lainnyas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lainnya-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
