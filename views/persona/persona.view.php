<?php @session_start();
include_once "../../config/env.php"; ?>

<?php if (isset($_SESSION["Id_Estudiante"])) :  ?>

    <?php if ($_SESSION["Id_Estudiante"] == 16882523) : ?>
        <?php header("Location: ./draw.view.php"); ?>

    <?php else : ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="shortcut icon" href="../../public/img/GamingDeveloperJ.png" type="image/x-icon">
            <link rel="stylesheet" href="../../vendor/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="../../public/css/login.css">
            <link rel="stylesheet" href="../../vendor/sweetalert/css/sweetalert2.min.css">
            <title>Inicio de Sesión</title>
        </head>

        <body>

            <div class="mt-5 container">
                <div class="justify-content-center row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="card card-login">
                            <div class="card-heading">
                                <div class="justify-content-center row">
                                    <div class="col-12">
                                        <p class="active" id="login-form-link">6<sup>ta</sup> Semana de la Ingeniería Creativa</p>
                                    </div>
                                    <div class="col-6">
                                        <img src="public/img/GamingDeveloperJ.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form id="personaForm" method="post" autocomplete="off">
                                            <div class="form-group">
                                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="cedula" id="cedula" class="form-control" placeholder="Cedúla">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="correo" id="correo" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="celular" id="celular" class="form-control" placeholder="celular">
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="submit" class="form-control btn btn-login" value="crear persona">
                                                    </div>
                                                    <div class="col-6">
                                                        <button type="button" id="salir" class="text-white btn" style="background: #428BCA;">
                                                            <i class="fa fa-sign-out-alt fa">Salir</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script src="../../vendor/jquery/jquery-3.3.1.min.js"></script>
            <script src="../../vendor/sweetalert/js/sweetalert2.min.js"></script>
            <script src="../../public/js/app.js"></script>
            <script src="../../public/js/login.js"></script>
        </body>

        </html>
    <?php endif; ?>

    <!-- SE REDIRIGE AL LOGIN SI NO HA INICIADO SESIÓN -->
<?php else : header("Location: ../../"); ?>
<?php endif; ?>