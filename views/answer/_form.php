<?php

use yii\helpers\Html;
use app\components\AActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Answer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="answer-form">

    <?php $form = AActiveForm::begin(); ?>

    <?= $form->field($model, 'que_id')->textInput() ?>

    <?= $form->field($model, 'option1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'option2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'option3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'option4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'option5')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ans')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ans_opt')->textInput() ?>

    <?= $form->field($model, 'state_id')->textInput() ?>

    <?= $form->field($model, 'type_id')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php AActiveForm::end(); ?>

</div>
