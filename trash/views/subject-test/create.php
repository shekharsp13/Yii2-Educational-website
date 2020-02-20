<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SubjectTest */

$this->title = Yii::t('app', 'Create Subject Test');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subject Tests'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-test-create">
<div class="panel">
	<div class="panel-body">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div></div>