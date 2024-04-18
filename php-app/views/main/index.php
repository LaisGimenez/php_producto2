

<!DOCTYPE html>
<html lang="en">
<body>
    <?php require 'views/header.php'; ?>
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
                                    <a href="/register">Regístrate</a>
                                </span>            
                            </div>  
                        </div>     
                    </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="/public/img/logo.jpeg" class="w-100 rounded-4 shadow-4" alt=""/>
                </div>
            </div>   
        </section>
    <?php require 'views/footer.php'; ?>
</body>
</html>