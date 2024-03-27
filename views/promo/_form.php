<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Promo $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="promo-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>


    <?= $form->field($model, 'gambar')->fileInput() ?>

    <?= $form->field($model, 'nmbarang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bruto')->textInput() ?>

    <?= $form->field($model, 'netto')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
