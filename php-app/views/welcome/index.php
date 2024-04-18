<?php 

class Register extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('register/index');
    }
}
?>

<!DOCTYPE html>
<html lang="es">

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
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="man_user.png" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h2> Bienvenido, Pierrearl!</h2>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
    </body>
</html>