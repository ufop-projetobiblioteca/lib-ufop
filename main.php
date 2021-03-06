<!DOCTYPE html>
<?php
session_start();

if (!isset($_SESSION['cpf'])) {
    $_SESSION['login_error'] = "Faça login para continuar!";
    header("Location: index.php");
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Biblioteca</title>
    <link rel="icon" href="imagem/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script defer src="js/fontawesome-all.min.js"></script>
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <!-- Begin Inspectlet Asynchronous Code -->
    <script type="text/javascript">
        (function() {
            window.__insp = window.__insp || [];
            __insp.push(['wid', 266308637]);
            var ldinsp = function() {
                if (typeof window.__inspld != "undefined") return;
                window.__inspld = 1;
                var insp = document.createElement('script');
                insp.type = 'text/javascript';
                insp.async = true;
                insp.id = "inspsync";
                insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js?wid=266308637&r=' + Math.floor(new Date().getTime() / 3600000);
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(insp, x);
            };
            setTimeout(ldinsp, 0);
        })();
    </script>
    <!-- End Inspectlet Asynchronous Code -->
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-primary">
        <a class="sidebar-toggle text-light mr-3">
            <span class="navbar-toggler-icon"></span>
        </a>
        <a class="navbar-brand" href="main.php">Biblioteca</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                        <img class="rounded-circle" src="imagem/icon.png" width="20" height="20"> &nbsp;<span class="d-none d-sm-inline">Usuário</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="meuperfil.php"><i class="fas fa-user"></i> Meu Perfil</a>
                        <a class="dropdown-item" href="sair.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="d-flex">
        <nav class="sidebar">
            <ul class="list-unstyled">
                <li>
                    <a href="#submenu2" data-toggle="collapse"> Gerência</a>
                    <ul id="submenu2" class="list-unstyled collapse">
                        <li><a href="gerenciar/usuarios.php"><i class="fas fa-users"></i> Usuários</a></li>
                        <li><a href="gerenciar/livros.php"><i class="fas fa-book"></i> Livros</a></li>
                    </ul>

                </li>
                <li><a href="gerenciar/emprestimos.php"> Empréstimos</a></li>
                <li><a href="gerenciar/reservas.php"> Reservas</a></li>
                <li><a href="sair.php"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
            </ul>
        </nav>

        <div class="content p-1">
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="mr-auto p-2">
                        <h2 class="display-3 titulo">Painel de Controle</h2>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card border-info mb-3">
                            <div class="card-body text-info">
                                <i class="fas fa-users fa-3x"></i>
                                <h6 class="card-title">Usuários</h6>
                                <h2 class="lead">147</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card border-primary mb-3">
                            <div class="card-body text-primary">
                                <i class="fas fa-file fa-3x"></i>
                                <h6 class="card-title">Empréstimos</h6>
                                <h2 class="lead">63</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card border-secondary mb-3">
                            <div class="card-body text-secondary">
                                <i class="fas fa-eye fa-3x"></i>
                                <h6 class="card-title">Livros</h6>
                                <h2 class="lead">648</h2>
                            </div>
                        </div>
                    </div>
                    <!---<div class="col-lg-3 col-sm-6">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <i class="fas fa-comments fa-3x"></i>
                                <h6 class="card-title">Comentários</h6>
                                <h2 class="lead">17</h2>
                            </div>
                        </div>
                    </div>--->
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>