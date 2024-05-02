<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mainpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>LTEP</title>
</head>
<body>
    <nav class="menu">
		<a href="main.php">
			<img src="../img/LTEP.png" class="logo"	/>
		</a>
        <div class="topnav" id="topnav">
            <a href="javascrip:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"> Foros</i>
            </a>
            <br>
            <br>
            <div class="foros">
                <a href="Anatomia" class="Anatomia">Anatomia</a>
                <a href="DAM" class="DAM">DAM</a>
                <a href="DAM" class="DAM">Medicina</a>
            </div>
        </div>
        <div class="espacio">
            <img class="campanita" src="../img/Notificaciones.png">
        </div>
        <div class="buscador">
			<input
			type="text"
			id="busqueda"
			name="busqueda"
			placeholder="Busca algo friki"
			/>
		</div>
        <div class="usuario">
            <a href=""><img class="logousu" src="../img/naruto.PNG">
        </div>
        <div class="nombreusuario">
            <p class="nombre">Juanpito</p>
        </div>
        </a>
	</nav>
    <div class="feed">
        <?php include '../controllers/genPost.php';?>
    </div>
    <script src="../js/javascript.js"></script>
</body>
</html>