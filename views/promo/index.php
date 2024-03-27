<?php

use app\models\Promo;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\PromoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Promo Spesial';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="promo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambahkan Data', ['create'], ['class' => 'btn btn-success']) ?>
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
                return Html::img(Yii::$app->request->baseUrl . '/build/assets/db/' . $model->gambar, ['width' => '100px']);
            },
        ],
        'nmbarang',
        [
            'attribute' => 'bruto',
            'format' => ['decimal', 0],
        ],
        [
            'attribute' => 'netto',
            'format' => ['decimal', 0],
        ],
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
