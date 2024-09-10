<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ATAS</title>
</head>
<body>
    <h1 class="text-center"><b>Ata</b></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <hr/>
    <br/>
    <br/>
    <div class="row no-gutters justify-content-center row-cols-2 row-cols-md-3 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sw">
                <div class="card-header py-3">
                    <h3 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#191970" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg>&nbsp;<b>LOGIN</b></h3>
                </div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        <label class="form-label">E-mail</label>
                        <input class="form-control" type="text" name="email" required placeholder="Digite seu E-mail"/>
                        <br/>
                        <label class="form-label">Senha</label>
                        <input class="form-control" type="password" name="senha" required placeholder="Digite a sua senha"/>
                        <br/>
                        <br/>
                        <input type="submit" class="btn btn-outline-success" value="LOGIN"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>