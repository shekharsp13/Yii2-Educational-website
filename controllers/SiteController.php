<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\User;
use app\components\AController;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends AController{
	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className (),
						'only' => [ 
								'logout' 
						],
						'rules' => [ 
								[ 
										'actions' => [ 
												'logout' 
										],
										'allow' => true,
										'roles' => [ 
												'@' 
										] 
								],
								[
										'actions' => [
												'admin'
										],
										'allow' => true,
										'roles' => [
												'*',
												'?'
										]
								]
						] 
				],
				'verbs' => [ 
						'class' => VerbFilter::className (),
						'actions' => [ 
								'logout' => [ 
										'post' 
								] 
						] 
				] 
		];
	}
	
	/**
	 * @inheritdoc
	 */
	public function actions() {
		return [ 
				'error' => [ 
						'class' => 'yii\web\ErrorAction' 
				],
				'captcha' => [ 
						'class' => 'yii\captcha\CaptchaAction',
						'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null 
				] 
		];
	}
	
	/**
	 * Displays homepage.
	 *
	 * @return string
	 */
	public function actionIndex() {

		
		
		$user = User::find()->count();
		if( empty($user) ) {
			$this->layout = 'registration';
			$model = new User( [
					'scenario' => 'admin'
			] );
			$this->seoParams = [
					'title' => 'Admin Sign up',
					'description' => 'Sign up',
			];
			return $this->render('admin', [
					'model' => $model
			]);
		} else {
			if( User::isAdmin() ) {
				return $this->render( '/site/admin-panel' );
			} elseif ( User::isManager() ) {
				return $this->render( '/site/manager-panel' );
			} elseif ( User::isEditor() ) {
				return $this->render( '/site/editor-panel' );
			} elseif ( User::isGroup() ) {
				return $this->render( '/site/school-panel' );
			} elseif ( User::isTeacher() ) {
				return $this->render( '/site/techer-panel' );
			} elseif ( User::isUser() ) {
				return $this->render( '/site/user-panel' );
			}
		}
		return $this->render ( 'index' );
	}
	
	public function actionAdmin() {
		$model = new User( [
				'scenario' => 'admin'
		] );
		
		$user = User::find()->count();
		if( empty($user) ) { 
			
			if( $model->load(\Yii::$app->request->post( ) ) ) {
				$model->role_id = User::ROLE_ADMIN;
				$model->setPassword($model->password);
				if( $model->save() ) {
					return $this->redirect(['site/dashboard']);
				}
			}
			
			return $this->render('admin', [
					'model' => $model
			]);
			
		}
		return $this->redirect ( ['dashboard/index'] );
	}
	
	/**
	 * Login action.
	 *
	 * @return string
	 */
	public function actionLogin() {
		if (! Yii::$app->user->isGuest) {
			return $this->goHome ();
		}
		
		$model = new LoginForm ();
		if ($model->load ( Yii::$app->request->post () ) && $model->login ()) {
			$user = \Yii::$app->user->identity;
			$user->scenario = 'since-login';
			$user->login= date('Y-m-d h:i:s');
			$user->save();
			return $this->redirect(['/dashboard/index']);
		}
		return $this->render ( 'login', [ 
				'model' => $model 
		] );
	}
	
	/**
	 * Logout action.
	 *
	 * @return string
	 */
	public function actionLogout() {
		Yii::$app->user->logout ();
		
		return $this->goHome ();
	}
	
	/**
	 * Displays contact page.
	 *
	 * @return string
	 */
	public function actionContact() {
		$model = new ContactForm ();
		if ($model->load ( Yii::$app->request->post () ) && $model->contact ( Yii::$app->params ['adminEmail'] )) {
			Yii::$app->session->setFlash ( 'contactFormSubmitted' );
			
			return $this->refresh ();
		}
		return $this->render ( 'contact', [ 
				'model' => $model 
		] );
	}
	
	/**
	 * Displays about page.
	 *
	 * @return string
	 */
	public function actionAbout() {
		return $this->render ( 'about' );
	}
}
