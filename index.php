
<!DOCTYPE html>
<html>

<head>
    <title>ALO - FI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/login/index.css">
    <link rel="stylesheet" href="Assets/CSS/login/indexResponsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="Assets/Scripts/login/index.js"></script>
    <base href="/">
</head>

<body>
    <div class="container container-logIn mt-4">
        <div class="row">
            <div class="col-6 left-panel p-0 shadow-box">
                <div class="logo-container">
                    <img id="uaemex-logo" src="Assets/Images/negativo_color_vertical_2_lineas.png" alt="UAEMex Logo">
                </div>
                <div class="logo-container">
                    <img id="fi-logo" src="Assets/Images/logoadministracion.png" alt="Facultad de Ingeniería Logo">
                </div>
            </div>
            <div class="col-6 login-panel p-0 shadow-box">
                <h3 class="tit">Asistente de Ligas Oficiales - <b> FI</b></h3>
                <form class="Formlogin" action="Config/IngresarPOO.php" method="POST">
                    <div class="imgcontainer mt-4">
                        <img src="https://icones.pro/wp-content/uploads/2021/02/icone-utilisateur-gris.png" alt="Avatar" class="avatar">
                    </div>
                    <div class="containerLogin">
                        <label for="uname"><b>Usuario:</b></label>
                        <input type="text" placeholder="correo@uaemex.mx" name="user">
                        <label for="psw"><b>Contraseña:</b></label>
                        <input type="password" placeholder="Ingresa tu contraseña" name="password">
                        <div class="container text-center mt-4">
                            <div class="row">
                                <div class="col-6 p-1">
                                    <button class="btnIngresar btn w-100 " type="submit" name="Ingresar" value="Ingresar">Ingresar</button>
                                </div>
                                <div class="col-6 p-1">
                                    <a href="Views/Invitado/inicio/index.php" class="btnInvitado btn btn-success w-100" > Invitado</a>
                                </div>
                            </div>
                        </div>
                        <div class="container text-center errorSesion">
                            <?php
                            if (isset($_GET['e'])) {
                                echo "<h6 class='errorTextSesion'>
                                        <i class='bi bi-x-circle-fill mx-2'></i>
                                         Usuario/Contraseña Incorrectos
                                         </h6>";
                            }
                            if (isset($_GET['i'])) {
                                echo "<h6 class='errorTextSesion'>
                                       <i class='bi bi-exclamation-triangle-fill mx-2'></i>     
                                        Completa todos los campos
                                         </h6>";
                            }
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<!-- GABRIEL VG -->