<?php
    session_start();
    if (!isset($_SESSION["user"])) {
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='index.php';
        </script>";
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BIBLIOTECA - TDS04</title>
        <style>
            .header { float: right;}
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    <h2 class="text-center"><b>ATAS</b></h2>
    <?php
        echo "<div class='header'>";
        $usuario = $_SESSION["user"];
        echo "<svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='#191970' class='bi bi-person-circle' viewBox='0 0 16 16'>
        <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0'/>
        <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1'/>
        </svg>&nbsp;<b>$usuario | <a href='sair.php' style='color: black; text-decoration: none;'>Sair</a></b>&nbsp;&nbsp;";   
        echo "</div>";
    ?>
    <br/>
    <hr/>
    <nav>
        <?php
            include 'menu.php';
        ?>
    </nav>
    <br/>
    <br/>
    </body>
</html>