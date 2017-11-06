<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\manager\models\Export */

$this->title = 'Update Export: ' . $model->idEx;
$this->params['breadcrumbs'][] = ['label' => 'Exports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idEx, 'url' => ['view', 'id' => $model->idEx]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="export-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
