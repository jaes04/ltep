<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginStyle.css">
    <title>LTEP</title>
</head>
<body>
    <table border="1" >
        <tr>
            <td class="logo">
                <img src="img\ibm_icon_ltep.png">
                <h1>LTEP</h1>
            </td>
            <td class="signup" rowspan="2">
                <form action="checker.php" method="post">
                    <h2>Iniciar Sesión</h2>
                    <br>
                    <label for="username">Username</label>
                    <br>
                    <input type="text" name = "username">
                    <br>
                    <?php
                    $_userControl = $_GET['control'];
                    if($_userControl == 2){
                        echo"<h4>Hay algun problema con el usuario </h4>";
                    }elseif($_userControl == 3){
                        echo"<h4>Hay algun problema con la contraseña</h4>";
                    }else{
                        echo"<h4></h4>";

                    }
                    ?>
                    <label for="password">Password</label>
                    <br>
                    <input type="password" name="password">
                    <br>
                    <a src = "#" >¿Has olvido la contraseña?</a>
                    <br>
                    <button type="submit">Iniciar Seseion</button>
                    <br>
                </form>
            </td>
        </tr>
        <tr>
            <td class=    >
                <p>¿No tienes cuenta?</p> <br>
                <a href="../Sign in/index.html">Si es asi pinche aqui</a>
            </td>
        </tr>
    </table>   
</body>
</html>