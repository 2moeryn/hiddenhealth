<?php
    include("services/database.php");

?>
<style>
    title {
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
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    main {
        text-align: center;
        margin-top: 50px;
    }
    p {
        margin: 10px 0;
    }
    a {
        color: #007BFF;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
</style>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hidden Heatlh</title>
    </head>
    <body>
    <?php include("layout/header.html") ?>
    <main>
        <p> Selamat datang di website kami</p>
        <p> Silahkan login <a href="login.php">Login</a></p>
        <p> Belum punya akun? <a href="register.php">Register</a></p>
    </main>
    <?php include("layout/footer.html") ?>
    </body>
</html>