<h1>แก้ไขข้อมูลภาพยนต์<h1>

<?php
    require_once("dbcon.php");
    $sql = "UPDATE movie SET  movie_id = '{$_POST['movie_id']}', 
                                movie_name = '{$_POST['movie_name']}',
                                movie_time = '{$_POST['movie_time']}',
                                movie_cname = '{$_POST['movie_cname']}'                       
                          WHERE movie_id = '{$_POST['movie_id']}'";
                          
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      ?>
      <a href=".">ย้อนกลับ</a>
      <?php
    }
     else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>