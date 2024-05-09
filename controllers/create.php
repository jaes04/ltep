   <?php
    include '../config/bdconfig.php';

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Comprobar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $route = '../img/';
        // Recibir datos del formulario
        $title = $_POST["title"];
        $body = $_POST["body"];
        $file = $route .$_POST["file"];
        $subjectid = $_POST["subject"];
        $userid = 2;
        $date = date('Y-n-d');

        $sql = "SELECT subject_id FROM subject WHERE name = '$subjectid'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $subject_id = $row['subject_id'];
               
        
        

        // Crear la consulta SQL para la inserción de datos
        $sql = "INSERT INTO post (title, body, file, subject_id, user_id, post_date)
                VALUES ('$title', '$body', '$file', $subject_id, $userid, '$date')";
        // Ejecutar la consulta
        if ($conn->query($sql) === TRUE) {
            echo "Datos insertados correctamente.<br>";
            header("Location: ../page/main.php");
        } else {
            echo "Error al insertar datos: " . $conn->error . "<br>";
        }
    }
    $conn->close();
    ?>

