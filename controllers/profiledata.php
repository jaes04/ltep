<?php
    include '../config/bdconfig.php';

    SESSION_START();

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "Select username, profile_pic from user where user_id = ". $_SESSION['id'];
    $result = $conn->query($sql);