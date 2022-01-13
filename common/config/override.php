<?php
return [
    'params' => [
	'platform' => [
		'frontendUrl' => '',
		'backendUrl' => '',
    	],
    ],
    'components' => [
        'dbstats' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=',
            'username' => '',
            'password' => '',
            'charset' => 'utf8',
            'enableSchemaCache' => true,
            'schemaCacheDuration' => 88000,
            'schemaCache' => 'schemaCache',
        ],
    'urlManager' => [
            'hostInfo' => '',
        ],
    ]
];
