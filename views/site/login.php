<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">

<div style="     
background-color: #fff;
padding: 9px;
height: 370px;
width: 458px;
margin-left: 464px;
margin-top: 115px;
border-radius: 0 37px 0px 37pxx;
">


<div class="site-login">
    <div class="login-container">
        <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
        <p class="text-center">Login Terlebih Dahulu :3</p>

        <div class="row">
            <div class="col-lg-12">
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'fieldConfig' => [
                        'template' => "{label}\n{input}\n{error}",
                        'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                        'inputOptions' => ['class' => 'form-control'],
                        'errorOptions' => ['class' => 'invalid-feedback'],
                    ],
                ]); ?>

                <?= $form->field($model, 'username')->textInput(['placeholder' => 'Username']) ?>
                <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password']) ?>
                <?= $form->field($model, 'rememberMe')->checkbox([
                    'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                ]) ?>

                <div class="form-group text-center">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

<?php
// Register an external CSS file for additional styling
$this->registerCssFile('@web/css/styles.css');
?>
