<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\manager\models\Export */

$this->title = $model->idEx;
$this->params['breadcrumbs'][] = ['label' => 'Exports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="export-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idEx], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idEx], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idEx',
            'idEmpl',
            'idPro',
            'quanlity',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
