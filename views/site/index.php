<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

AppAsset::register ( $this );
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="zxx">
  
<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- For Search Engine Meta Data  -->
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="ToddlerPanda.com" />
	
  <title>Toddler : Login-02</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/icon" href="<?= $this->theme->getUrl('/toddlerassets/images/favicon-16x16.html')?>"/>
   
  <!-- Main structure css file -->
  <link  rel="stylesheet" href="<?= $this->theme->getUrl('/toddlerassets/css/login2-style.css')?>">
  
  
 
  </head>
  
  <body>
    <!-- Start Preloader -->
    <div id="preload-block">
      <div class="square-block"></div>
    </div>
    <!-- Preloader End -->
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-5 col-lg-4 authfy-panel-left">
          <!-- brand-logo start -->
          <div class="brand-logo text-center">
            <img src="<?= $this->theme->getUrl('/toddlerassets/images/brand-logo.png')?>" width="150" alt="brand-logo">
          </div><!-- ./brand-logo -->
          <!-- authfy-login start -->
          <div class="authfy-login">
            <!-- panel-login start -->
            
            <!-- panel-signup start -->
            <div class="authfy-panel panel-signup text-center active">
              <div class="row">
                <div class="col-xs-12 col-sm-12">
                  <div class="authfy-heading">
                    <h3 class="auth-title">Sign up for free!</h3>
                  </div>
<!--                   < form name="signupForm" class="signupForm" action="#" method="POST"> -->
                  <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "<div class=\"col-xs-12 col-sm-12\">{input}</div>\n<div class=\"col-xs-12 col-sm-12\"></div>",
        ],
        
    ]); ?>
                    <div class="form-group">
                    <?= $form->field($model, 'email')->textInput(['autofocus' => true])->input('email', ['placeholder' =>"Enter Your Email"])->label(false) ?>
<!--                       <input type="email" class="form-control" name="username" placeholder="Email address"> -->
                    </div>
                    <div class="form-group">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true])->input('username', ['placeholder' =>"Enter Your Username"])->label(false) ?>
<!--                       <input type="text" class="form-control" name="fullname" placeholder="Full name"> -->
                    </div>
                    <div class="form-group">
                      <div class="pwdMask">
                      <?= $form->field($model, 'password')->passwordInput()->input('password', ['placeholder' =>"Enter Your Password"])->label(false) ?>
<!--                         <input  type="password" class="form-control" name="password" placeholder="Password"> -->
<!--                         <span class="fa fa-eye-slash pwd-toggle"></span> -->
                      </div>
                    </div>
                    <div class="form-group">
                      <p class="term-policy text-muted small">I agree to the <a href="#">privacy policy</a> and <a href="#">terms of service</a>.</p>
                    </div>
                    <div class="form-group">
                    <?= Html::submitButton('Sign up with email', ['class' => 'btn btn-lg btn-primary btn-block', 'name' => 'login-button']) ?>
<!--                       <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up with email</button> -->
                    </div>
<!--                   </form> -->
<?php ActiveForm::end(); ?>
                  <a class="lnk-toggler" data-panel=".panel-login" href="#">Already have an account?</a>
                </div>
              </div>
            </div> <!-- ./panel-signup -->
            
          </div> <!-- ./authfy-login -->
        </div> <!-- ./authfy-panel-left -->
        <div class="col-md-7 col-lg-8 authfy-panel-right hidden-xs hidden-sm">
          <div class="hero-heading">
            <div class="headline">
              <h3>Welcome to ToddlerPanda</h3>
              <p>Know Your Neighbourhood.<br>
                 Explore things Around You.<br>
                 Chat with Local People. </p>
            </div>
          </div>
          
        </div>
      </div> <!-- ./row -->
    </div> <!-- ./container -->
    
    <!-- Javascript Files -->

    <!-- initialize jQuery Library -->
    <script src="<?= $this->theme->getUrl('/toddlerassets/js/jquery-2.2.4.min.js')?>"></script>
  
    <!-- for Bootstrap js -->
    <script src="<?= $this->theme->getUrl('/toddlerassets/js/bootstrap.min.js')?>"></script>
  
    <!-- Custom js-->
    <script src="<?= $this->theme->getUrl('/toddlerassets/js/custom.js')?>"></script>
  
  </body>	
</html>
