<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM externos WHERE id=$id";
    if (mysqli_query($mysqli, $sql)) {
        echo "<script language='javascript' type='text/javascript'>
            window.location.href='externos.php';
            </script>";
    }
    mysqli_close($mysqli);