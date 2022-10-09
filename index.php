<!DOCTYPE html>
<html>

<head>
    <title>ALO - FI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Assets/CSS/login.css">
    <link rel="stylesheet" href="Assets/CSS/inputs.css">
</head>

<body>
    <main>
        <div class="left-panel shadow-box">
            <div class="logo-container">
                <img id="uaemex-logo" src="Assets/Images/negativo_color_vertical_2_lineas.png" alt="UAEMex Logo">
            </div>
            <div class="logo-container">
                <img id="fi-logo" src="Assets/Images/logoadministracion.png" alt="Facultad de Ingeniería Logo">
            </div>
        </div>
        <div class="login-panel shadow-box">
            <h1>Asistente de Ligas Oficiales -<b> FI</b></h1>
            <form action="Config/Ingresar.php" method="POST">
                <table class="form-table">
                    <tbody>
                        <tr>
                            <td><i class="fa fa-solid fa-user fa-2x icon-login"></i></td>
                            <td>
                                <input type="text" name="user" placeholder="usuario@uaemex.mx" required>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-lock fa-2x icon-login" aria-hidden="true"></i></td>
                            <td><input type="password" placeholder="contraseña" name="password" required></td>
                        </tr>
                        <tr>
                            <td colspan="2"><br>
                                <input type="submit" name="Ingresar" value="Ingresar">
                            </td>

                        </tr>
                        <tr>
                            <td colspan="2"><br>
                                <a class="btnInvitado" href="Views/Invitado/index.php">Invitado</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </main>
</body>

</html>