<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\manager\models\Export */

$this->title = 'Create Export';
$this->params['breadcrumbs'][] = ['label' => 'Exports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="export-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'allEmployee' => $allEmployee,
        'allProduct' => $allProduct,
    ]) ?>

</div>
