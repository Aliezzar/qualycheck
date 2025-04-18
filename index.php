<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/qualycheck/components/connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QualyCheck</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
     <?php include_once $_SERVER['DOCUMENT_ROOT'].'/qualycheck/components/navbar.php';?>

    <section id="home" class="banner">
        <div class="content">
            <h1>Ayo! bersama, kita belajar mengerti<span class="typing-text"></span></h1>
            <p>Untuk menemukan bagaimana standar kualitas dan kandungan dalam produk pertanian</p>
            <a href="./pages/projek/index.php" class="cta">Cek sekarang!</a>
        </div>
    </section>

    <!-- informasi -->
    <section id="informasi" class="informasi">
        <h2>
            Kenalan Sama <span>Produk Pertanian</span> Yuk!
        </h2>

        <div class="row">
            <div class="informasi-img">
                <img src="img/produk-pertanian.png" alt="Produk Pertanian">
            </div>
            <div class="content">
                <h3>Apa itu Produk Pertanian?</h3>
                <p>
                    Produk pertanian adalah hasil dari bercocok tanam dan peternakan untuk memenuhi kebutuhan manusia,
                    seperti padi, jagung, kopi, dan susu. Produk ini penting untuk ketahanan pangan dan perekonomian.
                </p>
                <a href="pages/fakta">
                    <button>Pelajari Lebih Lanjut</button>
                </a>
            </div>
        </div>

        <div class="funfact">
            <div class="funfact-item">
                <i class="fa-solid fa-leaf"></i>
                <p><span>Brokoli dan vitamin C</span><br>Faktanya, brokoli bahkan mengandung lebih banyak vitamin C per
                    gram dibandingkan jeruk.</p>
            </div>
            <div class="funfact-item">
                <i class="fa-solid fa-wheat-awn"></i>
                <p><span>Padi</span><br>Padi adalah makanan pokok bagi lebih dari setengah populasi dunia, dengan Asia
                    sebagai penghasil utama.</p>
            </div>
            <div class="funfact-item">
                <i class="fa-solid fa-tree"></i>
                <p><span>FunFact</span><br>Menanam pohon buah-buahan seperti mangga dan alpukat membantu menyerap karbon
                    hingga 48 pound per tahun.</p>
            </div>
        </div>
    </section>
    <!-- informasi end -->

    <!-- diagram fact -->
    <section class="data">
        <div class="row">
            <div class="content">
                <h3>Diagram Kondisi Mutu Pangan</h3>
                <p>
                    Di balik upaya memenuhi kebutuhan pangan nasional, masih ada kenyataan yang menyedihkan. Sebanyak 3%
                    masyarakat berada dalam kondisi rawan kesehatan pangan, dan 3% lainnya bahkan sangat rawan. Angka
                    ini mengingatkan kita bahwa masih ada yang berjuang untuk mendapatkan akses terhadap makanan yang
                    sehat dan bergizi. Ketahanan pangan bukan hanya soal angka, tetapi juga tentang kualitas hidup
                    setiap individu.
                </p>
            </div>
            <div class="diagram-parent">
                <canvas class="diagram" id="diagram"></canvas>
            </div>
        </div>
    </section>
    <!-- diagram fact end -->

    <!-- Footer -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/qualycheck/components/footer.php';?>
    <!-- Footer end -->



    <!-- Typing effect -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <!-- untuk diagram -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="javascript/chart.js"></script>
    <!-- js -->
    <script src="javascript/script.js"></script>
</body>

</html>