<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\PhpManager'
        ],

    ],
    'modules' => [
        'groups' => [
            'class' => 'common\modules\groups\Module',
        ],
        'auth' => [
            'class' => 'common\modules\auth\Module',
        ],
        'rbac' => 'dektrium\rbac\RbacConsoleModule',
    ],
];
