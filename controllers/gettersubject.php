<?php
  include '../config/bdconfig.php';

  // Crear conexión
  $conn = new mysqli($servername, $username, $password, $database);

  // Verificar la conexión
  if ($conn->connect_error) {
      die("Conexión fallida: " . $conn->connect_error);
  }
  $userid = 2;
  $sql = "SELECT subject FROM follow where user_id = ".$userid;
  print_r($sql) ;
  $result = $conn->query($sql);

  while($row = $result->fetch_assoc()){
    $subject_name = $row['subject'];
    echo '<option value = "'.$subject_name . '"id="subject" name="subject">'.$subject_name .'</option>' ;

  }