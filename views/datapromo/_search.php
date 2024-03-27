<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DatapromoSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="datapromo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'gambar1') ?>

    <?= $form->field($model, 'nama_produk1') ?>

    <?= $form->field($model, 'harga1') ?>

    <?= $form->field($model, 'gambar2') ?>

    <?php // echo $form->field($model, 'nama_produk2') ?>

    <?php // echo $form->field($model, 'harga2') ?>

    <?php // echo $form->field($model, 'gambar3') ?>

    <?php // echo $form->field($model, 'nama_produk3') ?>

    <?php // echo $form->field($model, 'harga3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
