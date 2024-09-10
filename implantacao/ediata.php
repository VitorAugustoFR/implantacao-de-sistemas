<?php
include 'conecta.php';
$id = $id;
$sql = "SELECT * FROM ata WHERE id=$id";
$query = $mysqli->query($sql);
while ($dados = $query->fetch_array()) {
    $setor = $dados['setor'];
    $tipo = $dados['tipo'];
    $estatus = $dados['estatus'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <form action="ediata.php?id=<?php echo $id; ?>" method="post">
        <label class="form-label">Setor</label>
        <input class="form-control" type="text" name="setor" required value="<?php echo $setor; ?>"/>
        <br/>
        <select class="form-select" aria-label="Selecione um tipo" name="tipo">
            <option selected><?php echo $tipo?></option>
            <option value="publica">Pública</option>
            <option value="privada">Privada</option>
        </select>
        <br/>
        <select class="form-select" aria-label="Selecione um tipo" name="estatus">
            <option selected><?php echo $estatus?></option>
            <option value="Em processo de emissão">Em processo de emissão</option>
            <option value="Em processo de revisão">Em processo de revisão</option>
            <option value="Em processo de conclusão">Em processo de conclusão</option>
            <option value="Emitida">Emitida</option>
        </select>
        <input type="submit" class="btn btn-outline-success" value="ATUALIZAR" />
    </form>
</body>

</html>