<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/userStyle.css">
    <link rel="stylesheet" href="../css/mainpage.css">
    <title>Usuario</title>
</head>
<body>

    <div class="topnav" id="myTopnav">
        <a href="#"><img src="../img/logo.png"></a>
        <input class = "buscador" type="text" placeholder="Buscate algo pues...">
    </div>
    
    <div class="nombre">
        <img src="../img/userPic.PNG">
            <h1>Juan Botijo</h1>
            <p>@juanbotijogirocompleto</p>
    </div>
    <div class="feed">
        <?php include '../controllers/genPost.php';?>
    </div>



    <!--<div class="post">
        <h1>Pasarse los apuntes de fol</h1>
        <p>Lo que pasa vale te voy a decir lo que pasa y es que lo que pasa es que me he dormido en clase y lo que pasa es que no he tomado apuntes entonces si alguien meles pudiese pasar xfa</p>
        <img src="img/postIMG.gif">
    </div>

    <div class="comentarios">
        <img src="img/baabaf851119e42b3b8e9cbcae9df266.png">
        <a href="#"><h1>@Will_De_Rex</h1></a>
        <p>pues la prosima no t duermes jaj</p>
    </div>

    <div class="comentarios">
        <img src="img/Screenshot_2023-11-27-17-26-30-473_com.instagram.android-edit.webp">
        <a href="#"><h1>@donPalillo</h1></a>
        <p>aora t los paso anda...</p>
    </div>
    -->
    
</body>
</html>