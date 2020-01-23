<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\components\AGridView;
use app\components\APageHeader;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <div class="panel panel-default">
	  	<div class="panel-body">
	  		<h3>Users</h3>
	  		<div class="pull-right">
	  			<?= APageHeader::widget([ ]); ?>
	  		</div>
		</div>
	</div>

<div class="panel panel-default">
	  	<div class="panel-body">
<?php Pjax::begin(); ?>    

<?= AGridView::widget( [
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'id' => 'btn',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
        	['class' => 'app\components\ACheckboxColumn'],
            'id',
            'first_name',
        	'last_name',
            'email:email',
            'username',
            'contact_no',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ] ); ?>
    
<?php Pjax::end(); ?></div>
</div>
</div>
