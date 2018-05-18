<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "scores".
 *
 * @property int $id
 * @property int $services_id
 * @property int $score del 1 al 5
 * @property string $comments
 * @property string $date
 *
 * @property Services $services
 */
class Scores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'scores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['services_id', 'score', 'date'], 'required'],
            [['services_id', 'score'], 'integer'],
            [['date'], 'safe'],
            [['comments'], 'string', 'max' => 100],
            [['services_id'], 'exist', 'skipOnError' => true, 'targetClass' => Services::className(), 'targetAttribute' => ['services_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'services_id' => 'Services ID',
            'score' => 'Score',
            'comments' => 'Comments',
            'date' => 'Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasOne(Services::className(), ['id' => 'services_id']);
    }
}
