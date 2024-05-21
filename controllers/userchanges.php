<?php
// Datos de conexión a la base de datos
include("../config/bdconfig.php");

session_start();

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    // Comprobar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibir datos del formulario

        $n_username = $_POST["n_username"];
        $pfp = $_POST["pfp"];
        
        if ($n_username != null) {
            
            $conn->query("UPDATE user SET username = '".$n_username."' WHERE user_id =".$_SESSION['id']);
            
        }

        if ($pfp != null) {
            $url = "../img/".$pfp;
            $conn->query("UPDATE user SET profile_pic = '".$url."' WHERE user_id =".$_SESSION['id']);  
        }
        
    }
    
    header("Location: ../page/userpage.php");
    exit(); 
}

$conn->close();
?>