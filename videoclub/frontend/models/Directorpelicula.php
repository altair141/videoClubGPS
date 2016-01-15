<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "directorpelicula".
 *
 * @property integer $id
 * @property integer $directorid
 * @property integer $peliculaid
 *
 * @property Director $director
 * @property Pelicula $pelicula
 */
class Directorpelicula extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'directorpelicula';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['directorid', 'peliculaid'], 'required'],
            [['directorid', 'peliculaid'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'directorid' => 'Directorid',
            'peliculaid' => 'Peliculaid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDirector()
    {
        return $this->hasOne(Director::className(), ['id' => 'directorid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelicula()
    {
        return $this->hasOne(Pelicula::className(), ['id' => 'peliculaid']);
    }
}
