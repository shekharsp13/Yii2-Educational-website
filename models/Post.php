<?php
namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "tbl_posts".
 *
 * @property int $id
 * @property string $post
 * @property string $lattitude
 * @property string $longitude
 * @property int|null $likes_count
 * @property int|null $comments_count
 * @property string $created_at
 * @property string|null $updated_at
 * @property int $created_by_id
 */
class Post extends \yii\db\ActiveRecord
{

    /**
     *
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_posts';
    }

    /**
     *
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                [
                    'post',
                    'lattitude',
                    'longitude',
                    'created_by_id'
                ],
                'required'
            ],
            [
                [
                    'likes_count',
                    'comments_count',
                    'created_by_id'
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
                    'post',
                    'lattitude',
                    'longitude'
                ],
                'string',
                'max' => 255
            ]
        ];
    }

    /**
     *
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post' => 'Post',
            'lattitude' => 'Lattitude',
            'longitude' => 'Longitude',
            'likes_count' => 'Likes Count',
            'comments_count' => 'Comments Count',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by_id' => 'Created By ID'
        ];
    }
    
    public function getStatus(){
       $query= Post::find()->all();
       return $query;
    }
    
}
