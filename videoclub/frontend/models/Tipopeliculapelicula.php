<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipopeliculapelicula".
 *
 * @property integer $id
 * @property integer $peliculaid
 * @property integer $tipo_peliculaid
 *
 * @property Pelicula $pelicula
 * @property Tipopelicula $tipoPelicula
 */
class Tipopeliculapelicula extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipopeliculapelicula';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['peliculaid', 'tipo_peliculaid'], 'required'],
            [['peliculaid', 'tipo_peliculaid'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'peliculaid' => 'Peliculaid',
            'tipo_peliculaid' => 'Tipo Peliculaid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelicula()
    {
        return $this->hasOne(Pelicula::className(), ['id' => 'peliculaid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoPelicula()
    {
        return $this->hasOne(Tipopelicula::className(), ['id' => 'tipo_peliculaid']);
    }
}
