<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

Yii::setAlias('@root', $rootPath); //root alias is required for builder to work

$configBuilder = new \yii\configbuilder\ConfigBuilder();
(new yii\web\Application($configBuilder->getWebConfig()))->run();
