<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'productName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'saleOf')->textInput() ?>

    <?= $form->field($model, 'startSale')->textInput() ?>

    <?= $form->field($model, 'endSale')->textInput() ?>

    <?= $form->field($model, 'priceSale')->textInput() ?>

    <?= $form->field($model, 'quanlity')->textInput() ?>

    <?= $form->field($model, 'size')->textInput() ?>

    <?= $form->field($model, 'color')->textInput() ?>

    <?= $form->field($model, 'evaluation')->textInput() ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6,'id'=>'description']) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'groups')->textInput() ?>

    <?= $form->field($model, 'cateID')->dropDownList($allCategory,['prompt'=>'-Chọn danh muc -']) ?>

    <?= $form->field($model, 'suppliresID')->textInput() ?>

    <?= $form->field($model, 'userID')->dropDownList($allUser,['prompt'=>'-Chọn nguoi dung-']) ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
