<?php
include "../../config/config.php";
$name = $_POST['name'];
$code = $_POST['code'];
$id_category = $_POST['category'];
$price = $_POST['price'];
$number = $_POST['number'];
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
if ($image != '') {
    $image = time() . '_' . $image;
}
$detail = $_POST['detail'];
$status = $_POST['status'];

if (isset($_POST['themsanpham'])) {
    $sql_them = "INSERT INTO product(name_product, code, id_category, price, number, image, detail, status) 
    VALUE('" . $name . "','" . $code . "', '" . $id_category . "', '" . $price . "','" . $number . "','" . $image . "','" . $detail . "', '" . $status . "')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($image_tmp, 'uploads/' . $image);
    header("Location: ../../index.php?action=quanlysp&query=bangdulieu");
} else if (isset($_POST['suasanpham'])) {
    if ($image != '') {
        move_uploaded_file($image_tmp, 'uploads/' . $image);
        $sql = "SELECT * FROM product WHERE id_product = '" . $_GET['id'] . "'";
        $query =  mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/' . $row['image']);
        }
        $sql_sua = "UPDATE product SET name_product='" . $name . "', id_category='" . $id_category . "', code='" . $code . "', 
        price='" . $price . "', number='" . $number . "', image='" . $image . "', detail='" . $detail . "', 
        status='" . $status . "' WHERE id_product = '$_GET[id]' ";
    } else {
        $sql_sua = "UPDATE product SET name_product='" . $name . "', id_category='" . $id_category . "', code='" . $code . "',
        price='" . $price . "', number='" . $number . "', detail='" . $detail . "', 
        status='" . $status . "' WHERE id_product = '$_GET[id]' ";
    }
    mysqli_query($mysqli, $sql_sua);

    header("Location: ../../index.php?action=quanlysp&query=bangdulieu");
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM product WHERE id_product = '" . $id . "'";
    $query =  mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['image']);
    }
    $sql_xoa = "DELETE FROM product WHERE id_product = '" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header("Location: ../../index.php?action=quanlysp&query=bangdulieu");
}
