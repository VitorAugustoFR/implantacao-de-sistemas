<?php
    include 'conecta.php';
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $query = $mysqli->query("SELECT * FROM funcionarios WHERE nome='$nome' AND email='$email'");
    if (mysqli_num_rows($query) > 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Usuário já existe em nossa base de dados!');
        window.location.href='funcionarios.php';
        </script>";
        exit();
    }
    else {
        $sql = "INSERT INTO funcionarios(nome,senha,sexo,data_nascimento,email) VALUES ('$nome','$senha','$sexo','$data_nascimento','$email')";
        if (mysqli_query($mysqli, $sql)) {
            echo "<script language='javascript' type='text/javascript'>
            window.location.href='funcionarios.php';
            </script>";
        }
    }
    mysqli_close($mysqli);
