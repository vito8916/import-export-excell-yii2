<?php

/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model*/

use yii\bootstrap4\ActiveForm;

?>

<?= $this->render('@app/widgets/Alert') ?>

    <h3>Upload Excel file here</h3>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'file')->fileInput() ?>

<button class="btn btn-primary">Submit</button>

<?php ActiveForm::end() ?>
