<?php
include 'conecta.php';
$id = $id;
$sql = "SELECT * FROM sugestoes WHERE id=$id";
$query = $mysqli->query($sql);
while ($dados = $query->fetch_array()) {
    $descricao = $dados['descricao'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <form action="edisugestoes.php?id=<?php echo $id; ?>" method="post">
        <label class="form-label">Descrição</label>
        <input class="form-control" type="text" name="descricao" required value="<?php echo $descricao; ?>"/>
        <input type="submit" class="btn btn-outline-success" value="ATUALIZAR" />
    </form>
</body>
</html>