<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actor".
 *
 * @property integer $id
 * @property string $nombres
 * @property string $apellidos
 *
 * @property Actorpelicula[] $actorpeliculas
 */
class Actor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombres', 'apellidos'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActorpeliculas()
    {
        return $this->hasMany(Actorpelicula::className(), ['actorid' => 'id']);
    }

    public function getNombreCompleto(){
        return $this->nombres.' '.$this->apellidos;
    }
}
