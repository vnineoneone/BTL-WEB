<?php
if (isset($_GET['quanly'])) {
    $tmp = $_GET['quanly'];
} else {
    $tmp = '';
}
$link = '';
if ($tmp == "dangky") {
    $link = "Đăng ký";
} else if ($tmp == "dangnhap") {
    $link = "Đăng nhập  ";
} else if ($tmp == "giohang") {
    $link = "Giỏ hàng";
} else if ($tmp == "danhmucsanpham") {
    if (isset($_GET['id'])) {
        $sql = "SELECT * FROM category WHERE id_category = '" . $_GET['id'] . "'";
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($query);
        $link = $row['name_category'];
    } else {
        $link = "Tất cả sản phẩm";
    }
} else if ($tmp == "gioithieu") {
    $link = "Giới thiệu";
} else if ($tmp == "tintuc") {
    $link = "Tin tức";
} else if ($tmp == "lienhe") {
    $link = "Liên hệ";
} else if ($tmp == "taikhoan") {
    $link = "Tài khoản";
} else if ($tmp == "taikhoan/donhang") {
    $link = "Đơn hàng";
} else if ($tmp == "taikhoan/suathongtin") {
    $link = "Sửa thông tin";
} else if ($tmp == "sanpham") {
    $sql = "SELECT * FROM product WHERE id_product = '" . $_GET['id'] . "'";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
    $link = $row['name_product'];
}

?>


<div class="banner1">
    <div class="title-full">
        <div class="title-text">
            <p class="title-page">
                <?php echo $link;  ?>
            </p>
        </div>
    </div>
    <div class="subtitle">
        <ul>
            <li class="home">
                <a href="index.php">
                    <span>Trang chủ</span>
                </a>
                <span class="icon">
                    <i class="fa-solid fa-angle-right"></i>
                </span>
            </li>
            <li>
                <strong><span><?php echo $link;  ?></span></strong>
            </li>
        </ul>
    </div>
</div>