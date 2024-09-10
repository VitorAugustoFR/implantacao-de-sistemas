<?php
include 'conecta.php';
$matricula = $matricula;
$sql = "SELECT * FROM funcionarios WHERE matricula=$matricula";
$query = $mysqli->query($sql);
while ($dados = $query->fetch_array()) {
    $nome = $dados['nome'];
    $senha = $dados['senha'];
    $sexo = $dados['sexo'];
    $data_nascimento = $dados['data_nascimento'];
    $email = $dados['email'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <form action="edifuncionarios.php?matricula=<?php echo $matricula; ?>" method="post">
        <label class="form-label">Nome</label>
        <input class="form-control" type="text" name="nome" required value="<?php echo $nome; ?>" />
        <br />
        <label class="form-label">Senha</label>
        <input class="form-control" type="password" name="senha" required value="<?php echo $senha; ?>" />
        <br />
        <label class="form-label">Sexo</label>
        <input class="form-control" type="text" name="sexo" required value="<?php echo $sexo; ?>" />
        <br />
        <label class="form-label">Data de nascimento</label>
        <input class="form-control" type="date" name="data_nascimento" required value="<?php echo $data_nascimento; ?>" />
        <br />
        <label class="form-label">E-mail</label>
        <input class="form-control" type="email" name="email" required value="<?php echo $email; ?>" />
        <br />
        <input type="submit" class="btn btn-outline-success" value="ATUALIZAR" />
    </form>
</body>

</html>