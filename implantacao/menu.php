<?php
    $matricula = $_SESSION["matricula"];
    include 'conecta.php';
    $tipo = mysqli_query($mysqli, "SELECT matricula FROM funcionarios,externo WHERE matricula='$matricula'");
    $dados = mysqli_fetch_assoc($tipo);
    $funcionario = $dados["matricula"];
    if (!$funcionario == null) {
        echo "<a href='biblioteca.php' style='color: black; text-decoration: none'>HOME</a>
        <b> | </b>
        <a href='livro.php' style='color: black; text-decoration: none'>LIVROS</a>
        <b> | </b>
        <a href='emprestimo.php' style='color: black; text-decoration: none'>EMPRÉSTIMOS</a>
        <b> | </b>
        <a href='emprestados.php' style='color: black; text-decoration: none'>EMPRESTADOS</a>
        <b> | </b>
        <a href='usuarios.php' style='color: black; text-decoration: none'>USUÁRIOS</a>";
    }
    else {
        echo "<a href='livrosemprestados.php' style='color: black; text-decoration: none'>MEUS LIVROS</a>
        <b> | </b>
        <a href='emprestimo.php' style='color: black; text-decoration: none'>EMPRÉSTIMOS</a>";
    }    
