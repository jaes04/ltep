<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\signinstyle.css">
    <title>Document</title>
</head>
<body>
    
    
    <a class="logo"><img src="..\img\logo.png"></a>
            
    
    

    <div class="innerbox">
        
        <form action="../controllers/cuser.php" method="post">
            <H2 class="titleSignUp" >Sign in</H2>

            <Label for="username">Username</Label>
            <br>
            <input type="text" id="username" name="username">
            <?php
                if(isset($_GET["usr"])){
                    if($_GET["usr"]==1){
                        echo("<p>El usuario no coincide</p>");
                    }
                }
            ?>
                
            <br>
                
            <label for="mail">Correo electronico:</label>
            <br>
            <input type="email" id="mail" name="mail">

            <br>
                
            <label for="">Contraseña:</label>
            <br>
            <input type="password" id="password" name="password">
            <?php
                if(isset($_GET["pwd"])){
                    if($_GET["pwd"]==1){
                        echo("<p>Las contraseñas no coinciden</p>");
                    }
                }
            ?>
                
            <br>
        
            <label for="">Repetir Contraseña:</label>
            <br>
            <input type="password" id="password2" name="password2">

            <br>
            <p>Al registrarte, aceptas nuestras Condiciones. Obtén información sobre cómo recopilamos, usamos y compartimos tus datos en la Política de privacidad, así como el uso que hacemos de las cookies y tecnologías similares en la Política de cookies.</p>
            <button type="submit">Sign in</button>
        </form>

       
        

    </div>
</body>
</html>