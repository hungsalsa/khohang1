<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Nhaphang */

$this->title = 'Create Nhaphang';
$this->params['breadcrumbs'][] = ['label' => 'Nhaphangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nhaphang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'allProduct' => $allProduct,
    ]) ?>

</div>
