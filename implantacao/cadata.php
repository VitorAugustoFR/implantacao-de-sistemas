<?php
    include 'conecta.php';
    $titulo = $_POST['titulo'];
    $data_emissao = $_POST['data_emissao'];
    $incio = $_POST['inicio'];
    $termino = $_POST['termino'];
    $pauta = $_POST['pauta'];
    $descricao = $_POST['descricao'];
    $palavras_chave = $_POST['palavras_chave'];
    $setor = $_POST['setor'];
    $tipo = $_POST['tipo'];
    $estatus = $_POST['estatus'];
    $query = $mysqli->query("SELECT * FROM ata WHERE pauta='$pauta' AND descicao='$descicao'");
    if (mysqli_num_rows($query) > 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Usuário já existe em nossa base de dados!');
        window.location.href='ata.php';
        </script>";
        exit();
    }
    else {
        $sql = "INSERT INTO ata(titulo,data_emissao,incio,termino,pauta,descicao,palavras_chave,setor,tipo,estatus) VALUES ('$titulo','$data_emissao','$incio','$termino','$pauta','$descicao','$palavras_chave','$setor','$tipo','$estatus')";
        if (mysqli_query($mysqli, $sql)) {
            echo "<script language='javascript' type='text/javascript'>
            window.location.href='ata.php';
            </script>";
        }
    }
    mysqli_close($mysqli);
