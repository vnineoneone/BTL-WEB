<?php
include "../../config/config.php";
$name = $_POST['name'];
$order = $_POST['order'];
if (isset($_POST['themdanhmuc'])) {
    $sql_them = "INSERT INTO category(name,order_category) VALUE('" . $name . "','" . $order . "')";
    mysqli_query($mysqli, $sql_them);
    header("Location: ../../index.php?action=quanlydanhmucsanpham&query=them");
} else if (isset($_POST['suadanhmuc'])) {
    $sql_sua = "UPDATE cateogry SET name='" . $name . "', order='" . $order . "' WHERE id = '$_GET[id]' ";
    mysqli_query($mysqli, $sql_them);
    header("Location: ../../index.php?action=quanlydanhmucsanpham&query=them");
} else {
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM category WHERE id = '" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header("Location: ../../index.php?action=quanlydanhmucsanpham&query=them");
}
