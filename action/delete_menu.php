<?php
include "connect.php";
$id = $_GET['id'];
mysqli_query($con, "DELETE FROM menus WHERE menu_id = '$id'");
header("location: ../manage_menu.php");
exit;
?>