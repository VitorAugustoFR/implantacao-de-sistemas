<?php
    session_start();
    include 'conecta.php';
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $empresa = $_POST['empresa'];
    $login = mysqli_query($mysqli,"SELECT * FROM usuarios WHERE nome='$nome' AND matricula='$matricula' OR empresa='$empresa'") or die("Erro ao selecionar!");
    if (mysqli_num_rows($login) > 0) {
        $dados = mysqli_fetch_assoc($login);
        $_SESSION["user"] = $dados["nome"];
        $_SESSION["matricula"] = $dados["matricula"];
        $tipo = $dados['tipo'];
        if (!$matricula == null){
            echo "<script>window.location.replace('biblioteca.php');</script>";
        }else{
            echo "<script>window.location.replace('emprestimo.php');</script>";
        }
    }
    else{
        echo "<script>alert('Login ou senha incorretos!');</script>";
        echo "<script>window.location.replace('index.php');</script>";
    }
    mysqli_close($mysqli);
