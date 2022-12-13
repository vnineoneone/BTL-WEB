<?php
include "../../config/config.php";
$name = $_POST['name'];
if (isset($_POST['themthuonghieu'])) {
    $sql_them = "INSERT INTO brand(name_brand) VALUE('" . $name . "')";
    mysqli_query($mysqli, $sql_them);
    header("Location: ../../index.php?action=quanlythuonghieu&query=bangdulieu");
} else if (isset($_POST['suathuonghieu'])) {
    $sql_sua = "UPDATE brand SET name_brand='" . $name . "' WHERE id_brand = '$_GET[id]' ";
    $a = mysqli_query($mysqli, $sql_sua);
    header("Location: ../../index.php?action=quanlythuonghieu&query=bangdulieu");
} else {
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM brand WHERE id_brand = '" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header("Location: ../../index.php?action=quanlythuonghieu&query=bangdulieu");
}
