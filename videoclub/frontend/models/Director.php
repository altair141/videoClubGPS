<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "director".
 *
 * @property integer $id
 * @property string $nombres
 * @property string $apellidos
 *
 * @property Directorpelicula[] $directorpeliculas
 */
class Director extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'director';
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
    public function getDirectorpeliculas()
    {
        return $this->hasMany(Directorpelicula::className(), ['directorid' => 'id']);
    }

    public function getNombreCompleto(){
        return $this->nombres.' '.$this->apellidos;
    }
}
