<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "promo".
 *
 * @property int $id
 * @property resource $gambar
 * @property string $nmbarang
 * @property int $bruto
 * @property int $netto
 */
class Promo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'promo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gambar', 'nmbarang', 'bruto', 'netto'], 'required'],
            // [['id', 'bruto', 'netto'], 'integer'],
            [['gambar'],  'file', 'extensions' => 'png, jpg, jpeg'],
            [['nmbarang'], 'string', 'max' => 40],
            // [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gambar' => 'Gambar Produk',
            'nmbarang' => 'Nama Barang',
            'bruto' => 'Sebelum Diskon',
            'netto' => 'Sesudah Diskon',
        ];
    }
}
