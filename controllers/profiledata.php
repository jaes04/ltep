<?php
    include '../config/bdconfig.php';

    SESSION_START();

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $result = $conn->query("Select username, profile_pic from user where user_id = ". $_SESSION['id']);
    while($row = $result->fetch_assoc() ){
        $username = $row['username'];
        $profile_pic = $row['profile_pic'];

        echo '<img class = profile_pic src = "' . $profile_pic . '" alt = "user_pic">';
        echo '<p class = "bar_username">'.$username.'</p>';
    }