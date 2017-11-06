<?php

namespace backend\modules\manager\controllers;
use backend\modules\manager\models\Export;

class StatisticController extends \yii\web\Controller
{
    public function actionIndex()
    {
$export = new Export();

$allEx = $export->getAllExportSum();

echo "<pre>";

print_r($allEx);
        return $this->render('index');
    }

}
