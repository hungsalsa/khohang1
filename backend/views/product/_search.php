<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'proID') ?>

    <?= $form->field($model, 'productName') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'saleOf') ?>

    <?= $form->field($model, 'startSale') ?>

    <?php // echo $form->field($model, 'endSale') ?>

    <?php // echo $form->field($model, 'priceSale') ?>

    <?php // echo $form->field($model, 'quanlity') ?>

    <?php // echo $form->field($model, 'size') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'evaluation') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'keyword') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'groups') ?>

    <?php // echo $form->field($model, 'cateID') ?>

    <?php // echo $form->field($model, 'suppliresID') ?>

    <?php // echo $form->field($model, 'userID') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
