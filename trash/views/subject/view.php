<?php

use yii\helpers\Html;
use app\components\ADetailView;
use app\components\APageHeader;

/* @var $this yii\web\View */
/* @var $model app\models\Subject */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subjects'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-view">

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
        				'attribute' => 'state_id',
        				'format' => 'raw',
        				'value' => $model->statebadges()
    			],
	            'created_at',
	            'updated_at',
        		[
        				'attribute' => 'created_by',
        				'value' => isset($model->createdBy) ? $model->createdBy->fullName($model->created_by): 'Not Set'
    			],
        		'description:ntext',
        ],
    ]) ?>
</div></div>
</div>
