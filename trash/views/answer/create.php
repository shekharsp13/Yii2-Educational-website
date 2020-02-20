<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Answer */

$this->title = Yii::t('app', 'Create Answer');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Answers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="answer-create">
<div class="panel">
	<div class="panel-body">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div></div>