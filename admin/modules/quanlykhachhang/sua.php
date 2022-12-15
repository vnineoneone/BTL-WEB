<?php
$sql_sua_sp = "SELECT * FROM user WHERE id = '" . $_GET['id'] . "' LIMIT 1";
$query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>

<div class="form-container">
    <?php while ($row = mysqli_fetch_array($query_sua_sp)) { ?>

        <form method="POST" action="modules/quanlykhachhang/xuly.php?id=<?php echo $row['id'] ?>" class="needs-validation" enctype="multipart/form-data">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Kiểu dữ liệu</th>
                        <th scope="col">Nhập dữ liệu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Tên khách hàng</th>
                        <td>
                            <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>" required>
                            <div class="invalid-feedback">
                                Không được để trống tên khách hàng
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>
                            <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>" required>
                            <div class="invalid-feedback">
                                Không được để trống tên email
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Số điện thoại</th>
                        <td>
                            <input type="tel" id="phone" name="phone" class="form-control" pattern="[0-9]{1}[0-9]{9}" value="<?php echo $row['phone'] ?>">
                            <div class="invalid-feedback">
                                Số điện thoại không hợp lệ
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Trạng thái</th>
                        <td>
                            <select class="form-select" name="status">
                                <option value=" 1">Kích hoạt</option>
                                <option value="0">Vô hiệu hóa</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-success" name="suakhachhang">Lưu</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    <?php } ?>

</div>