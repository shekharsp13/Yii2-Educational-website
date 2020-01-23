<?php

use yii\helpers\Html;
use app\components\AActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Subject;

/* @var $this yii\web\View */
/* @var $model app\models\Topic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="topic-form">

    <?php $form = AActiveForm::begin(); ?>

 	<?= $form->field($model, 'sub_id')->dropDownList(ArrayHelper::map(Subject::find()->all(), 'id', 'title'), ['prompt' => 'Choose Subject']) ?>
 
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'state_id')->dropDownList($model->stateOptions()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php AActiveForm::end(); ?>

</div>
