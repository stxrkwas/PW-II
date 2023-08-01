<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</head>

<body class="text-bg-light">
    <div class="container text-center">

        <!-- Primeira linha -->
        <div class="row bg-primary">
            <div class="col">

                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
                    <div class="container-fluid">

                        <!-- Sistema Web -->
                        <a class="navbar-brand" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">

                                <!--Cadastrar -->
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                                </li>

                                <!-- Consultar -->
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Consultar</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Segunda linha -->
        <div class="row bg-white">
            <div class="col">
                &nbsp;
            </div>
        </div>

        <!-- Terceira linha -->
        <div class="row bg-white">

            <!-- Coluna -->
            <div class="col text-start">

                <!-- Formulário -->
                <form name="cadastro" method="POST" action="">

                    <!-- Nome -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                        <input type="nome" class="form-control" id="exampleFormControlInput1"
                            placeholder="Digite o seu nome completo">
                    </div>

                    <!-- Telefone -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Telefone:</label>
                        <input type="nome" class="form-control" id="exampleFormControlInput1"
                            placeholder="(xx) xxxxx-xxxx">
                    </div>

                    <!-- Origem -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Origem</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Celular</option>
                            <option value="Fixo">Fixo</option>
                            <option value="WhatsApp">WhatsApp</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Instagram">Instagram</option>
                            <option value="Google Meu Negócio">Google Meu Negócio</option>
                        </select>
                    </div>

                    <!-- Data do Contato -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Data do contato:</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="dd/mm/YYYY">
                    </div>

                    <!-- Text area -->
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <!-- Botão -->
                    <div class="mb-3">
                        <button type="button" class="btn btn-primary">Cadastar</button>
                    </div>

                    <!-- Fim do formulário -->
                </form>
            </div>
        </div>
    </div>

</body>

</html>