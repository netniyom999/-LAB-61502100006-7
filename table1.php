<?php
    require_once("dbcon.php");
    $sql = "SELECT * FROM movie";
    $result = $conn->query($sql); 
?>
<a href="insert_from.php">เพิ่มภาพยนต์</a>
<table style="width:100%" border = "1">
  <tr>
    <th>รหัสภาพยนต์</th>
    <th>ชื่อภาพยนต์</th>
    <th>เวลาที่เริ่มฉาย</th>
    <th>ชื่อผู้ใช้งาน</th>
    <th>รหัสผ่าน</th>
    <th>จัดการข้อมูล</th>
  </tr>
<?php
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
 <tr>
    <td><?php echo $row['movie_id']; ?></td>
    <td><?php echo $row['movie_name']; ?></td>
    <td><?php echo $row['movie_time']; ?></td>
    <td><?php echo $row['movie_cname']; ?></td>
    <td><?php echo $row['pin']; ?></td>
    <td align="center">
      <a href="update_from.php?id=<?php echo $row['movie_id']; ?>">แก้ไข</a>
      <a href="delete.php?id=<?php echo $row['movie_id']; ?>">ลบ</a>
    </td>
  </tr>
  <?php
    }
  } 
  else {
    echo "0 results";
  }
  $conn->close();
?>
</table>
    