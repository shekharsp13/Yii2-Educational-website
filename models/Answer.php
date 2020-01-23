<?php

namespace app\models;

use Yii;
use app\components\AActiveRecord;
/**
 * This is the model class for table "{{%answer}}".
 *
 * @property integer $id
 * @property integer $que_id
 * @property string $option1
 * @property string $option2
 * @property string $option3
 * @property string $option4
 * @property string $option5
 * @property string $ans
 * @property integer $ans_opt
 * @property integer $state_id
 * @property integer $type_id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 *
 * @property User $createdBy
 */
class Answer extends AActiveRecord
{
	const STATUS_DRAFT = 0;
	const STATUS_REMOVE = 1;
	const STATUS_PUBLISHED = 2;
	
	public function stateOptions() {
		return [
				self::STATUS_DRAFT => 'Draft',
				self::STATUS_PUBLISHED=> 'Published',
		];
	}
	
	public function states() {
		$list = $this->stateOptions();
		
		return isset($list[$this->state_id]) ? $list[$this->state_id] : 'Not Set';
	}
	
	public function statebadges() {
		$list = [
				self::STATUS_DRAFT => 'warning',
				self::STATUS_PUBLISHED => 'success' 
		];
		$val = isset($list[$this->state_id]) ? $list[$this->state_id] : 'danger';
		$html = '<small class="label label-'.$val.'">'.$this->states().'</small>';
		
		return $html;
	}
	
	public function scenarios() {
		$scenarios = parent::scenarios();
		
		return $scenarios;
	}
	
	public function beforeValidate() {
		return parent::beforeDelete();
	} 
	public function beforeDelete() {
	}
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%answer}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['que_id', 'option1', 'option2', 'option3', 'option4', 'ans', 'ans_opt', 'created_at', 'created_by'], 'required'],
            [['que_id', 'ans_opt', 'state_id', 'type_id', 'created_by'], 'integer'],
            [['option1', 'option2', 'option3', 'option4', 'option5', 'ans'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'que_id' => Yii::t('app', 'Que ID'),
            'option1' => Yii::t('app', 'Option1'),
            'option2' => Yii::t('app', 'Option2'),
            'option3' => Yii::t('app', 'Option3'),
            'option4' => Yii::t('app', 'Option4'),
            'option5' => Yii::t('app', 'Option5'),
            'ans' => Yii::t('app', 'Ans'),
            'ans_opt' => Yii::t('app', 'Ans Opt'),
            'state_id' => Yii::t('app', 'State ID'),
            'type_id' => Yii::t('app', 'Type ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
}