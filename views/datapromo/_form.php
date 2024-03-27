<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Datapromo $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="datapromo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gambar1')->fileInput() ?>

    <?= $form->field($model, 'nama_produk1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga1')->textInput() ?>

    <?= $form->field($model, 'hargadiskon1')->textInput() ?>

    <?= $form->field($model, 'desc1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gambar2')->fileInput() ?>

    <?= $form->field($model, 'nama_produk2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga2')->textInput() ?>

    <?= $form->field($model, 'hargadiskon2')->textInput() ?>

    <?= $form->field($model, 'desc2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gambar3')->fileInput() ?>

    <?= $form->field($model, 'nama_produk3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga3')->textInput() ?>

    <?= $form->field($model, 'hargadiskon3')->textInput() ?>

    <?= $form->field($model, 'desc3')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
