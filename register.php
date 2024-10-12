<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
        <span class="atas"></span>
        <span class="bawah"></span>
        <h1 class="title">
            Form Register
        </h1>
        <form action="actionregister.php" method='post'>
            <div class="username">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan Nama">
            </div>
            <div class="email">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan Email">
            </div>
            <div class="password">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password">
            </div>  

            <p>Sudah punya akun? <a href="login.php">Login</a></p>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>