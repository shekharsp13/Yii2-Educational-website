<?php

namespace app\models;

use Yii;
use app\components\AActiveRecord;

/**
 * This is the model class for table "{{%subject}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $state_id
 * @property integer $type_id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 *
 * @property User $createdBy
 * @property SubjectTest[] $subjectTests
 * @property Topic[] $topics
 * @property TopicTest[] $topicTests
 */
class Subject extends AActiveRecord {
	const STATUS_DRAFT = 0;
	const STATUS_REMOVE = 1;
	const STATUS_PUBLISHED = 2;
	public function stateOptions() {
		return [ 
				self::STATUS_DRAFT => 'Draft',
				self::STATUS_PUBLISHED => 'Published' 
		];
	}
	public function states() {
		$list = $this->stateOptions ();
		
		return isset ( $list [$this->state_id] ) ? $list [$this->state_id] : 'Not Set';
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
		$scenarios = parent::scenarios ();
		
		return $scenarios;
	}
	public function beforeValidate() {
		if ($this->isNewRecord) {
			if ($this->hasAttribute ( $this->created_at) && !isset( $this->created_at ) ) {
				$this->created_at = date ( 'Y-m-d h:i:s' );
			}
			if ($this->hasAttribute ( $this->updated_at ) && !isset( $this->updated_at) ) {
				$this->updated_at = date ( 'Y-m-d h:i:s' );
			}
			if ($this->hasAttribute ( $this->created_by) && !isset( $this->created_by)) {
				$this->created_by= \yii::$app->user->id;
			}
		} else {
			if ($this->hasAttribute ( $this->updated_at )) {
				$this->updated_at = date ( 'Y-m-d h:i:s' );
			}
		}
		return parent::beforeValidate();
	}
	public function beforeDelete() {
	}
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return '{{%subject}}';
	}
	
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [ 
				[ 
						[ 
								'title',
								'created_at',
								'created_by' 
						],
						'required' 
				],
				[ 
						[ 
								'description' 
						],
						'string' 
				],
				[ 
						[ 
								'state_id',
								'type_id',
								'created_by' 
						],
						'integer' 
				],
				[ 
						[ 
								'created_at',
								'updated_at' 
						],
						'safe' 
				],
				[ 
						[ 
								'title' 
						],
						'string',
						'max' => 256 
				],
				[ 
						[ 
								'created_by' 
						],
						'exist',
						'skipOnError' => true,
						'targetClass' => User::className (),
						'targetAttribute' => [ 
								'created_by' => 'id' 
						] 
				] 
		];
	}
	
	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [ 
				'id' => Yii::t ( 'app', 'ID' ),
				'title' => Yii::t ( 'app', 'Title' ),
				'description' => Yii::t ( 'app', 'Description' ),
				'state_id' => Yii::t ( 'app', 'Status' ),
				'type_id' => Yii::t ( 'app', 'Type' ),
				'created_at' => Yii::t ( 'app', 'Created At' ),
				'updated_at' => Yii::t ( 'app', 'Updated At' ),
				'created_by' => Yii::t ( 'app', 'Created By' ) 
		];
	}
	
	/**
	 *
	 * @return \yii\db\ActiveQuery
	 */
	public function getCreatedBy() {
		return $this->hasOne ( User::className (), [ 
				'id' => 'created_by' 
		] );
	}
	
	/**
	 *
	 * @return \yii\db\ActiveQuery
	 */
	public function getSubjectTests() {
		return $this->hasMany ( SubjectTest::className (), [ 
				'sub_id' => 'id' 
		] );
	}
	
	/**
	 *
	 * @return \yii\db\ActiveQuery
	 */
	public function getTopics() {
		return $this->hasMany ( Topic::className (), [ 
				'sub_id' => 'id' 
		] );
	}
	
	/**
	 *
	 * @return \yii\db\ActiveQuery
	 */
	public function getTopicTests() {
		return $this->hasMany ( TopicTest::className (), [ 
				'sub_id' => 'id' 
		] );
	}
}