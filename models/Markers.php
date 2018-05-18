<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "markers".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property double $lat
 * @property double $lng
 * @property string $type
 *
 * @property Data[] $datas
 * @property Users[] $users
 * @property Services[] $services
 */
class Markers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'markers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'lat', 'lng', 'type'], 'required'],
            [['lat', 'lng'], 'number'],
            [['name'], 'string', 'max' => 60],
            [['address'], 'string', 'max' => 80],
            [['type'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'type' => 'Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatas()
    {
        return $this->hasMany(Data::className(), ['markers_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['id' => 'user_id'])->viaTable('data', ['markers_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Services::className(), ['markers_id' => 'id']);
    }
}
