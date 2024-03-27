<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hiasan".
 *
 * @property int $id
 * @property resource $gambar1
 * @property string $nama_produk1
 * @property int $harga1
 * @property resource $gambar2
 * @property string $nama_produk2
 * @property int $harga2
 * @property resource $gambar3
 * @property string $nama_produk3
 * @property int $harga3
 */
class Hiasan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hiasan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gambar1', 'nama_produk1', 'harga1', 'gambar2', 'nama_produk2' , 'harga2','gambar3', 'nama_produk3' , 'harga3' ,'desc1','desc2','desc3'], 'required'],
            [['gambar1', 'gambar2', 'gambar3'],  'file', 'extensions' => 'png, jpg, jpeg'],
            // [['harga1', 'harga2', 'harga3'], 'integer'],
            [['nama_produk1', 'nama_produk2', 'nama_produk3'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gambar1' => 'Gambar produk 1',
            'nama_produk1' => 'Nama Produk1',
            'harga1' => 'Harga',
            'desc1' => 'desc',
            'gambar2' => 'Gambar produk 2',
            'nama_produk2' => 'Nama Produk2',
            'harga2' => 'Harga',
            'desc2' => 'desc',
            'gambar3' => 'Gambar produk3',
            'nama_produk3' => 'Nama Produk3',
            'harga3' => 'Harga',
            'desc3' => 'desc',
        ];
    }
}