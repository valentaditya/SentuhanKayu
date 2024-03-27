<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Change Password';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-change-password" style="margin-left:390px; margin-top: 120px; ">
    <div class="site-change-password" style="background: #ffff ; width: 50%; height: 30%; padding: 10px ;border-radius: 10px;
    box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3); border: 9px solid #4477ce;"  >
        <h4 style="margin-left: 120px; margin-top:20px; top:10px; posistion: absolute;"><?= Html::encode($this->title) ?></h4>

        <div class="row">
            <div class="col-lg-15" style="">
            <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput() ?>
<?= $form->field($model, 'password')->passwordInput() ?>

<div class="form-group">
    <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>


            </div>
        </div>
    </div>
</div>
