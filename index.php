<!DOCTYPE html>
<html>

<head>
    <title>ALO - FI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Assets/CSS/login.css">
    <link rel="stylesheet" href="Assets/CSS/indexResponsive.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="Assets/Scripts/index.js"></script>
</head>

<body>
    <div class="cajaPrincipal">
        <div class="left-panel shadow-box">
            <div class="logo-container">
                <img id="uaemex-logo" src="Assets/Images/negativo_color_vertical_2_lineas.png" alt="UAEMex Logo">
            </div>
            <div class="logo-container">
                <img id="fi-logo" src="Assets/Images/logoadministracion.png" alt="Facultad de Ingeniería Logo">
            </div>
        </div>
        <div class="login-panel shadow-box">
            <h1 class="tit">Asistente de Ligas Oficiales - <b> FI</b></h1>
            <form class="Formlogin" action="Config/IngresarPOO.php" method="POST">

                <div class="imgcontainer">
                    <img src="https://icones.pro/wp-content/uploads/2021/02/icone-utilisateur-gris.png" alt="Avatar" class="avatar">
                </div>

                <div class="containerLogin">
                    <label for="uname"><b>Usuario:</b></label>
                    <input type="text" placeholder="correo@uaemex.mx" name="user" required>

                    <label for="psw"><b>Contraseña:</b></label>
                    <input type="password" placeholder="Ingresa tu contraseña" name="password" required>
                    <div id="contenedorAux">
                        <div>
                            <button type="submit" name="Ingresar" value="Ingresar">Ingresar</button>
                        </div>
                        <div>
                            <a class="btnInvitado" href="Views/Invitado/index.php"> Invitado</a>
                        </div>
                    </div>
                    <div class="errorSesion">
                        <?php
                        if (isset($_GET['e'])) {
                            echo "<h4 style='color:#EC7063'> Usuario/Contraseña Incorrectos</h4>";
                        }
                        ?>
                    </div>
                </div>

            </form>
        </div>
    </div>

</body>

</html>

<!-- GABRIEL VG -->