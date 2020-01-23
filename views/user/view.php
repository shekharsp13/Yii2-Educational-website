<?php

use yii\helpers\Html;
use app\components\ADetailView;
use app\components\APageHeader;
use yii\base\Widget;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

<div class="panel panel-default">
  	<div class="panel-body">
  		<h3><?= $model->full_name ?></h3>
  		<div class="pull-right">
  			<?= APageHeader::widget(['model' =>$model ]); ?>
  		</div>
	</div>
</div>
    <span class="label label-primary">Primary</span>WWW
    
<div class="panel panel-default">
  <div class="panel-body">
	    <?= ADetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'full_name',
            'email:email',
            'username',
            'contact_no',
            'age',
            'dob',
            'address',
            'login',
            'last_login',
            'login_source',
        	[
        			'attribute' => 'state_id',
        			'value' => $model->getStateOptions($model->state_id)
        	],	
        	[
        			'attribute' => 'role_id',
        			'value' => $model->getRoleOptions($model->role_id)
	    	],	
            'create_time',
        	[
        			'attribute' => 'create_user_id',
        			'value' => !empty($model->getCreateUser($model->create_user_id)) ? $model->getCreateUser($model->create_user_id)->full_name : 'Not set'
	    	],	
        ],
    ]) ?>
	
	</div>
</div>

</div>
