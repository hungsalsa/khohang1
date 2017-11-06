<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = $model->proID;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->proID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->proID], [
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
            'proID',
            'productName',
            'price',
            'saleOf',
            'startSale',
            'endSale',
            'priceSale',
            'quanlity',
            'size',
            'color',
            'evaluation',
            'image',
            'keyword',
            'description:ntext',
            'content:ntext',
            'groups',
            'cateID',
            'suppliresID',
            'userID',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
