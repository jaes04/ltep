<?php
    include("..\config\bdconfig.php");
    session_start();

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
    }

    $id = $_SESSION['id'];

    function get_post($conn){
        $queryposts = $conn->query('Select title,body,file,subject_id from post where user_id = '.$_SESSION['id']);
        while($post = $queryposts->fetch_assoc())
        $post_id = $queryposts['post_id'];
        $post_title = $queryposts['title'];
        $post_body = $queryposts['body'];
        $post_file = $queryposts['file'];
        $post_subject_id = $queryposts['subject_id'];

        $sql = "Select username, profile_pic from user where user_id = ".$_SESSION['id'];
        $quser = $conn->query($sql);
        $prow = $quser->fetch_assoc();
        $username = $prow['username'];
        $post_profile_pic = $prow['profile_pic'];
        
        $sql  = "Select name from subject where subject_id = " . $post_subject_id;
        $qsub = $conn->query($sql);
        $queryposts = $qsub->fetch_assoc();
        $subject = $queryposts['name'];
        echo '<article>';
        echo '  <table class = "upost">';
        echo '      <tr>';
        echo '          <td>';
        echo '              <img src = '. $post_profile_pic .' alt = "' . $username . '"  class = "pp"/>';
        echo '              <p class = "p_username">'. $username . '</p>';
        echo '          </td>';
        echo '          <td rowspan = 3>';
        
        $sql = 'Select * from comment where reference_id = '. $post_id;
        $qcom = $conn->query($sql);
        while($queryposts = $qcom->fetch_assoc()){
            $body = $queryposts['body'];
            $u_id = $queryposts['user_id'];
            $qname = $conn->query('Select username, profile_pic from user where user_id = '. $u_id);
            $queryposts = $qname->fetch_assoc();
            $username = $queryposts['username'];
            $profile_pic = $queryposts['profile_pic'];
            echo'       <article>';
            echo'           <img src = '. $profile_pic . 'class = "comment_pp"/>';
            echo'           <p class = "username">'.$username.'</p>';
            echo'           <p class = "c_body">'.$body.'</p>';
            echo'       </article>';
        }

        echo '          </td>'; 
        echo '      </tr>';
        echo '      <tr>';
        echo '          <td>';    
        echo '              <p class = "post_title"> '. $post_title. '</p>';
        echo '              <p class = "post_subject">'. $subject . '</p><br>';
        echo '          </td>';
        echo '      </tr>';
        echo '      <tr>';
        echo '          <td>';   
        echo '              <p class = "post_body">'. $post_body. '</p><br>';
        echo '          </td>';
        echo '      </tr>';
         if($post_file != null) {
            if(str_contains($post_file,".png")){
                echo '      <tr>';
                echo '          <td>';
                echo '              <img src = '. $post_file.' alt = "' . $post_file . '"  class = "p_img">';
                echo '          </td>';
                echo '      </tr>';
            }else{
                echo '      <tr>';
                echo '          <td>';
                echo '              <a href = '. $post_file.'>';
                echo '                  <img src = "../img/post/p_folder.png" alt = "pdf"  class = "p_pdf">';
                echo '              </a>';
                echo '          </td>';
                echo '      </tr>';
            }
         }
        echo '  </table>';
        echo '</article>';
    }

        
    