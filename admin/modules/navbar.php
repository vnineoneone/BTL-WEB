<?php
if (isset($_GET['logout']) == 1) {
    unset($_SESSION['login_admin']);
    header('Location: login.php');
}
?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index.php?action=dashboard" class="nav-link">Trang chủ</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Liên hệ</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Tìm kiếm" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu" style="margin-right: 10px;">
            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">
                <img src="images/admin.jpg" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline">Việt Lê</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="right: 0; left: auto;">
                <!-- User image -->
                <li class="user-header bg-primary">
                    <img src="images/admin.jpg" class="img-circle elevation-2" alt="User Image">

                    <p>
                        Việt Lê
                        <small>Quản trị viên</small>
                    </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                    <a href="#" class="btn btn-default btn-flat">Thông tin</a>
                    <a href="#" class="btn btn-default btn-flat float-right">Đăng xuất</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>