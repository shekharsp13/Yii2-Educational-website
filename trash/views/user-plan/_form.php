<?php

use yii\helpers\Html;
use app\components\AActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserPlan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-plan-form">

    <?php $form = AActiveForm::begin(); ?>

    <?= $form->field($model, 'coupen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'coupen_state')->textInput() ?>

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
