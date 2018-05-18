<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adoption_requests".
 *
 * @property int $id
 * @property int $pet_id
 * @property int $user_id
 * @property string $date
 * @property string $status done, draft
 *
 * @property Pets $pet
 * @property Users $user
 * @property BankQuestionsAnswers[] $bankQuestionsAnswers
 */
class AdoptionRequests extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adoption_requests';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pet_id', 'user_id', 'date', 'status'], 'required'],
            [['pet_id', 'user_id'], 'integer'],
            [['date'], 'safe'],
            [['status'], 'string', 'max' => 10],
            [['pet_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pets::className(), 'targetAttribute' => ['pet_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pet_id' => 'Pet ID',
            'user_id' => 'User ID',
            'date' => 'Date',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPet()
    {
        return $this->hasOne(Pets::className(), ['id' => 'pet_id']);
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
    public function getBankQuestionsAnswers()
    {
        return $this->hasMany(BankQuestionsAnswers::className(), ['adoption_request_id' => 'id']);
    }
}
