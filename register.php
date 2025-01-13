<?php
    include("services/database.php");
    $register_message = " ";

    if (isset($_POST["Register"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
        if($db->query($sql)) {
            $register_message = "Register berhasil";
        } else {
            $register_message = "Register gagal";
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
        <title>Register</title>
    </head>
    <body>
    <?php include("layout/header.html") ?>
    <h3>Buat Akun Baru</h3> 
    <main>
    <form action="register.php" method="post">
        <input type="text" name="name" placeholder="Nama Lengkap" required>
        <input type="email" name="email" placeholder="E-Mail" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="Register">Register</button>
        <p>Sudah punya akun? <a href="login.php">Login</a></p>
        <p>Lupa password ? <a href="forgot.php">Forgot password</a></p>
    </main>
    <?php include("layout/footer.html") ?>
    </body>
</html>