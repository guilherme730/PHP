<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias NEWS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navegação -->
    <section id="navegacao">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.html">News!:-)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notícias</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Regionais ABC
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Anhembi</a></li>
                    <li><a class="dropdown-item" href="#">Bofete</a></li>
                    <li><a class="dropdown-item" href="#">Conchas</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">São Paulo</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true">Agora!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Painel Administrativo</a>
                </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Busca" aria-label="Search"/>
                    <button class="btn btn-secondary" type="submit">Busca</button>
                </form>
            </div>
        </div>
    </nav>
    </section>
    <!-- cabeçalho -->
    <section id="cabecalho">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="../imagens/logo.png" width="100px">
            </div>
            <div class="col-md-8">
                
            </div>
            <div class="col-md-2">
                <div class=" text-center border border-1 rounded p-2 m-3">
                    <h4>Dólar Hoje</h4><p><strong><?php include ('../cotacao.php'); ?></strong></p>
                </div>
               
            </div>
        </div>
        <hr>
    </div>
    </section>
    <!-- painel -->
    <section id="painel">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 text-center">
                    <h2>Painel administrativo</h2>
                    <h3>Olá, <?php echo $_SESSION['login']; ?> </h3><a href="logout.php" class="btn btn-outline-secondary">Sair</a><br>
                </div>
                <div class="col-md-9 border-start border-1">
                    <p><a href="frmCadastrarUsuarios.php" class="btn btn-secondary">Cadastrar usuários</a> <a href="listarUsuarios.php" class="btn btn-secondary">Listar usuários</a> <a href="frmCadastrarNoticias.php" class="btn btn-secondary">Cadastrar notícias</a> <a href="listarNoticias.php" class="btn btn-secondary">Listar notícias</a></p>
                    <h2>Cadastro de Usuários</h2>
                    <div class="col">
                        <form action="inserirUsuario.php" method="post">
                            <label for="nomeCompleto" class="form-label">Nome Completo</label>
                            <input type="text" name="nome" id="nome" class="form-control"><br>
                            <label for="E-mail" class="form-label">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control"><br>
                            <label for="login" class="form-label">Login</label>
                            <input type="text" name="login" id="login" class="form-control"><br>
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" name="pwd" id="pwd" class="form-control"><br>
                            <button type="submit" name="cadastroUsuario" class="btn btn-secundary">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>



            <hr>
        </div>
    </section>
    <!-- rodapé -->
    <section id="rodape">
        <div class="container text-center">
            <p>Copyright © 2025. Orgulhosamente feito com <i class="bi bi-heart-fill"></i> na Terra do Saci.</p>
        </div>
    </section>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>