<?php
session_start();
include "../../admin/config/config.php";
include "../../mail/sendmail.php";

$id_khachhang = $_SESSION['id_khachhang'];
$code_order = rand(0, 9999);
$insert_order = "INSERT INTO cart(id_user, code_cart, cart_status) VALUE ('" . $id_khachhang . "', '" . $code_order . "', 1)";
$order_query = mysqli_query($mysqli, $insert_order);
if ($order_query) {
    //Thêm giỏ hàng chi tiết
    foreach ($_SESSION['cart'] as $key => $value) {
        $id_sanpham = $value['id'];
        $soluong = $value['number'];
        $insert_order_detail = "INSERT INTO cart_details( code_cart, id_product, quantity) VALUE ('" . $code_order . "', '" . $id_sanpham . "', '" . $soluong . "')";
        mysqli_query($mysqli, $insert_order_detail);
    }
    $mail =  new Mailer();
    $mail->order_mail();
    print_r($mail);
}
// unset($_SESSION['cart']);



// header('Location: thank.php');
