<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\models\Post;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\base\InvalidRouteException;
use yii\base\UserException;
use PHPUnit\Framework\Constraint\Exception;
use yii\web\NotFoundHttpException;


class PostController extends \yii\web\Controller
{
    
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className (),
                'rules' => [
                    [
                        'actions' => [
                            
                            'index',
                            'create',
                            'trace'
                            
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
    
    
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionCreate(){
        
        $model= new Post();
     
        if($model->load(Yii::$app->request->post()))
        {       
            
            $model->lattitude='45.4545';
            $model->longitude='75.7575';
            //             $model->likes_count=0;
            //             $model->comments_count=0;
            $model->created_by_id=Yii::$app->user->identity['id'];
            if($model->save()){
                return $this->redirect([
                    'user/timeline'
                ]);
            }else {
                throw new NotFoundHttpException();
            }
            
        }else{
            throw new NotFoundHttpException();
        }
    }
      
}
