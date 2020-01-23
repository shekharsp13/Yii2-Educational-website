<?php

namespace app\models;

use Yii;
use app\components\AActiveRecord;
use yii\web\IdentityInterface;
/**
 * This is the model class for table "{{%tbl_user}}".
 *
 * @property integer $id
 * @property string $full_name
 * @property string $email
 * @property string $username
 * @property string $contact_no
 * @property integer $age
 * @property string $dob
 * @property string $image_file
 * @property string $address
 * @property string $auth_key
 * @property string $password
 * @property string $password_reset_token
 * @property string $last_login
 * @property integer $login_source
 * @property integer $state_id
 * @property integer $type_id
 * @property integer $role_id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 */
class User extends AActiveRecord implements IdentityInterface {
	public $confirm_password;
	const ROLE_ADMIN = 0;
	const ROLE_SUB_ADMIN = 1;
	const ROLE_MANAGER = 2;
	const ROLE_EDITOR = 3;
	const ROLE_TEACHER = 4;
	const ROLE_GROUP = 5;
	const ROLE_USER = 6;
	
	const ROLE_ACTIVE = 1;
	const ROLE_INACTIVE = 0;
	
	public function getRoleOptions($id=null) {
		$list = [
				self::ROLE_ADMIN => 'Admin',
				self::ROLE_SUB_ADMIN => 'Sub Admin',
				self::ROLE_MANAGER => 'Manger',
				self::ROLE_EDITOR => 'Editor',
				self::ROLE_TEACHER => 'Teacher',
				self::ROLE_GROUP=> 'Group',
				self::ROLE_USER => 'User',
		];
		if( $id === null )
			return $list;
		return isset($list[$id]) ? $list[$id] : 'Not set';
	}
	
