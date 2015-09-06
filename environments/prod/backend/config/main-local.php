<?php
return [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
            // unique CSRF cookie parameter for backend (set by kartik-v/yii2-app-practical-a)
            'csrfParam' => '_backendCsrf',
        ],
        // unique identity cookie parameter for backend (set by kartik-v/yii2-app-practical-a)
        'user' => [
            'identityCookie' => [
                'name' => '_backendUser', // unique for backend
                'path' => '/backend', // set it to correct path for backend app
            ]
        ],
        // unique identity session parameter for backend (set by kartik-v/yii2-app-practical-a)
        'session' => [
            'name' => '_backendSessionId',
            'savePath' => __DIR__ . '/../runtime/sessions',  
        ],,
        // url manager to access frontend
        'urlManagerFE' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '/practical-a', // change to your app base folder name
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ]
    ],
];
