<?php
date_default_timezone_set('Asia/Calcutta');

defined('YII_ENV') or define('YII_ENV', 'dev');

defined('UPLOAD_PATH') or define('UPLOAD_PATH', dirname(__DIR__).'/upload/');
defined('STATUS_OK') or define('STATUS_OK', '1');
defined('STATUS_NOK') or define('STATUS_NOK', '0');

//if ( YII_ENV == 'dev' )
{
	// comment out the following two lines when deployed to production
	defined('YII_DEBUG') or define('YII_DEBUG', true);
}
	
require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/config/web.php');

(new yii\web\Application($config))->run();
