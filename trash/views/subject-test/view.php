<?php

use yii\helpers\Html;
use app\components\ADetailView;
use app\components\APageHeader;

/* @var $this yii\web\View */
/* @var $model app\models\SubjectTest */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subject Tests'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-test-view">

    <div class="panel panel-default">
	  	<div class="panel-body">
	  		<div class="pull-right">
	  			<?= APageHeader::widget(['model' =>$model ]); ?>
	  		</div>
		</div>
	</div>
<div class="panel panel-default">
  <div class="panel-body">
    <?= ADetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
        		[
        				"attribute" => 	"sub_id",
        				"value" => isset($model->sub) ? $model->sub->title : "Not Set",
    			],	
[
        				"attribute" => "state_id",
        				"value" => isset($model->createdBy) ? $model->createdBy->fullName($model->created_by): "Not Set"
    			  ],
            'created_at',
            'updated_at',
[
        				"attribute" => "created_by",
        				"format" => "raw",
        				"value" => $model->statebadges()
    			  ],
        		'description:ntext',
        		],
    ]) ?>
</div></div>
</div>
