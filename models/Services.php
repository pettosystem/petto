<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property int $user_id
 * @property int $markers_id
 * @property string $name
 * @property string $type
 * @property string $description
 *
 * @property Scores[] $scores
 * @property Users $user
 * @property Markers $markers
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'markers_id', 'name', 'type', 'description'], 'required'],
            [['user_id', 'markers_id'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['type'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 200],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['markers_id'], 'exist', 'skipOnError' => true, 'targetClass' => Markers::className(), 'targetAttribute' => ['markers_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'markers_id' => 'Markers ID',
            'name' => 'Name',
            'type' => 'Type',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScores()
    {
        return $this->hasMany(Scores::className(), ['services_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarkers()
    {
        return $this->hasOne(Markers::className(), ['id' => 'markers_id']);
    }
}
