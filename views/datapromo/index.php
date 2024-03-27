<?php

use app\models\Datapromo;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\datapromoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Promo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datapromo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create datapromo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'gambar',
                'format' => 'html',
                'value' => function ($model) {
                    return Html::img(Yii::$app->request->baseUrl . '/build/assets/db/datapromo/' . $model->gambar1, ['width' => '100px']);
                },
            ],
            'nama_produk1',
            [
                'attribute' => 'harga1',
                'format' => ['decimal', 0],
            ],
            [
                'attribute' => 'hargadiskon1',
                'format' => ['decimal', 0],
            ],
            'desc1',
            [
                'attribute' => 'gambar',
                'format' => 'html',
                'value' => function ($model) {
                    return Html::img(Yii::$app->request->baseUrl . '/build/assets/db/datapromo/' . $model->gambar2, ['width' => '100px']);
                },
            ],
            'nama_produk2',
            [
                'attribute' => 'harga2',
                'format' => ['decimal', 0],
            ],
            [
                'attribute' => 'hargadiskon2',
                'format' => ['decimal', 0],
            ],
            'desc2',
            [
                'attribute' => 'gambar',
                'format' => 'html',
                'value' => function ($model) {
                    return Html::img(Yii::$app->request->baseUrl . '/build/assets/db/datapromo/' . $model->gambar3, ['width' => '100px']);
                },
            ],
            'nama_produk3',
            [
                'attribute' => 'harga3',
                'format' => ['decimal', 0],
            ],
            [
                'attribute' => 'hargadiskon3',
                'format' => ['decimal', 0],
            ],
            'desc3',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{delete}',
                'urlCreator' => function ($action, $model, $key, $index) {
                    return Url::to([$action, 'id' => $model->id]);
                },
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
