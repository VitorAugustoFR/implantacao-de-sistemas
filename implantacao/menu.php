<?php
    $matricula = $_SESSION["matricula"];
    include 'conecta.php';
    $tipo = mysqli_query($mysqli, "SELECT matricula FROM funcionarios,externo WHERE matricula='$matricula'");
    $dados = mysqli_fetch_assoc($tipo);
    $funcionario = $dados["matricula"];
    if (!$funcionario == null) {
        echo "<a href='home.php' style='color: black; text-decoration: none'>HOME</a>
        <b> | </b>
        <a href='funcionarios.php' style='color: black; text-decoration: none'>FUNCIONÁRIOS</a>
        <b> | </b>
        <a href='externos.php' style='color: black; text-decoration: none'>EXTERNOS</a>
        <b> | </b>
        <a href='atas.php' style='color: black; text-decoration: none'>ATAS</a>
        <b> | </b>
        <a href='setores.php' style='color: black; text-decoration: none'>SETORES</a>
        <b> | </b>
        <a href='sugestoes.php' style='color: black; text-decoration: none'>SUGESTÕES</a>";
    }
    else {
        echo "<a href='home.php' style='color: black; text-decoration: none'>MEUS LIVROS</a>
        <b> | </b>
        <a href='atas.php' style='color: black; text-decoration: none'>EMPRÉSTIMOS</a>;
        <b> | </b>
        <a href='sugestoes.php' style='color: black; text-decoration: none'>SUGESTÕES</a>";
    }    
