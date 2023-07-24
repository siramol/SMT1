<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "gtc";
$port = 3306;

mysqli_report(MYSQLI_REPORT_OFF);
$connect = mysqli_connect($hostname,$username,$password,$database,$port)or die("เกิดข้อผิดพลาดเกิดขึ้น");

?>


