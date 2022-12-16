<?php


if (isset($_POST['dangky'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = md5($_POST['password']);
    $sql_dangky = mysqli_query($mysqli, "INSERT INTO user(email, password, name, phone, address, status) 
    VALUE('" . $email . "', '" . $password . "', '" . $name . "', '" . $phone . "', '" . $address . "', 1)");
    if ($sql_dangky) {
        $_SESSION['dangky'] = $name;
        $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
        $_SESSION['tenkhachhang'] = $row['name'];
        header("Location: index.php?quanly=dangnhap");
    }
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password =  md5($_POST['password']);
    $sql = "SELECT * FROM user WHERE email='" . $email . "' AND password='" . $password . "' LIMIT 1 ";
    $query = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        $row = mysqli_fetch_array($query);
        $_SESSION['login'] = $email;
        $_SESSION['id_khachhang'] = $row['id'];
        $_SESSION['tenkhachhang'] = $row['name'];
        header("Location: index.php");
    }
}

if (isset($_GET['logout']) == 1) {
    unset($_SESSION['login']);
    header('Location: index.php?quanly=dangnhap');
}

if (isset($_POST['update'])) {
    session_start();
    include "../admin/config/config.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $sql_sua = "UPDATE user SET name='" . $name . "', email='" . $email . "', phone='" . $phone . "', address='" . $address . "'  WHERE id = '$_SESSION[id_khachhang]' ";
    mysqli_query($mysqli, $sql_sua);
    $_SESSION['tenkhachhang'] = $_POST['name'];
    header("Location: ../index.php?quanly=taikhoan/suathongtin");
}
