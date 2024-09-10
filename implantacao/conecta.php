<?php
    $hostname = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "reuniao";
    $mysqli = mysqli_connect($hostname,$username,$password,$database);
    if (!$mysqli) {
        die("Falha na conexão:".mysqli_connect_error());
    }