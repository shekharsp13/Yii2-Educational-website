<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TopicTest */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Topic Test',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Topic Tests'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="topic-test-update">
<div class="panel">
	<div class="panel-body">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div></div>