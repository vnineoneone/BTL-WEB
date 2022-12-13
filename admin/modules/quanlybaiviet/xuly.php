<?php
include "../../config/config.php";
$name = $_POST['name'];
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
if ($image != '') {
    $image = time() . '_' . $image;
}
$brief = $_POST['brief'];
$content = $_POST['content'];
$status = $_POST['status'];

if (isset($_POST['thembaiviet'])) {
    $sql_them = "INSERT INTO post(name, image, brief, content, status)
    VALUE('" . $name . "', '" . $image . "', '" . $brief . "', '" . $content . "', '" . $status . "')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($image_tmp, 'uploads/' . $image);
    header("Location: ../../index.php?action=quanlybaiviet&query=bangdulieu");
} else if (isset($_POST['suabaiviet'])) {
    if ($image != '') {
        move_uploaded_file($image_tmp, 'uploads/' . $image);
        $sql = "SELECT * FROM post WHERE id = '" . $_GET['id'] . "'";
        $query =  mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/' . $row['image']);
        }
        $sql_sua = "UPDATE post SET name ='" . $name . "', image='" . $image . "', brief='" . $brief . "', content='" . $content . "', 
        status='" . $status . "' WHERE id = '" . $_GET['id'] . "'";
    } else {
        $sql_sua = "UPDATE post SET name ='" . $name . "', brief='" . $brief . "', content='" . $content . "', 
        status='" . $status . "' WHERE id = '" . $_GET['id'] . "'";
    }
    // header("Location: ../../index.php?action=quanlybaiviet&query=bangdulieu");
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM post WHERE id = '" . $id . "'";
    $query =  mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['image']);
    }
    $sql_xoa = "DELETE FROM post WHERE id = '" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header("Location: ../../index.php?action=quanlybaiviet&query=bangdulieu");
}
