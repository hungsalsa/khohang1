<?php
use \yii\web\Request;
$baseUrl = str_replace('/web', '', (new Request)->getBaseUrl());
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'groups' => [
            'class' => 'app\modules\groups\Module',
        ],
        'stock' => [
            'class' => 'backend\modules\manager\stock',
        ],
        'auth' => [
            'class' => 'backend\modules\auth\auth',
        ],
        'rbac' => 'dektrium\rbac\RbacConsoleModule',
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'request'=>[
            'baseUrl'=>$baseUrl
        ],
        
        'urlManager' => [
            'baseUrl'=>$baseUrl,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],

         'searcher' => [
            'class' => \vintage\search\SearchComponent::class,
            'models' => [
                'Suppliers' => [
                    'class' => \common\models\Suppliers::class,
                    'label' => 'Suppliers',
                 ],
                 'products' => [
                    'class' => \common\models\Product::class,
                    'label' => 'Shop products',
                 ],
                // ...
            ],
      ],
        
    ],
    'params' => $params,
];
