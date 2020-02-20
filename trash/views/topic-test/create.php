<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TopicTest */

$this->title = Yii::t('app', 'Create Topic Test');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Topic Tests'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topic-test-create">
<div class="panel">
	<div class="panel-body">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div></div>