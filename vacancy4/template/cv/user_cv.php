<?php
require_once "../header.php";
require_once "../../core/Auth.php";
$user_cv = new Auth();

$userCv = $user_cv->getUserCv($_SESSION['id']);
?>

<div class="container">
    <div class="row">
        <div class="user-info col-md-12">
            <label>Name:</label>
            <p><?= $userCv['name'] ?></p>
        </div>
        <div class="user-info col-md-12">
            <label>Surname:</label>
            <p><?= $userCv['surname'] ?></p>
        </div>
        <div class="user-info col-md-12">
            <label>Father Name:</label>
            <p><?= $userCv['father_name'] ?></p>
        </div>
        <div class="user-info col-md-12">
            <label>Gender:</label>
            <p><?= $userCv['gender'] ?></p>
        </div>
        <div class="user-info col-md-12">
            <label>Age:</label>
            <p><?= $userCv['age'] ?></p>
        </div>
        <div class="user-info col-md-12">
            <label>Image:</label>
            <p><?= $userCv['image'] ?></p>
        </div>
        <div class="user-info col-md-12">
            <label>Education:</label>
            <p><?= $userCv['education'] ?></p>
        </div>
        <div class="user-info col-md-12">
            <label>More Education:</label>
            <p><?= $userCv['more_education'] ?></p>
        </div>
        <div class="user-info col-md-12">
            <label>Category:</label>
            <p><?= $userCv['category'] ?></p>
        </div>
        <div class="user-info col-md-12">
            <label>Task:</label>
            <p><?= $userCv['task'] ?></p>
        </div>
        <div class="user-info col-md-12">
            <label>City:</label>
            <p><?= $userCv['city'] ?></p>
        </div>
        <div class="user-info col-md-12">
            <label>Min salary:</label>
            <p><?= $userCv['min_salary'] ?> AZN</p>
        </div>
        <div class="user-info col-md-12">
            <label>Tel:</label>
            <p><?= $userCv['tel'] ?></p>
        </div>
        <div class="user-info col-md-12">
            <label>Email:</label>
            <p><?= $userCv['email'] ?></p>
        </div>

    </div>
</div>














<?php
require_once  "../footer.php";
?>
