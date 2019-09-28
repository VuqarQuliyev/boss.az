<?php
include "../../template/header.php";

require_once '../../core/Auth.php';

$auth = new Auth();

$auth->login();

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
<div class="container contain-login">
    <table>
        <thead>
        <tr>
            <th><h2>Login</h2></th>
        </tr>
        </thead>


        <tbody>
        <form method="post" action="login.php">
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username"></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit" value="submit">
                        login
                    </button>
                    <a href="signup.php">signup</a>
                </td>
            </tr>
        </form>
        </tbody>


    </table>
</div>

<?php
require_once "../../template/footer.php";
?>

</body>
</html>

