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
    
    <link rel="stylesheet" href="<?= $this->theme->getUrl('css/custom.css') ?>" type="text/css">

</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap warp-inner">

		<div id="custom-bootstrap-menu" class="navbar fixed-top navbar-toggleable-md scrolling-navbar navbar-dark bg-primary" role="navigation">
		    <div class="container-fluid">
		        <div class="navbar-header">
<a class="navbar-brand" href="<?= Url::home()	?>">
		        	<img src="<?= $this->theme->getUrl('/img/logo.png') ?>" class="img-responsive" width="40px">
		        	</a>
		        	<a class="navbar-brand" href="<?= Url::home()	?>"> <?= \Yii::$app->name ?> </a>
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
		            </button>
		        </div>
		        <div class="collapse navbar-collapse navbar-menubuilder">
		            <ul class="nav navbar-nav navbar-left">
		                <li class="list-menu">
		                	<a href="<?= Url::home() ?>">Home</a>
		                </li>
		                
		                <li class="list-menu pull-right">
							<?php
							
							if (Yii::$app->user->isGuest) {
								echo Html::a ( 'Login', [ 
										'/site/login' 
								] );
							} else {
								echo Html::a('Logout', ['/site/logout'], [
										'data' => [
												'method' => 'post'
										]
								] );
							}
							?>
						</li>
						<?php  if (Yii::$app->user->isGuest) { ?>
						<li class="list-menu">
		                	<a href="<?= Url::toRoute(['site/signup']) ?>"> SignUp </a>
		                </li>						
						<?php } ?>
		            </ul>
		        </div>
		    </div>
		</div>

		<div class="container">
        <?=Breadcrumbs::widget ( [ 'links' => isset ( $this->params ['breadcrumbs'] ) ? $this->params ['breadcrumbs'] : [ ] ] )?>
        <?= $content ?>
    </div>
	</div>

	<footer class="footer bg-primary">
		<div class="container">
			<p class="pull-left">&copy; <?= \Yii::$app->name ?> <?= date('Y') ?></p>

			<p class="pull-right">Powered By: <?= \Yii::$app->name?></p>
		</div>
	</footer>

<?php $this->endBody() ?> 
</body>
</html>
<?php $this->endPage() ?>
