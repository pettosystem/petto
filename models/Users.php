<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $created_at
 * @property int $updated_at
 * @property string $type
 * @property string $creation_date
 * @property int $active para verificar si esta activo
 * @property string $accessToken
 *
 * @property AdoptionRequests[] $adoptionRequests
 * @property Auth[] $auths
 * @property Data[] $datas
 * @property Markers[] $markers
 * @property Pets[] $pets
 * @property Services[] $services
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'created_at', 'updated_at', 'type', 'creation_date', 'active', 'accessToken'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['creation_date'], 'safe'],
            [['username'], 'string', 'max' => 100],
            [['auth_key', 'password_hash', 'password_reset_token', 'accessToken'], 'string', 'max' => 200],
            [['email'], 'string', 'max' => 80],
            [['type'], 'string', 'max' => 20],
            [['active'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'type' => 'Type',
            'creation_date' => 'Creation Date',
            'active' => 'Active',
            'accessToken' => 'Access Token',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdoptionRequests()
    {
        return $this->hasMany(AdoptionRequests::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuths()
    {
        return $this->hasMany(Auth::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatas()
    {
        return $this->hasMany(Data::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarkers()
    {
        return $this->hasMany(Markers::className(), ['id' => 'markers_id'])->viaTable('data', ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPets()
    {
        return $this->hasMany(Pets::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Services::className(), ['user_id' => 'id']);
    }
}
