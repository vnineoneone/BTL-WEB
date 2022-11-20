<?php
if (isset($_GET['action']) && $_GET['query']) {
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
} else {
    include('modules/dashboard.php');
}
