<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'urlManager' => [
<<<<<<< HEAD
            'enablePrettyUrl' => true,
            'showScriptName'=>false,
            'suffix'=>'.html',
                'rules' => [
                'test'=>'site/test'
                ],
        ],
        
=======
        'enablePrettyUrl' => true,
        'showScriptName'=>false,
        'suffix'=>'.gps',
            'rules' => [
            'test'=>'site/test'
              ],
        ],      
>>>>>>> parent of 8b7b818... url manager omitida
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
    ],
    'params' => $params,
];
