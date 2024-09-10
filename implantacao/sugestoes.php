<?php
//iniciando Sessão no banco
session_start();
if (!isset($_SESSION["user"])) {
    echo "<script language='javascript' type='text/javascript'>
        window.location.href='index.php';
        </script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ATAS</title>
    <style>
        .header {
            float: right;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <h2 class="text-center"><b>ATAS - SUGESTÕES</b></h2>
    <?php
    echo "<div class='header'>";
    $funcionarios = $_SESSION["user"];
    echo "<svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='#191970' class='bi bi-person-circle' viewBox='0 0 16 16'>
        <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0'/>
        <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1'/>
        </svg>&nbsp;<b>$funcionarios | <a href='sair.php' style='color: black; text-decoration: none;'>Sair</a></b>&nbsp;&nbsp;";
    echo "</div>";
    ?>
    <br />
    <hr />
    <nav    >
        <?php
        include 'menu.php';
        ?>
    </nav>
    <br />
    <br />
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-2 text-center">
        <div class="col">
            <div class="card mb-2 rounded-3 shadow-sw">
                <div class="card-header py-3">
                    <h3 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#6A5ACD" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                        </svg>&nbsp;&nbsp;<b>SUGESTÕES</b></h3>
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">CADASTRAR SUGESTÃO</button>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">DATA</th>
                                <th scope="col">DESCRIÇÃO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'conecta.php';
                            $pesquisa = mysqli_query($mysqli, "SELECT * FROM sugestoes");
                            $row = mysqli_num_rows($pesquisa);
                            if ($row > 0) {
                                while ($registro = $pesquisa->fetch_array()) {
                                    $id = $registro['id'];
                                    echo "<tr>";
                                    echo "<td>" . $registro['data'] . "</td>";
                                    echo "<td>" . $registro['descricao'] . "</td>";
                                    echo "<td><a href='edisugestoes.php?id=$id' data-bs-toggle='modal' data-bs-target='#exampleModal1$id' data-id='$id'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
                                        </svg></a></td>";
                                    echo "</tr>";
                                    echo "<div class='modal fade' id='exampleModal1$id' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                    <div class='modal-dialog'>
                                      <div class='modal-content'>
                                        <div class='modal-header'>
                                          <h5 class='modal-title' id='exampleModalLabel'>Edição de Sugestões</h5>
                                          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                        </div>
                                        <div class='modal-body text-start'>";
                                          include 'edisugestoes.php';
                                    echo "</div>
                                        <div class='modal-footer'>
                                          <button type='button' class='btn btn-outline-danger' data-bs-dismiss='modal'>Fechar</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>";
                                }
                            } else {
                                echo "Não existem usuários cadastrados!";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastro de sugestões</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="cadfuncionarios.php" method="post">
                        <label class="form-label">Data de emissão</label>
                        <input class="form-control" type="date" name="data" required placeholder="Coloque a data"/>
                        <label class="form-label">Descrição</label>
                        <input class="form-control" type="text" name="descricao" required placeholder="Digite a descrição"/>
                        <input type="submit" class="btn btn-outline-success" value="CADASTRAR"/>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>