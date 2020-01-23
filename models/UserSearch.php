<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
 * UserSearch represents the model behind the search form about `app\models\User`.
 */
class UserSearch extends User {
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [ 
				[ 
						[ 
								'email',
								'username',
								'contact_no',
								'dob',
								'image_file',
								'login',
								'last_login',
								'created_at',
								'updated_at' 
						],
						'safe' 
				] 
		];
	}
	
	/**
	 * @inheritdoc
	 */
	public function scenarios() {
		// bypass scenarios() implementation in the parent class
		return Model::scenarios ();
	}
	
	/**
	 * Creates data provider instance with search query applied
	 *
	 * @param array $params        	
	 *
	 * @return ActiveDataProvider
	 */
	public function search($params, $role=null) {
		$query = User::find ()->where(['!=', 'role_id', self::ROLE_ADMIN]);
		
		if( $role == self::ROLE_EDITOR ) {
			$query = $query->andWhere(['role_id' => self::ROLE_EDITOR]);
		} elseif ( $role == self::ROLE_GROUP ) {
			$query = $query->andWhere(['role_id' => self::ROLE_GROUP]);
		} elseif ( $role == self::ROLE_MANAGER ) {
			$query = $query->andWhere(['role_id' => self::ROLE_MANAGER]);
		} elseif ( $role == self::ROLE_SUB_ADMIN ) {
			$query = $query->andWhere(['role_id' => self::ROLE_SUB_ADMIN]);
		} elseif ( $role == self::ROLE_USER ) {
			$query = $query->andWhere(['role_id' => self::ROLE_USER]);
		} elseif ( $role == self::ROLE_TEACHER ) {
			$query = $query->andWhere(['role_id' => self::ROLE_TEACHER]);
		}
		
		// add conditions that should always apply here
		
		$dataProvider = new ActiveDataProvider ( [ 
				'query' => $query 
		] );
		
		$this->load ( $params );
		
		if (! $this->validate ()) {
			// uncomment the following line if you do not want to return any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}
		
		$query->andFilterWhere ( [ 
				'like',
				'email',
				$this->email 
		] )->andFilterWhere ( [ 
				'like',
				'username',
				$this->username 
		] )->andFilterWhere ( [ 
				'like',
				'contact_no',
				$this->contact_no 
		] );
		
		return $dataProvider;
	}
}
