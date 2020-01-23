<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();

echo "<?php\n";
?>

use yii\helpers\Html;
use app\components\ADetailView;
use app\components\APageHeader;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$this->title = $model-><?= $generator->getNameAttribute() ?>;
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-view">

    <div class="panel panel-default">
	  	<div class="panel-body">
	  		<div class="pull-right">
	  			<?= '<?=' ?> APageHeader::widget(['model' =>$model ]); ?>
	  		</div>
		</div>
	</div>
<div class="panel panel-default">
  <div class="panel-body">
    <?= "<?= " ?>ADetailView::widget([
        'model' => $model,
        'attributes' => [
<?php
if (($tableSchema = $generator->getTableSchema()) === false) {
    foreach ($generator->getColumnNames() as $name) {
        echo "            '" . $name . "',\n";
    }
} else {
    foreach ($generator->getTableSchema()->columns as $column) {
        $format = $generator->generateColumnFormat($column);
        if( $column->name == 'created_by' ) {
        	echo '[
        				"attribute" => "'.$column->name.'",
        				"format" => "raw",
        				"value" => $model->statebadges()
    			  ],'."\n";
        } else if( $column->name == 'state_id' ) {
        	echo '[
        				"attribute" => "'.$column->name.'",
        				"value" => isset($model->createdBy) ? $model->createdBy->fullName($model->created_by): "Not Set"
    			  ],'."\n";
        } else {
        	echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
        }
    }
}
?>
        ],
    ]) ?>
</div></div>
</div>
