<h3>เพิ่มข้อมูลภาพยนต์ <small><a href=".">ย้อนกลับ</a></small></h3>

<form action="insert.php" method="post">
    <label for="movie_id">รหัสภาพยนต์ : </label>
    <input type="text" name="movie_id" id="movie_id">
    <br>
    <br>
    <label for="movie_name">ชื่อภาพยนต์ : </label>
    <input type="text" name="movie_name" id="movie_name">
    <br>
    <br>
    <label for="movie_time">เวลาฉาย : </label>
    <input type="datetime-local" name="movie_time" id="movie_time">
    <br>
    <br>
    <label for="movie_cname">ชื่อลูกค้า : </label>
    <input type="text" name="movie_cname" id="movie_cname">
    <br>
    <br>
    <label for="pin">รหัส : </label>
    <input type="text" name="pin" id="pin">
    <br>
    <br>
    <button type="submit">ยืนยัน</button>
    <button type="reset">ล้างข้อมูล</button>
</form>