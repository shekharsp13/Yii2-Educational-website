<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;use app\components\AGridView;
use app\components\APageHeader;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TopicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Topics');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topic-index">
 <div class="panel panel-default">
	  	<div class="panel-body">
	  		<h3>Users</h3>
	  		<div class="pull-right">
	  		<?= APageHeader::widget([ ]); ?>
	  		</div>
		</div>
	</div>
<div class="panel">
	<div class="panel-body">
<?php Pjax::begin(); ?>    <?= AGridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
        		[
        				'attribute' => 	'sub_id',
        				'value' => function ($model) {
        				return isset($model->sub) ? $model->sub->title : 'Not Set';
}
],
        		[
        				'attribute' => 'state_id',
        				'format' => 'raw',
        				'value' => function ($model) {
        					return $model->statebadges();
						}
				],
			[
				'attribute' => 	'created_by',
				'value' => function ($model) {
					return isset($model->createdBy) ? $model->createdBy->fullName($model->created_by) : 'Not Set';
				}	
			],
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div></div></div>
