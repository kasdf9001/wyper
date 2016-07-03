<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property integer $locationID
 * @property string $locationName
 * @property integer $coord_lat
 * @property integer $coord_long
 * @property integer $description
 *
 * @property Comment[] $comments
 * @property Image[] $images
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['locationName', 'coord_lat', 'coord_long', 'description'], 'required'],
            [['locationName'], 'string'],
            [['coord_lat', 'coord_long', 'description'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'locationID' => 'Location ID',
            'locationName' => 'Location Name',
            'coord_lat' => 'Coord Lat',
            'coord_long' => 'Coord Long',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['commentFK' => 'locationID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Image::className(), ['locationFK' => 'locationID']);
    }
}
