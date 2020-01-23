<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();

echo "<?php\n";
?>

use yii\helpers\Html;
use <?= $generator->indexWidgetType === 'grid' ? "yii\\grid\\GridView" : "yii\\widgets\\ListView" ?>;
<?= $generator->enablePjax ? 'use yii\widgets\Pjax;' : '' ?>
use app\components\AGridView;
use app\components\APageHeader;

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index">
 <div class="panel panel-default">
	  	<div class="panel-body">
	  		<h3>Users</h3>
	  		<div class="pull-right">
	  		<?= '<?=' ?> APageHeader::widget([ ]); ?>
	  		</div>
		</div>
	</div>
<div class="panel">
	<div class="panel-body">
<?= $generator->enablePjax ? '<?php Pjax::begin(); ?>' : '' ?>
<?php if ($generator->indexWidgetType === 'grid'): ?>
    <?= "<?= " ?>AGridView::widget([
        'dataProvider' => $dataProvider,
        <?= !empty($generator->searchModelClass) ? "'filterModel' => \$searchModel,\n        'columns' => [\n" : "'columns' => [\n"; ?>
            ['class' => 'yii\grid\SerialColumn'],
            ['class' => 'app\components\ACheckboxColumn'],

<?php
$count = 0;
if (($tableSchema = $generator->getTableSchema()) === false) {
    foreach ($generator->getColumnNames() as $name) {
        if (++$count < 6) {
            echo "            '" . $name . "',\n";
        } else {
            echo "            // '" . $name . "',\n";
        }
    }
} else {
    foreach ($tableSchema->columns as $column) {
        $format = $generator->generateColumnFormat($column);        
        //if (++$count < 6) {
        	if( $column->name == 'created_by' ) {
        		echo	'[
	        				"attribute" => 	"'.$column->name.'",
	        				"value" => function ($model) {
	        					return isset($model->createdBy) ? $model->createdBy->fullName($model->created_by) : "Not Set";
	        				}
        				 ],'."\n";
        	} elseif ( $column->name == 'state_id' ) {
        		echo	'[
		        			"attribute" => 	"'.$column->name.'",
			        		"format" => "raw",
			        		"value" => function ($model) {
			        			return $model->statebadges();
			        		}
        				],'."\n";
        	} else {
        		echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
        	}
//         } else {
//             echo "            // '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
//         }
    }
}
?>

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php else: ?>
    <?= "<?= " ?>ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model-><?= $nameAttribute ?>), ['view', <?= $urlParams ?>]);
        },
    ]) ?>
<?php endif; ?>
<?= $generator->enablePjax ? '<?php Pjax::end(); ?>' : '' ?>
</div></div></div>
