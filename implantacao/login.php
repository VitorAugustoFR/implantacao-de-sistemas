<?php
    session_start();
    include 'conecta.php';
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $login = mysqli_query($mysqli,"SELECT * FROM funcionarios WHERE email='$email' AND senha='$senha'") or die("Erro ao selecionar!");
    if (mysqli_num_rows($login) > 0) {
        $dados = mysqli_fetch_assoc($login);
        $_SESSION["user"] = $dados["email"];
        $_SESSION["matricula"] = $dados["matricula"];
        if (!$dados == null){
            echo "<script>window.location.replace('home.php');</script>";
        }else if($dados == null){
            $loginExterno = mysqli_query($mysqli,"SELECT * FROM externo WHERE email='$email' AND senha='$senha'") or die("Erro ao selecionar!");
            echo "<script>window.location.replace('atas.php');</script>";
        }
    }
    else{
        echo "<script>alert('Login ou senha incorretos!');</script>";
        echo "<script>window.location.replace('index.php');</script>";
    }
    mysqli_close($mysqli);
