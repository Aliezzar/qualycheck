<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../login-register');
    exit;
}

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

<body style="background-color: #000;">
    <!-- Navbar -->
     <?php include_once $_SERVER['DOCUMENT_ROOT'].'/qualycheck/components/navbar.php'; ?>
    <!-- navbar end -->

    <section></section>
    <h1>Selamat Datang</h1>
</body>

</html>