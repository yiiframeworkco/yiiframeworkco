<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'yiico',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'es',
    'components' => [
        'authManager' => [
            'class' => '\yii\rbac\DbManager',
        ],
        'db' => require(__DIR__ . '/db.php'),
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
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
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => require(__DIR__ . '/urls.php'),
        ],
        'user' => [
            'class' => 'auth\components\User',
            'identityClass' => 'auth\models\User', // or replace to your custom identityClass
            'enableAutoLogin' => true,
        ],
    ],
    'modules' => [
        'auth' => [
            'class' => 'auth\Module',
            //'layout' => '//homepage', // Layout when not logged in yet
            'layoutLogged' => '//main', // Layout for logged in users
            'attemptsBeforeCaptcha' => 3, // Optional
            'supportEmail' => 'contacto@yiiframework.co', // Email for notifications
            'passwordResetTokenExpire' => 3600, // Seconds for token expiration
            'superAdmins' => ['robregonm'], // SuperAdmin users
            'signupWithEmailOnly' => false, // false = signup with username + email, true = only email signup
            'tableMap' => [ // Optional, but if defined, all must be declared
                'User' => 'user',
                'UserStatus' => 'user_status',
                'ProfileFieldValue' => 'profile_field_value',
                'ProfileField' => 'profile_field',
                'ProfileFieldType' => 'profile_field_type',
            ],
        ],
        'qa' => [
            'class' => 'artkost\qa\Module',
            'userNameFormatter' => 'getUserName',
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
