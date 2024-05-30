<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\signinstyle.css">
    <title>Sign in</title>
</head>
<body>
    <div class="logoBox">
        <a href="../index.html"><img class="logo" src="../img/logo.png"/></a>
    </div>
    
            
    <div class="innerbox">
        <form action="../controllers/cuser.php" method="post">
            <h2 class="titleSignUp">Sign in</h2>

            <label for="username">Username</label>
            <input type="text" id="username" name="username">
            <?php
                if(isset($_GET["usr"])){
                    if($_GET["usr"]==1){
                        echo("<p>El usuario no coincide</p>");
                    }
                }
            ?>

            <label for="mail">Correo electronico:</label>
            <input type="email" id="mail" name="mail">
                
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">
            <?php
                if(isset($_GET["pwd"])){
                    if($_GET["pwd"]==1){
                        echo("<p>Las contraseñas no coinciden</p>");
                    }
                }
            ?>

        
            <label for="password2">Repetir Contraseña:</label>
            <input type="password" id="password2" name="password2">
            <p>Al registrarte, aceptas nuestras Condiciones. Obtén información sobre cómo recopilamos, usamos y compartimos tus datos en la Política de privacidad, así como el uso que hacemos de las cookies y tecnologías similares en la Política de cookies.</p>
            <button type="submit">Registrarse</button>            
        </form>
    </div>
</body>
</html>