	public function getStateOptions($id=null) {
		$list = [
				self::ROLE_ACTIVE=> 'Active',
				self::ROLE_INACTIVE=> 'In Active',
		];
		if( $id === null )
			return $list;
		return isset($list[$id]) ? $list[$id] : 'Not set';
	}
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return '{{%user}}';
	}
	public function beforeSave($insert) {
		if (parent::beforeSave ( $insert )) {
			if (empty ( $this->created_at ))
				$this->created_at = date ( "Y-m-d h:i:s" );
			
				if (empty ( $this->created_by ) && isset(\yii::$app->user->identity) )
				$this->created_by = \yii::$app->user->id;
			
				$this->updated_at= date ( "Y-m-d h:i:s" );
			return true;
		} else {
			return false;
		}
	}
	
	public function fullName($id) {
		$user = self::findOne($id);
		
		if( $user ) {
			return $user->first_name.'  '.$user->last_name;
		}
		return 'Not Set';
	}
	
	public function scenarios() {
		$scenarios = parent::scenarios ();
		
		$scenarios ['forgot-password'] = [ 
				'email' 
		];
		$scenarios ['last-login'] = [
				'last_login'
		];
		$scenarios ['since-login'] = [
				'login'
		];
		$scenarios ['admin'] = [
				'email',
				'password',
				'first_name',
				'last_name',
				'confirm_password'
		];
		return $scenarios;
	}
	
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [ 
				[ 
						[ 
								'first_name',
								'email',
								'username',
								'auth_key',
								'password',
								'login_source',
								'created_at' 
						],
						'required' 
				],
				[
						'email',
						'unique'
				],
				[
						['last_login'],
						'required',
						'on' => 'last-login'
				],
				[
						['login'],
						'required',
						'on' => 'since-login'
				],
				[
						[
								'email',
								'password',
								'full_name',
								'confirm_password'
						],
						'required',
						'on' => 'admin'
				],
				[ 
						[ 
								'age',
								'login_source',
								'state_id',
								'type_id',
								'role_id',
								'created_by' 
						],
						'integer' 
				],
				[ 
						[ 
								'dob',
								'last_login',
								'created_at',
								'updated_at' 
						],
						'safe' 
				],
				[ 
						[ 
								'first_name',
								'last_name',
						],
						'string',
						'max' => 100 
				],
				[ 
						[ 
								'email',
								'username',
								'image_file',
								'address',
								'password',
								'password_reset_token' 
						],
						'string',
						'max' => 255 
				],
				[ 
						[ 
								'contact_no' 
						],
						'string',
						'max' => 125 
				],
				[ 
						[ 
								'auth_key' 
						],
						'string',
						'max' => 32 
				] 
		];
	}
	
	public function getCreateUser($id) {
		return self::findOne($id);
	}
	public static function isAdmin() {
		if (isset ( \Yii::$app->user->identity )) {
			if (\Yii::$app->user->identity->role_id == self::ROLE_ADMIN)
				return true;
			return false;
		}
		return false;
	}
	
	public static function isManager() {
		if (isset ( \Yii::$app->user->identity )) {
			if (\Yii::$app->user->identity->role_id == self::ROLE_MANAGER)
				return true;
			return false;
		}
		return false;
	}
	
	public static function isEditor() {
		if (isset ( \Yii::$app->user->identity )) {
			if (\Yii::$app->user->identity->role_id == self::ROLE_EDITOR)
				return true;
				return false;
		}
		return false;
	}
	
	public static function isTeacher() {
		if (isset ( \Yii::$app->user->identity )) {
			if (\Yii::$app->user->identity->role_id == self::ROLE_TEACHER)
				return true;
				return false;
		}
		return false;
	}
	public static function isGroup() {
		if (isset ( \Yii::$app->user->identity )) {
			if (\Yii::$app->user->identity->role_id == self::ROLE_GROUP)
				return true;
			return false;
		}
		return false;
	}
	public static function isUser() {
		if (isset ( \Yii::$app->user->identity )) {
			if (\Yii::$app->user->identity->role_id == self::ROLE_USER)
				return true;
			
			return false;
		}
		return false;
	}
	
	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [ 
				'id' => Yii::t ( 'app', 'ID' ),
				'first_name' => Yii::t ( 'app', 'First Name' ),
				'last_name' => Yii::t ( 'app', 'Last Name' ),
				'email' => Yii::t ( 'app', 'Email' ),
				'username' => Yii::t ( 'app', 'Username' ),
				'contact_no' => Yii::t ( 'app', 'Contact No' ),
				'age' => Yii::t ( 'app', 'Age' ),
				'dob' => Yii::t ( 'app', 'Dob' ),
				'image_file' => Yii::t ( 'app', 'Image File' ),
				'address' => Yii::t ( 'app', 'Address' ),
				'auth_key' => Yii::t ( 'app', 'Auth Key' ),
				'password' => Yii::t ( 'app', 'Password' ),
				'password_reset_token' => Yii::t ( 'app', 'Password Reset Token' ),
				'last_login' => Yii::t ( 'app', 'Last Login' ),
				'login_source' => Yii::t ( 'app', 'Login Source' ),
				'state_id' => Yii::t ( 'app', 'State' ),
				'type_id' => Yii::t ( 'app', 'Type' ),
				'role_id' => Yii::t ( 'app', 'Role' ),
				'created_at' => Yii::t ( 'app', 'Created Time' ),
				'updated_at' => Yii::t ( 'app', 'Updated Time' ),
				'created_by' => Yii::t ( 'app', 'Created By' ) 
		];
	}
	public static function findIdentity($id) {
		return static::findOne ( [ 
				'id' => $id 
		] );
	}
	public static function isAllowed() {
		if (! empty ( \yii::$app->user->identity )) {
			if (\yii::$app->user->identity->role_id == self::ROLE_ADMIN) {
				return true;
			}
		}
		return false;
	}
	/**
	 * @inheritdoc
	 */
	public static function findIdentityByAccessToken($token, $type = null) {
		throw new NotSupportedException ( '"findIdentityByAccessToken" is not implemented.' );
	}
	
	/**
	 * Finds user by username
	 *
	 * @param string $username        	
	 * @return static|null
	 */
	public static function findByUsername($username) {
		return static::findOne ( [ 
				'username' => $username 
		] );
	}
	public static function findByEmail($email) {
		return static::findOne ( [ 
				'email' => $email 
		] );
	}
	
	/**
	 * Finds user by password reset token
	 *
	 * @param string $token
	 *        	password reset token
	 * @return static|null
	 */
	public static function findByPasswordResetToken($token) {
		if (! static::isPasswordResetTokenValid ( $token )) {
			return null;
		}
		
		return static::findOne ( [ 
				'password_reset_token' => $token,
				'status' => self::STATUS_ACTIVE 
		] );
	}
	
	/**
	 * Finds out if password reset token is valid
	 *
	 * @param string $token
	 *        	password reset token
	 * @return bool
	 */
	public static function isPasswordResetTokenValid($token) {
		if (empty ( $token )) {
			return false;
		}
		
		$timestamp = ( int ) substr ( $token, strrpos ( $token, '_' ) + 1 );
		$expire = Yii::$app->params ['user.passwordResetTokenExpire'];
		return $timestamp + $expire >= time ();
	}
	
	/**
	 * @inheritdoc
	 */
	public function getId() {
		return $this->getPrimaryKey ();
	}
	
	/**
	 * @inheritdoc
	 */
	public function getAuthKey() {
		return $this->auth_key;
	}
	
	/**
	 * @inheritdoc
	 */
	public function validateAuthKey($authKey) {
		return $this->getAuthKey () === $authKey;
	}
	
	/**
	 * Validates password
	 *
	 * @param string $password
	 *        	password to validate
	 * @return bool if password provided is valid for current user
	 */
	public function validatePassword($password) {
		return Yii::$app->security->validatePassword ( $password, $this->password );
	}
	
	/**
	 * Generates password hash from password and sets it to the model
	 *
	 * @param string $password        	
	 */
	public function setPassword($password) {
		$this->password = Yii::$app->security->generatePasswordHash ( $password );
	}
	
	/**
	 * Generates "remember me" authentication key
	 */
	public function generateAuthKey() {
		$this->auth_key = Yii::$app->security->generateRandomString ();
	}
	
	/**
	 * Generates new password reset token
	 */
	public function generatePasswordResetToken() {
		$this->password_reset_token = Yii::$app->security->generateRandomString () . '_' . time ();
	}
	
	/**
	 * Removes password reset token
	 */
	public function removePasswordResetToken() {
		$this->password_reset_token = null;
	}
}
