<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Nhaphang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nhaphang-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'pro_id',['options' =>  ['class' => 'col-md-6']])->widget(Select2::classname(), [
        'data' => $allProduct,
        'language' => 'vi',
        'options' => ['placeholder' => 'Select a product ...',],
        'pluginOptions' => [
            'allowClear' => true
            ],
        ]); 
    ?>
    <?= $form->field($model, 'soluong',['options' =>  ['class' => 'col-md-3']])->textInput() ?>

    <?= $form->field($model, 'gia',['options' =>  ['class' => 'col-md-3']])->textInput() ?>

    <?= $form->field($model, 'nhanvien')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
