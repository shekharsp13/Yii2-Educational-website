<?php

use yii\helpers\Html;
use app\components\ADetailView;
use app\components\APageHeader;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Blogs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-view">

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
            'description:ntext',
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
