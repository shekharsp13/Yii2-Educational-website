<?php

use yii\helpers\Html;
use app\components\ADetailView;
use app\components\APageHeader;

/* @var $this yii\web\View */
/* @var $model app\models\Answer */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Answers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="answer-view">

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
            'que_id',
            'option1:ntext',
            'option2:ntext',
            'option3:ntext',
            'option4:ntext',
            'option5:ntext',
            'ans:ntext',
            'ans_opt',
[
        				"attribute" => "state_id",
        				"value" => isset($model->createdBy) ? $model->createdBy->fullName($model->created_by): "Not Set"
    			  ],\n            'type_id',
            'created_at',
            'updated_at',
[
        				"attribute" => "created_by",
        				"format" => "raw",
        				"value" => $model->statebadges()
    			  ],\n"        ],
    ]) ?>
</div></div>
</div>
