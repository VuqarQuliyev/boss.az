<?php
/**
 * Created by PhpStorm.
 * User: Vuqar
 * Date: 10.08.2019
 * Time: 20:25
 */

require_once 'Base.php';

class Auth extends Base
{

    public function login()
    {

        if ($_POST) {
//            session_start();
            $username = trim($_POST['username']);
            $password = md5(trim($_POST['password']));

            $user = $this->selectOne("SELECT * FROM user WHERE username = '$username' AND password = '$password' limit 1");

//            echo gettype($user);
//            print_r($_POST);

            if (count($user)) {

                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $username;
                header('location:../../template/site/index.php');

            } else {
                echo "you must be signup";
            }
        }
    }

    public function register()
    {
        if ($_POST) {
            session_start();
            $username = trim($_POST['username']);
            $email = trim($_POST['email']);
            $password = md5(trim($_POST['password']));
            $password2 = md5(trim($_POST['password2']));


            if (!empty($username) && !empty($email) && !empty($password) && $password == $password2) {

                $sql_insert = "INSERT INTO user (username, email,password) VALUES ('$username','$email','$password')";
                $sql = $this->db->prepare($sql_insert);
                $sql->execute();
                $_SESSION['username'] = $username;
                $sql_select = $this->selectOne("SELECT id FROM user WHERE username = '$username' AND password = '$password'");
//                print_r($sql_select);exit();
                $_SESSION['id'] = $sql_select['id'];

                header('location:../../template/site/index.php');

            }
            if ($password != $password2) {
                echo "passwords don't same";
            }
            if (empty($username) || empty($email)) {
                echo "write something";
            }

        }

    }

    public function getUser($id)
    {

        return $this->selectOne("SELECT * FROM `user` WHERE id= '$id'");

    }

    public function getUserCv($id)
    {

        $cv_user = "SELECT * FROM `user_cv` WHERE user_id= '$id'";
        $aboutUserCv = $this->db->prepare($cv_user);
        $aboutUserCv->execute();
        $datas = $aboutUserCv->fetch(PDO::FETCH_ASSOC);

        if ($datas['user_id'] == $id) {
            return $datas;
        } else {
            echo "Nothing to find about your cv";
        }
//       print_r($datas['user_id']);

    }


    public function userLogout()
    {
        session_destroy();
        header('location:login.php');
    }

    public function updateUser($id)
    {

        if (isset($_POST['submit'])) {

            try {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $city = $_POST['city'];
                $image = $_POST['image'];
                $age = $_POST['age'];
                $_SESSION['username'] = $_POST['username'];

                $sqlUpdate = "UPDATE `user` SET `username`= :username, `email`= :email, `image`= :image,`city`= :city, `age` = :age WHERE `id`= :id ";
//                $sqlUpdate = "UPDATE `user` SET  username= '$username', email = '$email', city = '$city', age = $age WHERE id = $id";
                $query = $this->db->prepare($sqlUpdate);

                $query->bindParam(':username', $username, PDO::PARAM_STR);
                $query->bindParam(':email', $email, PDO::PARAM_STR);
                $query->bindParam(':image', $image, PDO::PARAM_STR);
                $query->bindParam(':city', $city, PDO::PARAM_STR);
                $query->bindParam(':age', $age, PDO::PARAM_INT);
                $query->bindParam(':id', $id, PDO::PARAM_INT);

//                print_r($query); exit;
                $query->execute();
                header('location:../profil/index.php/' . $_SESSION['id'] . '');
//                print_r($_POST);
//                print_r($x);exit();
            } catch (\Throwable $e) {
                echo $e->getMessage();
                exit;
            }
        }


    }

    public function insertUser()

    {
        if (isset($_POST['submit'])) {
            $session_id = $_SESSION['id'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $fathername = $_POST['father_name'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $image = $_POST['image'];
            $education = $_POST['education'];
            $moreeducation = $_POST['more_education'];
            $category = $_POST['category'];
            $task = $_POST['task'];
            $city = $_POST['city'];
            $salary = $_POST['salary'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];

            $insert = "INSERT INTO user_cv (user_id, name, surname, father_name, gender, age, 
                                          image, education, more_education, category, task, city, 
                                          min_salary, tel, email) VALUES ( '$session_id','$name','$surname','$fathername','$gender',
                                          '$age','$image','$education','$moreeducation','$category','$task','$city','$salary','$tel','$email')";

            $insert_val = $this->db->prepare($insert);
            $insert_val->execute();
            header('location:create.php');
        }


    }

//    public function strln($a)
//    {
//        $e = 0;
//        for ($n = 0; $n <= 1000; $n++) {
//            if (isset($a[$n])) {
//                $e++;
//            }
//
//        }
//        print_r($e);
//
//
//    }

//    public function str($s)
//    {
////        $s = 'string';
//        $i=0;
//        while ($s[$i] != '') {
//            $i++;
//        }
//        print $i;
//    }


//    public function fact($n)
//    {
//        if ($n === 0)
//        {
//// our base case
//            return 1;
//        }
//        else
//        {
//            return $n * fact($n-1); // <--calling itself.
//        }
//    }

}