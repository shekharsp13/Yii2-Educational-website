<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\models\UserSearch;
use app\components\AController;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;
use app\models\Post;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends AController {
	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [ 
				'access' => [
						'class' => AccessControl::className (),
						'rules' => [
								[
										'actions' => [
												'manager',
												'editor',
												'user',
												'index',
												'create',
												'bulk-delete',
												'view',
										         'timeline',
										    'profile',
										  
										],
										'allow' => true,
										'matchCallback' => function() {
											return User::isUser();
										}
								]
						]
				],
				'verbs' => [ 
						'class' => VerbFilter::className (),
						'actions' => [ 
								'delete' => [ 
										'POST' 
								],
								'bulk-delete' => [
										'POST'
								]
						] 
				] 
		];
	}
	
	/**
	 * Lists all User models.
	 * 
	 * @return mixed
	 */
	
	public function actionTimeline(){
	    $model= new Post();
	    $status=$model->getStatus();
	    
	    if(Yii::$app->user->isGuest == FALSE)
	    {
	        $this->layout = 'toddler-main';
	        return $this->render('timeline',[
	            'model'=>$model,
	            'status'=>$status,
	        ]);
	    }
	    
	}
	
	public function actionProfile(){
	    $this->layout = 'toddler-main';
	    return $this->render('profile');
	}
	
	public function actionIndex() {
		$searchModel = new UserSearch ();
		$dataProvider = $searchModel->search ( Yii::$app->request->queryParams );
		
		return $this->render ( 'index', [ 
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider 
		] );
	}
	
	public function actionManager() {
		$searchModel = new UserSearch ();
		$dataProvider = $searchModel->search ( Yii::$app->request->queryParams, User::ROLE_MANAGER );
		
		return $this->render ( 'index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider
		] );
	}
	
	public function actionEditor() {
		$searchModel = new UserSearch ();
		$dataProvider = $searchModel->search ( Yii::$app->request->queryParams, User::ROLE_EDITOR);
		
		return $this->render ( 'index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider
		] );
	}
	
	public function actionUser() {
		$searchModel = new UserSearch ();
		$dataProvider = $searchModel->search ( Yii::$app->request->queryParams, User::ROLE_USER );
		
		return $this->render ( 'index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider
		] );
	}
	
	/**
	 * Displays a single User model.
	 * 
	 * @param integer $id        	
	 * @return mixed
	 */
	public function actionView($id) {
		return $this->render ( 'view', [ 
				'model' => $this->findModel ( $id ) 
		] );
	}
	
	/**
	 * Creates a new User model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * 
	 * @return mixed
	 */
	public function actionCreate() {
		$model = new User ();
		
		if ($model->load ( Yii::$app->request->post () ) && $model->save ()) {
			return $this->redirect ( [ 
					'view',
					'id' => $model->id 
			] );
		} else {
			return $this->render ( 'create', [ 
					'model' => $model 
			] );
		}
	}
	
	/**
	 * Updates an existing User model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * 
	 * @param integer $id        	
	 * @return mixed
	 */
	public function actionUpdate($id) {
		$model = $this->findModel ( $id );
		
		if ($model->load ( Yii::$app->request->post () ) && $model->save ()) {
			return $this->redirect ( [ 
					'view',
					'id' => $model->id 
			] );
		} else {
			return $this->render ( 'update', [ 
					'model' => $model 
			] );
		}
	}
	
	/**
	 * Deletes an existing User model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * 
	 * @param integer $id        	
	 * @return mixed
	 */
	public function actionDelete($id) {
		$this->findModel ( $id )->delete ();
		
		return $this->redirect ( [ 
				'index' 
		] );
	}
	
	public function actionBulkDelete() {
		\Yii::$app->response->format = 'json';
		$response = [
				'status' => STATUS_NOK
		];
		$data = \Yii::$app->request->post('data', 'no data');
		if( is_array($data) ) {
			foreach ( $data as $id ) {
				$model = $this->findModel($id);
				//$model->delete();
			}
			$response['status'] = STATUS_OK;
		}
		return $response;
	}
	
	/**
	 * Finds the User model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * 
	 * @param integer $id        	
	 * @return User the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id) {
		if (($model = User::findOne ( $id )) !== null) {
			
			return $model;
		} else {
			throw new NotFoundHttpException ( 'The requested page does not exist.' );
		}
	}
}
