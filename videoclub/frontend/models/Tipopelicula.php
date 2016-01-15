<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipopelicula".
 *
 * @property integer $id
 * @property string $categoria
 *
 * @property Tipopeliculapelicula[] $tipopeliculapeliculas
 */
class Tipopelicula extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipopelicula';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categoria'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categoria' => 'Categoria',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipopeliculapeliculas()
    {
        return $this->hasMany(Tipopeliculapelicula::className(), ['tipo_peliculaid' => 'id']);
    }
}
