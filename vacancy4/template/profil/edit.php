<?php require_once "../header.php";
require_once "../../core/Auth.php";

$update_prof= new Auth();

$user = $update_prof->getUser($_SESSION['id']);

$update_prof->updateUser($_SESSION['id']);

?>



<div class="container">
    <div class="row">
        <form method="POST" action="edit.php" >
            <div class="change-about col-md-12">
                <label>Username:
                    <input type="text" name="username" value="<?= $user['username']?>">
                </label>
            </div>
            <div class="change-about col-md-12">
                <label>Email:
                    <input type="text" name="email" value="<?= $user['email']?>">
                </label>
            </div>
            <div class="change-about col-md-12">
                <label>Image:
                    <input type="file" name="image" value="<?= $user['image']?>">
                </label>
            </div>
            <div class="change-about col-md-12">
                <label>City:
                    <input type="text" name="city" value="<?= $user['city']?>">
                </label>
            </div>
            <div class="change-about col-md-12">
                <label>Age:
                    <input type="text" name="age" value="<?= $user['age']?>">
                </label>
            </div>
            <input type="submit" name="submit">
        </form>

    </div>
</div>
<?php require_once "../footer.php" ?>
