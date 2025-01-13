<?php

$hostname = "127.0.0.1:4306";
$username = "root";
$password = "";
$database = "dbuser";

$db = mysqli_connect($hostname, $username, $password, $database);

if($db->connect_error) {
    echo "Connection failed";
    die("error");
}

?>