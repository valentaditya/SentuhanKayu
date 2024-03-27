<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build\css\katalog.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto">
    <script src="build\js\katalog.js" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
<div class="container">
        <div class="content">
            <header>
                <nav>
                    <img src="build/assets/logo/logo_putih.png" alt="" class="logo-swp">
                    <strong><a href="/index.php?r=site%2Fdashbord" >Home</a></strong>
                    <strong><a href="#Promo" >Promo</a></strong>
                    <strong><a href="#Alat-Dapur" >Alat Dapur</a></strong>
                    <strong><a href="#Hiasan" >Hiasan</a></strong>
                    <strong><a href="#Lainnya" >Lainnya </a></strong>
                    <strong><a href="#Pesan-Custom" >Pesan Custom </a></strong>
                </nav>
            </header>
            <div class="card-katalog">
               <h1>Katalog SentuhanKayu</h1>
               <p>Produk kerajinan kayu dalam katalog ini adalah produk ready namun Anda perlu memastikan dulu untuk stoknya.</p>
            </div >

            <div class="card-promo-spesial" id="Promo">
                <h1>Promo Spesial</h1>

            

         
                
         




                <?php foreach ($datapromo as $item) : ?>
                    <div class="image-container">
                        
                        <div class="gambar1">
                        <?php
                        $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/datapromo/' . $item->gambar1;
                        echo Html::img($imageUrl, ['alt' => 'Image']);
                        ?>
                        </div>

                        <p class="title-1"><?= $item-> nama_produk1?></p>

                        
                        
                        <div class="harga1">
                        <p class="harga-sebelum">Rp <?= number_format($item->harga1, 0, ',', '.') ?></p>
                        <p class="harga-sesudah">Rp <?= number_format($item->hargadiskon1, 0, ',', '.') ?></p>
                        </div>
                        
                        <button class="Btn1" id="promospesial-btn1">
                        <div class="sign"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
                        </svg>
                        <div class="text">lihat</div></div>
                        </button>

                        <div class="overlay1" id="overlay4">

                        <div class="card1" id="card4">
                            <button class="close-btn" id="close-btn4">&times;</button>
                            <!-- Konten card Anda disini -->
                            
                            <div class="popup">
                                <?php
                                $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/datapromo/' . $item->gambar1;
                                echo Html::img($imageUrl, ['alt' => 'Image']);
                                ?>

                                <p class="namaproduk"><?= $item-> nama_produk1?></p>

                                <div class="harga">
                                <p class="harga-sebelum">Rp <?= number_format($item->harga1, 0, ',', '.') ?></p>
                                <p class="harga-sesudah" style="margin-left: 15px;">Rp <?= number_format($item->hargadiskon1, 0, ',', '.') ?></p>
                                </div>

                                <p class="deskripsi">Deskripsi Produk:</p>
                            
                                <p class="isideskripsi"><?= $item->desc1?></p>

                                <a href="https://wa.me/6287836118750?text=*hallo min saya ingin bertanya/memesan di SentuhanKayu*%20%0ANama%20%3A%0AAlamat%20%3A%0ANama Barang%20%3A%0AJumlah Pesanan%20%3A%0ANote%20%3A%0ATerimakasih Min%20%0A ">
                                <button>
                                    <span class="box">
                                    Pesan Sekarang
                                    </span>
                                </button>
                                </a>
                            </div>
                           
                            
                        </div>
                    </div>

                
                        <div class="gambar2">
                        <?php
                        $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/datapromo/' . $item->gambar2;
                        echo Html::img($imageUrl, ['alt' => 'Image']);
                        ?>
                        </div>

                        <p class="title-2"><?= $item-> nama_produk2?></p>

                        
                        
                        <div class="harga2">
                        <p class="harga-sebelum">Rp <?= number_format($item->harga2, 0, ',', '.') ?></p>
                        <p class="harga-sesudah">Rp <?= number_format($item->hargadiskon2, 0, ',', '.') ?></p>
                        </div>

                        <button class="Btn2" id="promospesial-btn2">
                        <div class="sign"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
                        </svg>
                        <div class="text">lihat</div></div>
                        </button>

                        <div class="overlay1" id="overlay5">

                        <div class="card1" id="card5">
                            <button class="close-btn" id="close-btn5">&times;</button>
                            <!-- Konten card Anda disini -->
                            
                            <div class="popup">
                                <?php
                                $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/datapromo/' . $item->gambar2;
                                echo Html::img($imageUrl, ['alt' => 'Image']);
                                ?>

                                <p class="namaproduk"><?= $item-> nama_produk2?></p>

                                <div class="harga">
                                <p class="harga-sebelum">Rp <?= number_format($item->harga2, 0, ',', '.') ?></p>
                                <p class="harga-sesudah" style="margin-left: 15px;">Rp <?= number_format($item->hargadiskon2, 0, ',', '.') ?></p>
                                </div>

                                <p class="deskripsi">Deskripsi Produk:</p>
                            
                                <p class="isideskripsi"><?= $item->desc2?></p>

                                <a href="https://wa.me/6287836118750?text=*hallo min saya ingin bertanya/memesan di SentuhanKayu*%20%0ANama%20%3A%0AAlamat%20%3A%0ANama Barang%20%3A%0AJumlah Pesanan%20%3A%0ANote%20%3A%0ATerimakasih Min%20%0A ">
                                <button>
                                    <span class="box">
                                    Pesan Sekarang
                                    </span>
                                </button>
                                </a>
                            </div>
                           
                            
                        </div>
                    </div>

                        <div class="gambar3">
                        <?php
                        $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/datapromo/' . $item->gambar3;
                        echo Html::img($imageUrl, ['alt' => 'Image']);
                        ?>
                        </div>

                        <p class="title-3"><?= $item-> nama_produk3?></p>

                        
                        
                        <div class="harga3">
                        <p class="harga-sebelum">Rp <?= number_format($item->harga3, 0, ',', '.') ?></p>
                        <p class="harga-sesudah">Rp <?= number_format($item->hargadiskon3, 0, ',', '.') ?></p>
                        </div>

                        <button class="Btn3" id="promospesial-btn3">
                        <div class="sign"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
                        </svg>
                        <div class="text">lihat</div></div>
                        </button>

                        <div class="overlay1" id="overlay6">

                        <div class="card1" id="card6">
                            <button class="close-btn" id="close-btn6">&times;</button>
                            <!-- Konten card Anda disini -->
                            
                            <div class="popup">
                                <?php
                                $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/datapromo/' . $item->gambar3;
                                echo Html::img($imageUrl, ['alt' => 'Image']);
                                ?>

                                <p class="namaproduk"><?= $item-> nama_produk3?></p>

                                <div class="harga">
                                <p class="harga-sebelum">Rp <?= number_format($item->harga3, 0, ',', '.') ?></p>
                                <p class="harga-sesudah" style="margin-left: 15px;">Rp <?= number_format($item->hargadiskon3, 0, ',', '.') ?></p>
                                </div>

                                <p class="deskripsi">Deskripsi Produk:</p>
                            
                                <p class="isideskripsi"><?= $item->desc3?></p>

                                <a href="https://wa.me/6287836118750?text=*hallo min saya ingin bertanya/memesan di SentuhanKayu*%20%0ANama%20%3A%0AAlamat%20%3A%0ANama Barang%20%3A%0AJumlah Pesanan%20%3A%0ANote%20%3A%0ATerimakasih Min%20%0A ">
                                <button>
                                    <span class="box">
                                    Pesan Sekarang
                                    </span>
                                </button>
                                </a>
                            </div>
                           
                            
                        </div>
                    </div>
                    
                    </div>
                <?php endforeach; ?> 

                <!-- <img src="build/assets/gambar/gambar_jual_lepek_sambal.png" alt="" class="gambar1"> -->
                <!-- <img src="build/assets/gambar/gambar_jual_lepek_sambal.png" alt="" class="gambar2">
                <img src="build/assets/gambar/gambar_jual_sendok.png" alt="" class="gambar3"> -->

                <!-- <p class="title-1">Jual Cangkir kayu jati (Set)</p> -->
                <!-- <p class="title-2">Jual Lepek Sambal Kayu </p>
                <p class="title-3">Jual Sendok Makan Kayu</p> -->


                <!-- <div class="harga1">
                    <p class="harga-sebelum">Rp 43.000</p>
                    <p class="harga-sesudah">Rp 40.000</p>
                </div> -->

                <!-- <div class="harga2">
                    <p class="harga-sebelum">Rp 43.000</p>
                    <p class="harga-sesudah">Rp 40.000</p>
                </div>

                <div class="harga3">
                    <p class="harga-sebelum">Rp 43.000</p>
                    <p class="harga-sesudah">Rp 40.000</p>
                </div> -->
            </div>

            <div class="card-alat-dapur" id="Alat-Dapur">

            <h1>Alat Dapur</h1>

          

                <?php foreach ($alatdapur as $item) : ?>
                    <div class="image-container">
                        
                        <div class="gambar1">
                        <?php
                        $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/alatdapur/' . $item->gambar1;
                        echo Html::img($imageUrl, ['alt' => 'Image']);
                        ?>
                        </div>

                        <p class="title-1"><?= $item-> nama_produk1?></p>

                        
                        
                        <div class="harga1">
                        <p class="harga-sesudah">Rp <?= number_format($item->harga1, 0, ',', '.') ?></p>
                        </div>

                        <button class="Btn1" id="alatdapur-btn1">
                        <div class="sign"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
                        </svg>
                        <div class="text">lihat</div></div>
                        </button>
                        
                        <div class="overlay1" id="overlay1">

                        <div class="card1" id="card1">
                            <button class="close-btn" id="close-btn1">&times;</button>
                            <!-- Konten card Anda disini -->
                            
                            <div class="popup">
                                <?php
                                $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/alatdapur/' . $item->gambar1;
                                echo Html::img($imageUrl, ['alt' => 'Image']);
                                ?>

                                <p class="namaproduk"><?= $item-> nama_produk1?></p>

                                <div class="harga">
                                <p class="harga-sesudah">Rp <?= number_format($item->harga1, 0, ',', '.') ?></p>
                                </div>

                                <p class="deskripsi">Deskripsi Produk:</p>
                            
                                <p class="isideskripsi"><?= $item->desc1?></p>

                                <a href="https://wa.me/6287836118750?text=*hallo min saya ingin bertanya/memesan di SentuhanKayu*%20%0ANama%20%3A%0AAlamat%20%3A%0ANama Barang%20%3A%0AJumlah Pesanan%20%3A%0ANote%20%3A%0ATerimakasih Min%20%0A ">
                                <button>
                                    <span class="box">
                                    Pesan Sekarang
                                    </span>
                                </button>
                                </a>
                            </div>
                           
                            
                        </div>
                    </div>

                        <div class="gambar2">
                        <?php
                        $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/alatdapur/' . $item->gambar2;
                        echo Html::img($imageUrl, ['alt' => 'Image']);
                        ?>
                        </div>

                        <p class="title-2"><?= $item-> nama_produk2?></p>

                        
                        
                        <div class="harga2">
                        <p class="harga-sesudah">Rp <?= number_format($item->harga2, 0, ',', '.') ?></p>
                        </div>

                        <button class="Btn2" id="alatdapur-btn2">
                        <div class="sign"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
                        </svg>
                        <div class="text">lihat</div></div>
                        </button>


                        <div class="overlay1" id="overlay2">

                        <div class="card1" id="card2">
                            <button class="close-btn" id="close-btn2">&times;</button>
                            <!-- Konten card Anda disini -->
                            
                            <div class="popup">
                                <?php
                                $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/alatdapur/' . $item->gambar2;
                                echo Html::img($imageUrl, ['alt' => 'Image']);
                                ?>

                                <p class="namaproduk"><?= $item-> nama_produk2?></p>

                                <div class="harga">
                                <p class="harga-sesudah">Rp <?= number_format($item->harga2, 0, ',', '.') ?></p>
                                </div>

                                <p class="deskripsi">Deskripsi Produk:</p>
                            
                                <p class="isideskripsi"><?= $item->desc2?></p>

                                <a href="https://wa.me/6287836118750?text=*hallo min saya ingin bertanya/memesan di SentuhanKayu*%20%0ANama%20%3A%0AAlamat%20%3A%0ANama Barang%20%3A%0AJumlah Pesanan%20%3A%0ANote%20%3A%0ATerimakasih Min%20%0A ">
                                <button>
                                    <span class="box">
                                    Pesan Sekarang
                                    </span>
                                </button>
                                </a>
                            </div>
                           
                            
                        </div>
                    </div>

                        <div class="gambar3">
                        <?php
                        $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/alatdapur/' . $item->gambar3;
                        echo Html::img($imageUrl, ['alt' => 'Image']);
                        ?>
                        </div>

                        <p class="title-3"><?= $item-> nama_produk3?></p>

                        
                        
                        <div class="harga3">
                        <p class="harga-sesudah">Rp <?= number_format($item->harga3, 0, ',', '.') ?></p>
                        </div>

                        <button class="Btn3" id="alatdapur-btn3">
                        <div class="sign"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
                        </svg>
                        <div class="text">lihat</div></div>
                        </button>


                        <div class="overlay1" id="overlay3">

                        <div class="card1" id="card3">
                            <button class="close-btn" id="close-btn3">&times;</button>
                            <!-- Konten card Anda disini -->
                            
                            <div class="popup">
                                <?php
                                $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/alatdapur/' . $item->gambar3;
                                echo Html::img($imageUrl, ['alt' => 'Image']);
                                ?>

                                <p class="namaproduk"><?= $item-> nama_produk3?></p>

                                <div class="harga">
                                <p class="harga-sesudah">Rp <?= number_format($item->harga3, 0, ',', '.') ?></p>
                                </div>

                                <p class="deskripsi">Deskripsi Produk:</p>
                            
                                <p class="isideskripsi"><?= $item->desc3?></p>

                                <a href="https://wa.me/6287836118750?text=*hallo min saya ingin bertanya/memesan di SentuhanKayu*%20%0ANama%20%3A%0AAlamat%20%3A%0ANama Barang%20%3A%0AJumlah Pesanan%20%3A%0ANote%20%3A%0ATerimakasih Min%20%0A ">
                                <button>
                                    <span class="box">
                                    Pesan Sekarang
                                    </span>
                                </button>
                                </a>
                            </div>
                           
                            
                        </div>

                    </div>
                <?php endforeach; ?>    

            </div>


                <!-- <img src="build/assets/gambar/gambar_jual_lepek_sambal.png" alt="" class="gambar1">
                <img src="build/assets/gambar/gambar_jual_lepek_sambal.png" alt="" class="gambar2">
                <img src="build/assets/gambar/gambar_jual_sendok.png" alt="" class="gambar3">

                <p class="title-1">Jual Cangkir kayu jati (Set)</p>
                 <p class="title-2">Jual Lepek Sambal Kayu </p>
                <p class="title-3">Jual Sendok Makan Kayu</p> 


                <div class="harga1">
                    
                    <p class="harga-sesudah">Rp 40.000</p>
                </div>

                <div class="harga2">
                  
                    <p class="harga-sesudah">Rp 40.000</p>
                </div>

                <div class="harga3">
                 
                    <p class="harga-sesudah">Rp 40.000</p>
                </div> -->

            </div>

            <div class="card-hiasan" id="Hiasan">

            <h1>Hiasan</h1>

            <?php foreach ($hiasan as $item) : ?>
                    <div class="image-container">
                        
                        <div class="gambar1">
                        <?php
                        $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/hiasan/' . $item->gambar1;
                        echo Html::img($imageUrl, ['alt' => 'Image']);
                        ?>
                        </div>

                        <p class="title-1"><?= $item-> nama_produk1?></p>

                        
                        <div class="harga1">
                        <p class="harga-sesudah">Rp <?= number_format($item->harga1, 0, ',', '.') ?></p>
                        </div>

                        <button class="Btn1" id="hiasan-btn1">
                        <div class="sign"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
                        </svg>
                        <div class="text">lihat</div></div>
                        </button>

                        <div class="overlay1" id="overlay7">

                        <div class="card1" id="card7">
                            <button class="close-btn" id="close-btn7">&times;</button>
                            <!-- Konten card Anda disini -->
                            
                            <div class="popup">
                                <?php
                                $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/hiasan/' . $item->gambar1;
                                echo Html::img($imageUrl, ['alt' => 'Image']);
                                ?>

                                <p class="namaproduk"><?= $item-> nama_produk1?></p>

                                <div class="harga">
                                <p class="harga-sesudah">Rp <?= number_format($item->harga1, 0, ',', '.') ?></p>
                                </div>

                                <p class="deskripsi">Deskripsi Produk:</p>
                            
                                <p class="isideskripsi"><?= $item->desc1?></p>

                                <a href="https://wa.me/6287836118750?text=*hallo min saya ingin bertanya/memesan di SentuhanKayu*%20%0ANama%20%3A%0AAlamat%20%3A%0ANama Barang%20%3A%0AJumlah Pesanan%20%3A%0ANote%20%3A%0ATerimakasih Min%20%0A ">
                                <button>
                                    <span class="box">
                                    Pesan Sekarang
                                    </span>
                                </button>
                                </a>
                            </div>
                           
                            
                        </div>
                    </div>

                        <div class="gambar2">
                        <?php
                        $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/hiasan/' . $item->gambar2;
                        echo Html::img($imageUrl, ['alt' => 'Image']);
                        ?>
                        </div>

                        <p class="title-2"><?= $item-> nama_produk2?></p>

                        
                        
                        <div class="harga2">
                        <p class="harga-sesudah">Rp <?= number_format($item->harga2, 0, ',', '.') ?></p>
                        </div>

                        <button class="Btn2" id="hiasan-btn2">
                        <div class="sign"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
                        </svg>
                        <div class="text">lihat</div></div>
                        </button>

                        <div class="overlay1" id="overlay8">

                        <div class="card1" id="card8">
                            <button class="close-btn" id="close-btn8">&times;</button>
                            <!-- Konten card Anda disini -->
                            
                            <div class="popup">
                                <?php
                                $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/hiasan/' . $item->gambar2;
                                echo Html::img($imageUrl, ['alt' => 'Image']);
                                ?>

                                <p class="namaproduk"><?= $item-> nama_produk2?></p>

                                <div class="harga">
                                <p class="harga-sesudah">Rp <?= number_format($item->harga2, 0, ',', '.') ?></p>
                                </div>

                                <p class="deskripsi">Deskripsi Produk:</p>
                            
                                <p class="isideskripsi"><?= $item->desc2?></p>

                                <a href="https://wa.me/6287836118750?text=*hallo min saya ingin bertanya/memesan di SentuhanKayu*%20%0ANama%20%3A%0AAlamat%20%3A%0ANama Barang%20%3A%0AJumlah Pesanan%20%3A%0ANote%20%3A%0ATerimakasih Min%20%0A ">
                                <button>
                                    <span class="box">
                                    Pesan Sekarang
                                    </span>
                                </button>
                                </a>
                            </div>
                           
                            
                        </div>
                    </div>

                        <div class="gambar3">
                        <?php
                        $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/hiasan/' . $item->gambar3;
                        echo Html::img($imageUrl, ['alt' => 'Image']);
                        ?>
                        </div>

                        <p class="title-3"><?= $item-> nama_produk3?></p>

                        
                        
                        <div class="harga3">
                        <p class="harga-sesudah">Rp <?= number_format($item->harga3, 0, ',', '.') ?></p>
                        </div>
                    
                        <button class="Btn3" id="hiasan-btn3">
                        <div class="sign"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
                        </svg>
                        <div class="text">lihat</div></div>
                        </button>

                        <div class="overlay1" id="overlay9">

                        <div class="card1" id="card9">
                            <button class="close-btn" id="close-btn9">&times;</button>
                            <!-- Konten card Anda disini -->
                            
                            <div class="popup">
                                <?php
                                $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/hiasan/' . $item->gambar3;
                                echo Html::img($imageUrl, ['alt' => 'Image']);
                                ?>

                                <p class="namaproduk"><?= $item-> nama_produk3?></p>

                                <div class="harga">
                                <p class="harga-sesudah">Rp <?= number_format($item->harga3, 0, ',', '.') ?></p>
                                </div>

                                <p class="deskripsi">Deskripsi Produk:</p>
                            
                                <p class="isideskripsi"><?= $item->desc3?></p>

                                <a href="https://wa.me/6287836118750?text=*hallo min saya ingin bertanya/memesan di SentuhanKayu*%20%0ANama%20%3A%0AAlamat%20%3A%0ANama Barang%20%3A%0AJumlah Pesanan%20%3A%0ANote%20%3A%0ATerimakasih Min%20%0A ">
                                <button>
                                    <span class="box">
                                    Pesan Sekarang
                                    </span>
                                </button>
                                </a>
                            </div>
                           
                            
                        </div>
                    </div>

                    </div>
                <?php endforeach; ?>    

                <!-- <img src="build/assets/gambar/gambar_jual_lepek_sambal.png" alt="" class="gambar1">
                <img src="build/assets/gambar/gambar_jual_lepek_sambal.png" alt="" class="gambar2">
                <img src="build/assets/gambar/gambar_jual_sendok.png" alt="" class="gambar3">

                <p class="title-1">Jual Cangkir kayu jati (Set)</p>
                 <p class="title-2">Jual Lepek Sambal Kayu </p>
                <p class="title-3">Jual Sendok Makan Kayu</p> 


                <div class="harga1">
                    
                    <p class="harga-sesudah">Rp 40.000</p>
                </div>

                <div class="harga2">
                  
                    <p class="harga-sesudah">Rp 40.000</p>
                </div>

                <div class="harga3">
                 
                    <p class="harga-sesudah">Rp 40.000</p>
                </div> -->

            </div>

            <div class="card-lainnya" id="Lainnya">

            <h1>Lainnya</h1>
            <?php foreach ($lainnya as $item) : ?>
                    <div class="image-container">
                        
                        <div class="gambar1">
                        <?php
                        $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/lainnya/' . $item->gambar1;
                        echo Html::img($imageUrl, ['alt' => 'Image']);
                        ?>
                        </div>

                        <p class="title-1"><?= $item-> nama_produk1?></p>

                        
                        
                        <div class="harga1">
                        <p class="harga-sesudah">Rp <?= number_format($item->harga1, 0, ',', '.') ?></p>
                        </div>

                        <button class="Btn1" id="lainnya-btn1">
                        <div class="sign"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
                        </svg>
                        <div class="text">lihat</div></div>
                        </button>

                        <div class="overlay1" id="overlay10">

                        <div class="card1" id="card10">
                            <button class="close-btn" id="close-btn10">&times;</button>
                            <!-- Konten card Anda disini -->
                            
                            <div class="popup">
                                <?php
                                $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/lainnya/' . $item->gambar1;
                                echo Html::img($imageUrl, ['alt' => 'Image']);
                                ?>

                                <p class="namaproduk"><?= $item-> nama_produk1?></p>

                                <div class="harga">
                                <p class="harga-sesudah">Rp <?= number_format($item->harga1, 0, ',', '.') ?></p>
                                </div>

                                <p class="deskripsi">Deskripsi Produk:</p>
                            
                                <p class="isideskripsi"><?= $item->desc1?></p>

                                <a href="https://wa.me/6287836118750?text=*hallo min saya ingin bertanya/memesan di SentuhanKayu*%20%0ANama%20%3A%0AAlamat%20%3A%0ANama Barang%20%3A%0AJumlah Pesanan%20%3A%0ANote%20%3A%0ATerimakasih Min%20%0A ">
                                <button>
                                    <span class="box">
                                    Pesan Sekarang
                                    </span>
                                </button>
                                </a>
                            </div>
                           
                            
                        </div>
                    </div>

                        <div class="gambar2">
                        <?php
                        $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/lainnya/' . $item->gambar2;
                        echo Html::img($imageUrl, ['alt' => 'Image']);
                        ?>
                        </div>

                        <p class="title-2"><?= $item-> nama_produk2?></p>

                        
                        
                        <div class="harga2">
                        <p class="harga-sesudah">Rp <?= number_format($item->harga2, 0, ',', '.') ?></p>
                        </div>

                        <button class="Btn2" id="lainnya-btn2">
                        <div class="sign"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
                        </svg>
                        <div class="text">lihat</div></div>
                        </button>

                        <div class="overlay1" id="overlay11">

                        <div class="card1" id="card11">
                            <button class="close-btn" id="close-btn11">&times;</button>
                            <!-- Konten card Anda disini -->
                            
                            <div class="popup">
                                <?php
                                $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/lainnya/' . $item->gambar2;
                                echo Html::img($imageUrl, ['alt' => 'Image']);
                                ?>

                                <p class="namaproduk"><?= $item-> nama_produk2?></p>

                                <div class="harga">
                                <p class="harga-sesudah">Rp <?= number_format($item->harga2, 0, ',', '.') ?></p>
                                </div>

                                <p class="deskripsi">Deskripsi Produk:</p>
                            
                                <p class="isideskripsi"><?= $item->desc2?></p>

                                <a href="https://wa.me/6287836118750?text=*hallo min saya ingin bertanya/memesan di SentuhanKayu*%20%0ANama%20%3A%0AAlamat%20%3A%0ANama Barang%20%3A%0AJumlah Pesanan%20%3A%0ANote%20%3A%0ATerimakasih Min%20%0A ">
                                <button>
                                    <span class="box">
                                    Pesan Sekarang
                                    </span>
                                </button>
                                </a>
                            </div>
                           
                            
                        </div>
                    </div>

                        <div class="gambar3">
                        <?php
                        $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/lainnya/' . $item->gambar3;
                        echo Html::img($imageUrl, ['alt' => 'Image']);
                        ?>
                        </div>

                        <p class="title-3"><?= $item-> nama_produk3?></p>

                        
                        
                        <div class="harga3">
                        <p class="harga-sesudah">Rp <?= number_format($item->harga3, 0, ',', '.') ?></p>
                        </div>

                        <button class="Btn3" id="lainnya-btn3">
                        <div class="sign"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
                        </svg>
                        <div class="text">lihat</div></div>
                        </button>

                        <div class="overlay1" id="overlay12">

                        <div class="card1" id="card12">
                            <button class="close-btn" id="close-btn12">&times;</button>
                            <!-- Konten card Anda disini -->
                            
                            <div class="popup">
                                <?php
                                $imageUrl = Yii::$app->urlManager->baseUrl . '/build/assets/db/lainnya/' . $item->gambar3;
                                echo Html::img($imageUrl, ['alt' => 'Image']);
                                ?>

                                <p class="namaproduk"><?= $item-> nama_produk3?></p>

                                <div class="harga">
                                <p class="harga-sesudah">Rp <?= number_format($item->harga3, 0, ',', '.') ?></p>
                                </div>

                                <p class="deskripsi">Deskripsi Produk:</p>
                            
                                <p class="isideskripsi"><?= $item->desc3?></p>

                                <a href="https://wa.me/6287836118750?text=*hallo min saya ingin bertanya/memesan di SentuhanKayu*%20%0ANama%20%3A%0AAlamat%20%3A%0ANama Barang%20%3A%0AJumlah Pesanan%20%3A%0ANote%20%3A%0ATerimakasih Min%20%0A ">
                                <button>
                                    <span class="box">
                                    Pesan Sekarang
                                    </span>
                                </button>
                                </a>
                            </div>
                           
                            
                        </div>
                    </div>
                    
                    </div>
                <?php endforeach; ?> 

                <!-- <img src="build/assets/gambar/gambar_jual_lepek_sambal.png" alt="" class="gambar1">
                <img src="build/assets/gambar/gambar_jual_lepek_sambal.png" alt="" class="gambar2">
                <img src="build/assets/gambar/gambar_jual_sendok.png" alt="" class="gambar3">

                <p class="title-1">Jual Cangkir kayu jati (Set)</p>
                 <p class="title-2">Jual Lepek Sambal Kayu </p>
                <p class="title-3">Jual Sendok Makan Kayu</p> 


                <div class="harga1">
                    
                    <p class="harga-sesudah">Rp 40.000</p>
                </div>

                <div class="harga2">
                  
                    <p class="harga-sesudah">Rp 40.000</p>
                </div>

                <div class="harga3">
                 
                    <p class="harga-sesudah">Rp 40.000</p>
                </div> -->

                
            </div>

            <div class="card-pesan-custom" id="Pesan-Custom">
                <h1 class="title">Pesan Custom</h1>
                <p class="isi1">Produk Kerajinan Kayu Yang Anda Cari Tidak Ada Di Katalog? Silahkan Hubungi Kami Untuk Pesan Secara Custom Baik</p>
                <p class="isi2">Bentuk Maupun Ukurannya</p>
                <a href="https://wa.me/6287836118750?text=*hallo min saya ingin bertanya/memesan di SentuhanKayu*%20%0ANama%20%3A%0AAlamat%20%3A%0ANama Barang%20%3A%0AJumlah Pesanan%20%3A%0ANote%20%3A%0ATerimakasih Min%20%0A ">
                <button>
                    <span class="box">
                        Pesan Custom
                    </span>
                </button>
                </a>
            </div>


        </div>
    </div>
