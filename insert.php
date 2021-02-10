<?php
    require_once("dbcon.php");
    $sql = "INSERT INTO movie (movie_id, 
                        movie_name, 
                        movie_time,
                        movie_cname,
                        pin)
    VALUES ('{$_POST['movie_id']}', 
            '{$_POST['movie_name']}',
            '{$_POST['movie_time']}',
            '{$_POST['movie_cname']}', 
            '{$_POST['pin']}')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ?>
      <a href=".">ย้อนกลับ</a>
      <?php
    $conn->close();
?>