<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mainpage.css">
    <title>Unote</title>
</head>
<body>
<div class="topnav" id="myTopnav">
<a href="#"><img src=../img/logo.png></a>
        <a href="#" class="notification">Notificaciones</a>
        <input class = "buscador" type="text" placeholder="Buscate algo pues...">
    </div>
    <div class="feed">
        <?php include '../controllers/genPost.php';?>
    </div>
</body>
</html>