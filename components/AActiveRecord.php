<?php
namespace app\components;

use Yii;
use app\models\User;


class AActiveRecord extends \yii\db\ActiveRecord {
	public function beforeValidate() {
		return parent::beforeValidate();
	}
}