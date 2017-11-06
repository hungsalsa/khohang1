<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\manager\models\Order */

$this->title = 'Create Order';
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'allEmployee' => $allEmployee,
        'allProduct' => $allProduct,
        'allCustomer' => $allCustomer,
    ]) ?>

</div>
