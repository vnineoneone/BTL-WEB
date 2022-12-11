<?php
$sql = "SELECT * FROM infomation";
$query = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($query);
?>

<div class="card mb-4 table-data" style="width: 100%;">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Bảng dữ liệu thông tin website
    </div>
    <div class="card-body">
        <table class="table" id="datatablesSimple">
            <thead>
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Quản lý</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td>
                        <a href="?action=quanlythongtin&query=sua">
                            <button type="button" class="btn btn-primary">Sửa</button>
                        </a>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
</div>