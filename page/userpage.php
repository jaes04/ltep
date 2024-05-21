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
        <a href="http://localhost/proyectoIntermodular/page/main.php"><img src="../img/logo.png"></a>
        <input class = "buscador" type="text" placeholder="Buscate algo pues...">
    </div>
    
    <div class="nombre">
        <img src="../img/userPic.PNG">
        <h1>Juan Botijo</h1>
        <p>@juanbotijogirocompleto</p>
        <a href="..\page\userchanges.html">Modificar</a>
    </div>
    <div class="feed">
        <?php include '../controllers/ugenPost.php';?>
    </div>
    
</body>
</html>