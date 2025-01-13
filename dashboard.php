<style>
    body {
        font-family: sanssystem-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif, sans-serif;
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
</style>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
    </head>
    <body>
    <?php include("layout/header.html") ?>
    <h1>Dashboard</h1>
    <main>
        <p> Selamat datang di dashboard</p>
        <p> <a href="index.php">Logout</a></p>
    </main>
    <?php include("layout/footer.html") ?>
    </body>
</html>