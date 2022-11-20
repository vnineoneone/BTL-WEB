<?php
if (isset($_GET['quanly'])) {
    $tmp = $_GET['quanly'];
} else {
    $tmp = '';
}
if ($tmp == "dangky") {
    include "main/signup.php";
} else if ($tmp == "dangnhap") {
    include "main/login.php";
} else {
    include "main/index.php";
}
