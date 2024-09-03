<?php
    $conn = mysqli_connect("127.0.0.1","root","","reuniao");
    mysqli_set_charset($conn,"utf8");
    if (!$conn) {
        echo "ERRO!: ".mysqli_connect_error().PHP_EOL;
    }