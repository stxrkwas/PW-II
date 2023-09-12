<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Projeto web</title>
</head>
<body class="text-bg-light">
    <div class="overflow-x-auto">
    <div class="container text-center">
        <div class="row bg-primary">
            <div class="col">
                 <nav class="navbar navbar-expand-lg bg-primary"  data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">SISTEMA WEB</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="consultar.php">Consultar</a>
                    </li>
                  </ul>
                </div>
                </div>
                </nav>
            </div>
        </div>
        <div class="row bg-white">
            <div class="col">
                 &nbsp;
            </div>
        </div>
        <div class="row bg-white">
           <div class="col text-start">
            <form name="cadastro" method="POST" action="">    
            <p class="fs-2">CONSULTA - CLIENTE</p>
            <table class="table">
                 <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>(11) 98255-6633</td>
                        <td>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary btn-sm " type="button">Excluir</button>
                            <button class="btn btn-primary btn-sm" type="button">Editar</button>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>(11)2566-5533</td>
                        <td>
                        <div class="d-grid gap-2 d-md-block ">
                            <button class="btn btn-primary btn-sm " type="button">Excluir</button>
                            <button class="btn btn-primary btn-sm" type="button">Editar</button>
                        </div>
                        </td>
                    </tr>        
                </tbody>
                    
            </table>
            </form>
            </div>
         </div>
      </div>
    </div>
</body>
</html>


