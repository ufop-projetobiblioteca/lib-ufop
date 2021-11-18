<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SysLib</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ url('assets/css/styles.css') }}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Home
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-shield"></i></div>
                            Gerenciar
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('usuarios.index')}}">Usuários</a>
                                <a class="nav-link" href="{{route('livros.index')}}"> Livros</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="{{route('emprestimos.index')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-reader"></i></div>
                            Empréstimos
                        </a>
                        <a class="nav-link" href="{{route('reservas.index')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-lock"></i></div>
                            Reservas
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @if(session('mensagem'))

                    <div class="alert alert-success">
                        {{session('mensagem')}}
                    </div>

                    @endif
                    @yield('content')
                </div>
            </main>
            <!-- <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; SysLib 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                        <img src="D:\Laravel\lib-ufop\resources\images\icea.png" width=12 height=12>
                    </div>
                </div>
            </footer> -->

            <footer class="footer mt-auto py-3 bg-light">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col">
                            <a href="https://www.google.com">
                                <img border="0" src="/assets/img/icea.png" class="img-fluid" alt="iceaLogo" width="100" height="100">
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://www.google.com">
                                <img border="0" src="/assets/img/decsi.png" class="img-fluid" alt="decsiLogo" width="100" height="100">
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://www.google.com">
                                <img border="0" src="/assets/img/imobilis.png" class="img-fluid" alt="imobilisLogo" width="100" height="100">
                            </a>
                        </div>
                    </div>
                    <!-- <div class="footer-copyright bg-light text-center py-3">
                        <font color="black">© 2020 Copyright:</font>
                        <a href="https://www.google.com"> MDBootstrap.com</a>
                    </div> -->
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ url('assets/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ url('assets/js/datatables-simple-demo.js') }}"></script>
</body>

</html>