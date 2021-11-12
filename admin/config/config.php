<?php
$mysqli = new mysqli("mysql5033.site4now.net","a7c5e7_myweb","thanhtan2001","a7c5e7_myweb");
if ($mysqli->connect_errno)
{
    echo"Kết nối MYSQL lỗi" . $mysqli->connect_error;
    exit();
}
?>
