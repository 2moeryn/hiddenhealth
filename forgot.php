<?php
    include("services/database.php");
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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Forgot Password</title>
    </head>
    <body>
    <?php include("layout/header.html") ?>
    <h3>Lupa Password</h3>
    <main>
    <form action="forgot.php" method="post">
        <input type="email" name="E-Mail" placeholder="E-Mail" required>
        <input type="password" name="Old Password" placeholder="Old Password" required>
        <input type="password" name="New Password" placeholder="New Password" required>
        <button type="submit" name="Change Password">Change Password</button>
        <p>Sudah punya akun? <a href="login.php">Login</a></p>
    </main>
    <?php include("layout/footer.html") ?>
    </body>
</html>