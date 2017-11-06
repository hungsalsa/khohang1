<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\manager\models\Suppliers */

$this->title = 'Update Suppliers: ' . $model->suppID;
$this->params['breadcrumbs'][] = ['label' => 'Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->suppID, 'url' => ['view', 'id' => $model->suppID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="suppliers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
