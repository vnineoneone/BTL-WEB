<?php
include "../../config/config.php";
$code = $_GET['code'];
if (isset($_POST['hoanthanh'])) {
    $sql = "UPDATE cart SET cart_status= 0 WHERE cart.code_cart = '" . $code . "'";
    $query = mysqli_query($mysqli, $sql);
    header("Location: ../../index.php?action=quanlydonhang&query=bangdulieu");
}
