<?php
session_start();
include "../admin/config/config.php";
$sql = "SELECT * FROM product WHERE id_product = '" . $_POST['id'] . "'";
$query = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($query);
$content = $_POST['content'];
$rating = $_POST['rating'];
$product = $row['name_product'];;
$user = $_SESSION['login'];
$id_product = $_POST['id'];
$time = date("Y/m/d");
$result['name_user'] = $_SESSION['tenkhachhang'];
// if ($content and $rating) {
//     $sql_them = "INSERT INTO comment(id_product, id_user, product, user, content, star, created_at) 
//     VALUE('" . $id_product . "', '" . $_SESSION['id_khachhang'] . "', '" . $product . "','" . $user . "', '" . $content . "', '" . $rating . "', '" . $time . "' )";
//     mysqli_query($mysqli, $sql_them);
// }
die(json_encode($result));
