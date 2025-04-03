<!DOCTYPE html>
<html lang="en">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QualyCheck</title>
    <link rel="stylesheet" href="/qualycheck/css/navbar.css">

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

    <nav style="color: black;">
        <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/qualycheck/index.php" class="logo">Qualy<span>Check</span></a>
        <ul style="color: black;">
            <li><a href="http://<?= $_SERVER['HTTP_HOST']; ?>/qualycheck/#home">Home</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST']; ?>/qualycheck/#informasi">Informasi</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST']; ?>/qualycheck/pages/about.php">Tentang Kami</a></li>
            <?php if (isset($_SESSION['username'])) { ?>
                <li>
                    <div class="container">
                        <div class="dropdown" id="dropdown-content">
                            <a class="dropdown__button" id="dropdown-button">
                                <i class="ri-user-3-line dropdown__icon"></i>
                                <span class="dropdown__name"><?= $_SESSION['username'] ?></span>
                                <div class="dropdown__icons">
                                    <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                                    <i class="ri-close-line dropdown__close"></i>
                                </div>
                            </a>

                            <ul class="dropdown__menu">
                                <li class="dropdown__item" onclick="location.href='http://<?= $_SERVER["HTTP_HOST"]; ?>/qualycheck/pages/profil-user/index.php?uid=<?= htmlspecialchars(hash("sha256",$_SESSION['UserID'])) ?>'">
                                    <i class="ri-user-3-line dropdown__icon"></i>
                                    <span class="dropdown__name">Profil</span>
                                </li>

                                <li class="dropdown__item" onclick="location.href='http://<?= $_SERVER['HTTP_HOST']; ?>/qualycheck/pages/login-register/logout.php'">
                                    <i class="ri-logout-box-line dropdown__icon"></i>
                                    <span class="dropdown__name">Log out</span>
                                </li>

                                <li class="dropdown__item" style="cursor: pointer;" onclick="deleteAccount()">
                                    <i class="ri-delete-bin-line dropdown__icon"></i>
                                    <span class="dropdown__name">Hapus Akun</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <script>
                        /*=============== DROPDOWN JS ===============*/
                        const showDropdown = (content, button) => {
                            const dropdownContent = document.getElementById(content),
                                dropdownButton = document.getElementById(button);

                            dropdownButton.addEventListener("click", () => {
                                // We add the show-dropdown class, so that the menu is displayed
                                dropdownContent.classList.toggle("show-dropdown");
                            });
                        };

                        showDropdown("dropdown-content", "dropdown-button");
                    </script>
                </li>
            <?php } else { ?>
                <li>
                    <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/qualycheck/pages/login-register">Sign in / Sign up</a>
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

    <script src="/qualycheck/javascript/navbar.js"></script>