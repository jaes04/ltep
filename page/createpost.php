<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/createpost.css?v=<?php echo (rand())?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Create post</title>
</head>
<body>
    <div class="encabezado">
        <h1>New Post</h1>
    </div>
    <form method="post" action="../controllers/create.php">
        <div class="menu">
            <select class="despegable" id="subject" name="subject">
                <?php include '../controllers/gettersubject.php'?>
            </select>
            <br>
            <input class="title" type="text" id="title" name="title" placeholder="Title">
            <br>    
            <textarea class="text" type="text" id="body" name="body" placeholder="Text" rows="5" cols="77"></textarea> 
            <br>
            <br>
            <label class="imagen" for="file">
                <Figure>
                    <figcaption>Subir imagen</figcaption>
                    <img class="imagen" src="../img/img.png" alt="">
                </Figure>
            </label>
            <input class="selectinfo" type="file" id="file" name="file">
            <br>
            <br>
            <button class="boton" type="submit">Enviar</button>
        </div>
    </form>
    
</body>
</html>