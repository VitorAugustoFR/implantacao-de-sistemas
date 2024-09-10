<?php
    session_start();
    include 'conecta.php';
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $login = mysqli_query($mysqli,"SELECT * FROM funcionarios, externos WHERE email='$email' AND senha='$senha'") or die("Erro ao selecionar!");
    if (mysqli_num_rows($login) > 0) {
        $dados = mysqli_fetch_assoc($login);
        $_SESSION["user"] = $dados["email"];
        $_SESSION["matricula"] = $dados["matricula"];
        if (!$matricula == null){
            echo "<script>window.location.replace('home.php');</script>";
        }else{
            echo "<script>window.location.replace('atas.php');</script>";
        }
    }
    else{
        echo "<script>alert('Login ou senha incorretos!');</script>";
        echo "<script>window.location.replace('index.php');</script>";
    }
    mysqli_close($mysqli);
