<?php
include_once("php/connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

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

    <script>
        function deleteAccount() {
            if (confirm('Apakah kamu yakin ingin menghapus akun ini?')) {
                var form = document.createElement('form');
                form.method = 'POST';
                form.action = 'pages/login-register/deleteAccount.php';

                var input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'deleteAccount';
                input.value = 'true';
                form.appendChild(input);

                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>

</head>

<body>
    <nav style="color: black;">
        <a href="." class="logo">Qualy<span>Check</span></a>
        <ul style="color: black;">
            <li><a href="#home">Home</a></li>
            <li><a href="#informasi">informasi</a></li>
            <li><a href="./pages/about.php">Tentang Kami</a></li>
            <?php if (isset($_SESSION['username'])) { ?>
                <li>
                    <a href="pages/login-register/logout.php">Log out</a>
                </li>
                <li>
                    <a onclick="deleteAccount()" style="cursor: pointer;">Hapus Akun</a>
                </li>
            <?php } else { ?>
                <li>
                    <a href="./pages/login-register">Sign in / Sign up</a>
                </li>
            <?php } ?>
        </ul>
        <div class="menu-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <section id="home" class="banner">
        <div class="content">
            <h1>Ayo! bersama, kita belajar mengerti<span class="typing-text"></span></h1>
            <p>Untuk menemukan bagaimana standar kualitas dan kandungan dalam produk pertanian</p>
            <a href="./pages/projek/" class="cta">Cek sekarang!</a>
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
    <footer>
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>

        <div class="links">
            <a href="#home"></a>
            <a href="#informasi">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="credit">
            <p>Creater by <a href=".">aliezzarwijaya</a>. | &copy; 2024.</p>
        </div>
    </footer>
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