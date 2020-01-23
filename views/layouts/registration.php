<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register ( $this );
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
    <link rel="stylesheet"
	href="<?= $this->theme->getUrl('css/custom.css') ?>" type="text/css">

</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

<div id="custom-bootstrap-menu" class="navbar fixed-top navbar-toggleable-md scrolling-navbar navbar-dark bg-primary" role="navigation">
		    <div class="container-fluid">
		        <div class="navbar-header">
		        <a class="navbar-brand" href="<?= Url::home()	?>">
		        	<img src="<?= $this->theme->getUrl('/img/logo.png') ?>" class="img-responsive" width="40px">
		        	</a>
		        	<a class="navbar-brand" href="<?= Url::home()	?>"> <?= \Yii::$app->name ?> </a>
		        </div>
		    </div>
		</div>
		<div class="container">
        <?=Breadcrumbs::widget ( [ 'links' => isset ( $this->params ['breadcrumbs'] ) ? $this->params ['breadcrumbs'] : [ ] ] )?>
        <?= $content ?>
    	</div>
	</div>

	<footer class="footer navbar-fixed-bottom bg-primary">
			<p class="pull-left">&copy; <?= \Yii::$app->name ?> <?= date('Y') ?></p>

			<p class="pull-right">Powered By: <?= \Yii::$app->name?></p>
	</footer>

<?php $this->endBody() ?> 
</body>
</html>
<?php $this->endPage() ?>
