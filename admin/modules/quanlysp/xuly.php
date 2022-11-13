<?php
include "../../config/config.php";
$name = $_POST['name'];
$code = $_POST['code'];
$price = $_POST['price'];
$number = $_POST['number'];
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
$image = time() . '_' . $image;
$detail = $_POST['detail'];
$description = $_POST['description'];
$status = $_POST['status'];

if (isset($_POST['themsanpham'])) {
    $sql_them = "INSERT INTO product(name, code, price, number, image, detail, description, status) 
    VALUE('" . $name . "','" . $code . "','" . $price . "','" . $number . "','" . $image . "','" . $detail . "','" . $description . "','" . $status . "')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($image_tmp, 'uploads/' . $image);
    header("Location: ../../index.php?action=quanlysp&query=them");
} else if (isset($_POST['suasanpham'])) {
    if ($image != '') {
        move_uploaded_file($image_tmp, 'uploads/' . $image);
        $sql = "SELECT * FROM product WHERE id = '" . $_GET['id'] . "'";
        $query =  mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/' . $row['image']);
        }
        $sql_sua = "UPDATE product SET name='" . $name . "', code='" . $code . "', 
        price='" . $price . "', number='" . $number . "', image='" . $image . "', detail='" . $detail . "', 
        description='" . $description . "', status='" . $status . "' WHERE id = '$_GET[id]' ";
    } else {
        $sql_sua = "UPDATE product SET name='" . $name . "', code='" . $code . "',
        price='" . $price . "', number='" . $number . "', detail='" . $detail . "', 
        description='" . $description . "', status='" . $status . "' WHERE id = '$_GET[id]' ";
    }
    mysqli_query($mysqli, $sql_sua);
    header("Location: ../../index.php?action=quanlysp&query=them");
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM product WHERE id = '" . $id . "'";
    $query =  mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['image']);
    }
    $sql_xoa = "DELETE FROM product WHERE id = '" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header("Location: ../../index.php?action=quanlysp&query=them");
}
