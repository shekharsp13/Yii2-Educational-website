<?php
$params = require (__DIR__ . '/params.php');

$config = [ 
		'id' => 'basic',
		'name' => 'Talents Heart',
		'basePath' => dirname ( __DIR__ ),
		'bootstrap' => [ 
				'log' 
		],
		'components' => [ 
				'request' => [ 
						// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
						'cookieValidationKey' => md5 ( 'anb' ) 
				],
				'cache' => [ 
						'class' => 'yii\caching\FileCache' 
				],
				'user' => [ 
						'identityClass' => 'app\models\User',
						'enableAutoLogin' => true 
				],
				'errorHandler' => [ 
						'errorAction' => 'site/error' 
				],
				'view' => [ 
						'theme' => [ 
								'basePath' => '@app/themes/',
								'baseUrl' => '@web/themes/',
								'pathMap' => [
										'@app/views' => '@app/themes/',
								]
						] 
				],
				'mailer' => [ 
						'class' => 'yii\swiftmailer\Mailer',
						// send all mails to a file by default. You have to set
						// 'useFileTransport' to false and configure a transport
						// for the mailer to send real emails.
						'useFileTransport' => true 
				],
				'log' => [ 
						'traceLevel' => YII_DEBUG ? 3 : 0,
						'targets' => [ 
								[ 
										'class' => 'yii\log\FileTarget',
										'levels' => [ 
												'error',
												'warning' 
										] 
								] 
						] 
				],
				'db' => require (__DIR__ . '/db.php'),
				'urlManager' => [ 
						'enablePrettyUrl' => true,
						'showScriptName' => false,
						'rules' => [ 
								'dashboard/index' => 'dashboard',
						] 
				] 
		],
		'params' => $params 
];

if (YII_ENV == 'dev' ) {
	// configuration adjustments for 'dev' environment
	$config ['bootstrap'] [] = 'debug';
	$config ['modules'] ['debug'] = [ 
			'class' => 'yii\debug\Module' 
	];
	
	//$config ['bootstrap'] [] = 'agii';
	$config ['modules'] ['agii'] = [ 
			'class' => 'app\modules\agii\Agii',
	];
}

return $config;
