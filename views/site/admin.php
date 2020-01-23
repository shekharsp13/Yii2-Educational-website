<?php
use app\components\AActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="row margin-top">

	<div class="col-md-4 col-md-offset-4">
	<div>
		<p class="bg-warning text-center"> Admin Sign Form </p>
	</div>
		<?php $form = AActiveForm::begin([
				'action' => Url::toRoute(['/site/admin'])
		]) ?>
		
		<?= $form->field($model, 'first_name')->textInput(['placeholder' => 'Please Enter First Name']); ?>
		
		<?= $form->field($model, 'last_name')->textInput(['placeholder' => 'Please Enter Last Name']); ?>
		
		<?= $form->field($model, 'email')->textInput(['placeholder' => 'Please Enter Email']); ?>
		
		<?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Please Enter Password']); ?>
		
		<?= $form->field($model, 'confirm_password')->passwordInput(['placeholder' => 'Please Re-Enter Password']); ?>
		
		<?= Html::submitButton('Submit', ['class'=> 'btn btn-success']); ?>
		
		<?php AActiveForm::end();?>
	</div>


</div>