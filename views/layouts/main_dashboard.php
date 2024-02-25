<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;



AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100" >
<head>
    <title>SentuhanKayu</title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="build/css/main_tampilan.css">
</head>


<body class="login" >      


    <?php $this->beginBody() ?>

    

    <div class="container body">
        <div class="container">

            <?= Alert::widget() ?>
            <?= $content ?>
            
        </div>
    </div>
    
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
 