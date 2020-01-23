<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\User;
use app\components\AController;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class DashboardController extends AController {
	
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
												'index'
										],
										'allow' => true,
										'roles' => [
												'@'
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
	
	public function actionIndex() {
		if( User::isAdmin() ) {
			return $this->render( '/site/admin-panel' );
		} elseif ( User::isManager() ) {
			return $this->render( '/site/manager-panel' );
		} elseif ( User::isEditor() ) {
			return $this->render( '/site/editor-panel' );
		} elseif ( User::isSchool() ) {
			return $this->render( '/site/school-panel' );
		} elseif ( User::isTeacher() ) {
			return $this->render( '/site/techer-panel' );
		} elseif ( User::isUser() ) {
			return $this->render( '/site/user-panel' );
		} 
		return $this->redirect(['site/index']);
	}
	
}