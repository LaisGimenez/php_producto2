<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenido</title>
        <!-- Enlazar tus archivos -->
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="index.js">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://unpkg.com/mdb-ui-kit@3.11.0/css/mdb.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/mdb-ui-kit@3.11.0/js/mdb.min.js"></script>
        <script src="index.js"></script>
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
            Isla Transfers
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active d-flex flex-column text-center" aria-current="page" href="welcome.php"><i class="fas fa-home fa-lg"></i><span class="small">Inicio</span></a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <img src="man_user.png" class="rounded-circle" height="30" alt="" loading="lazy"/>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="userprofile.php">Mi perfil</a></li>
                    <li><a class="dropdown-item" href="userbookings.php">Mis reservas</a></li>
                    <li><a class="dropdown-item" href="cerrar-sesion.php">Cerrar sesión</a></li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
        </nav>


        
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #45526e">
        <div class="container p-1 pb-0">
        <section class="">
            <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold"> Contáctanos: </h6>
            </div>
            <hr class="w-100 clearfix d-md-none" />
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <p><i class="fas fa-home mr-3"></i> Barcelona, 08040, España</p>
            </div>
            <hr class="w-100 clearfix d-md-none" />
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
            </div>
            <hr class="w-100 clearfix d-md-none" />
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            </div>
            </div>
        </section>
        <hr class="my-3">
        <section class="p-1 pt-0">
            <div class="row d-flex align-items-center">
            <div class="col-md-6 col-lg-6 text-center text-md-start">
                <div class="p-3">
                © 2024 Copyright: Isla Transfers
                </div>
            </div>
            <div class="col-md-6 col-lg-6 ml-lg-0 text-center text-md-end">
                <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-google"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-instagram"></i></a>
            </div>
            </div>
        </section>
        </div>
    </footer>
    </body>
</html>