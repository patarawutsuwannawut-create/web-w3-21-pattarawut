<?php
$con = mysqli_connect("localhost", "root", "", "kfc_db"); // เปลี่ยน kfc_db เป็นชื่อฐานข้อมูลของคุณใน phpMyAdmin
mysqli_set_charset($con, "utf8"); // ป้องกันปัญหาภาษาไทยเพี้ยน
?>