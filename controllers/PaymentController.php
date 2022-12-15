<?php
include "../admin/config/config.php";
include "../mail/sendmail.php";

$id_khachhang = $_SESSION['id_khachhang'];
$code_order = rand(1000000000, 9999999999);
$time = date("Y-m-d h:i:s");
$type = $_POST['type'];
if ($type == 'momo') {
    $type_payment = 'Momo';
} else if ($type = 'get') {
    $type_payment = 'Tiền mặt';
}


$insert_order = "INSERT INTO cart(id_user, code_cart, method_payment, cart_status, created_at) VALUE ('" . $id_khachhang . "', '" . $code_order . "', '" . $type_payment . "', 1, '" . $time . "')";
$order_query = mysqli_query($mysqli, $insert_order);
$insert_order1 = "INSERT INTO shipment(code_cart, name, email, phone, address) VALUE ('" . $code_order . "', '" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['phone'] . "', '" . $_POST['address'] . "')";
$order_query1 = mysqli_query($mysqli, $insert_order1);
$total = 0;


if ($order_query) {
    //Thêm giỏ hàng chi tiết
    foreach ($_SESSION['cart'] as $key => $value) {
        $total +=  $value['price'] * $value['number'];
        $id_sanpham = $value['id'];
        $soluong = $value['number'];
        $insert_order_detail = "INSERT INTO cart_details( code_cart, id_product, quantity) VALUE ('" . $code_order . "', '" . $id_sanpham . "', '" . $soluong . "')";
        mysqli_query($mysqli, $insert_order_detail);
    }
    $total = $total * 1000 + 40000;
    if ($type == 'momo') {
        include "../controllers/MomoQRController.php";
    } else if ($type = 'get') {
        header('Location: ../pages/main/thank.php');
    }
    $mail =  new Mailer();
    $info = $_POST;
    $info['type'] = $type_payment;
    $info['code'] = $code_order;
    $mail->order_mail($info);
    $_SESSION['cart1'] =  $_SESSION['cart'];
    unset($_SESSION['cart']);
}
