<?php
    include 'conecta.php';
    $matricula = $_GET['matricula'];
    $sql = "DELETE FROM funcionarios WHERE matricula=$matricula";
    if (mysqli_query($mysqli, $sql)) {
        echo "<script language='javascript' type='text/javascript'>
            window.location.href='funcionarios.php';
            </script>";
    }
    mysqli_close($mysqli);