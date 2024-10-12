<?php
session_start();

include "./config.php";

$username = $_POST["username"];
$password = md5($_POST["password"]);

if (!empty($username) && !empty($password)) {
    $query = mysqli_query($connect, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    $result = mysqli_num_rows($query);
    if ($result > 0) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['status'] = 'login';
        header('location:./app.js');
        exit();
    } elseif('username' != $username and 'password' != $password){
        $_SESSION['error'] = "Username atau password salah";
        header('location:./login.php?app=gagal(username/password_salah)');
        exit();
    } else {
        $_SESSION['error'] = "Username belum terdaftar";
        header('location:./login.php?app=gagal(username_belum_terdaftar)');
        exit();
    }
} else {
    $_SESSION['error'] = 'Username atau password Tidak boleh kosong!';
    header('location:./login.php?app=error(username/password_kosong)');
    exit();
}
?>