<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบเก็บข้อมูลภาพยนต์</title>
</head>
<body>

<?php
    
    require_once("dbcon.php");
    session_start();
    if(isset($_POST['login'])) {
        $sql = "SELECT * FROM movie WHERE movie_cname = '{$_POST['movie_cname']}' AND pin = '{$_POST['pin']}'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["movie_cname"] = $row['movie_cname'];
        } else {
            echo "<p>รหัสผิด</p>";
        }
    }


    if(isset($_POST['logout'])){
        session_unset();
    }
    

    if(isset($_SESSION['movie_cname'])) {
        require_once("table1.php");
    } else {
        require_once("login.php");
    }
?>
</body>
</html>