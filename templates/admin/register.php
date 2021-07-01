<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>NutresPeru</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
        <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="../../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="../../assets/css/main.min.css" rel="stylesheet">
        <link href="../../assets/css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="login-page" background="../../assets/images/fondo5.jpg">
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
              <span class='sr-only'>Cargando...</span>
            </div>
          </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-4">
                    <div class="card login-box-container">
                        <div class="card-body">
                            <div class="authent-logo">
                                <img src="../../assets/images/logonutresperu.jpg" width="110px" alt="">
                            </div>
                            <div class="authent-text">
                                <p>Bienvenido a NutresPeru</p>
                                <p>Ingrese tus datos</p>
                            </div>

                            <form>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="txtApellido" placeholder="Fullname">
                                        <label for="floatingInput">Apellido</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="txtNombre" placeholder="Fullname">
                                        <label for="floatingInput">Nombre</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="txtDni" placeholder="Fullname">
                                        <label for="floatingInput">Dni</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="txtCorreo" placeholder="name@example.com">
                                        <label for="floatingInput">Correo Electronico</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="txtCelular" placeholder="Fullname">
                                        <label for="floatingInput">Celular</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="txtSexo" placeholder="name@example.com">
                                        <label for="floatingInput">Sexo</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="txtContrasena" placeholder="Password">
                                        <label for="floatingPassword">Contraseña</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="txtContrasena" placeholder="Confirm Password">
                                        <label for="floatingPassword">Confirmar Contraseña</label>
                                      </div>
                                </div>
                                <!--<div class="mb-3 form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">I agree the <a href="#">Terms and Conditions</a></label>
                                </div>
                                -->
                                <div class="d-grid">
                                <button type="submit" class="btn btn-primary m-b-xs">Registrar</button>
                            </div>
                              </form>
                              <div class="authent-login">
                                  <p>¿Ya tienes una cuenta? <a href="login.php">Iniciar Sesión</a></p>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        
        <!-- Javascripts -->
        <script src="../../assets/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="../../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
        <script src="../../assets/js/main.min.js"></script>
    </body>
</html>