<?php

use LDAP\Result;
    include("services/database.php");

    if (isset($_POST["Login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            header("Location: dashboard.php");
            echo "Selamat Datang " . $data ["name"];
            } else {
            echo"Login gagal";
            }
    }
?>
<style>
    h3 {
        text-align: center;
    }
    body {
        font-family: sanssystem-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    main {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 5px;
        border: 1px solid black;
        padding: 10px;
        border-radius: 5px;
        color: blue;
    }
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    button {
        margin-top: 10px;
        padding: 5px;
        width: 100px;
        background-color: blue;
        color: white;
        border: none;
        border-radius: 5px;


    }
    a {
        text-decoration: lang;
        color: red;
    }
    p {
        margin: 2px 0;
    }
</style>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
    <?php include("layout/header.html") ?>
    <h3>Login Akun</h3>
    <main>
    <form action="login.php" method="post">
        <input type="email" name="email" placeholder="E-Mail" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="Login">Login</button>
        <p>Belum punya akun? <a href="register.php">Register</a></p>
        <p>Lupa password ? <a href="forgot.php">Forgot password</a></p>
        </form>
    </main>
    <?php include("layout/footer.html") ?>
    </body>
</html>