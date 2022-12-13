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
    if ($image != '') {
        move_uploaded_file($image_tmp, 'uploads/' . $image);
        $sql = "SELECT * FROM product WHERE id_product = '" . $_GET['id'] . "'";
        $query =  mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/' . $row['image']);
        }
        $sql_sua = "UPDATE product SET name_product='" . $name . "', id_category='" . $id_category . "', code='" . $code . "', 
        price='" . $price . "', number='" . $number . "', image='" . $image . "', detail='" . $detail . "', 
        description='" . $description . "', status='" . $status . "' WHERE id_product = '$_GET[id]' ";
    } else {
        $sql_sua = "UPDATE product SET name_product='" . $name . "', id_category='" . $id_category . "', code='" . $code . "',
        price='" . $price . "', number='" . $number . "', detail='" . $detail . "', 
        description='" . $description . "', status='" . $status . "' WHERE id_product = '$_GET[id]' ";
    }
    mysqli_query($mysqli, $sql_sua);
    header("Location: ../../index.php?action=quanlysp&query=bangdulieu");
} else {
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM user WHERE id = '" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header("Location: ../../index.php?action=quanlykhachhang&query=bangdulieu");
}
