<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="build\css\dashboard.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="build\js\dashboard.js" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- <title>Document</title> -->
</head>

<body>
    <div class="container">
        <div class="content">
            <header>
                <nav>
                    <img src="build/assets/logo_putih.png" alt="" class="logo-swp">
                    <strong><a href="#Home" style="color: #FFFFFF">Home</a></strong>
                    <strong><a href="#Tentang-Kami" style="color: #FFFFFF">Tentang Kami</a></strong>
                    <strong><a href="#Layanan" style="color: #FFFFFF">Layanan</a></strong>
                    <strong><a href="#FAQ" style="color: #FFFFFF">FAQ</a></strong>
                    <strong><a href="#Hubungi-Kami" style="color: #FFFFFF">Hubungi Kami</a></strong>
                </nav>
            </header>
            <img src="build/assets/background.jpeg" alt="" style="width: 1348px; height: 639px;">

            <div class="Home">
                <img src="build/assets/logo_putih.png" alt="logo" class="img-logo">
                <strong>
                    <p class="judul-logo">SentuhanKayu <br> CustomWoodworking</p>
                </strong>
                <strong>
                    <p class="title">Pengrajin Kayu Custom <br>Profesional.</p>
                </strong>
                <p class="isi">Melayani pesanan mangkok kayu, talenan kayu, nampan kayu, <br> piring kayu, merchandise kayu, dan kerajinan kayu lainnya dan <br> dapat di custom sesuai keinginan anda <br></p>
                <a href="https://wa.me/6287836118750?text=Min Saya Ingin Pesan Barang Dari SentuhanKayu"><button class="Button-Pesan-Custum">Pesan Custum</button></a>
            </div>

            <div class="card" id="Tentang-Kami">
                <p class ="watermark">SentuhanKayu</p>
                <strong><h1>Pengrajin Kayu Custom Terbaik Indonesia</h1></strong>
               <p class="pengertian">SentuhanKayu adalah merek pengerajin kayu terbaik di Indonesia yang berkomitmen untuk menghadirkan keindahan alam dalam sentuhan modern. Kami percaya bahwa kayu adalah bahan alami yang memiliki keindahan dan kekuatan yang luar biasa. Oleh karena itu, kami menggunakan kayu berkualitas tinggi dari berbagai sumber di Indonesia untuk menciptakan produk-produk yang tidak hanya indah, tetapi juga tahan lama dan ramah lingkungan. SentuhanKayu telah berhasil mengekspor produk-produknya ke berbagai negara di dunia, termasuk Amerika Serikat, Eropa, dan Asia. Hal ini menunjukkan bahwa produk-produk SentuhanKayu telah diakui kualitasnya oleh masyarakat internasional. Selain itu, SentuhanKayu juga telah hadir di berbagai kota di Indonesia, sehingga memudahkan pelanggan untuk mendapatkan produk-produknya. Kami memiliki toko fisik di beberapa kota besar di Indonesia, serta toko online yang dapat diakses oleh pelanggan di seluruh Indonesia.</p>
                <img src="build/assets/logo_hitam.png" alt="">
                
            </div>

            <div class="card-tentang-kami">
             <p class="watermark">Keunggulan Layanan Pengrajin Kayu</p>
             <strong><h1>Menga pa Harus Dengan Kami?</h1></strong>
             <div class="Layanan-custom"
             data-aos="fade-right"
             data-aos-offset="100"
             data-aos-duration="500">
                <img src="build/assets/icon_lampu_layanan.png">
                <strong><h1>Bisa 100% custom</h1></strong>
                <p>Anda hanya perlu menghubungi kami dan memberikan gambar/spesifikasi produk kerajinan kayu yang Anda inginkan. Lebih baik lagi jika Anda memiliki gambar kerjanya.</p>
             </div>
             <div class="Layanan-garansi"
             data-aos="fade-left"
             data-aos-offset="100"
             data-aos-duration="500">
             <img src="build/assets/icon_lampu_layanan.png">
                <strong><h1>Garansi Produk</h1></strong>
                <p>Anda hanya perlu menghubungi kami dan memberikan gambar/spesifikasi produk kerajinan kayu yang Anda inginkan. Lebih baik lagi jika Anda memiliki gambar kerjanya.</p>
             </div>
             <div class="Layanan-online"
             data-aos="fade-right"
             data-aos-offset="100"
             data-aos-duration="500">
                <strong><h1></h1></strong>
                <p></p>
             </div>
             <div class="Layanan-prototype"
             data-aos="fade-left"
             data-aos-offset="100"
             data-aos-duration="500">
                <strong><h1></h1></strong>
                <p></p>
             </div>
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
            logo.src = 'build/assets/logo_coklat.png';

            // di scroll
            navLinks.forEach(link => {
                link.style.color = '#3B1A00';
            });
            
        } else {
            header.classList.remove('scrolled');
            logo.src = 'build/assets/logo_putih.png';

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
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>