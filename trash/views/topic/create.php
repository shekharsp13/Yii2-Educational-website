<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Topic */

$this->title = Yii::t('app', 'Create Topic');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Topics'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topic-create">
<div class="panel">
	<div class="panel-body">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div></div>