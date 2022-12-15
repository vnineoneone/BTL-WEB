<!-- <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages1" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Quản lý danh mục sản phẩm
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý chung</a>
                    </nav>
                </div>
                <div class="collapse" id="collapsePages1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="index.php?action=quanlydanhmucsanpham&query=bangdulieu">Bảng dữ liệu</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages2" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Quản lý sản phẩm
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages2" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="index.php?action=quanlysp&query=them">Quản lý chung</a>
                    </nav>
                </div>
                <div class="collapse" id="collapsePages2" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="index.php?action=quanlysp&query=bangdulieu">Bảng dữ liệu</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages3" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Quản lý người dùng
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages3" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="index.php?action=quanlysp&query=them">Quản lý chung</a>
                    </nav>
                </div>
                <div class="collapse" id="collapsePages3" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="index.php?action=quanlysp&query=them">Bảng dữ liệu</a>
                    </nav>
                </div>

                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div> -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="images/admin.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Sea Furniture</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <!-- <li class="nav-item">
                    <a href="index.php?action=dashboard" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="index.php?action=quanlydanhmucsanpham&query=bangdulieu" class="nav-link">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>
                            Quản lý danh mục sản phẩm
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?action=quanlythuonghieu&query=bangdulieu" class="nav-link">
                        <i class="nav-icon fas fa-copyright"></i>
                        <p>
                            Quản lý thương hiệu
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Quản lý sản phẩm
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?action=quanlysp&query=bangdulieu" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quản lý chung</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?action=quanlysp&query=binhluan" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quản lý bình luận</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?action=quanlysp&query=thongke" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thống kê</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="nav-item">
                    <a href="index.php?action=quanlysp&query=bangdulieu" class="nav-link">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Quản lý sản phẩm
                        </p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="index.php?action=quanlykhachhang&query=bangdulieu" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Quản lý người dùng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?action=quanlydonhang&query=bangdulieu" class="nav-link">
                        <i class="nav-icon fas fa-receipt"></i>
                        <p>
                            Quản lý đơn hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?action=quanlybaiviet&query=bangdulieu" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Quản lý bài viết
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?action=quanlythongtin&query=bangdulieu" class="nav-link">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>
                            Quản lý thông tin website
                        </p>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>