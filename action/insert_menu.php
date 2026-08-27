<?php
include "connect.php";
$menu_id = $_POST["menu_id"];
$menu_name = $_POST["menu_name"];
$menu_price = $_POST["menu_price"];
$menu_image = $_POST["menu_image"];
$type_id = $_POST["type_id"];

$sql = "INSERT INTO `menus` (`menu_id`, `menu_name`, `menu_price`, `menu_image`, `type_id`) 
        VALUES ('$menu_id','$menu_name','$menu_price','$menu_image','$type_id')";
mysqli_query($con, $sql);
header("location: ../index.php");
exit;
?>