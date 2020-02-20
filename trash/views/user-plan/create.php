<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserPlan */

$this->title = Yii::t('app', 'Create User Plan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Plans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-plan-create">
<div class="panel">
	<div class="panel-body">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div></div>