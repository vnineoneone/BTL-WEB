<?php
session_start();
if (!isset($_SESSION['login_admin'])) {
    header('Location:login.php');
}
$tmp = '';
if (isset($_GET['action']) && isset($_GET['query'])) {
    $temp = $_GET['action'];
    $query = $_GET['query'];
} else {
    $temp = '';
    $query = '';
}

if ($temp == 'quanlydanhmucsanpham' && $query == 'them') {
    $tmp = 'Thêm danh muc sản phẩm';
} else if ($temp == 'quanlydanhmucsanpham' && $query == 'sua') {
    $tmp = 'Sửa danh mục sản phẩm';
} else if ($temp == 'quanlydanhmucsanpham') {
    $tmp = 'Quản lý danh muc sản phẩm';
} else if ($temp == 'quanlysp' && $query == 'them') {
    $tmp = 'Thêm sản phẩm';
} else if ($temp == 'quanlysp' && $query == 'sua') {
    $tmp = 'Sửa sản phẩm';
} else if ($temp == 'quanlysp') {
    $tmp = 'Quản lý sản phẩm';
} else {
    $tmp = 'Dashboard';
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sea Furniture Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://kit.fontawesome.com/8c2b9d94d1.js" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet" />

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php include "config/config.php"; ?>


    <div class="wrapper">
        <?php include "modules/navbar.php"; ?>
        <?php include "modules/sidebar.php"; ?>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><?php echo $tmp ?></h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 main-content">
                            <?php include 'modules/main.php'; ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->

        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>