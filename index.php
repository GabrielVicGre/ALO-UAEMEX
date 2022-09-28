<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="../">
        <script src="https://kit.fontawesome.com/03fb299eb3.js" crossorigin="anonymous"></script>
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
                                <input type="text" name="user" placeholder="usuario@uaemex.mx">
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-lock fa-2x icon-login" aria-hidden="true"></i></td>
                            <td><input type="password" placeholder="contraseña" name="password"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><br>
                                <input type="submit" name="enviar" value="enviar">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
       </main> 
    </body>


</html>







