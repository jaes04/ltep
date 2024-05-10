<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loginStyle.css">
    <title>LTEP</title>
</head>
<body>
    <table border="1" >
        <tr>
            <td class="logo">
                <img src="..\img\logo.png">
            
            </td>
            <td class="signup" rowspan="2">
                <form action="../controllers/checker.php" method="post">
                    <h2 class = 'title'>Unote</h2>
                    <br>
                    <h2>Iniciar Sesión</h2>
                    <br>
                    <label for="username">Username</label>
                    <br>
                    <input type="text" class="username" name = "username">
                    <br>
                    <?php
                        if(isset($_GET["control"])) { 
                            $userControl = $_GET['control'];
                            if($userControl != null){
                                if($userControl == 2){
                                    echo"<h4>Hay algun problema con el usuario </h4>";
                                }elseif($userControl == 3){
                                    echo"<h4>Hay algun problema con la contraseña</h4>";
                                }
                            }  
                        }    
                    ?>
                    <label for="password">Password</label>
                    <br>
                    <input type="password" class="password" name="password">
                    <br>
                    <a src = "#" >¿Has olvido la contraseña?</a>
                    <br>
                    <button type="submit">Iniciar Seseion</button>
                    <br>
                    <div class="maybe">
                        <p>¿No tienes cuenta?</p> <br>
                        <a href="signin.php">Si es asi pinche aqui</a>
                    </div>
                </form>
            </td>
        </tr>
        <tr>
            <td class='dumb'>
                <p>¿No tienes cuenta?</p> <br>
                <a href="signin.php">Si es asi pinche aqui</a>
            </td>
        </tr>
    </table>   
</body>
</html>