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
            <textarea class="text" type="text" id="body" name="body" placeholder="Text" rows="5" cols="95"></textarea> 
            <br>
            <br>
            <label class="imagen" for="file">
                <Figure>
                    <figcaption>Subir imagen</figcaption>
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="50"  height="50"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="imagen"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8h.01" /><path d="M12.5 21h-6.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v6.5" /><path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l4 4" /><path d="M14 14l1 -1c.67 -.644 1.45 -.824 2.182 -.54" /><path d="M16 19h6" /><path d="M19 16v6" /></svg>
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