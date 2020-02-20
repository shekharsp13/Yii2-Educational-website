<?php

namespace app\models;

use Yii;
use app\components\AActiveRecord;
/**
 * This is the model class for table "{{%user_plan}}".
 *
 * @property integer $id
 * @property string $coupen
 * @property integer $coupen_state
 * @property integer $state_id
 * @property integer $type_id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 *
 * @property User $createdBy
 */
class UserPlan extends AActiveRecord
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
        return '{{%user_plan}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['coupen_state', 'state_id', 'type_id', 'created_by'], 'integer'],
            [['created_at', 'created_by'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['coupen'], 'string', 'max' => 256],
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
            'coupen' => Yii::t('app', 'Coupen'),
            'coupen_state' => Yii::t('app', 'Coupen State'),
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