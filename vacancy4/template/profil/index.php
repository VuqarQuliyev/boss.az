<?php

include "../../../signUser/db.php";
require_once "../header.php";
require_once "../../core/Auth.php";
$auth = new Auth();

$about = $auth->getUser($_SESSION['id']);

//$auth->strln('vuqarqw');
//$auth->str('vuqarqw');

?>



<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../media/css/style.css"/>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container contain">
    <div class="row">
        <div class="user-image col-md-4">
            <img src="../../media/image/<?=$about['image']?>">
        </div>
        <div class="user-title col-md-5">
            <div class="row">
                <div class="col-md-6">
                    <label>Name:</label>
                </div>
                <div class="col-md-6">
                    <p><?= $about['username']?></p>
                </div><div class="col-md-6">
                    <label>Email:</label>
                </div>
                <div class="col-md-6">
                    <p><?= $about['email']?></p>
                </div>
                <div class="col-md-6">
                    <label>Country</label>
                </div>
                <div class="col-md-6">
                    <p><?= $about['city']?></p>
                </div>
                <div class="col-md-6">
                    <p>Age</p>
                </div>
                <div class="col-md-6">
                    <p><?= $about['age']?></p>
                </div>
                <div class="cv-buttons" style="display: inherit;">
                    <div class="user-cv-create col-md-6">
                        <a class="" href="/vacancy4/template/cv/create.php">CV yaratmaq </a>
                    </div>
                    <div class="user-cv col-md-6">
                        <a class="" href="/vacancy4/template/cv/user_cv.php">CV-lərim</a>
                    </div>
                    <div class="col-md-6" >
                        <a  class="btn profil-edit " href="/vacancy4/template/profil/edit.php?id=<?= $_SESSION['id']?>">edit profil</a>
                    </div>
                </div>


            </div>
        </div>


    </div>
<!--    <div class="row">-->
<!--        <div class="user-cv-create offset-3 col-md-6">-->
<!--            <p>CV yaratmaq</p>-->
<!--        </div>-->
<!--        <div class="user-cv col-md-3">-->
<!--            <p>CV-lərim</p>-->
<!--        </div>-->
<!--    </div>-->
</div>
</body>
</html>

<?php  require_once "../footer.php"?>
