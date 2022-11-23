<?php
include "../../config/config.php";
$name = $_POST['name'];
$order = $_POST['order'];
if (isset($_POST['themdanhmuc'])) {
    $sql_them = "INSERT INTO category(name_category,order_category) VALUE('" . $name . "','" . $order . "')";
    mysqli_query($mysqli, $sql_them);
    header("Location: ../../index.php?action=quanlydanhmucsanpham&query=bangdulieu");
} else if (isset($_POST['suadanhmuc'])) {
    $sql_sua = "UPDATE category SET name_category='" . $name . "', order_category='" . $order . "' WHERE id_category = '$_GET[id]' ";
    $a = mysqli_query($mysqli, $sql_sua);
    header("Location: ../../index.php?action=quanlydanhmucsanpham&query=bangdulieu");
} else {
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM category WHERE id_category = '" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header("Location: ../../index.php?action=quanlydanhmucsanpham&query=bangdulieu");
}
