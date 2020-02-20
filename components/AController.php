<?php
namespace app\components;

use Yii;
use Yii\web\Controller;
use app\models\User;

class AController extends \yii\web\Controller {
	public $seoParams = [];
	public $pageTitle = 'ToddlerPanda';
	public $metaDescription = 'Social Media for Your Neighbourhood';
	public $metaKeywords= 'Social Media, Neighbourhood, Local, Dating, Nearby';
	
	public function beforeAction($action) {
		$this->layout = 'guest-main';
// 		if( User::isAdmin() ) {
// 			$this->layout = 'main';
// 		} elseif ( User::isUser() ) {
// 			$this->layout = 'user-main';
// 		}
		
		if( \Yii::$app->controller->id == 'site' && \Yii::$app->controller->action->id == 'logout' ) {
			$user = \Yii::$app->user->identity;
			$user->scenario = 'last-login';
			$user->last_login= date('Y-m-d h:i:s');
			$user->save();
		}
		return parent::beforeAction($action);	
	}
	
	public function renderSeo($params=[]) {
		
		if( array_key_exists('title', $this->seoParams ) ) {
			\Yii::$app->view->title= $this->seoParams['title'];
		} else {
			\Yii::$app->view->title = array_key_exists( 'model', $params ) && isset( $params->title ) ? $params->title . ' | ' . \Yii::$app->name : \Yii::$app->controller->action->id . ' | ' . \Yii::$app->name;
		}
		
		\Yii::$app->view->registerMetaTag ( [
				'name' => 'description',
				'content' => array_key_exists('description', $this->seoParams ) ? $this->seoParams['description'] : $this->metaDescription,
		] );
		
		\Yii::$app->view->registerMetaTag ( [
				'name' => 'keywords',
				'content' => array_key_exists('keywords', $this->seoParams ) ? $this->seoParams['keywords'] : $this->metaKeywords,
		] );
	}
	
	public function render($view, $params=[]) {
		$this->renderSeo($params);
		return parent::render($view, $params);
	}
	
}
