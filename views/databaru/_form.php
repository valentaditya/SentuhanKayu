<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Databaru $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="databaru-form">

    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', [
            'class' => 'btn btn-success',
            'onclick' => 'showSweetAlert(); return false;', // Call JavaScript function on click
        ]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<!-- Include the SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // JavaScript function to show SweetAlert confirmation
    function showSweetAlert() {
        Swal.fire({
            title: 'Apakah Data Anda Sudah Benar?',
            text: "Data Akan Disimpan",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('contact-form').submit();
            }
        });
    }
</script>
