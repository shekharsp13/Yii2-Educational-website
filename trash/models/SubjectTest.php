<?php

namespace app\models;

use Yii;
use app\components\AActiveRecord;

/**
 * This is the model class for table "{{%subject_test}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $sub_id
 * @property integer $state_id
 * @property integer $type_id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 *
 * @property User $createdBy
 * @property Subject $sub
 */
class SubjectTest extends AActiveRecord {
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
		$val = isset ( $list [$this->state_id] ) ? $list [$this->state_id] : 'danger';
		$html = '<small class="label label-' . $val . '">' . $this->states () . '</small>';
		
		return $html;
	}
	public function scenarios() {
		$scenarios = parent::scenarios ();
		
		return $scenarios;
	}
	public function beforeValidate() {
		return parent::beforeDelete ();
	}
	public function beforeDelete() {
	}
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return '{{%subject_test}}';
	}
	
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [ 
				[ 
						[ 
								'title',
								'sub_id',
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
								'sub_id',
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
				],
				[ 
						[ 
								'sub_id' 
						],
						'exist',
						'skipOnError' => true,
						'targetClass' => Subject::className (),
						'targetAttribute' => [ 
								'sub_id' => 'id' 
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
				'sub_id' => Yii::t ( 'app', 'Subject' ),
				'state_id' => Yii::t ( 'app', 'State' ),
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
	public function getSub() {
		return $this->hasOne ( Subject::className (), [ 
				'id' => 'sub_id' 
		] );
	}
}