<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 * @property int $status
 * @property string $role
 * @property int $id_pegawai
 * @property string $time_create
 * @property string $time_update
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        // return [
        //     [['username', 'password', 'authKey', 'accessToken', 'status', 'role', 'id_pegawai', 'time_create', 'time_update'], 'required'],
        //     [['status', 'id_pegawai'], 'integer'],
        //     [['time_create', 'time_update'], 'safe'],
        //     [['username', 'password', 'role'], 'string', 'max' => 60],
        //     [['authKey', 'accessToken'], 'string', 'max' => 100],
        // ];
        return [
            
            [['username', 'password'], 'required'],
            [['status', 'id_pegawai'], 'integer'],
            [['authKey', 'accessToken', 'role'], 'string', 'max' => 255],
            ['status', 'default', 'value' => 10], // Set status default ke 10
            ['authKey', 'default', 'value' => 'admin01'], // Set authKey default ke 'admin01'
            ['accessToken', 'default', 'value' => 'admin01'], // Set accessToken default ke 'admin01'
            ['role', 'default', 'value' => 'admin'], // Set role default ke 'admin'
            ['id_pegawai', 'default', 'value' => 1], // Set id_pegawai default ke 1
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => \yii\behaviors\TimestampBehavior::className(),
                'attributes' => [
                    \yii\db\BaseActiveRecord::EVENT_BEFORE_INSERT => 'time_create',
                    \yii\db\BaseActiveRecord::EVENT_BEFORE_UPDATE => 'time_update',
                ],
                'value' => new \yii\db\Expression('NOW()'),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'status' => 'Status',
            'role' => 'Role',
            'id_pegawai' => 'Id Pegawai',
            'time_create' => 'Time Create',
            'time_update' => 'Time Update',
        ];
    }
}
