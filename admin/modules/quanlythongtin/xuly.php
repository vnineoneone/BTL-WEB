<?php
include "../../config/config.php";
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$introduce = $_POST['introduce'];

if (isset($_POST['suathongtin'])) {
    $sql = "UPDATE infomation SET email='" . $email . "', phone='" . $phone . "', address='" . $address . "', 
    introduce='" . $introduce . "' WHERE id = '1' ";
    mysqli_query($mysqli, $sql);
    header("Location: ../../index.php?action=quanlythongtin&query=bangdulieu");
}
