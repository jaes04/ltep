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
        <div class="logoDiv"><a href="#"><img src="../img/logo.png" class="logo"></a></div>
        <div class="userData"><?php include '../controllers/profiledata.php'?></div>
    </div>

    <div class="feed">
        <button class="boton" type="submit"><a href="../page/createpost.php">+</a></button>
        <?php include '../controllers/genPost.php';?>
    </div>
</body>
</html>