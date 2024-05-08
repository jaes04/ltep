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

    get_posts(get_sector($id, $conn),$conn);

    $conn->close();

    function get_sector($uid, $conn){
        $sectors_id = '';

        $sql = 'SELECT sector_id FROM follow where user_id = ' . $uid;
        $follow = $conn->query($sql);

        if ($follow->num_rows > 0) {
            
            $sector_id =[];
            $post_id = [];
            $i = 0;

            while($row = $follow -> fetch_assoc()){
                $sector_id[] =  $row ['sector_id'];  
                $i++;
                $sectors_id = $sectors_id . $row ['sector_id'] . ',';

            }

            $sectors_id = substr($sectors_id, 0, -1);
           
        }
        return $sectors_id ;

    }

    function get_posts($sectors_id, $conn){
        
        $sql = 'SELECT post_id FROM feed where sector_id in ( ' .  $sectors_id .') and DATEDIFF(CURRENT_DATE,post_date) < 60 order by rand() limit 10';
        $qpost = $conn->query($sql);

        $sectors_id = '';
        $i = 0;
        while($rowpost = $qpost -> fetch_assoc()){
            $post_id[$i] =  $rowpost ['post_id'];
            $i++;
            $sectors_id =  $sectors_id . $rowpost ['post_id'] . ',';
        }

         $sectors_id = substr( $sectors_id, 0, -1);

        
        $sql = 'SELECT id_post, title, body, post_file, user_id, subject_id FROM post where id_post in ( ' .  $sectors_id. ')' ;
        $qpost = $conn->query($sql);
    
        while($row = $qpost->fetch_assoc()) {
            
            $post_id = $row['id_post'];
            $post_title = $row['title'];
            $post_body = $row['body'];
            $post_file = $row['post_file'];
            $post_user_id = $row['user_id'];
            $post_subject_id = $row['subject_id'];

            $sql = "Select username, profile_pic from user where user_id = ". $post_user_id;
            $quser = $conn->query($sql);
            $prow = $quser->fetch_assoc();
            $username = $prow['username'];
            $post_profile_pic = $prow['profile_pic'];
            
            $sql  = "Select name from subject where subject_id = " . $post_subject_id;
            $qsub = $conn->query($sql);
            $row = $qsub->fetch_assoc();
            $subject = $row['name'];
            echo $post_profile_pic;
            echo $username;

            echo '<article>';
            echo '  <table class = "upost">';
            echo '      <tr>';
            echo '          <td>';
            echo '              <img src = "'.$post_profile_pic.'" alt = "' . $username . '"  class = "pp">';
            echo '              <p class = "p_username">'. $username . '</h2>';
            echo '          </td>';
            echo '          <td rowspan = 3>';
            
            $sql = 'Select * from comment where reference_id = '. $post_id;
            $qcom = $conn->query($sql);
            while($row = $qcom->fetch_assoc()){
                $body = $row['body'];
                $u_id = $row['user_id'];
                $qname = $conn->query('Select username, profile_pic from user where user_id = '. $u_id);
                $row = $qname->fetch_assoc();
                $username = $row['username'];
                $profile_pic = $row['profile_pic'];
                echo'       <article>';
                echo'           <img src = '. $profile_pic. 'alt = "comment_pp" class =>';
                echo'           <p class = "username">'.$username.'</p>';
                echo'           <p>'.$body.'</p';
                echo'       </article>';
            }
    
            echo '          </td>'; 
            echo '      </tr>';
            echo '      <tr>';
            echo '          <td>';    
            echo '              <p class = "p_title"> '. $post_title. '</p>';
            echo '              <p>'. $subject . '</p><br>';
            echo '          </td>';
            echo '      </tr>';
            echo '      <tr>';
            echo '          <td>';   
            echo '              <p>'. $post_body. '</p><br>';
            echo '          </td>';
            echo '      </tr>';
             if($post_file != null) {
                if(str_contains($post_file,".png")){
                    echo '      <tr>';
                    echo '          <td>';
                    echo '              <img src = '.$post_file.' alt = "' . $post_file . '"  class = "p_img"">';
                    echo '          </td>';
                    echo '      </tr>';
                }else{
                    echo '      <tr>';
                    echo '          <td>';
                    echo '              <a href = '.$post_file.'>';
                    echo '                  <img src = "../img/post/p_folder.png" alt = "pdf"  class = "p_pdf"">';
                    echo '              </a>';
                    echo '          </td>';
                    echo '      </tr>';
                }
             }
            echo '  </table>';
            echo '</article>';
   
        }

    }




