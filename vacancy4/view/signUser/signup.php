<?php
require_once "../../template/header.php";
require_once "../../core/Auth.php";

$auth = new Auth();

$auth->register();
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<table>
    <thead>
    <tr>
        <th><h2>Signup</h2></th>
    </tr>

    </thead>

    <tbody>

    <form method="post" action="signup.php">

        <tr>
            <td>Username:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Password again:</td>
            <td><input type="password" name="password2"></td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="submit">
                    signup
                </button>
            </td>
        </tr>


    </form>
    </tbody>

</table>


</body>
</html>

<?php  require_once "../../template/footer.php"; ?>

