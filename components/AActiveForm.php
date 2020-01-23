<?php
namespace app\components;

use yii\widgets\ActiveForm;

class AActiveForm extends ActiveForm {
	public $options = [
			'encType' => 'form-data/multipart'
	];
}