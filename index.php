<?php
  require 'login-code.php';
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Isla Transfers</title>
        <!-- Enlazar tus archivos -->
        <link rel="stylesheet" href="styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://unpkg.com/mdb-ui-kit@3.11.0/css/mdb.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/mdb-ui-kit@3.11.0/js/mdb.min.js"></script>
        <script src="index.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="logo.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
                Isla Transfers
                </a>
        </nav>
        <section class="text-center text-lg-start">
            <!-- Jumbotron -->
            <div class="jumbotron">
                <div class="container py-4">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <div class="card cascading-right" style=" background: hsl(181, 70%, 88%); backdrop-filter: blur(30px);">
                                <div class="card-body p-5 shadow-5 text-center">
                                <h2 class="fw-bold mb-5 text-muted">Login</h2>
                                <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                    <label class="form-label" for="">Email</label>
                                    <input type="email" name="email" />
                                    <span class="msg-error"> <?php echo $email_err; ?></span>
                                    </div>
                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                    <label class="form-label" for="">Contraseña</label>
                                    <input type="password" name="password" />
                                    <span class="msg-error"> <?php echo $password_err; ?> </span>
                                    </div>
                                    <!-- Submit -->
                                    <input type="submit" class="btn btn-primary btn-block mb-4" value="login">
                                </form>
                                <span class="text-footer"> ¿No tienes cuenta?
                                    <a href="register.php">Regístrate</a>
                                </span>            
                            </div>  
                        </div>     
                    </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="logo.jpeg" class="w-100 rounded-4 shadow-4" alt=""/>
                </div>
            </div>   
        </section>
    


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




