<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\manager\models\Product */

$this->title = 'Update Product: ' . $model->idPro;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPro, 'url' => ['view', 'id' => $model->idPro]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'allSupliers' => $allSupliers,
    ]) ?>

</div>
