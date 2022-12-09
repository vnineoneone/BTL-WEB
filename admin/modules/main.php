<?php
if (isset($_GET['action']) && isset($_GET['query'])) {
    $temp = $_GET['action'];
    $query = $_GET['query'];
} else {
    $temp = '';
    $query = '';
}
if ($temp == 'quanlydanhmucsanpham' && $query == 'them') {
    include('modules/quanlydanhmucsp/them.php');
} else if ($temp == 'quanlydanhmucsanpham' && $query == 'bangdulieu') {
    include('modules/quanlydanhmucsp/lietke.php');
} else if ($temp == 'quanlydanhmucsanpham' && $query == 'sua') {
    include('modules/quanlydanhmucsp/sua.php');
} else if ($temp == 'quanlysp' && $query == 'them') {
    include('modules/quanlysp/them.php');
} else if ($temp == 'quanlysp' && $query == 'bangdulieu') {
    include('modules/quanlysp/lietke.php');
} else if ($temp == 'quanlysp' && $query == 'sua') {
    include('modules/quanlysp/sua.php');
} else if ($temp == 'quanlykhachhang' && $query == 'bangdulieu') {
    include('modules/quanlykhachhang/lietke.php');
} else if ($temp == 'quanlykhachhang' && $query == 'them') {
    include('modules/quanlykhachhang/them.php');
} else if ($temp == 'quanlykhachhang' && $query == 'sua') {
    include('modules/quanlykhachhang/sua.php');
} else if ($temp == 'quanlydonhang' && $query == 'bangdulieu') {
    include('modules/quanlydonhang/index.php');
} else if ($temp == 'quanlydonhang' && $query == 'donhang') {
    include('modules/quanlydonhang/xemdonhang.php');
} else {
    include('modules/dashboard.php');
}
