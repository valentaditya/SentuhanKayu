<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UsersSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="users-search">

<?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => true, // Aktifkan pjax
        ],
    ]); ?>

    
<?= $form->field($model, 'username')->textInput(['placeholder' => 'Masukan Username yang anda cari', 'oninput' => 'submitForm()', 'style' => 'width: 500px;']) ?>

  
    <?php ActiveForm::end(); ?>

</div>
<script type="text/javascript">
    function submitForm() {
        clearTimeout(window.timer);
        window.timer = setTimeout(function () {
            $('#w0').submit(); // Ganti '#w0' sesuai dengan id form Anda
        }, 500); // Atur waktu penundaan sesuai kebutuhan Anda (misalnya, 500ms)
    }
</script>