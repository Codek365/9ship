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
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
       'user' => [
            'class' => 'frontend\modules\user\components\User',
            'identityClass' => 'frontend\modules\user\models\User',

        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
            'messageConfig' => [
                'from' => ['codek365@gmail.com' => 'Admin'], // this is needed for sending emails
                'charset' => 'UTF-8',
            ]
        ],
        
        // 'view' => [
        //      'theme' => [
        //          'pathMap' => [
        //             '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
        //          ],
        //      ],
        // ],
        // 'assetManager' => [
        //     'bundles' => [
        //         'dmstr\web\AdminLteAsset' => [
        //             'skin' => 'skin-black',
        //         ],
        //     ],
        // ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'authClientCollection' => [
        'class' => 'yii\authclient\Collection',
        'clients' => [
            'facebook' => [
                'class' => 'yii\authclient\clients\Facebook',
                'clientId' => '540527226136029',
                'clientSecret' => '6a673c3cb2ab374cd941480e86534278',
                'scope' => 'email',
            ],
            // 'google' => [
            //     'class' => 'yii\authclient\clients\GoogleOAuth',
            //     'clientId' => 'xxxxxxxxxx',
            //     'clientSecret' => 'yyyyyyyyyy',
            // ],
           
            // any other social auth
        ],
    ],
        
    ],
    'modules' => [
        'user' => [
            'class' => 'frontend\modules\user\Module',
            ]
    ],
    'params' => $params,
];
