<?php
include "../../config/config.php";
$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$address = $_POST['address'];
$phone = $_POST['phone'];
$status = $_POST['status'];

if (isset($_POST['themkhachhang'])) {
    $sql_them = "INSERT INTO user(name, email, password, phone, address, status) 
    VALUE('" . $name . "','" . $email . "', '" . $password . "', '" . $phone . "', '" . $status . "')";
    mysqli_query($mysqli, $sql_them);
    header("Location: ../../index.php?action=quanlykhachhang&query=bangdulieu");
} else if (isset($_POST['suakhachhang'])) {
    $sql_sua = "UPDATE user SET name='" . $name . "', email='" . $email . "', phone='" . $phone . "', address='" . $address . "'  WHERE id = '$_GET[id]' ";
    mysqli_query($mysqli, $sql_sua);
    header("Location: ../../index.php?action=quanlykhachhang&query=bangdulieu");
} else {
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM user WHERE id = '" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header("Location: ../../index.php?action=quanlykhachhang&query=bangdulieu");
}
