<?php
    // Datos de conexión a la base de datos
    SESSION_START();
    $servername = "localhost";
    $username = "darek";
    $password = "Australia";
    $database = "proyecto_intermod";


  // Crear conexión
  $conn = new mysqli($servername, $username, $password, $database);

  // Verificar la conexión
  if ($conn->connect_error) {
      die("Conexión fallida: " . $conn->connect_error);
  }

  // Comprobar si se ha enviado el formulario
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Recibir datos del formulario
      $username = $_POST["username"];
      $mail = $_POST["mail"];
      $password = $_POST["password"];
      $password2 = $_POST["password2"];

      $sql="SELECT user_id FROM user WHERE username = '".$username."'";
      $result= $conn->query($sql);
      if ($result -> num_rows >= 1) {
        header("Location: signin.php?usr=1");
     } else {
       
        if($password==$password2){

            //Insertamos el usuario en la BBDD
            $sql = "INSERT INTO user (username, pass,mail)
                    VALUES ('$username', '$password', '$mail')";
            $result=$conn -> query($sql);

            //Recogemos el id del usuario creado para mandarlo a la main page
            $sql="SELECT user_id FROM user WHERE username = '".$username."'";
            $result=$conn->query($sql);
            $row=$result->fetch_assoc();
            $_SESSION['id'] =$row["id"];
            header("Location: main_page\index.html");
        }else{
            header("Location: signin.php?pwd=1");
    
        }
     }
      
      
      
      
  }

 
  $conn->close();
  ?>
