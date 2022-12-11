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
} else if ($tmp == "giohang") {
    include "main/cart.php";
} else if ($tmp == "danhmucsanpham") {
    include "main/category.php";
} else if ($tmp == "gioithieu") {
    include "main/introduce.php";
} else if ($tmp == "tintuc" && isset($_GET['id'])) {
    include "main/news_detail.php";
} else if ($tmp == "tintuc") {
    include "main/news.php";
} else if ($tmp == "lienhe") {
    include "main/contact.php";
} else if ($tmp == "sanpham") {
    include "main/product.php";
} else {
    include "main/index.php";
}
