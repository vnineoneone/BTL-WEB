<?php
$sql_danhmuc = "SELECT * FROM category ORDER BY id_category DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
$sql = "SELECT * FROM infomation";
$query = mysqli_query($mysqli, $sql);
$row_info = mysqli_fetch_array($query);
?>

<nav class="container nav">
    <div class="navtop">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="logo_centers">
                    <a href="index.php" title="Sea Furniture">
                        <img src="./assets/images/logo.png" alt="logo Sea Furniture">
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 area-search">
                <div class="form-search">
                    <div class="form-outline">
                        <input type="search" id="form-search" placeholder="Nhập từ khóa tìm kiếm" />
                    </div>
                    <button type="button" class="btn-search">
                        <i class="fas fa-search fa-lg"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="list-inline">
                    <?php
                    if (isset($_SESSION['login'])) {
                    ?>
                        <div class="list-user">
                            <div class="avatar1">
                                <img class="avatar__image" src="assets/images/item.png" />
                            </div>
                            <div class="dropdown" style="margin-right: 10px;">
                                <a class="user dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Viet Le
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="index.php?logout=1">Đăng xuất</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <a class="cart" href="index.php?quanly=giohang">
                            <i class="fas fa-cart-plus fa-2x" id="logo-cart"></i>
                            <span id="quantity">
                                <?php if (isset($_SESSION['cart'])) {
                                    echo count($_SESSION['cart']);
                                } else {
                                    echo 0;
                                } ?>
                            </span>

                        </a>
                    <?php
                    } else {
                    ?>
                        <ul class="list-account">
                            <li><a href="index.php?quanly=dangnhap">Đăng nhập</a></li>
                            <li><span>|</span></li>
                            <li><a href="index.php?quanly=dangky">Đăng ký</a></li>
                        </ul>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <div class="navbot">
        <div class="row">
            <div class="col-3">
                <div class="menu-cate">
                    <i class="fas fa-bars" style="width: 16px; height: 16px;"></i>
                    <div>DANH MUC SẢN PHẨM</div>
                </div>
            </div>
            <div class="col-6">
                <nav class="navbar navbar-expand-lg navbar-light nav-list">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item nav-item1">
                                    <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
                                </li>
                                <li class="nav-item nav-item1">
                                    <a class="nav-link" href="index.php?quanly=gioithieu">Giới thiệu</a>
                                </li>
                                <li class="nav-item nav-item1 dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Sản phẩm
                                    </a>
                                    <ul class="dropdown-menu drop-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <?php
                                        while ($row = mysqli_fetch_array($query_danhmuc)) {
                                        ?>
                                            <li><a class="dropdown-item drop-item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_category'] ?>"> <?php echo $row['name_category'] ?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item1">
                                    <a class="nav-link" href="index.php?quanly=tintuc">Tin tức</a>
                                </li>
                                <li class="nav-item nav-item1">
                                    <a class="nav-link" href="index.php?quanly=lienhe">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-3">
                <div class="contact">
                    <i class="fas fa-headphones"></i>
                    <span class="hot">Hotline: </span>
                    <span id="hotline"><?php echo $row_info['phone'] ?></span>
                </div>
            </div>
        </div>
    </div>
</nav>