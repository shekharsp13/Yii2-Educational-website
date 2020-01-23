<?php

use yii\helpers\Html;
use app\components\ADetailView;
use app\components\APageHeader;

/* @var $this yii\web\View */
/* @var $model app\models\Question */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Questions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="question-view">

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
            'model_type',
            'model_id',
            'title:ntext',
[
        				"attribute" => "state_id",
        				"value" => isset($model->createdBy) ? $model->createdBy->fullName($model->created_by): "Not Set"
    			  ],
        		'type_id',
            'created_at',
            'updated_at',
[
        				"attribute" => "created_by",
        				"format" => "raw",
        				"value" => $model->statebadges()
    			  ],
        		],
    ]) ?>
</div></div>
</div>