</body>
</html>

<script>
    document.addEventListener('scroll', () => {
        const header = document.querySelector('header');
        const logo = document.querySelector('.logo-swp');
        const navLinks = document.querySelectorAll('header nav strong a');

        if (window.scrollY > 0) {
            header.classList.add('scrolled');
            logo.src = 'build/assets/logo/logo_coklat.png';

            // di scroll
            navLinks.forEach(link => {
                link.style.color = '#3B1A00';
            });
            
        } else {
            header.classList.remove('scrolled');
            logo.src = 'build/assets/logo/logo_putih.png';

            // sebelum scroll
            navLinks.forEach(link => {
                link.style.color = '#FFFFFF';
            });
        }
    })

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetSectionId = this.getAttribute('href');

            if (targetSectionId === '#Home') {
                // Scroll to the top of the page
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            } else {
                // Scroll to the corresponding section
                document.querySelector(targetSectionId).scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

var overlay1 = document.getElementById('overlay1');
var card1 = document.getElementById('card1');
var overlay2 = document.getElementById('overlay2');
var card2 = document.getElementById('card2');
var overlay3 = document.getElementById('overlay3');
var card3 = document.getElementById('card3');
var overlay4 = document.getElementById('overlay4');
var card4 = document.getElementById('card4');
var overlay5 = document.getElementById('overlay5');
var card5 = document.getElementById('card5');
var overlay6 = document.getElementById('overlay6');
var card6 = document.getElementById('card6');
var overlay7 = document.getElementById('overlay7');
var card7 = document.getElementById('card7');
var overlay8 = document.getElementById('overlay8');
var card8 = document.getElementById('card8');
var overlay9 = document.getElementById('overlay9');
var card9 = document.getElementById('card9');
var overlay10 = document.getElementById('overlay10');
var card10 = document.getElementById('card10');
var overlay11 = document.getElementById('overlay11');
var card11 = document.getElementById('card11');
var overlay12 = document.getElementById('overlay12');
var card12 = document.getElementById('card12');
var closeBtn1 = document.getElementById('close-btn1'); 
var closeBtn2 = document.getElementById('close-btn2'); 
var closeBtn3 = document.getElementById('close-btn3'); 
var closeBtn4 = document.getElementById('close-btn4'); 
var closeBtn5 = document.getElementById('close-btn5'); 
var closeBtn6 = document.getElementById('close-btn6'); 
var closeBtn7 = document.getElementById('close-btn7'); 
var closeBtn8 = document.getElementById('close-btn8'); 
var closeBtn9 = document.getElementById('close-btn9'); 
var closeBtn10 = document.getElementById('close-btn10'); 
var closeBtn11 = document.getElementById('close-btn11'); 
var closeBtn12 = document.getElementById('close-btn12'); 


function openCard1() {
    overlay1.style.display = 'block';
    setTimeout(function() {
        card1.style.transform = 'translate(-50%, -50%) scale(1)';
    }, 50);
}

function closeCard1() {
    card1.style.transform = 'translate(-50%, -50%) scale(0.5)';
    setTimeout(function() {
        overlay1.style.display = 'none';
    }, 300);
}

function openCard2() {
    overlay2.style.display = 'block';
    setTimeout(function() {
        card2.style.transform = 'translate(-50%, -50%) scale(1)';
    }, 50);
}

function closeCard2() {
    card2.style.transform = 'translate(-50%, -50%) scale(0.5)';
    setTimeout(function() {
        overlay2.style.display = 'none';
    }, 300);
}
function openCard3() {
    overlay3.style.display = 'block';
    setTimeout(function() {
        card3.style.transform = 'translate(-50%, -50%) scale(1)';
    }, 50);
}

function closeCard3() {
    card3.style.transform = 'translate(-50%, -50%) scale(0.5)';
    setTimeout(function() {
        overlay3.style.display = 'none';
    }, 300);
}
function openCard4() {
    overlay4.style.display = 'block';
    setTimeout(function() {
        card4.style.transform = 'translate(-50%, -50%) scale(1)';
    }, 50);
}

function closeCard4() {
    card4.style.transform = 'translate(-50%, -50%) scale(0.5)';
    setTimeout(function() {
        overlay4.style.display = 'none';
    }, 300);
}

function openCard5() {
    overlay5.style.display = 'block';
    setTimeout(function() {
        card5.style.transform = 'translate(-50%, -50%) scale(1)';
    }, 50);
}

function closeCard5() {
    card5.style.transform = 'translate(-50%, -50%) scale(0.5)';
    setTimeout(function() {
        overlay5.style.display = 'none';
    }, 300);
}
function openCard6() {
    overlay6.style.display = 'block';
    setTimeout(function() {
        card6.style.transform = 'translate(-50%, -50%) scale(1)';
    }, 50);
}

function closeCard6() {
    card6.style.transform = 'translate(-50%, -50%) scale(0.5)';
    setTimeout(function() {
        overlay6.style.display = 'none';
    }, 300);
}
function openCard7() {
    overlay7.style.display = 'block';
    setTimeout(function() {
        card7.style.transform = 'translate(-50%, -50%) scale(1)';
    }, 50);
}

function closeCard7() {
    card7.style.transform = 'translate(-50%, -50%) scale(0.5)';
    setTimeout(function() {
        overlay7.style.display = 'none';
    }, 300);
}

function openCard8() {
    overlay8.style.display = 'block';
    setTimeout(function() {
        card8.style.transform = 'translate(-50%, -50%) scale(1)';
    }, 50);
}

function closeCard8() {
    card8.style.transform = 'translate(-50%, -50%) scale(0.5)';
    setTimeout(function() {
        overlay8.style.display = 'none';
    }, 300);
}
function openCard9() {
    overlay9.style.display = 'block';
    setTimeout(function() {
        card9.style.transform = 'translate(-50%, -50%) scale(1)';
    }, 50);
}

function closeCard9() {
    card9.style.transform = 'translate(-50%, -50%) scale(0.5)';
    setTimeout(function() {
        overlay9.style.display = 'none';
    }, 300);
}
function openCard10() {
    overlay10.style.display = 'block';
    setTimeout(function() {
        card10.style.transform = 'translate(-50%, -50%) scale(1)';
    }, 50);
}

function closeCard10() {
    card10.style.transform = 'translate(-50%, -50%) scale(0.5)';
    setTimeout(function() {
        overlay10.style.display = 'none';
    }, 300);
}

function openCard11() {
    overlay11.style.display = 'block';
    setTimeout(function() {
        card11.style.transform = 'translate(-50%, -50%) scale(1)';
    }, 50);
}

function closeCard11() {
    card11.style.transform = 'translate(-50%, -50%) scale(0.5)';
    setTimeout(function() {
        overlay11.style.display = 'none';
    }, 300);
}
function openCard12() {
    overlay12.style.display = 'block';
    setTimeout(function() {
        card12.style.transform = 'translate(-50%, -50%) scale(1)';
    }, 50);
}

function closeCard12() {
    card12.style.transform = 'translate(-50%, -50%) scale(0.5)';
    setTimeout(function() {
        overlay12.style.display = 'none';
    }, 300);
}
function openCard1() {
    overlay1.style.display = 'block';
    setTimeout(function() {
        card1.style.transform = 'translate(-50%, -50%) scale(1)';
    }, 50);
}

function closeCard1() {
    card1.style.transform = 'translate(-50%, -50%) scale(0.5)';
    setTimeout(function() {
        overlay1.style.display = 'none';
    }, 300);
}

function openCard2() {
    overlay2.style.display = 'block';
    setTimeout(function() {
        card2.style.transform = 'translate(-50%, -50%) scale(1)';
    }, 50);
}

function closeCard2() {
    card2.style.transform = 'translate(-50%, -50%) scale(0.5)';
    setTimeout(function() {
        overlay2.style.display = 'none';
    }, 300);
}
function openCard3() {
    overlay3.style.display = 'block';
    setTimeout(function() {
        card3.style.transform = 'translate(-50%, -50%) scale(1)';
    }, 50);
}

function closeCard3() {
    card3.style.transform = 'translate(-50%, -50%) scale(0.5)';
    setTimeout(function() {
        overlay3.style.display = 'none';
    }, 300);
}


document.getElementById('alatdapur-btn1').addEventListener('click', openCard1);
closeBtn1.addEventListener('click', closeCard1);

document.getElementById('alatdapur-btn2').addEventListener('click', openCard2);
closeBtn2.addEventListener('click', closeCard2);

document.getElementById('alatdapur-btn3').addEventListener('click', openCard3);
closeBtn3.addEventListener('click', closeCard3);

document.getElementById('promospesial-btn1').addEventListener('click', openCard4);
closeBtn4.addEventListener('click', closeCard4);

document.getElementById('promospesial-btn2').addEventListener('click', openCard5);
closeBtn5.addEventListener('click', closeCard5);

document.getElementById('promospesial-btn3').addEventListener('click', openCard6);
closeBtn6.addEventListener('click', closeCard6);

document.getElementById('hiasan-btn1').addEventListener('click', openCard7);
closeBtn7.addEventListener('click', closeCard7);

document.getElementById('hiasan-btn2').addEventListener('click', openCard8);
closeBtn8.addEventListener('click', closeCard8);

document.getElementById('hiasan-btn3').addEventListener('click', openCard9);
closeBtn9.addEventListener('click', closeCard9);

document.getElementById('lainnya-btn1').addEventListener('click', openCard10);
closeBtn10.addEventListener('click', closeCard10);

document.getElementById('lainnya-btn2').addEventListener('click', openCard11);
closeBtn11.addEventListener('click', closeCard11);

document.getElementById('lainnya-btn3').addEventListener('click', openCard12);
closeBtn12.addEventListener('click', closeCard12);


</script>