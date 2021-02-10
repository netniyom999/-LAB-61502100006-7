<?php 
    require_once("dbcon.php");
    $sql = "SELECT * FROM movie WHERE movie_id = '{$_GET['id']}'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
        }
?>
<h3>แก้ไขภาพยนต์ <small><a href=".">ย้อนกลับ</a></small></h3>

<form action="update.php" method="post">
    <input type="hidden" name="movie_id" id="movie_id" value="<?php echo $row['movie_id']; ?>">
    <br>
    <br>
    <label for="movie_name">ชื่อภาพยนต์ : </label>
    <input type="text" name="movie_name" id="movie_name" value="<?php echo $row['movie_name']; ?>">
    <br>
    <br>
    <label for="movie_time">เวลาฉาย : </label>
    <input type="datetime-local" name="movie_time" id="movie_time" value="<?php echo $row['movie_time']; ?>">
    <br>
    <br>
    <label for="movie_cname">ชื่อลูกค้า : </label>
    <?php echo $row['movie_cname']; ?>
    <input type="hidden" name="movie_cname" id="movie_cname" value="<?php echo $row['movie_cname']; ?>">
    <br>
    <br>
    <label for="pin">รหัส : </label>
    <?php echo $row['pin']; ?>
    <input type="hidden" name="pin" id="pin" value="<?php echo $row['pin']; ?>">
    <br>
    <br>
    <button type="submit">ยืนยัน</button>
    <button type="reset">ล้างข้อมูล</button>
</form>