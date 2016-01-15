<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelicula".
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $precio
 * @property string $estado
 * @property integer $duracion_minutos
 *
 * @property Actorpelicula[] $actorpeliculas
 * @property Directorpelicula[] $directorpeliculas
 * @property Prestamopelicula[] $prestamopeliculas
 * @property Tipopeliculapelicula[] $tipopeliculapeliculas
 */
class Pelicula extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pelicula';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['precio', 'duracion_minutos'], 'integer'],
            [['estado'], 'required'],
            [['nombre'], 'string', 'max' => 255],
            [['estado'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'precio' => 'Precio',
            'estado' => 'Estado',
            'duracion_minutos' => 'Duracion Minutos',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActorpeliculas()
    {
        return $this->hasMany(Actorpelicula::className(), ['peliculaid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDirectorpeliculas()
    {
        return $this->hasMany(Directorpelicula::className(), ['peliculaid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrestamopeliculas()
    {
        return $this->hasMany(Prestamopelicula::className(), ['peliculaid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipopeliculapeliculas()
    {
        return $this->hasMany(Tipopeliculapelicula::className(), ['peliculaid' => 'id']);
    }
    public function getNombreCompleto(){
        return $this->nombre.' ';
    }
}
