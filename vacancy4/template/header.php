<?php
session_start();?>

<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="/vacancy4/assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/vacancy4/media/css/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Vacancy</title>
</head>
<body>
<header>
    <div class="top-head">
    </div>
    <div class="bar-container">
        <div class="container">

            <div class="bar">
                <div class="bar-i">
                    <a href="http://localhost/vacancy4/template/site/index.php">baş səhifə</a>
                </div>
                <div class="bar-i">
                    <a class="lang-switcher-ru" href="">по-русски</a>
                    <a class="lang-switcher-en" href="">in english</a>
                </div>

                <a class="bar-i marker" href="/">Saytda reklam</a>
                <div class="buttons">
                    <?php if (isset($_SESSION['username'])): ?>
                        <a class="login">
                            <img src="../../media/image/user-img.jpg" style="width: 24px;">
                            <a href="/vacancy4/template/profil/index.php?id=<?= $_SESSION['id']?>"><?= $_SESSION['username'] ?></a>
                        </a>
                        <div class="logout-user">
                            <a href="/vacancy4/view/signUser/logout.php">Logout</a>
                        </div>
                    <?php else : ?>
                        <a class="login" href="../../view/signUser/login.php">
                            <img src="../../media/image/user-img.jpg" style="width: 24px;">
                            Giriş
                        </a>
                    <?php endif; ?>

                </div>

                <!--                    <div class="current-site">-->
                <!--                    <span class="site-name">-->
                <!--                        vacancy.az-->
                <!--                    </span>-->
                <!---->
                <!--                        <div class="other-site">-->
                <!--                            <a class="others-site-i" target="_blank" href="https://boss.az">boss.az</a>-->
                <!--                            <a class="others-site-i" target="_blank" href="https://bina.az">bina.az</a>-->
                <!--                        </div>-->
                <!--                    </div>-->

            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <a class="logo">boss.az</a>
            <div class="nav">
                <div class="nav-i">
                    <a class="nav-i-link" href="/">İş elanları</a>
                </div>
                <div class="nav-i">
                    <a class="nav-i-link" href="/">İş axtaranlar</a>
                </div>
            </div>
            <div class="nav-secondary">
                <div class="nav-i">
                    <a class="nav-i-link" href="/">Haqqimizda</a>
                </div>
                <div class="nav-i">
                    <a class="btn btn-large" href="../../cv/create.php">Elan yerləşdirin</a>
                </div>
            </div>
        </div>
    </div>

</header>
</body>
</html>