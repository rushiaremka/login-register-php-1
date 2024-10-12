<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <h1 class="title">
            Form Login
        </h1>
        <span class="bawah"></span>
        <span class="atas"></span>
        <form action="actionlogin.php" method="post">
            <div class="username">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan Nama">
            </div>
            <div class="password">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password">
            </div>
            <p>Belum punya akun? <a href="register.php">Register</a></p>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>