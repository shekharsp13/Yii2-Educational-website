<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnswerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="answer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'que_id') ?>

    <?= $form->field($model, 'option1') ?>

    <?= $form->field($model, 'option2') ?>

    <?= $form->field($model, 'option3') ?>

    <?php // echo $form->field($model, 'option4') ?>

    <?php // echo $form->field($model, 'option5') ?>

    <?php // echo $form->field($model, 'ans') ?>

    <?php // echo $form->field($model, 'ans_opt') ?>

    <?php // echo $form->field($model, 'state_id') ?>

    <?php // echo $form->field($model, 'type_id') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
