<?php
if (isset($_GET['quanly'])) {
    $tmp = $_GET['quanly'];
} else {
    $tmp = '';
}
?>

<div class="col-xs-12 col-sm-12 col-lg-3 col-left-ac">
    <h5 class="title-account">Trang tài khoản</h5>
    <p>Xin chào, <span style="color:#f7941d;"><?php echo $_SESSION['tenkhachhang'] ?></span>&nbsp;!</p>
    <ul>
        <li>
            <a class="title-info  <?php if ($tmp == "taikhoan") {
                                        echo "active";
                                    } ?>" href="index.php?quanly=taikhoan">Thông tin tài khoản</a>
        </li>
        <li>
            <a class="title-info  <?php if ($tmp == "taikhoan/donhang") {
                                        echo "active";
                                    } ?>" href="index.php?quanly=taikhoan/donhang">Đơn hàng của bạn</a>
        </li>
        <li>
            <a class="title-info  <?php if ($tmp == "taikhoan/suathongtin") {
                                        echo "active";
                                    } ?>" href="index.php?quanly=taikhoan/suathongtin">Sửa thông tin</a>
        </li>
    </ul>
</div>