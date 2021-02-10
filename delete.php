<?php 
    require_once("dbcon.php");
    $sql = "SELECT * FROM movie WHERE movie_id = '{$_GET['id']}'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
        }
?>
<h3>ลบภาพยนต์ภาพยนต์</h3>
<?php 
    $sql = "DELETE FROM movie WHERE movie_id= '{$_GET['id']}'";
    if (mysqli_query($conn,$sql)) 
    {
      echo "Record deleted successfully";
    } 
    else 
    {
        echo "Error deleting record: " . mysqli_error($conn);
    }
  ?>
  <a href=".">ย้อนกลับ</a></small>
  <?php 
