<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actorpelicula".
 *
 * @property integer $id
 * @property integer $actorid
 * @property integer $peliculaid
 *
 * @property Actor $actor
 * @property Pelicula $pelicula
 */
class Actorpelicula extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actorpelicula';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['actorid', 'peliculaid'], 'required'],
            [['actorid', 'peliculaid'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'actorid' => 'Actorid',
            'peliculaid' => 'Peliculaid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActor()
    {
        return $this->hasOne(Actor::className(), ['id' => 'actorid']);
    }

  public function getNombreActor()
    {
        $actor = Actor::find()->where(['id' => $this->actorid])->one();
        return $actor->getNombreCompleto();
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelicula()
    {
        return $this->hasOne(Pelicula::className(), ['id' => 'peliculaid']);
    }

      public function getNombrePelicula()
    {
        $pelicula = Pelicula::find()->where(['id' => $this->personaid])->one();
        return $pelicula->getNombreCompleto();
    }

}
