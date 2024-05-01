<?php
    include("config/bdconfig.php");
   
    session_start();

    $user = $_POST['username'];
    $uPassword = $_POST['password'];
    
    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
    }

    // Comprobar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $sql = "SELECT user_id FROM user WHERE username = '".$user."'";
        
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['user_id'];

        
       
        if($result->num_rows == 1){

            $sql = "SELECT user_id from user where pass = '".$uPassword."' AND user_id = ". $_SESSION['id'];
            $result = $conn->query($sql);

            if($result->num_rows == 1){

                header("location: /Page/main_page/index.html");
                
            }else{
            
               header("location: login.php?control=3");
            
            }
        }else{
            header("location: login.php?control=2");
        }
    
    }
    // Cerrar la conexión
      $conn->close();
