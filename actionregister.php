<?php

session_start();

include "config.php";

$email = $_POST['email'];
$username = $_POST["username"];
$password = md5($_POST["password"]);

if (!empty($email) and !empty($username) and !empty($password)) {
    $query = mysqli_query($connect, "SELECT * FROM users WHERE USERNAME = '$username' AND PASSWORD = '$password'");
    $result = mysqli_num_rows($query);
    if($result < 1) {
        $sql = "insert into users (email, username, password) values ('$email', '$username', '$password')";
        $quertz = mysqli_query($connect, $sql);
        if($quertz) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['status'] = 'register';
            header('location:./app.js');
            exit();
        } else {
            $_SESSION['error'] = "Tidak Valid!";
            header('location:./register.php?app=gagal');
            exit();
        }
    } elseif ($result > 0) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['status'] = 'login';
        header('location:./app.js');
        exit();
    } else {
        $_SESSION['error'] = "Tidak Valid!";
        header('location:./register.php?app=gagal');
        exit();
    }
} else {
    $_SESSION['error'] = "Email / Username / Password tidak boleh kosong!";
    header('location:./register.php?app=error');
    exit();
}

?>