<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data".
 *
 * @property int $user_id
 * @property int $markers_id
 * @property string $name
 * @property string $ap Apellido Paterno
 * @property string $am Apallido Materno
 * @property int $phone
 * @property int $cellphone
 *
 * @property Markers $markers
 * @property Users $user
 */
class Data extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'markers_id', 'name', 'ap', 'am', 'phone', 'cellphone'], 'required'],
            [['user_id', 'markers_id', 'phone', 'cellphone'], 'integer'],
            [['name', 'ap', 'am'], 'string', 'max' => 80],
            [['user_id', 'markers_id'], 'unique', 'targetAttribute' => ['user_id', 'markers_id']],
            [['markers_id'], 'exist', 'skipOnError' => true, 'targetClass' => Markers::className(), 'targetAttribute' => ['markers_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'markers_id' => 'Markers ID',
            'name' => 'Name',
            'ap' => 'Ap',
            'am' => 'Am',
            'phone' => 'Phone',
            'cellphone' => 'Cellphone',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarkers()
    {
        return $this->hasOne(Markers::className(), ['id' => 'markers_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }
}
