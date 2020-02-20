<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SubjectTest */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Subject Test',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subject Tests'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="subject-test-update">
<div class="panel">
	<div class="panel-body">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div></div>