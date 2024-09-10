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
    <h2 class="text-center"><b>ATAS - EXTERNOS</b></h2>
    <?php
    echo "<div class='header'>";
    $externo = $_SESSION["user"];
    echo "<svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='#191970' class='bi bi-person-circle' viewBox='0 0 16 16'>
        <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0'/>
        <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1'/>
        </svg>&nbsp;<b>$externo | <a href='sair.php' style='color: black; text-decoration: none;'>Sair</a></b>&nbsp;&nbsp;";
    echo "</div>";
    ?>
    <br />
    <hr />
    <nav>
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
                        </svg>&nbsp;&nbsp;<b>EXTERNOS</b></h3>
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">CADASTRAR EXTERNO</button>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">NOME</th>
                                <th scope="col">EMPRESA</th>
                                <th scope="col">E-MAIL</th>
                                <th scope="col">AÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'conecta.php';
                            $pesquisa = mysqli_query($mysqli, "SELECT * FROM externo");
                            $row = mysqli_num_rows($pesquisa);
                            if ($row > 0) {
                                while ($registro = $pesquisa->fetch_array()) {
                                    $nome = $registro['nome'];
                                    echo "<tr>";
                                    echo "<td>" . $registro['nome'] . "</td>";
                                    echo "<td>" . $registro['empresa'] . "</td>";
                                    echo "<td>" . $registro['email'] . "</td>";
                                    echo "<td><a href='ediexternos.php?nome=$nome' data-bs-toggle='modal' data-bs-target='#exampleModal1$nome' data-nome='$nome'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
                                    </svg></a> | <a href='excexternos.php?nome=$nome'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='red' class='bi bi-trash' viewBox='0 0 16 16'>
                                    <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
                                    <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
                                    </svg></a></td>";
                                    echo "</tr>";
                                    echo "<div class='modal fade' id='exampleModal1$nome' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                    <div class='modal-dialog'>
                                      <div class='modal-content'>
                                        <div class='modal-header'>
                                          <h5 class='modal-title' id='exampleModalLabel'>Edição de Usuários</h5>
                                          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                        </div>
                                        <div class='modal-body text-start'>";
                                          include 'ediexternos.php';
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
                    <h5 class="modal-title" id="exampleModalLabel">Cadastro de Usuários</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="cadexternos.php" method="post">
                        <label class="form-label">Nome</label>
                        <input class="form-control" type="text" name="nome" required placeholder="Digite o seu nome"/>
                        <br/>
                        <label class="form-label">Senha</label>
                        <input class="form-control" type="password" name="senha" required placeholder="Digite a sua senha"/>
                        <br/>
                        <label class="form-label">Empresa</label>
                        <input class="form-control" type="text" name="empresa" required placeholder="Digite a empresa"/>
                        <br/>
                        <label class="form-label">E-mail</label>
                        <input class="form-control" type="email" name="email" required placeholder="Digite o seu e-mail"/>
                        <br/>
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