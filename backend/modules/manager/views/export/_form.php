<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\manager\models\Export */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="export-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idEmpl')->dropdownlist($allEmployee,['prompt'=>'- Chọn nhân viên -']) ?>

    <?= $form->field($model, 'idPro')->dropdownlist($allProduct,['prompt'=>'- Chọn hàng xuất -']) ?>

    <?= $form->field($model, 'quanlity')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
