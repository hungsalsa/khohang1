<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Nhaphang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nhaphang-form">

    <?php $form = ActiveForm::begin(); ?>

   <div class="my-form">

    <?php
    if( !$model->isNewRecord){
        $items = StatusType::find()->where(['status_id'=>$model->id])->orderBy('order')->all();
        if(!empty($items)){
        foreach ($items as $item) {
    ?>

        <p class="text-items">
            <label for="item<?= $item->order ?>">Item <span class="items-number"><?= $item->order ?></span></label>
            <input class="form-control" type="text" name="items[]" value="<?= $item->title ?>" id="item<?= $item->order ?>" /><br>
            <a href="#" class="remove-items">Remove</a>
        </p>
     <?php }}else{
     ?>
        <p class="text-items">
            <label for="item">Item <span class="items-number">1</span></label>
            <input class="form-control" type="text" name="items[]" value="" id="item" /><br>
            <a href="#" class="remove-items">Remove</a>
        </p>

     <?php  
        } } else{?>
        <p class="text-items">
            <label for="item">Item <span class="items-number">1</span></label>
            <input class="form-control" type="text" name="items[]" value="" id="item" /><br>
            <a href="#" class="remove-items">Remove</a>
        </p>
     <?php }?>
    <?= Html::button('Add More', ['class'=>'glyphicon glyphicon-plus btn btn-default btn-sm add-items']) ?>
</div>

    <?php ActiveForm::end(); ?>

</div>




<?php 

$script = <<< JS
    
    function Addnew() { alert("Hi");}
JS;
$this->registerJs($script);
 ?>

 <style type="text/css">
     .nhaphang{
        border-collapse: collapse;
        width: 80%;
     }
     .nhaphang td{
        border: 1px solid blue;
     }
 </style>